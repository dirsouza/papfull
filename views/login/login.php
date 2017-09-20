<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="../../src/img/favicon.png" type="image/x-icon" />
        <title>PapFull | v1.0.0</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="../../src/style/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../src/style/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../../src/style/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../src/style/template-style/css/AdminLTE.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="/login">
                    <img src="../../src/img/imgPAPFull_header.png" width="270" height="65">
                </a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Autenticação de Usuário</p>

                <form id="frmLogin" action="/login" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" name="login" id="login" class="form-control" placeholder="Usuário" autofocus="true">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Senha">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <a href="/forgot">Esqueci minha senha</a><br>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="../../src/style/jquery/dist/jquery.min.js"></script>
        <script src="../../src/style/jquery-validation/dist/jquery.validate.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="../../src/style/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script>
            $('#frmLogin').validate({
                rules: {
                    'login': {
                        'required': true,
                        'minlength': 2
                    },
                    'pass': {
                        'required': true,
                        'rangelength': [5,10]
                    }
                },
                messages: {
                    'login': {
                        'required': "<small><font color='red'>O nome de Usuário é obrigatório.</font></small>",
                        'minlength': "<small><font color='red'>Mínimo de 2 caracteres.</font></small>"
                    },
                    'pass': {
                        'required': "<small><font color='red'>A Senha é obrigatória.</font></small>",
                        'rangelength': "<small><font color='red'>Mínimo de 5 e máximo de 10 caracteres.</font></small>"
                    },
                },
                errorElement: "em",
                highlight: function (element, errorClass, validClass) {
                    $(element).parents(".form-group").addClass("has-error").removeClass("has-success");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents(".form-group").addClass("has-success").removeClass("has-error");
                }

            });
        </script>
    </body>
</html>