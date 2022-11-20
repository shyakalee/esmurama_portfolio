
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">

<div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <span class="status-p bg-primary float-right"><a href="index?route=add_events" style="color:white">New Events</a></span>
                                <h4 class="header-title">Active news</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Thumbnail</th>
                                                    <th scope="col">Images</th>
                                                    <th scope="col">Author</th>
                                                    <th scope="col">Venue</th>
                                                    <th scope="col">Scheduled Time</th>
                                                    <th scope="col">Entrance</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $count=0;
                                            $mydb->setQuery("SELECT * FROM wp_event");
                                                $cur = $mydb->loadResultList();
                                                foreach ($cur as $result) {
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo htmlentities($count+=1) ?></th>
                                                    <td><?php echo htmlentities($result->title)?></td>

                                                    <td>
                                                    <?php if($result->thumbnail==NULL) { echo "thumbnail is empty"; } else { ?> <a href="#" data-target="#thumbnail" data-toggle="modal"><?php echo htmlentities($result->thumbnail)?></a> <?php } ?></td>
                                                    <td>
                                                    <?php if($result->images==NULL) { echo "Image is empty"; } else { ?> <a href="#" data-target="#eventImage" data-toggle="modal"><?php echo htmlentities($result->images)?></a> <?php } ?>
                                                    </td>
                                                    <td><?php echo htmlentities($result->author)?></td>
                                                    <td><?php echo htmlentities($result->venue)?></td>
                                                    <td><?php echo htmlentities($result->schedule_date)?></td>
                                                    <td><?php echo htmlentities($result->time_in." - ".$result->time_out)?></td>                                                    
                                                    <td>
                                                    <?php
                                                    if($result->status=='1') {
                                                        if($result->schedule_date >= date('Y-m-d')) { ?>
                                                            <span class="status-p bg-primary">Active</span>
                                                            <?php } else { ?>
                                                                <span class="status-p bg-danger">Expired</span>
                                                            <?php } ?>                                           
                                                    <?php } elseif($result->status=='0') { ?>
                                                        <span class="status-p bg-warning">Disabled</span>
                                                        <?php } ?> 
                                                    <td>

                                                    <form method="post" action="">
                                                        <input type="hidden" name="id_post">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="index?route=single-event&id=<?php echo htmlentities($result->id) ?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <?php 
                                                            if($result->status=='1') { 
                                                            ?>
                                                            <li><a href="<?php echo $web_root ?>views/controller?action=delete&id=<?php echo $result->id ?>" onclick="return confirm('Do you want to delete this Item?')" class="text-danger"><i class="ti-trash"></i></a></li>
                                                            
                                                            <?php } else { ?>

                                                            <li><a href="<?php echo $web_root ?>views/controller?action=restore&id=<?php echo $result->id ?>" onclick="return confirm('Restore the selected Item?')" class="text-danger"><i class="fa fa-check"></i></a></li>
                                                           
                                                            <?php } ?>
                                                        </ul>
                                                    </form>

                                                    </td>
                                                </tr>
                                                <?php } ?>
                                               
                                               
                                                <!-- <tr>
                                                    <th scope="row">4</th>
                                                    <td>Mark</td>
                                                    <td>09 / 07 / 2018</td>
                                                    <td>
                                                        <div class="progress" style="height: 8px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td><span class="status-p bg-warning">panding</span></td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- MODAL EXMAPLE -->
            <div class="modal fade" id="thumbnail">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Thumbnail Image</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
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
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Confirm Upload</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="eventImage">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Event Image</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, repudiandae modi quae adipisci sunt, quaerat nihil est mollitia delectus consequuntur voluptate nesciunt veniam impedit, odio ducimus provident dolore quia obcaecati.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </div>
            </div>

