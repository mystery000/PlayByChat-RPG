<?php
header('Content-Type:text/html; charset=UTF-8');

//Includo i parametri, la configurazione, la lingua e le funzioni
require_once('includes/required.php');

//Eseguo la connessione al database
$handleDBConnection = gdrcd_connect();

/*
 * Definizione pagina da visualizzare
 */
$page = (!empty($_GET['page']) && $_GET['page'] != 'homepage') ? 'homepage__' . gdrcd_filter('include', $_GET['page']) : 'homepage';
$content = (!empty($_GET['content'])) ? gdrcd_filter('include', $_GET['content']) : 'home';

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
    <title>
        <?php echo $PARAMETERS['info']['site_name']; ?>
    </title>
</head>

<body class="main"> 
    <div>
        <?php  
            // Header 
            include('pages/homepage/header.php');
            // Content
            gdrcd_load_modules($page, $content);
            // Footer
            include('pages/homepage/footer.php');
        ?>
    <div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<?php
/*Chiudo la connessione al database*/
gdrcd_close_connection($handleDBConnection);
/**    * Per ottimizzare le risorse impiegate le liberiamo dopo che non ne abbiamo pi� bisogno
 * @author Blancks
 */
unset($MESSAGE);
unset($PARAMETERS);
?>