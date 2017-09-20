<?php

use PapFull\Models\User;
use PapFull\Models\Level;
use PapFull\Models\Permission;
use PapFull\Models\Module;
use PapFull\Models\ConsultCNPJ;
use PapFull\Models\ConsultConection;
use PapFull\Models\Company;

$app->get('/company', function() use ($app) {
    User::verifyLogin();

    $user = new User();
    $user->get((int) $_SESSION[User::SESSION]['iduser']);
    
    $company = Company::verifyCompany();
    
    if (count($company) > 0) {
        $app->render('company/header.php', $user->getValues());
        $app->render('default/panel.php');
        $app->render('company/company.php', array(
            'company' => $company
        ));
        $app->render('default/footer.php');
        $app->render('company/script.php');
    } else {
        header("location: /company/create");
        exit;
    }

    
});

$app->get('/company/create', function() use ($app) {
    User::verifyLogin();

    $user = new User();
    $user->get((int) $_SESSION[User::SESSION]['iduser']);
    
    if ($connInternet = ConsultConection::connInternet()) {
        $params = ConsultCNPJ::getParams();
    } else {
        $params = NULL;
    }
    
    if (isset($_SESSION['data'])) {
        $data = $_SESSION['data'];
        unset($_SESSION['data']);
    } else {
        $data = NULL;
    }

    $app->render('company/header.php', $user->getValues());
    $app->render('default/panel.php');
    $app->render('company/company-create.php', array(
        'params' => $params,
        'company' => $data
    ));
    $app->render('default/footer.php');
    $app->render('company/script.php');
});

$app->post('/company/create', function() {
    User::verifyLogin();

    $data = $_POST;

    if (array_key_exists("cookie", $data)) {
        $data = ConsultCNPJ::consulta($_POST['cnpjConsult'], $_POST['captcha'], $_POST['cookie']);
        if (count($data) > 0) {
            array_push($data, $_POST['cnpjConsult']);
            $_SESSION['data'] = $data;
        }
        header("location: /company/create");
        exit;
    }
});