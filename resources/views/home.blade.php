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
            <li class="nav-item">
              <a class="nav-link btn btn-sm btn-danger" href="{{url('booking')}}">Bookings</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link " href="{{url('frontlogin')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{url('register')}}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-sm btn-danger" href="#">Bookings</a>
            </li>
            @endif
       
          </ul>
        </div>
      </div>
    </nav>
    @if(Session::has('success'))
    <p class="text-center text-danger">{{session('success')}}</p>
    @endif
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('img/banner1.png')}}" style="height:70vh;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/banner2.png')}}" style="height:70vh;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/banner3.png')}}" style="height:70vh;" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      <div class="custom_add ">
        <h1 class="text-primary"><span class="text-dark">Welcome to</span> <br>
          Sindhupalchowk Guest House and Khaja GHar
        </h1>
        <button class="btn btn-success btn-md">Make a Booking Now</button>
        <button class="btn btn-danger btn-md">Call Now</button>
      </div>
    </div>
    <div class="containerr mt-4">
      <h1 class="text-center">Services</h1>
      <div class="row">
        <div class="col-md-4">
          <img class="img-fluid" src="{{url('img/hotel.png')}}" alt="">
        </div>
        <div class="col-md-8">
          <h3 class="text-center text-danger">Sindhupalchowk Lodge</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea beatae quibusdam , Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus repellendus ullam harum esse omnis atque, tempore voluptatum pariatur exercitationem assumenda numquam similique dolores perferendis adipisci dignissimos molestiae est eius, minus sunt maiores itaque facere officia rerum neque! Beatae exercitationem modi voluptate tenetur ratione dicta asperiores tempore magnam impedit, repudiandae quidem tempora mollitia vel, iure dolor assumenda hic! Dignissimos quo nulla assumenda, praesentium magnam eaque maiores repellendus sed, exercitationem corporis ducimus. In praesentium quaerat enim illum, delectus sequi libero iusto porro, consectetur recusandae eligendi voluptates facere aut earum eius cupiditate et totam voluptas dolor corporis. Expedita maiores a enim voluptas id! ducimus earum suscipit. Ut voluptatibus iure saepe, laudantium architecto optio tempora recusandae aperiam animi tempore similique neque nostrum magni!</p>
        <a class="nav-link" href="">Read More</a>
        </div>
      </div>
    </div>
    <div class="container my-4">
      <h1 class="text-center border-bottom text-danger">Gallery</h1>
      <div class="row my-4">
        @foreach ($data as $item)
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              @foreach ($item->roomtypeimgs as $img)
                  <img width="150" src="{{asset('my_custom_symlink_1/'.$img->img_src)}}" alt="">
              @endforeach
              <p class="card-title">
                <a class="nav-link" href="">{{$item->title}}</a>
              </p>
            </div>
          </div>
        </div>
        @endforeach
       
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>