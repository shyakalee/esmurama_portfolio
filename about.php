<!doctype html>
<html lang="en">

<?php include('layouts/header.php'); ?>
<?php include('users/v1/include/initialize.php'); 
$about=new Settings(); 
$single=$about->all_settings("1");
$settings=new Settings();
$all_settings_params=$settings->all_settings("1");
?>

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
    
 <?php include('layouts/navigation_flat.php') ?>
    
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
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/about-banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <!-- <h2>About Us</h2> -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to ES Murama </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p> <?php echo $single->about_us ?> <br></p>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="images/about/carte-ruhango.jpg" alt="About">
                    </div>  <!-- about imag -->
                </div> 
            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>01</span>
                            <h4>Our Vision</h4>
                            <p><?php echo $single->vision ?></p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>02</span>
                            <h4>Our Mission</h4>
                            <p><?php echo $single->mission ?></p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>03</span>
                            <h4>Our values</h4>
                            <p><?php echo $single->our_values ?></p>
                        </div> <!-- about singel -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->
    
    <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(null)">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">305</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">55</span>+</span>
                        <p>Courses Uploaded</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">1500</span>+</span>
                        <p>People certifie</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">50</span>+</span>
                        <p>Global Teachers</p>
                    </div> <!-- singel counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
    <!--====== COUNTER PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-part" class="pt-65 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50 pb-35">
                        <h5>Meet our Amazing Team</h5>
                        <!-- <h2>Meet Our teachers</h2> -->
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <?php
                    $count=0;
                    $mydb->setQuery("select
                    wp_users.first_name,
                    wp_users.last_name, 
                    wp_positions.title, 
                    wp_users.profile_img, 
                    wp_users.tel_number 
                    from wp_users inner join wp_positions on wp_users.type=wp_positions.id where wp_users.show_card='1'");
                        $cur = $mydb->loadResultList();
                        foreach ($cur as $result) {
                    ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="users/v1/assets/images/<?php echo $result->profile_img ?>" width="270" height="308" alt="Teachers" style="border-style:double;vertical-align:middle;">
                        </div>
                        <div class="cont">
                            <a href="#!"><h6><?php echo htmlentities($result->first_name." ".$result->last_name)?></h6></a>
                            <span><?php echo $result->title ?> </span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
                <?php } ?>
               
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== TEASTIMONIAL PART START ======-->
    
   
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    

    <!--====== PATNAR LOGO PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
   
   <?php include('layouts/footer.php'); ?>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->

<?php include('layouts/scripts.php') ?>
    
    
    


</body>
</html>
