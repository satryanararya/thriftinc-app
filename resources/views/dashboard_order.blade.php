

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
        <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<script src="{{ mix('js/app.js') }}"></script> --}}
    <link href="{{ asset('/css/dashboard-detail.css') }}" rel="stylesheet">
	@vite(['resources/css/app.css','resources/js/app.js'])
	<title>Thriftinc</title>
</head>
<body>

	<!-- SIDEBAR -->
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
	<!-- SIDEBAR -->



	<!-- CONTENT -->
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
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>View Order</h1>
					<ul class="breadcrumb">
						<li>
							<a href="{{url('dashboard')}}">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="">View Order</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="table">
                <div class="table-filter">
                    <div>
                        <ul class="table-filter-list">
                            <li>
                                <p class="table-filter-link link-active">All</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <form method="GET" action="{{ url('products')}}" accept-charset="UTF-8" role="search">
                    <div class="table-search">   
                        <div>
                            <button class="search-select">
                                Search Product
                            </button>
                            <span class="search-select-arrow">
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </div>
                        <div class="relative">
                            <input class="search-input" type="text" name="search" placeholder="Search product..." name="search" value="{{ request('search') }}">
                        </div>
                    </div>
                </form>
                <div class="order-table-product-head">
                    <p>Name</p>
                    <p>Email</p>
                    <p>Product Name</p>
                    <p>Product Image</p>
                    <p>Quantity</p>
                    <p>Price</p>
                    <p>Payment Status</p>
                    <p>Delivery Status</p>
                    <p>Actions (Delivered)</p>
                </div>

                @foreach ($orders as $order)
                <div class="order-table-product-body">
                    <p>{{$order->name}}</p>
                    <p>{{$order->email}}</p>
                    <p>{{$order->product_name}}</p>
                    <p><img src="/cover/{{ $order->cover }}" alt="" style="height:75px;width:75px;"></p>
                    <p>{{$order->quantity}}</p>
                    <p>{{$order->price}}</p>
                    <p>{{$order->payment_status}}</p>
                    <p>{{$order->delivery_status}}</p>

					@if ($order->delivery_status=='Processing')
						<p><a href="{{url('delivered',$order->id)}}" class="" style="background-color:#2dcb57; color:white; padding: 0.2em 0.4em; border-radius: 15px;">Confirm</a></p>
					@else
						<p style="color: #1bf555; font-weight: bold;">Done <i class="ri-check-double-line"></i></p>
					@endif
                </div>
                @endforeach
                
            </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="dashboard.js"></script>
</body>
</html>