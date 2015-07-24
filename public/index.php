<?php

date_default_timezone_set('America/New_York');
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function(){
	echo "hello world";
});

$app->run();