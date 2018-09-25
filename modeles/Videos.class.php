<?php

class Videos extends ConnexionDB{
	
	public function getVideos()
	{
		$res = array();
		
		$mSQLRes = $this->_db->query("SELECT nom, lien FROM liensVideos ORDER BY id_videos ASC");
		
		if($mSQLRes){
			$res = $mSQLRes->fetch_all(MYSQLI_ASSOC);
		}
		
		return $res;
	}	

}

?>