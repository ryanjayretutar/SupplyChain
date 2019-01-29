<?php 
	require_once "config.php";
	class Database {
		public $con;
		function __construct()
		{
			$this->open_connection();
		}

		public function open_connection(){
			$this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			if($this->db->connect_errno){
				die("Database connection failed" . $this->con->connect_error);
			}
		}
	}
	$db = new Database();
 ?>