<?php 
    include "../init.php";
    if(isset($_POST['id'])){
      $where = array("user_id"=>$_POST['id'],
                    "caddress"=>"Shipping");
      $shipping = $db->select_data("address_tbl",$where);
       $where2 = array("user_id"=>$_POST['id'],
                      "caddress"=>"Billing");
      $billing = $db->select_data("address_tbl",$where2);
    
    
    if((!$shipping) && (!$billing)){


?>

<div class="col-sm-6 d-flex flex-column row-hl">
             <label for="username control-label" class=" col-form-label"><h6>Shipping Address</h6></label>
             <div id="ship_addr">
               <button type="button" class="btn btn-flat btn-info btn-block">Select Shipping Address</button>
             </div>
              
            </div>
            <div class="col-sm-6 d-flex flex-column row-hl">
               <label for="username control-label" class=" col-form-label"><h6>Billing Address</h6></label>
               <div id="bill_addr">
                   <button type="button" class="btn btn-flat btn-info btn-block">Select Billing Address</button>
                 </div>
            </div>

<?php }else{ ?>

<div class="col-sm-6 d-flex flex-column row-hl">
	 <label for="username control-label" class=" col-form-label"><h6>Shipping Address</h6></label>
   <div id="ship_addr">
     <div class="row px-3 mb-1 " id="ships">
      <a href="javascript:void(0)" id="get_addr_shipping" class="btn btn-flat btn-info btn-block ">
        <p class="text-white"><?php echo $shipping['housenumber'] . " " . $shipping['streetname'] . " " . $shipping['barangay'] . " " . $shipping['postalcode'];?></p>
      </a>
      
    </div>
    <div class="ship">
     
    </div>
    
  </div>
   
	  
	</div>
	<div class="col-sm-6 d-flex flex-column row-hl">
	   <label for="username control-label" class=" col-form-label"><h6>Billing Address</h6></label>
     <div id="bill_addr">
      <div class="row px-3 mb-1" id="bills">
	        <a href="javascript:void(0)" id="get_addr_billing" class="btn btn-flat btn-info btn-block ">
        <p class="text-white"><?php echo $billing['housenumber'] . " " . $billing['streetname'] . " " . $billing['barangay'] . " " . $billing['postalcode'];?></p>
      </a>
       </div>
       <div class="bill">
        
      </div>
	</div>
</div>

<?php } 
  }
 ?>

<?php
 if(isset($_POST['address_id'])){
        $where = array("id"=>$_POST['address_id'],
                    "caddress"=>$_POST['caddress']);
        $setAddress = $db->select_data("address_tbl",$where);
        if($_POST['caddress'] == "Shipping"){
        ?>
      <a href="javascript:void(0)" id="get_addr_shipping" class="btn btn-flat btn-info btn-block ">
        <p class="text-white"><?php echo $setAddress['housenumber'] . " " . $setAddress['streetname'] . " " . $setAddress['barangay'] . " " . $setAddress['postalcode'];?></p>
      </a>


<?php
      }else{
       ?>
       <a href="javascript:void(0)" id="get_addr_billing" class="btn btn-flat btn-info btn-block ">
        <p class="text-white"><?php echo $setAddress['housenumber'] . " " . $setAddress['streetname'] . " " . $setAddress['barangay'] . " " . $setAddress['postalcode'];?></p>
      </a>
       <?php 
      }
    }

    ?>




  <script>
    $(document).ready(function(){
        $("#get_addr_shipping").click(function(event) {
          $.ajax({
                url: "core/ajax/get_all_address.php",
                method: "POST",
                data: {id :  $("#customer_select option:selected").val(), caddress: "Shipping" },
                success: function(data){
                    $(".ship").html(data);
                }
              })
        });

        $("#get_addr_billing").click(function(event) {
          $.ajax({
                url: "core/ajax/get_all_address.php",
                method: "POST",
                data: {id :  $("#customer_select option:selected").val(), caddress: "Billing"},
                success: function(data){
                    $(".bill").html(data);
                }
              })
        });
      });


  </script>