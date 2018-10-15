<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ejercicios extends CI_Controller {

	private $msg = '';

	public function setMsg($msg){
		$this->msg = $msg;
	}

	public function getMsg(){
		return $this->msg;
	}

	public function index()
	{
		if($id = $this->session->userdata('login')){
			$id = $this->session->userdata('id');
	 		$this->load->model('post_ejercicios');
	 		$this->load->model('niveles');
	 		$data['niveles'] =  $this->niveles->getAllLevels();
	 		$data['completados'] = $this->niveles->getCompleteLevels($id);

		    $datos_page = array('titulo' => 'Ejercicios' , 'css'=> 'Libros');

		    $this->load->view("guest/header",$datos_page);
		    $this->load->view("guest/aside");
		    $this->load->view("guest/ejercicios/inicio",$data);
		    $this->load->view("guest/ejercicios/footer");
		}else{echo "no estas logeado";

		}
	}

	public function nivel($nivel =false){
	if($this->session->userdata('login')){
		if($nivel !==false){
			$this->load->model('niveles');
			$id = $this->session->userdata('id');
			if($this->niveles->comprobarNivel($nivel, $id)){// compruebo si puedo ver el nivel
				$datos_page = array('titulo' => 'Ejercicios' , 'css'=> 'Libros');
				if($this->niveles->getCompleteLevels($id)>$nivel){
					$this->load->view("guest/header",$datos_page);
					$this->load->view("guest/aside");
					echo '
					<div class="body-3">
					<div class="box box-primary">
					     <div class="box-header">
					       <h4>Ya has completado este nivel</h4>
					     </div>
					     <div class="box-footer">
							<a href="'.base_url().'ejercicios" class="btn btn-primary">Seleccionar Nivel</a>
					     </div>
					</div>
					</div>';

				}else{
					$result = $this->niveles->getLevelsForExercice($nivel);
					$data = array('consulta' => $result, 'nivel'=> $nivel);
					$this->load->view("guest/header",$datos_page);
				    $this->load->view("guest/aside");
				    $this->load->view("guest/ejercicios/content",$data);
			    }
			    $this->load->view("guest/ejercicios/footer");
			}else{
				$this->load->view('404');
			}
		}else{
			header('location:'.base_url().'ejercicios');
		}
	}else{
		header('location:'.base_url().'login');
	}
		/*$this->load->model('post_ejercicios');
 		$data ['consulta'] = $this->post_ejercicios->selectEjerByTitle('INTEGRACIÓN DE FORMAS ELEMENTALES ORDINARIAS PARTE II');
	    $datos_page = array('titulo' => 'Ejercicios' , 'css'=> 'Libros');
	    $this->load->view("guest/header",$datos_page);
	    $this->load->view("guest/aside");
	    $this->load->view("guest/ejercicios/content",$data);
	    $this->load->view("guest/ejercicios/footer");*/
	}

	public function insertar(){
		if($this->session->userdata('login')){
			$footer = array('teoria' => false, 'video' => false, 'libros'=>false, 'ejercicios' => true);
			$this->headerLoader();
		    $this->load->view("admin/ejercicios/nuevo");
		    $this->load->view("admin/footer",$footer);
		}else{
			header("Location:".base_url()."login");
		}
	}

	public function actualizar($id = false){
		if($this->session->userdata('login')){
			if($id !=false){
				$this->load->model('post_ejercicios');
				$result = $this->post_ejercicios->getExerciseById($id);
				if($result != null){
					$data['consulta'] = $result;
					$data['mensaje'] = ($this->getMsg()!='')?$this->getMsg():'';

					$footer = array('teoria' => false, 'video' => false, 'libros'=>false, 'ejercicios' => true);

					$this->headerLoader();

				    $this->load->view("admin/ejercicios/edit",$data);
				    $this->load->view("admin/footer",$footer);
				}else{
					header('location: '.base_url().'ejercicios/remove');
				}
			}
		}else{
			header("Location:".base_url()."login");
		}
	}

	public function remove(){
		if($this->session->userdata('login')){
			$this->load->model('post_ejercicios');
			$result =  $this->post_ejercicios->getAllexercises();
			$footer = array('teoria' => false, 'video' => false, 'libros'=>false, 'ejercicios' => false);
			$data['consulta']= $result;

			$this->headerLoader();

			$this->load->view("admin/ejercicios/remove",$data);
			$this->load->view("admin/footer",$footer);
		}else{
				header("Location:".base_url()."login");
		}
	}

	//operaciones  :D

	public function savethisejercicio(){
		if($this->session->userdata('login')){
			//Recibe los campos desde ajax guest->ejercicios->footer->
		  	$respuesta = "done";
	  		$msg ="";
	  		$post  = $this->input->post();
	  		$this->load->model('post_ejercicios');
	  		if($this->post_ejercicios->insertEjercicio($post)){
	  	 		$msg ="Sus datos se guardaron con exito...";
	  		}
		  	else {
			  	$msg = "Sus datos no pudieron ser guardados correctamente";
			  	$respuesta ="bad";
		  	}
		  	$salidaJSON=array("r" => $respuesta,"m" => $msg);
			  echo (json_encode($salidaJSON));
		}else{

		}
	}

	public function removeThisEjercicio($id){
		if($this->session->userdata('login')){
			if($id !=""){
				$this->load->model('post_ejercicios');
				if($this->post_ejercicios->deteleById($id)){
					header('location:'.base_url().'ejercicios/remove');
				}else {
					header('location:'.base_url().'ejercicios/remove');
				}
			}else{
				header('location:'.base_url().'ejercicios/remove');
			}
		}else{

		}
	}

	public function updateThisEjercicio(){
		if($this->session->userdata('login')){
			$post  = $this->input->post();
			if(isset($post['id'])){
				if($post['contenido']!='' && $post['titulo']!='' && $post['descripcion'] !=''){
					$this->load->model('post_ejercicios');
			  		if($this->post_ejercicios->updateEjercicio($post)){
			  			$this->setMsg('');
			  			header('location:'.base_url().'ejercicios/remove');
			  		}
		  		}else{
		  			$this->setMsg('Existen datos que son obligatorios');
		  			$this->actualizar($post['id']);	
		  		}
		  	}
			else{
				$this->load->view('404');
			}
			//$this->output->enable_profiler(TRUE);}
		}
	}
	private function headerLoader(){
		#Mensajes -> datos Usuario -> Notificaciones
		  $this->load->model('user');//.>Dependencia - Modelo user
		  $user = $this->user->getUserById($this->session->userdata('id'));//.>Datos del usuario
		  $header = array(
			          'titulo' => 'Eliminar/Modificar Ejercicios',
			          'notify' => $this->user->getNotifications(),
			          'mensajes' => $this->user->getFiveLastMensagges(),
			          'usuario' => $user
			          );
		  $this->load->view("admin/header",$header);
      	  $this->load->view("admin/aside",$user);
	}

	public function validar(){
		if($this->session->userdata('login')){
			$id = $this->session->userdata('id');
			$msg ="";
			$respuesta ="done";
			$post= $this->input->post();
			if(isset($post['puntaje'])){
				$r= $post['radios'];
				$t= $post['inputs'];
				$rt= (($r+$t)*100)-($post['pasos']*100);
				if($post['puntaje']>=$rt){
					$this->load->model('niveles');
					if($this->niveles->habilitarSiguienteNivel($id)){
						$sig = $this->niveles->getCompleteLevels($id);
						$msg='Felicidades! ya puedes pasar al siguiente niveles - <a href="'.base_url().'ejercicios/nivel/'.$sig.'" class="btn btn-default" style="text-decoration:none;">GO!<a/>';
					}
				}else{
					$this->load->model('niveles');
					$sig = $this->niveles->getCompleteLevels($id);
					$msg ='Tu puntaje '.$post['puntaje'].', no es suficiente para pasar al siguiente nivel, necesitas minimo '.$rt.'
					<br>Intentele de nuevo.  <a href="'.base_url().'ejercicios/nivel/'.$sig.'"> INTENTAR DE NUEVO </a>
					';
					$respuesta = 'done';
				}
			}else{
				$respuesta="bad";
				$msg="Ocurrio un error al procesar los datos :(";
			}
			$salidaJSON=array("r" => $respuesta,"m" => $msg);
			echo (json_encode($salidaJSON));
		}
	}

}

/* End of file Ejercicios.php */
/* Location: ./application/controllers/Ejercicios.php */