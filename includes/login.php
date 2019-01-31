<?php
	unset($_SESSION['url']);

	if (isset($_POST['submit'])) {
		if ($_POST['password'] == "" || $_POST['username'] == "") {
			unset($_SESSION['flash']);
			$_SESSION['flash'] = 'Username and Password are required'; 
		}else{
				$login = $user->check_login($_POST['username'], $_POST['password']);
				if($login){
					if(isset($_SESSION['url'])){
				   		$url = $_SESSION['url'];
				   		header("location: " . $url);
					}else{
						header("location: main.php");
					}
					
				} else { 
					unset($_SESSION['flash']);
	    			$_SESSION['flash'] = 'Username or Password is incorrect'; 
				}
			}
		
		}
	if (isset($_SESSION['id'])) {
		if(isset($_SESSION['url'])){
				$url = $_SESSION['url'];
				 header("location: " . $url);
		}else {
			header("location: main.php");
		}
	}
 ?>
<div class="col-lg-4 offset-lg-6 login p-4">
	<h1 class="text-center">Login</h1>
	<form class="mt-5" action="" method="post">
		<?php
			if(isset($_SESSION['flash']) && !empty($_SESSION['flash']))
				{
				echo '<div class="alert alert-warning" role="alert">
					'.$_SESSION['flash'].'
					</div>';
				   		unset($_SESSION['flash']);
				}
		?>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address/ Username</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter email or username">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  </div>
	  <div class="form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Remember me?</label>
	  </div>
	  <div class="clearfix">
	  	 <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
	  </div>
	 
	  <a href="?page=registration">Don't have an account? Sign up here.</a>
	</form>
</div>

