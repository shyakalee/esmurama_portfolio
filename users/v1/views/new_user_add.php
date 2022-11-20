
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-6 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->                            
                <!-- Textual inputs end -->

                <!-- Radios start -->                      
                <!-- Radios end -->

                <!-- Checkboxes start -->                        
                <!-- Checkboxes end -->

                <!-- button with dropdown start -->                           
                <!-- button with dropdown end -->

            </div>
        </div>
        <div class="col-lg-12 col-ml-12">
            <div class="row">
                <!-- basic form start -->
                <!-- basic form end -->

                <!-- basic form start -->                       
                <!-- basic form end -->

                <!-- Input Sizes start -->                           
                <!-- Input Sizes end -->

                <!-- Input Sizes Rounded start -->
                
                <!-- Input Sizes Rounded end -->
                <!-- Input Grid start -->                          
                <!-- Input Grid end -->

                <!-- Disabled forms start -->                        
                <!-- Disabled forms end -->

                <!-- Server side start -->
                <div class="col-12">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h4 class="header-title">User Basic Informarion</h4>
                            <form class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data" action="<?php echo $web_root ?>views/controller.php?action=insert ">
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">First name</label>
                                        <input type="text" name="first_name" class="form-control" id="validationCustom01" placeholder="First name" required="">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Last name</label>
                                        <input type="text" name="last_name" class="form-control" id="validationCustom02" placeholder="Last name" required="">
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
                                            <input type="text" name="username" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">City</label>
                                        <input type="text" class="form-control" name="city" id="validationCustom03" placeholder="City" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">Province</label>
                                        <input type="text" class="form-control" name="province" id="validationCustom04" placeholder="Province" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid Province.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">Country</label>
                                        <input type="text" class="form-control" name="country" id="validationCustom05" placeholder="Country" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid Country.
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">                                              
                                    <div class="col-md-3 mb-3">
                                        <b class="text-muted mb-3 mt-4 d-block">Select Your gender</b>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" checked id="customRadio4" name="customRadio2" value="male" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio4">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio5" name="customRadio2" value="female" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio5">Female</label>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="form-row">                                              
                                    <div class="col-md-3 mb-3">
                                    <b class="text-muted mb-3 d-block">Show user on Staff Card/Immediately</b>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="show_card" value="1" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Select/Unselect</label>
                                            </div>
                                        
                                    </div>
                                </div>

                                 <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">Tel Number</label>
                                        <input type="text" name="tel_number" class="form-control" id="validationCustom03" placeholder="Telephone number" required="">
                                        <div class="invalid-feedback">
                                            Please provide your Phone number.
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                       <div class="form-group">
                                        <label class="col-form-label">Select user Type</label>
                                        <select class="custom-select" name="user_type">
                                        <option selected="selected">Open this select menu</option>
                                            <?php
                                            $positions=new Position();
                                            $all=$positions->all_positions();
                                            foreach ($all as $key=>$results) {                                            
                                            ?>
                                            <option value="<?php echo htmlspecialchars($results->id)?>"><?php echo htmlspecialchars($results->title)?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                    
                                </div>

                                <div class="input-group col-md-9 mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Profile Image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="profile_image" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                <!-- <button class="btn btn-primary" type="submit" name="send_user">SAVE DETAILS</button> -->
                                <input class="btn btn-primary" type="submit" name="send_user" value="SAVE DETAILS">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Server side end -->
                

                <!-- Input Group start -->                           
                <!-- Input Group end -->

                <!-- Custom file input start -->                           
                <!-- Custom file input end -->
            </div>
        </div>
    </div>
</div>



