
                    <!-- page title area end -->


                    <div class="main-content-inner">
                        <div class="row">
                           
                            <div class="col-lg-12 col-ml-12">
                                <div class="row">
                                   

                                    <!-- Server side start -->
                                    <div class="col-12">
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <h4 class="header-title">New Event Details</h4>
                                                <form class="needs-validation" novalidate="" method="POST" action="<?php echo web_root ?>views/controller.php?action=add_event_process ">
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationCustom01">Event Title</label>
                                                            <input type="text" class="form-control" name="title" id="validationCustom01" placeholder="Title" required="">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>

                                                        <div class="col-md-5 mb-3">
                                                            <label for="validationCustomUsername">Venue</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="venue" id="validationCustomUsername" placeholder="Venue name.." aria-describedby="inputGroupPrepend" required="">
                                                                <div class="invalid-feedback">
                                                                    Please choose a Venue.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationCustom03">Event date</label>
                                                            <input type="date" class="form-control" name="schedule_date" id="validationCustom03" placeholder="City" required="">
                                                            <div class="invalid-feedback">
                                                                Please provide a Date for the event
                                                            </div>
                                                        </div> 

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationCustom04">Address(Not rec)</label>
                                                            <input type="text" class="form-control" name="address" id="validationCustom04" placeholder="Address" required="">
                                                            <div class="invalid-feedback">
                                                                Please provide a valid Address.
                                                            </div>
                                                        </div>                                                      

                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-9 mb-3">
                                                            <label for="validationCustom01">Event Description(Full)</label>
                                                            <textarea id="myarea" name="body"></textarea>
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
                                                            <input type="file" name="images" class="custom-file-input" id="inputGroupFile02">
                                                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationCustom03">Time In</label>
                                                            <input type="time" class="form-control" name="time_in" id="validationCustom03" placeholder="Time in" required="">
                                                            <div class="invalid-feedback">

                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationCustom04">Time out</label>
                                                            <input type="time" name="time_out" class="form-control" id="validationCustom04" placeholder="Time out" required="">
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



                                                <button class="btn btn-primary" type="submit">ADD EVENT</button>
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
            