
<!doctype html>
<html lang="en">

<?php include('layouts/header.php'); ?>
<?php include('users/v1/include/initialize.php'); ?>

<body>
   
   <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->
    
    <?php include('layouts/navigation.php'); ?>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== SLIDER PART START ======-->
    
    <section id="slider-part-3" class="bg_cover"  style="background-image: url(
        <?php 
        $sliders=new Settings(); 
        $single=$sliders->all_settings("1");
        echo web_root."assets/images/sliders/".$single->front_slider;
        
        ?>)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="slider-cont-3 text-center">
                        <h2>Search for prefered courses</h2>
                        <span>More than 54+ courses for you</span>
                        <div class="slider-search mt-45">
                           <form action="#">
                                <div class="row no-gutters">
                                    <div class="col-sm-3">
                                        <select>
                                            <option value="0">MCB</option>
                                            <option value="1">MPG</option>
                                            <option value="2">PCB</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Search keyword">
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="button" class="main-btn">Search Now</button>
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div>
                    </div> <!-- slider cont3 -->
                </div>
            </div> <!-- row -->
            <div class="slider-feature pt-30 d-none d-md-block">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-30">
                            <div class="icon">
                                <img src="images/all-icon/man2.png" alt="icon">
                            </div>
                            <div class="cont">
                                <h3>2840</h3>
                                <span>Graduated Students</span>
                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-30">
                            <div class="icon">
                                <img src="images/all-icon/book1.png" alt="icon">
                            </div>
                            <div class="cont">
                                <h3>50</h3>
                                <span>Available Courses</span>
                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-30">
                            <div class="icon">
                                <img src="images/all-icon/expert1.png" alt="icon">
                            </div>
                            <div class="cont">
                                <h3>Expert Instructor</h3>
                                <span>Experienced Teachers</span>
                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                </div> <!-- row -->
            </div> <!-- slider feature -->
        </div> <!-- container -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== CATEGORY PART START ======-->
    
    <section id="category-3" class="category-2-items pt-50 pb-80 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-1.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>English</h5>
                                <span>24 courses</span>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-1.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>French</h5>
                                <span>103 courses</span>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-2.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>Kinyarwanda</h5>
                                <span>57 courses</span>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-1.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>Swahili program</h5>
                                <span>17 courses</span>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== CATEGORY PART ENDS ======-->
    
    <!--====== COURSE PART START ======-->
    
    <section id="course-part" class="pt-65 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-10">
                        <h5>Historical Background</h5>
                        <!-- <h2>Featured courses </h2> -->
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->       

            <div class="row">
                <div class="col-lg-5">
                   
                    <div class="about-cont">
                        <p><?php echo $single->historical; ?>  </p>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-0">
                        <img src="images/about/old_about.jpg" height="320" width="320" alt="About">
                    </div>  <!-- about imag -->
                </div> 
            </div> <!-- row -->          
                
               
        </div> <!-- container -->
    </section>
    
    <!--====== COURSE PART ENDS ======-->
    
    <!--====== COUNT DOWN PART START ======-->
    
    <section id="count-down-part" class="bg_cover pt-70 pb-120" data-overlay="8" style="background-image: url(images/front-background.jpg); background-attachment: fixed;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="count-down-cont pt-50">
                        <h3>Get Our Excellent Education</h3>
                        <h2>Register now</h2>
                        <div data-countdown="<?php echo $single->academic_start ?>"></div>
                    </div> <!-- count down cont -->
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-8">
                    <div class="category-form category-form-3 pt-50">
                        <div class="form-title text-center">
                            <h3>Send us an inquiry</h3>
                            <span>Fill the form </span>
                        </div>
                        <div class="main-form">
                            <form action="<?php echo $web_root ?>views/controller.php?action=submit_contact" method="POST">
                                <div class="singel-form">
                                    <input type="text" name="names" placeholder="Your name" required="required">
                                </div>
                                <div class="singel-form">
                                    <input type="email" name="email" placeholder="Your Email" required="required">
                                </div>
                                <div class="singel-form">
                                    <input type="text" name="phone" placeholder="Your Phone Number" required="required">
                                </div>
                                <div class="singel-form">
                                    <button class="main-btn" name="inquiry" type="sumbit">Get it Now</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- category form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== COUNT DOWN PART ENDS ======-->
    
    <!--====== COUNTER PART START ======-->
    
    <div id="counter-part" class="bg_cover pt-25 pb-70 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter">189</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter">79</span>+</span>
                        <p>Courses Uploaded</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter">40</span>+</span>
                        <p>People certifie</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter">45</span>+</span>
                        <p>Global Teachers</p>
                    </div> <!-- singel counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
    <!--====== COUNTER PART ENDS ======-->
    
    <!--====== EVENT 2 PART START ======-->
    
    <section id="event-part" class="pt-120 pb-120">
        <div class="container">
            <div class="event-bg bg_cover" style="background-image: url(images/ruhango.jpg);">
                <div class="row">
                    <div class="col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                        <div class="event-2 pt-90 pb-70">
                            <div class="event-title">
                                <h3>Upcoming events</h3>
                            </div> <!-- event title -->
                            <ul>
                                <?php $events=new Event();
                                $all=$events->all_events2();
                                foreach($all as $eventi) {
                                 ?>

                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> <?php echo htmlentities($eventi->schedule_date)?></span>
                                        <a href="#!"><h4><?php echo htmlentities($eventi->title)?></h4></a>
                                        <span><i class="fa fa-clock-o"></i> <?php echo htmlentities($eventi->time_in." - ".$eventi->time_out)?></span>
                                        <span><i class="fa fa-map-marker"></i> <?php echo htmlentities($eventi->venue)?></span>
                                    </div>
                                </li>
                                <?php } ?>
                                
                              
                            </ul> 
                        </div> <!-- event 2 -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- container -->
    </section>
    
    <!--====== EVENT 2 PART ENDS ======-->
    
    <!--====== TEACHERS PART START ======-->
    
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== NEWS PART START ======-->
    
    
    <!--====== NEWS PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    

    
    <!--====== PATNAR LOGO PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->

   <?php include('layouts/footer.php'); ?>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->   
    
    <?php include('layouts/scripts.php'); ?>

</body>

</html>
