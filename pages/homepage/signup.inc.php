<div class='signup'>
    <div class='hole'>
        <img src='imgs/bg.jpg'/>
        <div class='centered'>
            <form action="<?php echo $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING']; ?>" id='do_signup' method='post'>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="loginName">Email</label>
                    <input type="email" id="email" name='email' class="form-control" value=''/>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Charater Name</label>
                    <input type="text" id="name" name='name' class="form-control" value=''/>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="isAdult">Dichiaro di essere maggiorenne</label><br>
                    <input class="form-check-input" type="checkbox" id="adult" name='adult' />
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-dark">Create</button><br>
                </div>
            </form>
            <div class='error text-danger'>
                <?php
                     $email = isset($_POST['email']) ? $_POST['email'] : false;
                     $name = isset($_POST['name']) ? $_POST['name'] : false;
                     $adult = isset($_POST['adult']) ? $_POST['adult'] : false;
                     $email = $email == ''? false : $email;
                     $name = $name == ''? false : $name;
                     $adult = $adult == 'on'? true: false;
                    if(!$email && !$adult && !$name) {}
                    else if($email && $adult && $name){
                        $allow = true;
                        $result = gdrcd_query("SELECT email FROM characters", 'result');
                        foreach($result as $pg) {
                            if (gdrcd_password_check($email, $pg['email'])) {
                                echo gdrcd_filter('out', $MESSAGE['register']['error']['email_taken']);
                                $allow = false;
                                break;
                            }
                        }
                        if($allow){
                            $sql = "SELECT * FROM characters WHERE name='{$name}'";
                            $rows = gdrcd_query($sql, "result");
                            if (gdrcd_query($rows, 'num_rows') > 0) {
                                gdrcd_query($rows, 'free');
                                echo gdrcd_filter('out', $MESSAGE['register']['error']['name_taken']);
                            } else {
                                $pass = gdrcd_genera_pass();
                                /*
                                    send $pass and $name to email address
                                */
                                $subject = "The Experiment - Recording by {$name}";
                                $content = "Character name: {$name}<br>Password: {$pass}";
                                $response = gdrcd_send_email($email, $subject, $content);

                                $pass_encript = gdrcd_encript($pass);
                                $email_encript = gdrcd_encript($email);
                                $sql = "INSERT INTO characters(email, name, password, online_status) VALUES('{$email_encript}','{$name}','$pass_encript', 1)";
                                gdrcd_query($sql);
                                $_SESSION['login'] = gdrcd_filter_in($name);
                                $_SESSION['allow'] = false;
                                $_SESSION['map'] = 1; 
                                $_SESSION['timeout'] = time();
                                header('Location: main.php?page=mappo&map_id='.$_SESSION['map'], true);
                            }
                        }                       
                    }
                    else if(!$adult){
                        echo gdrcd_filter('out', $MESSAGE['register']['error']['adult_needed']);
                    } else {
                        echo gdrcd_filter('out', $MESSAGE['register']['error']['empty']);
                    }
                ?>
            </div>
        </div>
    </div> 
</div>
