<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  function index(){
    if(!$this->session->userdata('login')){
      $this->load->view('login-user');
    }else{
      header('location:'.base_url());
    }
  }
  public function ingreso()
  {
      $email = $this->input->post("user");
      $pw = $this->input->post("pw");
      $this->load->model('user');
      $fila = $this->user->getUser($email);
      if ($fila != null) {

          if($fila->contraseña == md5($pw)){
                  $data = array(
                  'email' => $email,
                  'id'	=>  $fila->id_usuario,
                  'login'	=> true
              );
              $this->session->set_userdata($data);
               header("Location: " . base_url()."teorias/insertar");
          }else{
              header("Location: " . base_url());
          }
      }else{
          header("Location: " . base_url());
      }
    }

    public function logout(){
        $this->session->sess_destroy();
         header("Location: " . base_url());
    }

  }
