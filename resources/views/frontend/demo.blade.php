<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from theme-land.com/prolend/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 09:23:40 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Bharti Audiology - Home Page</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('frontend/img/BAS FAVICON.png') }}">
   

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

</head>

<body>
    <!--====== Preloader Area Start ======-->
    <div class="preloader-main">
        <div class="preloader-wapper">
            <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
                <defs>
                    <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
                    </filter>
                </defs>
                <g filter="url(#goo)">
                    <circle class="dot" cx="50" cy="50" r="25" fill="#4aa23a" />
                    <circle class="dot" cx="50" cy="50" r="25" fill="#4aa23a" />
                </g>
            </svg>
            <div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </div>

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular imgSize " src="{{asset('frontend/img/logo/favicon.png')}}" alt="brand-logo">
                    <img class="navbar-brand-sticky  imgSize" src="{{asset('frontend/img/logo/favicon.png')}}" alt="sticky brand-logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-inner">
                    <!--  Mobile Menu Toggler -->
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                              
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @foreach ($menus as $menu )
                                    <li>
                                        <a class="dropdown-item" href="{{$menu->link}}">{{$menu->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                               
                               
                            </li>
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->
        
        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area bg-inherit h-100vh overflow-hidden">
            <div class="shapes-container">
                <div class="bg-shape"></div>
            </div>
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-7">
                        <div class="welcome-intro">
                            <span class="d-inline-block text-capitalize font-italic fw-3 mb-2">The next generation landing page</span>
                            <h1 class="text-capitalize">Get <span class="fw-3">Prolend</span> Product landing page</h1>
                            <p class="my-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <!-- Store Buttons -->
                            <div class="button-group store-buttons d-flex">
                                <a class="btn prolend-primary" href="#">Get the App</a>
                                <a class="btn prolend-primary style-two" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <!-- Welcome Thumb -->
                        <div class="welcome-thumb thumb-animated">
                            <img src="{{asset('frontend/img/welcome/ear.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Promo Area Start ***** -->
        <section id="blog" class="section blog-area ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog/blog-7.jpg')}}" alt=""></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Meta Info -->
                                <ul class="meta-info d-flex justify-content-between">
                                    <li>By <a href="#">Anna Sword</a></li>
                                    <li><a href="#">Feb 05, 2019</a></li>
                                </ul>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="#">How to grow up your business</a></h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                                <a href="#" class="blog-btn mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog/blog-8.jpg')}}" alt=""></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Meta Info -->
                                <ul class="meta-info d-flex justify-content-between">
                                    <li>By <a href="#">Jassica William</a></li>
                                    <li><a href="#">Feb 05, 2019</a></li>
                                </ul>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="#">Planing to manage your clients?</a></h3>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin.</p>
                                <a href="#" class="blog-btn mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog/blog-9.jpg')}}" alt=""></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Meta Info -->
                                <ul class="meta-info d-flex justify-content-between">
                                    <li>By <a href="#">John Doe</a></li>
                                    <li><a href="#">Mar 05, 2019</a></li>
                                </ul>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="#">Make your successful business with Prolend</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                <a href="#" class="blog-btn mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <ul class="pagination justify-content-center">
                            <li class="disabled px-1">
                                <a href="#" aria-label="Previous">
                                    <svg class="svg-inline--fa fa-arrow-left fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg><!-- <i class="fas fa-arrow-left"></i> -->
                                </a>
                            </li>
                            <li class="px-1"><a href="#">1</a></li>
                            <li class="active px-1"><a href="#">2</a></li>
                            <li class="px-1"><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg><!-- <i class="fas fa-arrow-right"></i> -->
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Promo Area End ***** -->

        <!-- ***** Service Area Start ***** -->
        <section id="features" class="section product-features-area overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Awesome Features</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-3">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <span class="flaticon-tap"></span>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Fully functional</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-3">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <span class="flaticon-fingerprint"></span>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Secure Data</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-3">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <span class="flaticon-chat"></span>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Instant Chat</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-3">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <span class="flaticon-notification"></span>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Live Notification</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-3">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <span class="flaticon-wifi"></span>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Wifi Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Icon Box -->
                        <div class="icon-box text-center p-3">
                            <!-- Featured Icon -->
                            <div class="featured-icon mb-3">
                                <span class="flaticon-app"></span>
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">App Watch</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Service Area End ***** -->

        <!-- ***** Discover Area Start ***** -->
        <section id="products" class="products-area bg-gray ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">We have Quality Products</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="products owl-carousel">
                        <!-- Product Card -->
                        <div class="card product-card text-center rounded">
                            <!-- Product Thumb -->
                            <img class="product-thumb mx-auto pt-3" src="{{asset('frontend/img/product-thumb/thumb-01.png')}}" alt="">
                            <!-- Card Body -->
                            <div class="card-body py-4">
                                <h3>Prolend Watch 2 Pro</h3>
                                <h4 class="text-primary py-2">$149.00</h4>
                                <!-- Product Features -->
                                <ul class="product-features">
                                    <li>Amoled Display</li>
                                    <li>Retina Ready</li>
                                    <li>Enfold Design</li>
                                </ul>
                            </div>
                            <!-- Product Order -->
                            <div class="product-order">
                                <!-- Order Button -->
                                <div class="order-btn d-flex flex-wrap justify-content-center">
                                    <a class="btn prolend-primary style-two m-2" href="#">View Details</a>
                                    <a class="btn prolend-primary m-2" href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card -->
                        <div class="card product-card text-center rounded">
                            <!-- Product Thumb -->
                            <img class="product-thumb mx-auto pt-3" src="{{asset('frontend/img/product-thumb/thumb-02.png')}}" alt="">
                            <!-- Card Body -->
                            <div class="card-body py-4">
                                <h3>Smart Headphone</h3>
                                <h4 class="text-primary py-2">$129.00</h4>
                                <!-- Product Features -->
                                <ul class="product-features">
                                    <li>Amoled Display</li>
                                    <li>Retina Ready</li>
                                    <li>Enfold Design</li>
                                    <li>Gorgeous Style</li>
                                </ul>
                            </div>
                            <!-- Product Order -->
                            <div class="product-order">
                                <!-- Order Button -->
                                <div class="order-btn d-flex flex-wrap justify-content-center">
                                    <a class="btn prolend-primary style-two m-2" href="#">View Details</a>
                                    <a class="btn prolend-primary m-2" href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card -->
                        <div class="card product-card text-center rounded">
                            <!-- Product Thumb -->
                            <img class="product-thumb mx-auto pt-3" src="{{asset('frontend/img/product-thumb/thumb-03.png')}}" alt="">
                            <!-- Card Body -->
                            <div class="card-body py-4">
                                <h3>Prolend Watch 3</h3>
                                <h4 class="text-primary py-2">$169.00</h4>
                                <!-- Product Features -->
                                <ul class="product-features">
                                    <li>Amoled Display</li>
                                    <li>Retina Ready</li>
                                    <li>Enfold Design</li>
                                </ul>
                            </div>
                            <!-- Product Order -->
                            <div class="product-order">
                                <!-- Order Button -->
                                <div class="order-btn d-flex flex-wrap justify-content-center">
                                    <a class="btn prolend-primary style-two m-2" href="#">View Details</a>
                                    <a class="btn prolend-primary m-2" href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card -->
                        <div class="card product-card text-center rounded">
                            <!-- Product Thumb -->
                            <img class="product-thumb mx-auto pt-3" src="{{asset('frontend/img/product-thumb/thumb-04.png')}}" alt="">
                            <!-- Card Body -->
                            <div class="card-body py-4">
                                <h3>Beats Headphone</h3>
                                <h4 class="text-primary py-2">$190.00</h4>
                                <!-- Product Features -->
                                <ul class="product-features">
                                    <li>Amoled Display</li>
                                    <li>Retina Ready</li>
                                    <li>Enfold Design</li>
                                    <li>Great UI</li>
                                </ul>
                            </div>
                            <!-- Product Order -->
                            <div class="product-order">
                                <!-- Order Button -->
                                <div class="order-btn d-flex flex-wrap justify-content-center">
                                    <a class="btn prolend-primary style-two m-2" href="#">View Details</a>
                                    <a class="btn prolend-primary m-2" href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card -->
                        <div class="card product-card text-center rounded">
                            <!-- Product Thumb -->
                            <img class="product-thumb mx-auto pt-3" src="{{asset('frontend/img/product-thumb/thumb-04.png')}}" alt="">
                            <!-- Card Body -->
                            <div class="card-body py-4">
                                <h3>Beats Headphone</h3>
                                <h4 class="text-primary py-2">$190.00</h4>
                                <!-- Product Features -->
                                <ul class="product-features">
                                    <li>Amoled Display</li>
                                    <li>Retina Ready</li>
                                    <li>Enfold Design</li>
                                    <li>Great UI</li>
                                </ul>
                            </div>
                            <!-- Product Order -->
                            <div class="product-order">
                                <!-- Order Button -->
                                <div class="order-btn d-flex flex-wrap justify-content-center">
                                    <a class="btn prolend-primary style-two m-2" href="#">View Details</a>
                                    <a class="btn prolend-primary m-2" href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Discover Area End ***** -->

        <!-- ***** Call To Action Area Start ***** -->
        <section id="blog" class="section blog-area ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog/blog-1.jpg')}}" alt=""></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Meta Info -->
                                <ul class="meta-info d-flex justify-content-between">
                                    <li>By <a href="#">Anna Sword</a></li>
                                    <li><a href="#">Feb 05, 2019</a></li>
                                </ul>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="#">How to grow up your business</a></h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                                <a href="#" class="blog-btn mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog/blog-1.jpg')}}" alt=""></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Meta Info -->
                                <ul class="meta-info d-flex justify-content-between">
                                    <li>By <a href="#">Anna Sword</a></li>
                                    <li><a href="#">Feb 05, 2019</a></li>
                                </ul>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="#">How to grow up your business</a></h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                                <a href="#" class="blog-btn mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog/blog-1.jpg')}}" alt=""></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Meta Info -->
                                <ul class="meta-info d-flex justify-content-between">
                                    <li>By <a href="#">Anna Sword</a></li>
                                    <li><a href="#">Feb 05, 2019</a></li>
                                </ul>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="#">How to grow up your business</a></h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                                <a href="#" class="blog-btn mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog/blog-1.jpg')}}" alt=""></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Meta Info -->
                                <ul class="meta-info d-flex justify-content-between">
                                    <li>By <a href="#">Anna Sword</a></li>
                                    <li><a href="#">Feb 05, 2019</a></li>
                                </ul>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="#">How to grow up your business</a></h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                                <a href="#" class="blog-btn mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <ul class="pagination justify-content-center">
                            <li class="disabled px-1">
                                <a href="#" aria-label="Previous">
                                    <svg class="svg-inline--fa fa-arrow-left fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg><!-- <i class="fas fa-arrow-left"></i> -->
                                </a>
                            </li>
                            <li class="px-1"><a href="#">1</a></li>
                            <li class="active px-1"><a href="#">2</a></li>
                            <li class="px-1"><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg><!-- <i class="fas fa-arrow-right"></i> -->
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Call To Action Area End ***** -->

        <!-- ***** Product Features Area Start ***** -->
        <section id="features" class="section product-features-area overflow-hidden ptb_100">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-5">
                        <!-- Product Features Thumb -->
                        <div class="product-features-thumb mx-auto d-none d-lg-block">
                            <img src="{{asset('frontend/img/feature-thumb/thumb-03.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <!-- Product Features Text -->
                        <div class="product-features-text pt-4 pt-lg-0">
                            <h2 class="promo-text">Technical Specs.</h2>
                            <p class="pt-3 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolor ut iusto vitae autem neque eum ipsam, impedit asperiores vel cumque laborum dicta repellendus inventore voluptatibus et explicabo nobis unde.</p>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- Icon Box -->
                                    <div class="icon-box p-3">
                                        <!-- Featured Icon -->
                                        <div class="featured-icon mb-3">
                                            <span class="flaticon-tap"></span>
                                        </div>
                                        <!-- Icon Text -->
                                        <div class="icon-text">
                                            <h3 class="mb-2">Fully functional</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Icon Box -->
                                    <div class="icon-box p-3">
                                        <!-- Featured Icon -->
                                        <div class="featured-icon mb-3">
                                            <span class="flaticon-fingerprint"></span>
                                        </div>
                                        <!-- Icon Text -->
                                        <div class="icon-text">
                                            <h3 class="mb-2">Secure Data</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Icon Box -->
                                    <div class="icon-box p-3">
                                        <!-- Featured Icon -->
                                        <div class="featured-icon mb-3">
                                            <span class="flaticon-chat"></span>
                                        </div>
                                        <!-- Icon Text -->
                                        <div class="icon-text">
                                            <h3 class="mb-2">Instant Chat</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Icon Box -->
                                    <div class="icon-box p-3">
                                        <!-- Featured Icon -->
                                        <div class="featured-icon mb-3">
                                            <span class="flaticon-notification"></span>
                                        </div>
                                        <!-- Icon Text -->
                                        <div class="icon-text">
                                            <h3 class="mb-2">Live Notification</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Icon Box -->
                                    <div class="icon-box p-3">
                                        <!-- Featured Icon -->
                                        <div class="featured-icon mb-3">
                                            <span class="flaticon-wifi"></span>
                                        </div>
                                        <!-- Icon Text -->
                                        <div class="icon-text">
                                            <h3 class="mb-2">Wifi Support</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Icon Box -->
                                    <div class="icon-box p-3">
                                        <!-- Featured Icon -->
                                        <div class="featured-icon mb-3">
                                            <span class="flaticon-app"></span>
                                        </div>
                                        <!-- Icon Text -->
                                        <div class="icon-text">
                                            <h3 class="mb-2">App Watch</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Product Features Area End ***** -->

        <!-- ***** Products Area Start ***** -->
       
        <!-- ***** Products Area End ***** -->

        <!-- ***** Comparison Area Start ***** -->
        <section class="comparison-area ptb_100 overflow-scroll">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Compare Products to get more value</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-responsive-lg table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="h3 text-primary" scope="col"></th>
                              <th class="text-primary text-center" scope="col">
                                  <div class="product-thumb mx-auto text-center">
                                      <img src="{{asset('frontend/img/product-thumb/thumb-01.png')}}" alt="">
                                  </div>
                                  <div class="card-body product-body">
                                      <h3 class="pb-2">Prolend Watch 2</h3>
                                      <h6>For Man &amp; Woman</h6>
                                  </div>
                              </th>
                              <th class="text-primary text-center" scope="col">
                                  <div class="product-thumb mx-auto text-center">
                                      <img src="{{asset('frontend/img/product-thumb/thumb-02.png')}}" alt="">
                                  </div>
                                  <div class="card-body product-body">
                                      <h3 class="pb-2">Smart Headphone</h3>
                                      <h6>For Man &amp; Woman</h6>
                                  </div>
                              </th>
                              <th class="text-primary text-center" scope="col">
                                  <div class="product-thumb mx-auto text-center">
                                      <img src="{{asset('frontend/img/product-thumb/thumb-03.png')}}" alt="">
                                  </div>
                                  <div class="card-body product-body">
                                      <h3 class="pb-2">Prolend Watch Pro</h3>
                                      <h6>For Man</h6>
                                  </div>
                              </th>
                              <th class="text-primary text-center" scope="col">
                                  <div class="product-thumb mx-auto text-center">
                                      <img src="{{asset('frontend/img/product-thumb/thumb-04.png')}}" alt="">
                                  </div>
                                  <div class="card-body product-body">
                                      <h3 class="pb-2">Beats Headphone</h3>
                                      <h6>For Man &amp; Woman</h6>
                                  </div>
                              </th>
                            </tr>
                            <tr>
                              <th class="h3 text-primary" scope="col">Price</th>
                              <th class="h3 text-primary text-center" scope="col">$47</th>
                              <th class="h3 text-primary text-center" scope="col">$99</th>
                              <th class="h3 text-primary text-center" scope="col">$149</th>
                              <th class="h3 text-primary text-center" scope="col">$129</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Brand</th>
                              <td class="text-center">Prolend Watch 2</td>
                              <td class="text-center">Smart Headphone</td>
                              <td class="text-center">Prolend Watch Pro</td>
                              <td class="text-center">Beats Headphone</td>
                            </tr>
                            <tr>
                              <th scope="row">Color</th>
                              <td class="text-center">Black</td>
                              <td class="text-center">White</td>
                              <td class="text-center">Blue</td>
                              <td class="text-center">Black</td>
                            </tr>
                            <tr>
                              <th scope="row">Compatible with</th>
                              <td class="text-center">Android 5.0</td>
                              <td class="text-center">Android 5.0, iOS9 and above</td>
                              <td class="text-center"></td>
                              <td class="text-center">Android 5.0, iOS9 and above</td>
                            </tr>
                            <tr>
                              <th scope="row">Item Dimensions</th>
                              <td class="text-center">9 x 3.01 x 0.79 in</td>
                              <td class="text-center">7 x 5.03 x 0.63 in</td>
                              <td class="text-center">10 x 2.01 x 0.21 in</td>
                              <td class="text-center"></td>
                            </tr>
                            <tr>
                              <th scope="row">Item Weight</th>
                              <td class="text-center">0.7 lb</td>
                              <td class="text-center">2.4 ounces</td>
                              <td class="text-center">0.9 lb</td>
                              <td class="text-center">3.8 ounces</td>
                            </tr>
                            <tr>
                              <th scope="row">Operating System</th>
                              <td class="text-center">iOS</td>
                              <td class="text-center">iOS, Android</td>
                              <td class="text-center">Android</td>
                              <td class="text-center">iOS, Android</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Comparison Area End ***** -->

        <!-- ***** Review Area Start ***** -->
        <section class="review-area bg-gray ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">10k+ Customer's Trust Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="reviews owl-carousel">
                            <!-- Single Review -->
                            <div class="single-review text-center">
                                <!-- Review Text -->
                                <p class="review-text">
                                    <img class="avatar mr-2" src="{{asset('frontend/img/icon/quote2.png')}}" alt="">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A impedit, quas. Ad minus voluptatibus corporis eaque deleniti, quam, voluptates quidem similique tenetur reiciendis libero atque hic expedita officia provident perferendis.
                                </p>
                                <!-- Reviewer -->
                                <div class="reviewer p-4">
                                    <!-- Reviewer Thumb -->
                                    <div class="reviewer-thumb">
                                        <img class="avatar-lg mx-auto radius-100" src="{{asset('frontend/img/avatar/avatar-1.png')}}" alt="">
                                    </div>
                                    <!-- Reviewer Media -->
                                    <div class="reviewer-meta mt-3">
                                        <h5 class="reviewer-name mb-2">Junaid Hasan</h5>
                                        <h6 class="text-secondary fw-6">CEO, Themeland</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Review -->
                            <div class="single-review text-center">
                                <!-- Review Text -->
                                <p class="review-text">
                                    <img class="avatar mr-2" src="{{asset('frontend/img/icon/quote2.png')}}" alt="">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A impedit, quas. Ad minus voluptatibus corporis eaque deleniti, quam, voluptates quidem similique tenetur reiciendis libero atque hic expedita officia provident perferendis.
                                </p>
                                <!-- Reviewer -->
                                <div class="reviewer p-4">
                                    <!-- Reviewer Thumb -->
                                    <div class="reviewer-thumb">
                                        <img class="avatar-lg mx-auto radius-100" src="{{asset('frontend/img/avatar/avatar-2.png')}}" alt="">
                                    </div>
                                    <!-- Reviewer Media -->
                                    <div class="reviewer-meta mt-3">
                                        <h5 class="reviewer-name mb-2">Yasmin Akter</h5>
                                        <h6 class="text-secondary fw-6">Co-Founder, Themeland</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Review -->
                            <div class="single-review text-center">
                                <!-- Review Text -->
                                <p class="review-text">
                                    <img class="avatar mr-2" src="{{asset('frontend/img/icon/quote2.png')}}" alt="">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A impedit, quas. Ad minus voluptatibus corporis eaque deleniti, quam, voluptates quidem similique tenetur reiciendis libero atque hic expedita officia provident perferendis.
                                </p>
                                <!-- Reviewer -->
                                <div class="reviewer p-4">
                                    <!-- Reviewer Thumb -->
                                    <div class="reviewer-thumb">
                                        <img class="avatar-lg mx-auto radius-100" src="{{asset('frontend/img/avatar/avatar-3.png')}}" alt="">
                                    </div>
                                    <!-- Reviewer Media -->
                                    <div class="reviewer-meta mt-3">
                                        <h5 class="reviewer-name mb-2">Md. Arham</h5>
                                        <h6 class="text-secondary fw-6">SEO Expert, Themeland</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Review Area End ***** -->

        <!-- ***** Download Area Start ***** -->
       
        <!-- ***** Download Area End ***** -->

        <!-- ***** FAQ Area Start ***** -->
        <section id="faq" class="section faq-area style-two bg-gray ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Frequently asked questions</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <!-- FAQ Content -->
                        <div class="faq-content">
                            <!-- Prolend Accordion -->
                            <div class="accordion" id="prolend-accordion">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10">
                                        <!-- Single Card -->
                                        <div class="card border-0 bg-inherit">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-2" type="button">
                                                        1. Can I get a free trail?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-2">
                                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0 bg-inherit">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-2" type="button">
                                                        2. How to contact support?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-2">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0 bg-inherit">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-2" type="button">
                                                        3. Do you have any online documentation?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-2">
                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0 bg-inherit">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-2" type="button">
                                                        4. How can I update a section content?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-2">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                            </div>
                                        </div>
                                        <!-- Single Card -->
                                        <div class="card border-0 bg-inherit">
                                            <!-- Card Header -->
                                            <div class="card-header bg-inherit border-0 p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn px-0 py-2" type="button">
                                                        5. Do you have any premium plan?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- Card Body -->
                                            <div class="card-body px-0 py-2">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <p class="text-body text-center pt-4 fw-5">Haven't find suitable answer? <a href="#">Ask here.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** FAQ Area End ***** -->

        <!--====== Contact Area Start ======-->
        <section id="contact" class="contact-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Get In Touch</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <!-- Contact Box -->
                        <div class="contact-box text-center">
                            <!-- Contact Form -->
                            <form id="contact-form" method="POST" action="https://theme-land.com/prolend/demo/assets/php/mail.php">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn mt-3"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->

        <!--====== Footer Area Start ======-->
        <footer class="footer-area dark-bg">
            <!-- Footer Top -->
            <div class="footer-top ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Logo -->
                                <a class="navbar-brand" href="#">
                                    <img class="logo" src="{{asset('frontend/img/logo/logo-white.png')}}" alt="">
                                </a>
                                <p class="mt-2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit laboriosam vitae.</p>
                                <!-- Social Icons -->
                                <div class="social-icons d-flex">
                                    <a class="facebook" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="twitter" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="google-plus" href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                    <a class="vine" href="#">
                                        <i class="fab fa-vine"></i>
                                        <i class="fab fa-vine"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Company</h3>
                                <ul>
                                    <li class="py-2"><a href="#">About Us</a></li>
                                    <li class="py-2"><a href="#">Our Services</a></li>
                                    <li class="py-2"><a href="#">Career</a></li>
                                    <li class="py-2"><a href="#">Read our Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Support</h3>
                                <ul>
                                    <li class="py-2"><a href="#">Legal Information</a></li>
                                    <li class="py-2"><a href="#">Privacy Policy</a></li>
                                    <li class="py-2"><a href="#">Terms &amp; Conditions</a></li>
                                    <li class="py-2"><a href="#">Report Abuse</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Get In touch</h3>
                                <ul>
                                    <li class="py-2">
                                        <a class="media" href="#">
                                            <div class="social-icon mr-3">
                                                <i class="fas fa-home"></i>
                                            </div>
                                            <span class="media-body align-self-center">27 Lakeshore Court, Mooresville, NC 28115</span>
                                        </a>
                                    </li>
                                    <li class="py-2">
                                        <a class="media" href="#">
                                            <div class="social-icon mr-3">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <span class="media-body align-self-center">+1 230 456 789-012 6789</span>
                                        </a>
                                    </li>
                                    <!-- Subscribe Form -->
                                    <div class="subscribe-form d-flex align-items-center mt-3">
                                        <input type="email" class="form-control" placeholder="Enter Email">
                                        <button type="submit" class="btn btn-yellow"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left">&copy; Copyrights 2020 Prolend All rights reserved.</div>
                                <!-- Copyright Right -->
                                <div class="copyright-right">Made with <i class="fas fa-heart"></i> By <a href="#">Theme Land</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="{{('frontend/js/jquery/jquery-3.3.1.min.js')}}"></script>

    <!-- Bootstrap js -->
    <script src="{{('frontend/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{('frontend/js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Plugins js -->
    <script src="{{('frontend/js/plugins/plugins.min.js')}}"></script>

    <!-- Active js -->
    <script src="{{('frontend/js/active.js')}}"></script>
</body>


<!-- Mirrored from theme-land.com/prolend/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 09:23:53 GMT -->
</html>