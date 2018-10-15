
    <div class="body">
    <div id="forma_visual">
        <ul>
            <li>
                <a href="<?=base_url()?>libros/lista" data-toggle="tooltip" data-placement="right" title="Lista" >
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
            <div class="contenedor-videos">
               
                <?php
                    foreach ($consulta->result() as $video) {
                        echo '
                        <div class="col-lg-4 col-md-4 col-sm-4 mb">
                        <div class="content-book">
                            <div class="img-panel-book">
                            <a class="img-panel-nohover"><span class="int-openbook6"></span></a>
                            <a href="'.$video->link.'" class="img-panel-hover" target="_blank"><span class="glyphicon glyphicon-eye-open"></span></a>
                            </div>
                            <div class="video-title">'.$video->titulo.'</div> 
                        </div></div>
                        ';
                    }
                ?>
               <!-- <div class="col-lg-4 col-md-4 col-sm-4 mb">
               <div class="content-book">
               		<div class="img-panel-book">
                    <a class="img-panel-nohover"><span class="int-openbook6"></span></a>
                    <a href="#" class="img-panel-hover"><span class="glyphicon glyphicon-eye-open"></span></a>
                    </div>
                    <div class="video-title">Titulo del libro en cuestion</div>
              </div>
			  </div> -->

            </div>



    </div>
    </div>
    <!--End body-->
