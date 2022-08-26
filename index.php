<?php include "php/db.php"; ?>
<?php include "php/function.php"; ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nekre - Agencija za nekretnine Tuzla</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<!-- Body main wrapper start -->
<div class="body-wrapper">    
    
    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-logo-and-mobile-menu ltn__header-transparent gradient-color-4---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area top-area-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:sladjo@nekre.ba"><i class="icon-mail"></i> sladjan@nekre.ba</a></li>
                                <li><a href="#"><i class="icon-placeholder"></i> Slatina br.6, Tuzla</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li>
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                                <li><a href="#" class="dropdown-toggle"><span class="active-currency">Bosanski</span></a>
                                                    <ul>
                                                        <li><a href="#">Engleski</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href=""><img src="img/logo-2.png" alt="Logo"></a>
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
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li><a href="">Početna</a></li>
                                        <li><a href="o-nama/">O nama</a></li>
                                        <li><a href="nekretnine/">Nekretnine</a></li>
                                        <li><a href="faq/">FAQ</a></li>
                                        <li><a href="kontakt/">Kontakt</a></li>
                                        <li class="special-link">
                                            <a href="admin/index.php">Admin</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col--- ltn__header-options ltn__header-options-2 ">
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
                            <li><a href="add-listing.html">Add Listing</a></li>
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

    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3  section-bg-2">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="img/slider/11.jpg">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Agencija za nekretnine</h6>
                                        <h1 class="slide-title animated ">Želite da prodate, iznajmite ili kupite nekretinu?</h1>
                                        <div class="btn-wrapper animated">
                                            <a href="kontakt" class="theme-btn-1 btn btn-effect-1">Kontaktirajte nas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- CAR DEALER FORM AREA START -->
    <div class="ltn__car-dealer-form-area mt--65 mt-120 pb-115---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__car-dealer-form-tab">
                        <div class="ltn__tab-menu  text-uppercase d-none">
                        </div>
                        <div class="tab-content bg-white box-shadow-1 ltn__border position-relative pb-10">
                            <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                <div class="car-dealer-form-inner">
                                    <form action="nekretnine" class="ltn__car-dealer-form-box row" method="get">
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-4 col-md-6">
                                            <select class="nice-select" name="vrsta">
                                                <option>Vrsta nekretnine</option>
                                                <option value="stan">Stan</option>
                                                <option value="kuca">Kuća</option>
                                                <option value="zemljiste">Zemljište</option>
                                                <option value="garaza">Garaža</option>
                                                <option value="poslovniprostor">Poslovni prostor</option>
                                                <option value="vikendica">Vikendica</option>
                                                <option value="parkingmjesto">Parking mjesto</option>
                                            </select>
                                        </div> 
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-4 col-md-6">
                                            <select class="nice-select" name="kategorija">
                                                <option>Kategorija</option>
                                                <option value="prodaja">Prodaja</option>
                                                <option value="iznajmljivanje">Iznajmljivanje</option>
                                            </select>
                                        </div>
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-4 col-md-6">
                                            <div class="btn-wrapper text-center mt-0">
                                                <button type="submit" name="homesearch" class="btn theme-btn-1 btn-effect-1 text-uppercase">Pretraži</button>
                                                <!-- <a href="nekretnine.php?..." class="btn theme-btn-1 btn-effect-1 text-uppercase">Pretraži</a> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ltn__form_tab_1_2">
                                <div class="car-dealer-form-inner">
                                    <form action="#" class="ltn__car-dealer-form-box row">
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-3 col-md-6">
                                            <select class="nice-select">
                                                <option>Choose Area</option>
                                                <option>chicago</option>
                                                <option>London</option>
                                                <option>Los Angeles</option>
                                                <option>New York</option>
                                                <option>New Jersey</option>
                                            </select>
                                        </div> 
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-3 col-md-6">
                                            <select class="nice-select">
                                                <option>Property Status</option>
                                                <option>Open house</option>
                                                <option>Rent</option>
                                                <option>Sale</option>
                                                <option>Sold</option>
                                            </select>
                                        </div> 
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-calendar---- col-lg-3 col-md-6">
                                            <select class="nice-select">
                                                <option>Property Type</option>
                                                <option>Apartment</option>
                                                <option>Co-op</option>
                                                <option>Condo</option>
                                                <option>Single Family Home</option>
                                            </select>
                                        </div>
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                            <div class="btn-wrapper text-center mt-0">
                                                <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> -->
                                                <a href="shop-right-sidebar.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Properties</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CAR DEALER FORM AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1--- pt-115 pb-90 mb-120---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Naše usluge</h6>
                        <h1 class="section-title">Naš Glavni Fokus</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter---  justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house"></i></span> -->
                            <img src="img/icons/icon-img/21.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">Prodaja</a></h3>
                            <p>Agencija "Nekre" Vam nudi širok asortiman
