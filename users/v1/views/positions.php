


            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">

<div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <span class="status-p bg-primary float-right"><a href="#" style="color:white" data-target="#addEvent" data-toggle="modal">New Position</a></span>
                                <h4 class="header-title">Active Positions</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Position Name</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Last Update</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $count=0;
                                                $mydb->setQuery("SELECT * FROM wp_positions");
                                                $cur = $mydb->loadResultList();
                                                foreach ($cur as $result) {
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo htmlentities($count+=1) ?></th>
                                                    <td><?php echo htmlentities($result->title) ?></td>
                                                    <td>
                                                        <?php
                                                        if($result->status=='1') { ?>                                                        
                                                            <span class="status-p bg-primary">Active</span>
                                                            <?php } else { ?>
                                                                <span class="status-p bg-danger">Disabled</span>
                                                            <?php } ?>                                           
                                                    </td>                                           
                                                    <td><?php echo htmlentities($result->last_update); ?></td>                                                 
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="<?php echo $web_root ?>views/controller.php?action=edit_position&id=<?php echo $result->id ?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <?php if($result->status =='1') {?>
                                                                <li><a href="<?php echo $web_root ?>views/controller.php?action=trash_position&id=<?php echo $result->id ?>" onclick="return confirm('Delete This item?')" class="text-danger"><i class="ti-trash"></i></a></li>
                                                            <?php } else {?>
                                                                <li><a href="<?php echo $web_root ?>views/controller.php?action=restore_position&id=<?php echo $result->id ?>" onclick="return confirm('Restore Item?')" class="text-danger"><i class="ti-check"></i></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </td>
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



        <!-- MODAL EXMAPLE -->
        <div class="modal fade" id="addEvent">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add User position</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <form method="POST" action="<?php echo web_root ?>views/controller.php?action=add_position ">
                        <div class="modal-body">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Position Name</label>
                                <input type="text" class="form-control" name="position" placeholder="Describe new position name" required="">
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