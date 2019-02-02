<?php
  include "../init.php";
  $prod_id = array("id"=>$_SESSION["edit_id"]);
  $product = $db->select_data("product",$prod_id);

?>
<form action="" method="post" id="update_product">
      <div class="row">
           <div class="col-lg-6">
              <div class="form-group row p-2">
                  <label for="username control-label" class="col-sm-4 col-form-label"><h6>Product Name</h6></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="product" name="product" value="<?php echo $product['name'] ?>">
                  </div>
                  
                </div>
              <div class="form-group row p-2">
                 <label for="username control-label" class="col-sm-4 col-form-label"><h6>SKU</h6></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="sku" name="sku" value="<?php echo $product['sku'] ?>" >
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
            <textarea rows="6" class="form-control" id="description" name="description" ><?php echo $product['description']; ?></textarea> 
          </div>
        </div>
        <div class="form-group row p-2">
          <label for="username control-label" class="col-sm-2 col-form-label"><h6>Category</h6></label>
          <div class="col-sm-4">
            <select class="form-control" name="category" id="category">
            <option value="<?php echo $product['p_category'] ?>"><?php echo $product['p_category'] ?></option>
            <?php $categories = $db->fetch_data("product_category");
                  foreach($categories as $category){
                    if($category['p_category'] == $product['p_category']){
                      // continue;
                    }
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
              <option value="<?php echo $product['p_brand']; ?>"><?php echo $product['p_brand']; ?></option>
              <?php $brands = $db->fetch_data("product_brand");
                  foreach($brands as $brand){
                     if($category['p_brand'] == $product['p_brand']){
                      // continue;
                    }
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
                  <input type="text" name="purchase" id="purchase" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $product['purchase_price']; ?>">
                  <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                  </div>
              </div>
          </div>
           <label for="username control-label" class="col-sm-2 col-form-label"><h6>Selling Price</h6></label>
          <div class="col-sm-4">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text">PHP</span>
                  </div>
                  <input type="text" name="selling" id="selling" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $product['selling_price']; ?>">
                  <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                  </div>
              </div>
          </div>
        </div>

        <div class="form-group row p-2">
              <label for="example-number-input" class="col-form-label col-sm-2">Quantity</label>
               <div class="col-sm-4">
                  <input class="form-control" value="<?php echo $product['quantity'] ?>" type="number" name="quantity" id="quantity">
              </div>
               <label for="example-number-input" class="col-form-label col-sm-2">Reorder Quantity</label>
               <div class="col-sm-4">
                  <input class="form-control" value="<?php echo $product['reorder_quantity'] ?>" type="number" name="reorder" id="reorder" id="example-number-input">

              </div>
          </div>  
  </form>
   <div class="float-right">
   
      <button class="btn btn-lg btn-success " id="update" type="submit" form="update_product">Update Product</button>
       <button class="btn btn-lg btn-danger " id="cancel">Cancel</button>

   </div>

    <script>
     
        
    </script>