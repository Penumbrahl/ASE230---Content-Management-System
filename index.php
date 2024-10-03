
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>GrooveNest - Modern Music Blog</title>

    <!-- favicon -->
    <link rel="icon" href="demo-landing/img/favicon.png">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- search popup area start -->
    <div class="search-popup" id="search-popup">
        <form action="home.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->
    <div class="body-overlay" id="body-overlay"></div>

    <header id="theme-header-one" class="header-style-one">	
		<div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-6">
                        <div class="header-weather"><i class="fa fa-weather"></i>   60°F</div> <!--update date and weather with PHP-->                 
                        <div class="header-date">August 6, 2022</div>
                    </div>
                    <div class="col-md-6 col-sm-6 text-end">
                        <div class="htop_social">
                            <a href="#" class="social-list__link"><i class="fa fa-facebook-f"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </header>

    <!-- navbar start -->
    <div class="navbar-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <a class="main-logo" href="home.html"><img src="assets/img/logo.png" alt="img"></a>
                <div class="responsive-mobile-menu">
                    <div class="logo d-lg-none d-block">
                        <a class="main-logo" href="home.html"><img src="assets/img/logo.png" alt="img"></a>
                    </div>
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#miralax_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="miralax_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="home.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a href="index-3.html">Home 03</a></li>
                                <li><a href="index-4.html">Home 04</a></li>
                            </ul>
                        </li>
                        <li><a href="blog-category.html">Business</a></li>
                        <li><a href="blog-category.html">Politics</a></li>
                        <li><a href="blog-category.html">Tech</a></li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Features</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog Layout</a></li>
                                <li><a href="blog-category.html">Category Layout</a></li>
                                <li><a href="blog-details.html">Post Layout</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

    <div class="container">
        <div class="braking-news-area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="braking-news-wrap">
                        <span>Breaking News</span>
                        <div class="marquee">
                            <p>In the news: small businesses for expect revenue growth in 2022.</p>
                            <div class="breaking-news-post-date">March 16</div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    <!-- post-banner start -->
    <div class="post-banner-area pd-top-30">
        <div class="container-fluid p-0">
            <div class="post-banner-slider owl-carousel">
                <div class="item">
                    <div class="top-post-wrap mb-0">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img src="assets/img/banner/1.jpg" alt="img">
                        </div>
                        <div class="top-post-details">
                            <a class="tag top-right tag-pest" href="#">Business</a>
                            <h2><a href="blog-category.html">In the news: small businesses for expect revenue growth in 2022.</a></h2>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="assets/img/banner/user.jpeg" alt="img">
                                    </div>
                                    <a href="#">Stiven Jackson</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						                Mar 16, 2022						
                                </div>
                                <div class="comment">
                                    <i class="fa fa-comment-o"></i>0
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="top-post-wrap mb-0">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img src="assets/img/banner/2.jpg" alt="img">
                        </div>
                        <div class="top-post-details">
                            <a class="tag top-right tag-purple" href="#">Marketing</a>
                            <h2><a href="blog-category.html">B2B cmos plan 2022 spending that rise, influencer marketing’s.</a></h2>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="assets/img/banner/user.jpeg" alt="img">
                                    </div>
                                    <a href="#">Stiven Jackson</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						                Mar 16, 2022						
                                </div>
                                <div class="comment">
                                    <i class="fa fa-comment-o"></i>0
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- post-banner end -->

    <div class="top-news-area pd-top-107 pd-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Business</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="assets/img/blog/business-people.jpg" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-pest" href="#">Business</a>
                                    <h4><a href="blog-category.html">In the news: small businesses for expect revenue growth in 2022.</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="assets/img/banner/user.jpeg" alt="img">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022						
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="assets/img/blog/planning.jpg" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-purple" href="#">Marketing</a>
                                    <h4><a href="blog-category.html">B2B cmos plan 2022 spending that rise, influencer marketing’s.</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="assets/img/banner/user.jpeg" alt="img">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022						
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="assets/img/blog/rich-man.jpg" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-yellow" href="#">Technology</a>
                                    <h4><a href="blog-category.html">International breweries applicate from young entrepreneurs.</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="assets/img/banner/user.jpeg" alt="img">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022						
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="assets/img/blog/advertisement.jpg" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-green" href="#">Travel</a>
                                    <h4><a href="blog-category.html">Elf programmatic advertising our trends going on 2022.</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="assets/img/banner/user.jpeg" alt="img">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022						
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Featured Posts</h4>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/obama.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Obama avoids crowds outside Edinburgh charity dinner.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/parliament-img.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Imagination is more important than knowledge buildup.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/paper-thumb.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Apollo astronauts harmed by a the deep space radiation.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/neon-light.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="post-list-small-wrapper">
                        <div class="section-title pb-0">
                            <h4 class="title">Weekly Post</h4>
                        </div>
                        <div class="post-grid-slider owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/blog/1.jpg" alt="img">
                                </div>
                                <div class="details">
                                    <p>When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked.</p>
                                    <div class="meta d-flex">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="assets/img/banner/user.jpeg" alt="img">
                                            </div>
                                            <a href="#">Stiven Jackson</a>
                                        </div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                                Mar 16, 2022						
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/blog/2.png" alt="img">
                                </div>
                                <div class="details">
                                    <p>When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked.</p>
                                    <div class="meta d-flex">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="assets/img/banner/user.jpeg" alt="img">
                                            </div>
                                            <a href="#">Stiven Jackson</a>
                                        </div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                                Mar 16, 2022						
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/blog/3.png" alt="img">
                                </div>
                                <div class="details">
                                    <p>When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked.</p>
                                    <div class="meta d-flex">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="assets/img/banner/user.jpeg" alt="img">
                                            </div>
                                            <a href="#">Stiven Jackson</a>
                                        </div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                                Mar 16, 2022						
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/blog/4.png" alt="img">
                                </div>
                                <div class="details">
                                    <p>When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked.</p>
                                    <div class="meta d-flex">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="assets/img/banner/user.jpeg" alt="img">
                                            </div>
                                            <a href="#">Stiven Jackson</a>
                                        </div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                                Mar 16, 2022						
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

    <div class="ad-area pd-bottom-40">
        <div class="container">
            <a class="w-100" href="#"><img src="assets/img/ad/kiante-ads.png" alt="img"></a>
        </div>
    </div>

    <div class="top-news-area pd-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Business</h4>
                    </div>
                    <div class="media-post-wrap mg-bottom-40">
                        <div class="thumb mb-4">
                            <img class="w-100" src="assets/img/blog/country-parliament.jpg" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-purple" href="#">Politics</a>
                            <h2><a href="blog-category.html">Julian Assange charged in US, court document for an accidentally reveals changing the technology.</a></h2>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="assets/img/banner/user.jpeg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022						
                            </div>
                            <div class="comment">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="media-post-wrap-3 media">
                                <div class="thumb">
                                    <img src="assets/img/blog/techboy.jpg" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="blog-category.html">Intel’s horseshoe bend concept is a look at the future of foldable.</a></h6>
                                    <div class="meta d-flex">
                                        <div class="tag"><a href="#">Technology</a></div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            July 12, 2021
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap-3 media">
                                <div class="thumb">
                                    <img src="assets/img/blog/social-cut.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h6>
                                    <div class="meta d-flex">
                                        <div class="tag"><a href="#">Technology</a></div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            July 12, 2021
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap-3 media">
                                <div class="thumb">
                                    <img src="assets/img/blog/richman.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="blog-category.html">International breweries applicate from young entrepreneurs.</a></h6>
                                    <div class="meta d-flex">
                                        <div class="tag"><a href="#">Technology</a></div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            July 12, 2021
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap-3 media">
                                <div class="thumb">
                                    <img src="assets/img/blog/business.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="blog-category.html">In the news: small businesses for expect revenue growth in 2022.</a></h6>
                                    <div class="meta d-flex">
                                        <div class="tag"><a href="#">Business</a></div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            July 12, 2021
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-title pb-0 pd-top-80">
                        <h4 class="title left-line">Videos</h4>
                    </div>
                    <div class="video-area">
                        <div class="top-post-wrap">
                            <div class="thumb">
                                <img src="assets/img/blog/nature.jpg" alt="img" style="opacity: 1;">
                                <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="assets/img/icon/play.png" alt="img"></a>
                            </div>
                            <div class="top-post-details">
                                <a class="tag top-right tag-green" href="#">Travel</a>
                                <h2><a href="blog-category.html">I find that the harder I work, the more luck I seem to have.</a></h2>
                                <div class="meta mt-2">
                                    <div class="user">
                                        <div class="thumb">
                                            <img src="assets/img/banner/user.jpeg" alt="img" style="opacity: 1;">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022						
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="top-post-wrap mb-0">
                                    <div class="thumb">
                                        <img src="assets/img/blog/protest.jpg" alt="img" style="opacity: 1;">
                                        <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="assets/img/icon/play.png" alt="img"></a>
                                    </div>
                                    <div class="top-post-details">
                                        <a class="tag top-right tag-purple" href="#">Politics</a>
                                        <h4><a href="blog-category.html">Huge glacier collapses in Arge.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="top-post-wrap mb-0">
                                    <div class="thumb">
                                        <img src="assets/img/blog/footballer.jpg" alt="img" style="opacity: 1;">
                                        <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="assets/img/icon/play.png" alt="img"></a>
                                    </div>
                                    <div class="top-post-details">
                                        <a class="tag top-right tag-blue" href="#">Sports</a>
                                        <h4><a href="blog-category.html">Madrid Hope To Beat Malaga.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Social Media</h4>
                    </div>
                    <ul class="social-wrap">
                        <li class="ms-0"><a href="#"><img src="assets/img/icon/facebook.svg" alt="img"></a></li>
                        <li class="me-0"><a href="#"><img src="assets/img/icon/twitter.svg" alt="img"></a></li>
                        <li class="ms-0"><a href="#"><img src="assets/img/icon/instagram.svg" alt="img"></a></li>
                        <li class="me-0"><a href="#"><img src="assets/img/icon/pinterestsvg.svg" alt="img"></a></li>
                    </ul>
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Popular Posts</h4>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/techboy.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Intel’s horseshoe bend concept is a look at the future of foldable.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Technology</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/obama.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Obama avoids crowds outside Edinburgh charity dinner.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/paper-thumb.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Apollo astronauts harmed by a the deep space radiation.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/social-cut.png" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Technology</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="widget widget_tags mt-5">
                        <div class="section-title pb-0">
                            <h4 class="title left-line widget-title">Tags</h4>
                        </div>
                        <div class="tagcloud">
                            <a href="#">Business</a>
                            <a href="#">Digital Marketing</a>
                            <a href="#">Lifestyle</a>
                            <a href="#">Sports</a>
                            <a href="#">Technology</a>
                            <a href="#">Travel</a>
                            <a href="#">Trendy</a>
                            <a href="#">World</a>
                        </div>
                    </div>
                    <div class="ad-area pd-top-90">
                        <a href="#">
                            <img src="assets/img/ad/add.png" alt="img">
                        </a>
                    </div>
                    <div class="widget widget_list mt-5">
                        <div class="section-title pb-0">
                            <h4 class="title left-line widget-title">Category list</h4>
                        </div>
                        <ul class="list-inner">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Motivation</a></li>
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Travel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pd-top-70 pd-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="title left-line">Don't Miss</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media-post-wrap">
                        <div class="thumb mb-4">
                            <img src="assets/img/blog/social-1.png" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-yellow" href="#">Technology</a>
                            <h4><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h4>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="assets/img/banner/user.jpeg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date ms-auto">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022						
                            </div>
                            <div class="comment ms-auto">
                                0
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media-post-wrap">
                        <div class="thumb mb-4">
                            <img src="assets/img/blog/playing-2.jpg" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-blue" href="#">Sports</a>
                            <h4><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h4>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="assets/img/banner/user.jpeg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date ms-auto">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022						
                            </div>
                            <div class="comment ms-auto">
                                0
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media-post-wrap">
                        <div class="thumb mb-4">
                            <img src="assets/img/blog/neon-light-1.jpg" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-red" href="#">Motivation</a>
                            <h4><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h4>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="assets/img/banner/user.jpeg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date ms-auto">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022						
                            </div>
                            <div class="comment ms-auto">
                                0
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="subscribe-area" style="background-image: url(assets/img/ad/Subscribe-Box.png);">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title p-0">
                        <h2>Subscribe To Kiante</h2>
                        <p>Signup for our Newsletter and stay informed</p>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="subscribe-inner">
                        <input type="text" placeholder="Enter Email address">
                        <button>Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area start -->
    <footer class="footer-area pd-top-80">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="widget widget_about">
                            <div class="logo">
                                Kiante
                            </div>
                            <p class="text-white">The stars will never align, and the traffic lights of life will never all be green at the same time.The stars will never align.</p>
                            <ul>
                                <li><span>Email</span> : info@example.com</li>
                                <li><span>Phone</span> : 00249 123 333 719</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <h5 class="widget-title">Quick Links</h5>
                        <div class="widget widget_link">
                            <ul>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Motivation</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Technology</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <h5 class="widget-title">Entertainment</h5>
                        <div class="widget widget_link">
                            <ul>
                                <li><a href="#">Hollywood
                                </a></li>
                                <li><a href="#">Music
                                </a></li>
                                <li><a href="#">Videos
                                </a></li>
                                <li><a href="#">TV News
                                </a></li>
                                <li><a href="#">Celebrity News
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <h5 class="widget-title">Overview</h5>
                        <div class="widget widget_link">
                            <ul>
                                <li><a href="#">Business
                                </a></li>
                                <li><a href="#">About
                                </a></li>
                                <li><a href="#">Contact
                                </a></li>
                                <li><a href="#">Blog
                                </a></li>
                                <li><a href="#">Marketing
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <p>Copyright © Kiante 2022. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-long-arrow-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- all plugins here -->
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>
</html>