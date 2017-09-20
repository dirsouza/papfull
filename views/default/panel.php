
    <body class="hold-transition skin-green-light sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="/" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">
                        <img src="../../src/img/imgPAPFull_default.png" width="45" height="45">
                    </span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">
                        <img src="../../src/img/imgPAPFull_header.png" width="200" height="45">
                    </span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php $filename = $_SERVER["DOCUMENT_ROOT"] . "../user/img/" . $photograph; ?>
                                    <?php if(file_exists($filename)): ?>
                                    <img src="../user/img/<?= $photograph ?>" width="17px" height="17px" class="img-circle" alt="User Image">
                                    <?php else: ?>
                                    <img src="../../src/img/avatar.jpg" width="17px" height="17px" class="img-circle" alt="User Image">
                                    <?php endif; ?>
                                    <span class="hidden-xs">
                                        <?php
                                        $user = explode(" ", $person);
                                        echo $user[0];
                                        ?>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <!--<img src="../../src/style/template-style/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                                        <?php if(file_exists($filename)): ?>
                                        <img src="../user/img/<?= $photograph ?>" class="img-circle" alt="User Image">
                                        <?php else: ?>
                                        <img src="../../src/img/avatar.jpg" class="img-circle" alt="User Image">
                                        <?php endif; ?>

                                        <p>
                                            <?= $person ?>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="/user/profile">
                                                <button type="button" class="btn btn-success btn-flat" style="width: 100px; height: 35px">Perfil</button>
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/logout">
                                                <button type="button" class="btn btn-success btn-flat" style="width: 100px; height: 35px">Sair</button>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
                        <!-- Dados do Usuário -->
                        <div class="pull-left image">
                            <?php if(file_exists($filename)): ?>
                            <img src="../user/img/<?= $photograph ?>" class="img-circle" alt="User Image">
                            <?php else: ?>
                            <img src="../../src/img/avatar.jpg" class="img-circle" alt="User Image">
                            <?php endif; ?>
                        </div>
                        <div class="pull-left info">
                            <p><?= $person ?></p>
                        </div>
                        <!-- ./Dados do Usuário -->
                        
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MENU DE NAVEGAÇÃO</li>
                        
                        <!-- Dashboard -->
                        <li class="treeview">
                            <a href="/">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <!-- ./Dashboard -->
                        
                        <!-- PAP -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-th-list"></i>
                                <span>PAP</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Cadastro de O.S.</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Cadastro de Clientes</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Fluxo de O.S.</a></li>
                            </ul>
                        </li>
                        <!-- ./PAP -->
                        
                        <!-- Financeiro -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-money"></i> <span>Financeiro</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Contas
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> À Pagar</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> À Receber</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Projeção de Custos</a></li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Relatórios
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Relatório 1</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Relatório 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- ./Financeiro -->
                        
                        <!-- Recursos Humanos -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-black-tie"></i> <span>Recursos Humanos</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Cadastros
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Funcionário</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Cargo</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Departamento</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Folha de Pagamento</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Frequência de Funcionários</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Controle de VT e VA</a></li>
                            </ul>
                        </li>
                        <!-- ./Recursos Humanos -->
                        
                        <!-- Sistema -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cogs"></i>
                                <span>Sistema</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i> Cadastros
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="/users"><i class="fa fa-circle-o"></i> Usuário</a></li>
                                        <li><a href="/levels"><i class="fa fa-circle-o"></i> Nível</a></li>
                                    </ul>
                                </li>
                                <li><a href="/company"><i class="fa fa-circle-o"></i> Empresa</a></li>
                            </ul>
                        </li>
                        <!-- ./Sistema -->
                        
                        <!-- Sobre -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-question-circle"></i> <span>Sobre</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                            </ul>
                        </li>
                        <!-- ./Sobre -->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>