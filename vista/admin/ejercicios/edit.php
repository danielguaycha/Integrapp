 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edición de ejecicios
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Ejercicos</a></li>
            <li class="active">Editar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

         <div class="row">
             <div class="col-md-12">

                 <div class="box box-default centeredpanel">

                    <div class="box-header">
                      <h3 class="box-title">Integrapp <small> - Manejo de Ejercicios</small></h3>
                    </div>
                    <!-- form contenido -->
                    <div class="box-body pad">
                      <?php if($mensaje==''){ ?>
                       <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-info"></i> Aviso!</h4>
                        Algunos contenidos como las formulas no son editables, para ello deben ser remplazadas.
                       </div>
                       <?php }else{
                          echo '
                            <div class="alert alert-danger alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              <h4><i class="icon fa fa-info"></i> Aviso!</h4>
                              '.$mensaje.'.
                             </div>
                          ';
                        } ?>

                    <form class="form_edit" id="form_edit" name="frm-publicar" method="post" action="<?=base_url()?>ejercicios/updateThisEjercicio">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Titulo:</label>
                                    <br>
                                    <input type="text" class="form-control" value="<?=$consulta->titulo?>" name="titulo" placeholder="Ingrese un titulo corto" id="titulo" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Tipo:</label>
                                    <select class="form-control" name="tipo" id="tipo">
                                    <?php if($consulta->tipo != 'calculo_integral'){ ?>
                                        <option value="calculo_integral" >Cálculo integral</option>
                                        <option value="calculo_diferencial" selected="true">Cálculo diferencial</option>
                                    <?php } else{?>
                                      <option value="calculo_integral" selected="true">Cálculo integral</option>
                                        <option value="calculo_diferencial" >Cálculo diferencial</option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <label>Descripcion</label><br>
                            <textarea class="form-control" name="descripcion" id="descripcion" required placeholder="Escribe aqui una corta descripcion . . ."><?=$consulta->descripcion?>
                            </textarea><br>
                            <label>Contenido</label>
                            <br>
                            <textarea name="contenido" id="contenido" rows="30" cols="80" required>
                              <?php
                                $c = $consulta->contenido;
                                $c = str_replace('data-rsp', 'value',$c);
                                $c = str_replace('data-opcional', 'name',$c);
                                echo $c;
                              ?>
                            </textarea>
                            <br>
                            <input type="hidden" name="id" value="<?=$consulta->id_ejercicio?>">
                            <input type="submit" value="Actualizar" class="btn btn-primary">
                            <a href="<?=base_url()?>ejercicios/remove" class="btn btn-danger">Salir</a>
                        </form>
                    </div>
                 </div>
             </div>
         </div>

        </section><!-- /.content -->
      </div>
