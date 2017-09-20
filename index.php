<?php

session_start();

require_once "vendor/autoload.php";

use Slim\Slim;

$app = new Slim();

$app->config(array(
    'debug' => true,
    'templates.path' => './views',
    'mode' => 'development'
));

require_once './rotas/admin.php';
require_once './rotas/login.php';
require_once './rotas/forgot.php';
require_once './rotas/user.php';
require_once './rotas/level.php';
require_once './rotas/company.php';

$app->run();
