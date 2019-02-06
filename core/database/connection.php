<?php 
	require_once "config.php";
	class Database {
		public $con;
		function __construct()
		{
			$this->open_connection();
		}

		public function open_connection(){
			$this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			if(mysqli_connect_errno()){
				die("Database connection failed" . mysqli_connect_error());
			}
		}

		public function insert_data($table, $fields){
			$sql = "";
			$sql .= "INSERT INTO " . $table;
			$sql .= " (" .implode(",", array_keys($fields)). ") VALUES ";
			$sql .= "('".implode("','", array_values($fields)). "')";
			$query = mysqli_query($this->con, $sql);
			if ($query) {
				return true;
			}
		}

		public function fetch_data($table){
			$sql = "SELECT * FROM " . $table;
			$array = array();
			$query = mysqli_query($this->con, $sql);
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
		}

		public function select_data($table, $where){
			$sql = "";
			$condition = "";
			foreach ($where as $key => $value) {
				$condition .= $key . "='" . $value . "' AND ";
			}

			$condition = substr($condition, 0, -5);
			$sql .= "SELECT * FROM " . $table . " WHERE ". $condition;
			$query = mysqli_query($this->con, $sql);
			
			if($query){
				$row = mysqli_fetch_assoc($query);
				return $row;
			}else{
				return false;
			}
		}

		public function fetch_data_Many($table, $where){
			$sql = "";
			$condition = "";
			foreach ($where as $key => $value) {
				$condition .= $key . "='" . $value . "' AND ";
			}
			$condition = substr($condition, 0, -5);
			$sql .= "SELECT * FROM " . $table . " WHERE ". $condition;
			$query = mysqli_query($this->con, $sql);
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
		}

		public function update_data($table,$where,$fields){
			$sql = "";
			$condition = "";
			foreach ($where as $key => $value) {
				$condition .= $key . "='" . $value . "' AND ";
			}

			$condition = substr($condition, 0, -5);
			foreach($fields as $key => $value){
				$sql .= $key . "='" . $value . "', ";
			}

			$sql = substr($sql, 0, -2); $value . "' AND ";
			$sql = "UPDATE ". $table . " SET " . $sql . " WHERE " . $condition;
			if (mysqli_query($this->con, $sql)) {
				return true;
			}
		}


		public function delete_data($table, $where){
			$sql = "";
			$condition = "";
			foreach ($where as $key => $value) {
				$condition .= $key . "='" . $value . "' AND ";
			}

			$condition = substr($condition, 0, -5);
			$sql .= "DELETE FROM " . $table . " WHERE ". $condition;
			if(mysqli_query($this->con, $sql)){
				return true;
			}
		}

		/*Get last inserted id*/
		public function get_last_id(){
			return $this->con->insert_id;
		}
		/*End of get_last_id method*/

	}

	$db = new Database();
 ?>