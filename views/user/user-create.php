            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Cadastro de Usuário
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="/users">Lista de Usuários</a></li>
                        <li class="active">Cadastro de Usuário</li>
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
                                <form id="user-create" class="form-control-static" action="/users/create" method="POST">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="person">Nome</label>
                                                    <input type="text" name="person" id="person" class="form-control" placeholder="Nome do Usuário" autofocus="true" onclick="this.select()"
                                                    <?php if (isset($_SESSION['newUser'])) { ?>
                                                    value="<?= $_SESSION['newUser']['person'] ?>"
                                                    <?php } ?>>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <i class="fa fa-envelope"></i>
                                                    <label for="email">E-mail</label>
                                                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail do Usuário" onclick="this.select()"
                                                    <?php if (isset($_SESSION['newUser'])) { ?>
                                                    value="<?= $_SESSION['newUser']['email'] ?>"
                                                    <?php } ?>>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <i class="fa fa-phone"></i>
                                                    <label for="phone">Telefone</label>
                                                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Telefone do Usuário" onclick="this.select()"
                                                    <?php if (isset($_SESSION['newUser'])) { ?>
                                                    value="<?= $_SESSION['newUser']['phone'] ?>"
                                                    <?php } ?>>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <i class="fa fa-mobile"></i>
                                                    <label for="cell">Celular:</label>
                                                    <input type="tel" name="cell" id="cell" class="form-control" placeholder="Celular do Usuário" onclick="this.select()"
                                                    <?php if (isset($_SESSION['newUser'])) { ?>
                                                    value="<?= $_SESSION['newUser']['cell'] ?>"
                                                    <?php } ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <i class="fa fa-user"></i>
                                                    <label for="login">Usuário</label>
                                                    <input type="text" name="login" id="login" class="form-control" placeholder="Nome de Usuário" onclick="this.select()"
                                                    <?php if (isset($_SESSION['newUser'])) { ?>
                                                    value="<?= $_SESSION['newUser']['login'] ?>"
                                                    <?php } ?>>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <i class="fa fa-lock"></i>
                                                    <label for="pass">Senha</label>
                                                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Senha de Usuário" onclick="this.select()"
                                                    <?php if (isset($_SESSION['newUser'])) { ?>
                                                    value="<?= $_SESSION['newUser']['pass'] ?>"
                                                    <?php } ?>>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <i class="fa fa-unlock-alt"></i>
                                                    <label for="pass_conf">Confirmar Senha</label>
                                                    <input type="password" name="pass_conf" id="pass_conf" class="form-control" placeholder="Confirmar Senha" onclick="this.select()"
                                                    <?php if (isset($_SESSION['newUser'])) { ?>
                                                    value="<?= $_SESSION['newUser']['pass'] ?>"
                                                    <?php } ?>>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <i class="fa fa-unlock"></i>
                                                    <label for="idlevel">Nível de Acesso</label>
                                                    <select name="idlevel" id="idlevel" class="form-control select" style="width: 100%">
                                                        <option></option>
                                                        <?php foreach($level as $item): ?>
                                                        <option value="<?= $item['idlevel'] ?>"
                                                        <?php if (isset($_SESSION['newUser']) && $_SESSION['newUser']['idlevel'] === $item['idlevel']) {?>
                                                        selected="true"
                                                        <?php } unset($_SESSION['newUser']) ?>><?= $item['level'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer modal-footer">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
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
