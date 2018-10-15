 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Videos
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Videos</a></li>
            <li class="active">Insertar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

         <div class="row">
             <div class="col-md-12">

                 <div class="box box-default centeredpanel">

                    <div class="box-header">
                      <h3 class="box-title">Integrapp <small> - Control de publicaciones.</small></h3>
                    </div>
                    <!-- form contenido -->
                    <div class="box-body pad">

                       <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-info"></i> Aviso!</h4>
                        Porvafor asegurese de completar todos los campos.
                       </div>
                      <form method="post" name="form_video" id="insert-video">
                       <label>Enlace del video: </label><br>
                        <input type="text" name="link" name="link" class="form-control" required placeholder="Link ..."><br>
                        <label>Tipo: </label><br>
                        <select class="form-control" name="tipo">
                            <option value="Calculo integral">Calculo Integral</option>
                            <option value="Calculo Diferencial">Calculo diferencial</option>
                        </select><br>
                        <label>Titulo: </label><br>
                        <input type="text" name="titulo" name="titulo" required placeholder="EL titulo del video aqui ... " class="form-control"><br>
                        <label>Descripción: </label><br>
                        <textarea class="form-control" name="descripcion"></textarea><br>
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </form>
                    </div>
                 </div>
             </div>
         </div>

        </section><!-- /.content -->
      </div>
