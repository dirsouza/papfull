            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Lista de Níveis
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Lista de Níveis</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <a href="/levels/create" class="btn btn-success">Cadastrar Nível</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table class="table table-striped" width="100%" id="table-levels">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Nível</th>
                                                <th data-orderable="false" style="width: 70px">Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody class="searchable">
                                            <?php foreach ($levels as $item): ?>
                                            <tr>
                                                <td align="center"><?= $item['idlevel'] ?></td>
                                                <td><?= $item['level'] ?></td>
                                                <td align="center">
                                                    <a href="/levels/update/<?= $item['idlevel'] ?>" class="btn btn-info btn-xs btn-flat" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
                                                    <a href="/levels/<?= $item['idlevel'] ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs btn-flat" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-trash"></i></a>
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