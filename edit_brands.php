<?php 
    include "includes/header.php";
    $_SESSION['url'] = $_SERVER['REQUEST_URI']; 
    $user->session_check();
    if (isset($_GET['id'])) {
       $brand_id = array("id"=>$_GET['id']);
        $brand = $db->select_data("product_brand",$brand_id); 
         $p_brand = array("p_brand"=>$brand['name']);
        $products = $db->fetch_data_Many("product",$p_brand); 
    }

    if(isset($_POST['update'])){
        $where = array('id' => $brand['id']);
        $brands = array('name' => $_POST['brand'],
                        'description' => $_POST['description']);
        $b_prod = array('p_brand' => $_POST['brand']);
        $brand_update = array("p_brand"=>$brand['name']);
        $prod = $db->update_data("product",$brand_update, $b_prod); 
        $updated = $db->update_data("product_brand", $where, $brands);
        header("location: edit_brands.php?id=" . $brand['id']);

    }

 ?>

    <div class="page-container">
        <?php include "includes/sidebar.php"; ?>
        <?php include "includes/top-nav.php"; ?>

        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Dashboard</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.html">Home</a></li>
                            <li><span>Dashboard</span></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="main-content-inner">
           <form action="" method="post" id="update_brands">
              <div class="row">
                <div class="col-lg-12">
                   <div class="form-group row p-2">
                      <label for="username control-label" class="col-sm-2 col-form-label"><h6>Brand Name</h6></label>
                      <div class="col-sm-6">
                        <input type="text" readonly="true" class="form-control" id="brand_name" name="brand" value="<?php echo $brand['name'] ?>">
                      </div>
                      
                    </div>
                  <div class="form-group row p-2">
                      <label for="username control-label" class="col-sm-2 col-form-label"><h6>Description</h6></label>
                      <div class="col-sm-6">
                        <textarea rows="6" class="form-control"  readonly="true" id="b_description" name="description" ><?php echo $brand['description']; ?></textarea> 
                      </div>
                    </div>
                </div>

              
              </div>
              <div class="clearfix" id="btn-group">
                <button class="btn btn-lg btn-success float-right" id="edit" type="button">Edit Brand</button>
              </div>

            </form>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card " >
                        <div id="prod_content">
                            
                                <h4 class="header-title">Product List under <?php echo $brand['name']; ?> Brand</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th><input type="checkbox"></th>
                                                <th></th>
                                                <th>Item Name</th>
                                                <th>Description</th>
                                                <th>Qty (In Stock)</th>
                                                <th>Selling Price</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                              
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
        </div>
    </div>
      
    </div>
    <?php include "includes/offset.php"; ?>
          
    </div>
<?php include "includes/footer.php"; ?>
 <script>
        $(document).ready(function(){
            $(".gets").click(function(){
                // $.post("core/ajax/product_data.php", {id : $(this).val()},
                //     function(data){
                //         $("#prod_content").html(data);
                //     })
                $.ajax({
                    url: "core/ajax/product_data.php",
                    data: {id : $(this).val()},
                    method: "POST",
                    success: function(data){
                        $("#prod_content").html(data);
                    }
                })
            });

            $("#edit").click(function(event) {
                $("#brand_name").prop('readonly', false);
                $("#b_description").prop('readonly', false);
                var update =  '<button class="btn btn-lg btn-success float-right" name="update" id="update" type="submit" form="update_brands">Update Product</button><button class="btn btn-lg btn-danger float-right mr-2 " id="cancel">Cancel</button>';
                $("#btn-group").html(update);
            });


            $("#cancel").click(function(event) {
                $("#brand_name").prop('readonly', true);
                $("#b_description").prop('readonly', true);
                var edit =  ' <button class="btn btn-lg btn-success float-right" id="edit" type="button">Edit Brand</button>';
                $("#btn-group").html(edit);
            });

            // $("#add_product").submit(function(event) {
            //     event.preventDefault(    );
            //       var data = $(this).serialize();

            //     alert(data);

            // });

        //      $("#update_brands").submit(function(event) {
        //       event.preventDefault();
        //       var form = $(this);

        //       $.ajax({
        //         url: "edit_brands.php?" +  ,
        //         method: "POST",
        //         data: form.serialize(),
        //         success: function(data){
        //           $("#profile").html(data);
        //         }
        //       })
        // });

           
        });

    </script>


  </body>
</html>