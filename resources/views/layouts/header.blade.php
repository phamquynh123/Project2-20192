<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from kodeforest.net/html/books/library/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 22 Oct 2019 02:52:11 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Book Library </title>
<!-- CUSTOM STYLE -->
<link href="{{ asset('bower_components/css/style.css') }}" rel="stylesheet">
<!-- THEME TYPO -->
<link href="{{ asset('bower_components/css/themetypo.css') }}" rel="stylesheet">
<!-- SHORTCODES -->
<link href="{{ asset('bower_components/css/shortcode.css') }}" rel="stylesheet">
<!-- BOOTSTRAP -->
<link href="{{ asset('bower_components/css/bootstrap.css') }}" rel="stylesheet">
<!-- COLOR FILE -->
<link href="{{ asset('bower_components/css/color.css') }}" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="{{ asset('bower_components/css/font-awesome.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('bower_components/fontawesome/css/all.min.css') }}">
<!-- BX SLIDER -->
<link href="{{ asset('bower_components/css/jquery.bxslider.css') }}" rel="stylesheet">
<!-- Boostrap Slider -->
<link href="{{ asset('bower_components/css/bootstrap-slider.css') }}" rel="stylesheet">
<!-- Widgets -->
<link href="{{ asset('bower_components/css/widget.css') }}" rel="stylesheet">
<!-- Owl Carusel -->
<link href="{{ asset('bower_components/css/owl.carousel.css') }}" rel="stylesheet">
<!-- responsive -->
<link href="{{ asset('bower_components/css/responsive.css') }}" rel="stylesheet">
<!-- Component -->
<link href="{{ asset('bower_components/js/dl-menu/component.css') }}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset('bower_component/css/bookblock.css') }}" />
@routes
@yield('css')
</head>
<body>
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!--WRAPPER START-->
<div class="wrapper">
    <!--HEADER START-->
    <header class="header-1">
        <div class="top-strip">
            <div class="container">
                <div class="pull-left">
                    <p>Welcome to Library theme</p>
                </div>
                <ul class="my-account">
                        <li><a href="#"><i class="fa fa-list"></i> Wishlist</a></li>
                        <li><a href="#"><i class="far fa-user"></i></i> My Account</a></li>
                        <li><a href="#"><i class="fa fa-compress"></i> Compare</a></li>
                        <li><a href="#"><i class="fa fa-sign-in"></i> Login</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i> 0Item</a></li>                        
                    </ul>
            </div>
        </div>
        <div class="logo-container">
            <div class="container">
                <!--LOGO START-->
                <div class="logo">
                    <a href="#"><img src="{{ asset('bower_components/images/logo-2.png') }}" alt=""></a>
                </div>
                <!--LOGO END-->
                <div class="kode-navigation">
                    <ul>
                        <li><a href="index-2.html">Home</a>
                            <ul>
                                <li><a href="index-1.html">Home page 1</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="books.html">Our Books</a>
                            <ul>
                                <li><a href="books3-sidebar.html">Book With Sidebar</a></li>
                                <li><a href="books-detail.html">Book Detail</a></li>                                
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog-2column.html">Blog 2 Column</a></li>
                                <li><a href="blog-full.html">Blog Full</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul>
                        </li>
                        <li><a href="authors.html">Authors</a>
                            <ul>
                                <li><a href="authors.html">Authors</a></li>
                                <li><a href="author-detail.html">Authors Detail</a></li>                                        
                            </ul>
                        </li>
                        <li class="last"><a href="#">Events</a>
                            <ul>
                                <li><a href="events-2column.html">Event 2 Column</a></li>
                                <li><a href="events-3column.html">Event 3 Column</a></li>
                                <li><a href="event-full.html">Event Single</a></li>
                                <li><a href="event-detail.html">Event Detail</a></li>
                            </ul>
                        </li>
                        
                        <li class="last"><a href="#">Pages</a>
                            <ul class="children">
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="coming-soon.html">Comming Soon</a></li>
                                <li class="last"><a href="gallery-2col.html">Gallery</a>
                                    <ul>
                                        <li><a href="gallery-2col.html">Gallery 2 Col</a></li>
                                        <li><a href="gallery-3col.html">Gallery 3 Col</a></li>
                                        <li><a href="gallery-4col.html">Gallery 4 Col</a></li>    
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="last"><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <div id="kode-responsive-navigation" class="dl-menuwrapper">
                    <button class="dl-trigger">Open Menu</button>
                    <ul class="dl-menu">
                        <li class="menu-item kode-parent-menu"><a href="index-2.html">Home</a>
                            <ul class="dl-submenu">
                                <li><a href="index-1.html">Home page 1</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li class="menu-item kode-parent-menu"><a href="books.html">Our Books</a>
                            <ul class="dl-submenu">
                                <li><a href="books3-sidebar.html">Book With Sidebar</a></li>
                                <li><a href="books-detail.html">Book Detail</a></li>                                
                            </ul>
                        </li>
                        <li class="menu-item kode-parent-menu"><a href="blog.html">Blog</a>
                            <ul class="dl-submenu">
                                <li><a href="blog-2column.html">Blog 2 Column</a></li>
                                <li><a href="blog-full.html">Blog Full</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul>
                        </li>
                        <li><a href="authors.html">Authors</a></li>
                        <li class="menu-item kode-parent-menu last"><a href="#">Events</a>
                            <ul class="dl-submenu">
                                <li><a href="events-2column.html">Event 2 Column</a></li>
                                <li><a href="events-3column.html">Event 3 Column</a></li>
                                <li><a href="event-full.html">Event Single</a></li>
                                <li><a href="event-detail.html">Event Detail</a></li>
                            </ul>
                        </li>
                        <li class="menu-item kode-parent-menu last"><a href="#">Pages</a>
                            <ul class="dl-submenu">
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="coming-soon.html">Comming Soon</a></li>
                                <li class="menu-item kode-parent-menu last"><a href="gallery-2col.html">Gallery</a>
                                    <ul class="dl-submenu">
                                        <li><a href="gallery-2col.html">Gallery 2 Col</a></li>
                                        <li><a href="gallery-3col.html">Gallery 3 Col</a></li>
                                        <li><a href="gallery-4col.html">Gallery 4 Col</a></li>    
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="last"><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--HEADER END-->
    <!--BANNER START-->
    <div class="kode-banner">
        <ul class="bxslider">
            <li>
                <img src="{{ asset('bower_components/images/banner-1.png') }}" alt="">
                <div class="kode-caption-2">
                    <h5>Are you searching a book...?</h5>
                    <h2>Biggest Library</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor emque laudantium, totam rem aperiam.ipsam voluptatem.</p>
                    <div class="caption-btns">
                        <a href="#">See More</a>
                        <a href="#">Buy Now</a>
                    </div>                  
                </div>
            </li>
            <li>
                <img src="{{ asset('bower_components/images/banner-2.png') }}" alt="">
                <div class="kode-caption-2">
                    <h5>Are you searching a book...?</h5>
                    <h2>Biggest Library</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor emque laudantium, totam rem aperiam.ipsam voluptatem.</p>
                    <div class="caption-btns">
                        <a href="#">See More</a>
                        <a href="#">Buy Now</a>
                    </div>                  
                </div>
            </li>
            <li>
                <img src="{{ asset('bower_components/images/banner-3.png') }}" alt="">
                <div class="kode-caption-2">
                    <h5>Are you searching a book...?</h5>
                    <h2>Biggest Library</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor emque laudantium, totam rem aperiam.ipsam voluptatem.</p>
                    <div class="caption-btns">
                        <a href="#">See More</a>
                        <a href="#">Buy Now</a>
                    </div>                  
                </div>
            </li>
        </ul>
    </div>
    <!--BANNER END-->
    <!--BUT NOW START-->
    <div class="search-section">
        <div class="container">
            <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="#Basic" aria-controls="Basic" role="tab" data-toggle="tab">Basic</a></li>
                <li role="presentation" class="active"><a href="#Author" aria-controls="Author" role="tab" data-toggle="tab">Author</a></li>
                <li role="presentation"><a href="#Publications" aria-controls="Publications" role="tab" data-toggle="tab">Publications</a></li>
              </ul>
            
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="Basic">
                    <div class="form-container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <input type="text" placeholder="First Name">
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <input type="text" placeholder="Middle Name">
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <input type="text" placeholder="Last Name">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button>Search Author</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="Author">
                    <div class="form-container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <input type="text" placeholder="First Name">
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <input type="text" placeholder="Middle Name">
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <input type="text" placeholder="Last Name">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button>Search Author</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="Publications">
                    <div class="form-container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <input type="text" placeholder="First Name">
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <input type="text" placeholder="Middle Name">
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <input type="text" placeholder="Last Name">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button>Search Author</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
    <!--BUT NOW END-->
    <!--CONTENT START-->
    <div class="kode-content">
        
        <!--BOOK GUIDE SECTION START-->
        @yield('BOOKGUIDE')
        <!--BOOK GUIDE SECTION END-->
        <!--TOP CATEGORY SECTION START-->
        @yield('home.category')
        <!--TOP SELLERS SECTION END-->
        <section>
            <div class="container">
                <div class="section-heading-1">
                    <h2>Free Books To Read (Text Base)</h2>
                    <p>The Most Popular Books Today are available in Book Library</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <div class="bb-custom-wrapper">
                    <div id="bb-bookblock" class="bb-bookblock">
                        <div class="bb-item">
                            <div class="bb-custom-side">
                                <h3>Chepter 1</h3>
                                <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>
                            </div>
                            <div class="bb-custom-side">
                                <h3>Chepter 2</h3>
                                <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p><p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>
                            </div>
                        </div>
                        <div class="bb-item">
                            <div class="bb-custom-side">
                                <h3>Chepter 3</h3>
                                <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>
                            </div>
                            <div class="bb-custom-side">
                                <h3>Chepter 4</h3>
                                <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p><p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>
                            </div>
                        </div>
                        <div class="bb-item">
                            <div class="bb-custom-side">
                                <h3>Chepter 5</h3>
                                <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>
                            </div>
                            <div class="bb-custom-side">
                                <h3>Chepter 6</h3>
                                <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p><p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>
                            </div>
                        </div>
                        <div class="bb-item">
                            <div class="bb-custom-side">
                                <h3>Chepter 7</h3>
                                <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>
                            </div>
                            <div class="bb-custom-side">
                                <h3>Chepter 8</h3>
                                <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p><p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>
                            </div>
                        </div>
                        <div class="bb-item">
                            <div class="bb-custom-side">
                                <h3>Chepter 9</h3>
                                <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>
                            </div>
                            <div class="bb-custom-side">
                                <h3>Chepter 10</h3>
                                <p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p><p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie. Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>
                            </div>
                        </div>
                    </div>

                    <nav>
                        <a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
                        <a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
                    </nav>
                </div>
            </div>
        </section>
        <!--VIDEO SECTION START-->
        <section class="lib-call-to-action">
            <div class="container">
                <h2>Checkout Huge Feature lists</h2>
                <p>Here are some of the Exciting Book Guide Features.</p>
                <a href="#" class="more">Learn more</a>
            </div>
        </section>
        <!--VIDEO SECTION END-->
        <!--BEST SELLER SLIDER SECTION START-->
        <section class="lib-papular-books">
            <div class="container">
                <!--SECTION CONTENT START-->
                <div class="section-heading-1">
                    <h2>Most Popular Books</h2>
                    <p>The Most Popular Books Today are available in Book Library</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <div class="row">
                    <!--SECTION CONTENT END-->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active col-md-4 col-sm-3">
                            <a href="#book1" aria-controls="book1" role="tab" data-toggle="tab">
                                <div class="lib-papular-thumb">
                                    <img src="images/papular-books2.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li role="presentation" class="col-md-4 col-sm-3">
                            <a href="#book2" aria-controls="book2" role="tab" data-toggle="tab">
                                <div class="lib-papular-thumb">
                                    <img src="images/papular-books3.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li role="presentation" class="col-md-4 col-sm-3">
                            <a href="#book3" aria-controls="book3" role="tab" data-toggle="tab">
                                <div class="lib-papular-thumb">
                                    <img src="images/papular-books4.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li role="presentation" class="col-md-4 col-sm-3">
                            <a href="#book4" aria-controls="book4" role="tab" data-toggle="tab">
                                <div class="lib-papular-thumb">
                                    <img src="images/papular-books5.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li role="presentation" class="col-md-4 col-sm-3 visible-lg visible-md">
                            <a href="#book5" aria-controls="book5" role="tab" data-toggle="tab">
                                <div class="lib-papular-thumb">
                                    <img src="images/papular-books6.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li role="presentation" class="col-md-4 col-sm-3 visible-lg visible-md">
                            <a href="#book6" aria-controls="book6" role="tab" data-toggle="tab">
                                <div class="lib-papular-thumb">
                                    <img src="images/papular-books7.png" alt="">
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                         <div role="tabpanel" class="tab-pane fade in active" id="book1">
                            <div class="lib-papular">
                                <div class="kode-thumb">
                                    <img src="images/papular-books.png" alt="">
                                </div>
                                <div class="kode-text">
                                    <h2>Engaging Imagination</h2>
                                    <h4>Gillian Judson</h4>
                                    <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                    <p>When asked what they want colleges to emphasize most, employers didn’t put science, computing, math, or business management first. According to AAC &amp; U’s 2013 employer survey, 95% of employers give hiring preference to college graduates with skills that will enable them to contribute to innovation in the workplace.</p>
                                    <div class="lib-price">
                                        <h3>$245</h3>
                                        <a href="#">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="book2">
                            <div class="lib-papular">
                                <div class="kode-thumb">
                                    <img src="images/papular-books11.png" alt="">
                                </div>
                                <div class="kode-text">
                                    <h2>Deception</h2>
                                    <h4>John M Fluid</h4>
                                    <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                    <p>The world's most infamous hacker offers an insider's view of the low-tech threats to high-tech security. Kevin Mitnick's exploits as a cyber-desperado and fugitive form one of the most exhaustive FBI manhunts in history and have spawned dozens of articles, books, films, and documentaries. Since his release from federal prison, in 1998</p>
                                    <div class="lib-price">
                                        <h3>$245</h3>
                                        <a href="#">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="book3">
                            <div class="lib-papular">
                                <div class="kode-thumb">
                                    <img src="images/papular-books22.png" alt="">
                                </div>
                                <div class="kode-text">
                                    <h2>Last Days</h2>
                                    <h4>Adam Nevill</h4>
                                    <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                    <p>Last Days (winner of the British Fantasy Award for Best Horror Novel of the Year) by Adam Nevill is a Blair Witch style novel in which a documentary film-maker undertakes the investigation of a dangerous. When guerrilla documentary maker, Kyle Freeman, is asked to shoot a film on the notorious cult known as the Temple of the Last Days</p>
                                    <div class="lib-price">
                                        <h3>$555</h3>
                                        <a href="#">See More</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="book4">
                            <div class="lib-papular">
                                <div class="kode-thumb">
                                    <img src="images/papular-books33.png" alt="">
                                </div>
                                <div class="kode-text">
                                    <h2>Catching Fire</h2>
                                    <h4>Suzanne Collin</h4>
                                    <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                    <p>Against all odds, Katniss Everdeen has won the annual Hunger Games with fellow district tribute Peeta Mellark. But it was a victory won by defiance of the Capitol and their harsh rules. Katniss and Peeta should be happy. After all, they have just won for themselves and their families a life of safety and plenty.</p>
                                    <div class="lib-price">
                                        <h3>$751</h3>
                                        <a href="#">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="book5">
                            <div class="lib-papular">
                                <div class="kode-thumb">
                                    <img src="images/papular-books44.png" alt="">
                                </div>
                                <div class="kode-text">
                                    <h2>The Fire of Life</h2>
                                    <h4>Runshide </h4>
                                    <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                    <p>“You’ve reached the age at which people in this family cross the border into the magical world. It’s your turn for an adventure—yes, it’s finally here!” So says Haroun to his younger brother, twelve-year-old Luka. The adventure begins one beautiful starry night in the land of Alifbay, when Luka’s father, Rashid.</p>
                                    <div class="lib-price">
                                        <h3>$852</h3>
                                        <a href="#">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="book6">
                            <div class="lib-papular">
                                <div class="kode-thumb">
                                    <img src="images/papular-books55.png" alt="">
                                </div>
                                <div class="kode-text">
                                    <h2>New Moon</h2>
                                    <h4>Stephenie Meyer</h4>
                                    <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                    <p>Legions of readers entranced by Twilight are hungry for more and they won't be disappointed. In New Moon, Stephenie Meyer delivers another irresistible combination of romance and suspense with a supernatural twist. The "star-crossed" lovers theme continues as Bella and Edward find themselves facing new obstacles.</p>
                                    <div class="lib-price">
                                        <h3>$630</h3>
                                        <a href="#">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BEST SELLER SLIDER SECTION END-->
        <!--TESTIMONIALS START-->
        <section class="lib-video-section">
            <div class="container">
                <i class="fa fa-play"></i>
                <h2>Play a video on Parallax</h2>
                
                <h4>Title: Book Store</h4>
                <p>Source: Youtube, Vimeo</p>
            </div>
        </section>
        <!--TESTIMONIALS END-->
        <!--COUNT UP SECTION START-->
        <div class="lib-count-up-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="count-up">
                            <span class="counter circle">21</span>
                            <p>Working Year</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="count-up">
                            <span class="counter circle">8589</span>
                            <p>Books Sold</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="count-up">
                            <span class="counter circle">458</span>
                            <p>Top Author</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="count-up">
                            <span class="counter circle">750</span>
                            <p>Book Published</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--COUNT UP SECTION END-->
        <!--FROM THE BLOG SECTION START-->
        <section>
            <!--SECTION HEADING START-->
            <div class="container">
                <div class="section-heading-1">
                    <h2>Latest Blog Post</h2>
                    <p>The Latest Blog post for the biggest Blog for the books Library.</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
            </div>
            <!--SECTION HEADING END-->
            <div class="owl-blog owl-theme">
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog2.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog3.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog4.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog5.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog2.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog3.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog4.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog5.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog2.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog3.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog4.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-blog-post">
                        <div class="kode-thumb">
                            <img src="images/lib-blog5.png" alt="">
                            <div class="lib-btns">
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                                <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                            </div>
                        </div>
                        <div class="kode-text">
                            <h2>Becky’s Book Reviews</h2>
                            <ul>
                                <li><p>by: <a href="#">James Greig</a></p></li>
                                <li><p><a href="#">20th August 2015</a></p></li>
                            </ul>
                            <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--BLOG ITEM END-->
            </div>
        </section>
        <!--FROM THE BLOG SECTION END-->
        <!--GIFT CARD SECTION START--> 
        <section class="lib-textimonials">
            <div class="container">
                <!--SECTION HEADING START-->
           <div class="section-heading-1 dark-sec">
                <h2>Our Testimonials</h2>
                <p>What our clients say about the books reviews and comments</p>
                <div class="kode-icon"><i class="fa fa-book"></i></div>
            </div>
            <!--SECTION HEADING END-->
            <div class="owl-testimonials owl-theme">
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                        <div class="kode-text">
                            <p>I loved thrift books! It's refreshing to buy discounted books and have them shipped quickly. I could afford to buy 3 copies to hand out to friends also interested in the topic. Thank you!! Read more</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/testimonials1.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                        <div class="kode-text">
                            <p>You have great prices and the books are in the shape as stated. Although it takes so long for them to get to their destination. I have been ordering for years and get great books in the shape said.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/testimonials-img4.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                        <div class="kode-text">
                            <p>I have made many orders with Thrift Books. I always get exactly what I order in a timely manner at a great price. I have had to contact the customer service team once.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/testimonials-img3.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                        <div class="kode-text">
                            <p>I couldn't believe the prices for such great books, at no shipping! I am going to be a good customer at your store! And, I am telling my Facebook friends about.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/testimonials-img2.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                        <div class="kode-text">
                            <p>ordered 14 books, received 14 books within a week. very happy with customer support and with the receipt of books. Keep It Up Good Guide we love you the best books library available today.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/writer2.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                        <div class="kode-text">
                            <p>Thrift Books is the absolute best book seller on the Internet!! Their selection is marvelous, price/shipping unbeatable and timely service is outstanding.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/writer3.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
            </div>
            </div>
        </section>
        <!--GIFT CARD SECTION END-->
        <!--GIFT CARD SECTION END-->
        <section class="kode-booklet">
            <div class="container">
                <!--SECTION CONTENT START-->
                <div class="section-heading-1">
                    <h2>Book of The Month (Image base)</h2>
                    <p>Here are some of the Top Authors that are available in Books Library</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <!--SECTION CONTENT END-->
            </div>
            <div id="canvas"></div>
            <div class="zoom-icon zoom-icon-in"></div>
            <div class="magazine-viewport">
                <div class="container">
                    <div class="magazine">
                        <!-- Next button -->
                        <div data-ignore="1" class="next-button"></div>
                        <!-- Previous button -->
                        <div data-ignore="1" class="previous-button"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--TOP AUTHOR START-->
        <section class="kode-lib-team-member">
            <div class="container">
                <!--SECTION CONTENT START-->
                <div class="section-heading-1">
                    <h2>Our Top Authors</h2>
                    <p>Here are some of the Top Authors that are available in Books Library</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <!--SECTION CONTENT END-->
                <div class="lib-authors">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                    <img src="images/lib-author.png" alt="">
                    <div class="kode-caption">
                        <h4>Nina Soriya</h4>
                        <p>Author</p>
                    </div>
                </div>
                <div class="lib-authors">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                    <img src="images/lib-author2.png" alt="">
                    <div class="kode-caption">
                        <h4>Martin</h4>
                        <p>Author</p>
                    </div>
                </div>
                <div class="lib-authors">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                    <img src="images/lib-author3.png" alt="">
                    <div class="kode-caption">
                        <h4>Alexder</h4>
                        <p>Author</p>
                    </div>
                </div>
                <div class="lib-authors">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                    <img src="images/lib-author4.png" alt="">
                    <div class="kode-caption">
                        <h4>Jullia</h4>
                        <p>Author</p>
                    </div>
                </div>
            </div>
        </section>
        <!--TOP AUTHOR END-->
        
        <!--BECOME A MEMBER START-->
        <section class="kode-membership">
            <div class="container">
                <!--SECTION HEADING START-->
                <div class="section-heading-1 dark-sec">
                    <h2>Become a member</h2>
                    <p>Submit your books idea and you can become an Author.</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <!--SECTION HEADING END-->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="input-container">
                            <i class="fa fa-user"></i>
                            <input type="text" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="input-container">
                            <i class="fa fa-envelope-o"></i>
                            <input type="text" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="input-container">
                            <i class="fa fa-home"></i>
                            <input type="text" placeholder="Your Address">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="input-container">
                            <i class="fa fa-phone"></i>
                            <input type="text" placeholder="Your Phone">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="input-container">
                            <i class="fa fa-calendar"></i>
                            <input type="text" placeholder="Your Age">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="input-container">
                            <i class="fa fa-check-square-o"></i>
                            <select>
                                <option>Select Package</option>
                                <option>Package One</option>
                                <option>Package Two</option>
                                <option>Package Three</option>
                                <option>Package Four</option>
                                <option>Package Five</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <a href="#" class="reg-btn">Register</a>
                    </div>
                </div>
            </div>
        </section>
        <!--BECOME A MEMBER END-->
        <!--NEWSLETTERS SECTION START-->
        <section class="kode-newsletters-2">
            <div class="container">
                <!--SECTION CONTENT START-->
                <div class="section-heading-1">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscribe here with your email us and get up to date.</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <!--SECTION CONTENT END-->
                <div class="newsletters-container">
                    <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <div class="input-container">
                            <i class="fa fa-envelope-o"></i>
                            <input type="text" placeholder="Subscribe us">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <button>Subscribe<i class="fa fa-paper-plane"></i></button>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!--NEWSLETTERS SECTION END-->
        <section class="lib-contact-section">
            <div class="location-text">
                <i class="fa fa-map-marker"></i>
                <h2>Lorem ipsum<br>Sed ut perspiciatis</h2>
                <h4>200 capacity</h4>
                <p>Esse cillum dolore eu fugiat nulla USA</p>
                <span><i class="fa fa-phone"></i>80.828247.89</span>
            </div>
            <div class="kode-thumb">
                
            </div>
            <div class="map-canvas" id="map-canvas"></div>
        </section>
    </div>
    <!--CONTENT END-->
    <footer class="footer-2">
        <div class="container">
            <div class="lib-copyrights">
                <p>Copyrights © 2015-16 KodeForest. All rights reserved</p>
                <div class="social-icon">
                    <ul>
                        <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
@extends('layouts.footer');
