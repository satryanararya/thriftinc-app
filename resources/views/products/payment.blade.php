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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        footer a {
            color: black;
        }
        .mega ul > li >a {
            color: black;
        }
        #payment-section .custom-wrapper ul > li > a {
            color: black;
        }
        #payment-section ul > li > a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="page" class="site page-cart">
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
            <div class="header-top mobile-hide" id="payment-section">
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
                                <li><a href="#">Order Tracking</a></li>
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
            <div class="header-nav" id="payment-section">
                <div class="container">
                    <div class="wrapper flexitem">
                        <a href="#" class="trigger dekstop-hide"><span class="ri-menu-line"></span></a>
                        <div class="left flexitem">
                            <div class="logo flexitem"><a href="{{url('home')}}"><span class="circle"></span>Thriftinc</a>
                                <nav class="mobile-hide">
                                    <ul class="flexitem second-links">
                                        <li><a href="{{url('home')}}">Home</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li class="has-child">
                                            <a href="#">Men
                                                <div class="icon-small"><i class="ri-arrow-down-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="container">
                                                    <div class="wrapper custom-wrapper">
                                                        <div class="flexcol">
                                                            <div class="row">
                                                                <h4>Top</h4>
                                                                <ul class="custom-a">
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
                                                                            <img src="{{ asset('/images/mega-menu.jpg') }}" alt="">
                                                                            <span><i
                                                                                    class="flame fi fi-ss-flame"></i></span>
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
            <div class="single-checkout">
                <div class="container">
                    <div class="wrapper">
                        <div class="checkout flexwrap">
                            <div class="item left styled">
                                <h2>Payment Information</h2>

                                @if (Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                @endif

                                <form 
                                    id="payment-form" 
                                    role="form" 
                                    action="{{ route('payment.post',$totalprice) }}" 
                                    method="post" 
                                    class="require-validation"
                                    data-cc-on-file="false"
                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                >
                                    @csrf
                                    <div class='form-row' style="margin-right: -15px; margin-left: -15px; margin-bottom: 2em;">
                                        <div class='col-xs-12 form-group required'>
                                            <label class='control-label'>Name on Card</label> 
                                            <input class='form-control' size='4' type='text'>
                                        </div>
                                    </div>
                
                                    <div class='form-row' style="margin-right: -15px; margin-left: -15px; margin-bottom: 2em;">
                                        <div class='col-xs-12 form-group card required'>
                                            <label class='control-label'>Card Number</label> 
                                            <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                        </div>
                                    </div>
                
                                    <div class='form-row' style="margin-right: -15px; margin-left: -15px; margin-bottom: 2em;">
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVV</label> 
                                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Month</label> 
                                            <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Year</label> 
                                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                        </div>
                                    </div>

                                    <div class='form-row' style="margin-right: -15px; margin-left: -15px; margin-bottom: 2em;">
                                        <div class='col-md-12 error form-group hide'>
                                            <div class='alert-danger alert'>Please correct the errors and try
                                                again.</div>
                                        </div>
                                    </div>
                
                                    <div class='form-row' style="margin-right: -15px; margin-left: -15px; margin-top: 2em;">

                                        <div class="col-xs-12">
                                            <button class="btn btn-danger btn-lg btn-block" type="submit" style="margin-top:2em; border-radius:30px;">Pay Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="item right">
                                <h2>Order Summary</h2>
                                <div class="summary-order is_sticky">
                                    <div class="summary-totals">
                                        <ul>
                                            <li>
                                                <span>Shipping : Flat</span>
                                                <span>IDR 23.000</span>
                                            </li>
                                            <li>
                                                <span>Total</span>
                                                <strong>IDR {{$totalprice}}</strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
</body>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">

$(function() {

    /*-------------- Stripe Payment Code ------------------*/
    
    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });
    
        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
    
    });

    /*----------- Stripe Response Handler -----------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];

            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});
</script>

</html>