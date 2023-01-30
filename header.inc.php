<?php
header('Content-Type:text/html; charset=UTF-8');
//Includo i parametri, la configurazione, la lingua e le funzioni
require_once('includes/required.php');
//Eseguo la connessione al database
$handleDBConnection = gdrcd_connect();
gdrcd_controllo_sessione();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- IE9: mi stai ampiamente rompendo i maroni. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="themes/advanced/mappa.css" type="text/css" />
    <link rel="stylesheet" href="themes/advanced/map.css"  type="text/css" />
    <link rel="stylesheet" href="themes/advanced/chat.css" type="text/css" />
    <link rel="stylesheet" href="themes/advanced/main.css" type="text/css" />
    <title>
        <?php echo $PARAMETERS['info']['site_name']; ?>
    </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="main"> 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid d-flex justify-content-">  
    <a class="navbar-brand" href="mappa.php?page=mappo&map_id=<?= $_SESSION['map'] ?>">Go to Map</a>
    <a class="navbar-brand" href="main.php?page=gameinfo&content=character_sheet">Character Sheet</a>
    <a class="navbar-brand" href="main.php?page=gameinfo&content=online_players">Online Players</a>
    <a class="navbar-brand" href="logout.php">LOGOUT</a>
  </div>
  
</nav>