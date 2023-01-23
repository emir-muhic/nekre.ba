<?php include "php/db.php" ?>
<?php include "php/function.php" ?>
<?php

    $sifra = $_GET['post'];

    $query = "SELECT * FROM objave WHERE sifra='$sifra'";
    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html class="no-js" lang="bs">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nekretnina <?php echo $sifra; ?> - Agencija za nekretnine "Nekre" - Tuzla</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="../css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="../css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="../css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:sladjan@nekre.ba"><i class="icon-mail"></i> sladjan@nekre.ba</a></li>
                                <li><a href="#"><i class="icon-placeholder"></i> Slatina br.6, Tuzla</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="https://www.facebook.com/nekre.ba/" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://www.youtube.com/channel/UCoP8Inu_mE0F4oQCq1rOkIw" title="YouTube"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="https://www.instagram.com/agencija_nekre/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- header-top-btn -->
                                        <div class="header-top-btn">
                                            <a href="../admin/index.php">Admin</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="../"><img src="../img/logo-2.png" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix d-none">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li><a href="../">Početna</a></li>
                                        <li><a href="../o-nama/">O nama</a></li>
                                        <li><a href="../nekretnine/">Nekretnine</a></li>
                                        <li><a href="../faq/">FAQ</a></li>
                                        <li><a href="../kontakt/">Kontakt</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col ltn__header-options ltn__header-options-2 mb-sm-20">
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home Style 01</a></li>
                            <li><a href="index-2.html">Home Style 02</a></li>
                            <li><a href="index-3.html">Home Style 03</a></li>
                            <li><a href="index-4.html">Home Style 04</a></li>
                            <li><a href="index-5.html">Home Style 05  <span class="menu-item-badge">video</span></a></li>
                            <li><a href="index-6.html">Home Style 06</a></li>
                            <li><a href="index-7.html">Home Style 07</a></li>
                            <li><a href="index-8.html">Home Style 08</a></li>
                            <li><a href="index-9.html">Home Style 09</a></li>
                            <li><a href="index-10.html">Home Style 10 <span class="menu-item-badge">Map</span></a></li>
                            <li><a href="index-11.html">Home Style 11</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Services</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="locations.html">Google Map Locations</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-grid.html">Shop Grid</a></li>
                            <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                            <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                            <li><a href="product-details.html">Shop details </a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="order-tracking.html">Order Tracking</a></li>
                            <li><a href="account.html">My Account</a></li>
                            <li><a href="login.html">Sign in</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="#">News</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">News</a></li>
                            <li><a href="blog-grid.html">News Grid</a></li>
                            <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                            <li><a href="blog-details.html">News details</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Services</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="history.html">History</a></li>
                            <li><a href="appointment.html">Appointment</a></li>
                            <li><a href="locations.html">Google Map Locations</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                    <li>
                        <a href="account.html" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href="wishlist.html" title="Wishlist">
                            <span class="utilize-btn-icon">
                                <i class="far fa-heart"></i>
                                <sup>3</sup>
                            </span>
                            Wishlist
                        </a>
                    </li>
                    <li>
                        <a href="cart.html" title="Shoping Cart">
                            <span class="utilize-btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                                <sup>5</sup>
                            </span>
                            Shoping Cart
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0"  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title"><?php echo $data['naslov']; ?></h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="../"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Početna</a></li>
                                <li><?php echo $data['naslov']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-10 pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <ul>
                                <?php
                                
                                if($data['izdvojeno'] === 'Da'){ ?>
                                    <li class="ltn__blog-category">
                                        <a href="#">Izdvojeno</a>
                                    </li>
                                <?php }

                                ?>
                                <li class="ltn__blog-category">
                                    <a class="bg-orange" href="#"><?php echo $data['kategorija']; ?></a>
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i><?php echo $data['datum']; ?>
                                </li>
                            </ul>
                        </div>
                        <h1><?php echo $data['naslov']; ?></h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> <?php echo $data['naselje']; ?>, <?php echo $data['grad']; ?></label>
                        <div class="product-price" style="color: var(--ltn__secondary-color);font-size: 22px;margin-bottom: 26px;margin-top:26px;text-shadow: 1px 1px #000;">
                            <span>Cijena: <?php echo $data['cijena']; ?></span>
                        </div>
                        <img src="../<?php echo $data['featured_image']; ?>">
                        <h4 class="title-2">Opis nekretnine</h4>
                        <p><?php echo $data['opis']; ?></p>
                        <!-- <h4 class="title-2">Osobine nekretnine</h4>  
                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">                          
                            <ul>
                                <li><label>Property ID:</label> <span>HZ29</span></li>
                                <li><label>Home Area: </label> <span>120 sqft</span></li>
                                <li><label>Rooms:</label> <span>7</span></li>
                                <li><label>Baths:</label> <span>2</span></li>
                                <li><label>Year built:</label> <span>1992</span></li>
                            </ul>
                            <ul>
                                <li><label>Lot Area:</label> <span>HZ29 </span></li>
                                <li><label>Lot dimensions:</label> <span>120 sqft</span></li>
                                <li><label>Beds:</label> <span>7</span></li>
                                <li><label>Price:</label> <span>2</span></li>
                                <li><label>Property Status:</label> <span>For Sale</span></li>
                            </ul>
                        </div> -->
                                        
                        <!-- <h4 class="title-2">Facts and Features</h4>
                        <div class="property-detail-feature-list clearfix mb-45">                            
                            <ul>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Living Room</h6>
                                            <small>20 x 16 sq feet</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Garage</h6>
                                            <small>20 x 16 sq feet</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Dining Area</h6>
                                            <small>20 x 16 sq feet</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Bedroom</h6>
                                            <small>20 x 16 sq feet</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Bathroom</h6>
                                            <small>20 x 16 sq feet</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Gym Area</h6>
                                            <small>20 x 16 sq feet</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Garden</h6>
                                            <small>20 x 16 sq feet</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Parking</h6>
                                            <small>20 x 16 sq feet</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->

                        <!-- <h4 class="title-2">Iz naše galerije</h4>
                        <div class="ltn__property-details-gallery mb-30">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="img/others/14.jpg" data-rel="lightcase:myCollection">
                                        <img class="mb-30" src="img/others/14.jpg" alt="Image">
                                    </a>
                                    <a href="img/others/15.jpg" data-rel="lightcase:myCollection">
                                        <img class="mb-30" src="img/others/15.jpg" alt="Image">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="img/others/16.jpg" data-rel="lightcase:myCollection">
                                        <img class="mb-30" src="img/others/16.jpg" alt="Image">
                                    </a>
                                </div>
                            </div>
                        </div> -->

                        <!-- <h4 class="title-2 mb-10">Značajke</h4>
                        <div class="property-details-amenities mb-60">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="ltn__menu-widget">
                                        <ul>
                                            <li>
                                                <label class="checkbox-item">Air Conditioning
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Gym
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Microwave
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Swimming Pool
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">WiFi
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="ltn__menu-widget">
                                        <ul>
                                            <li>
                                                <label class="checkbox-item">Barbeque
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Recreation
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Microwave
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Basketball Cout
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Fireplace
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="ltn__menu-widget">
                                        <ul>
                                            <li>
                                                <label class="checkbox-item">Refrigerator
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Window Coverings
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Washer
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">24x7 Security
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkbox-item">Indoor Game
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="parent-galerija">
                            <img class="slika-galerija" src="../<?php echo $data['slika1']; ?>" alt="" />
                            <img class="slika-galerija" src="../<?php echo $data['slika2']; ?>" alt="" />
                            <img class="slika-galerija" src="../<?php echo $data['slika3']; ?>" alt="" />
                        </div> -->

                        <h4 class="title-2">Lokacija</h4>
                        <div class="property-details-google-map mb-60">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDsmcM4lqzF4d4cPx7lfn9keR_M_P-WTS8&center=<?php echo $data['latitude'].','.$data['longitude']; ?>&q=<?php echo $data['latitude'].','.$data['longitude']; ?>" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>

                        <h4 class="title-2">Galerija</h4>
                        <div class="row">
                            <?php if($data['slika1'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika1']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika2'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika2']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika3'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika3']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika4'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika4']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika5'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika5']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika6'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika6']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika7'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika7']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika8'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika8']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika9'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika9']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika10'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika10']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika11'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika11']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika12'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika12']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika13'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika13']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                            <?php if($data['slika14'] !== "fotografije/$sifra/"){ ?>
                                <div class="col-lg-6">
                                    <img src="../<?php echo $data['slika14']; ?>" alt="Image">
                                </div>
                            <?php } ?>
                        </div>

                        <h4 class="title-2">Slične nekretnine</h4>
                        <div class="row">
                            <?php
                            $query = "SELECT * FROM objave WHERE cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO' ORDER BY RAND() LIMIT 2";
                            $result = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_assoc($result)){ ?>
                            <!-- ltn__product-item -->
                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                    <div class="product-img">
                                        <a href="../nekretnina/?post=<?php echo $row['sifra']; ?>"><img src="../<?php echo $row['featured_image']; ?>" alt="#"></a>
                                        <div class="real-estate-agent">
                                            <div class="agent-img">
                                                <a href="#"><img src="../img/agents/agent.jpg" alt="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badg"><?php echo $row['kategorija']; ?></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title"><a href="../nekretnina/?post=<?php echo $row['sifra']; ?>"><?php echo $row['naslov']; ?></a></h2>
                                        <div class="product-img-location">
                                            <ul>
                                                <li>
                                                    <a href="../nekretnina/?post=<?php echo $row['sifra']; ?>"><i class="flaticon-pin"></i> <?php echo $row['naselje']; ?>, <?php echo $row['grad']; ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                            <!-- <li><span>3 </span>
                                                Bedrooms
                                            </li>
                                            <li><span>2 </span>
                                                Bathrooms
                                            </li>
                                            <li><span>3450 </span>
                                                square Ft
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="product-info-bottom">
                                        <div class="product-price">
                                            <span><?php echo toPrice($row['cijena']); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                        <!-- Author Widget -->
                        <div class="widget ltn__author-widget">
                            <div class="ltn__author-widget-inner text-center">
                                <img src="../img/agents/agent.jpg" alt="Image">
                                <h5>Slađan Suljetović dipl.iur.</h5>
                                <small>Broj telefona: +38761 663 666</small>
                                <div class="ltn__social-media pt-20">
                                    <ul>
                                        <li><a href="https://www.instagram.com/suljetovic.s/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.facebook.com/sladan.suljetovic" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Form Widget -->
                        <div class="widget ltn__form-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Pošaljite nam poruku</h4>
                            <form action="#">
                                <input type="text" name="yourname" placeholder="Vaše ime*">
                                <input type="text" name="youremail" placeholder="Vaš e-Mail*">
                                <textarea name="yourmessage" placeholder="Napišite poruku..."></textarea>
                                <button type="submit" class="btn theme-btn-1">Pošalji poruku</button>
                            </form>
                        </div>
                        <!-- Menu Widget (Category) -->
                        <div class="widget ltn__menu-widget ltn__menu-widget-2--- ltn__menu-widget-2-color-2---">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Kategorije</h4>
                            <ul>
                                <?php
                                $query = "SELECT * FROM objave WHERE vrsta='Stan' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                $result = mysqli_query($conn, $query);
                                $broj = mysqli_num_rows($result)
                                ?>
                                <li><a href="../nekretnine/?stan=on">Stanovi <span>(<?php echo $broj; ?>)</span></a></li>
                                <?php
                                $query = "SELECT * FROM objave WHERE vrsta='Kuća' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                $result = mysqli_query($conn, $query);
                                $broj = mysqli_num_rows($result)
                                ?>
                                <li><a href="../nekretnine/?kuca=on">Kuće  <span>(<?php echo $broj; ?>)</span></a></li>
                                <?php
                                $query = "SELECT * FROM objave WHERE vrsta='Zemljište' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                $result = mysqli_query($conn, $query);
                                $broj = mysqli_num_rows($result)
                                ?>
                                <li><a href="../nekretnine/?zemljiste=on">Zemljišta  <span>(<?php echo $broj; ?>)</span></a></li>
                                <?php
                                $query = "SELECT * FROM objave WHERE vrsta='Garaža' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                $result = mysqli_query($conn, $query);
                                $broj = mysqli_num_rows($result)
                                ?>
                                <li><a href="../nekretnine/?garaza=on">Garaže  <span>(<?php echo $broj; ?>)</span></a></li>
                                <?php
                                $query = "SELECT * FROM objave WHERE vrsta='Poslovni prostor' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                $result = mysqli_query($conn, $query);
                                $broj = mysqli_num_rows($result)
                                ?>
                                <li><a href="../nekretnine/?poslovniprostor=on">Poslovni prostori <span>(<?php echo $broj; ?>)</span></a></li>
                                <?php
                                $query = "SELECT * FROM objave WHERE vrsta='Vikendica' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                $result = mysqli_query($conn, $query);
                                $broj = mysqli_num_rows($result)
                                ?>
                                <li><a href="../nekretnine/?vikendica=on">Vikendice <span>(<?php echo $broj; ?>)</span></a></li>
                                <?php
                                $query = "SELECT * FROM objave WHERE vrsta='Parking mjesto' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                $result = mysqli_query($conn, $query);
                                $broj = mysqli_num_rows($result)
                                ?>
                                <li><a href="../nekretnine/?parkingmjesto=on">Parking Mjesta <span>(<?php echo $broj; ?>)</span></a></li>
                            </ul>
                        </div>
                        <!-- Popular Product Widget -->
                        <div class="widget ltn__popular-product-widget">       
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Popularne nekretnine</h4>                     
                            <div class="row ltn__popular-product-widget-active slick-arrow-1">
                                <?php
                                $query = "SELECT * FROM objave WHERE cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO' ORDER BY RAND() LIMIT 2";
                                $result = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_assoc($result)){ ?>
                                <!-- ltn__product-item -->
                                <div class="col-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                        <div class="product-img">
                                            <a href="../nekretnina/?post=<?php echo $row['sifra']; ?>"><img src="../<?php echo $row['featured_image']; ?>" alt="#"></a>
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="#"><img src="../img/agents/agent.jpg" alt="#"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-price">
                                                <span><?php echo toPrice($row['cijena']); ?></span>
                                            </div>
                                            <h2 class="product-title"><a href="../nekretnina/?post=<?php echo $row['sifra']; ?>"><?php echo $row['naslov']; ?></a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="../nekretnina/?post=<?php echo $row['sifra']; ?>"><i class="flaticon-pin"></i> <?php echo $row['naselje']; ?>, <?php echo $row['grad']; ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <!-- <li><span>3 </span>
                                                    Bedrooms
                                                </li>
                                                <li><span>2 </span>
                                                    Bathrooms
                                                </li>
                                                <li><span>3450 </span>
                                                    square Ft
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
        
                                <!--  -->
                            </div>
                        </div>
                        <!-- Social Media Widget -->
                        <div class="widget ltn__social-media-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Pratite nas</h4>
                            <div class="ltn__social-media-2">
                                <ul>
                                    <li><a href="https://www.facebook.com/nekre.ba/" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCoP8Inu_mE0F4oQCq1rOkIw" title="YouTube"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://www.instagram.com/agencija_nekre/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href="shop.html"><img src="img/banner/2.jpg" alt="#"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pb-70 d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center---">
                        <h1 class="section-title">Related Properties</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__related-product-slider-two-active slick-arrow-1">
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/1.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/2.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Sale</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/3.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/4.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/5.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Tražite dom iz snova?</h1>
                            <p>Možemo vam pomoći da ostvarite svoj san u novom domu!</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="nekretnine">Naše nekretnine <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-2 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <div class="site-logo">
                                    <img src="../img/logo-2.png" alt="Logo">
                                </div>
                            </div>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>Tuzla, Bosna i Hercegovina</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+38761663666">+387 61 663 666</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:sladjan@nekre.ba">sladjan@nekre.ba</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="https://www.facebook.com/nekre.ba/" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/agencija_nekre/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCoP8Inu_mE0F4oQCq1rOkIw" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Korisni linkovi</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="o-nama">O nama</a></li>
                                    <li><a href="nekretnine">Nekretnine</a></li>
                                    <li><a href="lokacija">Lokacija</a></li>
                                    <li><a href="faq">FAQ</a></li>
                                    <li><a href="kontakt">Kontakt</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Nekretnine</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Stanovi</a></li>
                                    <li><a href="#">Kuće</a></li>
                                    <li><a href="#">Garaže</a></li>
                                    <li><a href="#">Zemljišta</a></li>
                                    <li><a href="#">Vikendice</a></li>
                                    <li><a href="#">Vikendice</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Administracija</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="/admin/login.php">Prijava</a></li>
                                    <li><a href="/admin/login.php">Postavi nekretinu</a></li>
                                    <li><a href="#">Uredi nekretninu</a></li>
                                    <li><a href="#">Pogledaj statistike</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                            <h4 class="footer-title">Newsletter</h4>
                            <p>Pretplati se na naš sedmični newsletter, besplatno!</p>
                            <div class="footer-newsletter">
                                <form action="#">
                                    <input type="email" name="email" placeholder="Email*">
                                    <div class="btn-wrapper">
                                        <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
            <div class="container-fluid ltn__border-top-2">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p>Sva prava zadržana @ Agencija "Nekre" <span class="current-year"></span> <span style="color:#ff5a3c">||</span> Stranicu kreirao: <a href="#">Weboss Development</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                                <li><a href="#">Uslovi korištenja</a></li>
                                <li><a href="#">Pravila privatnosti</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  
</body>
</html>

