<?php
$Page='About Us';
$Title='About Our Construction Company in St. Louis, MO | ARS Construction';
$Url='https://www.advancedroofsys.com/about-us.php';
$metaDescription='Learn more about our construction company in St. Louis, MO. The roofing contractors at ARS Construction serve businesses and families across the region in whatever roofing or interior/exterior construction project they need.';
$metaImage='/images/fleet.jpg';
$ogMetaDescription='We at ARS Construction would never claim to be perfect but we always pledge that we are 100% committed to making it right each and every time! Professional St. Louis Construction. ';
$pageActive='';
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
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/fleet.jpg); height: 500px !important">
            <div class="overlay-main bg-black opacity-02"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">Advanced Roofing Systems & Construction </h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->


        <!-- ABOUT COMPANY SECTION START -->
        <div class="section-full p-t80 p-b70">
            <div class="container">
                <!-- TITTLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">ARS Construction</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img alt="Residential Roofing St " src="images/ars/residential-roofing-3-sm.jpg">
                        </div>
                        <div class="col-md-6 text-left">
                            <p>At ARS Construction, our main priority is delivering the best customer service. We accomplish
                                this by making sure we have the right team. Each member has the training and experience to
                                handle any size job. We make sure to stay up-to-date on the latest trends so that we can answer
                                any of your questions. If you are not sure about what would work best, our team is ready to help
                                come up with a plan that you will be happy with. If you are ready for a change, call us
                                today!</p>

                            <p>
                                The ARS team has been assembled to provide 24-hour emergency services. We have been trained on all levels
                                of the construction process. Using state-of-the art equipment, we can design your project
                                remotely, allowing social distancing if needed. Or, we are happy to come to your home to provide
                                details and options on your next project. The ARS team is much more than a group of construction
                                guys. We are a family and work to convey that point of view to our customers who we treat as an
                                extension of our family
                            </p>
                        </div>
                    </div>

                </div>
                <!-- TITLE END -->

                <!--fade slider END-->

            </div>
        </div>
    </div>
    <!-- ABOUT COMPANY SECTION END -->



    <!-- SECTION CONTENT START -->

    <!-- SECTION CONTENT END -->

    <!-- OUR TEAM MEMBER SECTION START -->
    <div class="section-full text-center wt-our-team bg-gray p-t30 p-b50">
        <div class="container">

            <!-- TITTLE START -->
            <div class="section-head text-center">
                <h2 class="text-uppercase">Family-Owned Roofing Company in St. Louis</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
                <p>We are a family-owned business in St. Louis and, as such, we are able to give you personalized
                    attention with every service call. Whether it's roofing, interior, or exterior services, we
                    provide an array of construction solutions for both residential and commercial properties of all
                    kinds. </p>

                <p>Since 2001, our steadfast integrity has allowed us to provide home and business owners in the
                    metro area with the highest quality service that never cuts corners. This allows us to lead the
                    way and distinguish ourselves as the best roofing company in St. Louis!</p>

            </div>
            <!-- TITLE END -->

        </div>
    </div>
    <!-- OUR TEAM MEMBER SECTION END -->

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

