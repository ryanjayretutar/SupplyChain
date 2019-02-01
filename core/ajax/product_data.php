<?php
	include "../init.php";
	$prod_id = array("id"=>$_POST['id']);
    $_SESSION['edit_id'] = $_POST['id'];
	$product = $db->select_data("product",$prod_id);

?>

  <div class="card">
	    <div class="card-body">
	        <ul class="nav nav-tabs" id="myTab" role="tablist">
	            <li class="nav-item">
	                <a class="nav-link active" id="overview" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Overview</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" id="product-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Info</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Purchase Order</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Sales Order</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Incoming</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Outgoing</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Notes</a>
	            </li>
	            
	            
	        </ul>

	        <div class="tab-content mt-3" id="myTabContent">
	            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="overview">
	                <div style="width: 100%; height: 100%; position: relative;">
	                	<h1><?php echo $product['name']; ?></h1>
	                	<p class="lead"><span>#</span><?php echo $product['sku']; ?></p>	
						<div class="row mt-5">
							<div class="col-md-8">
								<div class="row mb-3">								
									<h6 class="mr-5 col-md-2">Brand</h6>
									<div class="col-md-6 row">
										<h6><?php echo $product['p_brand']; ?></h6>
									</div>
								</div>
								<div class="row mb-5">								
									<h6 class="mr-5 col-md-2">Category</h6>
									<div class="col-md-4 row">
										<h6><?php echo $product['p_category']; ?></h6>
									</div>
								</div>

								<div class="row mb-3">								
									<h6 class=" col-md-2">Selling Price:</h6>
									<div class="col-md-4">
										<h6><span>PHP </span> <?php echo $product['selling_price']; ?></h6>
									</div>
									<h6 class=" col-md-2">Purchase Price:</h6>
									<div class="col-md-4">
										<h6><span>PHP </span> <?php echo $product['purchase_price']; ?></h6>
									</div>
								</div>
								<div class="row mb-3">								
									<h6 class=" col-md-2">Last Selling Price:</h6>
									<div class="col-md-4">
										<h6><span>PHP </span> <?php echo $product['selling_price']; ?></h6>
									</div>
									<h6 class="col-md-2">Last Purchase Price:</h6>
									<div class="col-md-4">
										<h6><span>PHP </span> <?php echo $product['purchase_price']; ?></h6>
									</div>
								</div>
									
									
								
								
							</div>
							<div class="col-md-4">
								<div class="wrapbox">
									<div class="d-flex flex-row row-hl justify-content-between mb-3">
										<h4 class="item-hl">Stock</h4>
										<h4 class="item-hl">0</h4>
									</div>
									<div class="d-flex flex-row row-hl justify-content-between mb-3">
										<h4 class="item-hl">Stock Purchased</h4>
										<h4 class="item-hl">0</h4>
									</div>
									<div class="d-flex flex-row row-hl justify-content-between mb-3">
										<h4 class="item-hl">Stock Sold</h4>
										<h4 class="item-hl">0</h4>
									</div>
									<div class="d-flex flex-row row-hl justify-content-between mb-3">
										<h4 class="item-hl">Total Stock</h4>
										<h4 class="item-hl">0</h4>
									</div>
									
								</div>
							</div>
						</div>
	                </div>
	            </div>
	            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="product-tab">
	             	

                   
	            </div>
	            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
	              <div class="card-body">
                        <h4 class="header-title">Todays Order List</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-td">
                                        <td>Product Name</td>
                                        <td>Product Code</td>
                                        <td>Order Status</td>
                                        <td>Client Number</td>
                                        <td>Zip Code</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="shipment_dot">Shipment</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="confirmed _dot">Confirmed </span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination_area pull-right mt-5">
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
	            </div>
	        </div>
	    </div>
	</div>
    <script>
        $(document).ready(function(){
             $( "#profile" ).load( "core/ajax/view_product.php" );
        });
          $("#product_tab").click(function() {
            $( "#profile" ).load( "core/ajax/view_product.php" );
                
        });
    </script>