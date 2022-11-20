

            <div class="main-content-inner">
            <div class="row">
                <!-- seo fact area start -->
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-md-4 mt-5 mb-3">
                            <div class="card">
                                <div class="seo-fact sbg1">
                                    <div class="p-4 d-flex justify-content-between align-items-center">
                                        <div class="seofct-icon"><i class="ti-thumb-up"></i> Users Registered</div>
                                        <?php $users= new User(); $all=$users->countUsers(); ?>
                                        <h2><?php echo $all; ?></h2>
                                      
                                    </div>
                                    <canvas id="seolinechart1" height="50"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-md-5 mb-3">
                            <div class="card">
                                <div class="seo-fact sbg2">
                                    <div class="p-4 d-flex justify-content-between align-items-center">
                                        <div class="seofct-icon"><i class="ti-share"></i> All Events Saved</div>
                                        <?php $events= new Event(); $all=$events->countEvents(); ?>
                                        <h2><?php echo $all; ?></h2>
                                    </div>
                                    <canvas id="seolinechart2" height="50"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-5 mb-3">
                            <div class="card">
                                <div class="seo-fact sbg1">
                                    <div class="p-4 d-flex justify-content-between align-items-center">
                                        <div class="seofct-icon"><i class="ti-thumb-up"></i> Blogs Published</div>
                                        <?php $blogs= new Blog(); $all=$blogs->countBlogs(); ?>
                                        <h2><?php echo $all ?></h2>
                                    </div>
                                    <canvas id="seolinechart1" height="50"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 mb-lg-0">
                            <div class="card">
                                <div class="seo-fact sbg3">
                                    <div class="p-4 d-flex justify-content-between align-items-center">
                                        <div class="seofct-icon">Impressions</div>
                                        <canvas id="seolinechart3" height="60"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="seo-fact sbg4">
                                    <div class="p-4 d-flex justify-content-between align-items-center">
                                        <div class="seofct-icon">New Users</div>
                                        <canvas id="seolinechart4" height="60"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- seo fact area end -->
               
             
               
                <!-- map area start -->
                <div class="col-xl-4 col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Marketing Area</h4>
                            <div id="seomap"></div>
                        </div>
                    </div>
                </div>
                <!-- map area end -->
                <!-- testimonial area start -->
                <div class="col-xl-5 col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body bg1">
                            <h4 class="header-title text-white">Contact us Queries</h4>
                            <div class="testimonial-carousel owl-carousel">
                               <?php
                               $contacts= new Contact();
                               $all=$contacts->all_queries();
                               foreach($all as $result) {
                               ?>
                              
                                <div class="tst-item">
                                    <div class="tstu-img">
                                        <img src="assets/images/team/team-author3.jpg" alt="author image">
                                    </div>
                                    <div class="tstu-content">
                                        <h4 class="tstu-name"><?php echo $result->full_names ?></h4>
                                        <span class="profsn">Sent at <?php echo $result->created_at ?></span>
                                        <small class="profsn">Tel Number <?php echo $result->tel_number ?></small>
                                        <p><?php echo $result->subject ?></p>
                                        <a href="index?route=contacts" style="color:red">Click to View</a>
                                    </div>
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimonial area end -->

                 <!-- timeline area start -->
                 <div class="col-xl-3 col-ml-4 col-lg-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Timeline</h4>
                            <div class="timeline-area">
                                <div class="timeline-task">
                                    <div class="icon bg1">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="tm-title">
                                        <h4>Rashed sent you an email</h4>
                                        <span class="time"><i class="ti-time"></i>09:35</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                                    </p>
                                </div>
                                <div class="timeline-task">
                                    <div class="icon bg2">
                                        <i class="fa fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="tm-title">
                                        <h4>Rashed sent you an email</h4>
                                        <span class="time"><i class="ti-time"></i>09:35</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                                    </p>
                                </div>
                                
                                
                                <div class="timeline-task">
                                    <div class="icon bg3">
                                        <i class="ti-signal"></i>
                                    </div>
                                    <div class="tm-title">
                                        <h4>Rashed sent you an email</h4>
                                        <span class="time"><i class="ti-time"></i>09:35</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- timeline area end -->
            </div>
        </div>