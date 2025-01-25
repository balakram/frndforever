<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:url" content="BACK TO SCHOOL">
    <meta property="og:title" content="BACK TO SCHOOL">

    <title>BACK TO SCHOOL</title>

    
    <link rel="stylesheet" href="assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/home/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/home/css/owl.theme.css">
    <link rel="stylesheet" href="assets/home/css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" href="assets/home/css/nivo-lightbox/nivo-lightbox-theme.css">
    <link rel="stylesheet" href="assets/home/css/animate.css">
    <link rel="stylesheet" href="assets/home/css/style.css">

    <link rel="shortcut icon" href="../img/ff.ico">

<!-- HHHHHHHHHHHHHHHHHH       gallery no 2       HHHHHHHHHHHHHHHH -->
    <link rel="stylesheet" href="gallery-2/swiper/swiper.min.css">
    <link rel="stylesheet" href="gallery-2/gallery.css">


<!-- HHHHHHHHHHHHHHHHHH      gallery no-1        HHHHHHHHHHHHHHHH -->
    <link rel="stylesheet" type="text/css" href="img.css">


    <script src="assets/home/js/modernizr.custom.js"></script>

</head>

<body>

    <a href="#header" id="back-to-top" class="top"><i class="fa fa-chevron-up"></i></a>
    <!-- HHHHHHHHHHHHHHHHHH        Preloader          HHHHHHHHHHHHHHHH -->
    <!-- <div id="preloader"></div> -->
    <!-- HHHHHHHHHHHHHHHHHH        Header          HHHHHHHHHHHHHHHH -->
    <section id="header" class="header">
        <div class="top-bar">
            <div class="container">
                <div class="navigation" id="navigation-scroll">
                        <div class="row">
                            <div class="col-md-11 col-xs-10">
                                <a href="index1.html"><span id="logo"><strong class="strong">F</strong>RIENDS <strong class="strong">F</strong>OREVER</span></a>
                            </div>
                            <div class="col-md-1 col-xs-2">
                                <p class="nav-button">
                                    <button id="trigger-overlay" type="button">
                                    <i class="fa fa-bars"></i>
                                    </button>
                                </p>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.navigation -->
                </div><!--/.container-->
            </div><!--/.top-bar-->

        <div class="container">
            <div class="starting">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/home/img/LUCY2.png" alt="LUCY" class="wow flipInY animated animated">
                    </div>
                    <div class="col-md-6">
                        <div class="banner-text"><h2 class="animation-box wow bounceIn animated"><?php echo "<h2>Welcome " . $_SESSION['username'] . "</h1>"; ?></h2>
                             <h2 class="animation-box wow bounceIn animated"><strong class="strong">BACK TO SCHOOL</strong></h2>
                            <p style="#cursive{
                                font-family:'Monotype Corsiva','Apple Chancery','ITC Zapf Chancery','URW Chancery L',cursive;
                              }">
                                Friendship is a silent bond.. More old more strong.. More deep more clear.. More close more warm And Less word more understanding.........</p>
                            <a href="GalleryRoom/index2.html" class="btn btn-download wow animated fadeInLeft">
                            <i class="fa fa-picture-o pull-left"></i>
                            <strong>GALLERY</strong>
                            <br/>HERE </a>
                            <a href="nextpage/index1.html" class="btn btn-download wow animated fadeInRight">
                            <i class="fa fa-users pull-left"></i>
                            <strong>PROFILE </strong>
                            <br/>HERE </a>   
                        </div> <!-- /.banner-text -->
                    </div>
                </div>
            </div>
            <!-- /.starting -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#header -->

    <!-- HHHHHHHHHHHHHHHHHH        Video          HHHHHHHHHHHHHHHH -->
    <div id="video" class="wrapper">
        <div class="container">
            <h2 class="animation-box wow bounceIn animated"></h2>
            <!--<div class="virticle-line"></div>
            <div class="circle"></div>-->
            <img src="assets/home/img/feature.png" alt="feature" class="video img-responsive animation-box wow animated bounceInDown">
            <p>
                Dear friend, thank you for being a rainbow and adding colours to my life.
            </p>
        </div> <!-- /.container -->
    </div> <!-- /#video -->

    <!-- HHHHHHHHHHHHHHHHHH        Bigfeature         HHHHHHHHHHHHHHHH -->
    <!--<section id="bigfeatures" class="img-block-3col wrapper">

        <div class="container">

            <div class="row">
                <div class="col-sm-4">
                    <ul class="item-list-right item-list-big">
                        <li class="wow fadeInLeft animated"> <i class="fa fa-heart"></i> 
                            <h3><a href="login.html">Name</a></h3>
                            <p>text here</p>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-sm-4 col-sm-push-4">
                    <ul class="item-list-left item-list-big">
                       
                        <li class="wow fadeInRight animated"> <i class="fa fa-heart"></i>
                            <h3><a href="login.html">Name</a></h3>
                            <p>youe thaughts </p>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-sm-4 col-sm-pull-4 text-center">
                    <div class="animation-box wow bounceIn animated">
                        <img class="highlight-left wow animated" src="assets/home/img/spark.png" height="192" width="48" alt=""> 
                        <img class="highlight-right wow animated" src="assets/home/img/spark.png" height="192" width="48" alt="">
                        <img class="screen" src="assets/home/img/front.png" alt="" height="581" width="300">
                    </div>
                </div>
            </div>
        </div>
    </section>--> <!-- /#bigfeatures -->

    <!-- HHHHHHHHHHHHHHHHHH        Resources        HHHHHHHHHHHHHHHH -->
    <div id="speciality" class="wrapper">
        <!--<div class="container">
            <h2 class="animation-box wow bounceIn animated">RESOURCES</h2>
            <div class="virticle-line"></div>
            <div class="circle"></div>
            <div class="row">
                <div class="col-sm-4 wow animated fadeInLeft">
                    <div class="special-icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <h3>Study Material</h3>
                    <p>
						All the latest study material for all the subjects explaining in a very lucid manner.
                    </p>
                </div>
                <div class="col-sm-4 animation-box wow bounceIn animated">
                    <div class="special-icon">
                        <i class="fa fa-question-circle"></i>
                    </div>
                    <h3>Question Papers</h3>
                    <p>
                        All past year question papers of different colleges , yearwise available to help students tackle exam fear.
                    </p>
                </div>
                <div class="col-sm-4 wow animated fadeInRight">
                    <div class="special-icon">
                        <i class="fa fa-road"></i>
                    </div>
                    <h3>Experiences</h3>
                    <p>
                        The experiences of your seniors right at your doorstep defining your road to success.
                    </p>
                </div>
            </div> <-- /.row --
        </div>  /.container -->
    </div> <!-- /#speciality -->
 


    <!-- HHHHHHHHHHHHHHHHHH        Features         HHHHHHHHHHHHHHHH -->
    <section id="features" class="wrapper ">
        <div class="container">

                        <div class="containeer">
                            <div class="conteent" >
                                <div class="left-col" >
                                    <h1>&nbsp;💝<br>𝓨𝓮𝓱 <br>𝓓𝓸𝓼𝓽𝓲</h1>
                                </div>
                                <div class="right-col">
                                    <p>Click Here To Listen</p>
                                    <img src="img/play.png" id="icon">
                                </div>
                            </div>
                        </div>    
                        <audio id="mySong">{
                            <source src="/img/song.mp3" type="audio/mp3">
                        </audio>

             
        </div> <!-- /.container -->
    </section> <!-- /#features -->

    <!-- HHHHHHHHHHHHHHHHHH      Screenshots    HHHHHHHHHHHHHHHH -->

    <section id="gallery" class="wrappper">
        <div class="container">
            <h2 class="animation-box wow bounceIn animated">FRIENDS</h2>
            <div class="virticle-line"></div>
            <div class="circle"></div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="screenshots" class="owl-carousel owl-theme">
                      <a href="assets/home/pic/aka-3.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/aka-3.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/amrita-1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/amrita-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/riki-1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/riki-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/balak-2.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/balak-2.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/chandan-1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/chandan-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/chiku-4.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/chiku-4.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/jyo-1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/jyo-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/lax-3.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/jyo-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/lax-3.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/lax-3.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
					  <a href="assets/home/pic/manisha-1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/manisha-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/molay-1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/molay-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/niru-1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/niru-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/nitu-2.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/nitu-2.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/prg-1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/prg-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/priya-2.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/priya-2.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/santu-1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/santu-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
                      <a href="assets/home/pic/seema-1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/seema-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a>
					  <a href="assets/home/pic/subha-1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="assets/home/pic/subha-1.jpg" class="img_res wow animated zoomIn" alt="">
                      </a> 					  
                    </div>
                     <div class="customNavigation row">
                      <a class="btn prev gallery-nav wow animated bounceInLeft"><i class="fa fa-chevron-left"></i></a> 
                      <a class="btn next gallery-nav wow animated bounceInRight"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- HHHHHHHHHHHHHHHHHHHH    Testimonial    HHHHHHHHHHHHHHHHHHHHHH -->
     <section id="testimonial" class="wrapper">
            <div class="container">
                <div class="row main_content">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="client-comment text-center">
                            <strong>THOUGHTS</strong></p>
                        <div id="client-speech" class="owl-carousel owl-theme">
                            <div class="item wow animated bounceInUp animated">
                                <!-- <img class="img-circle img-responsive center-block test-img" src="assets/home/img/test1.png" alt="text"> -->
                                <p class="client-comment text-center">
                                    Many people will walk in and out of your life, but only true friends will leave footprints in your heart. </p>
                                <div class="row text-center">
                                    <p class="client-name text-center"> Eleanor Roosevelt</p>
                                </div>
                            </div>
                            <div class="item wow animated bounceInUp animated">
                                <!-- <img class="img-circle img-responsive center-block test-img" src="assets/home/img/test2.png" alt="text"> -->
                                <p class="client-comment text-center">
                                    Friendship is the only cement that will ever hold the world together.</p>
                                <div class="row text-center">
                                    <p class="client-name text-center">Woodrow Wilson</p>
                                </div>
                            </div>
                            <div class="item wow animated bounceInUp animated">
                                <!-- <img class="img-circle img-responsive center-block test-img" src="assets/home/img/test3.png" alt="text"> -->
                                <p class="client-comment text-center">
                                    A friend is someone who understands your past, believes in your future, and accepts you just the way you are.</p>
                                <div class="row text-center">
                                    <p class="client-name text-center">Unknown</p>
                                </div>
                            </div>
							<div class="item wow animated bounceInUp animated">
                                <!-- <img class="img-circle img-responsive center-block test-img" src="assets/home/img/test4.png" alt="text"> -->
                                <p class="client-comment text-center">
                                    Silences make the real conversations between friends. Not the saying but the never needing to say is what counts.</p>
                                <div class="row text-center">
                                    <p class="client-name text-center">Unknown</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>  <!-- clients -->

    <!-- HHHHHHHHHHHHHHHHHH      Development Team      HHHHHHHHHHHHHHHH -->

    <div id="team"id="speciality-1" class="wrapper">
        <div class="container-fluid">
            <h2 class="animation-box wow bounceIn animated">DOST😜</h2>
            <!--<div class="virticle-line"></div>
            <div class="circle"></div>-->
                  
                <div class="boxx">
                    <div class="box">
                        
                        <span style="--i:1;"><img src="img/manisha-3.jpg"></span>
                        <span style="--i:8;"><img src="img/niru-2.jpg"></span>
                        <span style="--i:1;"><img src="img/nitu-5.jpg"></span>
                        <span style="--i:2;"><img src="img/prg-3.jpg"></span>
                        <span style="--i:3;"><img src="img/priya-1.jpg"></span>
                        <span style="--i:4;"><img src="img/santu-3.jpg"></span>
                        <span style="--i:5;"><img src="img/seema-1.jpg"></span>
                        <span style="--i:6;"><img src="img/subha-2.jpg"></span>
                        <span style="--i:7;"><img src="img/molay-1.jpg"></span>
                    </div>
                </div>
                <div class="boxx">
                    <div class="box">
                        <span style="--i:1;"><img src="img/aka-1.jpg"></span>
                        <span style="--i:2;"><img src="img/amrita-3.jpg"></span>
                        <span style="--i:3;"><img src="img/riki-4.jpg"></span>
                        <span style="--i:4;"><img src="img/balak-1.jpg"></span>
                        <span style="--i:5;"><img src="img/chandan-2.jpg"></span>
                        <span style="--i:6;"><img src="img/chiku-2.jpg"></span>
                        <span style="--i:7;"><img src="img/jyo-2.jpg"></span>
                        <span style="--i:8;"><img src="img/lax-6.jpg"></span>
                        <span style="--i:1;"><img src="img/manisha-3.jpg"></span>
                      
                    </div>
                </div>


                <!-- GALLERY 2 -->
                <!--<div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/aka-1.jpg" alt="1">
                          </div>
                          <div class="details">
                              <h3>Akanksha</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/amrita-3.jpg" alt="2">
                          </div>
                          <div class="details">
                              <h3>Amrita</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="img/riki-4.jpg" alt="3">
                        </div>
                        <div class="details">
                            <h3>Amrita</h3>
                        </div>
                       </div>
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/balak-1.jpg" alt="4">
                          </div>
                          <div class="details">
                              <h3>Balakram</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/chandan-2.jpg" alt="5">
                          </div>
                          <div class="details">
                              <h3>chitta ranjan</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/chiku-2.jpg" alt="6">
                          </div>
                          <div class="details">
                              <h3>Subham</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/jyo-2.jpg" alt="7">
                          </div>
                          <div class="details">
                              <h3>Jyotshna</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/lax-6.jpg" alt="8">
                          </div>
                          <div class="details">
                              <h3>Laxmikant</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/manisha-3.jpg" alt="9">
                          </div>
                          <div class="details">
                              <h3>Manisha</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/molay-1.jpg" alt="10">
                          </div>
                          <div class="details">
                              <h3>Malaya</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/niru-2.jpg" alt="11">
                          </div>
                          <div class="details">
                              <h3>Nirmalya</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/nitu-5.jpg" alt="12">
                          </div>
                          <div class="details">
                              <h3>Rasmita</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="img/prg-3.jpg" alt="13">
                          </div>
                          <div class="details">
                              <h3>Pragyan</h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="img/priya-1.jpg" alt="14">
                        </div>
                        <div class="details">
                            <h3>Priyanka</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="img/santu-3.jpg" alt="15">
                        </div>
                        <div class="details">
                            <h3>SK</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="img/seema-1.jpg" alt="16">
                        </div>
                        <div class="details">
                            <h3>Seema</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="img/subha-2.jpg" alt="17">
                        </div>
                        <div class="details">
                            <h3>Subhalaxmi</h3>
                        </div>
                    </div>
                    <!--<div class="swiper-slide">
                        <div class="imgBx">
                            <img src="img/8.jpg" alt="8">
                        </div>
                        <div class="details">
                            <h3>18</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="img/9.jpg" alt="9">
                        </div>
                        <div class="details">
                            <h3>19</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="img/10.jpg" alt="10">
                        </div>
                        <div class="details">
                            <h3>20</h3>
                        </div>
                    </div>--
            
                    </div>
                    <-- Add Pagination --
                    <div class="swiper-pagination"></div>
                </div>-->
        </div>

    </div> <!-- /#team -->

    
    <!-- HHHHHHHHHHHHHHHHHH        Contact Us          HHHHHHHHHHHHHHHH -->
    <section id="contact" class="wrapper">
        <div  class="container">
            <div class="row">
                <div class="col-md-3 contact-item col-sm-6 col-xs-12 wow animated fadeInLeft">
                    <a href="GalleryRoom/index2.html">
                    <i class="fa fa-picture-o"></i></a>
                
                    <h3>Gallery</h3>
                    <!--<h6 class="contact">
                        <strong>click here</strong>
                    </h6>-->
                </div>
                <div class="col-md-3 contact-item col-sm-6 col-xs-12 wow animated fadeInLeft">
                    <a href="nextpage/index1.html">
                    <i class="fa fa-users"></i></a>
                    <h3>Friends</h3>
                    <!--<h6 class="contact">
                        <strong>click here</strong>
                    </h6>-->
                
                </div>
                <div class="col-md-3 contact-item col-sm-6 col-xs-12 wow animated fadeInRight">
                    
                    <i class="fa fa-trophy"></i>
                    <h3>Games</h3>
                    <!--<h6 class="contact">
                        <strong>click here</strong>
                    </h6>-->
                    <p class="contact">
                        Coming Soon: 

                    </p>
                    
                </div>
                <div class="col-md-3 contact-item col-sm-6 col-xs-12 wow animated fadeInRight">
                    <a href="mailto:fforever.info@gmail.com" >
                    <i class="fa fa-envelope"></i></a>
                    <h3>Email Address</h3>
                    <!--<h6 class="contact">
                        fforever.info@gmail.com
                    </h6>-->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /#contact -->

    <!-- HHHHHHHHHHHHHHHHHH        Footer          HHHHHHHHHHHHHHHH -->

    <section id="footer" class="wrapper">
        <div class="container text-center">
            <div class="footer-logo">
                <h1 class="text-center animation-box wow bounceIn animated">FRIENDS FOREVER</h1>
            </div>
           
            <div class="copyright">
                <div class="credits">
                    Made With <i class="fa fa-heart"></i> by <a href="https://balakram.github.io/balakramtudu/" target="_blank">BALAK</a>
                </div>
                <div>©2021 FRIENDS FOREVER, All Rights Reserved</div>
            </div>
        </div><!-- container -->
    </section>




    <!-- HHHHHHHHHHHHHHHHHH        Open/Close          HHHHHHHHHHHHHHHH -->
    <div class="overlay overlay-hugeinc">
        <button type="button" class="overlay-close">Close</button>
        <nav>
        <ul>
            <li class="hideit"><a href="#header">Home</a></li>
            <li class="hideit"><a href="nextpage/index1.html">FRIENDS</a></li>
            <li class="hideit"><a href="GalleryRoom/index2.html">GALLERY</a></li>
            <li class="hideit"><a href="#gallery">IMAGES</a></li>
            <!--<li class="hideit"><a href="#testimonial">THOUGHTS</a></li>-->
            <li class="hideit"> <a href="logout.php">Logout</a></li>

        </ul>
        </nav>
    </div>
    <script src="assets/home/js/jquery-1.11.2.min.js"></script>
    <script src="assets/home/js/wow.min.js"></script>
    <script src="assets/home/js/owl-carousel.js"></script>
    <script src="assets/home/js/nivo-lightbox.min.js"></script>
    <script src="assets/home/js/smoothscroll.js"></script>
    <!--<script src="assets/home/js/jquery.ajaxchimp.min.js"></script>-->
    <script src="assets/home/js/bootstrap.min.js"></script>
    <script src="assets/home/js/classie.js"></script>
    <script src="assets/home/js/script.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $(document).ready(function(){
            $(".hideit").click(function(){
                $(".overlay").hide();
            });
            $("#trigger-overlay").click(function(){
                $(".overlay").show();
            });
        });
    </script>
    <script>
        $(document).ready(function(){

          var kawa = $('.top-bar');
          var back = $('#back-to-top');
          function scroll() {
             if ($(window).scrollTop() > 700) {
                kawa.addClass('fixed');
                back.addClass('show-top');

             } else {
                kawa.removeClass('fixed');
                back.removeClass('show-top');
             }
          }

          document.onscroll = scroll;
        });
    </script>
    <!--HHHHHHHHHHHH        Smooth Scrooling     HHHHHHHHHHHHHHHH-->
    <script>
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
    </script>
        <!--HHHHHHHHHHHH        Smooth Scrooling     HHHHHHHHHHHHHHHH-->
        <script>
            var mySong = document.getElementById("mySong");
            var icon = document.getElementById("icon");

            icon.onclick = function(){
                if(mySong.paused){
                    mySong.play();
                    icon.src = "img/pause.png";
                }else{
                    mySong.pause();
                    icon.src = "img/play.png";
                }
            }
        </script>
         <!--HHHHHHHHHHHH        gallery-2     HHHHHHHHHHHHHHHH-->

         <script src="gallery-2/swiper/swiper.min.js"></script>
            
            <script>
                var swiper = new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 300,
                    modifier: 1,
                    slideShadows : true,
                },
                pagination: {
                    el: '.swiper-pagination',
                },
                });
            </script>
      

</body>
</html>
