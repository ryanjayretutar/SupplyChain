<?php 
	Class User extends Database{

		/*Check duplicate username or email*/
		public function check_duplicate($username, $email){
			$sql = "SELECT * FROM user_account WHERE username = '$username' OR email = '$email'";
			$result = mysqli_query($this->con, $sql);
			$count_row = $result->num_rows;
			if($count_row == 0) { return true; } else { return false; }
		}
		/*End of check_duplicate method*/

		/*Get last inserted id*/
		public function get_last_id(){
			return $this->con->insert_id;
		}
		/*End of get_last_id method*/

		/*Start of check login*/
		public function check_login($user, $password){
			$password = md5($password);
			$sql = "SELECT id from user_account WHERE username ='$user' OR email='$user' AND password = '$password'";
			$result = mysqli_query($this->con, $sql);
			$user_data = mysqli_fetch_array($result);
			$count_row = $result->num_rows;
			if ($count_row == 1) {
				$_SESSION['login'] = true;
				$_SESSION['id'] = $user_data['id'];
				return true;
			}else{
				return false;
			}
		}
		/*end of check_login*/

		public function session_check(){
			$uid = $_SESSION['id'];
			if(!$this->get_session()){
				header("location: index.php");
			} 
		}

		public function get_session(){

			return $_SESSION['login'];
		}

		public function user_logout(){
			session_destroy();
			session_start();
			$_SESSION['login'] = false;
			
		}
	}

	$user = new User();

 ?>