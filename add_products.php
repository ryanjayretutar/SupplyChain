 <?php
 include "includes/header.php";
 ?>
 <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <?php include "includes/sidebar.php"; ?>
        <?php include "includes/top-nav.php"; ?>

        <div class="page-title-area ">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Add New Products</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.html">Home</a></li>
                            <li><span>Add Products</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                  <button class="btn btn-lg btn-success float-right" type="submit">Save</button>  
                </div>
                 
                
            </div>
            
        </div>
        

        <div class="main-content-inner mt-5">
            <div class="container-fluid">
                <div class="col-lg-12">
                     <form action="">
                        <div class="row">
                             <div class="col-lg-6">
                                <div class="form-group row p-2">
                                    <label for="username control-label" class="col-sm-4 col-form-label"><h6>Product Name</h6></label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="username" name="username" >
                                    </div>
                                    
                                  </div>
                                <div class="form-group row p-2">
                                   <label for="username control-label" class="col-sm-4 col-form-label"><h6>SKU</h6></label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="username" name="username" >
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
                              <textarea rows="6" name=""class="form-control" id="username" name="username" ></textarea> 
                            </div>
                          </div>
                          <div class="form-group row p-2">
                            <label for="username control-label" class="col-sm-2 col-form-label"><h6>Category</h6></label>
                            <div class="col-sm-4">
                              <select class="form-control">
                                <option>Select Category</option>
                                <option>Large select</option>
                                <option>Small select</option>
                            </select>
                            </div>
                            <label for="username control-label" class="col-sm-2 col-form-label"><h6>Brand</h6></label>
                            <div class="col-sm-4">
                              <select class="form-control">
                                <option>Select Category</option>
                                <option>Large select</option>
                                <option>Small select</option>
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
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
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
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                          </div>

                          <div class="form-group row p-2">
                                <label for="example-number-input" class="col-form-label col-sm-2">Quantity</label>
                                 <div class="col-sm-4">
                                    <input class="form-control" type="number" value="42" id="example-number-input">
                                </div>
                                 <label for="example-number-input" class="col-form-label col-sm-2">Reorder Quantity</label>
                                 <div class="col-sm-4">
                                    <input class="form-control" type="number" value="42" id="example-number-input">
                                </div>
                            </div>


                        
                         
                    </form>
                </div>     
            </div>  
        </div>
    </div>
      
    </div>
    <?php include "includes/offset.php"; ?>
          
    </div>
<?php include "includes/footer.php"; ?>