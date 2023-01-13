<?php
header('Content-Type:text/html; charset=UTF-8');
require_once('includes/required.php');
?>
<!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- IE9: mi stai ampiamente rompendo i maroni. -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <link rel="shortcut icon" href="imgs/favicon.ico" type="image/png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
        <title>
            <?php echo $PARAMETERS['info']['site_name']; ?>
        </title>
    </head>
    <body class="main_body">
        <h1 style='color: red'>Index.php</h1>
    </body>
</html>
<?php

?>