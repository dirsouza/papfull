<?php

$app->get('/forgot', function() use ($app) {
    $app->render('forgot/forgot.php');
});

$app->get('/forgot/sent', function() use ($app) {
    $app->render('forgot/forgot-sent.php');
});

$app->get('/forgot/reset', function() use ($app) {
    $app->render('forgot/forgot-reset.php');
});

$app->get('/forgot/reset/success', function() use ($app) {

    $app->render('forgot/forgot-reset-success.php');
});