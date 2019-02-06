<?php 
	
	session_start();
	$temp_contact[] = array('designation' => $_POST['designation'],
						'lastname' => $_POST['lname'],
						'firstname' => $_POST['fname'],
						'email' => $_POST['email'],
						'mobile' => $_POST['mobile'],
						'fax' => $_POST['fax'],
						'office' => $_POST['office']);

	if(isset($_SESSION['contacts'])){
		array_push($_SESSION['contacts'], $temp_contact);
	}else{
		$_SESSION['contacts'] = array($temp_contact);
	}
	
	foreach($_SESSION['contacts'] as $contact){
		foreach($contact as $con){
			echo '<div class="row px-3 mb-1"><div class="d-flex flex-column row-hl"><h6 class="item-hl">' . $con["designation"] . '. ' . $con["firstname"] . ' ' . $con["lastname"] . '</h6><p class="item-hl">' . $con["email"] . '</p></div></div>';
		}		
	}
	// echo json_encode($_SESSION['addresses']);
	
	echo '<a href="#" class=" float-right" name="add" id="addNewContact"><i class="fas fa-plus"></i>Add another contact</a>'; 


 ?>

 <script type="text/javascript">
 

 		 $("#addNewContact").click(function(){
              $("#contact").load("core/ajax/add_new_contact.php");
          });
 	
 </script>

 