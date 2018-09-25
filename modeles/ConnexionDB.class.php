<?php

class ConnexionDB {
	private $servername = "localhost";
	private $username = "id7239123_rauramrod";
	private $password = "rauramrod";
	private $database = "id7239123_dbportfolio";
	
	protected $_db;
	
	// Create connection
	
	function __construct(){
	
		$this-> _db = new mysqli($this->servername, $this->username, $this->password, $this->database);
		
		// Check connection
		if ($this->_db->connect_error) {
		    die("Connection failed: " . $this->_db->connect_error);
		}
		// echo "Connected successfully";
	}
}

?>
