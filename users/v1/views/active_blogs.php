<?php 
$count=0;
$blog=new Blog();
$all_blogs=$blog->all_news2("0");
$count+=1;
?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">

                <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <span class="status-p bg-primary float-right"><a href="index?route=new_post" style="color:white">New Post</a></span>
                                <h4 class="header-title">Active news</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Author</th>
                                                    <th scope="col">Published At</th>
                                                    <th scope="col">status</th>
                                                    <th scope="col">action(00)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count=0;
                                                $mydb->setQuery("SELECT * FROM wp_announcement ORDER BY created_at DESC");
                                                $cur = $mydb->loadResultList();
                                                foreach ($cur as $result) {
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo htmlentities($count+=1)?></th>
                                                    <td><?php echo htmlentities($result->title)?></td>
                                                    <td><?php echo htmlentities($result->author) ?></td>
                                                    <td><?php echo htmlentities($result->created_at) ?></td>                                                    
                                                    <td>
                                                        <?php if($result->status=='1') { ?>
                                                        <span class="status-p bg-primary">Active</span></td>
                                                        <?php } elseif($result->status=='0') { ?>
                                                        <span class="status-p bg-warning">Inactive</span></td>
                                                        <?php } ?>
                                                    <td>
                                                        <form method="post" action="">
                                                        <input type="hidden" name="id_post">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="index?route=single-blog&id=<?php echo $result->id ?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <?php if($result->status=='1') { ?>
                                                            <li><a href="<?php echo $web_root ?>views/controller?action=rej&id=<?php echo $result->id ?>" onclick="return confirm('Do you want to delete this Item?')" class="text-danger"><i class="ti-trash"></i></a></li>
                                                            <?php }else { ?>
                                                            <li><a href="<?php echo $web_root ?>views/controller?action=appr&id=<?php echo $result->id ?>" onclick="return confirm('Restore the sekec this Item?')" class="text-danger"><i class="fa fa-check"></i></a></li>
                                                           <?php } ?>
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


