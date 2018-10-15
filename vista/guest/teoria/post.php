<div class="wrapper">
    <div class="body-teorias">
        <!--*************** Autor, Titulo, teoria, fuentes, referencias, others *************************-->
        <section class="content-header">
            <h1>
            Teorias
            <small>-> Todos los contenidos</small>
          </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Teroias</a>
                </li>
                <li class="active">Contenidos</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-9 ">
                    <div class="box box-default">
                        <div class="box-header with-border">
                        <i class="fa fa-text-width"></i>
                            <h3 class="box-title">Calculo Integral</h3>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titulo</th>
                                        <th>Opcion</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <?php foreach ($integral->result() as $fila) { echo '
                                        <tr>
                                            <td>'.$fila->id_teoria.'</td>
                                            <td>'.$fila->titulo.'</td>
                                            <td>
                                                <a href="'.base_url().'teorias/article/'.$fila->id_teoria.'" id="'.$fila->id_teoria.'" class="label label-primary">Ver</a>
                                            </td>

                                        </tr>'; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="box-footer">
                            <center><a href="<?=base_url()?>teorias/integrals" class="btn btn-default"><span class="glyphicon glyphicon-ok-sign"></span> &nbsp;&nbsp;&nbsp;&nbsp;Mostrar todos los contenidos de calculo Integral ... </a>
                            </center>
                        </div>
                    </div>

                    <div class="box box-default">
                        <div class="box-header with-border">
                        <i class="fa fa-text-width"></i>
                            <h3 class="box-title">Calculo Diferencial</h3>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titulo</th>
                                        <th>Opcion</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <?php foreach ($diferencial->result() as $fila) { echo '
                                        <tr>
                                            <td>'.$fila->id_teoria.'</td>
                                            <td>'.$fila->titulo.'</td>
                                            <td>
                                                <a href="'.base_url().'teorias/article/'.$fila->id_teoria.'" id="'.$fila->id_teoria.'" class="label label-primary">Ver</a>
                                            </td>

                                        </tr>'; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="box-footer">
                            <center><a href="<?=base_url()?>teorias/diferencials" class="btn btn-default"><span class="glyphicon glyphicon-ok-sign"></span> &nbsp;&nbsp;&nbsp;&nbsp;Mostrar todos los contenidos de calculo Integral ... </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="informacion">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Ultimos contenidos</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                            <tr>
                                                <td><i class="fa fa-text-width"></i> Calculo Integral</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($lastint->result() as $fila) { echo '
                                            <tr>
                                                <td>
                                                    <a href="'.base_url().'teorias/article/'.$fila->id_teoria.'" id="'.$fila->id_teoria.'">'.$fila->titulo.'</a>
                                                </td>
                                            </tr>'; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix">
                                <a href="<?=base_url()?>teorias/integrals" class="btn btn-sm btn-info btn-flat pull-left">Ver todos los contenidos</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>

                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Ultimos contenidos</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                            <tr>
                                                <td><i class="fa fa-text-width"></i> Calculo Diferencial</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($lasd->result() as $fila) { echo '
                                            <tr>
                                                <td>
                                                    <a href="'.base_url().'teorias/article/'.$fila->id_teoria.'" id="'.$fila->id_teoria.'">'.$fila->titulo.'</a>
                                                </td>
                                            </tr>'; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix">
                                <a href="<?=base_url()?>teorias/diferencials" class="btn btn-sm btn-success btn-flat pull-left">Ver todos los contenidos</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--***************Panel de administracion e informacion lateral lateral *************************-->
    </div>
    <!--End body-->
</div>

