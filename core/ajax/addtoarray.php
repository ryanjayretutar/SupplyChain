<?php 
	
	session_start();
	$temp_address[] = array('category' => $_POST['category'],
						'home' => $_POST['home'],
						'street' => $_POST['street'],
						'barangay' => $_POST['barangay'],
						'city' => $_POST['city'],
						'postal' => $_POST['postal']);

	if(isset($_SESSION['addresses'])){
		array_push($_SESSION['addresses'], $temp_address);
	}else{
		$_SESSION['addresses'] = array($temp_address);
	}
	
	foreach($_SESSION['addresses'] as $address){
		foreach($address as $add){
			echo '<div class="row px-3 mb-1"><div class="d-flex flex-column row-hl"><h6 class="item-hl">' . $add["category"] . '</h6><p class="item-hl">' . $add["home"] . ' ' .'</p><p class="item-hl">' . ' ' . $add["street"] . ' ' . $add["barangay"] . ' ' . $add["city"] . ' ' . $add["postal"] . '</p></div></div>';
		}		
	}
	// echo json_encode($_SESSION['addresses']);
	
	echo '<a href="#" class=" float-right" name="add" id="addnew"><i class="fas fa-plus"></i>Add another address</a>'; 


 ?>

 <script type="text/javascript">
 

 		 $("#addnew").click(function(){
              $("#homes").load("core/ajax/add_address.php");
          });
 	
 </script>

 