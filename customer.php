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
                        <h4 class="page-title pull-left">Customers</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="index.html">Home</a></li>
                            <li><span>Customers</span></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="main-content-inner">
              <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card " >
                        <div id="prod_content">
                            
                                <h4 class="header-title">Customer List</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th><input type="checkbox"></th>
                                                
                                                <th>Customer #</th>
                                                <th>Company Name</th>
                                                <th>Contact Person</th>
                                                <th>No. of Orders</th>
                                                <th></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $customers = $db->fetch_data("user_info");
                                                foreach($customers as $customer){
                                                    $get_c = array('user_id' => $customer['id']  );
                                                    $contact = $db->select_data("user_contact", $get_c);
                                             ?>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td><?php echo $customer['customer_no']; ?></td>
                                                <td><?php echo $customer['company_name']; ?></td>
                                                <td class="text-left"><?php echo $contact['designation'] . " " . $contact['firstname'] . " " . $contact['lastname'] ; ?></td>
                                                <td>0</td>
                                                 <td><button type="button" class=" gets btn btn-sm btn-primary"  value="<?php echo $customer['id']; ?>">Details</button></td>
                                                
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