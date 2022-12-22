{{-- bharti  --}}
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from nouthemes.net/html/mymedi/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Nov 2022 13:37:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="{{asset('frontend/img/favicon.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{asset('frontend/img/favicon.png')}}" rel="shortcut icon" type="image/png">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('frontend/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/Linearicons/Font/demo-files/demo.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:400,500,600,700&amp;display=swap&amp;ver=1607580870">
    <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap4/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/lightGallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/noUiSlider/nouislider.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/lightGallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    @yield('styles')

   
</head>

<body>
    <div class="ps-page">
        <header class="ps-header ps-header--1">
            <div class="ps-header__middle">
                <div class="container">
                    <div class="ps-logo"><a href="{{ route('index') }}"> <img src="{{asset('frontend/img/logo.png')}}" alt><img class="sticky-logo" src="{{asset('frontend/img/logo.png')}}" alt></a></div><a class="ps-menu--sticky" href="#"><i class="fa fa-bars"></i></a>
                    <div class="ps-header__right">
                        <ul class="ps-header__icons">
                            <li><a class="ps-btn ps-btn--warning" href="/contact">Inquery</a></li>
                           
                        </ul>

                        <div class="ps-header__search">
                            <form action="{{ route('search') }}" method="get">
                                <div class="ps-search-table">
                                    <div class="input-group">
                                        <input class="form-control ps-input" name="search" type="text" placeholder="Search for products">
                                        <div class="input-group-append"><button class="border_none" type="submit" ><i class="fa fa-search"></i></button></div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ps-navigation">
                <div class="container">
                    <div class="ps-navigation__left">
                        <nav class="ps-main-menu">
                            <ul class="menu">
                                @foreach ($menus as $menu)
                                @if ($menu->parent_id == null)
                                   
                                    <li class="has-mega-menu"><a href="{{env('APP_URL')}}/{{$menu->link}}">{{ $menu->name }}</a></li>
                                @endif
                                {{-- @if ($menu->parent_id == !null)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{$menu->parent_id->parent->name}}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach ($menus as $menu)
                                        <li>
                                            <a class="dropdown-item" href="index.html">{{$menu->jfhj}}</a>
                                        </li>
                                        @endforeach
                                       
                                    </ul>
                                </li>
                                @endif --}}
                               
                            @endforeach
                               
                            </ul>
                        </nav>
                    </div>
                    <div class="ps-navigation__right">Need help? <strong>{{$phone->value}}</strong></div>
                </div>
            </div>
        </header>

                    <!-- ***** Content ***** -->
                    @yield('content')
                <!-- ***** End Content ***** -->

        {{-- <footer class="ps-footer ps-footer--1">
            <div class="ps-footer--top">    
            </div>
            <div class="container">
                <div class="ps-footer__middle">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <div class="ps-footer--address">
                                        <div class="ps-logo"><a href="/"> 
                                            <img src="{{asset('frontend/img/logo.png')}}" alt>
                                        </a></div>

                                        <div class="ps-footer__title">Our store</div>
                                        <p>{{$address->value}}</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="ps-footer--contact">
                                        <h5 class="ps-footer__title">Need help</h5>
                                        <div class="ps-footer__fax"><i class="icon-telephone"></i>{{$phone->value}}</div>
                                        <p class="ps-footer__work">Monday – Friday: 9:00-20:00<br>Saturday: 11:00 – 15:00</p>
                                        <hr>
                                        <p><a class="ps-footer__email" href="">{{$email->value}}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-footer--bottom">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>Copyright © 2022. All Rights Reserved</p>
                        </div>
                        <div class="col-12 col-md-6 text-right"><img src="{{asset('frontend/img/payment.png')}}" alt><img class="payment-light" src="{{asset('frontend/img/payment-light.png')}}" alt></div>
                    </div>
                </div>
            </div>
        </footer> --}}

        <footer class="ps-footer ps-footer--1">
            <div class="container">
                <div class="ps-footer__middle">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="ps-footer--address">
                                        <div class="ps-logo"><a href=""> <img src="{{asset('frontend/img/logo.png')}}" alt=""><img class="logo-white" src="{{asset('frontend/img/logo.png')}}" alt=""><img class="logo-black" src="{{asset('frontend/img/logo.png')}}" alt=""><img class="logo-white-all" src="{{asset('frontend/img/logo.png')}}" alt=""><img class="logo-green" src="{{asset('frontend/img/logo.png')}}" alt=""></a></div>
                                        <div class="ps-footer__title">Our store</div>
                                        <p>{{$address->value}}</p>
                                        <ul class="ps-social">
                                            <li><a class="ps-social__link facebook" href="#"><i class="fa fa-facebook"> </i><span class="ps-tooltip">Facebook</span></a></li>
                                            <li><a class="ps-social__link instagram" href="#"><i class="fa fa-instagram"></i><span class="ps-tooltip">Instagram</span></a></li>
                                            <li><a class="ps-social__link youtube" href="#"><i class="fa fa-youtube-play"></i><span class="ps-tooltip">Youtube</span></a></li>
                                            <li><a class="ps-social__link pinterest" href="#"><i class="fa fa-pinterest-p"></i><span class="ps-tooltip">Pinterest</span></a></li>
                                            <li><a class="ps-social__link linkedin" href="#"><i class="fa fa-linkedin"></i><span class="ps-tooltip">Linkedin</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="ps-footer--contact">
                                        <h5 class="ps-footer__title">Need help</h5>
                                        <div class="ps-footer__fax"><i class="icon-telephone"></i>{{$phone->value}}</div>
                                        <p class="ps-footer__work">{{$email->value}}</p>
                                        <p class="ps-footer__work">{{$time->value}}</p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="ps-footer--block">
                                        <h5 class="ps-block__title">Menu</h5>
                                        <ul class="ps-block__list">
                                            @foreach ($menus as $menu)
                                            @if ($menu->parent_id == null)
                                               
                                                <li class=""><a href="{{$menu->link}}">{{ $menu->name }}</a></li>
                                            @endif
                                           
                                           
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-5">
                                    <div class="ps-footer--block">
                                        <h5 class="ps-block__title">Hearing Aids</h5>
                                        <ul class="ps-block__list">
                                          @foreach ($types as $type)
                                          <li><a href="{{route('products',$type->id)}}">{{ $type->name }}</a></li>
                                          @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="ps-footer--block">
                                        <h5 class="ps-block__title">Brands</h5>
                                        <ul class="ps-block__list">
                                            @foreach ($brands as $brand)
                                            <li><a href="">{{ $brand->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-footer--bottom">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>Copyright © 2022 BhartiAudiology. All Rights Reserved</p>
                        </div>
                        <div class="col-12 col-md-6 text-right"><img src="img/payment.png" alt=""><img class="payment-light" src="img/payment-light.png" alt=""></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <button class="btn scroll-top"><i class="fa fa-angle-double-up"></i></button>
    <div class="ps-preloader" id="preloader">
        <div class="ps-preloader-section ps-preloader-left"></div>
        <div class="ps-preloader-section ps-preloader-right"></div>
    </div>
    <div class="ps-navigation--footer">
        <div class="ps-nav__item"><a href="#" id="open-menu"><i class="icon-menu"></i></a><a href="#" id="close-menu"><i class="icon-cross"></i></a></div>
    </div>

    <div class="ps-menu--slidebar">
        <div class="ps-menu__content">
            <ul class="menu--mobile">
                @foreach ($menus as $menu)
                @if ($menu->parent_id == null)
                    <li class="category-list.html"><a href="{{env('APP_URL')}}/{{$menu->link}}">{{ $menu->name }}</a></li>
                @endif
            @endforeach
            </ul>
        </div>
    </div>


    
    
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('frontend/plugins/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/popper.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/bootstrap4/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/noUiSlider/nouislider.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/slick/slick/slick.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/lightGallery/dist/js/lightgallery-all.min.js')}}"></script>
    <!-- custom code-->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    @yield('scripts')
</body>


<!-- Mirrored from nouthemes.net/html/mymedi/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Nov 2022 13:37:19 GMT -->
</html>