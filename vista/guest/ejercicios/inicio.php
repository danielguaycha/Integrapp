<div class="body-3" style="background: #f7f7f7;">
    <!-- Main content -->
    <section>

        <div>
            <div>

                <div class="box box-default centeredpanel">

                    <div class="box-header">
                        <h3 class="box-title">Integrapp <small> - Solución de ejercicios</small></h3>
                    </div>
                    <!-- form contenido -->
                    <div class="box-body pad">
                        <ul class="timeline">
                        <?php
                          foreach ($niveles->result() as $fila) {
                            if($fila->numero <= $completados){
                              echo '
                              <li class="time-label">
                              <span class="bg-green">Nivel '.$fila->numero.' - Integrales</span>
                              </li>
                              <li>
                                  <!-- timeline icon -->
                                  <i class="fa  fa-gamepad bg-green"></i>
                                  <div class="timeline-item">
                                      <span class="time"><i><span class="int-function"></span></i>Medio</span>

                                      <h3 class="timeline-header"><a href="#">'.$fila->titulo.'</a></h3>

                                      <div class="timeline-body">
                                          '.$fila->descripcion.'
                                          <p><span class="label label-success">Selección multiple.</span></p>
                                             <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar progress-bar-success" style="width: '.$fila->seleccion.'%"></div>
                                        </div>

                                        <p><span class="label label-warning">Completar.</span></p>
                                        <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar progress-bar-warning" style="width: '.$fila->completar.'%"></div>
                                        </div>

                                        <p><span class="label label-danger">Terminos erroneos.</span></p>
                                        <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar progress-bar-danger" style="width: '.$fila->error.'%"></div>
                                        </div>
                                      </div>

                                      <div class="timeline-footer">
                                          <a href="'.base_url().'ejercicios/nivel/'.$fila->numero.'" class="btn btn-primary btn-xs">GO!</a>
                                      </div>
                                  </div>
                              </li>
                              ';
                            }else{
                              echo '

                            <li class="time-label">
                            <span class="bg-red disabled">Nivel '.$fila->numero.' - Integrales</span>
                            </li>
                            <li class="">
                                <!-- timeline icon -->
                                <i class="fa fa-gamepad"></i>
                                <div class="timeline-item">
                                <div class="bg-disabled">
                                  <span class="glyphicon glyphicon-lock"></span>
                                </div>
                                    <span class="time"><i><span class="int-function"></span></i>Medio</span>

                                    <h3 class="timeline-header disabled"><a href="#">'.$fila->titulo.' </a></h3>

                                    <div class="timeline-body">
                                        '.$fila->descripcion.'

                                        <br>Grado de dificultad<br><br>
                                        <p><span class="label label-success">Selección multiple.</span></p>
                                           <div class="progress progress-xs progress-striped active">
                                      <div class="progress-bar progress-bar-success" style="width: '.$fila->seleccion.'%"></div>
                                      </div>

                                      <p><span class="label label-warning">Completar.</span></p>
                                      <div class="progress progress-xs progress-striped active">
                                      <div class="progress-bar progress-bar-warning" style="width: '.$fila->completar.'%"></div>
                                      </div>

                                       <p><span class="label label-danger">Terminos erroneos.</span></p>
                                        <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar progress-bar-danger" style="width: '.$fila->error.'%"></div>
                                        </div>
                                    </div>

                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs">GO!</a>
                                    </div>
                                </div>
                            </li>

                              ';
                            }
                          }

                         ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <!-- /.content -->
</div>

<!-- <div class="ejercicio-content">
                      <input type="text" data-rsp="1">
                      <input type="text" data-rsp ="2">
                      <input type="text" data-rsp ="3">
                      <input type="text" data-rsp ="4">
                      <input type="text" data-rsp ="5">
                      <input type="text" data-rsp ="6">
                      
                    </div>

                    <div class="ejercicio-content">
                      <input type="text" data-rsp ="7">
                      <input type="text" data-rsp ="8">
                      <input type="text" data-rsp ="9">
                      <input type="text" data-rsp ="10">
                      <input type="text" data-rsp ="11">
                      <input type="text" data-rsp ="12">
                    </div> 














                    -->