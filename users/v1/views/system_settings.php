<?php
include("./include/initialize.php");
$settings=new Settings();
$all_settings_params=$settings->all_settings("1");
?>
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
                <?php ?>
                <!-- Server side start -->
                <div class="col-12">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h4 class="header-title">System Settings</h4>
                            <form class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data" action="<?php echo $web_root ?>views/controller.php?action=settings ">
                            
                                <div class="form-row">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Historical backround</span>
                                    </div>
                                    <textarea class="form-control"  maxlength="1000" name="histo" aria-label="With textarea"><?php echo $all_settings_params->historical ?></textarea>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">___About us\ School </span>
                                    </div>
                                    <textarea class="form-control" id="myarea" maxlength="1000" name="about_us" aria-label="With textarea"><?php echo $all_settings_params->about_us ?></textarea>
                                </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">Academic start</label>
                                        <input type="date" class="form-control" name="academic" value="<?php echo $all_settings_params->academic_start ?>" id="validationCustom04" placeholder="Province" required="">
                                    </div>                                   
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">MISSION</span>
                                    </div>
                                    
                                    <textarea class="form-control" id="myarea"  maxlength="1000" name="mission" aria-label="With textarea"><?php echo $all_settings_params->mission ?></textarea>
                                    
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">VISION</span>
                                    </div>
                                    
                                    <textarea class="form-control" id="myarea"  maxlength="1000" name="vision" aria-label="With textarea"><?php echo $all_settings_params->vision ?></textarea>
                                    
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">OUR VALUES</span>
                                    </div>
                                    <textarea class="form-control" id="myarea"  maxlength="1000" name="values" aria-label="With textarea"><?php echo $all_settings_params->our_values ?></textarea>
                                </div>

                                <div class="col-md-6 mb-3">
                                        <label for="validationCustom04">Contact Numbers(More Than 2 Please separate with (,)Comma sign)</label>
                                        <input type="text" class="form-control" name="contacts_details" value="<?php echo $all_settings_params->contacts_details ?>" id="validationCustom04" placeholder="Contact numbers" required="">
                                    </div>   

                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom04">Company Emails (More Than 2 Please separate with (,)Comma sign)</label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $all_settings_params->email ?>" id="validationCustom04" placeholder="Email" required="">
                                    </div>   

                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom04">Address (More Than 2 Please separate with (,)Comma sign)</label>
                                        <input type="text" class="form-control" name="company_address" value="<?php echo $all_settings_params->company_address ?>" id="validationCustom04" placeholder="Address" required="">
                                    </div>   

                 
                                <div class="input-group col-md-9 mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Front Slider</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="slider" class="custom-file-input" id="inputGroupFile02" value="<?php echo $all_settings_params->front_slider ?>">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file (Recommended 1920 X 1039 Size)</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>

                                <div class="input-group col-md-9 mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Fees Document</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="fees" class="custom-file-input" id="inputGroupFile02" value="<?php echo $all_settings_params->fees_doc ?>">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file (Recommended XLS , DOCS or PDF Document Only)</label>
                                    </div>
                                    <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                <!-- <button class="btn btn-primary" type="submit" name="send_user">SAVE DETAILS</button> -->
                                <input class="btn btn-primary" type="submit" name="send_user" value="SAVE SYSTEM SETTINGS">
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



