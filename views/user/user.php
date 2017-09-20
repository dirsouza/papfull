            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Lista de Usuários
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Lista de Usuários</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <a href="/users/create" class="btn btn-success">Cadastrar Usuário</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table class="table table-striped" width="100%" id="table-users">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th style="width: 300px">Nome</th>
                                                <th style="width: 300px">E-mail</th>
                                                <th style="width: 200px">Usuário</th>
                                                <th style="width: 200px">Nível</th>
                                                <th data-orderable="false" style="width: 100px">Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody class="searchable">
                                            <?php foreach ($users as $item): ?>
                                            <tr>
                                                <td align="center"><?= $item['iduser'] ?></td>
                                                <td><?= $item['person'] ?></td>
                                                <td><?= $item['email'] ?></td>
                                                <td><?= $item['login'] ?></td>
                                                <td><?= $item['level'] ?></td>
                                                <td align="center">
                                                    <a href="/users/update/<?= $item['iduser'] ?>" class="btn btn-info btn-xs btn-flat" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
                                                    <a href="/users/pass/<?= $item['iduser'] ?>" class="btn btn-primary btn-xs btn-flat" data-toggle="tooltip" data-placement="top" title="Redefinir senha"><i class="fa fa-lock"></i></a>
                                                    <a href="/users/<?= $item['iduser'] ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs btn-flat" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                              <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->