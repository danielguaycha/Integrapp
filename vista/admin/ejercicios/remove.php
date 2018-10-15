 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Remover/Editar Ejercicios
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Ejercicos</a></li>
            <li class="active">Eliminar/Modificar</li>
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
                       <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-info"></i> Aviso!</h4>
                        Antes de eliminar asegurese de que es el ejercicio correcto!
                       </div>

                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Titulo</th>
                                  <th>Fecha</th>
                                  <th>Opciones</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php 
                            foreach ($consulta->result() as $fila) {
                              echo '
                              <tr>
                                <td>'.$fila->id_ejercicio.'</td>
                                <td>'.$fila->titulo.'</td>
                                <td>'.$fila->tipo.'</td>
                                <td>'.$fila->fecha.'</td>
                                 <td>
                                    <a class="btn btn-danger yop" type="button" data-url="'.base_url().'ejercicios/removeThisEjercicio/'.$fila->id_ejercicio.'"><span class="glyphicon glyphicon-trash"></span></a>
                                    <a href="'.base_url().'ejercicios/actualizar/'.$fila->id_ejercicio.'" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                                </td>
                                </tr>
                              ';
                            }
                           ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                 </div>
             </div>
         </div>

        </section><!-- /.content -->
      </div>
  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Integrapp System</h4>
          </div>
          <div class="modal-body">
            <p>¿Estas seguro que deseas eliminar estos datos?&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success confirm_delete">Si, estoy seguro</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->