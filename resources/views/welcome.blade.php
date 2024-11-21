<!doctype html>
<html lang="en">
  <head>

    <style>
      .navbar-brand {
    font-family: 'Baskerville', serif;
    font-size: 40px;
    }
          * {
          margin: 0;
          padding: 0;
      }
      .navbar-conts {

          width: 60px;
          height: 60px;
          background-color: transparent;
          content-visibility: hidden;
      }
      .imgfluid{
          position: fixed;
          width: 50px;
          height: 50px;
          top: 1%;
      }
      header{
          position: fixed;
          top: 0;
      }

      ul li a{
          font-family: Georgia, 'Times New Roman', Times, serif;
      }
      ul li a:hover {
          border-bottom: #000000 2px solid;
          box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
      }
      .navbar-conts:hover {
          padding-left: 40PX;
          padding-right: 40PX;
          animation-name: navbar-conts-hover;
          animation-duration: 0.5s;
          animation-timing-function: ease-in-out;
          animation-iteration-count: 1;
          animation-fill-mode: both;
          content-visibility: visible;
      }

      @keyframes navbar-conts-hover {
          0% {
              width: 25%;
              background: #f0f0f0;
              box-shadow: 0 0 0 #cccccc, 0 0 0 #ffffff, 10px 10px 10px #cccccc inset, -10px -10px 10px #ffffff inset;
          }

          25% {
              width: 50%;
              background: #f8f8f8;
              box-shadow: 10px 10px 10px #cccccc, 10px 10px 10px #ffffff, 0 0 0 #cccccc inset, 0 0 0 #ffffff inset;
          }

          50% {
              width: 75%;
              background: #f8f8f8;
              box-shadow: 10px 10px 10px #cccccc, 10px 10px 10px #ffffff, 0 0 0 #cccccc inset, 0 0 0 #ffffff inset;
          }

          100% {
              
              width: 100%;
              background: #fafafa;
              box-shadow: 40px 40px 40px #cccccc, 0 0 0 #ffffff, 0 0 0 #cccccc inset, 2px 2px 2px #ffffff inset;
          }

      }
    </style>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <title>Rifqi's Collection</title>
  </head>


  <body>

    
    <nav class="navbar sticky-top navbar-light bg-body-tertiary" >
        {{-- <div class="container-fluid">
            <img style="width: 35px" src="https://i.ibb.co/BnWLBGC/Letter-r-logo-with-golden-concept-for-consulting-premium-vector-PNG.png" alt="">
          <a class="navbar-brand" href="/">Rifqi's Gallery</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('berita')}}">News</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
              </li>

              @if (Auth::user())
              <li class="nav-item">
                <a class="nav-link" href="{{url('logout')}}">Logout</a>
              </li>

              @else
              <li class="nav-item">
                <a class="nav-link" href="{{url('login')}}">Login</a>
              </li>
              @endif

            </ul>
          </div>
        </div> --}}

        <div class="d-flex vw-100 align-items-center justify-content-center" style="margin-top: 0px">
          
          <img src="https://i.ibb.co/BnWLBGC/Letter-r-logo-with-golden-concept-for-consulting-premium-vector-PNG.png" class="rounded-circle imgfluid" style="margin-top: 0px" alt=""/>
      
          <header
              class="d-flex navbar-conts flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-4 border-bottom rounded-pill  ">
              <a href="~/HOME"
                  class="navbarlogo d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none w-auto">
                  <img src="https://i.ibb.co/BnWLBGC/Letter-r-logo-with-golden-concept-for-consulting-premium-vector-PNG.png" class="rounded-circle" width="32" height="32"  alt=""/>
              </a>
      
              <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="/" class="nav-link px-2 link-dark">Home</a></li>
                  <li><a href="{{url('berita')}}" class="nav-link px-2 link-dark">News</a></li>
                  <li><a href="{{url('gallery')}}" class="nav-link px-2 link-dark">Gallery</a></li>
              </ul>
      
              <div class="col-md-5 text-end">
                @if (Auth::user())
                <li><a  href="{{url('logout')}}" class="btn btn-outline-danger rounded-pill me-2">Logout</a></li>
                @else
                <li><a href="{{url('login')}}" class="btn btn-outline-primary rounded-pill me-2">Login</a></li>
                @endif
              </div>
              {{-- <div class="dropdown text-end">
                  <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                  </a>
                  <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                      <li><a class="dropdown-item" href="#">New project...</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Sign out</a></li>
                  </ul>
              </div> --}}
          </header>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>
      
          <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
      </div>

      </nav>



      {{-- <div class="d-flex vw-100 vh-100 align-items-center justify-content-center">
        <img src="https://www.clipartmax.com/png/full/357-3572287_southwestern-connections-inc-ss-green-projects-logo.png" class="rounded-circle imgfluid"  alt=""/>
    
        <header
            class="d-flex navbar-conts flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-4 border-bottom rounded-pill  ">
            <a href="~/HOME"
                class="navbarlogo d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none w-auto">
                <img src="https://www.clipartmax.com/png/full/357-3572287_southwestern-connections-inc-ss-green-projects-logo.png" class="rounded-circle" width="32" height="32"  alt=""/>
            </a>
    
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
            </ul>
    
            <div class="col-md-5 text-end">
                <button type="button" class="btn btn-outline-primary rounded-pill me-2">Login</button>
                <button type="button" class="btn btn-primary rounded-pill">Sign-up</button>
    
            </div>
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </header>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>
    
        <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
    </div> --}}





      <div>
        @yield('content')
      </div>

      {{-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://wallpaperswide.com/download/japanese_garden_2-wallpaper-3840x2160.jpg" height="400px" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://wallpaperaccess.com/full/48760.jpg" height="400px" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://4kwallpapers.com/images/wallpapers/landscape-evening-sunset-forest-mountains-lake-reflection-3440x1440-8613.jpeg" height="400px" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="text-center w-100 fw-bold mt-3">
        BERITA TERKINI
      </div>
      <hr>

      <div class="container">

        <div class="row">
          @foreach ($data as $item)
            <div class="col-md-3">
              <div class="card" style="">
                  <img src="data_gambar/{{$item->gambar}}" class="card-img-top" alt="..." style="height: 400px">
                  <div class="card-body">
                    <h5 class="card-title">{{$item->judul}}</h5>
                    <p class="card-text">{{Str::limit($item->deskripsi,27)}}</p>
                    <a href="{{url('berita_lengkap')}}/{{$item->id}}" class="btn btn-primary">Selengkapnya</a>
                    <a href="{{url('hapus_berita')}}/{{$item->id}}" class="btn btn-danger">Hapus</a>
                    <a href="{{url('edit_berita')}}/{{$item->id}}" class="btn btn-warning">Edit</a>
                  </div>
                </div>
          </div>

          @endforeach
            <hr>
            <div>
                TIM PEMBUAT
            </div>

            <div class="row">
                <div class="col">
                    <div class="card" style="">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS938biJugdfLkXe8WGVyNOKJTHYcgsNBdBK21wEq8NS3TX60vGndgf53oaOCHB9ODfTDk&usqp=CAU" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
    
                <div class="col">
                    <div class="card" style="">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS938biJugdfLkXe8WGVyNOKJTHYcgsNBdBK21wEq8NS3TX60vGndgf53oaOCHB9ODfTDk&usqp=CAU" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
    
                <div class="col">
                    <div class="card" style="">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS938biJugdfLkXe8WGVyNOKJTHYcgsNBdBK21wEq8NS3TX60vGndgf53oaOCHB9ODfTDk&usqp=CAU" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
      </div> --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>