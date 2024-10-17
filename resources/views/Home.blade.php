<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <script src="{{ asset('js/home.js') }}"></script>

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

    <div class="Home-CarouselBox">

    <div class="Changing-TextBox">
        <div class="Changing-Text">
            <p id="carousel-text"></p>
        </div>
    </div>

        <div class="TextBox1">
            <p>One-stop shop for firmware, devices, apps, cloud solutions</p>
        </div>

        <div class="TextBox2">
            <p>LET’S GET IN TOUCH!</p>
        </div>

        <div class="scroll-downBox">
        <!-- image holder for scroll down image -->
        </div>


{{--<div class="CarouselBox">
    <div id="carouselExampleIndicators" class="custom-carousel" data-bs-ride="carousel">

        <div class="custom-carousel-inner">
            <div class="custom-carousel-item custom-active">
                <img src="img/Carousel-Slider-one.png" class="custom-img" alt="...">
            </div>
            <div class="custom-carousel-item">
                <img src="img/Carousel-Slider-two.png" class="custom-img" alt="...">
            </div>
            <div class="custom-carousel-item">
                <img src="img/Carousel-Slider-three.png" class="custom-img" alt="...">
            </div>
        </div>

    </div>
</div>--}}


        <div class="indicators-buttons-Box">
            <div class="custom-carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="button1" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="button2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="button3"></button>
            </div>

            <div class="prev-next-buttons">
            <button class="custom-carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="custom-carousel-control-prev-icon" aria-hidden="true"></span>

            </button>

            <button class="custom-carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="custom-carousel-control-next-icon" aria-hidden="true"></span>

            </button>
            </div>

        </div>

    </div>

    <div class="Home-AboutUs">

        <div class="AboutUs">
            <h1>ABOUT US</h1>
            <h2>WHO WE ARE</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar tortor neque
                luctus diam at urna, sed feugiat. Sed pulvinar aliquet tristique molestie nisi.
                In adipiscing varius turpis amet. Nunc aliquet euismod turpis neque interdum semper tempor urna.
                Eu vulputate hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc,
                a tincidunt elementum quis ante ultrices sed. Montes,
                blandit faucibus elit cum egestas mollis vitae quisque.
                Suspendisse vivamus vitae auctor mi sollicitudin habitant.
                Id nullam viverra enim nisi feugiat orci. Enim et cras nibh vel
                quis malesuada sed. Hendrerit vestibulum risus praesent sit morbi cras.
                Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu,
                egestas eget. Eu vulputate hac sed praesent condimentum sit in facilisi natoque.
                Iaculis scelerisque nunc, a tincidunt elementum quis ante ultrices sed.
                Montes, blandit faucibus elit cum egestas mollis vitae quisque.
                Suspendisse vivamus vitae auctor mi sollicitudin habitant.
                Id nullam viverra enim nisi feugiat orci. Enim et cras nibh vel quis malesuada sed.
                Hendrerit vestibulum risus praesent sit morbi cras. Eu, in nisi mi
                , eu rhoncus elit viverra lorem vestibulum.
                Vitae justo molestie arcu, egestas eget.</p>
            <div class="AboutUs-Button">

                <button type="button" onclick="window.location.href='{{ url('/about') }}'">KNOW MORE</button>

            </div>
            <div class="AboutUs-Button-Strip">

            </div>
        </div>


    </div>


    </div>



</div>


</body>

</html>
