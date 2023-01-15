<div class='signup'>
    <div class='hole'>
        <img src='imgs/bg.jpg'/>
        <div class='centered'>
            <form action="<?php echo $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING']; ?>" id='do_signup' method='post'>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="loginName">Email</label>
                    <input type="email" id="email" name='email' class="form-control" value='<?= isset($_POST['email']) ? $_POST['email'] : ''?>'/>
                </div>
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="isAdult">Dichiaro di essere maggiorenne</label><br>
                    <input class="form-check-input" type="checkbox" id="adult" name='adult' checked=<?= isset($_POST['adult']) ? true : false?>>
                </div>
            </form>
            <div class='error text-danger'>
                <?php
                     $email = isset($_POST['email']) ? $_POST['email'] : false;
                     $adult = isset($_POST['adult']) ? $_POST['adult'] : false;

                    if($email && $adult){
                        $sql = "SELECT * FROM user WHERE email='{$email}'";
                        $rows = gdrcd_query($sql, "result");
                        if (gdrcd_query($rows, 'num_rows') > 0) {
                            gdrcd_query($rows, 'free');
                            echo gdrcd_filter('out', $MESSAGE['register']['error']['email_taken']);
                        } else {
                            $sql = "INSERT INTO user(email) VALUES('{$email}')";
                            gdrcd_query($sql);
                            gdrcd_redirect("index.php?page=homepage&content=home");
                        }
                    }
                    else if(!$adult){
                        echo gdrcd_filter('out', $MESSAGE['register']['error']['adult_needed']);
                    }
                ?>
            </div>
        </div>
    </div> 
</div>
