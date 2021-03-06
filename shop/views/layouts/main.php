<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;

use shop\assets\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta content='telephone=no' name='format-detection' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <meta name="google-site-verification" content="4QnHo5vDfpP4GM_WYaAPzcrGpMkktl9w4BtaFYYAqjI" />
    
    <link rel="icon" type="image/png" href="http://newsmartwave.net/html/venedor/green/images/icons/icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="http://newsmartwave.net/html/venedor/green/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://newsmartwave.net/html/venedor/green/images/icons/apple-icon-72x72.png">
    
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    
    <!--[if lt IE 9]><script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script><![endif]-->
			
    <?php $this->head() ?>
    <style id="custom-style"></style>
</head>
<body>
<?php $this->beginBody() ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.11&appId=392492880823090';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    
    <div id="wrapper">
        <header id="header">
            <div id="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-top-left">
                                <ul id="top-links" class="clearfix">
                                    <li><a href="#" title="My Wishlist"><span class="top-icon top-icon-pencil"></span><span class="hide-for-xs">My Wishlist</span></a></li>
                                    <li><a href="#" title="My Account"><span class="top-icon top-icon-user"></span><span class="hide-for-xs">My Account</span></a></li>
                                    <li><a href="cart.html" title="My Cart"><span class="top-icon top-icon-cart"></span><span class="hide-for-xs">My Cart</span></a></li>
                                    <li><a href="checkout.html" title="Checkout"><span class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a></li>
                                </ul>
                            </div>
                            <div class="header-top-right">
                                <div class="header-top-dropdowns pull-right">
                                    <div class="btn-group dropdown-money">
                                        <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown"><span class="hide-for-xs">US Dollar</span><span class="hide-for-lg">$</span></button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#"><span class="hide-for-xs">Euro</span><span class="hide-for-lg">&euro;</span></a></li>
                                            <li><a href="#"><span class="hide-for-xs">Pound</span><span class="hide-for-lg">&pound;</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group dropdown-language">
                                        <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown"><span class="flag-container"><img src="images/england-flag.png" alt="flag of england"></span> <span class="hide-for-xs">English</span></button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#"><span class="flag-container"><img src="images/italy-flag.png" alt="flag of england"></span><span class="hide-for-xs">Italian</span></a></li>
                                            <li><a href="#"><span class="flag-container"><img src="images/spain-flag.png" alt="flag of italy"></span><span class="hide-for-xs">Spanish</span></a></li>
                                            <li><a href="#"><span class="flag-container"><img src="images/france-flag.png" alt="flag of france"></span><span class="hide-for-xs">French</span></a></li>
                                            <li><a href="#"><span class="sm-separator"><img src="images/germany-flag.png" alt="flag of germany"></span><span class="hide-for-xs">German</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-text-container pull-right">
                                    <p class="header-text">Welcome to Venedor!</p>
                                    <p class="header-link"><a href="#">login</a>&nbsp;or&nbsp;<a href="#">create an account</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="inner-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 logo-container">
                            <h1 class="logo clearfix"><span>Responsive eCommerce Template</span> <a href="index.html" title="Venedor eCommerce Template"><img src="images/logo.png" alt="Venedor Commerce Template" width="238" height="76"></a></h1></div>
                        <div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">
                            <div class="header-box contact-infos pull-right">
                                <ul>
                                    <li><span class="header-box-icon header-box-icon-skype"></span>venedor_support</li>
                                    <li><span class="header-box-icon header-box-icon-email"></span><a href="mailto:venedor@gmail.com">venedor@gmail.com</a></li>
                                </ul>
                            </div>
                            <div class="header-box contact-phones pull-right clearfix"><span class="header-box-icon header-box-icon-earphones"></span>
                                <ul class="pull-left">
                                    <li>+(404) 158 14 25 78</li>
                                    <li>+(404) 851 21 48 15</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-nav-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 clearfix">
                                <nav id="main-nav">
                                    <div id="responsive-nav">
                                        <div id="responsive-nav-button">Menu <span id="responsive-nav-button-icon"></span></div>
                                    </div>
                                    <ul class="menu clearfix">
                                        <li><a class="active" href="index.html">HOME</a>
                                            <ul>
                                                <li><a href="../green/index.html">Home 1</a></li>
                                                <li><a href="../blue/index.html">Home 2</a></li>
                                                <li><a href="../orange/index.html">Home 3</a></li>
                                                <li><a href="../pink/index.html">Home 4</a></li>
                                                <li><a href="../brown/index.html">Home 5</a></li>
                                                <li><a href="../green2/index.html">Home 6</a></li>
                                                <li><a href="../blueorange/index.html">Home 7</a></li>
                                                <li><a href="../blueorange2/index.html">Home 8</a></li>
                                                <li><a href="../browngreen/index.html">Home 9</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-container"><a href="#">SHOP</a>
                                            <div class="mega-menu clearfix">
                                                <div class="col-5"><a href="category.html" class="mega-menu-title">Clothing</a>
                                                    <ul class="mega-menu-list clearfix">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Jeans &amp; Trousers</a></li>
                                                        <li><a href="#">Blouses &amp; Shirts</a></li>
                                                        <li><a href="#">Tops &amp; T-Shirts</a></li>
                                                        <li><a href="#">Jackets &amp; Coats</a></li>
                                                        <li><a href="#">Skirts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-5"><a href="category.html" class="mega-menu-title">Shoes</a>
                                                    <ul class="mega-menu-list clearfix">
                                                        <li><a href="#">Formal Shoes</a></li>
                                                        <li><a href="#">Casual Shoes</a></li>
                                                        <li><a href="#">Sandals</a></li>
                                                        <li><a href="#">Boots</a></li>
                                                        <li><a href="#">Wide Fit</a></li>
                                                        <li><a href="#">Slippers</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-5"><a href="category.html" class="mega-menu-title">Accessories</a>
                                                    <ul class="mega-menu-list clearfix">
                                                        <li><a href="#">Bags &amp; Purses</a></li>
                                                        <li><a href="#">Belts</a></li>
                                                        <li><a href="#">Gloves</a></li>
                                                        <li><a href="#">Jewellery</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Hair Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-5"><a href="category.html" class="mega-menu-title">Sports</a>
                                                    <ul class="mega-menu-list clearfix">
                                                        <li><a href="#">Sport Tops &amp; Vests</a></li>
                                                        <li><a href="#">Swimwear</a></li>
                                                        <li><a href="#">Footwear</a></li>
                                                        <li><a href="#">Sports Underwear</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-5"><a href="category.html" class="mega-menu-title">Maternity</a>
                                                    <ul class="mega-menu-list clearfix">
                                                        <li><a href="#">Tops &amp; Skirts</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Trousers &amp; Shorts</a></li>
                                                        <li><a href="#">Knitwear</a></li>
                                                        <li><a href="#">Jackets &amp; Coats</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="#">PAGES</a>
                                            <ul>
                                                <li><a href="#">Headers</a>
                                                    <ul>
                                                        <li><a href="header1.html">Header Version 1</a></li>
                                                        <li><a href="header2.html">Header Version 2</a></li>
                                                        <li><a href="header3.html">Header Version 3</a></li>
                                                        <li><a href="header4.html">Header Version 4</a></li>
                                                        <li><a href="header5.html">Header Version 5</a></li>
                                                        <li><a href="header6.html">Header Version 6</a></li>
                                                        <li><a href="header7.html">Header Version 7</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Footers</a>
                                                    <ul>
                                                        <li><a href="footer1.html">Footer Version 1</a></li>
                                                        <li><a href="footer2.html">Footer Version 2</a></li>
                                                        <li><a href="footer3.html">Footer Version 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="product.html">Product</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="category.html">Category</a>
                                                    <ul>
                                                        <li><a href="category-list.html">Category list</a></li>
                                                        <li><a href="category.html">Category Banner 1</a></li>
                                                        <li><a href="category-banner-2.html">Category Banner 2</a></li>
                                                        <li><a href="category-banner-3.html">Category Banner 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog.html">Blog</a>
                                                    <ul>
                                                        <li><a href="blog.html">Right Sidebar</a></li>
                                                        <li><a href="blog-sidebar-left.html">Left Sidebar</a></li>
                                                        <li><a href="blog-sidebar-both.html">Both Sidebar</a></li>
                                                        <li><a href="single.html">Blog Post</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="aboutus.html">About Us</a></li>
                                                <li><a href="register-account.html">Register Account</a></li>
                                                <li><a href="compare-products.html">Compare Products</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Portfolio</a>
                                            <ul>
                                                <li><a href="#">Classic</a>
                                                    <ul>
                                                        <li><a href="portfolio-2.html">Two Columns</a></li>
                                                        <li><a href="portfolio-3.html">Three Columns</a></li>
                                                        <li><a href="portfolio-4.html">Four Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Masonry</a>
                                                    <ul>
                                                        <li><a href="portfolio-masonry-2.html">Two Columns</a></li>
                                                        <li><a href="portfolio-masonry-3.html">Three Columns</a></li>
                                                        <li><a href="portfolio-masonry-4.html">Four Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Portfolio Posts</a>
                                                    <ul>
                                                        <li><a href="single-portfolio.html">Image Post</a></li>
                                                        <li><a href="single-portfolio-gallery.html">Gallery Post</a></li>
                                                        <li><a href="single-portfolio-video.html">Video Post</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Elements</a>
                                            <ul>
                                                <li><a href="elements/tabs.html">Tabs</a></li>
                                                <li><a href="elements/titles.html">Titles</a></li>
                                                <li><a href="elements/typography.html">Typography</a></li>
                                                <li><a href="elements/collapses.html">collapses</a></li>
                                                <li><a href="elements/animations.html">animations</a></li>
                                                <li><a href="elements/grids.html">Grid System</a></li>
                                                <li><a href="elements/alerts.html">Alert Boxes</a></li>
                                                <li><a href="elements/buttons.html">Buttons</a></li>
                                                <li><a href="elements/medias.html">Media</a></li>
                                                <li><a href="elements/forms.html">Forms</a></li>
                                                <li><a href="elements/icons.html">Icons</a></li>
                                                <li><a href="elements/lists.html">Lists</a></li>
                                                <li><a href="elements/more.html">More</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </nav>
                                <div id="quick-access">
                                    <div class="dropdown-cart-menu-container pull-right">
                                        <div class="btn-group dropdown-cart">
                                            <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown"><span class="cart-menu-icon"></span> 0 item(s) <span class="drop-price">- $0.00</span></button>
                                            <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                                <p class="dropdown-cart-description">Recently added item(s).</p>
                                                <ul class="dropdown-cart-product-list">
                                                    <li class="item clearfix"><a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a> <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
                                                        <figure>
                                                            <a href="product.html"><img src="images/products/thumbnails/item12.jpg" alt="phone 4"></a>
                                                        </figure>
                                                        <div class="dropdown-cart-details">
                                                            <p class="item-name"><a href="product.html">Cam Optia AF Webcam</a></p>
                                                            <p>1x <span class="item-price">$499</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="item clearfix"><a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a> <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
                                                        <figure>
                                                            <a href="product.html"><img src="images/products/thumbnails/item13.jpg" alt="phone 2"></a>
                                                        </figure>
                                                        <div class="dropdown-cart-details">
                                                            <p class="item-name"><a href="product.html">Iphone Case Cover Original</a></p>
                                                            <p>1x <span class="item-price">$499<span class="sub-price">.99</span></span>
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="dropdown-cart-total">
                                                    <li><span class="dropdown-cart-total-title">Shipping:</span>$7</li>
                                                    <li><span class="dropdown-cart-total-title">Total:</span>$1005<span class="sub-price">.99</span></li>
                                                </ul>
                                                <div class="dropdown-cart-action">
                                                    <p><a href="cart.html" class="btn btn-custom-2 btn-block">Cart</a></p>
                                                    <p><a href="checkout.html" class="btn btn-custom btn-block">Checkout</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="form-inline quick-search-form" role="form" action="#">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search here">
                                        </div>
                                        <button type="submit" id="quick-search" class="btn btn-custom"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section id="content">
            <div id="slider-rev-container">
                <div id="slider-rev">
                    <ul>
                        <li data-transition="fade" data-slotamount="6" data-masterspeed="600" data-saveperformance="on" data-title="Special Offers"><img src="images/revslider/dummy.png" alt="slidebg1" data-lazyload="images/homeslider/slide1.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption rev-title lfr ltr" data-x="695" data-y="198" data-speed="1600" data-start="300" data-endspeed="300">SPECIAL OFFER -25%</div>
                            <div class="tp-caption rev-text lfr ltr" data-x="695" data-y="252" data-speed="1600" data-start="600" data-endspeed="550">Performance &amp; Design. Taken right
                                <br>to the edge.</div>
                            <div class="tp-caption lfr ltr" data-x="695" data-y="332" data-speed="1600" data-start="900" data-endspeed="800"><a href="#" class="btn btn-custom-2">Learn More</a></div>
                            <div class="tp-caption lfl ltl" data-x="center" data-y="bottom" data-hoffset="-230" data-speed="2000" data-start="500" data-endspeed="800"><img src="images/homeslider/slide1_1.png" alt="Slide 1_1"></div>
                        </li>
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="600" data-saveperformance="on" data-title="Learn More"><img src="images/revslider/dummy.png" alt="slidebg2" data-lazyload="images/homeslider/slide2.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption rev-title lfr ltr" data-x="755" data-y="238" data-speed="1600" data-start="750" data-endspeed="300">The Next Big thing...</div>
                            <div class="tp-caption rev-text2 lfr ltr" data-x="755" data-y="290" data-speed="1600" data-start="1050" data-endspeed="550">Take, view and share photos with
                                <br>the 13MP camera and stunning 5" display.</div>
                            <div class="tp-caption lfr ltr" data-x="755" data-y="360" data-speed="1600" data-start="1350" data-endspeed="800"><a href="#" class="btn btn-custom-2">Learn More</a></div>
                            <div class="tp-caption rev-price randomrotate randomrotateout" data-x="360" data-y="55" data-speed="1200" data-start="2000" data-endspeed="400">$1150</div>
                            <div class="tp-caption lfl ltl" data-x="center" data-y="center" data-hoffset="-204" data-speed="1750" data-start="400" data-endspeed="800"><img src="images/homeslider/slide2_2.png" alt="Slide 2_2"></div>
                            <div class="tp-caption lfr ltr" data-x="380" data-y="50" data-speed="1800" data-start="250" data-endspeed="800"><img src="images/homeslider/slide2_1.png" alt="Slide 2_1"></div>
                        </li>
                        <li data-transition="fade" data-slotamount="4" data-masterspeed="600" data-saveperformance="on" data-title="More Features"><img src="images/revslider/dummy.png" alt="slidebg3" data-lazyload="images/homeslider/slide3.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption sfr str" data-x="24" data-y="bottom" data-speed="900" data-start="500" data-endspeed="300"><img src="images/homeslider/slide3_1.png" alt="Slide 3_1"></div>
                            <div class="tp-caption sfl stl" data-x="788" data-y="95" data-speed="1000" data-start="1200" data-endspeed="540"><img src="images/homeslider/slide3_3.png" alt="Slide 3_3"></div>
                            <div class="tp-caption sfl stl" data-x="700" data-y="260" data-speed="800" data-start="800" data-endspeed="420"><img src="images/homeslider/slide3_2.png" alt="Slide 3_2"></div>
                            <div class="tp-caption sfl stl" data-x="613" data-y="325" data-speed="600" data-start="400" data-endspeed="300"><img src="images/homeslider/slide3_4.png" alt="Slide 3_4"></div>
                            <div class="tp-caption rev-title sfr str" data-x="20" data-y="56" data-speed="600" data-start="1400" data-endspeed="200">CONTROL. NAVIGATE. BE RECOGNIZED.</div>
                            <div class="tp-caption rev-text long sfr str" data-x="20" data-y="110" data-speed="600" data-start="1650" data-endspeed="300">Smart Interaction lets you interact
                                <br>with your TV as never before.</div>
                            <div class="tp-caption sfr str" data-x="20" data-y="190" data-speed="600" data-start="1900" data-endspeed="400"><a href="#" class="btn btn-custom-2">Learn More</a></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="md-margin2x"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 col-xs-12 main-content">
                                <header class="content-title">
                                    <h2 class="title">Our Products</h2>
                                    <p class="title-desc">Save your money and time with our store. Here's the best part of our impressive assortment.</p>
                                </header>
                                <ul id="products-tabs-list" class="tab-style-1 clearfix">
                                    <li class="active"><a href="#all" data-toggle="tab">All</a></li>
                                    <li><a href="#latest" data-toggle="tab">Latest</a></li>
                                    <li><a href="#featured" data-toggle="tab">Featured</a></li>
                                    <li><a href="#bestsellers" data-toggle="tab">Bestsellers</a></li>
                                    <li><a href="#special" data-toggle="tab">Special</a></li>
                                </ul>
                                <div id="products-tabs-content" class="row tab-content">
                                    <div class="tab-pane active" id="all">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item5.jpg" alt="item1" class="item-image"> <img src="images/products/item5-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$210<span class="sub-price">.99</span></span> <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                    </div><span class="new-rect">New</span> <span class="discount-rect">-15%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="80"></div>
                                                        </div><span class="ratings-amount">5 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item6.jpg" alt="item1" class="item-image"> <img src="images/products/item6-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$199</span></div><span class="new-rect">New</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="74"></div>
                                                        </div><span class="ratings-amount">9 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item7.jpg" alt="item1" class="item-image"> <img src="images/products/item7-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$120<span class="sub-price">.99</span></span> <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                    </div><span class="discount-rect">-25%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="90"></div>
                                                        </div><span class="ratings-amount">4 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item10.jpg" alt="item1" class="item-image"> <img src="images/products/item10-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$180<span class="sub-price">.99</span></span>
                                                    </div>
                                                </div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container"></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item8.jpg" alt="item1" class="item-image"> <img src="images/products/item8-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$99<span class="sub-price">.99</span></span> <span class="item-price">$84<span class="sub-price">.99</span></span>
                                                    </div><span class="discount-rect">-20%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="70"></div>
                                                        </div><span class="ratings-amount">6 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item9.jpg" alt="item1" class="item-image"> <img src="images/products/item9-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$49<span class="sub-price">.99</span></span>
                                                    </div><span class="new-rect">New</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="60"></div>
                                                        </div><span class="ratings-amount">2 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="latest">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item2.jpg" alt="item1" class="item-image"> <img src="images/products/item2-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$160<span class="sub-price">.99</span></span>
                                                    </div><span class="new-rect">New</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="80"></div>
                                                        </div><span class="ratings-amount">5 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item3.jpg" alt="item1" class="item-image"> <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$200</span></div><span class="discount-rect">-10%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="74"></div>
                                                        </div><span class="ratings-amount">9 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item5.jpg" alt="item1" class="item-image"> <img src="images/products/item5-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$120<span class="sub-price">.99</span></span> <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                    </div><span class="new-rect">New</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="96"></div>
                                                        </div><span class="ratings-amount">5 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item3.jpg" alt="item1" class="item-image"> <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$99<span class="sub-price">.99</span></span>
                                                    </div>
                                                </div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container"></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item7.jpg" alt="item1" class="item-image"> <img src="images/products/item7-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$99<span class="sub-price">.99</span></span> <span class="item-price">$84<span class="sub-price">.99</span></span>
                                                    </div><span class="discount-rect">-30%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="70"></div>
                                                        </div><span class="ratings-amount">6 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item5.jpg" alt="item1" class="item-image"> <img src="images/products/item5-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$49<span class="sub-price">.99</span></span>
                                                    </div>
                                                </div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="60"></div>
                                                        </div><span class="ratings-amount">2 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="featured">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item1.jpg" alt="item1" class="item-image"> <img src="images/products/item1-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$210<span class="sub-price">.99</span></span> <span class="item-price">$140<span class="sub-price">.99</span></span>
                                                    </div><span class="new-rect">New</span> <span class="discount-rect">-25%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="50"></div>
                                                        </div><span class="ratings-amount">3 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item4.jpg" alt="item1" class="item-image"> <img src="images/products/item4-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$399</span></div><span class="new-rect">New</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="100"></div>
                                                        </div><span class="ratings-amount">7 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item8.jpg" alt="item1" class="item-image"> <img src="images/products/item8-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$120<span class="sub-price">.99</span></span> <span class="item-price">$89<span class="sub-price">.99</span></span>
                                                    </div><span class="discount-rect">-35%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="50"></div>
                                                        </div><span class="ratings-amount">2 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item10.jpg" alt="item1" class="item-image"> <img src="images/products/item10-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$180<span class="sub-price">.99</span></span>
                                                    </div>
                                                </div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container"></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item6.jpg" alt="item1" class="item-image"> <img src="images/products/item6-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$99<span class="sub-price">.99</span></span> <span class="item-price">$84<span class="sub-price">.99</span></span>
                                                    </div><span class="discount-rect">-20%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="70"></div>
                                                        </div><span class="ratings-amount">6 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item5.jpg" alt="item1" class="item-image"> <img src="images/products/item5-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$49<span class="sub-price">.99</span></span>
                                                    </div><span class="new-rect">New</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="60"></div>
                                                        </div><span class="ratings-amount">2 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="bestsellers">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item3.jpg" alt="item1" class="item-image"> <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$210<span class="sub-price">.99</span></span> <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                    </div><span class="new-rect">New</span> <span class="discount-rect">-15%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="80"></div>
                                                        </div><span class="ratings-amount">5 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item4.jpg" alt="item1" class="item-image"> <img src="images/products/item4-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$199</span></div><span class="new-rect">New</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="74"></div>
                                                        </div><span class="ratings-amount">9 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item2.jpg" alt="item1" class="item-image"> <img src="images/products/item2-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$180<span class="sub-price">.99</span></span> <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                    </div><span class="discount-rect">-50%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="90"></div>
                                                        </div><span class="ratings-amount">4 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item9.jpg" alt="item1" class="item-image"> <img src="images/products/item9-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$180<span class="sub-price">.99</span></span>
                                                    </div>
                                                </div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container"></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item5.jpg" alt="item1" class="item-image"> <img src="images/products/item5-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$99<span class="sub-price">.99</span></span> <span class="item-price">$84<span class="sub-price">.99</span></span>
                                                    </div><span class="discount-rect">-20%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="70"></div>
                                                        </div><span class="ratings-amount">6 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item3.jpg" alt="item1" class="item-image"> <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$99<span class="sub-price">.99</span></span>
                                                    </div><span class="new-rect">New</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="60"></div>
                                                        </div><span class="ratings-amount">2 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="special">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item2.jpg" alt="item1" class="item-image"> <img src="images/products/item2-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$210<span class="sub-price">.99</span></span> <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                    </div><span class="new-rect">New</span> <span class="discount-rect">-15%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="80"></div>
                                                        </div><span class="ratings-amount">5 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item1.jpg" alt="item1" class="item-image"> <img src="images/products/item1-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$199</span></div><span class="new-rect">New</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="74"></div>
                                                        </div><span class="ratings-amount">9 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item4.jpg" alt="item1" class="item-image"> <img src="images/products/item4-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$120<span class="sub-price">.99</span></span> <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                    </div><span class="discount-rect">-25%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="90"></div>
                                                        </div><span class="ratings-amount">4 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item10.jpg" alt="item1" class="item-image"> <img src="images/products/item10-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$180<span class="sub-price">.99</span></span>
                                                    </div>
                                                </div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container"></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item6.jpg" alt="item1" class="item-image"> <img src="images/products/item6-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="old-price">$99<span class="sub-price">.99</span></span> <span class="item-price">$84<span class="sub-price">.99</span></span>
                                                    </div><span class="discount-rect">-20%</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="70"></div>
                                                        </div><span class="ratings-amount">6 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="product.html"><img src="images/products/item9.jpg" alt="item1" class="item-image"> <img src="images/products/item9-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                    </figure>
                                                    <div class="item-price-container"><span class="item-price">$49<span class="sub-price">.99</span></span>
                                                    </div><span class="new-rect">New</span></div>
                                                <div class="item-meta-container">
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="60"></div>
                                                        </div><span class="ratings-amount">2 Reviews</span></div>
                                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                    <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                        <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm-margin"></div>
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <header class="content-title">
                                            <h2 class="title">Welcome to Venedor</h2></header>
                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venedor is a fully responsive Magento theme with advanced admin module. Based on Bootstrap’s 12 column 1200px responsive grid Theme. Great looks on desktops, tablets and mobiles.
                                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venedor is extremely customizable, easy to use and fully responsive. Suitable for every type of store. Great as a starting point for your custom projects. This theme includes several extensions including ajax price slider that will help you improve your sales. We supply a full help with our products and after purchase support to all our customers. <a href="#">Buy Venedor Theme!</a></p>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="sm-margin visible-xs"></div><img src="images/showcase.png" alt="Showcase Venedor" class="img-responsive"></div>
                                </div>
                                <div class="xlg-margin"></div>
                                <div class="hot-items carousel-wrapper">
                                    <header class="content-title">
                                        <div class="title-bg">
                                            <h2 class="title">On Sale</h2></div>
                                        <p class="title-desc">Only with us you can get a new model with a discount.</p>
                                    </header>
                                    <div class="carousel-controls">
                                        <div id="hot-items-slider-prev" class="carousel-btn carousel-btn-prev"></div>
                                        <div id="hot-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div>
                                    </div>
                                    <div class="hot-items-slider owl-carousel">
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container">
                                                    <a href="product.html"><img src="images/products/item2.jpg" alt="item1" class="item-image"> <img src="images/products/item2-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                </figure>
                                                <div class="item-price-container"><span class="item-price">$160<span class="sub-price">.99</span></span>
                                                </div><span class="new-rect">New</span></div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="80"></div>
                                                    </div><span class="ratings-amount">5 Reviews</span></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                    <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container">
                                                    <a href="product.html"><img src="images/products/item3.jpg" alt="item1" class="item-image"> <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                </figure>
                                                <div class="item-price-container"><span class="item-price">$100</span></div><span class="new-rect">New</span></div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="99"></div>
                                                    </div><span class="ratings-amount">4 Reviews</span></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                    <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container">
                                                    <a href="product.html"><img src="images/products/item8.jpg" alt="item1" class="item-image"> <img src="images/products/item8-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                </figure>
                                                <div class="item-price-container"><span class="old-price">$100</span> <span class="item-price">$80</span></div><span class="discount-rect">-20%</span></div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="75"></div>
                                                    </div><span class="ratings-amount">2 Reviews</span></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                    <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container">
                                                    <a href="product.html"><img src="images/products/item5.jpg" alt="item1" class="item-image"> <img src="images/products/item5-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                </figure>
                                                <div class="item-price-container"><span class="item-price">$99</span></div><span class="new-rect">New</span></div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="40"></div>
                                                    </div><span class="ratings-amount">3 Reviews</span></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                    <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item item-hover">
                                            <div class="item-image-wrapper">
                                                <figure class="item-image-container">
                                                    <a href="product.html"><img src="images/products/item7.jpg" alt="item1" class="item-image"> <img src="images/products/item7-hover.jpg" alt="item1  Hover" class="item-image-hover"></a>
                                                </figure>
                                                <div class="item-price-container"><span class="item-price">$280</span></div>
                                            </div>
                                            <div class="item-meta-container">
                                                <div class="ratings-container"></div>
                                                <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                <div class="item-action"><a href="#" class="item-add-btn"><span class="icon-cart-text">Add to Cart</span></a>
                                                    <div class="item-action-inner"><a href="#" class="icon-button icon-like">Favourite</a> <a href="#" class="icon-button icon-compare">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg-margin"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12 sidebar">
                                <div class="widget subscribe">
                                    <h3>BE THE FIRST TO KNOW</h3>
                                    <p>Get all the latest information on Events, Sales and Offers. Sign up for the Venedor store newsletter today.</p>
                                    <form action="#" id="subscribe-form">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email address">
                                        </div>
                                        <input type="submit" value="SUBMIT" class="btn btn-custom">
                                    </form>
                                </div>
                                <div class="widget testimonials">
                                    <h3>Testimonials</h3>
                                    <div class="testimonials-slider flexslider sidebarslider">
                                        <ul class="testimonials-list clearfix">
                                            <li>
                                                <div class="testimonial-details">
                                                    <header>Best Service!</header>Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti.</div>
                                                <figure class="clearfix"><img src="images/testimonials/anna.jpg" alt="Computer Ceo">
                                                    <figcaption><a href="#">Anna Retallic</a> <span>12.05.2013</span></figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="testimonial-details">
                                                    <header>Cool Style!</header>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt iure quisquam necessitatibus fugit! Nisi tempora reiciendis omnis error sapiente ipsam maiores dolorem maxime.</div>
                                                <figure class="clearfix"><img src="images/testimonials/jake.jpg" alt="Computer Ceo">
                                                    <figcaption><a href="#">Jake Suasoo</a> <span>17.05.2013</span></figcaption>
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget latest-posts">
                                    <h3>Latest News</h3>
                                    <div class="latest-posts-slider flexslider sidebarslider">
                                        <ul class="latest-posts-list clearfix">
                                            <li>
                                                <a href="single.html">
                                                    <figure class="latest-posts-media-container"><img class="img-responsive" src="images/blog/post1-small.jpg" alt="lats post"></figure>
                                                </a>
                                                <h4><a href="single.html">35% Discount on second purchase!</a></h4>
                                                <p>Sed blandit nulla nec nunc ullamcorper tristique. Mauris adipiscing cursus ante ultricies dictum sed lobortis.</p>
                                                <div class="latest-posts-meta-container clearfix">
                                                    <div class="pull-left"><a href="#">Read More...</a></div>
                                                    <div class="pull-right">12.05.2013</div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="single.html">
                                                    <figure class="latest-posts-media-container"><img class="img-responsive" src="images/blog/post2-small.jpg" alt="lats post"></figure>
                                                </a>
                                                <h4><a href="single.html">Free shipping for regular customers.</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque fuga officia in molestiae easint..</p>
                                                <div class="latest-posts-meta-container clearfix">
                                                    <div class="pull-left"><a href="#">Read More...</a></div>
                                                    <div class="pull-right">10.05.2013</div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="single.html">
                                                    <figure class="latest-posts-media-container"><img class="img-responsive" src="images/blog/post3-small.jpg" alt="lats post"></figure>
                                                </a>
                                                <h4><a href="#">New jeans on sales!</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque fuga officia in molestiae easint..</p>
                                                <div class="latest-posts-meta-container clearfix">
                                                    <div class="pull-left"><a href="#">Read More...</a></div>
                                                    <div class="pull-right">8.05.2013</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget banner-slider-container">
                                    <div class="banner-slider flexslider">
                                        <ul class="banner-slider-list clearfix">
                                            <li>
                                                <a href="#"><img src="images/banner1.jpg" alt="Banner 1"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/banner2.jpg" alt="Banner 2"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/banner3.jpg" alt="Banner 3"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="brand-slider-container" class="carousel-wrapper">
                            <header class="content-title">
                                <div class="title-bg">
                                    <h2 class="title">Manufacturers</h2></div>
                            </header>
                            <div class="carousel-controls">
                                <div id="brand-slider-prev" class="carousel-btn carousel-btn-prev"></div>
                                <div id="brand-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div>
                            </div>
                            <div class="sm-margin"></div>
                            <div class="row">
                                <div class="brand-slider owl-carousel">
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 1"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 2"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 3"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 4"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 5"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 6"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 7"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 8"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 9"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 10"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 11"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 12"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 13"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 14"></a>
                                    <a href="#"><img src="images/brands/brand-logo.png" alt="Brand Logo 15"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div id="twitterfeed-container">
                <div class="container">
                    <div class="row">
                        <div class="twitterfeed col-md-12">
                            <div class="twitter-icon"><i class="fa fa-twitter"></i></div>
                            <div class="row">
                                <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                                    <div class="twitter_feed flexslider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="inner-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>MY ACCOUNT</h3>
                            <ul class="links">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Personal information</a></li>
                                <li><a href="#">Addresses</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Your Vouchers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>INFORMATION</h3>
                            <ul class="links">
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Top sellers</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Our stores</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>MY ACCOUNT</h3>
                            <ul class="contact-list">
                                <li><strong>Venedor Ltd</strong></li>
                                <li>United Kingdom</li>
                                <li>Greater London</li>
                                <li>London 02587</li>
                                <li>Oxford Street 48/188</li>
                                <li>Working Days: Mon. - Sun.</li>
                                <li>Working Hours: 9.00AM - 8.00PM</li>
                            </ul>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <div class="col-md-3 col-sm-12 col-xs-12 widget">
                            <h3>FACEBOOK LIKE BOX</h3>
                            <div class="facebook-likebox">
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
                            <ul class="social-links clearfix">
                                <li>
                                    <a href="#" class="social-icon icon-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon icon-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon icon-rss"></a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon icon-delicious"></a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon icon-linkedin"></a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon icon-flickr"></a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon icon-skype"></a>
                                </li>
                                <li>
                                    <a href="#" class="social-icon icon-email"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
                            <p>&copy; 2014 Powered by Company&trade;. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div><a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a>
    
    <?php $this->registerJs('$("#slider-rev").revolution({
                delay: 8e3,
                startwidth: 1170,
                startheight: 600,
                onHoverStop: "true",
                hideThumbs: 250,
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 0,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 0,
                soloArrowRightVOffset: 0,
                touchenabled: "on",
                stopAtSlide: -1,
                stopAfterLoops: -1,
                dottedOverlay: "none",
                fullWidth: "on",
                spinned: "spinner5",
                shadow: 0,
                hideTimerBar: "on"
            })')?>



<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
