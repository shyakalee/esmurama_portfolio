
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">

<div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <span class="status-p bg-primary float-right"><a href="index?route=new_user" style="color:white">New User</a></span>
                                <h4 class="header-title">Available Users</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Full Names</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Gender</th>
                                                    <th scope="col">Tel number</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Card</th>
                                                    <th scope="col">Joined Date</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        <?php
                                            $count=0;
                                            $count=0;
                                            $staff = new User();
                                            $users=$staff->list_all_staff();
                                            foreach($users as $result) {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo htmlentities($count+=1) ?></th>
                                                    <td><?php echo htmlentities($result->first_name." ".$result->last_name); ?></td>
                                                    <td><?php echo htmlentities($result->address); ?></td>
                                                    <td><?php echo htmlentities($result->gender); ?></td>
                                                    <td><?php echo htmlentities($result->tel_number) ?></td>
                                                    <td><?php echo htmlentities($result->title) ?></td>
                                                    
                                                    <td><?php echo htmlentities($result->username); ?></td>  
                                                    <td>
                                                        <?php
                                                        if($result->show_card=='1') { ?>
                                                            <span class="status-p bg-primary">Active</span>
                                                            <?php } else { ?>
                                                            <span class="status-p bg-warning">Disabled</span>                                                                
                                                        <?php } ?> 
                                                    </td>                                                  
                                                    <td><?php echo htmlentities($result->joined_date); ?></td>
                                                    <td>
                                                        <form action="#" method="POST">
                                                        <ul class="d-flex justify-content-center">
                                                           
                                                            <li class="mr-3"><a href="index?route=single-item&item=<?php echo $result->id ?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                             
                                                            <?php  if($result->show_card=='1') { ?>
                                                            <li><a href="<?php echo $web_root ?>views/controller.php?action=trash_user&id=<?php echo $result->id ?> " onclick="return confirm('Delete this item?')" class="text-danger"><i class="ti-trash"></i></a></li>
                                                            <?php } else { ?>
                                                            <li><a href="<?php echo $web_root ?>views/controller.php?action=restore_user&id=<?php echo $result->id ?> " onclick="return confirm('Restore this item?')" class="text-danger"><i class="ti-check"></i></a></li>
                                                            <?php } ?>
                                                            <li><a href="<?php echo $web_root ?>views/controller.php?action=reset&id=<?php echo $result->id ?> " onclick="return confirm('Reset user Password?')" class="text-danger">&nbsp<i class="ti-unlock"></i></a></li>
                                                        </ul>
                                                    </form>
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