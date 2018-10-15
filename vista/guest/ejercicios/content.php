<div class="wrapper">
<div class="body-3" style="background: #f7f7f7;">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-9 now-now">
            <div class="callout callout-info">
              <h4>Tip!</h4>
              <p>
                Esta Fase tiene <?=count($consulta->result())?> paso (s),  clikea en <strong style="font-size: 16px;"> <i class="fa fa-plus"></i> </strong>
                para ver su contenido.
              </p>
            </div>
                <form class="form-ejercicios">
                <?php 
                $i = 1;
                foreach ($consulta->result() as $fila) {
                  echo '
                      <div class="box box-default collapsed-box">
                        <div class="box-header with-border">
                            <h3 class="box-title"><span class="int-mathematics21"></span> <span class="label bg-green"> Nivel '.$nivel.'</span>- <span class="label bg-red">Paso '.$i.'</span></h3>
  
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body" style="display: none;">
                            <center>
                                <h3>'.$fila->titulo.'</h3>
                            </center>
                            <div class="'.$fila->ejercicio.'">
                                '.$fila->contenido.'
                            </div>
                        </div>
                    </div>
                  ';
                  $i++;
                } ?>
                    <br><input type="submit" value="Enviar" class="btn btn-primary">
                </form>
                <br><br>
                <br>
                <br>
            </div>
            <div class="col-lg-3">
            <div class="box box-success box-solid fix">
              <div class="box-header with-border">
                  <h3 class="box-title">Operaciones</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="insert-formula">
                      <div class="table-responsive">
                          <table class="table">
                              <tr>
                                  <td>
                                      <button id="exp" class="btn btn-default btn-block">^</button>
                                  </td>
                                  <td>
                                      <button id="sqrt" class="btn btn-default btn-block">Raiz</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <button id="fraccion" class="btn btn-default btn-block">{a}/{b}</button>
                                  </td>
                                  <td>
                                      <button id="ln" class="btn btn-default btn-block">ln{}</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <button id="sen" class="btn btn-default btn-block">sen</button>
                                  </td>

                                  <td>
                                      <button id="cos" class="btn btn-default btn-block">cos</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <button id="tan" class="btn btn-default btn-block">tan</button>
                                  </td>
                                  <td>
                                      <button id="cot" class="btn btn-default btn-block">cot</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <button id="sec" class="btn btn-default btn-block">sec</button>
                                  </td>
                                  <td>
                                      <button id="csc" class="btn btn-default btn-block">csc</button>
                                  </td>
                              </tr>
                          </table>
                      </div>
                      <hr class="divider">
                      <center>
                          <a class="view">
                              <img src="https://latex.codecogs.com/gif.latex?" title="\int" />
                          </a>
                      </center>
                      <br><br>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
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
                    </div> -->