<?php
//Includio i parametri, la configurazione, la lingua e le funzioni
require ('includes/required.php');
gdrcd_query("UPDATE characters SET characters.online_status=0 WHERE characters.name='{$_SESSION['login']}'");
header('Location: index.php?page=homepage&content=login', true);

unset($MESSAGE);
unset($PARAMETERS);

session_unset();
session_destroy();
?>
