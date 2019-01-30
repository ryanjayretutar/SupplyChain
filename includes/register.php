<?php 
	include "core/init.php";
	extract($_POST);
 	if(isset($_POST['submit'])){
		$credentials = array("ucat_id"=>"4",
						"username"=>$_POST['username'],
						"password"=>md5($_POST['password']),
						"email"=>$_POST['email'],
						"status"=>"active");
		if($user->check_duplicate($username, $email)){
			$db->insert_data("user_account", $credentials);
			$info = array("user_id"=>$user->get_last_id(),
							"firstname"=>$_POST['firstName'],
							"lastname"=>$_POST['lastName']);
			$db->insert_data("user_info", $info);
		}	
	}

 ?>

<div class="col-lg-7 offset-lg-4 login p-4 register" >
	<h3 class="text-center">Registration</h3>
	<form class="mt-5" id="register" action="" method="post">
	  	  <div class="form-group row p-2">
		    <label for="username control-label" class="col-sm-2 col-form-label">Username</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" id="username" name="username" >
		    </div>
		    <label for="email" class="col-sm-2 col-form-label control-label">Email Address</label>
		    <div class="col-sm-4">
		      <input type="email" class="form-control" id="email" name="email">
		    </div>
		  </div>
		
		  <div class="form-group row p-2">
		    <label for="password control-label" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-4">
		      <input type="password" class="form-control" name="password" id="password">
		    </div>
		    <label for="confirmPass control-label" class="col-sm-2 col-form-label">Confirm Password</label>
		    <div class="col-sm-4">
		      <input type="password" class="form-control" id="confirmPass" name="confirmPass">
		    </div>
		  </div>
	
		  <div class="form-group row p-2">
		    <label for="password control-label" class="col-sm-2 col-form-label">Last Name</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" name="lastName" id="lastName">
		    </div>
		    <label for="confirmPass control-label" class="col-sm-2 col-form-label">First Name</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" id="firstName" name="firstName">
		    </div>
		  </div>
		  <div class="clearfix">
	  	 <input type="submit" name="submit" class="btn btn-primary float-right" value="Submit">	  </div>
		 
	 
	  <a href="index.php">Already have an account? Sign in here.</a>
	</form>
</div>