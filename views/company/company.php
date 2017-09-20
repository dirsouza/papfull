
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

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

                    <div class="row">
                        <div class="col-sm-12">                    
                            <div class="box box-success">
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
                                                                    <input type="text" name="sname" class="form-control" value="<?= $company['sname'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="fname">Nome Fantasia:</label>
                                                                    <input type="text" name="fname" class="form-control" value="<?= $company['fname'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label for="cnpj">CNPJ/MF:</label>
                                                                    <input type="tel" name="cnpj" id="cnpj" class="form-control" maxlength="36" value="<?= $company['cnpj'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label for="dtopening">Data de Abertura:</label>
                                                                    <input type="text" name="dtopening" class="form-control date-picker" maxlength="36" value="<?= $company['dtopening'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label for="rstate">Inscrição Estadual:</label>
                                                                    <input type="tel" name="rstate" class="form-control" maxlength="36" value="<?= $company['rstate'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label for="rcyte">Inscrição Municipal:</label>
                                                                    <input type="tel" name="rcyte" class="form-control" maxlength="36" value="<?= $company['rcyte'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label for="zipcode">CEP:</label>
                                                                    <input type="tel" name="zipcode" class="form-control" maxlength="18" id="zipcode" value="<?= $company['zipcode'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                <div class="form-group">
                                                                    <label for="address">Logradouro:</label>
                                                                    <input type="text" name="address" class="form-control" value="<?= $company['address'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <label for="num">Número:</label>
                                                                    <input type="text" name="num" class="form-control" value="<?= $company['num'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <div class="form-group">
                                                                    <label for="complement">Complemento:</label>
                                                                    <input type="text" name="complement" class="form-control" value="<?= $company['complement'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                <div class="form-group">
                                                                    <label for="district">Bairro:</label>
                                                                    <input type="text" name="district" class="form-control" value="<?= $company['district'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-9">
                                                                <div class="form-group">
                                                                    <label for="city">Cidade:</label>
                                                                    <input type="text" name="city" class="form-control" value="<?= $company['city'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label for="state">UF:</label>
                                                                    <input type="text" name="state" class="form-control" value="<?= $company['state'] ?>">
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
                                                                    <input type="text" name="channel" class="form-control uppercase-transforme" value="<?= $company['channel'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label for="uf">UF:</label>
                                                                    <input type="text" name="uf" class="form-control uppercase-transforme" value="<?= $company['uf'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label for="sapcustomer">Cliente SAP:</label>
                                                                    <input type="tel" name="sapcustomer" class="form-control numeric-text" value="<?= $company['sapcustomer'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label for="sapcontract">SAP Contrato:</label>
                                                                    <input type="tel" name="sapcontract" class="form-control numeric-text" value="<?= $company['sapcontract'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="provider">Fornecedor:</label>
                                                                    <input type="tel" name="provider" class="form-control numeric-text" value="<?= $company['provider'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="stc">STC:</label>
                                                                    <input type="tel" name="stc" class="form-control numeric-text" value="<?= $company['stc'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="dtcontract">Data do Contrato:</label>
                                                                    <input type="text" name="dtcontract" class="form-control date-picker" maxlength="36" value="<?= $company['dtcontract'] ?>">
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
                                    <button type="button" class="btn btn-flat btn-default" onclick="javascript: location.href = '/levels'">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
