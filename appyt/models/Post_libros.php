<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_libros extends CI_Model {

	public function getLibroFromTo($inicio = FALSE, $limite = FALSE){
		$sql ='';
		if($inicio !==false && $limite !== false){
			$sql ='SELECT * FROM  `libros` WHERE `status`=0  LIMIT '.$inicio.' , '.$limite.' ';
		}else{
			$sql='SELECT * FROM  `libros` WHERE `status`=0';
		}
		$result = $this->db->query($sql);
		return $result;
	}

	public function saveLibro($post = null){
		if($post !=null){
			$titulo=$post['titulo'];
			$link=$post['link'];
			$descripcion=$post['descripcion'];

			$sql ='INSERT INTO `libros`(`titulo`, `link`, `descripcion`, `fecha`) VALUES ("'.$titulo.'","'.$link.'","'.$descripcion.'",curdate())';
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}

	}
	public function removeBook($id){
		if($id !=''){
			$sql ='UPDATE `libros` SET `status`=1 WHERE `id`= '.$id.' ';
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}

/* End of file post_libros.php */
/* Location: ./application/models/post_libros.php */