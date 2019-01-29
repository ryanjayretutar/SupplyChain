<?php 
	include "config.php";
	class Database {
		public $db;
		function __construct()
		{
			$this->open_connection();
		}

		public function open_connection(){
			$this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			if(!($this->db){
				die("Database connection failed");
			}
		}
	}
	

 ?>