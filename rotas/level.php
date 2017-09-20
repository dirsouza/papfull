<?php

use PapFull\Models\Module;
use PapFull\Models\User;
use PapFull\Models\Level;
use PapFull\Models\Permission;

$app->get('/levels', function() use ($app) {
    User::verifyLogin();

    $user = new User();

    $user->get((int) $_SESSION[User::SESSION]['iduser']);

    $levels = Level::listAll();

    $app->render('level/header.php', $user->getValues());
    $app->render('default/panel.php');
    $app->render('level/level.php', array(
        'levels' => $levels
    ));
    $app->render('default/footer.php');
    $app->render('level/script.php');
});

$app->get('/levels/create', function() use ($app) {
    User::verifyLogin();

    $user = new User();
    $user->get((int) $_SESSION[User::SESSION]['iduser']);

    $modules = Module::listAll();

    $app->render('level/header.php', $user->getValues());
    $app->render('default/panel.php');
    $app->render('level/level-create.php', array(
        'modules' => $modules
    ));
    $app->render('default/footer.php');
    $app->render('level/script.php');
});

$app->post('/levels/create', function() {

    User::verifyLogin();

    $data = $_POST;

    $permission = new Permission();
    $permission->operationType("insert", $data);

    header("location: /levels");

    exit;
});

$app->get('/levels/:idlevel/delete', function($idlevel) {

    User::verifyLogin();

    $level = new Level();

    $level->select((int) $idlevel);

    $level->delete();

    header("location: /levels");

    exit;
});

$app->get('/levels/update/:idlevel', function($idlevel) use ($app) {
    User::verifyLogin();

    $user = new User();
    $user->get((int) $_SESSION[User::SESSION]['iduser']);

    $modules = Module::listAll();
    $levels = Level::listLevelPermission((int) $idlevel);

    $app->render('level/header.php', $user->getValues());
    $app->render('default/panel.php');
    $app->render('level/level-update.php', array(
        'modules' => $modules,
        'levels' => $levels
    ));
    $app->render('default/footer.php');
    $app->render('level/script.php');
});

$app->post('/levels/update/:idlevel', function($idlevel) {

    User::verifyLogin();

    $data = $_POST;

    $permission = new Permission();
    $permission->operationType("update", $data, $idlevel);

    header("location: /levels");

    exit;
});