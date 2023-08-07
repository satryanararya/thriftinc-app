<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THRIFTINC</title>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/var.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style-home.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style-ps.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/signupin.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet"> 

</head>
<body>
    <header>
        <!-- Header top start -->
        <div class="header-top mobile-hide">
            <div class="container signup">
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
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">IDR </span></a>
                                <ul class="links-item">
                                    <li class="current"><a href="#">IDR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </li>
                            <li><a href="#">English </i></span></a>
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
        <div class="header-nav signup">
            <div class="container signup">
                <div class="wrapper flexitem">
                    <a href="#" class="trigger dekstop-hide"><span class="fi fi-br-menu-burger"></span></a>
                    <div class="left flexitem">
                        <div class="logo flexitem"><a href="{{url('/')}}"><span class="circle signup"></span>Thriftinc</a>
                            <nav class="mobile-hide">
                                <ul class="flexitem second-links">
                                    <li><a href="{{url('/')}}">Home</a></li>
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
                                                                        <span><i class="flame fi fi-ss-flame"></i></span>
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
                    {{-- <div class="right">
                        <ul class="flexitem second-links">
                            <li class="mobile-hide">
                                <a href="#">
                                    <div class="icon-small"> <i class="fi fi-rs-heart"></i></div>
                                    <div class="label"> <span class="item-number">4</span></div>
                                </a>
                            </li>
                            <li class="is-cart">
                                <a href="#">
                                    <div class="icon-small">
                                        <i class="fi fi-rr-shopping-cart-add"></i>
                                    </div>
                                    <div class="icon-text">
                                        <div class="mini-text">Total</div>
                                        <div class="mini-text cart-total">IDR 308.000</div>
                                    </div>
                                </a>
                                <div class="mini-cart">
                                    <div class="content">
                                        <div class="cart-head">
                                            3 Items in Cart
                                        </div>
                                        <div class="cart-body">
                                            <ul class="products mini">
                                                <li class="item">
                                                    <div class="thumbnail object-cover">
                                                        <a href="#"><img src="/assets/products/home2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <p><a href="#">Dimmable Ceiling Light Modern</a></p>
                                                        <span class="price">
                                                            <span>IDR 77.000</span>
                                                            <span class="fly-item"><span>2x</span></span>
                                                        </span>
                                                    </div>
                                                    <a href="" class="item-remove"><i class="ri-close-line"></i></a>
                                                </li>
                                                <li class="item">
                                                    <div class="thumbnail object-cover">
                                                        <a href="#"><img src="/assets/products/home3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <p><a href="#">Dimmable Ceiling Light Modern</a></p>
                                                        <span class="price">
                                                            <span>IDR 77.000</span>
                                                            <span class="fly-item"><span>2x</span></span>
                                                        </span>
                                                    </div>
                                                    <a href="" class="item-remove"><i class="ri-close-line"></i></a>
                                                </li>
                                                <li class="item">
                                                    <div class="thumbnail object-cover">
                                                        <a href="#"><img src="/assets/products/home4.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <p><a href="#">Dimmable Ceiling Light Modern</a></p>
                                                        <span class="price">
                                                            <span>IDR 77.000</span>
                                                            <span class="fly-item"><span>2x</span></span>
                                                        </span>
                                                    </div>
                                                    <a href="" class="item-remove"><i class="ri-close-line"></i></a>
                                                </li>
                                                <li class="item">
                                                    <div class="thumbnail object-cover">
                                                        <a href="#"><img src="/assets/products/home5.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <p><a href="#">Dimmable Ceiling Light Modern</a></p>
                                                        <span class="price">
                                                            <span>IDR 77.000</span>
                                                            <span class="fly-item"><span>2x</span></span>
                                                        </span>
                                                    </div>
                                                    <a href="" class="item-remove"><i class="ri-close-line"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="cart-footer">
                                            <div class="subtotal">
                                                <p>Subtotal</p>
                                                <p><strong>IDR 308.000</strong></p>
                                            </div>
                                            <div class="actions">
                                                <a href="checkout.html" class="primary-button">Check Out</a>
                                                <a href="cart.html" class="secondary-button">View Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Navbar end -->
    </header>

    <div class="box" id="box">
        <div class="form-box register-box">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>{{ __('Register') }}</h1>

                <div class="input-form-group">
                    <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- <div id="name_error">Please enter a valid name</div> --}}
                
                <div class="input-form-group">
                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-form-group">
                    <input id="phone" type="number" placeholder="Phone Number" class="form-control @error('email') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-form-group">
                    <input id="address" type="text" placeholder="Address" class="form-control @error('email') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- <div id="email_error">Please enter a valid email</div> --}}
                
                <div class="input-form-group">
                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-form-group">
                    <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                {{-- <div id="pass_error">Please enter a valid password</div> --}}
                <button type="submit">{{ __('Register') }}</button>
            </form>
        </div>

        <div class="form-box login-box">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>{{ __('Login') }}</h1>

                <div class="input-form-group">
                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- <div id="email_errorr">Please enter a valid email</div> --}}

                <div class="input-form-group">
                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- <div id="pass_errorr">Please enter a valid password</div> --}}
                <button type="submit">{{ __('Login') }}</button>
            </form>
        </div>

        <div class="overlay-box">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">Hello <br>friends </h1>
                    <p>if you have an account, login here</p>
                    <button class="ghost" id="login">Login
                        <i class="ri-arrow-left-line login"></i>
                    </button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1 class="title">Start your <br>journey now</h1>
                    <p>Don't have any account? register here</p>
                    <button class="ghost" id="register">Register
                        <i class="ri-arrow-right-line register"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/signupin.js') }}"></script>
</body>
</html>