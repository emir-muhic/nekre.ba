<?php include "php/db.php"; ?>
<?php include "php/function.php"; ?>


<?php
$queryy = "SELECT * FROM objave WHERE cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
// WHERE cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'
$arr = array();
$arr2 = array();
if(isset($_GET['stan'])){
    array_push($arr, 'stan');
}
if(isset($_GET['kuca'])){
    array_push($arr, 'Kuća');
}
if(isset($_GET['zemljiste'])){
    array_push($arr, 'zemljiste');
}
if(isset($_GET['garaza'])){
    array_push($arr, 'garaza');
}
if(isset($_GET['poslovniprostor'])){
    array_push($arr, 'Poslovni prostor');
}
if(isset($_GET['vikendica'])){
    array_push($arr, 'vikendica');
}
if(isset($_GET['parkingmjesto'])){
    array_push($arr, 'parkingmjesto');
}
if(isset($_GET['prodaja'])){
    array_push($arr2, 'Prodaja');
}
if(isset($_GET['iznajmljivanje'])){
    array_push($arr2, 'Iznajmljivanje');
}

if(count($arr) > 0 && count($arr2) == 0){
    $queryy .= " AND ";
    for($i=0; $i<count($arr); $i++){
        $queryy .= "vrsta ='" . $arr[$i] . "' OR ";
    }
    $queryy = substr($queryy,0,-3);
    //$queryy .= " AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
} else if(count($arr) == 0 && count($arr2) > 0){
    $queryy .= " AND ";
    for($i=0; $i<count($arr2); $i++){
        $queryy .= "kategorija ='" . $arr2[$i] . "' OR ";
    }
    $queryy = substr($queryy,0,-3);
    //$queryy .= " AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
} else if(count($arr) > 0 && count($arr2) > 0){
    $queryy .= " AND (";
    for($i=0; $i<count($arr); $i++){
        $queryy .= "vrsta ='" . $arr[$i] . "' OR ";
    }
    $queryy = substr($queryy,0,-3);
    $queryy .= ") AND (";
    for($i=0; $i<count($arr2); $i++){
        $queryy .= "kategorija ='" . $arr2[$i] . "' OR ";
    }
    $queryy = substr($queryy,0,-3);
    $queryy .= ")";
    //$queryy .= " AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
}

if(isset($_GET['homesearch'])){
    $vrsta = $_GET['vrsta'];
    $kategorija = $_GET['kategorija'];

    if($_GET['vrsta'] != 'Vrsta nekretnine' && $_GET['kategorija'] != 'Kategorija'){
        $queryy = "SELECT * FROM objave WHERE vrsta='$vrsta' AND kategorija='$kategorija' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
    } else if($_GET['vrsta'] == 'Vrsta nekretnine' && $_GET['kategorija'] != 'Kategorija'){
        $queryy = "SELECT * FROM objave WHERE kategorija='$kategorija' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
    } else if($_GET['vrsta'] != 'Vrsta nekretnine' && $_GET['kategorija'] == 'Kategorija'){
        $queryy = "SELECT * FROM objave WHERE vrsta='$vrsta' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
    }
}

if(isset($_GET['search'])){
    $rijec = $_GET['searchtext'];
    $queryy = "SELECT * FROM objave WHERE naslov LIKE '%$rijec%' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
}

//echo $_GET['cijena'];


