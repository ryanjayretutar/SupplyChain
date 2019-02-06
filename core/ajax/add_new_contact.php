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

                                <script>
                                  $(document).ready(function(){
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