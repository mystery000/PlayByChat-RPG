<?php
//Includio i parametri, la configurazione, la lingua e le funzioni
require ('includes/required.php');

header('Location: index.php?page=homepage&content=login', true);

unset($MESSAGE);
unset($PARAMETERS);

session_unset();
session_destroy();
?>
