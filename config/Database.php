<?php
error_reporting(E_ALL ^ E_NOTICE);
define("DISABLE_CATEGORIES",true);

class Database{
	
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "11111";
    private $database  = "php-cms"; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>