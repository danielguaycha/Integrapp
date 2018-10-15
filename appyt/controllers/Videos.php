<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Videos extends CI_Controller {

	public function index()
	{
		// modelos teoria y videos
		$this->load->model('post_teoria');
		$this->load->model('post_videos');

		// obteniendo todos los resultados de calculo  getIntegralVideo($inicio, $limitie) | getDerivalVideo($inicio, $limitie)
   		$vintegral = $this->post_videos->getIntegralVideo();
    	$vdiferencial  = $this->post_videos->getDerivalVideo();

    	// ultimos cotenidos
    	$ultimo_contenido = $this->post_teoria->getLastTeoria();
    	$ultimo_video = $this->post_videos->getLastVideo();

    	$footer = array('lastT' => $ultimo_contenido, 'lastV'=> $ultimo_video);
    	$footer ['video'] = true;
    	// cosulta de la base de datos por partes divididas
    	$data = array('vintegral' => $vintegral, 'vdiferencial' => $vdiferencial );

	    $datos_page = array('titulo' => 'Videos' , 'css'=> 'Videos');

	    $this->load->view("guest/header",$datos_page);
	    $this->load->view("guest/aside");
	    $this->load->view("guest/video/video-galeria",$data);
	    $this->load->view('guest/footer',$footer);
	}
	public function lista(){
		// modelos teoria y videos
		$this->load->model('post_teoria');
		$this->load->model('post_videos');

		// obteniendo todos los resultados de calculo  getIntegralVideo($inicio, $limitie) | getDerivalVideo($inicio, $limitie)
   		$vintegral = $this->post_videos->getIntegralVideo();
    	$vdiferencial  = $this->post_videos->getDerivalVideo();

    	// ultimos cotenidos
    	$ultimo_contenido = $this->post_teoria->getLastTeoria();
    	$ultimo_video = $this->post_videos->getLastVideo();

    	$footer = array('lastT' => $ultimo_contenido, 'lastV'=> $ultimo_video);
    	$footer ['video'] = true;

    	// cosulta de la base de datos por partes divididas
    	$data = array('vintegral' => $vintegral, 'vdiferencial' => $vdiferencial );

	    $datos_page = array('titulo' => 'Videos' , 'css'=> 'Videos');

	    $this->load->view("guest/header",$datos_page);
	    $this->load->view("guest/aside");
	    $this->load->view("guest/video/video-list",$data);
	    $this->load->view('guest/footer',$footer);
	}

	public function insertar(){
		if($this->session->userdata('login')){
	      $footer = array('teoria' => false, 'video' => true, 'libros'=>false);
	      $this->headerLoader();
	      $this->load->view("admin/video/nuevo");
	      $this->load->view("admin/footer",$footer);
	    }
	}

	public function editar(){
		if($this->session->userdata('login')){
		  $this->load->model('post_videos');

		  $consulta = $this->post_videos->getVideoFromTo(0,20);
		  $data['consulta'] = $consulta;
	      $footer = array('teoria' => false, 'video' => false, 'libros'=>false);
	      $this->headerLoader();
	      $this->load->view("admin/video/editar",$data);
	      $this->load->view("admin/footer",$footer);
	    }
	}

	public function save(){
		$respuesta = "done";
	  	$msg ="";
	  	$post  = $this->input->post();
	  	$this->load->model('post_videos');
	  	if($this->post_videos->saveVideo($post)){
	  	 	$msg ="Sus datos se guardaron con exito...";
	  	}
	  	else {
	  		$msg = "Sus datos no pudieron ser guardados correctamente";
	  		$respuesta ="bad";
	  	}
	  	$salidaJSON=array("r" => $respuesta,"m" => $msg);
		  echo (json_encode($salidaJSON));
	}

	public function remove($id = FALSE){
		$this->load->model('post_videos');
		if($id !== false){
			$result = $this->post_videos->removeVideo($id);
			header('location: '.base_url().'videos/editar');
		}
		else {
			header('location: '.base_url().'videos/editar');
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
/* End of file Videos.php */
/* Location: ./application/controllers/Videos.php */