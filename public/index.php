<?php

require 'vendor/autoload.php';
date_default_timezone_set('America/New_York');


$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.txt', Monolog\Logger::WARNING));
$log->addWarning('Oh Noes.');


$app = new \Slim\Slim();

$view = $app->view();
$view->parserOptions = array(
	'debug' => true;
);

$view->parserExtension = array(
	new \Slim\Views\TwigExtension();
);

$app->get('/', function() use($app) {
	$app->render('about.twig');
})->name('about');

$app->run();