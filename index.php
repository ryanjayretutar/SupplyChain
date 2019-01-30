<?php 
  include "includes/header.php";
 ?>
	<section id="index">
			<div class="container">
				<div class="row">
											
						<?php if(isset($_GET['page'])){
							include "includes/register.php";
						}else{
							include "includes/login.php";
						} ?>
					
				</div>	
			</div>
		</section>
<?php 
  include "includes/footer.php";
 ?>
   