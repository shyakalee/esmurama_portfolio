<!doctype html>
<html lang="en">

<?php include('layouts/header.php'); ?>
<?php include('users/v1/include/initialize.php');
$settings=new Settings();
$all_settings_params=$settings->all_settings("1"); ?>

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
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/top-banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <!-- <h2>Events</h2> -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== EVENTS PART START ======-->
    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
                <?php
                    $events=new Event();
                        $all=$events->all_events2();
                        foreach($all as $key=>$eventi) {
                            $key+=1;
                    ?>
               <div class="col-lg-6">
                   <div class="singel-event-list mt-10">
                       <div class="event-thum">
                           <img src="images/event/e-1.jpg" alt="Event">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i> <?php echo htmlentities($eventi->schedule_date) ?></span>
                            <a href="<?php echo htmlentities($result->id)?>"><h4><?php echo htmlentities($eventi->title)?></h4></a>
                            <span><i class="fa fa-clock-o"></i> <?php echo htmlentities($eventi->time_in." - ".$eventi->time_out)?></span>
                            <span><i class="fa fa-map-marker"></i> <?php echo htmlentities($eventi->venue)?></span>
                            <p><?php echo htmlentities($eventi->body)?></p>
                       </div>
                   </div>
               </div>
               <?php } if($key==0 OR $key=null) {?>
                <div class="col-lg-9">
                   <div class="singel-event-list mt-15">
                      
                       <div class="event-cont">
                           <span><p>No Event is scheduled, Keep Visiting for more incoming events..</p></span>
                       </div>
                   </div>
               </div>
                <?php } ?>

           </div> <!-- row -->
            
        </div> <!-- container -->
    </section>
    
    <!--====== EVENTS PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
   <?php include('layouts/footer.php'); ?>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->   
    
    <?php include('layouts/scripts.php'); ?>

</body>
</html>
