 <div class="body-2">
         <hr class="divider">
           <!-- Otros contenidos anteriores -->
            <div class="other-contents">
             <h4><span class="glyphicon glyphicon-tag"></span>&nbsp;Más contenidos </h4>
            <!--muestra los ultimos contenidos subidos a la pagina-->
               <div class="col-lg-4 col-md-4 col-sm-4 mb">
                           <!--Panel one-->
                            <div class="content-panel pn">
                                <div id="blog-bg">
                                    <div class="badge badge-popular">Teoria</div>
                                    <div class="blog-title"><?=$lastT->titulo?></div>
                                </div>
                                <div class="blog-text">
                                    <p><?=$lastT->descripcion?><a href="<?=base_url()?>teorias/article/<?=$lastT->id_teoria?>"> &nbsp; Read More</a></p>
                                </div>
                            </div>
              </div>
               <div class="col-lg-4 col-md-4 col-sm-4 mb">
                            <div class="product-panel-2 pn">
                                <div class="badge badge-hot">Video</div>
                                <img src="<?=base_url()?>plantillas/img/Teorias/bg.png" width="200" alt="">
                                <h4><?= $lastV->titulo?></h4>
                                <h6><?=$lastV->descripcion?></h6>
                                <a href="<?=base_url()?>videos/lista" class="btn btn-small btn-danger">Ver ahora</a>
                            </div>
                        </div>
               <div class="col-lg-4 col-md-4 col-sm-4 mb">
                  <div class="content-panel pn">
                    <div id="profile-01">
                        <h3>Ejercicios</h3>
                    </div>
                    <div class="profile-01 centered">
                        <p>Ver ahora! </p>
                    </div>
                    <div class="centered">
                        <h6><br>Tema del ejercicio</h6>
                    </div>
                  </div><!-- --/content-panel ---->
                </div>
           </div>
        </div>
    
    <!--End body 2-->


 <footer>
        <div class="footer_content">
            <!--Si se deseaa addisionar mas opciones al footer hacerlo en este contenedor-->
        </div>
        <center>
            <div style="margin:0 auto;width: 114px;" class="addthis_horizontal_follow_toolbox"></div>
            <small>Todos los derechos reservados por el autor | <a href="#">UTMACH</a></small>
        </center>
    </footer>
    
    <script type="text/javascript" src="<?= base_url() ?>plantillas/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>plantillas/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>plantillas/js/app.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-564bb4ef06b5ff9f" async="async"></script>

     <script>
        $(document).ready(function() {
            $('.icon_menu').tooltip();

            $('.img-panel-hover').on('mouseleave',function(){
                $(this).removeClass('openHover');
            });

            $('.img-panel-hover').on('mousemove',function(){
                $(this).addClass('openHover');
            })
        });
    </script>

    <?php // solo si video es verdadera sigunifica que el footer es llamado desde videos por lo tanto se add la libreria facyboox
        if($video == true){ ?>
         <script type="text/javascript" src="<?= base_url() ?>plantillas/js/jquery.fancybox.js"></script>
         
         <script>
          jQuery(document).ready(function() {
               $(".video").click(function()
               {
                    $.fancybox({
                    'padding'   : 0,
                    'autoScale' : false,
                    'transitionIn'  : 'none',
                    'transitionOut' : 'none',
                    'title' : this.title,
                    'width' : 640,
                    'height': 385,
                    'href'  : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
                    'type'  : 'swf', 'swf'  : { 'wmode' : 'transparent', 'allowfullscreen'  : 'true'
                }
                });
                return false;
              });
          });

          </script>
    <?php
        }
     ?>

</body>

</html>


<!--
                <a id="">
                    <div><i class="demo-icon icon-user"></i>
                    </div>
                </a>
-->