stanova, kuća, zemljišta, poslovnih prostora,
garaža i parking mjesta.</p>
                            <a class="ltn__service-btn" href="service-details.html">Pogledaj nekretnine <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house-3"></i></span> -->
                            <img src="img/icons/icon-img/22.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">Iznajmljivanje</a></h3>
                            <p>Agencija "Nekre" Vam nudi širok asortiman
stanova, kuća, zemljišta, poslovnih prostora,
garaža i parking mjesta.</p>
                            <a class="ltn__service-btn" href="service-details.html">Pogledaj nekretnine <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Nekretnine</h6>
                        <h1 class="section-title">Najnovije u ponudi</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-three-active--- slick-arrow-1">
                <?php

                $query = "SELECT * FROM nekretnine ORDER BY id DESC";
                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($result)){ ?>

                <!-- ltn__product-item -->
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="nekretnina/?post=<?php echo $row['sifra']; ?>"><img src="<?php echo $row['featured_image']; ?>" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="#"><img src="img/agents/agent.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg"><?php echo $row['kategorija']; ?></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="nekretnina/?post=<?php echo $row['sifra']; ?>"><?php echo $row['naslov']; ?></a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="#"><i class="flaticon-pin"></i> <?php echo $row['naselje']; ?>, <?php echo $row['grad']; ?></a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li>Šifra: <span><?php echo $row['sifra']; ?> </span></li>
                                <li>Površina: <span><?php echo $row['povrsina']; ?> m<sup>2</sup></span></li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span><?php echo toPrice($row['cijena']); ?><label></label></span>
                            </div>
                        </div>
                    </div>
                </div> 
                <?php } ?>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Specijalno</h6>
                        <h1 class="section-title">Izdvijene nekretnine</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-three-active slick-arrow-1">
                <?php
                $query = "SELECT * FROM nekretnine WHERE izdvojeno = 'Da'";
                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($result)){ ?>
                    <!-- ltn__product-item -->
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-4 text-center---">
                            <div class="product-img">
                                <a href="nekretnina/?post=<?php echo $row['sifra']; ?>"><img src="<?php echo $row['featured_image']; ?>" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge bg-green"><?php echo $row['kategorija']; ?></li>
                                    </ul>
                                </div>
                                <div class="product-img-location-gallery">
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="flaticon-pin"></i> <?php echo $row['naselje']; ?>, <?php echo $row['grad']; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-price">
                                    <span><?php echo toPrice($row['cijena']); ?><label></label></span>
                                </div>
                                <h2 class="product-title"><a href="nekretnina/?post=<?php echo $row['sifra']; ?>"><?php echo $row['naslov']; ?></a></h2>
                                <div class="product-description">
                                    <p>Beautiful Huge 1 Family House In Heart Of <br>
                                        Westbury. Newly Renovated With New Wood</p>
                                </div>
                                <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                    <li><span>3 <i class="flaticon-bed"></i></span>
                                        Bedrooms
                                    </li>
                                    <li><span>2 <i class="flaticon-clean"></i></span>
                                        Bathrooms
                                    </li>
                                    <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                        square Ft
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info-bottom">
                                <div class="real-estate-agent">
                                    <div class="agent-img">
                                        <a href="#"><img src="img/agents/agent.jpg" alt="#"></a>
                                    </div>
                                    <div class="agent-brief">
                                        <h6><a href="#">Slađan Suljetović dipl.iur.</a></h6>
                                        <small>Agent za nekretnine</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    <!-- CALL TO ACTION START (call-to-action-4) -->
    <div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120 mb-120" data-bs-bg="img/bg/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-4 text-center">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  Imate dodatna pitanja?  //</h6>
                            <h1 class="section-title white-color">061-663-666</h1>
                        </div>
                        <div class="btn-wrapper">
                            <a href="tel:+061663666" class="theme-btn-1 btn btn-effect-1">POZOVITE NAS</a>
                            <a href="kontakt/" class="btn btn-transparent btn-effect-4 white-color">KONTAKTIRAJTE NAS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__call-to-4-img-1">
            <img src="img/slider/21.png" alt="#">
        </div>
        <div class="ltn__call-to-4-img-2">
            <img src="img/bg/11.png" alt="#">
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- SELECT AVAILABILITY AREA START -->
    <div class="select-availability-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center---">
                        <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">Naša ponuda</h6>
                        <h1 class="section-title">Dostupne nekretnine</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__select-availability-table-wrap">
                        <div class="ltn__select-availability-table d-none d-md-block">
                            <ul class="ltn__select-availability-table-head">
                                <li>Naziv</li>
                                <li>Naselje</li>
                                <li>Grad</li>
                                <li>Površina </li>
                                <li>Cijena</li>
                                <li>Pogledaj</li>
                            </ul>
                            <?php
                            
                            $query = "SELECT * FROM nekretnine";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_assoc($result)){ ?>
                                <ul class="ltn__select-availability-table-row">
                                <li class="tower-name"><?php echo $row['naslov']; ?></li>
                                <li><?php echo $row['naselje']; ?></li>
                                <li><?php echo $row['grad']; ?></li>
                                <li><?php echo $row['povrsina']; ?> m<sup>2</sup></li>
                                <li><?php echo toPrice($row['cijena']); ?></li>
                                <li><a href="nekretnina/?post=<?php echo $row['sifra']; ?>">+ Pogledaj</a></li>
                            </ul>
                            <?php } ?>
                        </div>
                        <div class="ltn__select-availability-table-responsive d-md-none">
                            <ul class="ltn__select-availability-table-row-responsive-item">
                                <li><span>Residence</span> <span class="tower-name">Tower Name</span></li>
                                <li><span>Bedrooms</span> <span>3</span></li>
                                <li><span>Bathroom</span> <span>3</span></li>
                                <li><span>SQ.FT</span> <span>1,200</span></li>
                                <li><span>Rent Price</span> <span>$3,500</span></li>
                                <li><span>Details</span> <span><a href="product-details.html">+ Available</a></span></li>
                            </ul>
                            <ul class="ltn__select-availability-table-row-responsive-item">
                                <li><span>Residence</span> <span class="tower-name">Tower Name</span></li>
                                <li><span>Bedrooms</span> <span>3</span></li>
                                <li><span>Bathroom</span> <span>3</span></li>
                                <li><span>SQ.FT</span> <span>1,200</span></li>
                                <li><span>Rent Price</span> <span>$3,500</span></li>
                                <li><span>Details</span> <span><a href="product-details.html">+ Available</a></span></li>
                            </ul>
                            <ul class="ltn__select-availability-table-row-responsive-item">
                                <li><span>Residence</span> <span class="tower-name">Tower Name</span></li>
                                <li><span>Bedrooms</span> <span>3</span></li>
                                <li><span>Bathroom</span> <span>3</span></li>
                                <li><span>SQ.FT</span> <span>1,200</span></li>
                                <li><span>Rent Price</span> <span>$3,500</span></li>
                                <li><span>Details</span> <span><a href="product-details.html">+ Available</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SELECT AVAILABILITY AREA END -->

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
                                    <img src="img/logo-2.png" alt="Logo">
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
                                    <li><a href="order-tracking.html">Stanovi</a></li>
                                    <li><a href="wishlist.html">Kuće</a></li>
                                    <li><a href="login.html">Garaže</a></li>
                                    <li><a href="account.html">Zemljišta</a></li>
                                    <li><a href="about.html">Vikendice</a></li>
                                    <li><a href="about.html">Parking mjesta</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Administracija</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="login.html">Prijava</a></li>
                                    <li><a href="account.html">Postavi nekretinu</a></li>
                                    <li><a href="account.html">Uredi nekretninu</a></li>
                                    <li><a href="account.html">Pogledaj statistike</a></li>
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

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/7.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.html">3 Rooms Manhattan</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  
</body>
</html>