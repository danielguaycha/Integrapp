<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_ejercicios extends CI_Model {

	public function insertEjercicio($post = null){
		if($post !=null){
			$id_usuario = $this->session->userdata('id');
			$titulo=$post['titulo'];
			$tipo=$post['tipo'];
			$descripcion=$post['descripcion'];
			$contenido=$this->post_ejercicios->convertir($post['contenido']);
			if($titulo!="" && $tipo!="" && $descripcion !="" && $contenido !=""){
				$sql = "INSERT INTO `ejercicios`(`id_usuario`, `titulo`, `tipo`, `descripcion`, `contenido`,`fecha`) VALUES ('".$id_usuario."','".$titulo."','".$tipo."','".$descripcion."','" .$contenido."', curdate())";
				if($this->db->query($sql)){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		return false;
	}

	public function covertToData_rsp($contenido =''){

	}

	public function selectEjerByTitle($title =''){
		if($title!=''){
			$query = $this->db->get_where('ejercicios', array('titulo' => $title,'status'=> 0), 1);
			return $query->row();
		}else{
			return null;
		}
	}
	public function convertir($content =''){
		$content= str_replace("'", '&prime;', $content);
		//$content= str_replace("/", '&#47;', $content);
		$content= str_replace("\\", '&#92;', $content);
		$content = str_replace('value', 'data-rsp',$content);
		$content = str_replace('name', 'data-opcional',$content);
		return $content;
	}
	public function updateEjercicio($post){
		$data = array(
						'titulo' 	  => $post['titulo'] ,
						'tipo'   	  => $post['tipo'],
						'descripcion' => $post['descripcion'],
						'contenido'   => $this->convertir($post['contenido']),
						'fecha'		  => 'curdate()'
					 );
		if($this->db->update('ejercicios', $data, "id_ejercicio = ".$post['id']." ")){
			return true;
		}else{
			return false;
		}

	}

	public function deteleById($id = false){
		if($id !== false){
			if($this->db->update('ejercicios',array('status' => '1'), "id_ejercicio = ".$id." ")){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	public function getAllexercises(){
	//$consulta = $this->db->get_where('mitabla', array('id' => $id), $limite, $principio);
		$consulta = $this->db->get_where('ejercicios', array('status' => '0'), 30, 0);
		return $consulta;
	}

	public function getExerciseById($id = false){
		if($id!=false){
			$consulta = $this->db->get_where('ejercicios', array('id_ejercicio' => $id, 'status'=>'0'), 1);
			return $consulta->row();
		}
		return null;
	}

}

/* End of file post_ejercicios.php */
/* Location: ./application/models/post_ejercicios.php */