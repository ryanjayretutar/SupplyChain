<?php 
    include "includes/header.php";
   
    $_SESSION['url'] = $_SERVER['REQUEST_URI']; 
    $user->session_check();

    if(isset($_POST['customer_add'])){
      $user_info = array("customer_no"=>$_POST['number'],
                        "company_name"=>$_POST['company'],
                        "website"=>$_POST['website'],
                        "tax_num"=>$_POST['trn'],
                        "credit_term"=>$_POST['terms'],
                        "credit_limit"=>$_POST['limit']);
      $db->insert_data("user_info", $user_info);

      $_SESSION['c_id'] = $db->get_last_id();

      foreach($_SESSION['addresses'] as $address){
        foreach($address as $add){
          $addr = array("user_id" =>$_SESSION['c_id'],
                        "housenumber"=>$add['home'],
                        "streetname"=>$add['street'],
                        "barangay"=>$add['barangay'],
                        "city"=>$add['city'],
                        "postalcode"=>$add['postal'],
                        "caddress"=>$add['category']);
          $db->insert_data("address_tbl", $addr);
        }
      }

      foreach($_SESSION['contacts'] as $contact){
        foreach($contact as $con){
          $cont = array("user_id" =>$_SESSION['c_id'],
                        "firstname"=>$con['firstname'],
                        "lastname"=>$con['lastname'],
                        "designation"=>$con['designation'],
                        "email"=>$con['email'],
                        "mobile"=>$con['mobile'],
                        "fax"=>$con['fax'],
                        "office"=>$con['office']);
          $db->insert_data("user_contact", $cont);
        }
      }

       unset($_SESSION['addresses']);
       unset($_SESSION['contacts']);
       unset($_SESSION['c_id']);
      
    }


 ?>

    <div class="page-container">
        <?php include "includes/sidebar.php"; ?>
        <?php include "includes/top-nav.php"; ?>

        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Add New Customer</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="main.php">Home</a></li>
                            <li><a href="customer.php">Customer</a></li>
                             <li><span>Add Customer  </span></li>
                        </ul>
                    </div>
                </div>
                 <div class="col-sm-6">
                  <input class="btn btn-lg btn-success float-right" name="customer_add" value="Save Customer" type="submit" form="add_customer"> 

                </div>
                
            </div>
        </div>

        <div class="main-content-inner mt-5">
            <!-- MAIN CONTENT GOES HERE -->
            <div class="container-fluid">
                <form action="" method="post" class="row" id="add_customer">
                    <div class="col-lg-7">
                        <div class="form-group row p-2">
                            <label for="username control-label" class="col-sm-3 col-form-label"><h6>Customer Number</h6></label>
                            <div class="col-sm-8">
                             <input type="text" class="form-control form-control-sm" id="number" name="number" >
                            </div>
                            
                          </div>
                          <div class="form-group row p-2">
                            <label for="username control-label" class="col-sm-3 col-form-label"><h6>Company Name</h6></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control form-control-sm" id="company" name="company" >
                            </div>
                            
                          </div>
                           <div class="form-group row p-2">
                            <label for="username control-label" class="col-sm-3 col-form-label"><h6>Website</h6></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control form-control-sm" id="website" name="website" >
                            </div>
                            
                          </div>
                           <div class="form-group row p-2">
                            <label for="username control-label" class="col-sm-3 col-form-label"><h6>Tax Registration Number</h6></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control form-control-sm" id="trn" name="trn" >
                            </div>
                            
                          </div>
                           <div class="form-group row p-2">
                            <label for="username control-label" class="col-sm-3 col-form-label"><h6>Credit Terms</h6></label>
                            <div class="col-sm-5">
                                <div class="d-flex flex-column row-hl">
                                    <label for="username control-label" class="item-hl col-form-label align-self-center"><h6>Default Credit Terms</h6></label>
                                     <select class="item-hl form-control" name="terms" id="categorys">
                                          <option value="">Select Terms</option>
                                          <?php $terms = $db->fetch_data("credit_terms");
                                                foreach($terms as $term){
                                            ?>                          
                                            <option value="<?php  echo $term['terms']; ?>"><?php echo $term['terms']; ?></option>
                                            <?php 
                                              }     
                                             ?>
                                    </select>
                                </div>
                              
                            </div>
                            <div class="col-sm-4">
                              <div class="d-flex flex-column row-hl">
                                <label for="username control-label" class="item-hl col-form-label align-self-center"><h6>Credit Limit</h6></label>
                                 <div class="input-group mb-3 item-hl">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">PHP</span>
                                    </div>
                                    <input type="text" name="limit" id="limit" class="form-control" aria-label="Amount (to the nearest dollar)">
                                  
                                </div>
                            </div>
                        </div>
                            
                          </div>
                    </div>
                    <div class="col-lg-5">
                        <h6>Addresses and Contacts</h6>
                        <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                            <li class="nav-item w-50 text-center">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#homes" role="tab" aria-controls="home" aria-selected="true">Address</a>
                            </li>
                            <li class="nav-item w-50 text-center">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="homes" role="tabpanel" aria-labelledby="home-tab">                    
                                <div class="form-group row p-2">
                                    <div class="d-flex flex-column row-hl">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Type</h6></label>
                                         <select class="item-hl form-control" name="category" id="category">
                                              <option value="">Select Category</option>
                                              <?php $addresses = $db->fetch_data("address_category");
                                                    foreach($addresses as $address){
                                                ?>                          
                                                <option value="<?php  echo $address['category']; ?>"><?php echo $address['category']; ?></option>
                                                <?php 
                                                  }     
                                                 ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="d-flex flex-column row-hl col-md-12">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Home Address</h6></label>
                                         <div class="item-hl">
                                          <textarea class="form-control" id="home" name="description" ></textarea> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="d-flex flex-column row-hl col-md-6">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Street Name</h6></label>
                                         <div class="item-hl">
                                          <input type="text" class="form-control form-control-sm" id="street" name="product" >
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column row-hl col-md-6">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Barangay</h6></label>
                                         <div class="item-hl">
                                          <input type="text" class="form-control form-control-sm" id="barangay" name="product" >
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <div class="d-flex flex-column row-hl col-md-6">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>City</h6></label>
                                         <div class="item-hl">
                                          <input type="text" class="form-control form-control-sm" id="city" name="product" >
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column row-hl col-md-6">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Postal Code</h6></label>
                                         <div class="item-hl">
                                          <input type="text" class="form-control form-control-sm" id="postal" name="product" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                  <button class="btn btn-sm btn-success float-right" name="add" type="button" id="addtoarr">Save Address</button>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="form-group row">
                                    <div class="d-flex flex-column row-hl col-md-12">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Designation</h6></label>
                                         <div class="item-hl">
                                          <input type="text" class="form-control form-control-sm" id="designation" name="designation" >
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <div class="d-flex flex-column row-hl col-md-6">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Last Name</h6></label>
                                         <div class="item-hl">
                                          <input type="text" class="form-control form-control-sm" id="lname" name="lname" >
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column row-hl col-md-6">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>First Name</h6></label>
                                         <div class="item-hl">
                                          <input type="text" class="form-control form-control-sm" id="fname" name="fname" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="d-flex flex-column row-hl col-md-12">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Email</h6></label>
                                         <div class="item-hl">
                                          <input type="text" class="form-control form-control-sm" id="email" name="email" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="d-flex flex-column row-hl col-md-6">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Mobile</h6></label>
                                         <div class="item-hl">
                                          <input type="text" class="form-control form-control-sm" id="mobile" name="mobile" >
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column row-hl col-md-6">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Fax</h6></label>
                                         <div class="item-hl">
                                          <input type="text" class="form-control form-control-sm" id="fax" name="fax" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="d-flex flex-column row-hl col-md-12">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Office</h6></label>
                                         <div class="item-hl">
                                          <input type="text" class="form-control form-control-sm" id="office" name="office" >
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group ">
                                  <button class="btn btn-sm btn-success float-right" name="add" type="button" id="addContact">Save Contact</button>

                                </div>  
                            </div>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>
      
    </div>
    <?php include "includes/offset.php"; ?>
          
    </div>
<?php include "includes/footer.php"; ?>
    <script>
        $(document).ready(function(){
          $('#addtoarr').on('click', function () {
            $.ajax({
                  type: 'post',
                  url: 'core/ajax/addtoarray.php',
                  data: {category: $("#category option:selected").val(), home: $("#home").val(), street: $("#street").val(), barangay: $("#barangay").val(), city: $("#city").val(), postal: $("#postal").val()},
                  success: function (data) {
                    $("#homes").html(data);
                  }
              });
            });
          $('#addContact').on('click', function () {
            $.ajax({
                  type: 'post',
                  url: 'core/ajax/add_contact.php',
                  data: {designation: $("#designation").val(), lname: $("#lname").val(), fname: $("#fname").val(), email: $("#email").val(), mobile: $("#mobile").val(), fax: $("#fax").val(), office: $("#office").val()},
                  success: function (data) {
                    $("#contact").html(data);
                  }
              });
            });



        });
    </script>
  </body>
</html>