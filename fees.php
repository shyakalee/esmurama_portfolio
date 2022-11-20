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
                                <li class="breadcrumb-item active" aria-current="page">Fees Requirement</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="corses-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="corses-singel-left mt-30 text-center">
                        <div class="title">
                            <h4><?php echo date("Y")?> School Fees and Requirements</h4>
                        </div> <!-- title -->                    
                    </div> <!-- corses singel left -->
                    <div class="row">
                    <div class="col-lg-12 col-md-6">
                    <div class="corses-singel-left mt-30">  
                    <div class="overview-description"> 
                    <div class="singel-description pt-40">  

                    <span class="time d-none d-md-block"><i class="fa fa-angle-double-right"></i>  Those who are sponsred by different NGOs or Government institutions are required to bring a document confirming the commitment</span> 
                    <span class="time d-none d-md-block"><i class="fa fa-angle-double-right"></i>  The schoolfees is paid on our BK Account to be mentioned in our Requirement document attached below</span> 
                    <span class="time d-none d-md-block"><i class="fa fa-angle-double-right"></i>  For new joiners students should present their payment slip 1 Day before the trimseter starts</span> 
                    <div class="price-button pt-45 text-center">                                    
                                    <a href="#!" target="_blank" class="main-btn" id="download-btn">Download Document</a>
                                </div>                            
                    </div>                                                   
                        </div>
                        </div>                      
                    </div>
                    </div>
                </div>
               
            </div> <!-- row -->

        <!--

            <div class="row">
                
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                               <h4>Electrical </h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Voltemeter : <span>15000</span></li>
                                    <li><i class="fa fa-clone"></i>Overall : <span>10000</span></li>
                                    <li><i class="fa fa-beer"></i>Surgery Protection :  <span>6500</span></li>
                                    <li><i class="fa fa-user-o"></i>Toolbox :  <span>26000</span></li>
                                    <li><i class="fa fa-user-o"></i>Glasses :  <span>5000</span></li>
                                    <li><i class="fa fa-user-o"></i>Screw drivers :  <span>3200</span></li>
                                </ul>
                                <div class="price-button pt-10">                                    
                                    <a href="#!" class="main-btn" id="download-btn">Get Document</a>
                                </div>
                            </div> <!-- course features -->
                        </div>                        
                    </div>
                </div>   

<!-- -->           
                
                
            </div> <!-- row -->


         
        </div> <!-- container -->
    </section>
    
    
    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->
    
    <!--====== COUNTER PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->    
   
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== TEASTIMONIAL PART START ======-->
    
   
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
   
    
    <!--====== PATNAR LOGO PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
   
   <?php include('layouts/footer.php'); ?>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#!" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->

<?php include('layouts/scripts.php') ?>

<script>
    $(document).ready(function(){
        $('#download-btn').click(function(e){
            e.preventDefault();
            window.location.href = "users/v1/assets/files/<?php echo htmlentities($single->fees_doc);?>";
        });
    });
</script>   


</body>
</html>