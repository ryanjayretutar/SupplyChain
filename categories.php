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
                        <h4 class="page-title pull-left">Categories</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.html">Home</a></li>
                            <li><span>Categories</span></li>
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
                            
                                <h4 class="header-title">Category List</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th><input type="checkbox"></th>
                                                <th>Item Categories</th>
                                                <th>Description</th>
                                                 <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $products = $db->fetch_data("product_category");
                                                foreach($products as $product){
                                             ?>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td><?php echo $product['name']; ?></td>
                                                <td class="text-left"><?php echo $product['description']; ?></td>
                                                <td><form action="" method="post">
                                                    <a href="view_categories.php?id=<?php echo $product['id']?>" class="btn btn-sm btn-primary">Edit</a>
                                                </form></td>

                                               
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
            $(".brand-get").click(function(){
                // $.post("core/ajax/product_data.php", {id : $(this).val()},
                //     function(data){
                //         $("#prod_content").html(data);
                //     })
                $.load({
                    url: "edit_brands.php?" + $(this).val(),
                   
                })
            });

            // $("#add_product").submit(function(event) {
            //     event.preventDefault(    );
            //       var data = $(this).serialize();

            //     alert(data);

            // });

           
        });

    </script>

  </body>
</html>