
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Redefinir Senha de Usuário
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="/users">Lista de Usuários</a></li>
                        <li class="active">Redefinir Senha de Usuário</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                        <p style="font-size: 15px">Nome: <b><?= $userEdit['person'] ?></b></p>
                                        <p style="font-size: 15px">Usuário: <b><?= $userEdit['login'] ?></b></p>
                                    </h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" id="user-create" class="form-control-static" action="/users/pass/<?= $userEdit['iduser'] ?>" method="POST">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <i class="fa fa-lock"></i>
                                                    <label for="pass">Senha</label>
                                                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Senha de Usuário" autofocus="true" onclick="this.select()">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <i class="fa fa-unlock-alt"></i>
                                                    <label for="pass_conf">Confirmar Senha</label>
                                                    <input type="password" name="pass_conf" id="pass_conf" class="form-control" placeholder="Confirmar Senha" onclick="this.select()">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer modal-footer">
                                        <button type="submit" class="btn btn-primary">Redefinir</button>
                                        <button type="button" class="btn btn-default" onclick="javascript: location.href='/users'">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.colum -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
