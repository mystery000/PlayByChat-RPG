<?php
/**    * Fix Require al posto di include
 * Require blocca l'esecuzione dello script se il file è assente
 * dal momento che il file in questione è fondamentale è buona norma applicarlo
 * @author Blancks
 */
require('header.inc.php'); /*Header comune*/

$page = "";
$strInnerPage = "";

/** * Bug fix del mapwise: la gestione dello spostamento della mappa va gestita da main e non da mappaclick
 * @author Blancks
 */
if( ! empty($_GET['map_id'])) {
    $_SESSION['map'] = (int) $_GET['map_id'];
    gdrcd_query("UPDATE characters SET latest_map=".gdrcd_filter('num', $_SESSION['map']).", last_place=-1 WHERE name = '".gdrcd_filter('in', $_SESSION['login'])."'");
}

if(isset($_REQUEST['page'])) {
    $strInnerPage = $_REQUEST['page'];
    $page = "maps";
}

//se e' impostato dir allora cambio stanza.
elseif(isset($_REQUEST['dir']) && is_numeric($_REQUEST['dir'])) {
    if($_REQUEST['dir'] >= 0) {
        $page = "chat";
        $strInnerPage = 'frame_chat';
    } else {
        $page = "maps";
        $strInnerPage = 'mappo';
        $_REQUEST['id_map'] = $_SESSION['map'];
    }
    gdrcd_query("UPDATE characters SET last_place=".gdrcd_filter('num', $_REQUEST['dir'])." WHERE name='".gdrcd_filter('in', $_SESSION['login'])."'");
}

// /** * Caso di fix
//  * se non ci sono variabili via url, si ripristinano dei valori di default
//  * @author Blancks
//  */
else {
    $page = "maps";
    $strInnerPage = 'mappo';
    $_REQUEST['id_map'] = $_SESSION['map'];
}


/**    * Fine caso di Fix */

if(isset($_SESSION['login']) === true) {
    if($_SESSION['allow']) gdrcd_load_modules($page, $strInnerPage);
    else echo "<div class='text-center text-danger fs-4 p-5'><div>Sorry, you have to get permission from administrator</div><div><a href='main.php?page=gameinfo&content=contact_void'>Please send administrator message to ask for permission.</a></div></div>";
} else {
    gdrcd_load_modules('homepage', 'login');
}

require('footer.inc.php');  /*Footer comune*/
