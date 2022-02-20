<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__).'/vendor/autoload.php';
require_once dirname(__FILE__).'/services/SendMail.class.php';
require_once dirname(__FILE__).'/services/Fitnes.class.php';

Flight::set('flight.log.errors', TRUE);

/* register Bussiness Logic layer services */
Flight::register('SendMail', 'SendMail');
Flight::register('Fitnes', 'Fitnes');

/* include all routes */
require_once dirname(__FILE__)."/routes/Mail.class.php";
require_once dirname(__FILE__)."/routes/Fitnes.class.php";

Flight::start();

?>