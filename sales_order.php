<?php 
    include "includes/header.php";
    $_SESSION['url'] = $_SERVER['REQUEST_URI']; 
    $user->session_check();

 ?>

    <div class="page-container">
        <?php include "includes/sidebar.php"; ?>
        <?php include "includes/top-nav.php"; ?>

        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Sales Orders</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.html">Home</a></li>
                            <li><span>Sales Orders</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                  <button class="btn btn-lg btn-success float-right newSO" type="button"><i class="fas fa-plus mr-2"></i>New Sales Order</button>
                </div>
                
            </div>
        </div>

        <div class="main-content-inner">
            <div class="row">
                <div class="col-lg-12">
                	<div class="card">
                		<div id="prod_content">
                			
                                <h4 class="header-title">Product List</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                            	<th><input type="checkbox"></th>
                                                <th>Sales Order #</th>
                                                <th>Customer Name</th>
                                                <th>Shipment</th>
                                                <th>Payment</th>
                                                <th>Total</th>
                                                <th>Date Created</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php 
                                        		$products = $db->fetch_data("sales_order");
                                        		foreach($products as $product){
                                        	 ?>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td><button type="button" class=" gets btn btn-sm btn-primary"  value="<?php echo $product['id']; ?>">Details</button></td>
                                                <td><?php echo $product['name']; ?></td>
                                                <td class="text-left"><?php echo $product['description']; ?></td>
                                                <td><?php echo $product['quantity']; ?></td>
                                                <td><?php echo $product['selling_price']; ?></td>
                                                
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                		</div>
                            
                    </div>
                    </div>     
            </div> 
             <form action="" method="post" id="add_product" class="m-3">
  				<div class="form-group row p-2">
  					<div class="col-sm-3 d-flex flex-column row-hl">
  						<label for="username control-label" class="item-hl col-form-label"><h6>Sales Order #</h6></label>
	  					 <input type="text" class="form-control form-control-sm" id="so_number" name="number" >
  					</div>
  					<div class="col-sm-3 d-flex flex-column row-hl">
  						<label for="username control-label" class="item-hl col-form-label"><h6>Order Date</h6></label>
	  					  <input type="date" name="order_date" class="form-control demo-desktop" data-input-style="box" placeholder="Please Select..." />
  					</div>
  					<div class="col-sm-3 d-flex flex-column row-hl">
  						<label for="username control-label" class="item-hl col-form-label"><h6>Estimated Delivery Date</h6></label>
	  					 <input type="date" name="etd" class="form-control demo-desktop" data-input-style="box" placeholder="Please Select..." />
  					</div>
  				</div>

  				<div class="form-group row p-2">
  					 <label for="username control-label" class="col-sm-3 col-form-label"><h6>Customer Name</h6></label>
  					 <div class="col-sm-6">
  					 	<select class="custom-select" id="customer_select">
	                        <option selected="selected">Select a Customer</option>
                <?php $customers = $db->fetch_data("user_info"); ?>
                <?php
                      foreach($customers as $customer) {
                        
                     ?>
                          <option value="<?php echo $customer['id']; ?>"><?php echo $customer['company_name']; ?></option>
                        <?php } ?>
                   		</select>
  					 </div>
  				</div>
  				<div class="form-group row p-2" id="all_addr">
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
  				</div>
  				  <div class="col-12">
                        <div class="card">
   
                                <h4 class="header-title">Progress Table</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table id="tb" class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                   <th scope="col" width="5%">
                                                <button name="add-dim-row" id="addMore" type="button" class="btn btn-info btn-sm " style="width: 40px"><i class="fa fa-plus-circle"></i></button>
                                           		 </th>
                                        		<th scope="col" width="25%">Item</th>       
                                                <th scope="col" width="10%">Unit Price</th>
                                                <th scope="col" width="10%">Qty</th>
                                                <th scope="col" width="10%">Discount (%)</th>
                                                <th scope="col" width="20%">Tax</th>
                                                <th scope="col" width="20%">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr id="dim-main-row">

                                                <td>
                                                         <a href='javascript:void(0);'  class='remove'><button type="button" class="btn btn-danger btn-sm deldimrow " style="width: 40px"><i class="fa fa-remove"></i></button></a>
                                                    </td>
                                                <td>
													 <select class="custom-select">
		                                                <option selected="selected">Open this select menu</option>
		                                                <option value="1">One</option>
		                                                <option value="2">Two</option>
		                                                <option value="3">Three</option>
		                                            </select>
                                                </td>
                                                <td><label for="example-number-input" class="col-form-label">19000</label></td>
                                                <td>  <input class="form-control" type="number" value="42" id="example-number-input"></td>
                                                <td> <input class="form-control" type="number" value="42" id="example-number-input"></td>
                                                <td> <select class="custom-select">
		                                                <option selected="selected">Open this select menu</option>
		                                                <option value="1">One</option>
		                                                <option value="2">Two</option>
		                                                <option value="3">Three</option>
		                                            </select></td>
                                                <td><label for="example-number-input" class="col-form-label">19000</label></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-4 offset-md-8">
                                            <p class="lead">Total amount</p>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td>Sub Total</td>
                                                        <td class="text-right"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>TAX (12%)</td>
                                                        <td class="text-right tax"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-800">Total</td>
                                                        <td class="text-bold-800 text-right total"></td>
                                                    </tr>
                                                    <input type="hidden" name="subtotals" value="" id="mySub">
                                                    <input type="hidden" name="taxes" value="" id="myTax">
                                                    <input type="hidden" name="mytotals" value="" id="myTotal">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>
                    </div>
              </form> 
        </div>
    </div>
      
    </div>
    <?php include "includes/offset.php"; ?>
          
    </div>
    <script>
    	// $(document).ready(function()){
    	// 	$(".newSO").click(function(event) {
    	// 		$.ajax({

    	// 		})
    	// 	});
    	// }


    </script>
<?php include "includes/footer.php"; ?>
	<script>
		
         $(function(){
            $('#addMore').on('click', function() {
                var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
                data.find("input").val('');


            });
            $(document).on('click', '.remove', function() {
                var trIndex = $(this).closest("tr").index();
                if(trIndex>0) {
                    $(this).closest("tr").remove();
                } else {
                    alert("Sorry!! Can't remove first row!");
                }
            });
        });

         $(document).ready(function(){
            $("#customer_select").change(function(event) {
              $.ajax({
                url: "core/ajax/get_address.php",
                method: "POST",
                data: {id :  $("#customer_select option:selected").val()},
                success: function(data){
                    $("#all_addr").html(data);
                }
              })
            });
         });

	</script>

  </body>
</html>