  <!-- **************************** BARRA LATERAL IZQUERDA **************************** -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url()?>plantillas/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?=$nombre?></p>
              <!-- Status -->
              <a>Administrador Root</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">OPCIONES</li>
            <!-- Optionally, you can add icons to the links -->

            <li class="treeview">
              <a href="#"><i><span class="int-file295" ></span></i> <span>Teoria</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url()?>teorias/insertar">Insertar</a></li>
                <li><a href="<?=base_url()?>teorias/edicion">Modificar/Eliminar</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i><span class="int-videoplayer82"></span></i> <span>Videos</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url()?>videos/insertar">Insertar</a></li>
                <li><a href="<?=base_url()?>videos/editar">Modificar/Eliminar</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i><span class="int-openbook6"></span></i> <span>Libros</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url()?>libros/insertar">Insertar</a></li>
                <li><a href="<?=base_url()?>libros/editar">Modificar/Eliminar</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#"><i><span class="int-mathematics21"></span></i> <span>Ejercicios</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url()?>ejercicios/insertar">Insertar</a></li>
                <li><a href="<?=base_url()?>ejercicios/remove">Modificar/Eliminar</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="<?=base_url()?>teorias"><i><span class="int-home248"></span></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i></a>
            </li>  
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
      <!--/ ****************************  BARRA LATERAL IZQUIERDA ****************************-->