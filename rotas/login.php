<?php

use PapFull\Models\User;
use PapFull\Models\Level;
use PapFull\Models\Permission;

$app->get('/login', function() use ($app) {
    $app->render('login/login.php');
});

$app->get('/login/error', function() use ($app) {
    $app->render('login/login-error.php');
});

$app->post('/login', function() use ($app) {
    User::login($_POST['login'], $_POST['pass']);

    header("location: /");

    exit;
});

$app->get('/logout', function() use ($app) {
    User::logout();

    $app->render("login/login.php");
});