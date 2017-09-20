
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Atualizar Usuário
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="/users">Lista de Usuários</a></li>
                        <li class="active">Atualizar Usuário</li>
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
                                        <p style="font-size: 15px">Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?= $userEdit['person'] ?></b></p>
                                        <p style="font-size: 15px">Usuário:&nbsp;&nbsp;&nbsp;&nbsp;<b><?= $userEdit['login'] ?></b></p>
                                    </h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" id="user-create" class="form-control-static" action="/users/update/<?= $userEdit['iduser'] ?>" method="POST">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="person">Nome</label>
                                                    <input type="text" name="person" id="person" class="form-control" placeholder="Nome do Usuário" autofocus="true" onclick="this.select()" value="<?= $userEdit['person'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">E-mail</label>
                                                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail do Usuário" onclick="this.select()" value="<?= $userEdit['email'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="phone">Telefone</label>
                                                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Telefone do Usuário" onclick="this.select()" value="<?= $userEdit['phone'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="cell">Celular:</label>
                                                    <input type="tel" name="cell" id="cell" class="form-control" placeholder="Celular do Usuário" onclick="this.select()" value="<?= $userEdit['cell'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="idlevel">Nível de Acesso</label>
                                                    <select name="idlevel" id="idlevel" class="form-control select" style="width: 100%">
                                                        <option></option>
                                                        <?php foreach($level as $item): ?>
                                                        <option value="<?= $item['idlevel'] ?>" <?php if($item['idlevel'] === $userEdit['idlevel']): ?> selected="true" <?php endif; ?> ><?= $item['level'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer modal-footer">
                                        <button type="submit" class="btn btn-primary">Atualizar</button>
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
