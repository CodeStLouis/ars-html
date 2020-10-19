<?php
$Page = 'Jubilee World Roofing Project';
$Title = 'Commercial Roofing in St. Louis, MO | Jubilee World Roof Project | Roofing Companies | ARS Construction';
$Url = 'https://www.advancedroofsys.com/jubilee-commercial-project.php';
$metaDescription = '';
$metaImage = '/images/jubilee-project/jubilee-metaimg.jpg';
$ogMetaDescription = '';
$jobTitle = 'Jubilee World Roofing Project';
$jobDesc = '
<p> ARS is hard at work on a new Commercial Roofing Project: Jubilee World. The building formally St. Mary&apos;s Orphanage, was acquired by Jubilee World in 2015, was constructed in 1899 and dedicated in 1900.</p> 
<p> This project is part of a massive facelift that has been undertaken since it&apos;s acquisition. As part of this, ARS, using only top of the line materials including Genflex TPO, and Malarkey Shingles, is helping modernize this century old historical building.</p> ';
$sliderImg1 = '/images/jubilee-project/jubilee-1.jpg';
$sliderImg2 = '/images/jubilee-project/jubilee-2.jpg';
$sliderImg3 = '/images/jubilee-project/jubilee-5.jpg';

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <?php include_once('includes/head.php'); ?>

</head>

<body>

<div class="page-wraper">

    <!-- HEADER START -->
    <header class="site-header header-style-6">
        <?php include_once('includes/header.php'); ?>
        <?php include_once('includes/sub-header.php'); ?>
        <?php include_once('includes/nav.php'); ?>

    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content  bg-white">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/ARS-banner2.png);">
            <div class="overlay-main bg-black opacity-02"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">Jubilee World Roofing Project</h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                    <li>Commercial</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT -->
        <div class="section-full  p-t80 p-b50  ">
            <div class="container  bg-white ">
                <div class="row">
                    <!-- LEFT PART -->
                    <div class="col-md-3 col-sm-3 p-tb15">
                        <!-- BROCHURES -->
                        <div class="wt-box m-b30">
                            <div class="text-left m-b20">
                                <h4>Brochures</h4>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-square">
                                        <span class="separator-left bg-primary"></span>
                                        <span class="separator-right bg-primary"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                                <a class="btn-block" href="#">
                                    <span class="text-black m-r10"><i class="fa fa-file-pdf-o"></i></span>
                                    <strong class="text-uppercase text-black">Download .PDF</strong>
                                </a>
                            </div>
                            <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                                <a class="btn-block" href="#">
                                    <span class="text-black m-r10"><i class="fa fa-file-word-o"></i></span>
                                    <strong class="text-uppercase text-black"> Download .DOC</strong>
                                </a>
                            </div>
                            <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                                <a class="btn-block" href="#">
                                    <span class="text-black m-r10"><i class="fa fa-file-powerpoint-o"></i></span>
                                    <strong class="text-uppercase text-black">Download .PPT</strong>
                                </a>
                            </div>
                        </div>


                        <!-- CONTACT US -->
                        <div class="widget bg-white  widget_getintuch">
                        </div>
                    </div>

                    <!-- LEFT PART -->

                    <!-- RIGHT PART -->
                    <div class="col-md-9 col-sm-9 p-tb10">
                        <!-- BLOG POST CAROUSEL -->

                        <div class="section-content">
                            <div class="section-head text-center">
                                <h2 class="text-uppercase"><?php echo $jobTitle; ?></h2>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-square">
                                        <span class="separator-left bg-primary"></span>
                                        <span class="separator-right bg-primary"></span>
                                    </div>
                                </div>
                                <p><?php echo $jobDesc; ?></p>
                            </div>
                            <div class="owl-carousel service-detail-carousel owl-btn-vertical-center owl-dots-bottom-center container"
                                 s="7000" style=" width:100%">

                                <div class="item">
                                    <div class="aon-thum-bx">
                                        <img alt="" src="<?php echo $sliderImg1; ?>">
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="aon-thum-bx">
                                        <img alt="" src="<?php echo $sliderImg2; ?>">
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="aon-thum-bx">
                                        <img alt="" src="<?php echo $sliderImg3; ?>">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- RIGHT PART -->
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

    <!-- CONTENT END -->
</div>
<!-- CONTENT END -->

<!-- FOOTER START -->
<footer class="site-footer footer-dark">
    <?php include_once('includes/footer.php'); ?>
    <!-- FOOTER COPYRIGHT -->
    <?php include_once('includes/sub-footer.php'); ?>
</footer>
<!-- FOOTER END -->


<!-- SCROLL TOP BUTTON -->
<button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

<!-- MODAL  LOGIN -->
<div class="modal fade " id="Login-form" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title text-white">Login Your Account</h4>
            </div>
            <div class="modal-body p-a30">
                <form id="log-form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Enter Username" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" placeholder="Enter email" type="email">
                        </div>
                    </div>
                    <button class="site-button-secondry text-uppercase btn-block m-b10" type="button">Submit
                    </button>
                    <span class="font-12">Don't have an account? <a class="text-primary" href="javascript:">Register Here</a></span>
                </form>
            </div>
            <div class="modal-footer text-center">
                <div class="text-center"><img alt="" src="images/logo-dark.png"></div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL  REGISTER -->
<div class="modal fade " id="Register-form" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title text-white">Register here</h4>
            </div>
            <div class="modal-body p-a30">
                <form id="reg-form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Enter Username" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" placeholder="Enter email" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input class="form-control" placeholder="Enter Password" type="email">
                        </div>
                    </div>
                    <button class="site-button-secondry text-uppercase btn-block m-b10" type="button">Submit
                    </button>
                    <span class="font-12">Already Have an Account? <a class="text-primary"
                                                                      href="javascript:">Login</a></span>
                </form>
            </div>
            <div class="modal-footer text-center">
                <div class="text-center"><img alt="" src="images/logo-dark.png"></div>
            </div>
        </div>
    </div>
</div>
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

