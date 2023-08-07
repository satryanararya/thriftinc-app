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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
</head>

<body>
    <div id="page" class="site page-single">
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
            <div class="top-bar fixed">
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
                                        <li><a href="{{url('login')}}">Sign In</a></li>
                                        <li><a href="#">Order Tracking</a></li>
                                        <li><a href="#">IDR <span class="icon-small"> <i class="ri-arrow-down-s-line"></i></span></a>
                                            <ul class="links-item">
                                                <li class="current">IDR</a></li>
                                                <li><a href="#">USD</a>
                                            </ul>
                                        </li>
                                        <li><a href="#">English <span class="icon-small"> <i class="ri-arrow-down-s-line"></i></span></a>
                                            <ul class="links-item">
                                                <li class="current">English</a></li>
                                                <li><a href="#">Bahasa</a>
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
                                        @if (Auth::id())
                                            <div class="logo flexitem">
                                            <a href="/home"><span class="circle"></span>Thriftinc</a>
                                        @else 
                                            <div class="logo flexitem">
                                            <a href="/"><span class="circle"></span>Thriftinc</a>
                                        @endif
                                        <nav class="mobile-hide">
                                            <ul class="flexitem second-links">
                                                <li><a href="">Home</a></li>
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
                                                                                    <span><i class="flame ri-fire-fill"></i></span>
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
                                            <a href="#">
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
                                                        @if(Auth::id()){
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
                                                        }
                                                        @else {
                                                            <p style="color: black;">You don't have any item in here</p>
                                                            <p style="color: black;">Please <b>sign in</b> to add something to your cart!</p>
                                                        }
                                                        @endif
                                                    </div>
                                                    <div class="cart-footer">
                                                        @if (Auth::id()){
                                                            <div class="subtotal">
                                                                <p>Subtotal</p>
                                                                <p><strong>IDR {{$subtotal}}</strong></p>
                                                            </div>
                                                        }
                                                        @endif
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
                </div>
        </header>
        <main>
            <!-- Single product start -->
            <div class="single-product">
                <div class="container">
                    <div class="wrapper">
                        <!-- Breadcrumb start -->
                        <div class="breadcrumb">
                            <ul class="flexitem">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">{{$products->category}}</a></li>
                                <li>{{$products->name}}</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb end -->

                        <div class="column">
                            <div class="products one">
                                <div class="flexwrap">
                                    <div class="row">
                                        <div class="item">
                                            <div class="price">
                                                <span class="discount">32% <br> OFF</span>
                                            </div>
                                            <div class="big-image">
                                                <div class="big-image-wrapper swiper-wrapper">
                                                    @foreach ($products->images as $img)
                                                        <div class="image-show swiper-slide">
                                                            <a data-fslightbox href="/images/{{ $img->image }}"><img src="/images/{{ $img->image }}" alt=""></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>

                                            <div thumbSlider="" class="small-image">
                                                <ul class="small-image-wrapper flexitem swiper-wrapper">
                                                    @foreach ($products->images as $img)
                                                        <li class="thumbnail-show swiper-slide">
                                                            <img src="/images/{{ $img->image }}" alt="">
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="item">
                                            <h1>{{$products->name}}</h1>
                                            <div class="content">
                                                <div class="rating">
                                                    <div class="stars"></div>
                                                </div>
                                                <div class="stock sku">
                                                    <span class="available">In Stock</span>
                                                    <span class="sku mini-text">SKU {{$products->id}}</span>
                                                </div>
                                                <div class="price">
                                                    <span class="current">IDR {{$products->price}}</span>
                                                    <span class="normal">IDR 400.000</span>
                                                </div>
                                                <div class="colors">
                                                    <p>Color</p>
                                                    <div class="variant">
                                                        <form action="">
                                                            @foreach ($productColors as $color)
                                                                <p>
                                                                    <input type="radio" name="color" id="{{ $color }}" value="{{ $color }}">
                                                                    <label for="{{ $color }}" class="details_circle {{ strtolower($color) }}"></label>
                                                                </p>
                                                            @endforeach
                                                        </form>
                                                    </div>
                                                </div>                                                
                                                <div class="sizes">
                                                    <p>Size</p>
                                                    <div class="variant">
                                                        <form action="">
                                                            <p>
                                                                <input type="radio" name="size" id="size-40">
                                                                <label for="size-40" class="details_circle size"><span>{{$products->size}}</span></label>
                                                            </p>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="button-cart">
                                                        <form action="{{url('add_cart',$products->id)}}" method="post">

                                                            @csrf
                                
                                                            <input type="number" name="quantity" value="1" min="1" class="number-input">
                                
                                                            <button type="submit" class="mybtn"> Add to Cart</button>
                                
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="description collapse">
                                                    <ul>
                                                        <li class="has-child expand">
                                                            <a href="#0" class="icon-small">Information</a>
                                                            <ul class="content">
                                                                <li><span>Brands</span> <span>{{$products->brand}}</span></li>
                                                                <li><span>Type</span> <span>{{$products->type}}</span></li>
                                                                <li><span>Material</span> <span>{{$products->material}}</span></li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-child">
                                                            <a href="#0" class="icon-small">Details</a>
                                                            <div class="content">
                                                                <p>{{$products->description}}</p>
                                                            </div>
                                                        </li>
                                                        <li class="has-child">
                                                            <a href="#0" class="icon-small">Custom</a>
                                                            <div class="content">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Size</th>
                                                                            <th>Bust <span class="mini-text">(cm)</span></th>
                                                                            <th>Waist <span class="mini-text">(cm)</span></th>
                                                                            <th>Hip <span class="mini-text">(cm)</span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>XS</td>
                                                                            <td>82,5</td>
                                                                            <td>62</td>
                                                                            <td>87,5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>S</td>
                                                                            <td>85</td>
                                                                            <td>63,5</td>
                                                                            <td>89</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>M</td>
                                                                            <td>87,5</td>
                                                                            <td>67,5</td>
                                                                            <td>93</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>L</td>
                                                                            <td>90</td>
                                                                            <td>72,5</td>
                                                                            <td>98</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </li>
                                                    </ul>
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
            <!-- Single product end -->

            <!-- Related Products start -->
            <div class="features">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="sectop flexitem">
                                <div class="logo"><a href="/"><span class="trend-circle"></span>Related Products</a></div>
                                <div class="second-links">View all<a href="#" class="feat-view-all"><i class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
                            <div class="products main flexwrap">
                                
                                @foreach ($relatedProducts as $relatedProduct)
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="{{url('product_details',$relatedProduct->id)}}">
                                                <img src="/cover/{{ $relatedProduct->cover }}" alt="product">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                                <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circlee flexcenter"><span>50%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(2,134)</span>
                                        </div>
                                        <h3><a href="#">{{$relatedProduct->name}}</a></h3>
                                        <div class="price">
                                            <span class="current">IDR {{$relatedProduct->price}}</span>
                                            <span class="normal mini-text">IDR 400.000</span>
                                        </div>
                                    </div>
                                    <form action="{{url('add_cart',$relatedProduct->id)}}" method="post">
            
                                        @csrf
            
                                        <input type="number" name="quantity" value="1" min="1">
            
                                        <input type="submit" value="Add to Cart">
            
                                    </form>
                                </div>
                                @endforeach
                                
                            </div>
                            <div id="feature-paginate">
                                {{ $paginate->links('layouts.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Related Products end -->

            <!-- Banners start -->
            <div class="banners">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="banner flexwrap">
                                <div class="row">
                                    <div class="item get-gray">
                                        <div class="image">
                                            <img src="/images/banner/banner2.jpg" alt="">
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
                                            <img src="/images/banner/banner2.jpg" alt="">
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
                                            <img src="/images/product/item21.png" alt="" >
                                        </div>
                                        <div class="content mini-links">
                                            <h4>Men</h4>
                                            <ul class="flexcol">
                                                <li><a href="">Lorem Ipsum</a></li>
                                                <li><a href="">Lorem Ipsum</a></li>
                                                <li><a href="">Lorem Ipsum</a></li>
                                                
                                            </ul>
                                            <div class="second-links">
                                                <a href="#" class="view-all">View all<i class="fi fi-rr-arrow-small-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="/images/product/item21.png" alt="">
                                        </div>
                                        <div class="content mini-links">
                                            <h4>Women</h4>
                                            <ul class="flexcol">
                                                <li><a href="">Lorem Ipsum</a></li>
                                                <li><a href="">Lorem Ipsum</a></li>
                                                <li><a href="">Lorem Ipsum</a></li>
                                            </ul>
                                            <div class="second-links">
                                                <a href="#" class="view-all">View all<i class="fi fi-rr-arrow-small-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="/images/product/item21.png" alt="">
                                        </div>
                                        <div class="content mini-links">
                                            <h4>Kids</h4>
                                            <ul class="flexcol">
                                                <li><a href="">Lorem Ipsum</a></li>
                                                <li><a href="">Lorem Ipsum</a></li>
                                                <li><a href="">Lorem Ipsum</a></li>
                                            </ul>
                                            <div class="second-links">
                                                <a href="#" class="view-all">View all<i class="fi fi-rr-arrow-small-right"></i>
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
</body>

</html>