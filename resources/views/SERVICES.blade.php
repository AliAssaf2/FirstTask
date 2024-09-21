<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
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

        .OURSERVICESBOX {
            position: absolute;
            width: 100%;
            height: 508px;
            left: 0;
            top: 127px;
            background-image: url('{{ asset('img/w95Fb7EEcjE.png') }}');
            background-size: cover; /* Adjust as necessary */
            background-position: center; /* Adjust as necessary */
        }

        .overlay-image {
            position: absolute;
            width: 100%;
            height: 100%; /* Set to 100% to match the parent */
            background-image: url('{{ asset('img/Rectangle 361.png') }}');
            background-size: cover; /* Fill the entire area */
            background-position: center; /* Center the overlay image */
            background-repeat: no-repeat; /* Prevents tiling */
            top: 0;
            left: 0;
            opacity: 0.7; /* Adjust opacity if needed */
            pointer-events: none; /* Ensures clicks go through the overlay */
        }

        .OurServiceTextBox {
            /* Group 3639 */
            position: absolute;
            width: auto;
            height: 129px;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .OurServiceTextBox h1 {
            /* OUR SERVICES */
            position: relative;
            width: 100%;
            height: auto;
            align-content: center;
            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 95px;
            line-height: 111px;
            color: #FFFFFF;

        .OurServiceTextBox p {
            /* WHAT WE PROVIDE */
            position: absolute;
            width: auto;
            height: 35px;
            left: 200px;
            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 35px;
            color: #09C4D0;
        }
        .main {
            /* Rectangle 60 */
            position: absolute;
            width: 1575px;
            height: 1018px;
            left: 3px;
            top: 635px;
            background: #F6F6F6;

        .main .BusinessBox {
            /* Group 3768 */
            position: absolute;
            width: 568px;
            left: 100px;



        }
            /* Business Solutions */

            position: absolute;
            width: 187px;
            height: 23px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 23px;

            color: #504ED8;
        }
            position: absolute;
            width: 344px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;

            color: #8785A5;


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
<div class="OURSERVICESBOX">
    <div class="overlay-image">
        <div class="OurServiceTextBox">
            <h1>OUR SERVICES</h1>
            <p>WHAT WE PROVIDE</p>
        </div>
    </div>
</div>
<div class="main">
<div class="BusinessBox">
        <img src="img/Group 3701.png">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Pulvinar tortor neque luctus diam at urna, sed feugiat.
        </div>
</div>
</body>
</html>
