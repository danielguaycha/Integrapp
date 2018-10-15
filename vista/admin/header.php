<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$titulo?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <link rel="shortcut icon" href="<?=base_url()?>plantillas/img/logo.png">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>plantillas/css/admin.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">div.panel:hover {z-index: 100 !important;height: auto !important;}
</style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
    <div class="wrapper">

      <!-- **************************** HEADER BARRA DE MENU SUPERIOR **************************** -->
      <header class="main-header">

        <!-- Logo -->
        <a href="<?=base_url()?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>I</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Integrapp</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <?php
                      $msg = count($mensajes->result());
                      if($msg>0){ ?>
                      <span class="label label-danger"><?=$msg?></span>
                  <?php } ?>
                </a>
                <ul class="dropdown-menu">
                <?php if($msg>0){ ?>
                    <li class="header">Tienes <?=$msg?> mensaje(s)</li>
                <?php }else{
                    echo '<li class="header">No tienes mensajes</li>';
                  }
                ?>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class="menu">
                    <?php if($msg<=0){ ?>
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <i class="menu-icon fa fa-envelope-o"></i>
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>
                            Bienvenido
                            <small><i class="fa fa-clock-o"></i> <!--fecha--></small>
                          </h4>
                          <!-- The message -->
                          <p>Aun no tienes mensajes</p>
                        </a>
                      </li><!-- end message -->
                    <?php }else{
                        foreach ($mensajes->result() as $fila) {
                          echo '
                              <li>
                                <a href="#">
                                  <div class="pull-left">
                                    <i class="menu-icon fa fa-envelope-o"></i>
                                  </div>
                                  <h4>
                                    '.substr($fila->asunto,0,20).'
                                    <small><i class="fa fa-clock-o"></i>'.$fila->fecha.'</small>
                                  </h4>
                                  <p>'.substr($fila->mensaje,0,40).'</p>
                                </a>
                              </li>
                          ';
                        }
                    }?>
                    </ul><!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">Ver todos los mensajes</a></li>
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <?php 
                    if($notify>0){
                      echo '<span class="label label-danger">'.$notify.'</span>';
                    }
                  ?>
                </a>
                <ul class="dropdown-menu">
                <?php
                  if($notify>0){
                      echo '<li class="header">Tu tienes '.$notify.' notificación(es)</li>';
                  }else{
                      echo '<li class="header">No tienes notificaciones</li>';
                  }
                ?>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                    <?php
                      if($notify>0){
                        echo '
                        <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> '.$notify.' Propuesta (s) nuevas.
                        </a>
                       </li>';
                      }else{
                        echo '
                          <li>
                            <a href="#">
                              <i class="fa fa-users text-aqua"></i>Ninguna propuesta por el momento.
                            </a>
                          </li>
                        ';
                      }
                    ?>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">Ver todo.</a></li>
                </ul>
              </li>

              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?=base_url()?>plantillas/img/avatar5.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?=$usuario->nombre?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?=base_url()?>plantillas/img/avatar5.png" class="img-circle" alt="User Image">
                    <p>
                      <?=$usuario->nombre?>
                      <small><?=$usuario->correo?></small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-body">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default">Config.</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?=base_url()?>login/logout" class="btn btn-default">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- /**************************** HEADER BARRA DE MENU SUPERIOR **************************** -->
