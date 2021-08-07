<?php
//dependency import
require 'properties.php';
require 'lib/Slim/Slim.php';
require 'security/Security.php';

//init Slim Framework
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->add(new \Security($app));
require 'security/Login.php';
require 'security/ManageUser.php';

//resources
	//db NGCPOS_db
		require('./resource/NGCPOS_db/custom/Mode1Custom.php');
		require('./resource/NGCPOS_db/Mode1.php');
		require('./resource/NGCPOS_db/custom/UserCustom.php');
		require('./resource/NGCPOS_db/User.php');
	

$app->run();


?>
