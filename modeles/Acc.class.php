<?php

class Acc extends ConnexionDB{
	
	public function getPhotosAcc()
	{
		$res = array();
		
		$mSQLRes = $this->_db->query("SELECT nomPhotoAcc, lienPhotoAcc FROM photosAcc ORDER BY id_acc ASC");
		
		if($mSQLRes){
			$res = $mSQLRes->fetch_all(MYSQLI_ASSOC);
		}
		
		return $res;
	}	

}

?>