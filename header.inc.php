<?php
header('Content-Type:text/html; charset=UTF-8');
//Includo i parametri, la configurazione, la lingua e le funzioni
require_once('includes/required.php');
//Eseguo la connessione al database
$handleDBConnection = gdrcd_connect();
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
    <link rel="stylesheet" href="themes/homepage/homepage.css" type="text/css"/>
    <!-- <link rel="stylesheet" href="themes/advanced/main.css" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="themes/advanced/chat.css" type="text/css" /> -->
    <link rel="stylesheet" href="themes/advanced/map.css" type="text/css" />
    <link rel="stylesheet" href="themes/advanced/chat.css" type="text/css" />
    <title>
        <?php echo $PARAMETERS['info']['site_name']; ?>
    </title>
</head>

<body class="main"> 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <div class="navbar-brand dropdown">
      <img src="imgs/img_avatar1.png" alt="Logo" style="width:40px;" class="rounded-pill dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" type="button">
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      </ul>
    </div>
    <a class="navbar-brand" href="main.php?page=mappo&map_id=<?= $_SESSION['map'] ?>"> Go to Map</a>
    <a class="navbar-brand" href="#"> Character Sheet</a>
    <a class="navbar-brand" href="#"> Private Messages</a>
    <a class="navbar-brand" href="#"> Online Players</a>
  </div>
  
</nav>