<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Montserrat:ital,wght@0,200;0,300;0,400;1,200&family=Nunito:wght@200;300;400&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
    <style>
      .custom_add{
        margin-left:19em;
        position: absolute;
        top:20em;
        font-family: 'Nunito', sans-serif;
        font-size: bolder !important;
        text-align:center;
        background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 40px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Sindhupalchowk Guest House and Khaja GHar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sewa Haru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gallery</a>
            </li>
            @if(Session::has('customerlogin'))
            <li class="nav-item">
              <a class="nav-link " href="{{url('customer/logout')}}">Logout</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link " href="{{url('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{url('register')}}">Register</a>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link btn btn-sm btn-danger" href="{{url('booking')}}">Bookings</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
</body>
</html>