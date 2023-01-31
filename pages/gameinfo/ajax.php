<?php 
//Includo i parametri, la configurazione, la lingua e le funzioni
require_once('../../includes/required.php');
//Eseguo la connessione al database
$handleDBConnection = gdrcd_connect();

if(isset($_POST['playerId']) && isset($_POST['playerRace']) && isset($_POST['playerDream'])) {
    $playerId = gdrcd_filter('in', $_POST['playerId']);
    $playerRace = gdrcd_filter('in', $_POST['playerRace']);
    $playerDream = gdrcd_filter('in', $_POST['playerDream']);
    $playerAllow = false;
    if(isset($_POST['playerAllow'])) $playerAllow = true;
    $sql = "UPDATE characters SET race='{$playerRace}', allow='{$playerAllow}', dreams='{$playerDream}' WHERE id='{$playerId}'";
    gdrcd_query($sql);
    $playerAllow = $playerAllow? 1 : 0;
    echo json_encode(array('success' => 1, 'message' => [$playerId, $playerRace, $playerDream, $playerAllow]));
}
else if(isset($_POST['txtMemo']) && $_POST['txtMemo']) {
    $memories = gdrcd_filter('in', $_POST['txtMemo']);
    $sql = "UPDATE characters SET memories='{$memories}' WHERE name='{$_SESSION['login']}'";
    gdrcd_query($sql);
    echo json_encode(array('success' => 1, 'message' => $memories));
}
else if (isset($_POST['message']) && $_POST['message']) {
    $name = gdrcd_filter('in', $_SESSION['login']);
    $message = gdrcd_filter('in', $_POST['message']);
    $sql = "INSERT INTO admin_messages(sender, messages) VALUES('{$name}', '{$message}')";
    gdrcd_query($sql);
    echo json_encode(array('success' => 1, 'message' => 'Success'));
} else {
    echo json_encode(array('success' => 0, 'message' => 'The empty data is requested!'));
}
gdrcd_close_connection($handleDBConnection);

?>