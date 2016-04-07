<?php
 
/** Configuration Variables **/

define ('DEVELOPMENT_ENVIRONMENT',false);

 
define('DB_NAME', 'warziko');
define('DB_USER', 'juri');
define('DB_PASSWORD', '123');
define('DB_HOST', 'localhost');

	if(DEVELOPMENT_ENVIRONMENT == true){
		error_reporting(E_ALL);
		ini_set('display_errors', 'On');
	}
	else{
		error_reporting(E_ALL);
		ini_set('display_errors', 'off');
		ini_set('lpg_errors', 'On');
		ini_set('error_log', '../tmp/logs/error.log');
	}
?>