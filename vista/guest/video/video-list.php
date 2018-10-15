
<!--*************** End aside menu *************************-->
    <div class="body">
    <div id="forma_visual">
        <ul>
            <li>
                <a href="<?= base_url()?>videos" data-toggle="tooltip" data-placement="left" title="Galeria" >
                    <span class="glyphicon glyphicon-picture"></span>
                </a>

            </li>
        </ul>
    </div>
<!--*************** Videos *************************-->
        <div class="contenido_videos">
            <h4><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;&nbsp; &nbsp;Lista de Videos</h4>    

             <!-- Contenedor de la lista de videos disponiblas -->
            <?php if($vintegral->result() !=null){ ?>
            <div class="contenedor-videos">
               <div class="table-responsive">
                  <table class="table">
                   <thead>
                      <tr><th>Integración</th><th><a></a></th></tr>
                   </thead>
                    <tbody>
                    <?php 
                        foreach ($vintegral->result() as $fila) {
                            echo '

                                 <tr>
                                     <td>'.$fila->titulo.'</td>
                                     <td><a href="'.$fila->link.'" class="video"><span class="int-videoplayer82"></span>  Ver</a></td>
                                 </tr>

                            ';
                        }
                     ?>
                    </tbody>
                  </table>
                </div>
                <?php } ?>
                <!--temas de calculo diferencial-->
                <?php if($vdiferencial->result()!=null) {?>
                <br><br>
                <div class="table-responsive">
                  <table class="table">
                   <thead><tr><th>Derivación</th><th><a></a></th></tr></thead>
                    <tbody>
                        <?php 
                        foreach ($vdiferencial->result() as $fila) {
                            echo '

                                 <tr>
                                     <td>'.$fila->titulo.'</td>
                                     <td><a href="'.$fila->link.'" class="video"><span class="int-videoplayer82"></span>  Ver</a></td>
                                 </tr>

                            ';
                        }
                     ?>
                    </tbody>
                  </table>
                </div>
                <?php } ?>
            </div>

               
