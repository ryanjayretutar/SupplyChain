<?php 
	
	$temp_address = array('home' => $_POST['home'],
						'street' => $_POST['street'],
						'barangay' => $_POST['barangay'],
						'city' => $_POST['city'],
						'postal' => $_POST['postal']);

	echo $temp_address['home'] . $temp_address['street'] . $temp_address['barangay'] . $temp_address['city'] . $temp_address['postal'];


 ?>