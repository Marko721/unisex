<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:image" content="http://unisex.rs/images/feat.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="700">
    <title>Unisex</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="container">
      <p></p>
    </div>
    <hr>
    <div class="container d-flex justify-content-center my-2">
        <img id="logo-main" src="images/Logo.png" width="200" alt="">
    </div>

    <div class="container">
    <hr>
    </div>

    <nav id="mainNavbar" class="navbar navbar-expand-md navbar-light sticky-top">
        <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a href="/" class="nav-link">Početna</a>
                </li>
                <li class="nav-item">
                    <a href="/o-nama" class="nav-link">O nama</a>
                </li>
                <li class="nav-item">
                    <a href="/cenovnik" class="nav-link">Cenovnik</a>
                </li>
                <li class="nav-item">
                    <a href="/kontakt" class="nav-link">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a href="/posao" class="nav-link">Posao</a>
                </li>
                <li class="nav-item">
                    <a href="/galerija" class="nav-link">Galerija</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')


    <div class="jumbotron jumbotron-fluid bg-dark mt-5 mb-0">
        <div id="footer" class="container">
            <div class="row text-white mb-5 ">
                <div id="logofoot" class="col-md text-center">
                  <img id="#" src="images/logofoot.png" width="200" alt="">
                </div>
                <div class="col-md align-items-center text-center footer-info">
                  <h5>Kontakt:</h5><p>Makenzijeva 19, Beograd<br> +381 (0)11 383 6025</p>
                </div>
                <div class="col-md align-items-center text-center footer-info">
                  <h5>Radno Vreme:</h5><p>Ponedeljak - Petak : 9-20h,<br> Subota : 9-16h</p>
                </div>
                <div class="col-md align-items-center text-center footer-info">
                  <h5>Pratite nas:</h5>
                  <p>
                    <a class="text-white" href="https://www.instagram.com/unisex_hair_studio_slavija/"><i class="fab fa-instagram fa-2x mx-3"></i></a>
                    <a class="text-white" href=""><i class="fab fa-facebook-f fa-2x"></i></a>
                  </p>
                </div>
              </div>
          <hr>
          <ul class="nav text-center justify-content-center flex-column flex-sm-row">
            <li class="nav-item">
              <a href="index.html" class="nav-link text-secondary">Početna</a>
            </li>
            <li class="nav-item">
                <a href="/o-nama" class="nav-link text-secondary">O nama</a>
            </li>
            <li class="nav-item">
                <a href="cenovnik.html" class="nav-link text-secondary">Cenovnik</a>
            </li>
            <li class="nav-item">
                <a href="kontakt.html" class="nav-link text-secondary">Kontakt</a>
            </li>
            <li class="nav-item">
                <a href="posao.html" class="nav-link text-secondary">Posao</a>
            </li>
          </ul>
          <hr>
          <p class="text-center mt-2 mb-0 text-secondary">Designed by
          <a class="text-center text-secondary" href="">Webloft</a>
          </p>
      </div>
    </div>
    
    
    
    
      
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    
    <script src="{{asset('js/app.js')}}"></script>
    </body>
    </html>