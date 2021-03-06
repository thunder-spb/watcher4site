<?php
/*
	Watcher4site 
	(c) 2014 Novostrim, OOO. http://www.novostrim.com
	License: MIT
*/

$result = array( 'success'=> true, 'err' => 1, 'result' => 0, 'temp' => '' );
require_once '../app.inc.php';
require_once '../conf.inc.php';
require_once 'lib.php';
require_once "extmysql.class.php";

function api_error( $err, $temp ='' )
{
	global $result;
   	$result['success'] = false;      
   	$result['err'] = $err;
   	$result['temp'] = $temp;
}

$db = new ExtMySQL( array( 'db' => CONF_DB, 'user' => defined( 'CONF_USER' ) ? CONF_USER : '',
		         'pass' => defined( 'CONF_PASS' ) ? CONF_PASS : '' ));
login();

if ( !$USER )
{
	api_error( 'err_login' );
//	$result['err'] = 'err_login';
//	$result['code'] = false;
}

?>