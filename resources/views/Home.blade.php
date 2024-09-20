<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .head {
            width: 100%;
            height: 120px;
            background: #FFFFFF;
            position: relative;
        }
        .head img {
            position: absolute;
            width: 114.8px;
            height: 70px;
            left: 101px;
            top: 25px;
        }
        .navbar-container {
            display: flex;
            justify-content: flex-end;
            padding: 25px 100px;
            left: 878px;
            top: 51px;
        }
        .main {
            width: 100%;
            height: 780px;
            background: linear-gradient(180deg, #F4F4F4 0%, #FFFFFF 68.85%);
        }
        .FirstText {
            /* One-stop shop for firmware, devices, apps, cloud solutions */
            position: absolute;
            width: 382px;
            height: 44px;
            left: 121px;
            top: 549px;
            font-family: 'Work Sans', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 23px;
            color: #8785A5;
        }

        .SecondText {
            /* LET’S GET IN TOUCH! */
            position: absolute;
            width: 241px;
            height: 54px;
            left: 121px;
            top: 680px;
        }
        .scrolDown{
            /* Rectangle 52 */

            position: absolute;
            width: 116px;
            height: 93px;
            left: 121px;
            top: 850px;
            background: linear-gradient(180deg, #00CAD7 -8.06%, #504ED8 100%);
            box-shadow: 0px 4px 10px rgba(57, 56, 150, 0.53);
            border-radius: 90px 90px 0px 0px;
        }
        .scrolDown img{
            position: absolute;
            left: 43px;
            top:15px;
        }
        .scrolDown p{
            /* SCROLL DOWN */

            position: absolute;
            width: 100px;
            height: 12px;
            left: 15 px;
            top:60px;
            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 10px;
            line-height: 12px;
            /* identical to box height */
            text-align: center;
            letter-spacing: 0.1em;

            color: #FFFFFF;
        }
        .coursel{
            /* Group 80 */

            position: absolute;
            width: 576px;
            height: 494.1px;
            left: 672.94px;
            top: 225px;


        }
    </style>
</head>
<body>

<header class="head">
    <img src="img/zin new 1.png" alt="logo image">
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
</header>

<div class="main">
    <div class="FirstText">
        <p>One-stop shop for firmware, devices, apps, cloud solutions</p>
    </div>

        <div class="SecondText">
           <img src="img/Group 47.png">
        </div>
   <div class="scrolDown">
       <div >
       <img src="img/fe_mouse.png">
       </div>
        <p>SCROLL DOWN</p>
   </div>
    <div class="coursel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slider-image-1(1).png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
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
        </div>
    </div>
</div>

</body>
</html>
