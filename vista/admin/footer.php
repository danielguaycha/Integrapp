
      <!-- **************************** BARRA DE CONTROL DERECHA **************************** -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Actividades Recientes</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="#">
                  <i class="menu-icon fa fa-check-circle-o bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nueva Propuesta</h4>
                    <p>22/12/16</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->
          </div><!-- /.tab-pane -->

          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Tabla de Control</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">Configuraciones Generales</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Aviso!
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Estamos trabajando duro para traerte el panel de configuración completo.
                  <br>Regresa mas tarde . .!
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><div class="control-sidebar-bg"></div>
      </div>

      <!-- **************************** ./END  BARRA DE CONTROL DERECHA **************************** -->

      <!-- REQUIRED JS SCRIPTS -->

      <!-- jQuery-->
      <script src="<?=base_url()?>plantillas/js/jquery-1.11.3.min.js"></script>
      <!-- Bootstrap-->
      <script src="<?=base_url()?>plantillas/js/bootstrap.min.js"></script>
      <!-- INTEGRAPP -->
      <script src="<?=base_url()?>plantillas/js/app.js"></script>
       <!-- PROPUPS NOTIFICACIONES -->
      <script type="text/javascript" src="<?=base_url()?>plantillas/js/jquery.gritter.min.js"></script>


<script type="text/javascript">
  var url="";
   $('.confirm_delete').click(function(){
      window.location.href =url;
      $('#myModal').modal('hide');
      return false;
    });

    $('.yop').click(function(){
    $('#myModal').modal('show');
       url = $(this).data('url');
       return false;
    });
</script>
<!-- CK EDITOR - CONDICIONAL -->
<?php if($teoria==true || $ejercicios==true){ ?>
<script type="text/javascript" src="<?=base_url()?>plantillas/lib/ckeditor.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
       CKEDITOR.replace( 'contenido' );
  });
</script>
<?php } ?>

<!--FUNCION DE MENSAJES-->
<script type="text/javascript">
  function msg(titulo, mensaje, tiempo, index) {
      var a = ["<?=base_url()?>plantillas/img/notificacion/confirm.png", "", ""];

      var unique_id = $.gritter.add({
          // (string | mandatory) the heading of the notification
          title: titulo,
          // (string | mandatory) the text inside the notification
          text: mensaje,
          // (string | optional) the image to display on the left
          image: a[index],
          // (bool | optional) if you want it to fade out on its own or just sit there
          sticky: true,
          // (int | optional) the time you want it to be alive for before fading out
          time: '',
          // (string | optional) the class name you want to apply to that specific message
          class_name: 'my-sticky-class'
      });
      setTimeout(function() {
          $.gritter.remove(unique_id, {
              fade: true,
              speed: 'slow'
          });

      }, tiempo)
  }
</script>

<!--GUARDAR TEORIAS CON AJAX-->
<?php if($teoria==true){ ?>

    <script type="text/javascript">
    $('.form_nuevo').on('submit',function(){
      var titulo = $('#titulo').val();
      var tipo = $('#tipo').val();
      var descripcion = $('#descripcion').val();
      var contenido = CKEDITOR.instances['contenido'].getData();
      var citas= $('#citas').val();
      var referencias =  $('#referencias').val();

      if(titulo !="" && tipo !="" && descripcion !="" && contenido !=""){
        //alert(titulo + "  " + tipo +"  "+ descripcion +" "+citas +"  "+referencias +" "+contenido);
        var values = {titulo,tipo,descripcion,contenido,citas,referencias};

        $.ajax({
          type:'POST',
          dataType:"json",
          url:"<?=base_url()?>teorias/guardarpost",
          data:(values),
          beforeSend: function()
          {
            // antes de enviar
          },
          success: function(respuesta)
          {
            if(respuesta.r =="done"){
              alert(respuesta.m);
            }
          },
          error: function(request, error)
         { 
          console.log(arguments);
              alert(" Lo sentimos habido un error intentalo mas tarde . . . " + error);
         }
        });
      }else {
         msg("Alerta !", "Algunos campos son requeridos! ",3000,0);
      }
      return false;
    });

    </script>
<?php } ?>

<!--GUARDAR VIDEOS CON AJAX-->
<?php if($video == true) {?>
  <script type="text/javascript">
      $('#insert-video').on('submit',function(){
        var data = $(this).serialize();
          $.ajax({
            type:'POST',
            dataType:"json",
            url:"<?=base_url()?>videos/save",
            data:(data),
            beforeSend: function()
            {
              // antes de enviar
            },
            success: function(respuesta)
            {
              if(respuesta.r =="done"){
                alert(respuesta.m);
              }
            },
            error: function(request, error)
           { 
            console.log(arguments);
                alert(" Lo sentimos habido un error intentalo mas tarde . . . " + error);
           }
          });
        return false;
      });

      </script>
<?php } ?>

<!--GUARDAR LIBROS CON AJAX-->
<?php if($libros==true){ ?>
   <script type="text/javascript">
    $('#insert-book').on('submit',function(){
      var data = $(this).serialize();
      alert(data);
        $.ajax({
          type:'POST',
          dataType:"json",
          url:"<?=base_url()?>libros/guardardatos",
          data:(data),
          beforeSend: function()
          {
            // antes de enviar
          },
          success: function(respuesta)
          {
            if(respuesta.r =="done"){
              alert(respuesta.m);
            }
          },
          error: function(request, error)
         { 
          console.log(arguments);
              alert(" Lo sentimos habido un error intentalo mas tarde . . . " + error);
         }
        });
      return false;
    });

    </script>
<?php } ?>

<!--GUARDAR EJERCICIOS CON AJAX-->
<?php if($ejercicios==true){ ?>
   <script type="text/javascript">
    $('#form_nuevo_ejercicio').on('submit',function(){
      var titulo = $('#titulo').val();
      var tipo = $('#tipo').val();
      var descripcion = $('#descripcion').val();
      var contenido = CKEDITOR.instances['contenido'].getData();


      if(titulo !="" && tipo !="" && descripcion !="" && contenido !=""){
       var values = {titulo,tipo,descripcion,contenido};

        $.ajax({
          type:'POST',
          dataType:"json",
          url:"<?=base_url()?>ejercicios/savethisejercicio",
          data:(values),
          beforeSend: function()
          {
            // antes de enviar
          },
          success: function(respuesta)
          {
            if(respuesta.r =="done"){
              alert(respuesta.m);
            }
          },
          error: function(request, error)
         { 
          console.log(arguments);
              alert(" Lo sentimos habido un error intentalo mas tarde . . . " + error);
         }
        });
      }else {
         msg("Alerta !", "Algunos campos son requeridos! ",3000,0);
      }
      return false;

    });

    </script>
<?php } ?>
  </body>
</html>
