<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teorias extends CI_Controller{

  function index()
  {
    $this->load->model('post_teoria');
    $this->load->model('post_videos');

    // ultimos cotenidos
    $ultimo_contenido = $this->post_teoria->getLastTeoria();
    $ultimo_video = $this->post_videos->getLastVideo();

    $footer = array('lastT' => $ultimo_contenido, 'lastV'=> $ultimo_video);
    $footer ['video'] = true;

    $consulta = $this->post_teoria->getIntegralAndDiferencial(20);

    $datos_page = array('titulo' => 'Teorias' , 'css'=> 'Teorias');
    $this->load->view("guest/header",$datos_page);
    $this->load->view("guest/aside");
    $this->load->view("guest/teoria/post",$consulta);
    $this->load->view('guest/footer',$footer);

  }

  public function actualizar($id =false){
    if($this->session->userdata('login')){
      if($id!==false){
        $this->load->model('post_teoria');
        $result = $this->post_teoria->getTeoriaById($id);
        $data['consulta']= $result;
        $footer = array('teoria' => true, 'video' => false, 'libros'=>false, 'ejercicios' => false);
        $this->headerLoader();

        $this->load->view("admin/teoria/update",$data);
        $this->load->view("admin/footer",$footer);
      }else{

      }
  }
  }

// insertar una nueva teoria carga de las vistas :D
  public function insertar(){

    if($this->session->userdata('login')){
      $footer = array('teoria' => true, 'video' => false, 'libros'=>false, 'ejercicios' => false);

      $this->headerLoader();
      $this->load->view("admin/teoria/nueva");
      $this->load->view("admin/footer",$footer);
    }else{
      header("Location:".base_url()."login");
    }
  }

// vista de modificar y eliminar
  public function edicion(){
  if($this->session->userdata('login')){
      $this->load->model('post_teoria');
      $footer = array('teoria' => false, 'video' => false, 'libros'=>false, 'ejercicios' => false);
      $data['consulta'] = $this->post_teoria->getAll(30);
      $this->headerLoader();
      $this->load->view("admin/teoria/edicion",$data);
      $this->load->view("admin/footer",$footer);
    }else{
      header("Location:".base_url()."login");
    }
  }


// operacion guardar
  public function guardarpost(){
    if($this->session->userdata('login')){
    	$respuesta = "done";
    	$msg ="";
      $contenidoHtml ="";
    	$post  = $this->input->post();
    	$this->load->model('post_teoria');
    	if($this->post_teoria->insertTeoria($post)){
    	 	$msg ="Sus datos se guardaron con exito...";
    	}
    	else {
    		$msg = "Sus datos no pudieron ser guardados correctamente";
    		$respuesta ="bad";
    	}
    	$salidaJSON=array("r" => $respuesta,"m" => $msg,"c" => $contenidoHtml);
  	  echo (json_encode($salidaJSON));
    }else{
      $this->load->view('404');
    }
}

  //operacion eliminar
  public function remove($id = FALSE){
    if($this->session->userdata('login')){
      if($id !== FALSE){
        $this->load->model('post_teoria');
        if($this->post_teoria->deleteTeoria($id)){
          header('location: '.base_url().'teorias/edicion');
        }

      }else{
        header('location: '.base_url().'teorias/edicion');
      }
    }else{
        $this->load->view('404');
    }
  }

  //operacion actulizar
  public function updateThis(){
     if($this->session->userdata('login')){
      $post  = $this->input->post();
      $this->load->model('post_teoria');
      if($this->post_teoria->updateTeoria($post)){
         header('location: '.base_url().'teorias/edicion');
      }
    }
  }

  public function article($id = ''){
   if($id !=""){

      $this->load->model('post_teoria');
      $this->load->model('user');
      $this->load->model('post_videos');


      $fila = $this->post_teoria->getTeoriaById($id);

      if($fila!=null){
        // ultimos cotenidos
        $ultimo_contenido = $this->post_teoria->getLastTeoria();
        $ultimo_video = $this->post_videos->getLastVideo();

        $footer = array('lastT' => $ultimo_contenido, 'lastV'=> $ultimo_video);
        $footer ['video'] = true;

        $autor = $this->user->getUserById($fila->id_usuario);
        $consulta = $this->post_teoria->getIntegralAndDiferencial(0);


        $i = $consulta['lastint'];
        $d = $consulta['lasd'];

        $data = array(
                      'fila'    => $fila,
                      'autor'   => $autor,
                      'titulo'  => $fila->titulo,
                      'css'     =>'Teorias',
                      'lastint' =>$i,
                      'lasd'    => $d);

        $this->load->view("guest/header",$data);
        $this->load->view("guest/aside");
        $this->load->view('guest/teoria/teorit', $data);
        $this->load->view('guest/footer',$footer);

      }else {
        echo $busqueda;
        echo $titulo;
        //header("Location: " . base_url()."teorias");
      }
    }else {
        header("Location: " . base_url()."teorias");
    }
  }

  public function integrals($pagina = false){
   // $this->output->enable_profiler(TRUE);
    $inicio = 0;
    $limite = 5;
    if($pagina !==false){
      $inicio = ($pagina-1)*$limite;
    }
    $this->load->library('pagination');
    $this->load->model('post_teoria');
    $this->load->model('post_videos');

    $consulta ['integrales'] = $this->post_teoria->listCalculoI($inicio, $limite);

    $config['base_url'] = base_url().'teorias/integrals/';
    $config['total_rows'] = count($this->post_teoria->listCalculoI());
    $config['per_page'] = $limite;
    $config['uri_segment'] = 3;
    $config['num_links'] = 3;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = base_url().'teorias/integrals/';
    $config['last_link'] = false;
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);

    // ultimos cotenidos
    $ultimo_contenido = $this->post_teoria->getLastTeoria();
    $ultimo_video = $this->post_videos->getLastVideo();

    $footer = array('lastT' => $ultimo_contenido, 'lastV'=> $ultimo_video);
    $footer ['video'] = true;

    $data = array('css' => 'Teorias', 'titulo'=> 'Teorias');
    $consulta['typeContent'] = "Calculo Integral";
    $this->load->view("guest/header",$data);
    $this->load->view("guest/aside");
    $this->load->view('guest/teoria/paginacion',$consulta);
    $this->load->view('guest/footer',$footer);
  }

  public function diferencials($pagina = false){
   // $this->output->enable_profiler(TRUE);
    $this->load->library('pagination');
    $this->load->model('post_teoria');
    $this->load->model('post_videos');

    $inicio = 0;
    $limite = 5;
    if($pagina !==false){
      $inicio = ($pagina-1)*$limite;
    }


    $consulta ['integrales'] = $this->post_teoria->listCalculoD($inicio, $limite);

    $config['base_url'] = base_url().'teorias/integrals/';
    $config['total_rows'] = count($this->post_teoria->listCalculoD());
    $config['per_page'] = $limite;
    $config['uri_segment'] = 3;
    $config['num_links'] = 3;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = base_url().'teorias/integrals/';
    $config['last_link'] = false;
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);

    $data = array('css' => 'Teorias', 'titulo'=> 'Teorias');
    $consulta['typeContent'] = "Cálculo diferencial";

    // ultimos cotenidos
    $ultimo_contenido = $this->post_teoria->getLastTeoria();
    $ultimo_video = $this->post_videos->getLastVideo();

    $footer = array('lastT' => $ultimo_contenido, 'lastV'=> $ultimo_video);
    $footer ['video'] = true;

    $this->load->view("guest/header",$data);
    $this->load->view("guest/aside");
    $this->load->view('guest/teoria/paginacion',$consulta);
    $this->load->view('guest/footer',$footer);
  }

  private function headerLoader(){

    #Mensajes -> datos Usuario -> Notificaciones
      $this->load->model('user');//.>Dependencia - Modelo user
      $user = $this->user->getUserById($this->session->userdata('id'));//.>Datos del usuario
      $header = array(
                'titulo' => 'Administración de Ejercicios',
                'notify' => $this->user->getNotifications(),
                'mensajes' => $this->user->getFiveLastMensagges(),
                'usuario' => $user
                );
      $this->load->view("admin/header",$header);
      $this->load->view("admin/aside",$user);
  }


}
