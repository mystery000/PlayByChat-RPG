<?php 
/********** MESSAGGI DI ERRORE **********/
$MESSAGE['error']['db_not_found'] = 'Could not find database, check your GDRCD installation.';
$MESSAGE['error']['db_empty'] = 'The database does not contain any tables, installation is required';
$MESSAGE['error']['session_expired'] = 'Your session has expired or you are not logged in.';
/* Errori di login*/
$MESSAGE['error']['unknown_username'] = 'Unrecognized username or password.';
$MESSAGE['error']['unknown_username_details'] = 'Perform the login procedure again.';
$MESSAGE['error']['unknown_username_failure_count'] = 'Bankruptcy number:';
$MESSAGE['error']['unknown_username_warning'] = 'With 10 consecutive failures you will be barred from accessing your current position.';

/********** INFORMAZIONI E SUGGERIMENTI **********/
$MESSAGE['warning']['blacklisted'] = 'This station has been excluded from the game!';
$MESSAGE['warning']['please_login_again'] = 'To log in again, go back to';

$MESSAGE['interface']['page_missing'] = 'Page parameter missing';
$MESSAGE['interface']['page_not_found'] = 'Page not found';

$MESSAGE['register']['error']['email_taken'] = 'There is already an account registered with this email';
$MESSAGE['register']['error']['name_taken'] = 'There is already an account registered with character name';
$MESSAGE['register']['error']['email_needed'] = 'Specificare un\'email valida.';
$MESSAGE['register']['error']['adult_needed'] = "Si prega di controllare l'età"; 
$MESSAGE['register']['error']['empty'] = "Email or Password is empty!";
$MESSAGE['login']['error']['account_needed'] = "Unregisted User";
$MESSAGE['login']['error']['account_password'] = "Password is wrong, please try again.";
$MESSAGE['login']['error']['empty'] = "Name or Password is empty!";
?>