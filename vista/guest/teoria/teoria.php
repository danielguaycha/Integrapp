<div class="wrapper">
    <div class="body-teorias">
        <!--*************** Autor, Titulo, teoria, fuentes, referencias, others *************************-->
        <section class="content-header">
            <h1>
            Teorias
            <small></small>
          </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Teroias</a>
                </li>
                <li class="active"><?=$fila->titulo?></li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-9 ">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-text-width"></i>
                            <h3 class="box-title"><?=$fila->titulo?></h3>

                            <div class="titulos_content">
                                <button class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a>
                                            <span class="glyphicon glyphicon-book"> &nbsp;</span><strong>Autor:</strong> 
                                            <?=$autor->nombre?>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="glyphicon glyphicon-ok"> &nbsp;</span><strong>Aprobado por:</strong> Ing.Maritza Pinta
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="glyphicon glyphicon-time"> &nbsp;</span><strong>Fecha:</strong> 
                                            <?=$fila->fecha?>
                                        </a>
                                    </li>

                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Informacion</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-body pad">
                            <div class="teoria">
                                <?=$fila->contenido ?></div>
                        </div>
                        <div class="box-footer">
                            <?=$fila->fuentes?>
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

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Redes Sociales</a></h3>
                            </div>
                            <div class="box-body">
                                <a class="btn btn-block btn-social btn-facebook">
                                    <i class="fa fa-facebook"></i> Sign in with Facebook
                                </a>
                                <a class="btn btn-block btn-social btn-github">
                                    <i class="fa fa-github"></i> Sign in with GitHub
                                </a>
                                <a class="btn btn-block btn-social btn-google">
                                    <i class="fa fa-google-plus"></i> Sign in with Google
                                </a>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!--***************Panel de administracion e informacion lateral lateral *************************-->
    </div>
    <!--End body-->
</div>

