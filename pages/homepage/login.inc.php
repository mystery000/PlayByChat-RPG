<div class='login'>
    <div class='hole'>
        <img src='imgs/bg.jpg'/>
        <div class='centered w-25 fs-5'>
            <form action="<?php echo $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING']; ?>" id='do_login' method='post'>
                <!-- Email input -->
                <div class="form-outline mb-2">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="name" name='name' class="form-control" value='<?= isset($_POST['name']) ? $_POST['name'] : ''?>'/>
                </div>
                <!-- Password input -->
                <div class="form-outline mb-2">
                    <label class="form-label" for="password">Password</label><br>
                    <input class="form-control" type="password" id="password" name='password' />
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-dark">Sign in</button><br>
                    <a href='index.php?page=homepage&content=signup' style="text-decoration:none;">Click here to register your account</a>
                </div>
            </form>
            <div class='error text-danger'>
                <?php
         
                    $name = isset($_POST['name']) ? $_POST['name'] : false;
                    $password = isset($_POST['password']) ? $_POST['password'] : false;
                    $name = $name == ''? false : $name;
                    $password = $password == ''? false : $password;
                    if(!$name && !$password) {}
                    else if($name && $password) {
                        $record = gdrcd_query("SELECT * FROM characters WHERE name='{$name}'"."LIMIT 1");
                        $_SESSION['map'] = (empty($record['latest_map']) === true) ? 1 : $record['latest_map'];
                        $_SESSION['place'] = (empty($record['last_place']) === true) ? -1 :  $record['last_place'];
                        
                        if(!empty($record) && gdrcd_password_check($password, $record['password'])) {
                            $_SESSION['login'] = gdrcd_filter_in($record['name']);
                            $_SESSION['allow'] = gdrcd_filter_in($record['allow']);
                            $_SESSION['admin'] = gdrcd_filter_in($record['admin']);
                            $_SESSION['timeout'] = time();
                            $sql = "UPDATE characters SET online_status=1 WHERE name='{$_SESSION['login']}'";
                            gdrcd_query($sql);
                            header('Location: mappa.php?page=mappo&map_id='.$_SESSION['map'], true);                         
                        }
                        if(empty($record)) {
                            echo gdrcd_filter('out', $MESSAGE['login']['error']['account_needed']);
                        } else {
                            echo gdrcd_filter('out', $MESSAGE['login']['error']['password_needed']);
                        }
                    } else {
                        echo gdrcd_filter('out', $MESSAGE['login']['error']['empty']);
                    }
                    unset($_POST['name']);
                    unset($_POST['password']);
            
                ?>
            </div>
        </div>
    </div> 
</div>
