<!doctype html>
<html lang="en">

<?php include('layouts/header.php'); ?>
<?php include('users/v1/include/initialize.php'); 
$comments=new Comment();
$all=$comments->getAllCommentsDesc();
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
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/mountain.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <!-- <h2>Blog</h2> -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="blog-news">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $_SESSION['breadcrumb']; ?></li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== BLOG PART START ======-->
    
    <section id="blog-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
              <div class="col-lg-8">

              <?php
                    if(!empty($_GET['route'])) {
                        $id=$_GET['route'];
                        $mydb->setQuery("SELECT * FROM wp_announcement WHERE id=$id");
                        $cur = $mydb->loadResultList();
                        foreach ($cur as $result) {
                            $_SESSION['breadcrumb']=$result->title;
                    }
                    
                    ?>
                  <div class="blog-details mt-30">
                      <div class="thum">
                      <img src="users/v1/assets/images/blog/<?php echo $result->thumbnail ?>" alt="Blog thumbnail">
                      </div>
                      <div class="cont">
                          <h3><?php echo htmlentities($result->title)?></h3>
                          <ul>
                          <li><a href="#!blog-details?route=<?php echo $result->created_at ?>"><i class="fa fa-calendar"></i><?php echo $result->created_at ?></a></li>
                               <li><a href="#!blog-details?route=<?php echo $result->author ?>"><i class="fa fa-user"></i><?php echo $result->author ?></a></li>
                               <li><a href="#!blog-details?route=<?php echo $result->id ?>"><i class="fa fa-tags"></i>Education</a></li>
                           </ul>
                           <p><?php echo $result->description ?></p>
                           <br>
                           
                           
                           <ul class="share">
                               <li class="title">Share on :</li>
                               <li><a href="#!shareto#facebook"><i class="fa fa-facebook-f"></i></a></li>
                               <li><a href="#!shareto#google"><i class="fa fa-google-plus"></i></a></li>
                               <li><a href="#!shareto#ig"><i class="fa fa-instagram"></i></a></li>
                           </ul>

                            <?php foreach ($all as $key => $result) {?>
                           <div class="blog-comment pt-45">
                               <div class="title pb-15">
                                   <h3>Comment (3)</h3>
                               </div>  <!-- title -->
                               <ul>
                                   <li>
                                       <div class="comment">
                                           <div class="comment-author">
                                                <div class="author-thum">
                                                    <img src="images/review/comment-lady.jpg" alt="Reviews">
                                                </div>
                                                <div class="comment-name">
                                                    <h6>Bobby Aktar</h6>
                                                    <span>April 03, 2019</span>
                                                </div>
                                            </div>
                                            <div class="comment-description pt-20">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                            </div>
                                            <div class="comment-replay">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div> <!-- comment -->
                                        <ul class="replay">
                                           <li>
                                               <div class="comment">
                                                   <div class="comment-author">
                                                        <div class="author-thum">
                                                            <img src="images/review/comment-lady.jpg" alt="Reviews">
                                                        </div>
                                                        <div class="comment-name">
                                                            <h6>Humayun Ahmed</h6>
                                                            <span>April 03, 2019</span>
                                                        </div>
                                                    </div>
                                                    <div class="comment-description pt-20">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                                    </div>
                                                    <div class="comment-replay">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div> <!-- comment -->
                                           </li>
                                       </ul>
                                   </li>
                                   <li>
                                       <div class="comment">
                                           <div class="comment-author">
                                                <div class="author-thum">
                                                    <img src="images/review/comment-lady.jpg" alt="Reviews">
                                                </div>
                                                <div class="comment-name">
                                                    <h6>Bobby Aktar</h6>
                                                    <span>April 03, 2019</span>
                                                </div>
                                            </div>
                                            <div class="comment-description pt-20">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                            </div>
                                            <div class="comment-replay">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div> <!-- comment -->
                                   </li>
                               </ul>
                               <div class="title pt-45 pb-25">
                                   <h3>Leave a comment</h3>
                               </div> <!-- title -->
                               <div class="comment-form">
                                   <form action="#">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <div class="form-singel">
                                                   <input type="text" placeholder="Name">
                                               </div> <!-- form singel -->
                                           </div>
                                           <div class="col-md-6">
                                               <div class="form-singel">
                                                   <input type="email" placeholder="email">
                                               </div> <!-- form singel -->
                                           </div>
                                           <div class="col-md-12">
                                               <div class="form-singel">
                                                   <textarea placeholder="Comment"></textarea>
                                               </div> <!-- form singel -->
                                           </div>
                                           <div class="col-md-12">
                                               <div class="form-singel">
                                                   <button class="main-btn">Submit</button>
                                               </div> <!-- form singel -->
                                           </div>
                                       </div> <!-- row -->
                                   </form>
                               </div>  <!-- comment-form -->
                           </div> <!-- blog comment -->
                           <?php } ?>



                      </div> <!-- cont -->
                  </div> <!-- blog details -->
                  <?php } else {                    
                    redirect('https://www.google.com');
                  } ?>
              </div>
               <div class="col-lg-4">
                   <div class="saidbar">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                               <div class="saidbar-search mt-30">
                                   <form action="#">
                                       <input type="text" placeholder="Search">
                                       <button type="button"><i class="fa fa-search"></i></button>
                                   </form>
                               </div> <!-- saidbar search -->
                               <div class="categories mt-30">
                                   <h4>Categories</h4>
                                   <ul>
                                       <li><a href="#">Fronted</a></li>
                                       <li><a href="#">Backend</a></li>
                                       <li><a href="#">Photography</a></li>
                                       <li><a href="#">Teachnology</a></li>
                                       <li><a href="#">GMET</a></li>
                                       <li><a href="#">Language</a></li>
                                       <li><a href="#">Science</a></li>
                                       <li><a href="#">Accounting</a></li>
                                   </ul>
                               </div>
                           </div> <!-- categories -->
                           <div class="col-lg-12 col-md-6">
                               <div class="saidbar-post mt-30">
                                   <h4>Popular Posts</h4>
                                   <ul>
                                       <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                   <div class="thum">
                                                       <img src="images/blog/blog-post/bp-1.jpg" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>Introduction to languages</h6>
                                                       <span>20 Dec 2018</span>
                                                   </div>
                                               </div> <!-- singel post -->
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                   <div class="thum">
                                                       <img src="images/blog/blog-post/bp-2.jpg" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>How to build a game with java</h6>
                                                       <span>10 Dec 2018</span>
                                                   </div>
                                               </div> <!-- singel post -->
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                   <div class="thum">
                                                       <img src="images/blog/blog-post/bp-1.jpg" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>Basic accounting from primary</h6>
                                                       <span>07 Dec 2018</span>
                                                   </div>
                                               </div> <!-- singel post -->
                                            </a>
                                       </li>
                                   </ul>
                               </div> <!-- saidbar post -->
                           </div>
                       </div> <!-- row -->
                   </div> <!-- saidbar -->
               </div>
           </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== BLOG PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
    <?php include('layouts/footer.php'); ?>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
    
    
<?php include('layouts/scripts.php'); ?>  

</body>
</html>
