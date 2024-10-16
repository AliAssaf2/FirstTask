<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">


</head>
<body>

<header class="head">
    <img src="img/zin new 1.png" alt="logo image">
    <div class="navbar-container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/services') }}">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/portfolio') }}">PORTFOLIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">CONTACT US</a>
            </li>
        </ul>
    </div>
</header>

<div class="main">
    <div class="FirstText">
        <p>One-stop shop for firmware, devices, apps, cloud solutions</p>
    </div>

    <div class="SecondText">
        <img src="img/Group 47.png">
    </div>
    <div class="scrolDown">
        <div>
            <img src="img/fe_mouse.png">
        </div>
        <p>SCROLL DOWN</p>
    </div>

    <div class="CarouselBox">
        <div class="rotate">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slider-image-1(1).png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/rafiki.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/rafiki1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>

                <!-- Wrapper for controls and indicators -->
                <div class="carousel-controls-wrapper">
                    <!-- Previous button -->
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                    </ol>

                    <!-- Next button -->
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
