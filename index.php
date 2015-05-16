<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim;
$app->config(array(
    'debug' => true,
    'templates.path', 'templates',
));

$app->get('/', function () use ($app) {
    $app->render('main.php');
});

$app->get('/hello', function () use ($app) {
    $request = $app->request();
    $name = $request->params('name');
    $app->render('hello.php', ["name"=>$name]);
});

$app->run();