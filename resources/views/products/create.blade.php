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
            @vite(['resources/css/app.css','resources/js/app.js'])
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
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>Add New Post</b> </h3>
                    
                    <div class="form-group">
                        <form action="/post" method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card">
                                <div>
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control m-2" placeholder="ex. Jaket Carhartt">
        
                                    <label>Description</label>
                                    <textarea cols="10" rows="5" name="description" ></textarea>
        
                                    <label class="m-2">Cover Image</label>
                                    <img src="" alt="" class="img-product" id="file-preview"/>
                                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover" accept="image/*" onchange="showFile(event)">
        
                                    <label class="m-2">Images</label>
                                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" accept="image/*" multiple>
        
                                    <hr>
                                    <select  name="status">
                                        @foreach (json_decode('{"Feature":"Feature", "Trending":"Trending", "Related":"Related"}', true) as $optionKey => $optionValue)
                                            <option value="{{$optionKey}}" >{{ $optionValue }}</option>
                                        @endforeach
                                    </select>

                                    <label>Category</label>
                                    <select  name="category">
                                        @foreach (json_decode('{"Jacket":"Jacket", "Shirt":"Shirt", "Shoes":"Shoes"}', true) as $optionKey => $optionValue)
                                            <option value="{{$optionKey}}" >{{ $optionValue }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    
        
                                    <label>Color</label>
                                    <select  name="color">
                                        @foreach (json_decode('{"Black":"Black", "Brown":"Brown", "White":"White", "Red":"Red", "Yellow":"Yellow", "Green":"Green", "Blue":"Blue"}', true) as $optionKey => $optionValue)
                                            <option value="{{$optionKey}}" >{{ $optionValue }}</option>
                                        @endforeach
                                    </select>
        
                                    <label>Size</label>
                                    <select  name="size">
                                        @foreach (json_decode('{"XS":"XS", "S":"S", "M":"M", "L":"L", "XL":"XL"}', true) as $optionKey => $optionValue)
                                            <option value="{{$optionKey}}" >{{ $optionValue }}</option>
                                        @endforeach
                                    </select>
                                    <hr>
                                    <label>Quantity</label>
                                    <input type="text" name="quantity" >
                                    
                                    <label>Price</label>
                                    <input type="text" name="price" >
                                    
                                    <label>Brand</label>
                                    <input type="text" name="brand" >
                                    
                                    <label>Type</label>
                                    <input type="text" name="type" >
                                    
                                    <label>Material</label>
                                    <input type="text" name="material" >
                                </div>
                            </div>
                            <button type="submit" class="mybtn" style="margin-top:1em;">Submit</button>
                        </form>
                    </div>
                </div>
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


