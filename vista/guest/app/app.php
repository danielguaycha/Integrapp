<!DOCTYPE HTML>
<html>

<head>
    <title>Aplicacion Integrapp</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?=base_url()?>plantillas/css/app.css" />
        <link rel="shortcut icon" href="<?=base_url()?>plantillas/img/logo.png">

    <style>
        #pod_0100>div>a {
            display: none;
        }
        div.stepByStep{
            display: none !important;
        }
        table.WolframAlphaWidget input[type="text"],
        .WolframAlphaWidgetLarge .wolframAlphaWidgetContent input[type="text"]{
            height: 30px;
            font-size: 14px !important;
            padding: 10px !important;
        }
        hr {
            border: 0;
            height: 2px;
            text-align: center;
            background-image: linear-gradient(left, #333, rgba(255, 255, 255, 0.5);
            , #fff);
        }
        .waWidgetFooter,
        .wolframAlphaWidgetBeta {
            display: none;
        }
        .contenedor {
            border: 3px solid black;
            display: inline-block;
        }
        .waw_header {
            display: none;
        }
        .head_ad {
            background: #1ABC9C;
            display: block;
            height: 42px;
            margin-bottom: -14px
        }
        .collapse {
            display: block !important;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div id="header">

        <div class="top">

            <!-- Logo -->
            <div id="logo">

                <span class="image avatar48"><a href="<?=base_url()?>"><img src="<?=base_url()?>plantillas/img/logo.png" height="670" width="697" style="background:#222629;" alt="" /></a></span>
                <h1 id="title"><a href="<?=base_url()?>">Integrapp</a></h1>
                <p>Una App 100% Free</p>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <!--

                                Prologue's nav expects links in one of two formats:

                                1. Hash link (scrolls to a different section within the page)

                                   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

                                2. Standard link (sends the user to another page/site)

                                   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

                            -->
                <ul>
                    <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="int int-home248"></span>Intro</a>
                    </li>
                    <li><a href="#instruciones" id="portfolio-link" class="skel-layers-ignoreHref"><span class="int int-laptopcomputer8"></span>Metodos de Entrada</a>
                    </li>
                    <hr align="center" color="#333333" size="4px" />
                    <li><a href="#indefinida" id="about-link" class="skel-layers-ignoreHref"><span class="int int-function"></span>Integral Indefinida</a>
                    </li>
                    <li><a href="#definida" id="contact-link" class="skel-layers-ignoreHref"><span class="int int-function"></span>Integral Definida</a>
                    </li>
                    <li><a href="#derivadas" id="contact-link" class="skel-layers-ignoreHref"><span class="int int-teacher24"></span>Derivadas</a>
                    </li>
                    <li><a href="#funciones" id="contact-link" class="skel-layers-ignoreHref"><span class="int int-mathematics21"></span>Graficar Funciones</a>
                    </li>
                </ul>
            </nav>

        </div>

    </div>

    <!-- Main -->
    <div id="main">

        <!-- Intro -->
        <section id="top" class="one dark cover">
            <div class="container">

                <header>
                    <h2 class="alt" style="font-weight:500;background-color: rgba(0,0,0,.3);border-radius: 23px;">Hola, Aqui puedes encontrar Soluciones para tus problemas</h2>

                </header>

                <footer>
                    <a href="#instruciones" class="button scrolly">Iniciemos</a>
                </footer>

            </div>
        </section>

        <!-- Metodos de Entrada -->
        <section id="instruciones" class="two">
            <div class="container">

                <header>
                    <h2>Métodos de Entrada</h2>
                </header>

                <p>Es importante conocer las metodos de entrada a aplicarse al momento de Ingresar los valores por esto a continuacion se detalla en cada imagen cada metodo.</p>

                <div class="row">
                    <div class="4u 12u$(mobile)">
                        <article class="item">
                            <a href="#" class="image fit">
                                <img src="<?=base_url()?>plantillas/img/app/pic03.png" alt="" />
                            </a>
                            <header>
                                <h3>Básicos</h3>
                            </header>
                        </article>
                        <article class="item">
                            <a href="#" class="image fit">
                                <img src="<?=base_url()?>plantillas/img/app/pic03.jpg" alt="" />
                            </a>
                            <header>
                                <h3>Logaritmicas y Exponenciales</h3>
                            </header>
                        </article>
                    </div>
                    <div class="4u 12u$(mobile)">
                        <article class="item">
                            <a href="#" class="image fit">
                                <img src="<?=base_url()?>plantillas/img/app/pic04.jpg" alt="" />
                            </a>
                            <header>
                                <h3>Trigonométricas</h3>
                            </header>
                        </article>
                        <article class="item">
                            <a href="#" class="image fit">
                                <img src="<?=base_url()?>plantillas/img/app/pic05.jpg" alt="" />
                            </a>
                            <header>
                                <h3>Funciones Hiberbólicas</h3>
                            </header>
                        </article>
                    </div>
                    <div class="4u$ 12u$(mobile)">
                        <article class="item">
                            <a href="#" class="image fit">
                                <img src="<?=base_url()?>plantillas/img/app/pic002.png" alt="" />
                            </a>
                            <header>
                                <h3>Basicos</h3>
                            </header>
                        </article>
                        <article class="item">
                            <a href="#" class="image fit">
                                <img src="<?=base_url()?>plantillas/img/app/pic07.jpg" alt="" />
                            </a>
                            <header>
                                <h3>Inversas</h3>
                            </header>
                        </article>
                    </div>
                </div>

            </div>
        </section>

        <!-- Integral Indefinida -->
        <section id="indefinida" class="three">
            <div class="container">

                <header>
                    <h2>Integral Indefinida</h2>
                </header>
                <div style="border:2px solid #1ABC9C; " class="contenedor">
                    <span class="head_ad"></span>
                    <script type="text/javascript" id="WolframAlphaScript36036d598e3d81b103ce8b3c6786dfb" src="//www.wolframalpha.com/widget/widget.jsp?id=36036d598e3d81b103ce8b3c6786dfb&output=iframe&width=605"></script>
                </div>

            </div>
        </section>

        <!-- Integral Definida -->
        <section id="definida" class="three">
            <div class="container">

                <header>
                    <h2>Integral Definida</h2>
                </header>
                <div style="border:2px solid #3498DB; " class="contenedor">
                    <span class="head_ad" style="background:#3498DB;"></span>
                    <script type="text/javascript" id="WolframAlphaScript7d6369ddcb59836764f1231754bb5fc5" src="//www.wolframalpha.com/widget/widget.jsp?id=7d6369ddcb59836764f1231754bb5fc5&output=iframe&width=605"></script>
                </div>

        </section>

        <!-- Derivadas -->
        <section id="derivadas" class="four">
            <div class="container">
                <header>
                    <h2>Derivadas</h2>
                </header>
                <div style="border:2px solid #34495E; " class="contenedor">
                    <span class="head_ad" style="background:#34495E;"></span>
                    <script type="text/javascript" id="WolframAlphaScriptbcbda2e2ba86c4e75a6253af3f8dc6d1" src="//www.wolframalpha.com/widget/widget.jsp?id=bcbda2e2ba86c4e75a6253af3f8dc6d1&output=iframe"></script>

                </div>
            </div>
        </section>
        <!-- Grafico de funciones -->
        <section id="funciones" class="four">
            <div class="container">
                <header>
                    <h2>Grafico de Funciones</h2>
                </header>
                <div style="border:2px solid #E74C3C; " class="contenedor">
                    <span class="head_ad" style="background:#E74C3C;"></span>
                    <script type="text/javascript" id="WolframAlphaScript8236b118622d22d54df74f6cc8023529" src="//www.wolframalpha.com/widget/widget.jsp?id=8236b118622d22d54df74f6cc8023529&theme=red&width=605"></script>
                </div>
            </div>
        </section>

        </div>

        <!-- Footer -->
        <div id="footer">

            <!-- Copyright -->
            <ul class="copyright">
                <li>&copy; Todos los derechos reservados por el autor.</li>
                <li>Design: <a href="http://www.utmachala.edu.ec">UTMACH</a>
                </li>
            </ul>

        </div>


        <script type="text/javascript">
            var a = document.getElementsByClassName('m');
            a[0].addEventListener("click", exe);

            function timeUp() {
                alert("Calculando. . . .")
                setTimeout(exe(), 1000);
            }

            function exe() {
                var m = document.getElementsByClassName('wolframAlphaWidgetComputingSpinner');
                document.getElementById("wolframAlphaWidgetOverlay91443").innerHTML = "<div class='wolframAlphaWidgetComputingSpinner'><strong>Integrapp</strong><br><br>Realizando Operaciones</div>"
            }
        </script>
</body>

</html>