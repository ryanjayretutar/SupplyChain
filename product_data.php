<?php
	include "core/init.php";
	$prod_id = array("id"=>$_POST['id']);
	$product = $db->select_data("product",$prod_id);

?>

  <div class="card">
	    <div class="card-body">
	        <ul class="nav nav-tabs" id="myTab" role="tablist">
	            <li class="nav-item">
	                <a class="nav-link active" id="overview" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Overview</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Info</a>
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
	            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	             	<form action="" method="post" id="edit_product">
                        <div class="row">
                             <div class="col-lg-6">
                                <div class="form-group row p-2">
                                    <label for="username control-label" class="col-sm-4 col-form-label"><h6>Product Name</h6></label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="product" name="product" >
                                    </div>
                                    
                                  </div>
                                <div class="form-group row p-2">
                                   <label for="username control-label" class="col-sm-4 col-form-label"><h6>SKU</h6></label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="sku" name="sku" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                 <div class="form-group row p-2">
                                      <label for="username control-label" class=" col-form-label"><h6>Image Upload</h6></label>
                                  </div>
                                  <div class="form-group row p-2">
                                      <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                       
                         
                        
                          <div class="form-group row p-2">
                            <label for="username control-label" class="col-sm-2 col-form-label"><h6>Description</h6></label>
                            <div class="col-sm-10">
                              <textarea rows="6" class="form-control" id="description" name="description" ></textarea> 
                            </div>
                          </div>
                          <div class="form-group row p-2">
                            <label for="username control-label" class="col-sm-2 col-form-label"><h6>Category</h6></label>
                            <div class="col-sm-4">
                              <select class="form-control" name="category" id="category">
                              <option value="">Select Category</option>
                              <?php $categories = $db->fetch_data("product_category");
                                    foreach($categories as $category){
                                ?>                          
                                <option value="<?php  echo $category['name']; ?>"><?php echo $category['name']; ?></option>
                                <?php 
                                  }
                                 ?>
                            </select>
                            </div>
                            <label for="username control-label" class="col-sm-2 col-form-label"><h6>Brand</h6></label>
                            <div class="col-sm-4">
                              <select class="form-control" name="brand" id="brand">
                                <option value="">Select Brand</option>
                                <?php $brands = $db->fetch_data("product_brand");
                                    foreach($brands as $brand){
                                ?>                          
                                <option value="<?php echo $brand['name']; ?>"><?php echo $brand['name']; ?></option>
                                <?php 
                                  }
                                 ?>
                            </select>
                            </div>
                          </div>



                        
                         <div class="form-group row p-2">
                            <label for="username control-label" class="col-sm-2 col-form-label"><h6>Purchasing Price</h6></label>
                            <div class="col-sm-4">
                              <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">PHP</span>
                                    </div>
                                    <input type="text" name="purchase" id="purchase" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                             <label for="username control-label" class="col-sm-1 col-form-label"><h6>Selling Price</h6></label>
                            <div class="col-sm-5">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">PHP</span>
                                    </div>
                                    <input type="text" name="selling" id="selling" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                          </div>

                          <div class="form-group row p-2">
                                <label for="example-number-input" class="col-form-label col-sm-2">Quantity</label>
                                 <div class="col-sm-4">
                                    <input class="form-control" type="number" name="quantity" id="quantity">
                                </div>
                                 <label for="example-number-input" class="col-form-label col-sm-2">Reorder Quantity</label>
                                 <div class="col-sm-4">
                                    <input class="form-control" type="number" name="reorder" id="reorder" id="example-number-input">
                                </div>
                            </div>


                        
                         
                    </form>

                    <div class="float-right">
	            		<button class="btn btn-lg btn-success float-right" name="add"  type="submit" form="edit_product">Edit Product</button>
	           		 </div>
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