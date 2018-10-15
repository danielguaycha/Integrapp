
<!--*************** End aside menu *************************-->
    <div class="body">
    <div id="forma_visual">
        <ul>
         
            <li>
                <a href="<?=base_url()?>libros" data-toggle="tooltip" data-placement="left" title="Galeria" >
                    <span class="glyphicon glyphicon-picture"></span>
                </a>

            </li>
        </ul>
    </div>
<!--*************** Videos *************************-->
        <div class="contenido_videos">
            <h4><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp; &nbsp;Lista de Libros</h4>    
             <!-- Contenedor de la lista de videos disponiblas -->
            <div class="contenedor-videos">
               <div class="table-responsive">
                  <table class="table">
                   <thead>
                      <tr><th>Libros de Calculo </th><th><a></a></th></tr>
                   </thead>
                    <tbody>
                    <?php 
                    foreach ($consulta->result() as $libro ) {
                      echo '

                        <tr>
                             <td>'.strtoupper($libro->titulo).'</td>
                             <td><a href="'.$libro->link.'" target="_blank"><span class="int-openbook6"></span>  Ver</a></td>
                         </tr>

                      ';
                    }
                    ?>
                         
                         <!--  <tr>
                             <td>Tema 2</td>
                             <td><a href=""><span class="int-openbook6"></span>  Ver</a></td>
                         </tr>
                          <tr>
                             <td>Tema 3</td>
                             <td><a href=""><span class="int-openbook6"></span>  Ver</a></td>
                         </tr>
                          <tr>
                             <td>Tema 4</td>
                             <td><a href=""><span class="int-openbook6"></span>  Ver</a></td>
                         </tr> -->
                    </tbody>
                  
                  </table>
                </div>
               

               </div>
</div>
</div>
