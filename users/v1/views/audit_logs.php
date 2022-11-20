
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">

<div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Audit Logs of users</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Full Names</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Action Performed</th>
                                                    <th scope="col">Last Change</th>
                                                    <th scope="col">Username</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                        <?php
                                            $count=0;
                                            $logs= new Log();
                                            $all=$logs->getLogs();
                                            foreach($all as $result) {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo htmlentities($count+=1) ?></th>
                                                    <td><?php echo htmlentities($result->fn." ".$result->ln) ?></td>
                                                    <td><?php echo htmlentities($result->username) ?></td>
                                                    <td><?php echo htmlentities($result->title) ?></td> 
                                                    <td><?php echo htmlentities($result->flag) ?></td>   
                                                    <td><?php echo htmlentities($result->lastu); ?></td>                                                                                                    
                                                    <td><?php echo htmlentities($result->created); ?></td>  
                                                                                                 
                                                   
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



