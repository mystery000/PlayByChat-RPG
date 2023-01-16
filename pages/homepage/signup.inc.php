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
                    <button type="submit" class="btn btn-primary">Create</button><br>
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
                        $sql = "SELECT * FROM user WHERE email='{$email}'";
                        $rows = gdrcd_query($sql, "result");
                        if (gdrcd_query($rows, 'num_rows') > 0) {
                            gdrcd_query($rows, 'free');
                            echo gdrcd_filter('out', $MESSAGE['register']['error']['email_taken']);
                        } else {
                            $pass = gdrcd_genera_pass();
                            $pass_encript = gdrcd_encript($pass);
                            $email_encript = gdrcd_encript($email);
                            $sql = "INSERT INTO user(email, name, password) VALUES('{$email_encript}','{$name}','$pass_encript')";
                            gdrcd_query($sql);
                            gdrcd_redirect("index.php?page=homepage&content=home");
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
