 <?php
 $me= new User();
 $details=$me->single_user($_SESSION['id'] );
 ?>
 <!-- page title area end -->
 <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-9 col-ml-12">
                        <div class="row">

                         <!-- Server side start -->
                         <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Personal Information</h4>
                                        <form class="needs-validation" novalidate="" method="POST" action="<?php echo $web_root ?>views/controller.php?action=update_info ">
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">First name</label>
                                                    <input type="text" class="form-control" id="validationCustom01" name="first_name" placeholder="First name" value="<?php echo htmlentities($details->first_name); ?>" required="">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Last name</label>
                                                    <input type="text" class="form-control" id="validationCustom02" name="last_name" placeholder="Last name" value="<?php echo htmlentities($details->last_name)?>" required="">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Username</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="validationCustomUsername" name="username" placeholder="Username" value="<?php echo htmlentities($details->username)?>"aria-describedby="inputGroupPrepend" required="">
                                                        <div class="invalid-feedback">
                                                            Please choose a username.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom03">City</label>
                                                    <input type="text" class="form-control" id="validationCustom03" value="<?php echo htmlentities($details->address)?>" name="city" placeholder="City" required="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">Province</label>
                                                    <input type="text" class="form-control" name="province" id="validationCustom04" value="<?php echo htmlentities($details->address)?>" placeholder="Province" required="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid state.
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom05">Country</label>
                                                    <input type="text" class="form-control" name="country" id="validationCustom05" value="<?php echo htmlentities($details->address)?>" placeholder="Country" required="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Country.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom03">Phone Number</label>
                                                    <input type="text" class="form-control" id="validationCustom03" name="Phone" value="<?php echo htmlentities($details->tel_number)?>" placeholder="phone" required="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Phone Number.
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                           
                                            <button class="btn btn-primary" type="submit">SAVE INFO</button><div class="pull-right">
                                            <a href="" class="btn btn-warning" data-target="#changePwd" data-toggle="modal" type="submit">CHANGE MY PASSWORD</a>
                                            <button class="btn btn-danger" type="submit">SUSPEND MY ACC.</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Server side end -->                        
 
                        </div>
                    </div>

                    <div class="col-lg-3 col-ml-12">
                        <div class="row">                         
                           
   
                            <!-- Disabled forms start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Non Editable Info</h4>
                                        <form>
                                            <fieldset disabled>
                                                <div class="form-group">
                                                    <label for="disabledTextInput">Last Update</label>
                                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="ID Card" value="<?php echo htmlentities($details->last_update)?>" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="disabledSelect">User Role</label>
                                                    <select id="disabledSelect" class="form-control">
                                                        <option><?php echo htmlentities($details->type)?>==</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="disabledSelect">Last Login</label>
                                                    <select id="disabledSelect" class="form-control">
                                                        <option><?php echo htmlentities($details->last_login)?></option>
                                                    </select>
                                                </div>
                                                
                                               
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Disabled forms end -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL EXMAPLE -->
        <div class="modal fade" id="changePwd">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Password Information</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <form method="POST" action="<?php echo web_root ?>views/controller.php?action=update_password ">
                        <div class="modal-body">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">New Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Describe new position name" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Confirm New password</label>
                                <input type="password" class="form-control" name="cfpassword" placeholder="Describe new position name" required="">
                            </div>
                        </div>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>