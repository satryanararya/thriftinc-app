<html>
    <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>THRIFTINC</title>

            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

            <!-- Styles -->
            <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

            <!-- Bootstrap CSS -->
            {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
            <!-- Font-awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

            <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <!-- My CSS -->
            <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">
            <link href="{{ asset('/css/dashboard-detail.css') }}" rel="stylesheet">

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
        <body>
            <section id="sidebar">
                <a href="{{url('dashboard')}}" class="brand">
                    <i class='bx bx-user' ></i>
                    <span class="text">Thriftinc</span>
                </a>
                <ul class="side-menu top">
                    <li class="active">
                        <a href="{{url('dashboard')}}">
                            <i class='bx bxs-dashboard' ></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bxs-shopping-bag-alt' ></i>
                            <span class="text">My Store</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bxs-doughnut-chart' ></i>
                            <span class="text">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bxs-message-dots' ></i>
                            <span class="text">Message</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bxs-group' ></i>
                            <span class="text">Team</span>
                        </a>
                    </li>
                </ul>
                <ul class="side-menu">
                    <li>
                        <a href="{{ route('logout') }}" class="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class='bx bxs-log-out-circle' ></i>
                            <span class="text">{{ __('Logout') }} </span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </section>

        <section id="content">
            <!-- NAVBAR -->
            <nav>
                <i class='bx bx-menu' ></i>
                <a href="#" class="nav-link">Categories</a>
                <form action="#">
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                        <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                    </div>
                </form>
                <input type="checkbox" id="switch-mode" hidden>
                <label for="switch-mode" class="switch-mode"></label>
                <a href="#" class="notification">
                    <i class='bx bxs-bell' ></i>
                    <span class="num">8</span>
                </a>
                <a href="#" class="profile">
                    Hello, {{ Auth::user()->name }}
                </a>
            </nav>

        <main class="container">
            <div class="titlebar">
                <h3>Edit Product</h3>
            </div>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="special-card">
                <div>
                    <label>Cover Image</label>
                    <form action="/deletecover/{{ $products->id }}" method="post">
                        <button class="btn text-danger">X</button>
                        @csrf
                        @method('delete')
                    </form>
                    <img src="/cover/{{ $products->cover }}" class="img-responsive" style="height: 75px; width: 75px;" alt="" srcset="">
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                
                    @if (count($products->images)>0)
                        <p>Images</p>
                        <div style="display: flex;">
                            @foreach ($products->images as $img)
                                <img src="/images/{{ $img->image }}" class="img-responsive" style="height: 75px; width: 75px;" alt="" srcset="">
                                <form action="/deleteimage/{{ $img->id }}" method="post">
                                    <button class="btn text-danger">X</button>
                                        @csrf
                                        @method('delete')
                                </form>
                            @endforeach
                        </div>
                    @endif
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
                </div>
            </div>
            
                <form action="/update/{{ $products->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="card">
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $products->name }}">

                            <label>Description</label>
                            <textarea cols="10" rows="5" name="description" value="{{ $products->description }}">{{ $products->description }}</textarea>

                            <label>Category</label>
                            <select  name="category">
                                @foreach (json_decode('{"Jacket":"Jacket", "Shirt":"Shirt", "Shoes":"Shoes"}', true) as $optionKey => $optionValue)
                                    <option value="{{$optionKey}}" {{ (isset($products->category) && $products->category == $optionKey) ? 'selected' : ''}} >{{ $optionValue }}</option>
                                @endforeach
                            </select>

                            <label>Color</label>
                            <select  name="color">
                                @foreach (json_decode('{"Black":"Black", "Brown":"Brown", "White":"White", "Red":"Red", "Yellow":"Yellow", "Green":"Green", "Blue":"Blue"}', true) as $optionKey => $optionValue)
                                    <option value="{{$optionKey}}" {{ (isset($products->color) && $products->color == $optionKey) ? 'selected' : ''}} >{{ $optionValue }}</option>
                                @endforeach
                            </select>

                            <label>Size</label>
                            <select  name="size">
                                @foreach (json_decode('{"XS":"XS", "S":"S", "M":"M", "L":"L", "XL":"XL"}', true) as $optionKey => $optionValue)
                                    <option value="{{$optionKey}}" {{ (isset($products->size) && $products->size == $optionKey) ? 'selected' : ''}} >{{ $optionValue }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div>
                            
                            <label>Quantity</label>
                            <input type="text" name="quantity" value="{{$products->quantity}}" >
                            
                            <label>Price</label>
                            <input type="text" name="price"  value="{{$products->price}}">
                            
                            <label>Brand</label>
                            <input type="text" name="brand"  value="{{$products->brand}}">
                            
                            <label>Type</label>
                            <input type="text" name="type"  value="{{$products->type}}">
                            
                            <label>Material</label >
                            <input type="text" name="material"  value="{{$products->material}}">

                            <button type="submit" class="mybtn" style="width:100%; margin-top:2em;">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </main>
        <script>
            function showFile(event){
                var input = event.target;
                var reader = new FileReader();
                reader.onload = function(){
                    var dataURL = reader.result;
                    var output = document.getElementById('file-preview');
                    output.src = dataURL;
                };
                reader.readAsDataURL(input.files[0]);
            }
        </script>
    </body>
</html>





        









