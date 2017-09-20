<?php

use PapFull\Models\User;
use PapFull\Models\Level;
use PapFull\Models\Permission;

$app->get('/users', function() use ($app) {

    User::verifyLogin();

    $user = new User();

    $user->get((int) $_SESSION[User::SESSION]['iduser']);

    $users = User::listAll();

    $app->render('user/header.php', $user->getValues());
    $app->render('default/panel.php');
    $app->render('user/user.php', array(
        'users' => $users
    ));
    $app->render('default/footer.php');
    $app->render('user/script.php');
});

$app->get('/users/create', function() use ($app) {

    User::verifyLogin();

    $user = new User();

    $user->get((int) $_SESSION[User::SESSION]['iduser']);

    $levels = Level::listAll();

    $app->render('user/header.php', $user->getValues());
    $app->render('default/panel.php');
    $app->render('user/user-create.php', array(
        'level' => $levels
    ));
    $app->render('default/footer.php');
    $app->render('user/script.php');
});

$app->post('/users/create', function() {

    User::verifyLogin();

    $user = new User();

    $user->setData($_POST);

    $user->insert();

    header("location: /users");

    exit;
});

$app->get('/users/:iduser/delete', function($iduser) {

    User::verifyLogin();

    $user = new User();

    $user->get((int) $iduser);

    $user->delete();

    header("location: /users");

    exit;
});

$app->get('/users/update/:iduser', function($iduser) use ($app) {
    User::verifyLogin();

    $user = new User();
    $userEdit = new User();

    $user->get((int) $_SESSION[User::SESSION]['iduser']);
    $userEdit->get((int) $iduser);

    $levels = Level::listAll();

    $app->render('user/header.php', $user->getValues());
    $app->render('default/panel.php');
    $app->render('user/user-update.php', array(
        'userEdit' => $userEdit->getValues(),
        'level' => $levels
    ));
    $app->render('default/footer.php');
    $app->render('user/script.php');
});

$app->post('/users/update/:iduser', function($iduser) {

    User::verifyLogin();

    $user = new User();

    $user->get((int) $iduser);

    $user->setData($_POST);

    $user->update();

    header("location: /users");

    exit;
});

$app->get('/users/pass/:iduser', function($iduser) use ($app) {
    User::verifyLogin();

    $user = new User();
    $userEdit = new User();

    $user->get((int) $_SESSION[User::SESSION]['iduser']);
    $userEdit->get((int) $iduser);

    $app->render('user/header.php', $user->getValues());
    $app->render('default/panel.php');
    $app->render('user/user-reset-pass.php', array(
        'userEdit' => $userEdit->getValues()
    ));
    $app->render('default/footer.php');
    $app->render('user/script.php');
});

$app->post('/users/pass/:iduser', function($iduser) {

    User::verifyLogin();

    $user = new User();

    $user->get((int) $iduser);

    $user->setData($_POST);

    $user->updatePass();

    header("location: /users");

    exit;
});