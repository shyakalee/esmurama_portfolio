<?php
$blog=new Blog();
$single_blog=$blog->single_blog($_GET['id'])
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
                            

                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">New post Informarion</h4>
                                        <form class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data" action="<?php echo $web_root ?>views/controller.php?action=update_blog ">
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">post Title</label>
                                                    <input type="text" class="form-control" id="validationCustom01" name="title" placeholder="Post title goes here.." value="<?php echo $single_blog->title  ?>" required="">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <input type="hidden" name="id_blog" value="<?php echo $single_blog->id  ?>">
                                                </div>                                              
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Detailed Description</span>
                                                </div>
                                                <textarea class="form-control" maxlength="1000" name="description2" aria-label="With textarea"><?php echo $single_blog->description  ?></textarea>
                                            </div>
                                             

                                             <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Thumbnail Image</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="thumbnail" class="custom-file-input" id="inputGroupFile02">
                                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Main Post Image</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="main_image" class="custom-file-input" id="inputGroupFile02">
                                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">__File 1</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="file1" class="custom-file-input" id="inputGroupFile02">
                                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">__File 2</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="file2" class="custom-file-input" id="inputGroupFile02">
                                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">__File 3</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="file3" class="custom-file-input" id="inputGroupFile02">
                                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                           

                                             <div class="form-row">                                               

                                                <div class="col-md-6 mb-3">
                                                   <div class="form-group">
                                                    <label class="col-form-label">Publish status</label>
                                                    <select class="custom-select" name="status" required>
                                                        <option value="none">Open this select menu</option>
                                                        <option value="1">Active/Automactically Publish</option>
                                                        <option value="0" selected="selected">Disable</option>
                                                    </select>
                                                </div>
                                            </div>
                                                
                                            </div>

                                            <button class="btn btn-primary" name="update_blog" type="submit">Post</button>
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
        