?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nekretnine - Agencija za nekretnine Tuzla</title>
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
                                <li><a href="locations.html"><i class="icon-placeholder"></i> Slatina br.6, Tuzla</a></li>
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
                                <a href="index.html"><img src="../img/logo-2.png" alt="Logo"></a>
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
                    <a href="index.html"><img src="../img/logo-2.png" alt="Logo"></a>
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
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="../img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Nekretnine</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="../"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Početna</a></li>
                                <li>Nekretnine</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    
    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__shop-options">
                        <ul class="justify-content-start">
                            <li>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none">
                               <div class="showing-product-number text-right">
                                    <span>Showing 1–12 of 18 results</span>
                                </div> 
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Search Widget -->
                                        <div class="ltn__search-widget mb-30">
                                            <form action="#" method="get">
                                                <input type="text" name="searchtext" placeholder="Pretražite ključnu riječ...">
                                                <button type="submit" name="search"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                
                                    $result = mysqli_query($conn, $queryy);

                                    
                                    $number_of_estate = mysqli_num_rows($result);
                                    if($number_of_estate == 0){
                                        echo "<h3 style='text-align: center;'>Nema rezultata!</h3>";
                                    }

                                    while($row = mysqli_fetch_assoc($result)){ ?>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-6 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="../<?php echo $row['featured_image']; ?>" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src="../img/agents/agent.jpg" alt="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg"><?php echo $row['kategorija']; ?></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html"><?php echo $row['naslov']; ?></a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> <?php echo $row['naselje']; ?>, <?php echo $row['grad']; ?></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li>Šifra <span><?php echo $row['sifra']; ?> </span></li>
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
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Search Widget -->
                                        <div class="ltn__search-widget mb-30">
                                            <form action="#" method="get">
                                                <input type="text" name="searchtext" placeholder="Pretražite ključnu riječ...">
                                                <button type="submit" name="search"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <?php

                                    $query = "SELECT * FROM objave WHERE cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO' ORDER BY id DESC";
                                    $result = mysqli_query($conn, $query);
                                    $number_of_estate = mysqli_num_rows($result);

                                    while($row = mysqli_fetch_assoc($result)){ ?>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="../<?php echo $row['featured_image']; ?>" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg"><?php echo $row['kategorija']; ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span><?php echo toPrice($row['cijena']); ?><label></label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html"><?php echo $row['naslov']; ?></a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="locations.html"><i class="flaticon-pin"></i> <?php echo $row['naselje']; ?>, <?php echo $row['grad']; ?></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li>Šifra <span><?php echo $row['sifra']; ?> </span></li>
                                                    <li>Površina: <span><?php echo $row['povrsina']; ?> m<sup>2</sup></span></li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src="../img/agents/agent.jpg" alt="#"></a>
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
                    </div>
                    <!-- <div class="ltn__pagination-area text-center">
                        <div class="ltn__pagination">
                            <ul>
                                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-4">
                <form action="#" method="get">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        <h3 class="mb-10">Napredno pretraživanje</h3>
                        <label class="mb-30"><small>Broj aktivnih nekretnina: <?php echo $number_of_estate; ?></small></label>
                        <!-- Advance Information widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title">Vrsta nekretnine</h4>
                            <ul>
                                <li>
                                    <a href="shop-right-sidebar.html">
                                        <label class="checkbox-item">Stanovi
                                            <input type="checkbox" name="stan">
                                            <span class="checkmark"></span>
                                        </label>
                                        <?php
                                        $query = "SELECT * FROM objave WHERE vrsta='stan' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                        $result = mysqli_query($conn, $query);
                                        $broj = mysqli_num_rows($result);
                                        
                                        ?>
                                        <span class="categorey-no"><?php echo $broj; ?></span>
                                    </a>
                                </li>
                                <li>
                                    <label class="checkbox-item">Kuće
                                        <input type="checkbox" name="kuca">
                                        <span class="checkmark"></span>
                                    </label>
                                    <?php
                                    $query = "SELECT * FROM objave WHERE vrsta='kuca' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                    $result = mysqli_query($conn, $query);
                                    $broj = mysqli_num_rows($result);
                                    
                                    ?>
                                    <span class="categorey-no"><?php echo $broj; ?></span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Zemljišta
                                        <input type="checkbox" name="zemljiste">
                                        <span class="checkmark"></span>
                                    </label>
                                    <?php
                                    $query = "SELECT * FROM objave WHERE vrsta='zemljiste' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                    $result = mysqli_query($conn, $query);
                                    $broj = mysqli_num_rows($result);
                                    
                                    ?>
                                    <span class="categorey-no"><?php echo $broj; ?></span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Garaže
                                        <input type="checkbox" name="garaza">
                                        <span class="checkmark"></span>
                                    </label>
                                    <?php
                                    $query = "SELECT * FROM objave WHERE vrsta='garaza' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                    $result = mysqli_query($conn, $query);
                                    $broj = mysqli_num_rows($result);
                                    
                                    ?>
                                    <span class="categorey-no"><?php echo $broj; ?></span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Poslovni prostori
                                        <input type="checkbox" name="poslovniprostor">
                                        <span class="checkmark"></span>
                                    </label>
                                    <?php
                                    $query = "SELECT * FROM objave WHERE vrsta='Poslovni prostor' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                    $result = mysqli_query($conn, $query);
                                    $broj = mysqli_num_rows($result);
                                    
                                    ?>
                                    <span class="categorey-no"><?php echo $broj; ?></span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Vikendice
                                        <input type="checkbox" name="vikendica">
                                        <span class="checkmark"></span>
                                    </label>
                                    <?php
                                    $query = "SELECT * FROM objave WHERE vrsta='vikendica' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                    $result = mysqli_query($conn, $query);
                                    $broj = mysqli_num_rows($result);
                                    
                                    ?>
                                    <span class="categorey-no"><?php echo $broj; ?></span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Parking mjesta
                                        <input type="checkbox" name="parkingmjesto">
                                        <span class="checkmark"></span>
                                    </label>
                                    <?php
                                    $query = "SELECT * FROM objave WHERE vrsta='parkingmjesto'";
                                    $result = mysqli_query($conn, $query);
                                    $broj = mysqli_num_rows($result);
                                    
                                    ?>
                                    <span class="categorey-no"><?php echo $broj; ?></span>
                                </li>
                            </ul>
                            <hr>
                            <!-- Price Filter Widget -->
                            <div class="widget--- ltn__price-filter-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border---">Cijena nekretnine</h4>
                                <div class="price_filter">
                                    <div class="price_slider_amount">
                                        <input type="submit"  value="Vaš raspon:"/> 
                                        <input type="text" class="amount" name="cijena" placeholder="Add Your Price" /> 
                                    </div>
                                    <div class="slider-range"></div>
                                </div>
                            </div>
                            <hr>
                            <h4 class="ltn__widget-title">Kategorija nekretnine</h4>
                            <ul>
                                <li>
                                    <label class="checkbox-item">Prodaja
                                        <input type="checkbox" name="prodaja">
                                        <span class="checkmark"></span>
                                    </label>
                                    <?php
                                    $query = "SELECT * FROM objave WHERE kategorija='Prodaja' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                    $result = mysqli_query($conn, $query);
                                    $broj = mysqli_num_rows($result);
                                    
                                    ?>
                                    <span class="categorey-no"><?php echo $broj; ?></span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Iznajmljivanje
                                        <input type="checkbox" name="iznajmljivanje">
                                        <span class="checkmark"></span>
                                    </label>
                                    <?php
                                    $query = "SELECT * FROM objave WHERE kategorija='Iznajmljivanje' AND cijena != 'PRODATO' AND cijena != 'IZNAJMLJENO'";
                                    $result = mysqli_query($conn, $query);
                                    $broj = mysqli_num_rows($result);
                                    
                                    ?>
                                    <span class="categorey-no"><?php echo $broj; ?></span>
                                </li>
                            </ul>
                            <hr>
                            <button type="submit" class="theme-btn-1 btn btn-effect-1" style="width: 100%;" tabindex="0">Osvježi</button>
                    </aside>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->

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
    <script src="../js/plugins.js"></script>
    <!-- Main JS -->
    <script src="../js/main.js"></script>

    <script src="../js/customcoding.js"></script>
  
</body>
</html>

