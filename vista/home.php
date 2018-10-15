<!Doctype>
<html>

<head>
    <meta charset="utf-8">
    <title>Integrapp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>plantillas/css/main.css">
</head>

<body id="body">
    <!-- * * * *Header design * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
    <header role="encabezado">
        <nav>
            <div class="menu" role="navegacion">
                <div id="color_logo"><p><span class="int-function"></span><p></div>
                <div id="nav-name">Integrapp</div>
                <ul class="menu-general">
<!--
                    <li>
                        <a href="#" class="user-display">Quien dice</a>
                    </li>
-->
                    <li><a href="<?=base_url()?>soluciones">Soluciones</a>
                    </li>
                    <li><a href="<?=base_url()?>libros">Libros</a>
                    </li>
                    <li><a href="<?=base_url()?>videos">Tutoriales</a>
                    </li>
                    <li>
                     <?php if(!$this->session->userdata('login')) {?>
                        <a href="<?=base_url()?>login" id="color-Login">Iniciar / Registro</a>
                    <?php }else{
                        echo '<a href="'.base_url().'login/logout" id="color-Login">Cerrar Sesion</a>';
                        } ?>
                    </li>
                    <?php if($this->session->userdata('login')){
                        echo '<li><a href="'.base_url().'teorias/insertar" id="color-blog">Administrar</a></li>';
                        } ?>
                </ul>
            </div>
            <div id="button-display-menu"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></div>
        </nav>
    </header>
    <!-- * * * *End header design * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->



    <!-- * * * *Slider section design * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
    <section role="slider" id="content-slider">
        <div id="slider-container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active" id="item_1">
                        <!--                        <img src="..." alt="...">-->
                        <div class="container-apps">
                            <ul>
                                <li>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Integrales indefinidas" class="icon_slider" id="i_1"></a>
                                </li>

                                <li>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Integrales definidas" class="icon_slider" id="i_2"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon_slider" id="i_3" title="Derivadas" data-toggle="tooltip" data-placement="left"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon_slider" id="i_4" data-toggle="tooltip" data-placement="left" title="Grafico de Funciones"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="slide-content">
                            <h3>Bienvenido</h3><br>
                            <p>Visita nuestras apps para la solucion de problemas de calculo,
                        puedes encontrar respuestas para : <br><br>| - INTEGRALES INDEFINIDAS  |<br>
                             | - INTEGRALES DEFINIDAS  |<br>| - DERIVADAS  |
                             <br>| - GRÁFICO DE FUNCIONES |<br><br>
                             Todo en un solo lugar y a cualquier momento es rapido y facil de usar.
                             <br><br>
                             <strong>Nota: </strong>Solo disponible para version de escritorio.
                            </p>
                        </div>
                    </div>
                    <div class="item" id="item_2">
                        <div class="container-apps">
                            <ul>
                                <li>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Teoría" class="icon_slider" id="j_1"></a>
                                </li>

                                <li>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Ejercicios" class="icon_slider" id="j_2"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon_slider" id="j_3" title="Videos" data-toggle="tooltip" data-placement="left"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon_slider" id="j_4" data-toggle="tooltip" data-placement="left" title="Libros"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="slide-content">
                            <h3>Momento de ilustrarte</h3><br>
                            <p>
                                Con nuestro servicio online puedes tener todos los libros que quieras
                                para estudiar comodamente, sin mas! .. todo es <strong>GRATIS</strong>,
                                ademas de ello puedes contaar con una lista de reproduccion adecuada
                                a tus necesidades de los temas que mas te interesen.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Controls
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
        </div>
    </section>
    <!-- * * End Slider section design * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
    <section role="information" id="section_2">
        <div class="infografic">
            <div id="inf_infomacion">
                <h2>
                   Servicios en Linea
               </h2>
                <p>
                    Sencillo sitio que brinda ayuda en temas sobre calculo . . . <strong>¡Checalo!</strong>
                </p>
            </div>
            <ul>
                <li id="inf_1">
                    <a href="#">
                        <div><i class="demo-icon icon-calculator"></i>
                        </div>
                        <br>
                        <span class="info_title" id="title_1">Calcular Integrales</span>
                    </a>

                </li>
                <li id="inf_2">
                    <a href="<?= base_url()?>teorias">
                        <div><i class="demo-icon icon-news"></i>
                        </div>
                        <br>
                        <span class="info_title" id="title_2">Teorias</span>
                    </a>
                </li>
                <li id="inf_3">
                    <a href="<?=base_url()?>ejercicios">
                        <div><i class="demo-icon icon-chart-alt-outline"></i>
                        </div>
                        <br>
                        <span class="info_title" id="title_3">Ejercicios</span>
                    </a>
                </li>
                <li id="inf_4">
                    <a href="#">
                        <div><i class="demo-icon icon-help-circled"></i>
                        </div>
                        <br>
                        <span class="info_title" id="title_4">Quienes somos ?</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section role="information" id="section_3">

        <div id="credit-content">
            <div id="participate">
                <h4>
                    ¿Quienes Colaboran con nosotros ?
                </h4>
                <div id="thebest">

                </div>
                <div id="participate-text">
                    <h4>DANIEL GUAYCHA APOLINARIO</h4>
                    <span>Mejor Puntuado</span>
                </div>
            </div>
            <div id="suscrit">
                <h4>¿Te gustan mucho las matematicas o eres desarrollador? Unete a nosotros ! </h4>

                <form action="" id="form-suscripcion">
                    <label for="input-reg">Correo:</label>
                    <br>
                    <input type="email" class="input-reg" placeholder="Su email aqui" required>
                    <br>
                    <label for="password">Contraseña:</label>
                    <br>
                    <input type="password" class="password" placeholder="Su contraseña aqui" required>
                    <br>
                    <input type="submit" value="Registrarme">
                </form>
            </div>
        </div>

    </section>

    <section id="section_4">

        <div class="options-container">

           <div id="texto_llamativo">#Acerca de Nosotros</div>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿QUÉ ES INTEGRAPP?
        </a>
      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            Es una sencilla plataforma de aprendisaje en la cual puedes encontrar libros, Videos, Ejercicios, Teorias y mas acerca del calculo direferncial e integral, el objetivo de este sitio es tener todo a mano para estudiar aprevechando el tiempo.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ¿PARA QUË ME SIRVE?
        </a>
      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Pues esta dicho que te da todas las herramientas necesarias para aprender
                            calculo integral y diferencial, no solo con libros sino tambien con videos y ejercicios prácticos.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ¿A QUIENES VA DIRIJIDO?
        </a>
      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Puede ser para cualquier estudiante de bachillerato, ciencia o ingenieria,
                            todos los problemas expuestos en el sitio son tomados de libros y otros creados por las personas que aportan a esta web.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          ¿CÓMO APORTAR?
        </a>
      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Si quieres unirte a nuestro grupo de desarrollo o al grupo de matematicos para aportar con tus conocimientos aqui te dejamos un enlace donde puedes registrate  <a href="#">Aqui</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer class="footer">
       <div class="colums">
        <ul id="colum_1">
            <li class="titulo_content_footer">Contenido</li>
            <li><a href="">Calculadora</a></li>
            <li><a href="">Ejercicios</a></li>
            <li><a href="">Libros</a></li>
            <li><a href="">Videos</a></li>
        </ul>
        <ul id="colum_2">
            <li class="titulo_content_footer">Soporte</li>
            <li><a href="">Administrador</a></li>
            <li><a href="">Servicios Directo</a></li>
            <li><a href="">Contàctar</a></li>
            <li><a href="">Mapa del sitio</a></li>
        </ul>
        <ul id="colum_3">
            <li class="titulo_content_footer">Legal</li>
            <li><a href="">Informacion</a></li>
            <li><a href="">Administrativos</a></li>
            <li><a href="">Privacidad</a></li>
            <li><a href="">Terminos</a></li>
        </ul>
       </div>

        <div class="addthis_horizontal_follow_toolbox"></div>

        <div class="license">
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">INTEGRAPP</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.integrapp.hol.es/creator.html" property="cc:attributionName" rel="cc:attributionURL">Ing. Maritza Pinta</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons | Internacional License</a>.<br />Creado a partir de la obra en <a xmlns:dct="http://purl.org/dc/terms/" href="http://www.utmachala.edu.ec/portal/" rel="dct:source">UTMACH</a>
        </div>



    </footer>
//cdn.ckeditor.com/4.5.4/standard/ckeditor.js"></script>
        -->
    <script type="text/javascript" src="<?= base_url() ?>plantillas/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>plantillas/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>plantillas/js/main.js"></script>
<!--    <script src="https://hammerjs.github.io/dist/hammer.js"></script>-->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-564bb4ef06b5ff9f" async="async"></script>


</body>

</html>
