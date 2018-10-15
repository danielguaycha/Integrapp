<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{

  public function getUser($email ='')
  {
     $result = $this->db->query("SELECT * FROM `usuarios` WHERE `correo`='$email'");
      if($result->num_rows() > 0){
            return $result->row();
      }else{
            return null;
      }
  }

  public function getUserById($id = 0){
  $user = 'SELECT * FROM `usuarios` WHERE `id_usuario`= '.$id.' AND `status`=0';	
	$result = $this->db->query($user);
	if($result->num_rows()>0){
		return $result->row();
	}else
		return null;
	}

  public function getAllMensajes($principio = false , $limite = false){
    if($inicio !== false && $limite !== false){
      $consulta = $this->db->get_where('mensajes', array('status' => '0'), $limite, $principio);
      return $consulta;
    }else{
       $consulta = $this->db->get_where('mensajes', array('status' => '0'), 20, 0);
       return $consulta;
    }
  }
  public function getFiveLastMensagges(){
     return $this->db->get_where('mensajes', array('status' => '0', 'visto' => '0'), 5);
  }

  public function getNotifications(){
    $c1 = $this->db->get_where('teorias', array('propuesta' => '0'));
    $c2 = $this->db->get_where('ejercicios', array('propuesta' => '0'));
    $c3 = $this->db->get_where('videos', array('propuesta' => '0'));
    $c4 = $this->db->get_where('libros', array('propuesta' => '0'));
    $c = count($c1->result())+count($c2->result())+count($c3->result())+count($c4->result());
    return $c;
  }
}


