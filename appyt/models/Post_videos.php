<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_videos extends CI_Model {

	public function getIntegralVideo($inicio = false , $limite = false){
		$sql ="";
		if($inicio!==false && $limite !=false ){
			$sql = 'SELECT * FROM `videos` WHERE `status`=0 AND `tipo`="calculo_integral" Limit '.$inicio.' , '.$limite.' ';
		}else{
			$sql = 'SELECT * FROM `videos` WHERE `status`=0 AND `tipo`="calculo_integral"';
		}
		return $this->db->query($sql);
	}

	public function getDerivalVideo($inicio = false , $limite = false){
		$sql ="";
		if($inicio!==false && $limite !=false ){
			$sql = 'SELECT * FROM `videos` WHERE `status`=0 AND `tipo`="calculo_diferencial" Limit '.$inicio.' , '.$limite.' ';
		}else{
			$sql = 'SELECT * FROM `videos` WHERE `status`=0 AND `tipo`="calculo_diferencial"';
		}
		return $this->db->query($sql);
	}

	public function getLastVideo(){
		$sql = "SELECT * FROM `videos` WHERE `status`=0 ORDER BY `id` desc limit 1";
		$r = $this->db->query($sql);
		return $r->row();
	}

	public function saveVideo($post = null){
		if($post !=null){
			$id_usuario = $this->session->userdata('id');
			$titulo=$post['titulo'];
			$link=$post['link'];
			$tipo=$post['tipo'];
			$descripcion=$post['descripcion'];
			$sql ='INSERT INTO `videos`(`id_usuario`, `link`, `tipo`, `titulo`, `descripcion`, `fecha`) VALUES ("'.$id_usuario.'","'.$link.'","'.$tipo.'","'.$titulo.'","'.$descripcion.'",curdate())';
			if($this->db->query($sql)){
				return true;
			}
		}
		return false;
	}

	public function removeVideo($id = ""){
		if($id!=''){
			$sql ='UPDATE `videos` SET `status`=1 WHERE `id`= '.$id.' ';
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function getVideoFromTo($inicio = false, $limite = false){
		if($inicio !==false && $limite!=false){
			$sql = 'SELECT * FROM `videos` WHERE `status`=0  Limit '.$inicio.' , '.$limite.' ';
		}else{
			$sql = 'SELECT * FROM `videos` WHERE `status`=0 ';
		}
		return $this->db->query($sql);
	}

}

/* End of file post_videos.php */
/* Location: ./application/models/post_videos.php */