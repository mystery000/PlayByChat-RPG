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
$PARAMETERS['info']['login'] = 'LOGIN'; //nome del responsabile del database
$PARAMETERS['info']['signup'] = 'SIGNUP'; //nome del responsabile del database
/* HELP: I parametri di questa voce compaiono come informazioni sulla homepage. */
/* OPZIONI DEL GIOCO */
$PARAMETERS['settings']['protection'] = 'OFF'; //ON per attivare il sistema di protezione con password d'accesso
$PARAMETERS['settings']['protection_password'] = 'gdrcd'; //password per accedere al gioco in caso di sistema di protezione attivo
$PARAMETERS['settings']['first_map'] = -1;//ID della mappa corrispondente al primo login
$PARAMETERS['settings']['first_money'] = 50;//Quantita' di denaro iniziale per i PG
$PARAMETERS['settings']['posts_per_page'] = 15;//Numero di post per pagina visualizzati nei forum
$PARAMETERS['settings']['records_per_page'] = 15;//Numero di record per pagina visualizzati nei pannelli gestione
$PARAMETERS['settings']['messages_per_page'] = 40;//Numero di messaggi visualizzati per pagina nel sistema di messaggistica privata
$PARAMETERS['settings']['messages_limit'] = 50;//Numero di messaggi privati oltre il quale appare il suggerimento di cancellarli
$PARAMETERS['settings']['minimum_employment'] = 10;//Numero di giorni entro i quali non è possibile scegliere un'altro lavoro o essere esclusi da una gilda.
$PARAMETERS['settings']['guilds_limit'] = 2;//Numero massimo di gilde a cui si può essere affiliati. Il numero tiene conto delle gilde di cui un personaggio è membro e dell'eventuale lavoro indipendente che svolte. In ogni caso il sistema permette di svolgere un unico lavoro indipendente. La paga giornaliera del personaggio e' la somma degli introiti di tutti i ruoli di gilda e dell'eventuale lavoro che riveste.
$PARAMETERS['settings']['resell_price'] = 30; //Percentuale di svalutazione degli oggetti rivenduti al mercato.
$PARAMETERS['settings']['first_px'] = 100;//Esperienza iniziale. Se il gioco non prevede abilità dovrebbe essere 0.
$PARAMETERS['settings']['max_hp'] = 100;//Punti ferita.
$PARAMETERS['settings']['px_x_rank'] = 10; //Costo in px per rango di abilità. Il valore di questo campo viene moltiplicato al rango successivo dell'abità per determinarne il costo. Es: Se il valore è 10 e il rango da aquisite è 5 il suo costo è 5x10=50px.
$PARAMETERS['settings']['skills_cap'] = 10;//Punteggio massimo per un'abilità.
$PARAMETERS['settings']['initial_cars_cap'] = 10;//Punteggio massimo iniziale per una caratteristica.
$PARAMETERS['settings']['cars_cap'] = 10;//Punteggio massimo per una caratteristica.
$PARAMETERS['settings']['cars_sum'] = 40;//Punteggio totale da distribuire tra le caratteristiche in fase di iscrizione.
$PARAMETERS['settings']['view_logs'] = 10; //Numero di log visualizzato.
$PARAMETERS['settings']['auto_salary'] = 'OFF'; //ON per attivare l'accredito automatico dello stipendio al primo login

/**
 * Parametri per tutti i casi in cui viene usato HTML filtrato
 * Controlla quanto pesantemente filtrare il codice HTML per ragioni di sicurezza. Ci sono 2 livelli:
 * HTML_FILTER_BASE: filtra solo le cose più pericolose, come gli iframe, gli object e javascript
 * HTML_FILTER_HIGH: filtra anche tutte le immagini
 */
$PARAMETERS['settings']['html'] = 0;
?>