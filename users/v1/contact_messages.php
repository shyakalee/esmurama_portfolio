


            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">

<div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="header-title">Visitors Messages</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Full Names</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Message</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">tel Number</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Sent at</th>
                                                   
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $count=0;
                                            $mydb->setQuery("SELECT * FROM wp_contacts_queries");
                                            $cur = $mydb->loadResultList();
                                            foreach ($cur as $result) {
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo htmlentities($count+=1) ?></th>
                                                    <td><?php echo htmlentities($result->full_names) ?></td>
                                                    
                                                    <?php if($result->subject=='198caq') {?>
                                                    <td><?php echo htmlentities('Sent from Front page'); ?></td>                                                    
                                                    <?php } else { ?>
                                                    <td><?php echo htmlentities($result->message); ?></td>
                                                    <?php } ?>
                                                    <td><?php echo htmlentities($result->message); ?></td>
                                                    
                                                    <td><?php echo htmlentities($result->email) ?></td>
                                                    <td><?php echo htmlentities($result->tel_number) ?></td>
                                                    <td>
                                                        <?php
                                                        if($result->status=='1') { ?>
                                                            <span class="status-p bg-primary">Active</span>
                                                            <?php } else { ?>
                                                            <span class="status-p bg-warning">Disabled</span>                                                                
                                                        <?php } ?> 
                                                    </td>  
                                                    <td><?php echo htmlentities($result->created_at); ?></td>  
                                                  
                                                    <td>
                                                        <form action="#" method="POST">
                                                        <ul class="d-flex justify-content-center">                                                          
                        
                                                            <?php 
                                                            if($result->show_card=='1') { 
                                                            ?>
                                                            <li><a href="<?php echo $web_root ?>views/controller.php?action=trash_contact&id=<?php echo $result->id ?> " onclick="return confirm('Delete this item?')" class="text-danger"><i class="ti-edit"></i></a></li>
                                                            <?php } else { ?>
                                                            <li><a href="<?php echo $web_root ?>views/controller.php?action=restore_contact&id=<?php echo $result->id ?> " onclick="return confirm('Restore this item?')" class="text-danger"><i class="ti-trash"></i></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </form>
                                                    </td>
                                                </tr>
                                                <?php } if($key=0 OR $key=null) {?>                
                                                    <td><p>No Available Messages, Will be updating for While..</p></td>                       
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



