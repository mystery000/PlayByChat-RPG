<?php 
/* INFORMAZIONI SU GDRCD */
$PARAMETERS['info']['GDRCD'] = '5.6.0.5'; //versione di GDRCD

/* PARAMETRI DI CONNESSIONE */
$PARAMETERS['database']['username'] = 'root';            //nome utente del database
$PARAMETERS['database']['password'] = '';            //password del database
$PARAMETERS['database']['database_name'] = 'gdrcd_test';    //nome del database
$PARAMETERS['database']['url'] = 'localhost';        //indirizzo ip del database

/* SCELTA DELLA LINGUA */
$PARAMETERS['languages']['set'] = 'en-US'; //lingua italiana
/* HELP: Per definire un diverso vocabolario creare una copia del file /vocabulary/IT-it.vocabulary.php nella cartella vocabulary. Il nome del file deve essere [nome].vocabulary.php, dove la stringa [nome] può essere scelta e deve essere il valore specificato in $PARAMETER['languages']['set']. */

/* INFORMAZIONI SUL SITO */
$PARAMETERS['info']['site_name'] = 'GDRCD 5.6.0.5'; //nome del gioco
$PARAMETERS['info']['site_url'] = 'http://gdrcd.test/'; //indirizzo URL del gioco
$PARAMETERS['info']['webmaster_name'] = 'Webmaster'; //nome e cognome del responsabile del sito
$PARAMETERS['info']['webmaster_email'] = 'webmaster@gdrhost.it'; //email ufficiale del webmaster (è visibile in homepage)
$PARAMETERS['info']['homepage_name'] = 'Homepage'; //nome con il quale si indica la prima pagina visualizzata
$PARAMETERS['info']['dbadmin_name'] = 'Admin DB'; //nome del responsabile del database
/* HELP: I parametri di questa voce compaiono come informazioni sulla homepage. */

?>