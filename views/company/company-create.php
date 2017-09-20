
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!--  Modal -->
                <div class="modal fade" id="modal-cnpj">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Consultar CNPJ</h4>
                            </div>
                            <form method="POST" action="/company/create">
                                <input type="hidden" name="cookie" value="<?= $params['cookie'] ?>">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group cnpj">
                                                        <label for="cnpj">CNPJ/MF:</label>
                                                        <input type="text" name="cnpjConsult" id="cnpjConsult" placeholder="Informe o CNPJ" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="captcha">Captcha:</label>
                                                        <input type="text" name="captcha" placeholder="Informe o captcha" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <label for="capcha64">Captcha:</label>
                                                    <div class="thumbnail">
                                                        <img src="data:image/png;base64,<?= $params['captchaBase64'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-flat btn-default pull-left" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-flat btn-primary">Consultar</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dados da Empressa
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dados da Empresa</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php if (isset($_SESSION['msg'])): ?>
                        <!-- Error -->
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-ban"></i> Erro!</h4>
                                <?php
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>
                        <!-- ./Error -->
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-sm-12">                    
                            <div class="box box-success">
                                <form id="company" action="/company/create" method="POST" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="nav-tabs-custom tab-success">
                                            <ul class="nav nav-tabs pull-right">
                                                <li><a href="#descontract" data-toggle="tab">Contrato</a></li>
                                                <li class="active"><a href="#descompany" data-toggle="tab">Empresa</a></li>
                                                <li class="pull-left header"><i class="fa fa-building"></i> Empresa</li>
                                            </ul>
                                            <div class="tab-content" id="tab-border">
                                                <!-- Company -->
                                                <div class="tab-pane active fade in" id="descompany">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="sname">Razação Social:</label>
                                                                        <input type="text" name="sname" class="form-control"
                                                                        <?php
                                                                        if (is_array($company)) {
                                                                            echo 'value="' . $company['razao_social'] . '"';
                                                                        }
                                                                        ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="fname">Nome Fantasia:</label>
                                                                        <input type="text" name="fname" class="form-control"
                                                                        <?php
                                                                        if (is_array($company)) {
                                                                            echo 'value="' . $company['nome_fantasia'] . '"';
                                                                        }
                                                                        ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="cnpj">CNPJ/MF:</label>
                                                                        <?php if ($_SESSION['only'] && !empty($params['cookie'])): ?>
                                                                            <a href="#" class="txtrigth" data-toggle="modal" data-target="#modal-cnpj">
                                                                                <small class="txtrigth" data-toggle="tooltip" data-placement="top" title="Pesquisar CNPJ">
                                                                                    <img data-toggle="tootip"  src="../../src/img/receita-federal_2.png" width="60px">
                                                                                </small>
                                                                            </a>
                                                                        <?php endif; ?>
                                                                        <input type="tel" name="cnpj" id="cnpj" class="form-control" maxlength="36"
                                                                        <?php
                                                                        if (is_array($company)) {
                                                                            echo 'value="' . $company[0] . '"';
                                                                        }
                                                                        ?>>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="dtopening">Data de Abertura:</label>
                                                                        <input type="text" name="dtopening" class="form-control date-picker" maxlength="36"
                                                                        <?php
                                                                        if (is_array($company)) {
                                                                            echo 'value="' . $company['data_abertura'] . '"';
                                                                        }
                                                                        ?>>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="rstate">Inscrição Estadual:</label>
                                                                        <input type="tel" name="rstate" class="form-control" maxlength="36">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="rcyte">Inscrição Municipal:</label>
                                                                        <input type="tel" name="rcyte" class="form-control" maxlength="36">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="zipcode">CEP:</label>
                                                                        <?php if ($_SESSION['only']): ?>
                                                                            <a style="text-align: center;" href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_black">
                                                                                <small class="txtrigth" data-toggle="tooltip" data-placement="top" title="Pesquisar meu CEP">
                                                                                    <img src="../../src/img/correios.png" width="60px">
                                                                                </small>
                                                                            </a>
                                                                        <?php endif; ?>
                                                                        <input type="tel" name="zipcode" class="form-control" maxlength="18" id="zipcode"
                                                                        <?php
                                                                        if (is_array($company)) {
                                                                            echo 'value="' . $company['cep'] . '"';
                                                                        }
                                                                        ?>>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <div class="form-group">
                                                                        <label for="address">Logradouro:</label>
                                                                        <input type="text" name="address" class="form-control"
                                                                        <?php
                                                                        if (is_array($company)) {
                                                                            echo 'value="' . $company['logradouro'] . '"';
                                                                        }
                                                                        ?>>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="num">Número:</label>
                                                                        <input type="text" name="num" class="form-control"
                                                                        <?php
                                                                        if (is_array($company)) {
                                                                            echo 'value="' . $company['numero'] . '"';
                                                                        }
                                                                        ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <div class="form-group">
                                                                        <label for="complement">Complemento:</label>
                                                                        <input type="text" name="complement" class="form-control"
                                                                        <?php
                                                                        if (is_array($company)) {
                                                                            echo 'value="' . $company['complemento'] . '"';
                                                                        }
                                                                        ?>>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <div class="form-group">
                                                                        <label for="district">Bairro:</label>
                                                                        <input type="text" name="district" class="form-control"
                                                                        <?php
                                                                        if (is_array($company)) {
                                                                            echo 'value="' . $company['bairro'] . '"';
                                                                        }
                                                                        ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-9">
                                                                    <div class="form-group">
                                                                        <label for="city">Cidade:</label>
                                                                        <input type="text" name="city" class="form-control"
                                                                        <?php
                                                                        if (is_array($company)) {
                                                                            echo 'value="' . $company['cidade'] . '"';
                                                                        }
                                                                        ?>>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="state">UF:</label>
                                                                        <input type="text" name="state" class="form-control"
                                                                        <?php
                                                                        if (is_array($company)) {
                                                                            echo 'value="' . $company['uf'] . '"';
                                                                        }
                                                                        ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="logo">Logo:</label>
                                                                        <div class="file-loading">
                                                                            <input type="file" accept="image/*" id="fileinput" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./Company -->

                                                <!-- Contract -->
                                                <div class="tab-pane fade" id="descontract">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="channel">Canal:</label>
                                                                        <input type="text" name="channel" class="form-control uppercase-transforme">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="uf">UF:</label>
                                                                        <input type="text" name="uf" class="form-control uppercase-transforme">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="sapcustomer">Cliente SAP:</label>
                                                                        <input type="tel" name="sapcustomer" class="form-control numeric-text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="sapcontract">SAP Contrato:</label>
                                                                        <input type="tel" name="sapcontract" class="form-control numeric-text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="provider">Fornecedor:</label>
                                                                        <input type="tel" name="provider" class="form-control numeric-text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="stc">STC:</label>
                                                                        <input type="tel" name="stc" class="form-control numeric-text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="dtcontract">Data do Contrato:</label>
                                                                        <input type="text" name="dtcontract" class="form-control date-picker" maxlength="36">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./Contract -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer modal-footer">
                                        <button type="submit" class="btn btn-flat btn-primary">Cadastrar</button>
                                        <button type="button" class="btn btn-flat btn-default" onclick="javascript: location.href = '/company'">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
