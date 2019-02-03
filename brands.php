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
                        <h4 class="page-title pull-left">Brands</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.html">Home</a></li>
                            <li><span>Brands</span></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="main-content-inner">
            <!-- MAIN CONTENT GOES HERE -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card " >
                        <div id="prod_content">
                            
                                <h4 class="header-title">Product List</h4>
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
                                                $products = $db->fetch_data("product");
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

  </body>
</html>