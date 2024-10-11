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
            background-image: url('{{ asset('img/w95Fb7EEcjE.png') }}') ;
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
        }

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
        }

        .main .BusinessBox {
            /* Group 3768 */
            position: absolute;
            position: relative;
            width: 568px;
            height: 290px;
            left: 100px;
            top: 70px;
            background-color:  #F6F6F6;
            transition: background-color 0.3s ease; /* smooth transition */
        }

        .main .BusinessBox:hover {
            background-color: #FFFFFF; /* color on hover */
        }
        .main .hoverButton {
            display: none;
            position: absolute;
            top: 250px;
            left: 540px;
            transform: translate(-50%, -50%);

            /* Set the background image */
            background-image: url('{{ asset('img/bx_bx-arrow-to-bottom.png') }}');
            background-size: contain; /* Ensure the image fits within the button */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            background-position: center; /* Center the image */

            /* Remove default button styles */
            width: 35px; /* Adjust width to match the image's dimensions */
            height: 35px; /* Adjust height to match the image's dimensions */
            padding: 0; /* Remove padding to avoid resizing the button */
            background-color: transparent; /* Make the background transparent */
            border: none; /* Remove the border */
            outline: none; /* Remove outline */
            cursor: pointer;
        }

        /* Show the button when hovering over the div */
        .main .BusinessBox:hover .hoverButton {
            display: inline-block;
        }

        .main .BusinessBox:hover .hoverButton {
            display: inline-block;
        }

        .main .BusinessBox .pictureBox {
            /* Rectangle 63 */
            position: absolute;
            width: 150px;
            height: 150px;
            left: 50px;
            top: 50px;

            background: #FFFFFF;
            box-shadow: 0px 4px 29px rgba(80, 78, 216, 0.06);
            border-radius: 37px;
            transform: rotate(-45deg);
            overflow: hidden;
            display: flex; /* Flexbox to center the image */
            justify-content: center;
            align-items: center;
        }
        .main .BusinessBox .pictureBox img{
            /* software-consultancy */
            position: absolute;
            width: 235px;
            height: 244px;
            object-fit: cover;
            transform: rotate(45deg);
            border-radius: inherit;

        }
        .main .BusinessBox .BusinessTitleBox{
            /* Business Solutions */

            position: absolute;
            width: 187px;
            height: 23px;
            left: 234px;
            top: 40px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 23px;

            color: #504ED8;
        }
        .main .BusinessBox .BusinessBoxText{
            position: absolute;
            width: 344px;
            height: 173px;
            left: 234px;
            top: 70px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;

            color: #8785A5;


        }

        .main .SoftwareConsultancyBox {
            position: absolute;
            width: 568px;
            height: 290px;
            left: 700px;
            top: 70px;
            background-color: #F6F6F6;
            transition: background-color 0.3s ease;
        }

        .main .SoftwareConsultancyBox:hover {
            background-color: #FFFFFF; /* color on hover */
        }

        .main .SoftwareConsultancyBox .hoverButton {
            display: none;
            position: absolute;
            top: 250px;
            left: 540px;
            transform: translate(-50%, -50%);

            /* Set the background image */
            background-image: url('{{ asset('img/bx_bx-arrow-to-bottom.png') }}');
            background-size: contain; /* Ensure the image fits within the button */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            background-position: center; /* Center the image */

            /* Remove default button styles */
            width: 35px; /* Adjust width to match the image's dimensions */
            height: 35px; /* Adjust height to match the image's dimensions */
            padding: 0; /* Remove padding to avoid resizing the button */
            background-color: transparent; /* Make the background transparent */
            border: none; /* Remove the border */
            outline: none; /* Remove outline */
            cursor: pointer;
        }

        /* Show the button when hovering over the SoftwareConsultancyBox */
        .main .SoftwareConsultancyBox:hover .hoverButton {
            display: inline-block; /* Show the button on hover */
        }

        .main .SoftwareConsultancyBox .pictureBox {
            position: absolute;
            width: 150px;
            height: 150px;
            left: 50px;
            top: 50px;

            background: #FFFFFF;
            box-shadow: 0px 4px 29px rgba(80, 78, 216, 0.06);
            border-radius: 37px;
            transform: rotate(-45deg);
            overflow: hidden;
            display: flex; /* Flexbox to center the image */
            justify-content: center;
            align-items: center;
        }

        .main .SoftwareConsultancyBox .pictureBox img {
            position: absolute;
            width: 235px;
            height: 244px;
            object-fit: cover;
            transform: rotate(45deg);
            border-radius: inherit;
        }

        .main .SoftwareConsultancyBox .SoftwareTitleBox {
            position: absolute;
            width: 200px;
            height: 23px;
            left: 234px;
            top: 40px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 23px;

            color: #504ED8;
        }

        .main .SoftwareConsultancyBox .SoftwareBoxText {
            position: absolute;
            width: 344px;
            height: 173px;
            left: 234px;
            top: 70px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;

            color: #8785A5;
        }

        .main .EnterpriseBox{
            position: absolute;

            width: 568px;
            height: 290px;
            left: 100px;
            top: 400px;
            background-color:  #F6F6F6;
            transition: background-color 0.3s ease; /* smooth transition */
        }

        .main .EnterpriseBox:hover {
            background-color: #FFFFFF; /* color on hover */
        }

        .main .EnterpriseBox .hoverButton {
            display: none;
            position: absolute;
            top: 250px;
            left: 540px;
            transform: translate(-50%, -50%);

            /* Set the background image */
            background-image: url('{{ asset('img/bx_bx-arrow-to-bottom.png') }}');
            background-size: contain; /* Ensure the image fits within the button */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            background-position: center; /* Center the image */

            /* Remove default button styles */
            width: 35px; /* Adjust width to match the image's dimensions */
            height: 35px; /* Adjust height to match the image's dimensions */
            padding: 0; /* Remove padding to avoid resizing the button */
            background-color: transparent; /* Make the background transparent */
            border: none; /* Remove the border */
            outline: none; /* Remove outline */
            cursor: pointer;
        }

        /* Show the button when hovering over the SoftwareConsultancyBox */
        .main .EnterpriseBox:hover .hoverButton {
            display: inline-block; /* Show the button on hover */
        }
        .main .EnterpriseBox .pictureBox {
            position: absolute;
            width: 150px;
            height: 150px;
            left: 50px;
            top: 50px;

            background: #FFFFFF;
            box-shadow: 0px 4px 29px rgba(80, 78, 216, 0.06);
            border-radius: 37px;
            transform: rotate(-45deg);
            overflow: hidden;
            display: flex; /* Flexbox to center the image */
            justify-content: center;
            align-items: center;
        }

        .main .EnterpriseBox .pictureBox img {
            position: absolute;
            width: 235px;
            height: 244px;
            object-fit: cover;
            transform: rotate(45deg);
            border-radius: inherit;
        }
        .main .EnterpriseBox .EnterpriseTitleBox {
            position: absolute;
            width: 200px;
            height: 23px;
            left: 234px;
            top: 40px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 23px;

            color: #504ED8;
        }

        .main .EnterpriseBox .EnterpriseBoxText {
            position: absolute;
            width: 344px;
            height: 173px;
            left: 234px;
            top: 70px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;

            color: #8785A5;
        }

        .main .FullStackBox{
            position: absolute;
            width: 568px;
            height: 290px;
            left: 700px;
            top: 400px;
            background-color: #F6F6F6   ;
            transition: background-color 0.3s ease;
        }

        .main .FullStackBox:hover {
            background-color: #FFFFFF; /* color on hover */
        }

        .main .FullStackBox .hoverButton {
            display: none;
            position: absolute;
            top: 250px;
            left: 540px;
            transform: translate(-50%, -50%);

            /* Set the background image */
            background-image: url('{{ asset('img/bx_bx-arrow-to-bottom.png') }}');
            background-size: contain; /* Ensure the image fits within the button */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            background-position: center; /* Center the image */

            /* Remove default button styles */
            width: 35px; /* Adjust width to match the image's dimensions */
            height: 35px; /* Adjust height to match the image's dimensions */
            padding: 0; /* Remove padding to avoid resizing the button */
            background-color: transparent; /* Make the background transparent */
            border: none; /* Remove the border */
            outline: none; /* Remove outline */
            cursor: pointer;
        }

        /* Show the button when hovering over the SoftwareConsultancyBox */
        .main .FullStackBox:hover .hoverButton {
            display: inline-block; /* Show the button on hover */
        }
        .main .FullStackBox .pictureBox {
            position: absolute;
            width: 150px;
            height: 150px;
            left: 50px;
            top: 50px;

            background: #FFFFFF;
            box-shadow: 0px 4px 29px rgba(80, 78, 216, 0.06);
            border-radius: 37px;
            transform: rotate(-45deg);
            overflow: hidden;
            display: flex; /* Flexbox to center the image */
            justify-content: center;
            align-items: center;
        }

        .main .FullStackBox .pictureBox img {
            position: absolute;
            width: 235px;
            height: 244px;
            object-fit: cover;
            transform: rotate(45deg);
            border-radius: inherit;
        }
        .main .FullStackBox .FullStackTitleBox {
            position: absolute;
            width: 220px;
            height: 23px;
            left: 234px;
            top: 40px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 23px;

            color: #504ED8;
        }

        .main .FullStackBox .FullStackBoxText {
            position: absolute;
            width: 344px;
            height: 173px;
            left: 234px;
            top: 70px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;

            color: #8785A5;
        }

        .foot{
            /* Footer 8 white */

            position: absolute;
            width: 1577px;
            height: 382px;
            left: 0px;
            top: 1400px;
            background: #FFFFFF;

        }
        .foot .inner-foot{
            /* Footer UI */

            position: absolute;
            width: 1374px;
            height: 247px;
            left: 183px;
            top: 25px;


        }
        .foot .inner-foot .zen{
            /* zin new 1 */

            position: absolute;
            width: 242.29px;
            height: 148px;
            left: 277px;
            top: 100px;


        }

        .foot .inner-foot .foot-nav {
            /* About us */

            position: absolute;
            width: auto;
            height: 14px;
            left: 600px;
            top: 65px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 12px;
            line-height: 14px;
            /* identical to box height */
            text-transform: uppercase;

            color: #504ED8;
            display: flex;
            gap: 20px;
        }
        .foot .inner-foot .foot-nav a{
            color:  #504ED8;

        }
        .foot .inner-foot .placeBox{
            /* Location */

            position: absolute;
            width: 354px;
            height: 24px;
            left: 721px;
            top: 144px;


        }
        .foot .inner-foot .placeBox img{
            /* round-place-24px */

            position: absolute;
            width: 24px;
            height: 24px;
            left: 0px;
            top: 0px;


        }
        .foot .inner-foot .placeText{
            /* 503 Faulconer Drive, */

            position: absolute;
            height: 16px;
            left: 11.3%;
            right: -19.21%;
            top: calc(50% - 16px/2 - 1px);

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 16px;

            color: #504ED8;


        }

        .foot .inner-foot .phoneBox{
            /* phone */
            position: absolute;
            width: 123px;
            height: 24px;
            left: 721px;
            top: 184px;

        }
        .foot .inner-foot .phoneBox img{
            /* round-phone-24px */

            position: absolute;
            width: 24px;
            height: 24px;
            left: 0px;
            top: 0px;


        }
        .foot .inner-foot .phoneBox p{


            position: absolute;
            height: 16px;
            left: 32.52%;
            right: -14.63%;
            top: calc(50% - 16px/2 - 1px);

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 16px;

            color: #504ED8;
        }
        .foot .inner-foot .emailBox{
            /* fax */
            position: absolute;
            width: 138px;
            height: 24px;
            left: 965px;
            top: 184px;
        }
        .foot .inner-foot .emailBox img{
            /* round-local-printshop-24px */

            position: absolute;
            width: 24px;
            height: 24px;
            left: 0px;
            top: 0px;


        }
        .foot .inner-foot .emailBox p{
            /* (434) 293-7377 */

            position: absolute;
            width: 110px;
            height: 16px;
            left: 40px;
            top: 3px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 16px;

            color: #504ED8;


        }

        .foot .inner-foot .SocialMediaBox {
            /* Social */

            position: absolute;
            width: 460px;
            height: 24px;
            left: 721px;
            top: 248px;
        }

        .foot .inner-foot .SocialMediaBox p {
            /* Social Media */
            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 14px;
            /* identical to box height */
            color: #BDBDF2;
            mix-blend-mode: normal;
        }

        .foot .inner-foot .SocialMediaBox .SocialMediaBoxBox {
            /* Group 29 */

            position: absolute;
            width: auto;
            height: 24px;
            left: 100px;
            top: 0;

        }
        .foot .inner-foot .SocialMediaBox .socialMediaBoxBox .facebook {
            /* facebook black.1 */

            position: absolute;
            width: 24px;
            height: 24px;
            left: 0;
            top: 0;
            margin: 30px;

        }

        .foot .inner-foot .SocialMediaBox .socialMediaBoxBox .twitter {
            /* twitter black.1 */

            position: absolute;
            width: 24px;
            height: 24px;
            left: 869px;
            top: 248px;


        }

        .foot .inner-foot .SocialMediaBox .socialMediaBoxBox .linkedin {
            /* linkedin black.1 */

            position: absolute;
            width: 24px;
            height: 24px;
            left: 917px;
            top: 248px;


        }

        .foot .inner-foot .SocialMediaBox .socialMediaBoxBox .youtube {
            /* youtube color.1 */

            position: absolute;
            width: 24px;
            height: 24px;
            left: 965px;
            top: 248px;


        }

        .foot .inner-foot .SocialMediaBox .socialMediaBoxBox .instagram {
            /* instagram black.1 */

            position: absolute;
            width: 24px;
            height: 24px;
            left: 1013px;
            top: 248px;


        }

        .foot .inner-foot .SocialMediaBox .socialMediaBoxBox .googleplus {
            /* googleplus black.1 */

            position: absolute;
            width: 24px;
            height: 24px;
            left: 1061px;
            top: 248px;


        }

        .foot .inner-foot .SocialMediaBox .socialMediaBoxBox .pinterest {
            /* pinterest color.1 */

            position: absolute;
            width: 24px;
            height: 24px;
            left: 1109px;
            top: 248px;


        }

        .foot .inner-foot .SocialMediaBox .socialMediaBoxBox .rss {
            /* rss black.1 */

            position: absolute;
            width: 24px;
            height: 24px;
            left: 1157px;
            top: 248px;


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
    <div class="pictureBox">
        <img src="img/Group 3701.png">
    </div>
    <div class="BusinessTitleBox">
        <p>Business Solutions</p>
    </div>
    <div class="BusinessBoxText">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Pulvinar tortor neque luctus diam at urna, sed feugiat.
            Sed pulvinar aliquet tristique molestie nisi. In adipiscing
            varius turpis amet. Nunc aliquet euismod turpis neque interdum semper tempor urna.
            Eu vulputate hac sed praesent condimentum sit in
            facilisi natoque. Iaculis scelerisque nunc. </p>
    </div>
    <button class="hoverButton"></button>
</div>

    <div class="SoftwareConsultancyBox">
        <div class="pictureBox">
            <img src="img/Group 3703.png"> <!-- Use the same image initially or change as needed -->
        </div>
        <div class="SoftwareTitleBox">
            <p>Software Consultancy</p> <!-- Updated title -->
        </div>
        <div class="SoftwareBoxText">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Pulvinar tortor neque luctus diam at urna, sed feugiat.
                Sed pulvinar aliquet tristique molestie nisi. In adipiscing
                varius turpis amet. Nunc aliquet euismod turpis neque interdum semper tempor urna.
                Eu vulputate hac sed praesent condimentum sit in
                facilisi natoque. Iaculis scelerisque nunc. </p>
        </div>
        <button class="hoverButton"></button>
    </div>

    <div class="EnterpriseBox">
        <div class="pictureBox">
            <img src="img/Group 3702.png"> <!-- Use the same image initially or change as needed -->
        </div>
        <div class="EnterpriseTitleBox">
            <p>Enterprise Platforms</p> <!-- Updated title -->
        </div>
        <div class="EnterpriseBoxText">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Pulvinar tortor neque luctus diam at urna, sed feugiat.
                Sed pulvinar aliquet tristique molestie nisi. In adipiscing
                varius turpis amet. Nunc aliquet euismod turpis neque interdum semper tempor urna.
                Eu vulputate hac sed praesent condimentum sit in
                facilisi natoque. Iaculis scelerisque nunc. </p>
        </div>
        <button class="hoverButton"></button>
    </div>

    <div class="FullStackBox">
        <div class="pictureBox">
            <img src="img/Group 3704.png"> <!-- Use the same image initially or change as needed -->
        </div>
        <div class="FullStackTitleBox">
            <p>Full-Stack Development</p> <!-- Updated title -->
        </div>
        <div class="FullStackBoxText">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Pulvinar tortor neque luctus diam at urna, sed feugiat.
                Sed pulvinar aliquet tristique molestie nisi. In adipiscing
                varius turpis amet. Nunc aliquet euismod turpis neque interdum semper tempor urna.
                Eu vulputate hac sed praesent condimentum sit in
                facilisi natoque. Iaculis scelerisque nunc. </p>
        </div>
        <button class="hoverButton"></button>
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
<script>
    // Change the image on hover using JavaScript
    const businessBox = document.querySelector('.BusinessBox');
    const pictureBoxImage = document.querySelector('.pictureBox img');

    // Define paths for images
    const originalImage = 'img/Group 3701.png';
    const hoverImage = 'img/Group 3707.png'; // Specify the new image path here

    // Event listeners for mouse enter and leave
    businessBox.addEventListener('mouseenter', () => {
        pictureBoxImage.src = hoverImage; // Change to new image
    });

    businessBox.addEventListener('mouseleave', () => {
        pictureBoxImage.src = originalImage; // Revert to original image
    });
    // Change the image on hover using JavaScript for SoftwareConsultancyBox
    const softwareConsultancyBox = document.querySelector('.SoftwareConsultancyBox');
    const softwarePictureBoxImage = document.querySelector('.SoftwareConsultancyBox .pictureBox img'); // Select the correct image inside SoftwareConsultancyBox

    // Define paths for images
    const originalSoftwareImage = 'img/Group 3703.png'; // Specify the original image path for SoftwareConsultancyBox
    const hoverSoftwareImage = 'img/Group 3705.png'; // Specify the new image path here

    // Event listeners for mouse enter and leave
    softwareConsultancyBox.addEventListener('mouseenter', () => {
        softwarePictureBoxImage.src = hoverSoftwareImage; // Change to new image on hover
    });

    softwareConsultancyBox.addEventListener('mouseleave', () => {
        softwarePictureBoxImage.src = originalSoftwareImage; // Revert to original image
    });

    // Change the image on hover using JavaScript for EnterpriseBox
    const enterpriseBox = document.querySelector('.EnterpriseBox');
    const enterprisePictureBoxImage = document.querySelector('.EnterpriseBox .pictureBox img'); // Select the correct image inside EnterpriseBox

    // Define paths for images
    const originalEnterpriseImage = 'img/Group 3702.png'; // Specify the original image path for EnterpriseBox
    const hoverEnterpriseImage = 'img/Group 3706.png'; // Specify the new image path here

    // Event listeners for mouse enter and leave
    enterpriseBox.addEventListener('mouseenter', () => {
        enterprisePictureBoxImage.src = hoverEnterpriseImage; // Change to new image on hover
    });

    enterpriseBox.addEventListener('mouseleave', () => {
        enterprisePictureBoxImage.src = originalEnterpriseImage; // Revert to original image
    });

    // Change the image on hover using JavaScript for FullStackBox
    const fullStackBox = document.querySelector('.FullStackBox');
    const fullStackPictureBoxImage = document.querySelector('.FullStackBox .pictureBox img'); // Select the correct image inside FullStackBox

    // Define paths for images
    const originalFullStackImage = 'img/Group 3704.png'; // Specify the original image path for FullStackBox
    const hoverFullStackImage = 'img/Group 3708.png'; // Specify the new image path here

    // Event listeners for mouse enter and leave
    fullStackBox.addEventListener('mouseenter', () => {
        fullStackPictureBoxImage.src = hoverFullStackImage; // Change to new image on hover
    });

    fullStackBox.addEventListener('mouseleave', () => {
        fullStackPictureBoxImage.src = originalFullStackImage; // Revert to original image
    });


</script>
