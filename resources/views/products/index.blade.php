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

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="{{ asset('/css/dashboard-detail.css') }}" rel="stylesheet">
        @vite(['resources/css/app.css','resources/js/app.js'])
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
            <h3 class="text-center text-danger"><b>Products</b> </h3>
            <a href="/create" class="mybtn">Add New Post</a>
          </div>
          @if ($message = Session::get('Success'))
              <script type="text/javascript">
                  const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000,
                      timerProgressBar: true,
                      didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                      }
                      })

                      Toast.fire({
                      icon: 'success',
                      title: '{{ $message }}'
                      })
              </script>    
          @endif
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
              <div class="table-product-head">
                <p>Id</p>
                <p>Image</p>
                <p>Name</p>
                <p>Category</p>
                <p>Inventory</p>
                <p>Actions</p>
              </div>
              <div class="table-product-body">
                @if (count($products) > 0)
                  @foreach ($products as $product)
                    <p>{{ $product->id }}</p>
                    <p><img src="cover/{{ $product->cover }}" style="width:75px; height:75px;"></p>
                    <p>{{ $product->name }}</p>
                    <p>{{ $product->category }}</p>
                    <p>{{ $product->quantity }}</p>
                    <div style="display: flex">
                      <a href="/edit/{{ $product->id }}" class="btn-link btn btn-success" style="padding-top: 4px;padding-bottom:4px">
                        <i class="fas fa-pencil-alt" ></i> 
                      </a>
                      <form action="/delete/{{ $product->id }}" method="post">
                        @method('delete')
                        @csrf
                          <button class="btn btn-danger" onclick="deleteConfirm(event)" type="submit">
                            <i class="far fa-trash-alt"></i>
                          </button>
                      </form>
                    </div>
                  @endforeach
                @else
                  <p>There is no product here</p>
                @endif
              </div>
              <div id="feature-paginate">
                {{ $products->links('layouts.pagination') }}
              </div>
            </div>
        </main>
      </section>
        <script>
          window.deleteConfirm = function (e) {
              e.preventDefault();
              var form = e.target.form;
              Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
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