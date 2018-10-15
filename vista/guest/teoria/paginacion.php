  <div class="body">
  	 <div class="contenedor-paginacion">
            <h3><span class="glyphicon glyphicon-th-list"></span>   <?= '  '.$typeContent?>   </h3>
            <div>
                <ul class="lista-resultados">
				 <?php
                    foreach ($integrales->result() as $fila) {
                      echo ' 
							<li>
		                        <a href="'.base_url().'teorias/article/'.$fila->id_teoria.'" class="title-post"><span class="glyphicon glyphicon-link">  </span> '.$fila->titulo.' </a>
		                        <br>
		                        <span class="link-title">'.base_url().'teorias/article/'.$fila->id_teoria.'</span>
		                        <br>
		                        <span>'.$fila->descripcion.'</span>
		                    </li>
                      ';
                    }
                 ?>


                 <!--    <li>
                        <a href="#" class="title-post"><span class="glyphicon glyphicon-link">  </span> Este es el titulo del post</a>
                        <br>
                        <span class="link-title">www.localhost/toerias/calculo-integral</span>
                        <br>
                        <span>Esta es la breve descripcion del post que puede exostir asi como tambien no!</span>
                    </li>
                    <hr class="divider">
                     <li>
                        <a href="#" class="title-post"><span class="glyphicon glyphicon-link">  </span> Este es el titulo del post</a>
                        <br>
                        <span class="link-title">www.localhost/toerias/calculo-integral</span>
                        <br>
                        <span>Esta es la breve descripcion del post que puede exostir asi como tambien no!</span>
                    </li>
                    <hr class="divider">
                     <li>
                        <a href="#" class="title-post"><span class="glyphicon glyphicon-link">  </span> Este es el titulo del post</a>
                        <br>
                        <span class="link-title">www.localhost/toerias/calculo-integral</span>
                        <br>
                        <span>Esta es la breve descripcion del post que puede exostir asi como tambien no!</span>
                    </li>
 -->
                </ul>
            </div>
            <center><?php echo $this->pagination->create_links(); ?></center>
    </div>
  </div>