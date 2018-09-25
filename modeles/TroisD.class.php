<?php

class TroisD extends ConnexionDB{
	
	public function getListePhotos3D()
	{
		$res = array();
		
		$mSQLRes = $this->_db->query("SELECT nomPhoto3D, lienPhoto3D FROM photos3D ORDER BY id_photo3d ASC");
		
		if($mSQLRes){
			$res = $mSQLRes->fetch_all(MYSQLI_ASSOC);
		}
		
		return $res;
	}	

}

?>