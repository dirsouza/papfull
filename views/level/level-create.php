            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Cadastro de Nível de Acesso
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="/levels">Lista de Níveis</a></li>
                        <li class="active">Cadastro de Nível de Acesso</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    
                    <?php if(isset($_SESSION['msg'])): ?>
                    <!-- Error -->
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-ban"></i> Erro!</h4>
                            <?php 
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <!-- ./Error -->
                    <?php endif; ?>
                    
                    <div class="row">
                        <!-- column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Formulário de Cadastrastro</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form id="level-create" class="form-control-static" action="/levels/create" method="POST">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <i class="fa fa-unlock"></i>
                                                    <label for="level">Nível de Acesso</label>
                                                    <input type="text" name="level" class="form-control" placeholder="Nível de Acesso" autofocus="true" onclick="this.select()"
                                                    <?php if(isset($_SESSION['data']['level'])){ ?>
                                                        value="<?= $_SESSION['data']['level'] ?>"
                                                    <?php } ?>>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <!-- Custom Tabs (Pulled to the right) -->
                                                <div class="nav-tabs-custom tab-success">
                                                    <ul class="nav nav-tabs pull-right">
                                                        <li><a href="#sys" data-toggle="tab">Sistema</a></li>
                                                        <li><a href="#rh" data-toggle="tab">Recursos Humanos</a></li>
                                                        <li><a href="#fin" data-toggle="tab">Financeiro</a></li>
                                                        <li class="active"><a href="#pap" data-toggle="tab">PAP</a></li>
                                                        <li class="pull-left header"><i class="fa fa-key"></i> Permissões</li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <!-- PAP -->
                                                        <div class="tab-pane active" id="pap">
                                                            <ul class="sidebar-menu" data-widget="tree">
                                                            <?php foreach ($modules as $item): ?>
                                                            <?php if ($item['project'] === "PAP"): ?>
                                                                <li class="treeview">
                                                                    <a href="#">
                                                                        <label>
                                                                            <input type="checkbox" name="idmodule[]" value="<?= $item['idmodule'] ?>" class="square-green">
                                                                            &nbsp;&nbsp;<i class="fa fa-folder-open"></i>
                                                                            &nbsp;&nbsp;<?= $item['module'] ?>
                                                                        </label>
                                                                        <span class="pull-right-container">
                                                                            <i class="fa fa-angle-left pull-right"></i>
                                                                        </span>
                                                                    </a>
                                                                    <ul class="treeview-menu">
                                                                        <li>
                                                                            <ul class="treevew-menu">
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="view[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-eye"> </i>
                                                                                        &nbsp;&nbsp;Visualizar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="register[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-plus"></i>
                                                                                        &nbsp;&nbsp;Criar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="edit[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-edit"></i>
                                                                                        &nbsp;&nbsp;Editar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="delete[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-trash-o"></i>
                                                                                        &nbsp;&nbsp;Excluir
                                                                                    </label>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                        <!-- ./PAP -->

                                                        <!-- Financeiro -->
                                                        <div class="tab-pane" id="fin">
                                                            <ul class="sidebar-menu" data-widget="tree">
                                                            <?php foreach ($modules as $item): ?>
                                                            <?php if ($item['project'] === "Financeiro"): ?>
                                                                <li class="treeview">
                                                                    <a href="#">
                                                                        <label>
                                                                            <input type="checkbox" name="idmodule[]" value="<?= $item['idmodule'] ?>" class="square-green">
                                                                            &nbsp;&nbsp;<i class="fa fa-folder-open"></i>
                                                                            &nbsp;&nbsp;<?= $item['module'] ?>
                                                                        </label>
                                                                        <span class="pull-right-container">
                                                                            <i class="fa fa-angle-left pull-right"></i>
                                                                        </span>
                                                                    </a>
                                                                    <ul class="treeview-menu">
                                                                        <li>
                                                                            <ul class="treevew-menu">
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="view[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-eye"></i>
                                                                                        &nbsp;&nbsp;Visualizar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="register[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-plus"></i>
                                                                                        &nbsp;&nbsp;Criar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="edit[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-edit"></i>
                                                                                        &nbsp;&nbsp;Editar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="delete[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-trash-o"></i>
                                                                                        &nbsp;&nbsp;Excluir
                                                                                    </label>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>                                                                     
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                        <!-- ./Financeiro -->

                                                        <!-- Recurso Humanos -->
                                                        <div class="tab-pane" id="rh">
                                                            <ul class="sidebar-menu" data-widget="tree">
                                                            <?php foreach ($modules as $item): ?>
                                                            <?php if ($item['project'] === "Recursos Humanos"): ?>
                                                                <li class="treeview">
                                                                    <a href="#">
                                                                        <label>
                                                                            <input type="checkbox" name="idmodule[]" value="<?= $item['idmodule'] ?>" class="square-green">
                                                                            &nbsp;&nbsp;<i class="fa fa-folder-open"></i>
                                                                            &nbsp;&nbsp;<?= $item['module'] ?>
                                                                        </label>
                                                                        <span class="pull-right-container">
                                                                            <i class="fa fa-angle-left pull-right"></i>
                                                                        </span>
                                                                    </a>
                                                                    <ul class="treeview-menu">
                                                                        <li>
                                                                            <ul class="treevew-menu">
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="view[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-eye"></i>
                                                                                        &nbsp;&nbsp;Visualizar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="register[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-plus"></i>
                                                                                        &nbsp;&nbsp;Criar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="edit[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-edit"></i>
                                                                                        &nbsp;&nbsp;Editar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="delete[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-trash-o"></i>
                                                                                        &nbsp;&nbsp;Excluir
                                                                                    </label>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>                                                                       
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                        <!-- ./Recursos Humanos -->

                                                        <!-- Sistema -->
                                                        <div class="tab-pane" id="sys">
                                                            <ul class="sidebar-menu" data-widget="tree">
                                                            <?php foreach ($modules as $item): ?>
                                                            <?php if ($item['project'] === "Sistema"): ?>
                                                                <li class="treeview">
                                                                    <a href="#">
                                                                        <label>
                                                                            <input type="checkbox" name="idmodule[]" value="<?= $item['idmodule'] ?>" class="square-green">
                                                                            &nbsp;&nbsp;<i class="fa fa-folder-open"></i>
                                                                            &nbsp;&nbsp;<?= $item['module'] ?>
                                                                        </label>
                                                                        <span class="pull-right-container">
                                                                            <i class="fa fa-angle-left pull-right"></i>
                                                                        </span>
                                                                    </a>
                                                                    <ul class="treeview-menu">
                                                                        <li>
                                                                            <ul class="treevew-menu">
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="view[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-eye"></i>
                                                                                        &nbsp;&nbsp;Visualizar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="register[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-plus"></i>
                                                                                        &nbsp;&nbsp;Criar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="edit[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-edit"></i>
                                                                                        &nbsp;&nbsp;Editar
                                                                                    </label>
                                                                                </li>
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="delete[<?= $item['idmodule'] ?>]" value="1" class="minimal">
                                                                                        &nbsp;&nbsp;<i class="fa fa-trash-o"></i>
                                                                                        &nbsp;&nbsp;Excluir
                                                                                    </label>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>                                                                    
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                        <!-- ./Sistema -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="box-footer modal-footer">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        <button type="button" class="btn btn-default" onclick="javascript: location.href='/levels'">Cancelar</button>
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
