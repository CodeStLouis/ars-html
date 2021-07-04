<?php
$Page='Residential';
$Title='Residential Roofing in St. Louis, MO | ARS Construction';
$Url='https://www.advancedroofsys.com/residential.php';
$metaDescription='Residential Roofing in St. Louis, MO - Our roofing contractors provide an array of residential roofing services and interior/exterior construction services to homes across St. Louis. FREE roof inspection here.';
$metaImage='/images/fleet.jpg';
$ogMetaDescription='ARS Construction specializes in roof repairs, replacements, and installations for residential homes.';
$content1='Our full-service roofing company in St. Louis handles everything from consultation and design all the way to the full installation, repair, and maintenance of one of the most important structures in your home — your roof. As a family-owned business ourselves, we take great pride in helping protect YOUR family with a high-quality roof over their head. ';
$content2='With any roofing project we perform, we believe that you should be able to rest easy knowing that the job was done right the first time, giving you peace of mind long past the date of our visit.   We not only work quickly and precisely, but we clean up at the end of each workday to remove any dangerous equipment that could harm you or your family';
$jobTitle='Residential Roofing & Services';
$sliderImg1='https://ik.imagekit.io/codestl/residential-roof-1-sm_kkTv3BtS7O.jpg';
$sliderImg2='https://ik.imagekit.io/codestl/services/landscaping_hHXRf8MDEL.jpg';
$sliderImg3='https://ik.imagekit.io/codestl/services/residential-roofing-3-sm_xWon3_w3N.jpg';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <?php include_once ('includes/head.php'); ?>

</head>

<body>

<div class="page-wraper">

    <!-- HEADER START -->
    <header class="site-header header-style-6">
        <?php include_once ('includes/header.php'); ?>
        <?php include_once ('includes/sub-header.php'); ?>
        <?php include_once ('includes/nav.php'); ?>

    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content  bg-white">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url(https://ik.imagekit.io/codestl/different-hous-sm_TAEWFXiLBr.jpg);">
            <div class="overlay-main bg-black opacity-02"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">Residential Roofing Services</h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT -->
        <div class="section-full  p-t80 p-b50  ">
            <div class="container  bg-white ">
                <div class="row">
                    <!-- LEFT PART -->
                    <div class="section-content">
                        <div class="section-head text-center">
                            <h2 class="text-uppercase"><?php echo $jobTitle;?></h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-square">
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>
                        </div>
                        <!-- LEFT PART -->
                        <div class="col-md-4 col-sm-4 p-tb15">
                            <!-- BROCHURES -->
                            <div class="wt-box m-b30 text-left">
                                <p><?php echo $content1;?></p><br>
                                <p><?php echo $content2;?></p>
                            </div>
                        </div>
                        <!-- RIGHT PART -->
                        <div class="col-md-8 col-sm-8 p-tb10">
                            <!-- BLOG POST CAROUSEL -->
                            <div class="owl-carousel service-detail-carousel owl-btn-vertical-center owl-dots-bottom-center container" style=" width:100%">
                                <div class="item">
                                    <div class="aon-thum-bx">
                                        <img alt="<?php echo $Title;?>" src="<?php echo $sliderImg1;?>">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="aon-thum-bx">
                                        <img alt="<?php echo $Title;?>" src="<?php echo $sliderImg2;?>">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="aon-thum-bx">
                                        <img alt="<?php echo $Title;?>" src="<?php echo $sliderImg3;?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RIGHT PART -->
            </div>
        </div>
        <!-- SECTION CONTENT END -->

        <!-- CONTENT END -->
    </div>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer class="site-footer footer-dark">
        <?php include_once ('includes/footer.php'); ?>
        <!-- FOOTER COPYRIGHT -->
        <?php include_once ('includes/sub-footer.php'); ?>
    </footer>
    <!-- FOOTER END -->


    <!-- SCROLL TOP BUTTON -->
    <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>


</div>
<!-- firebase scripts -->
<!-- The core Firebase JS SDK is always required and must be listed first -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script src="js/jquery-1.12.4.min.js" type="text/javascript"></script><!-- JQUERY.MIN JS -->
<script src="js/bootstrap.min.js" type="text/javascript"></script><!-- BOOTSTRAP.MIN JS -->

<script src="js/bootstrap-select.min.js" type="text/javascript"></script><!-- FORM JS -->
<script src="js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script><!-- FORM JS -->

<script src="js/magnific-popup.min.js" type="text/javascript"></script><!-- MAGNIFIC-POPUP JS -->

<script src="js/waypoints.min.js" type="text/javascript"></script><!-- WAYPOINTS JS -->
<script src="js/counterup.min.js" type="text/javascript"></script><!--COUNTERUP JS -->
<script src="js/waypoints-sticky.min.js" type="text/javascript"></script><!-- COUNTERUP JS -->

<script src="js/isotope.pkgd.min.js" type="text/javascript"></script><!-- MASONRY  -->

<script src="js/owl.carousel.min.js" type="text/javascript"></script><!-- OWL  SLIDER  -->

<script src="js/stellar.min.js" type="text/javascript"></script><!-- PARALLAX BG IMAGE   -->
<script src="js/scrolla.min.js" type="text/javascript"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script src="js/custom.js" type="text/javascript"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/shortcode.js" type="text/javascript"></script><!-- SHORTCODE FUCTIONS  sw-->


<!-- REVOLUTION JS FILES -->
<script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"
        type="text/javascript"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script src="js/rev-script-4.js" type="text/javascript"></script>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->


</body>

</html>


