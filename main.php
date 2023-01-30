<?php

require('header.inc.php'); /*Header comune*/

$page = "";
$content = "";

if(isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
}

if(isset($_REQUEST['content'])) {
    $content = $_REQUEST['content'];
}



if(isset($_SESSION['login']) === true) {
    echo "<div class='gameinfo'>";
    gdrcd_load_modules($page, $content);
    echo "</div>";
} else {
    gdrcd_load_modules('homepage', 'login');
}

require('footer.inc.php');  /*Footer comune*/
