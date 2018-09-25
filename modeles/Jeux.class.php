<?php

class Jeux extends ConnexionDB{
	
	public function getJeux()
	{
		$res = array();
		
		$mSQLRes = $this->_db->query("SELECT nomPhotoJeu, lienPhotoJeu, lienVideoJeu FROM photosJeux ORDER BY id_jeux ASC");
		
		if($mSQLRes){
			$res = $mSQLRes->fetch_all(MYSQLI_ASSOC);
		}
		
		return $res;
	}	

}

?>