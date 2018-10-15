    <div class="body">
    <div id="forma_visual">
        <ul>
            <li>
                <a href="<?=base_url()?>videos/lista" data-toggle="tooltip" data-placement="right" title="Lista" >
                    <span class="glyphicon glyphicon-th-list"></span>
                </a>
            </li>  
        </ul>
    </div>
<!--*************** Videos *************************-->
        <div class="contenido_videos">
            <h4><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;&nbsp; &nbsp;Galería</h4>    
            <hr class="divider">
             <!-- Contenedor de la lista de videos disponiblas -->
             <!-- Videos de Calculo inetregral -->
            <?php if($vintegral->result()!=null) { ?>
            <div class="contenedor-videos">
            <h4>CALCULO INTERGRAL</h4><br>
            <?php 
                foreach ($vintegral->result() as $fila ) {
                    echo '
                        <div class="col-lg-4 col-md-4 col-sm-4 mb">
                           <div class="content-video">
                                <div class="img-panel-video">
                                <a class="video" title="'.$fila->titulo.'" href="'.$fila->link.'"><span class="int-videoplayer82"></span></a>    
                                </div>
                                <div class="video-title">'.$fila->titulo.'</div>
                            </div>            
                          </div>
                    ';
                }
            ?>
            </div>
            <?php } ?>

            <!-- Videos de Calculo diferencial -->
            <?php if($vdiferencial->result() != null){ ?>
            <hr class="divider">
            <div class="contenedor-videos">
       		 <br><br><h4>CALCULO DIFERENCIAL</h4>
             <br>
              <?php 
                foreach ($vdiferencial->result() as $fila ) {
                    echo '
                        <div class="col-lg-4 col-md-4 col-sm-4 mb">
                           <div class="content-video">
                                <div class="img-panel-video">
                                <a class="video" title="'.$fila->titulo.'" href="'.$fila->link.'"><span class="int-videoplayer82"></span></a>    
                                </div>
                                <div class="video-title">'.$fila->titulo.'</div>
                            </div>            
                          </div>
                    ';
                }
                ?>
            </div>
            <?php } ?>
        </div>
    </div>
    <!--End body-->