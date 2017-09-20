<?php

use PapFull\Models\User;
use PapFull\Models\Level;
use PapFull\Models\Permission;

$app->get('/', function() use ($app) {

    User::verifyLogin();

    $user = new User();

    $user->get((int) $_SESSION[User::SESSION]['iduser']);

    $app->render('admin/header.php', $user->getValues());
    $app->render('default/panel.php');
    $app->render('admin/index.php');
    $app->render('default/footer.php');
    $app->render('admin/script.php');
});