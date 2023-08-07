<div class="trending" id="trending">
    <div class="container">
        <div class="wrapper">
            <div class="sectop flexitem">
                <div class="logo"><a href="/"><span class="trend-circle"></span>Trending Products</a></div>
            </div>
            <div class="column">
                <div class="flexwrap">
                    <div class="row products big">
                        @foreach ($offerProducts as $offerProduct)
                        <div class="item">
                            <div class="offer">
                                <p>Offer ends at</p>
                                <ul class="flexcenter">
                                    <li>1</li>
                                    <li>15</li>
                                    <li>27</li>
                                    <li>50</li>
                                </ul>
                            </div>
                            <div class="media">
                                <div class="image">
                                    <a href="{{url('product_details',$offerProduct->id)}}">
                                        <img src="/cover/{{ $offerProduct->cover }}" alt="product" style="height:360px;">
                                    </a>
                                </div>
                                <div class="hoverable">
                                    <ul>
                                        <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                        <li><a href=""><i class="ri-eye-line"></i></a></li>
                                        <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                    </ul>
                                </div>
                                <div class="discount circlee flexcenter"><span>70%</span></div>
                            </div>
                            <div class="content">
                                <div class="rating">
                                    <div class="stars"></div>
                                </div>
                                <h3 class="main-links"><a href="#">Descente Waterproof Outdoor Jacket</a></h3>
                                <div class="price">
                                    <span class="current">IDR {{$offerProduct->price}}</span>
                                    <span class="normal mini-text">IDR 400.000</span>
                                </div>
                                
                                <div class="stock mini-text">
                                    <div class="qty">
                                        <span>Stock: <strong class="qty-available">123</strong></span>
                                        <span>Sold: <strong class="qty-sold">1,231</strong></span>
                                    </div>
                                    <div class="bar">
                                        <div class="available"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="row products mini">

                        @foreach ($trendingProducts->take(4) as $trendingProduct)
                            <div class="item" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px; border-radius: 12px;">
                                <div class="media">
                                    <div class="thumbnail object-cover">
                                        <a href="{{url('product_details',$trendingProduct->id)}}">
                                            <img src="/cover/{{ $trendingProduct->cover }}" alt="product">
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
                                <div class="content" style="padding-top:0.7em">
                                    <h3 class="main-links"><a href="{{url('product_details',$trendingProduct->id)}}">{{$trendingProduct->name}}</a></h3>
                                    <div class="rating">
                                        <div class="stars"></div>
                                        <span class="mini-text">(2,134)</span>
                                    </div>
                                    <div class="price">
                                        <span class="current">IDR {{$trendingProduct->price}}</span>
                                        <span class="normal mini-text">IDR 2.000.000</span>
                                    </div>
                                    <form action="{{url('add_cart',$trendingProduct->id)}}" method="post">

                                        @csrf
            
                                        <input type="number" name="quantity" value="1" min="1">
            
                                        <button type="submit" class="mybtn"> Add to Cart</button>
            
                                    </form>
                                </div>
                                
                            </div>
                        @endforeach
                    </div>
                    <div class="row products mini">
                        @foreach ($trendingProducts->skip(4)->take(4) as $trendingProduct)
                            <div class="item" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px; border-radius: 12px;">
                                <div class="media">
                                    <div class="thumbnail object-cover">
                                        <a href="{{url('product_details',$trendingProduct->id)}}">
                                            <img src="/cover/{{ $trendingProduct->cover }}" alt="product">
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
                                <div class="content" style="padding-top:0.7em">
                                    <h3 class="main-links"><a href="{{url('product_details',$trendingProduct->id)}}">{{$trendingProduct->name}}</a></h3>
                                    <div class="rating">
                                        <div class="stars"></div>
                                        <span class="mini-text">(2,134)</span>
                                    </div>
                                    <div class="price">
                                        <span class="current">IDR {{$trendingProduct->price}}</span>
                                        <span class="normal mini-text">IDR 400.000</span>
                                    </div>
                                    <form action="{{url('add_cart',$trendingProduct->id)}}" method="post">

                                        @csrf
            
                                        <input type="number" name="quantity" value="1" min="1">
            
                                        <button type="submit" class="mybtn"> Add to Cart</button>
            
                                    </form>
                                </div>
                                
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>