<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_teoria extends CI_Model {

	public function insertTeoria ($post_teoria = null)
	{
		if($post_teoria !=null){
			$id_usuario = $this->session->userdata('id');
			$titulo= $post_teoria['titulo'];
			$tipo= $post_teoria['tipo'];
			$descripcion= $post_teoria['descripcion'];
			$contenido= $this->post_teoria->convertir($post_teoria['contenido']);
			$citas = $post_teoria['citas'];
			$referencias = $post_teoria['referencias'];
			//$sql ='INSERT INTO `teorias`( `id_usuario`, `titulo`,`tipo`, `descripcion`, `contenido`, `fecha`) VALUES ("'.$id_usuario.'","'.$titulo.'","'.$tipo.'","'.$descripcion.'","'.$contenido.'",curdate())';
			$sql = "INSERT INTO `teorias`( `id_usuario`, `id_aprobado`, `titulo`, `tipo`, `descripcion`, `contenido`, `fuentes`, `referencias`, `fecha`) VALUES ($id_usuario,$id_usuario,'$titulo','$tipo','$descripcion','$contenido','$citas','$referencias',curdate())";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}
	}

	public function convertir($content =''){
		$content= str_replace("'", '&prime;', $content);
		//$content= str_replace("/", '&#47;', $content);
		//$content= str_replace("\\", '&#92;', $content);
		return $content;
	}

	// realiza consulta de los temas por tipo -> calculo diferencial -> calculo integral
	public function getIntegralAndDiferencial($limit = 0){

		$integral_post='SELECT  `id_teoria` ,  `titulo` FROM  `teorias` WHERE  `tipo` = "calculo_integral" AND `status`=0  LIMIT '.$limit.'';
		$diferencial_post ='SELECT  `id_teoria` ,  `titulo` FROM  `teorias` WHERE  `tipo` = "calculo_diferencial" AND `status`=0  LIMIT '.$limit.'';

		$integral_last='SELECT  `id_teoria` ,  `titulo` FROM  `teorias` WHERE  `tipo` = "calculo_integral" AND `status`=0 ORDER BY  `id_teoria` DESC LIMIT 5';
		$diferencial_last ='SELECT  `id_teoria` ,  `titulo` FROM  `teorias` WHERE  `tipo` = "calculo_diferencial" AND `status`=0 ORDER BY  `id_teoria` DESC LIMIT 5';

		$i =  $this->db->query($integral_post);
		$d= $this->db->query($diferencial_post);


		$lasti =  $this->db->query($integral_last);
		$lasd= $this->db->query($diferencial_last);


		return $data = array('integral' => $i,"diferencial"=> $d ,"lastint" => $lasti, "lasd" => $lasd);
	}

	public function getAll($limite  = FALSE){
		$sql ="";
		if($limite !== FALSE){
			$sql ='SELECT  *  FROM  `teorias` WHERE  `status`=0  LIMIT '.$limite.'';
		}
		else {
			$sql ='SELECT  * FROM  `teorias` WHERE  `status`=0';
		}

		$result =  $this->db->query($sql);
		return $result;
	}

	public function deleteTeoria($id = 0){
		if($id>0){
		  if( $this->db->query('UPDATE `teorias` SET `status`=1 WHERE `id_teoria`= '.$id.' ')){
		  	return true;
		  }else{
		  	return false;
		  }
		}
		return false;
	}

	// realiza la consulta de la teoria exacta por su nombre
	public function getTeoriaById($id = ''){
		$sql = 'SELECT * FROM `teorias` WHERE `id_teoria`='.$id.'  AND `status`= 0 LIMIT 0,1';
		$result = $this->db->query($sql);
		return $result->row();
	}

	public function getNumberTeoria(){
		$count = $this->db->query('SELECT count(*) as number FROM teorias WHERE status =0')->row()->number;
		return intval($count);
	}
	// lista de resultado los post de calculo integral
	public function listCalculoI($inicio = false, $limite = false){
		if($inicio!==false && $limite!==false){
			$integral_post='SELECT  * FROM  `teorias` WHERE  `tipo` = "calculo_integral" AND `status`=0 LIMIT '.$inicio.','.$limite.' ';
			$result = $this->db->query($integral_post);
			return $result;
		}else {
			$integral_post2='SELECT  * FROM  `teorias` WHERE  `tipo` = "calculo_integral" AND `status`=0';
			$result2 = $this->db->query($integral_post2);
			return $result2->result();
		}
	}
	// lista de resultado los post de calculo diferencial
	public function listCalculoD($inicio = false, $limite = false){
		if($inicio!==false && $limite!==false){
			$integral_post='SELECT  * FROM  `teorias` WHERE  `tipo` = "calculo_diferencial" AND `status`=0 LIMIT '.$inicio.','.$limite.' ';
			$result = $this->db->query($integral_post);
			return $result;
		}else {
			$integral_post2='SELECT  * FROM  `teorias` WHERE  `tipo` = "calculo_diferencial" AND `status`=0';
			$result2 = $this->db->query($integral_post2);
			return $result2->result();
		}
	}
	public function getLastTeoria(){
		$sql ="SELECT * FROM  `teorias` WHERE  `status` =0 ORDER BY  `id_teoria` DESC LIMIT 1";
		$r = $this->db->query($sql);
		return $r->row();
	}


	public function getNumberPost(){
		$sql = 'SELECT count(`tipo`) as number FROM teorias WHERE `tipo`="calculo_integral"';
		$sql2 = 'SELECT count(`tipo`) as number FROM teorias WHERE `tipo`="calculo_difirencial"';
		$result  = $this->db->query($sql)->row()->number;
		$result2  = $this->db->query($sql2)->row()->number;
		return $data = array('integral' => intval($result),"diferencial"=> intval($result2) );
	}

	public function updateTeoria($post=false){
		if($post !==false){
			$data = array(
				'titulo' =>  $post['titulo'],
				'descripcion'=> $post['descripcion'],
				'tipo'=>$post['tipo'],
				'contenido'=>$this->convertir($post['contenido']),
				'fuentes'=> $post['citas'],
				'referencias'=>$post['referencias']
				);
			if($this->db->update('teorias', $data, "id_teoria = ".$post['id']." ")){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}

	}


}



/* End of file post_teoria.php */
/* Location: ./application/models/post_teoria.php */