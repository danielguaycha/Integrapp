<!doctype html>
<html lang="es">

<head>
    <title><?=$titulo?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url() ?>plantillas/css/blog.css">
    <link rel="shortcut icon" href="<?=base_url()?>plantillas/img/logo.png">
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <?php if($titulo == "Videos"){ ?>
    <link rel="stylesheet" href="<?=base_url()?>plantillas/css/jquery.fancybox.css">
    <?php } ?>

    <?php if($titulo == "Ejercicios"){ ?>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>plantillas/css/admin.css">
    <?php } ?>
</head>

<body>

    <header class="header">
        <nav>
            <a href="<?=base_url()?>"><span id="simbol" class="<?=$css?>-color-bg"><p>I</p></span></a>
            <form id="form_search">
                <input type="search" placeholder="Buscar contenidos ...">
            </form>
            <?php if($this->session->userdata('login')){ ?>
            <div class="content_user_menu">
                <a class="dropdown-toggle btxt-color-<?=$css?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="data_user">
                    <div><i class="demo-icon icon-user"></i>
                    </div>
                </a>
               
                <ul class="dropdown-menu">
                    <li><a href="<?=base_url()?>teorias/insertar">Administrar Sitio</a>
                    </li>
                    <li><a href="#">Notificaciones</a>
                    </li>
                    <li><a href="#">Configuración</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?=base_url()?>login/logout">Salir</a>
                    </li>
                </ul>
      
            </div>
            <?php }?>
        </nav>
    </header>