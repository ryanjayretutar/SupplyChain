<?php 
	include "../init.php";

	$prod = array("id"=>$_POST['id']);
    $products = $db->select_data("product",$prod);

    echo json_encode(array("price" => $products['selling_price'], "quantity" => $products['quantity']));



 ?>