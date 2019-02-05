                                <div class="form-group row p-2">
                                    <div class="d-flex flex-column row-hl">
                                        <label for="username control-label" class="item-hl col-form-label"><h6>Type</h6></label>
                                         <select class="item-hl form-control" name="category" id="category">
                                              <option value="">Select Category</option>
                                                                       
                                                <option value="Shipping">Shipping</option>
                                                <option value="Billing">Billing</option>
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
                                  <button class="btn btn-lg btn-success float-right" name="add" type="button" id="addtoarr">Save Address</button>

                                </div>

                                <script>
        $(document).ready(function(){
                 $('#addtoarr').on('click', function () {

        

          $.ajax({
            type: 'post',
            url: 'core/ajax/addtoarray.php',
            data: {category: $("#category").val() ,home: $("#home").val(), street: $("#street").val(), barangay: $("#barangay").val(), city: $("#city").val(), postal: $("#postal").val()},
            success: function (data) {
              $("#homes").html(data);
            }
          });

        });



        });
    </script>