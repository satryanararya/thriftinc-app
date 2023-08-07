<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thriftinc V2</title>

    <link href="{{ asset('/css/var.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style-home.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style-ps.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet"> 

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div id="page" class="site page-order">
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

        <header>
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
                            <div class="logo flexitem"><a href="{{url('/home')}}"><span class="circle"></span>Thriftinc</a>
                                <nav class="mobile-hide">
                                    <ul class="flexitem second-links">
                                        <li><a href="{{url('/home')}}">Home</a></li>
                                        <li><a href="#">Shop</a></li>
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
                                <li><a href="{{url('show_cart')}}" class="is-cart">
                                        <div class="icon-small">
                                            <i class="ri-shopping-cart-2-line"></i>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar end -->
        </header>
        
        <main>
            <div class="single-cart">
                <div class="container">
                    <div class="wrapper">
                        <div class="breadcrumb">
                            <ul class="flexitem" style="margin-top:1em;">
                                <li><a href="#">Home</a></li>
                                <li>Order</li>
                            </ul>
                        </div>
                        @if ($message = Session::get('Success'))
                        <script type="text/javascript">
                            Swal.fire({
                                icon: 'success',
                                title: '{{ $message }}',
                            })
                        </script>  
                        @endif
                        <div class="page-title">
                            <h1><span><i class="ri-archive-line"></i></span> {{ Auth::user()->name }}'s Order </h1>
                            <br>
                            <h3> Deliver to : <span style="color: #ff6b6b">{{Auth::user()->address}}</span></h3>
                        </div>
                        <div class="products one cart">
                            <div class="flexwrap">
                                <form action="" class="form-order" style="width:100%;">
                                    <div class="item">
                                        <table id="cart-table">
                                            <thead>
                                                <tr>
                                                    <th>Item </th>
                                                    <th>Price per Item</th>
                                                    <th>Qty</th>
                                                    <th>Subtotal</th>
                                                    <th>Payment Status</th>
                                                    <th>Delivery Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td class="flexitem">
                                                            <div class="thumbnail object-cover">
                                                                <a href="#"><img src="/cover/{{$order->cover}}" alt=""></a>
                                                            </div>
                                                            <div class="content">
                                                                <strong><a href="#">{{$order->product_name}}</a></strong>
                                                                {{-- <p>Color : Gold</p> --}}
                                                            </div>
                                                        </td>
                                                        <td>IDR {{$order->price / $order->quantity}}</td>
                                                        <td>{{$order->quantity}}</td>
                                                        <td>IDR {{$order->price}}</td>
                                                        <td>{{$order->payment_status}}</td>
                                                        <td>{{$order->delivery_status}}</td>
                                                        <td>
                                                            @if ($order->delivery_status == 'Processing')
                                                                <div style="display:flex; background-color: #ff6b6b; justify-content: center; color: white; border-radius: 12px;">
                                                                    <a href="{{url('cancel_order',$order->id)}}" class="" onclick="cancelOrder(event)" style="display:flex"><i class="ri-close-circle-line" style="display: flex; margin-right: 0.3em;"></i>Cancel Order</a>
                                                                </div>
                                                            @else
                                                                <p></p>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <form action="" class="search">
                                <span class="icon-large"><i class="ri-mail-line"></i></span>
                                <input type="mail" placeholder="Your email address" required>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.4.1/index.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script>
        window.cancelOrder = function (e) {
            e.preventDefault();
            var form = e.target.form;
            Swal.fire({
                title: 'Are you sure want to cancel this order?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        }
    </script>
</body>

</html>