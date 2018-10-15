<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Libros extends CI_Controller {


	public function index()
	{
		$this->load->model('post_teoria');
		$this->load->model('post_videos');
   		// ultimos cotenidos
    	$ultimo_contenido = $this->post_teoria->getLastTeoria();
    	$ultimo_video = $this->post_videos->getLastVideo();

    	$footer = array('lastT' => $ultimo_contenido, 'lastV'=> $ultimo_video);
    	$footer ['video'] = true;

    	// obtiene toda la tabla de libros -> consulta
    	$result = $this->db->get('libros');
    	$data = array('consulta' => $result );
	    $datos_page = array('titulo' => 'Libros' , 'css'=> 'Libros');
	    $this->load->view("guest/header",$datos_page);
	    $this->load->view("guest/aside");
	    $this->load->view("guest/libros/libros-galeria",$data);
	    $this->load->view('guest/footer',$footer);
	}

	public function lista(){
		$this->load->model('post_teoria');
		$this->load->model('post_videos');
   		// ultimos cotenidos
    	$ultimo_contenido = $this->post_teoria->getLastTeoria();
    	$ultimo_video = $this->post_videos->getLastVideo();

    	$footer = array('lastT' => $ultimo_contenido, 'lastV'=> $ultimo_video);
    	$footer ['video'] = true;

    	$result = $this->db->get('libros');
    	$data = array('consulta' => $result );

	    $datos_page = array('titulo' => 'Libros' , 'css'=> 'Libros');
	    $this->load->view("guest/header",$datos_page);
	    $this->load->view("guest/aside");
	    $this->load->view("guest/libros/libros-list.php",$data);
	    $this->load->view('guest/footer',$footer);

	}

	public function insertar(){
		if($this->session->userdata('login')){
	      $footer = array('teoria' => false, 'video' => false, 'libros'=>true, 'ejercicios' => false);
	      $this->headerLoader();//carga el aside y el header
	      $this->load->view("admin/libros/nuevo");
	      $this->load->view("admin/footer",$footer);
	    }
	}

	public function editar(){
		if($this->session->userdata('login')){

		  $this->load->model('post_libros');
		  $consulta  = $this->post_libros->getLibroFromTo();

		  $data ['consulta'] = $consulta;
		  $footer = array('teoria' => false, 'video' => false, 'libros'=>true, 'ejercicios' => false);

		  $this->headerLoader();//cargar el header y el aside

	      $this->load->view("admin/libros/editar",$data);
	      $this->load->view("admin/footer",$footer);
	    }
	}

	public function guardardatos(){
		$respuesta = "done";
	  	$msg ="";
	  	$post  = $this->input->post();
	  	$this->load->model('post_libros');
	  	if($this->post_libros->saveLibro($post)){
	  	 	$msg ="Sus datos se guardaron con exito...";
	  	}
	  	else {
	  		$msg = "Sus datos no pudieron ser guardados correctamente";
	  		$respuesta ="bad";
	  	}
	  	$salidaJSON=array("r" => $respuesta,"m" => $msg);
		  echo (json_encode($salidaJSON));

	}

	public function removebook($id=''){
		$this->load->model('post_libros');
		if($id !== false){
			$result = $this->post_libros->removeBook($id);
			header('location: '.base_url().'libros/editar');
		}
		else {
			header('location: '.base_url().'libros/editar');
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


}


/* End of file Libros.php */
/* Location: ./application/controllers/Libros.php */