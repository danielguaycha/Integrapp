<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Niveles extends CI_Model {
	public function getAllLevels(){
		$query = $this->db->get_where('niveles', array('status' => '0', 'tipo'=>'calculo_integral'));
		return $query;
	}

	public function getCompleteLevels($id = false){
		if($id !==false){
			$sql = 'SELECT `level` FROM `usuarios` WHERE `id_usuario` = '.$id.' and `status` = 0';
			return $this->db->query($sql)->row()->level;
		}else{
			return null;
		}
	}
	public function getLevelsForExercice($level = false ){
		if($level !==false){
			$query = $this->db->get_where('ejercicios', array('status' => 0, 'nivel' => $level));
			return $query;
		}else{
			return null;
		}
	}

	public function comprobarNivel($nivel = false, $id = false){
		if($nivel !== false && $id !==false){
			$sql ='SELECT  `level` FROM  `usuarios` WHERE  `id_usuario` ='.$id.' AND  `status` =0 ';
			$r = $this->db->query($sql)->row()->level;
			if($nivel<=$r){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function getDataByid($id = false){
		if($id!=false){
			$query = $this->db->get_where('niveles', array('status' => 0, 'id_nivel' => $level));
		}

	}
	public function habilitarSiguienteNivel($id =false){
		if($id!==false){
			$nivelActual = $this->getCompleteLevels($id);
			if($nivelActual>=1){
				$result = $this->db->update('usuarios',array('level' => ($nivelActual+1) ), "id_usuario = ".$id." ");
				if($result){
					return true;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}

	}

}

/* End of file niveles.php */
/* Location: ./application/models/niveles.php */