 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Teorias
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Teorias</a></li>
            <li class="active">Insertar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

         <div class="row">
             <div class="col-md-12">

                 <div class="box box-default centeredpanel">

                    <div class="box-header">
                      <h3 class="box-title">Integrapp <small> - Manejo de teorias</small></h3>
                    </div>
                    <!-- form contenido -->
                    <div class="box-body pad">

                       <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-info"></i> Aviso!</h4>
                        Porvafor asegurese de completar todos los campos.
                       </div>

                    <form class="form_nuevo" id="form_new_post" name="frm-publicar" method="post" action="<?=base_url()?>teorias/guardarpost">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Titulo:</label>
                                    <br>
                                    <input type="text" class="form-control" name="titulo" placeholder="Ingrese un titulo corto" id="titulo" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Tipo:</label>
                                    <select class="form-control" name="tipo" id="tipo">
                                        <option value="calculo_integral">Cálculo integral</option>
                                        <option value="calculo_diferencial">Cálculo diferencial</option>
                                    </select>
                                </div>
                            </div>
                            <label>Descripcion</label><br>
                            <textarea rows="5" cols="80" class="form-control" name="descripcion" id="descripcion" required placeholder="Escribe aqui una corta descripcion . . ."></textarea><br>
                            <label>Contenido de la teoria</label>
                            <br>
                            <textarea name="contenido" id="contenido" rows="30" cols="80" required></textarea>
                            <br>
                            <label>Citas</label><br>
                            <textarea rows="5" name="citas" id="citas" class="form-control"></textarea>
                            <label>Referencias</label><br>
                            <textarea rows="5" name="referencias" id="referencias" class="form-control"></textarea><br>
                            <center>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                            <input type="button" value="Limpiar" class="btn btn-success">
                            </center>
                        </form>
                    </div>
                 </div>
             </div>
         </div>

        </section><!-- /.content -->
      </div>
