<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alvin Helm</title>
    <link rel="stylesheet" href="<?=url()?>public/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=url()?>public/user/css/animate.css">
    <link rel="stylesheet" href="<?=url()?>public/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=url()?>public/user/css/all.css">
    <link rel="stylesheet" href="<?=url()?>public/user/css/flaticon.css">
    <link rel="stylesheet" href="<?=url()?>public/user/css/themify-icons.css">
    <link rel="stylesheet" href="<?=url()?>public/user/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=url()?>public/user/css/slick.css">
    <link rel="stylesheet" href="<?=url()?>public/user/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?=url()?>"> <img src="<?=url()?>public/asset/logo.svg" alt="logo"
                                style="filter: opacity(0.5) drop-shadow(0 0 0 black);width : 120px;"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=url()?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=url()?>">About</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?=url()?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <div class="dropdown cart">
                                <a href="#">
                                    <i class="fas fa-cart-plus" data-count="0"></i>
                                </a>
                                <a href="<?=url()?>admin">
                                    <i class="fas fa-user"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php startblock('content') ?>
    <?php endblock() ?>

    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Top Products</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Managed Website</a></li>
                            <li><a href="">Manage Reputation</a></li>
                            <li><a href="">Power Tools</a></li>
                            <li><a href="">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Guides</a></li>
                            <li><a href="">Research</a></li>
                            <li><a href="">Experts</a></li>
                            <li><a href="">Agencies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                        </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="ti-heart"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="<?=url()?>public/user/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?=url()?>public/user/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?=url()?>public/user/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?=url()?>public/user/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?=url()?>public/user/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?=url()?>public/user/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?=url()?>public/user/js/owl.carousel.min.js"></script>
    <script src="<?=url()?>public/user/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="<?=url()?>public/user/js/slick.min.js"></script>
    <script src="<?=url()?>public/user/js/jquery.counterup.min.js"></script>
    <script src="<?=url()?>public/user/js/waypoints.min.js"></script>
    <script src="<?=url()?>public/user/js/contact.js"></script>
    <script src="<?=url()?>public/user/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?=url()?>public/user/js/jquery.form.js"></script>
    <script src="<?=url()?>public/user/js/jquery.validate.min.js"></script>
    <script src="<?=url()?>public/user/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="<?=url()?>public/user/js/custom.js"></script>
</body>

</html>