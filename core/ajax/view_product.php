<?php
include "../init.php";
$prod_id = array("id"=>$_SESSION['edit_id']);
if(isset($_POST['product'])){
 $fields = array("name"=>$_POST['product'],
            "sku"=>$_POST['sku'],
            "description"=>$_POST['description'],
            "p_category"=>$_POST['category'],
            "p_brand"=>$_POST['brand'],
            "purchase_price"=>$_POST['purchase'],
            "selling_price"=>$_POST['selling'],
            "quantity"=>$_POST['quantity'],
            "reorder_quantity"=>$_POST['reorder']
            );
 $update = $db->update_data("product",$prod_id, $fields);
}

$product = $db->select_data("product",$prod_id);
?>
<form id="new">
  <div class="row">
    <div class="col-lg-6">
      <div class="form-group row p-2">
        <label for="username control-label" class="col-sm-4 col-form-label"><h6>Product Name</h6></label>
        <div class="col-sm-8">
          <label for="username control-label" class="col-form-label"><h6><?php echo $product['name']; ?></h6></label>
        </div>
      </div>
      <div class="form-group row p-2">
        <label for="username control-label" class="col-sm-4 col-form-label"><h6>SKU</h6></label>
        <div class="col-sm-8">
          <label for="username control-label" class="col-form-label"><h6><?php echo $product['sku']; ?></h6></label>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group row p-2">
        <label for="username control-label" class=" col-form-label"><h6>Product Image</h6></label>
      </div>
      <div class="form-group row p-2">
        <div class="wrapbox"></div>
      </div>
    </div>
  </div>
  
  
  
  <div class="form-group row p-2">
    <label for="username control-label" class="col-sm-2 col-form-label"><h6>Description</h6></label>
    <div class="col-sm-10">
      <label for="username control-label" class="col-form-label"><h6><?php echo $product['description']; ?></h6></label>
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="username control-label" class="col-sm-2 col-form-label"><h6>Category</h6></label>
    <div class="col-sm-4">
      <label for="username control-label" class="col-form-label"><h6><?php echo $product['p_category']; ?></h6></label>
    </div>
    <label for="username control-label" class="col-sm-2 col-form-label"><h6>Brand</h6></label>
    <div class="col-sm-4">
      <label for="username control-label" class="col-form-label"><h6><?php echo $product['p_brand']; ?></h6></label>
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
      <label for="username control-label" class="col-form-label p-2"><h6><?php echo $product['selling_price']; ?></h6></label>
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
      <label for="username control-label" class="p-2 col-form-label"><h6><?php echo $product['purchase_price']; ?></h6></label>
      <div class="input-group-append">
        <span class="input-group-text">.00</span>
      </div>
    </div>
  </div>
</div>
<div class="form-group row p-2">
  <label for="example-number-input" class="col-form-label col-sm-2"><h6>Quantity</h6></label>
  <div class="col-sm-4">
    <label for="username control-label" class="col-form-label"><h6><?php echo $product['quantity']; ?></h6></label>
  </div>
  <label for="example-number-input" class="col-form-label col-sm-2"><h6>Reorder Quantity</h6></label>
  <div class="col-sm-4">
    <label for="username control-label" class="col-form-label"><h6><?php echo $product['reorder_quantity']; ?></h6></label>
  </div>
</div>
</form>
<div class="float-right">
<button class="btn btn-lg btn-success float-right" id="edit" type="button">Edit Product</button>
</div>
<script>
    $("#edit").click(function() {
    $.ajax({
        url: "core/ajax/edit_product.php",
          success: function(data){
          $("#profile").html(data);
         },
        error: function(){
           alert("error");
         }
        })
    });
</script>