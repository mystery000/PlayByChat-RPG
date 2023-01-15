<?php 
session_start();
require_once(dirname(__FILE__) . '/constant_values.inc.php');
require_once(dirname(__DIR__).'/config.inc.php');
require_once(dirname(__DIR__).'/vocabulary/' . $PARAMETERS['languages']['set']  . '.vocabulary.php');
require_once(dirname(__FILE__) . '/functions.inc.php');
?>