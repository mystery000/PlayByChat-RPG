<?php 
//Includo i parametri, la configurazione, la lingua e le funzioni
require_once('../../includes/required.php');
//Eseguo la connessione al database
$handleDBConnection = gdrcd_connect();

if (isset($_POST['name']) && $_POST['name'] && isset($_POST['message']) && $_POST['message']) {
    $name = gdrcd_filter('in', $_POST['name']);
    $message = gdrcd_filter('in', $_POST['message']);
    $sql = "INSERT INTO admin_messages(sender, messages) VALUES('name', 'Some text')";
    gdrcd_query($sql);
    echo json_encode(array('success' => 1, 'message' => 'Success'));
} else {
    echo json_encode(array('success' => 0, 'message' => 'The empty date is requested!'));
}
gdrcd_close_connection($handleDBConnection);

?>