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
//test
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


<div class="CarouselBox">
    <img src="img/CarouselBox-Rings-.png" alt="rings"/>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Carousel-Slider-one.png" class="d-block w-100" alt="ONE">
            </div>
            <div class="carousel-item">
                <img src="img/Carousel-Slider-two.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/Carousel-Slider-three.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</div>


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

    <div class="Home-OurServices">
    <div class="OURSERVICESBOX">
        <div class="OurServiceTextBox">
            <h1>OUR SERVICES</h1>
            <p>WHAT WE PROVIDE</p>
        </div>
    </div>

    <div class="OurServicesIconBox">
       <div class="carousel-container">
    <div class="carousel-wrapper" id="carouselWrapper">
        <!-- Existing Carousel cards -->
        <div class="card">
    <div class="image-container">
        <img src="img/Group 3701.png" alt="New Image" class="centered-image" />
    </div>
    <div class="card-body">
        <h5>Business
            Solutions</h5>

    </div>
</div>
<div class="card">
    <div class="image-container">
        <img src="img/Group 3703.png" alt="New Image" class="centered-image" />
    </div>
    <div class="card-body">
        <h5>Software
            Consultancy</h5>

    </div>
</div>
<div class="card">
    <div class="image-container">
        <img src="img/Group 3702.png" alt="New Image" class="centered-image" />
    </div>
    <div class="card-body">
        <h5>Enterprise
            Platforms</h5>

    </div>
</div>
<div class="card">
    <div class="image-container">
        <img src="img/Group 3704.png" alt="New Image" class="centered-image" />
    </div>
    <div class="card-body">
        <h5>Full-Stack
            Development</h5>

    </div>
</div>
<div class="card">
    <div class="image-container">
        <img src="img/Group 3701.png" alt="New Image" class="centered-image" />
    </div>
    <div class="card-body">
        <h5>Card 5</h5>
        <p>Card description 5</p>
    </div>
</div>
<div class="card">
    <div class="image-container">
        <img src="img/Group 3701.png" alt="New Image" class="centered-image" />
    </div>
    <div class="card-body">
        <h5>Card 6</h5>
        <p>Card description 6</p>
    </div>
</div>
<div class="card">
    <div class="image-container">
        <img src="img/Group 3701.png" alt="New Image" class="centered-image" />
    </div>
    <div class="card-body">
        <h5>Card 7</h5>
        <p>Card description 7</p>
    </div>
</div>
<div class="card">
    <div class="image-container">
        <img src="img/Group 3701.png" alt="New Image" class="centered-image" />
    </div>
    <div class="card-body">
        <h5>Card 8</h5>
        <p>Card description 8</p>
    </div>
</div>
<div class="card">
    <div class="image-container">
        <img src="img/Group 3701.png" alt="New Image" class="centered-image" />
    </div>
    <div class="card-body">
        <h5>Card 9</h5>
        <p>Card description 9</p>
    </div>
</div>
<div class="card">
    <div class="image-container">
        <img src="img/Group 3701.png" alt="New Image" class="centered-image" />
    </div>
    <div class="card-body">
        <h5>Card 10</h5>
        <p>Card description 10</p>
    </div>
</div>
<div class="card">
    <div class="image-container">
        <img src="img/Group 3701.png" alt="New Image" class="centered-image" />
    </div>
    <div class="card-body">
        <h5>Card 11</h5>
        <p>Card description 11</p>
    </div>
</div>
    </div>
<!-- Left arrow -->
<button class="carousel-control left" onclick="moveLeft()">
    <img src="../img/Left-arrow.png" alt="Left Arrow" class="arrow-button">
</button>
<!-- Right arrow -->
<button class="carousel-control right" onclick="moveRight()">
    <img src="../img/Right-arrow.png" alt="Right Arrow" class="arrow-button">
</button>
</div>
    </div>
</div>

    <div class="HomePortfolioBox">

            <h1>PORTFOLIO</h1>
            <p>SOME OF OUR PROJECTS</p>
        <div class="picture-div">
            <div class="container">
                <div class="row g-0">
                    <div class="col" >
                        <img src="img/Ylk5n_nd9dA(4).png" class="img-fluid" alt="Image 1">
                        <div class="overlay">
                            <h2>PROJECT TITLE</h2>
                            <p class="funnyP">Company name</p>
                        </div>
                    </div>
                    <div class="col">
                        <img src="img/Ylk5n_nd9dA(1).png" class="img-fluid" alt="Image 2">
                    </div>
                    <div class="col">
                        <img src="img/Ylk5n_nd9dA(3).png" class="img-fluid" alt="Image 3">
                    </div>
    </div>
                </div>
<div class="container">
    <div class="row g-0">
        <div class="col">
            <img src="img/lap1.jpg" class="img-fluid" alt="Image 4">
        </div>
        <div class="col">
            <img src="img/lap2.jpg" class="img-fluid" alt="Image 5">
        </div>
        <div class="col">
            <img src="img/lap3.png" class="img-fluid" alt="Image 6">
        </div>
    </div>
</div>

    </div>
        </div>

    <div class="HomeEmailBox">
        <img src="img/contact-us-background.png" alt="back img" class="backImg">
        <div class="EmailBoxText">
            <h1>CONTACT US</h1>
            <p>LET’S HEAR FROM YOU</p>
        </div>
        <div class="frameImg">
            <img src="img/Frame.png" alt="frame img">
        </div>
        <div class="EmailForm">
            <img src="img/EmailForm.png" alt="email form">
        </div>
    </div>

    </div>

<footer class="foot">
    <div class="inner-foot">
        <img src="img/zin new 1.png" class="zen">
        <div class="foot-nav">
            <div class="navbar-container">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="placeBox">
            <img src="img/round-place-24px.png" >
            <p class="placeText">345 Faulconer Drive, Suite 4 • Charlottesville, CA, 12345</p>
        </div>
        <div class="phoneBox">
            <img src="img/round-phone-24px.png">
            <p>(123) 456-7890</p>
        </div>
        <div class="emailBox">
            <img src="img/round-local-printshop-24px.png">
            <p>email@info.com</p>
        </div>
        <div class="SocialMediaBox">
            <p>Social Media</p>
            <div class="SocialMediaBoxBox">
                <img src="img/facebook black.1.png" class="facebook">
                <img src="img/twitter black.1.png" class="twitter">
                <img src="img/linkedin black.1.png" class="linkedin">
                <img src="img/youtube color.1.png" class="youtube">
                <img src="img/instagram black.1.png" class="instagram">
                <img src="img/googleplus black.1.png" class="googleplus">
                <img src="img/pinterest color.1.png" class="pinterest">
                <img src="img/rss black.1.png" class="rss">
            </div>
        </div>

    </div>
</footer>







</body>

</html>
