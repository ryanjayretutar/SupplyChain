<?php 

	include "../init.php";
	 if($_POST['caddress'] == "Shipping"){
	 	$addr = array("user_id"=>$_POST['id'],
                    "caddress"=>$_POST['caddress']);
    	$addresses = $db->fetch_data_Many("address_tbl",$addr);
    	foreach($addresses as $address){
    	?>
    	<!-- <div class="row p-3 border-light m-1 " id="addnewaddr"></div> -->
    	 <div class="row p-3 border border-light ">
      		<a href="javascript:void(0)" class="set_addr_shipping">
      			<input type="hidden" class="hiddenIDs" value="<?php echo $address['id']; ?>">
	        	<p><?php echo $address['housenumber'] . " " . $address['streetname'] . " " . $address['barangay'] . " " . $address['postalcode'];?><i class="ml-3 fas fa-check float-right"></i></p>
	        	
	      	</a>
	      	
      	</div>
      
		
<?php
		}
	 }else{
	 	$addr = array("user_id"=>$_POST['id'],
                    "caddress"=>$_POST['caddress']);
    	$addresses = $db->fetch_data_Many("address_tbl",$addr);
    	foreach($addresses as $address){




    		?>
    	<!-- <div class="row p-3 border-light m-1 " id="addnewaddr"></div> -->
    	<div class="row p-3 border border-light ">
			<a href="javascript:void(0)" class="set_addr_billing">
				<input type="hidden" class="hiddenID" value="<?php echo $address['id']; ?>">
	        	<p><?php echo $address['housenumber'] . " " . $address['streetname'] . " " . $address['barangay'] . " " . $address['postalcode'];?><i class="ml-3 fas fa-check float-right"></i></p>
	        	
	      	</a>

      </div>

     
  <?php
	 }
	}

 ?>

 <script>
 	$(document).ready(function(){
 		$(".set_addr_shipping").click(function(event) {
 			 $.ajax({
                url: "core/ajax/get_address.php",
                method: "POST",
                data: {address_id :  $(this).find('input').val(), caddress: "Shipping"},
                success: function(data){
                    $("#ships").html(data);
                    $(".ship").html("");
                }
              })
 		});
 		$(".set_addr_billing").click(function(event) {
 			 $.ajax({
                url: "core/ajax/get_address.php",
                method: "POST",
                data: {address_id :  $(this).find('input').val(), caddress: "Billing"},
                success: function(data){
                    $("#bills").html(data);
                    $(".bill").html("");
                }
              })
 		});
 	});
 	
 </script>