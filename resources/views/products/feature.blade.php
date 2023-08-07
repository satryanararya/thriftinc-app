<div class="features">
    <div class="container">
        <div class="wrapper">
            <div class="column">
                <div class="sectop flexitem">
                    <div class="logo"><a href="/"><span class="trend-circle"></span>Feature Products</a></div>
                    <div class="second-links">View all<a href="#" class="feat-view-all"><i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="products main flexwrap" style="gap: 2.6em;">
                    
                    @foreach ($products as $product)
                    <div class="item" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px; border-radius: 12px;">
                        <div class="media">
                            <div class="thumbnail object-cover">
                                <a href="{{url('product_details',$product->id)}}">
                                    <img src="/cover/{{ $product->cover }}" alt="product">
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
                        <div class="content" style="margin-bottom:1em">
                            <div class="rating">
                                <div class="stars"></div>
                                <span class="mini-text">(2,134)</span>
                            </div>
                            <h3><a href="#">{{$product->name}}</a></h3>
                            <div class="price">
                                <span class="current">IDR {{$product->price}}</span>
                                <span class="normal mini-text">IDR 400.000</span>
                            </div>
                        </div>
                        <form action="{{url('add_cart',$product->id)}}" method="post">

                            @csrf

                            <input type="number" name="quantity" value="1" min="1">

                            <button type="submit" class="mybtn"> Add to Cart</button>

                        </form>
                    </div>
                    @endforeach
                    
                </div>
                <div id="feature-paginate">
                    {{ $products->links('layouts.pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>