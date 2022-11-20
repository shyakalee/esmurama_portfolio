<?php
$event=new Event();
$single_event=$event->single_event($_GET['id'])
?>

                    <!-- page title area end -->


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
                                                <h4 class="header-title">Update Event Details</h4>
                                                <form class="needs-validation" novalidate="" method="POST" action="<?php echo $web_root ?>views/controller.php?action=update_event">
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationCustom01">Event Title</label>
                                                            <input type="text" class="form-control" name="title" value="<?php echo htmlentities($single_event->title); ?>" id="validationCustom01" placeholder="Title" required="">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>

                                                        <input type="hidden" value="<?php echo htmlentities($single_event->id); ?>" name="id_event">

                                                        <div class="col-md-5 mb-3">
                                                            <label for="validationCustomUsername">Venue</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="venue" value="<?php echo htmlentities($single_event->venue); ?>" id="validationCustomUsername" placeholder="Venue name.." aria-describedby="inputGroupPrepend" required="">
                                                                <div class="invalid-feedback">
                                                                    Please choose a Venue.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationCustom03">Event date</label>
                                                            <input type="date" class="form-control" name="schedule_date" value="<?php echo htmlentities($single_event->schedule_date); ?>" id="validationCustom03" placeholder="City" required="">
                                                            <div class="invalid-feedback">
                                                                Please provide a Date for the event
                                                            </div>
                                                        </div> 

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationCustom04">Address(Not rec)</label>
                                                            <input type="text" class="form-control" name="address" value="<?php echo htmlentities($single_event->venue); ?>"id="validationCustom04" placeholder="Address" required="">
                                                            <div class="invalid-feedback">
                                                                Please provide a valid Address.
                                                            </div>
                                                        </div>                                                      

                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-9 mb-3">
                                                            <label for="validationCustom01">Event Description(Full)</label>
                                                            <textarea id="myarea" name="body"><?php echo htmlentities($single_event->body); ?></textarea>
                                                        </div>                                              
                                                    </div>


                                                    <div class="input-group col-md-9 mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">__Thumbnail Image</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="thumbnail" class="custom-file-input" id="inputGroupFile02">
                                                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>

                                                     <div class="input-group col-md-9 mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">__Event Image</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                            <label class="custom-file-label" name="images" for="inputGroupFile02">Choose file</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationCustom03">Time In</label>
                                                            <input type="time" class="form-control" value="<?php echo $single_event->time_in; ?>" name="time_in" id="validationCustom03" placeholder="Time in" required="">
                                                            <div class="invalid-feedback">

                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationCustom04">Time out</label>
                                                            <input type="time" name="time_out" value="<?php echo $single_event->time_out; ?>" class="form-control" id="validationCustom04" placeholder="Time out" required="">
                                                            <div class="invalid-feedback">

                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                         <div class="form-group">
                                                            <label class="col-form-label">Publish status</label>
                                                            <select class="custom-select" name="status">
                                                                <option value="1">Active/Automatically post</option>
                                                                <option value="0" selected>Disable</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>


                                                <button class="btn btn-primary" type="submit">UPDATE EVENT INFO</button>
                                                <a href="<?php echo $web_root ?>views/controller?action=delete&id=<?php echo $single_event->id ?>" class="btn btn-danger" onclick="return confirm('Delete this item?')"type="submit">DELETE THIS EVENT</a>
                                                <a href="<?php echo $web_root ?>views/controller?action=restore&id=<?php echo $single_event->id ?>" class="btn btn-warning" onclick="return confirm('Delete this item?')"type="submit">RESTORE EVENT</a>
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
            