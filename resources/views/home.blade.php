<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>THRIFTINC</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="{{ asset('/css/style-home.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/var.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/all.css') }}" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" rel="stylesheet"/>
    </head>
    <body>
    <div id="page" class="site page-home">
        <!-- Drawer (Mobile) start -->
        <aside class="site-off dekstop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href="/"><span class="circle"></span>Thriftinc</a></div>
                    <a href="#" class="t-close flexcenter"><i class="fi fi-rr-cross-small"></i></a>
                </div>
                <div class="departments"></div>
                <nav></nav>
                <div class="top-nav"></div>
            </div>
        </aside>
        <!-- Drawer (Mobile) end -->

        <header style="position:sticky; top:0; z-index:5;">
            <!-- Header top start -->
            <div class="header-top mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <ul class="flexitem main-links">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Featured Products</a></li>
                                <li><a href="#">Wishlist</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul class="flexitem main-links">
                                <li class="dropdown">
                                    <a class="dropbtn">
                                        Hello, {{ Auth::user()->name }} <span class="icon-small"> <i class="ri-arrow-down-s-line"></i></span>
                                    </a>
                                    <div class="dropdown-content">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }} 
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                <li><a href="{{url('show_order')}}">Order Tracking</a></li>
                                <li><a href="#">IDR <span class="icon-small"> <i class="ri-arrow-down-s-line"></i></span></a>
                                    <ul class="links-item">
                                        <li class="current"><a href="#">IDR</a></li>
                                        <li><a href="#">USD</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">English <span class="icon-small"> <i class="ri-arrow-down-s-line"></i></span></a>
                                    <ul class="links-item">
                                        <li class="current"><a href="#">English</a></li>
                                        <li><a href="#">Bahasa</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top -->

            <!-- Navbar start -->
            <div class="header-nav">
                <div class="container">
                    <div class="wrapper flexitem">
                        <a href="#" class="trigger dekstop-hide"><span class="ri-menu-line"></span></a>
                        <div class="left flexitem">
                            <div class="logo flexitem"><a href="{{url('home')}}"><span class="circle"></span>Thriftinc</a>
                                <nav class="mobile-hide">
                                    <ul class="flexitem second-links">
                                        <li><a href="{{url('home')}}">Home</a></li>
                                        <li><a href="#trending">Shop</a></li>
                                        <li class="has-child">
                                            <a href="#">Men
                                                <div class="icon-small"><i class="ri-arrow-down-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="container">
                                                    <div class="wrapper">
                                                        <div class="flexcol">
                                                            <div class="row">
                                                                <h4>Top</h4>
                                                                <ul>
                                                                    <li><a href="">Shirts</a></li>
                                                                    <li><a href="">T-shirts</a></li>
                                                                    <li><a href="">Sweatshirts</a></li>
                                                                    <li><a href="">Jackets</a></li>
                                                                    <li><a href="">Hoodies</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="flexcol">
                                                            <div class="row">
                                                                <h4>Pants</h4>
                                                                <ul>
                                                                    <li><a href="">Trouser</a></li>
                                                                    <li><a href="">Shorts</a></li>
                                                                    <li><a href="">Underwear</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="flexcol">
                                                            <div class="row">
                                                                <h4>Shoes</h4>
                                                                <ul>
                                                                    <li><a href="">Shoes</a></li>
                                                                    <li><a href="">Sandals</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="flexcol">
                                                            <div class="row">
                                                                <h4>Brands</h4>
                                                                <ul class="men-brands">
                                                                    <li><a href="">Nike</a></li>
                                                                    <li><a href="">Adidas</a></li>
                                                                    <li><a href="">Carhartt</a></li>
                                                                    <li><a href="">New Balance</a></li>
                                                                    <li><a href="">No Brand</a></li>
                                                                </ul>
                                                                <a href="#" class="view-all">View all <i
                                                                        class="fi fi-rr-arrow-small-right"></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="flexcol products">
                                                            <div class="row">
                                                                <div class="media">
                                                                    <div class="thumbnail object-cover">
                                                                        <a href="#">
                                                                            <img src="/images/mega-menu.jpg" alt="">
                                                                            <span><i
                                                                                    class="flame ri-fire-fill"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="text-content">
                                                                    <h4>Hot Items</h4>
                                                                    <a href="#" class="primary-button">Order Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="new-section">
                                            <a href="#">Women
                                                <div class="label"><span>New!</span></div>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="right">
                            <ul class="flexitem second-links">
                                <li class="is-cart">
                                    <a href="{{url('show_cart')}}" class="is-cart">
                                        <div class="icon-small">
                                            <i class="ri-shopping-cart-2-line"></i>
                                        </div>
                                    </a>
                                    <div class="mini-cart">
                                        <div class="content">
                                            <div class="cart-head">
                                                Cart
                                            </div>
                                            <div class="cart-body">
                                                <ul class="products mini">
                                                    <?php $subtotal = 0; $totalprice = 0; ?>
                                                    @foreach ($carts as $cart)
                                                        <li class="item">
                                                            <div class="thumbnail object-cover">
                                                                <a href="#"><img src="/cover/{{$cart->cover}}" alt=""></a>
                                                            </div>
                                                            <div class="item-content">
                                                                <p><a href="#">{{$cart->product_name}}</a></p>
                                                                <span class="price">
                                                                    <span>IDR {{$cart->price}}</span>
                                                                    <span class="fly-item"><span>x{{$cart->quantity}}</span></span>
                                                                </span>
                                                            </div>
                                                            <a href="{{url('remove_cart',$cart->id)}}" class="item-remove"><i class="ri-close-line"></i></a>
                                                        </li>
                                                    <?php $subtotal = $subtotal + $cart->price;?>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="cart-footer">
                                                <div class="subtotal">
                                                    <p>Subtotal</p>
                                                    <p><strong>IDR {{$subtotal}}</strong></p>
                                                </div>
                                                <div class="actions">
                                                    <a href="{{url('show_cart')}}" class="mybtn">View Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar end -->
        </header>
        
        <main>
            <!-- Slider start -->
            <div class="slider">
                <div class="container">
                    <div class="wrapper">
                        <div class="myslider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                        <img src="/images/slider/mega2.jpg" alt="slider" />
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Curated This Week</h4>
                                            <h2><span>Prada Blazer</span><br><span>& Coach Bag</span>
                                            </h2>
                                            <a href="#" class="primary-button">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                        <img src="/images/slider/mega3.jpg" alt="slider">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Curated This Week</h4>
                                            <h2><span>Veterano Flannel</span><br><span>& Work Jacket</span>
                                            </h2>
                                            <a href="#" class="primary-button">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                        <img src="/images/slider/slider0.jpg" alt="slider">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Curated This Week</h4>
                                            <h2><span>Adidas Stan Smith</span><br><span>Used - Size 8 / 10</span>
                                            </h2>
                                            <a href="#" class="primary-button">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider end -->

            <!--Trending start-->
            @include('products.trending')
            <!--Trending end-->

            <!-- Membership start -->
            <div class="membership">
                <div class="container">
                    <div class="wrapper">
                        <div class="member">
                            <div class="item">
                                <div class="image object-new">
                                    <img src="/images/banner/membership.png" alt="banner">
                                </div>
                                <div class="text-content flexcol">
                                    <h4>Thrift Gang+ <img src="assets/banner/medal.png" alt=""></i></h4>
                                    <h5>Get to know about our <span> Membership</span></h5>
                                    <a href="#" class="primary-button">Check Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Membership ends  -->

            <!-- Features start-->
            @include('products.feature')
            <!--Features end-->

            <!-- Banners start -->
            <div class="banners">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="banner flexwrap">
                                <div class="row">
                                    <div class="item get-gray">
                                        <div class="image">
                                            <img src="/images/banner/banner2.jpg" alt="banner">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Brutal Sale</h4>
                                            <h3><span>Get the deal</span> <br>Women Blazer</h3>
                                            <a href="#" class="primary-button">Shop now</a>
                                        </div>
                                        <a href="#" class="over-link"></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item get-gray">
                                        <div class="image">
                                            <img src="/images/banner/banner2.jpg" alt="banner">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Brutal Sale</h4>
                                            <h3><span>Get the deal</span> <br>Women Blazer</h3>
                                            <a href="#" class="primary-button">Shop now</a>
                                        </div>
                                        <a href="#" class="over-link"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Banners end -->

                            <!-- Product categories start -->
                            <div class="product-categories flexwrap">
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="/images/product/item21.png" alt="product">
                                        </div>
                                        <div class="content mini-links">
                                            <h4>Men</h4>
                                            <ul class="flexcol">
                                                <li><a href="">Coming Soon!</a></li>
                                                <li><a href="">Coming Soon!</a></li>
                                                <li><a href="">Coming Soon!</a></li>
                                                
                                            </ul>
                                            <div class="second-links">
                                                <a href="#" class="view-all">View all<i class="ri-instagram-line"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="/images/product/item21.png" alt="product">
                                        </div>
                                        <div class="content mini-links">
                                            <h4>Women</h4>
                                            <ul class="flexcol">
                                                <li><a href="">Coming Soon!</a></li>
                                                <li><a href="">Coming Soon!</a></li>
                                                <li><a href="">Coming Soon!</a></li>
                                            </ul>
                                            <div class="second-links">
                                                <a href="#" class="view-all">View all<i class="ri-instagram-line"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="/images/product/item21.png" alt="product">
                                        </div>
                                        <div class="content mini-links">
                                            <h4>Kids</h4>
                                            <ul class="flexcol">
                                                <li><a href="">Coming Soon!</a></li>
                                                <li><a href="">Coming Soon!</a></li>
                                                <li><a href="">Coming Soon!</a></li>
                                            </ul>
                                            <div class="second-links">
                                                <a href="#" class="view-all">View all<i class="ri-instagram-line"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product categories end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banners end -->
        </main>
        <!--Footer start-->
        <footer>
            <!-- Newsletter -->
            <div class="newsletter">
                <div class="container">
                    <div class="wrapper">
                        <div class="box">
                            <div class="content">
                                <h3>Join Our Newsletter</h3>
                                <p>Get E-mail updates about our latest shop and <strong>special offers</strong></p>
                            </div>
                            <form action="" class="search" id="form">
                                <span class="icon-large"><i class="ri-mail-line"></i></span>
                                <input id="user" class="testInput" type="text" placeholder="Your email address" required>
                                <button type="submit">Sign up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Widgets -->
            <div class="widgets">
                <div class="container">
                    <div class="wrapper">
                        <div class="flexwrap">
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Help & Contact</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Your account</a></li>
                                        <li><a href="#">Your orders</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Products and Categories</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Men's Top</a></li>
                                        <li><a href="#">Men's Pants</a></li>
                                        <li><a href="#">Men's Shoes</a></li>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Women</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>About Us</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Company info</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Investors</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Policies</a></li>
                                        <li><a href="#">Customer reviews</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info -->
            <div class="footer-info">
                <div class="container">
                    <div class="wrapper">
                        <div class="flexcol">
                            <div class="logo">
                                <a href=""><span class="circle"></span>Thriftinc</a>
                            </div>
                            <div class="socials">
                                <ul class="flexitem">
                                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="#"><i class="ri-facebook-line"></i></a></li>
                                    <li><a href="#"><i class="ri-youtube-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="mini-text">Copyright 2023 &copy; Thriftinc. All right reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer end-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>