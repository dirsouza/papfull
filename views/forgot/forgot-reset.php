<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="../../src/img/favicon.png" type="image/x-icon" />
        <title>PapFull | v1.0.0</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../src/style/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../src/style/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../../src/style/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../src/style/template-style/css/AdminLTE.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition lockscreen">
        <!-- Automatic element centering -->
        <div class="lockscreen-wrapper">
            <div class="lockscreen-logo">
                <a href="/forgot">
                    <img src="../../src/img/imgPAPFull_header.png" width="270" height="65">
                </a>
            </div>

            <div class="help-block text-center">
                Olá {$name}, digite sua nova senha:
            </div>

            <!-- START LOCK SCREEN ITEM -->
            <div class="lockscreen-item">

                <!-- lockscreen credentials (contains the form) -->
                <form  action="/admin/forgot/reset" method="post">
                    <input type="hidden" name="code" value="{$code}">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Digite a nova senha" name="password">
                        <div class="input-group-btn">
                            <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                        </div>
                    </div>
                </form>
                <!-- /.lockscreen credentials -->

            </div>
            <!-- /.lockscreen-item -->

            <div class="lockscreen-footer text-center">
                <b>PAPFull</b> - Sistema de Gerenciamento | Versão 1.0.0<br>
                Copyright &copy; <b>2017</b>
            </div>
        </div>
        <!-- /.center -->

        <!-- jQuery 2.2.3 -->
        <script src="../../src/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../../src/admin/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>