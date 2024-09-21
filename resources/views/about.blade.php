<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
        .AboutUs{
            /* Group 3655 */

            position: absolute;
            width: 1440px;
            height: 508px;
            left: 0px;
            top: 127px;
            background-image: url('{{ asset('img/about-us-header.png') }}');
        }
        .AboutUs h1{
            /* ABOUT US */

            position: absolute;
            width: 484px;
            height: 111px;
            left: 110px;
            top: 187px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 95px;
            line-height: 111px;

            color: #FFFFFF;
        }

        .AboutUs h2 {
            /* WHO WE ARE */

            position: absolute;
            width: auto;
            height: 35px;
            left: 110px;
            top: 279px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 35px;

            color: #09C4D0;

            white-space: nowrap;
        }
        .AboutUs p{
            /* Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar tortor neque luctus diam at urna, sed feugiat. Sed pulvinar aliquet tristique molestie nisi. In adipiscing varius turpis amet. Nunc aliquet euismod turpis neque interdum semper tempor urna. Eu vulputate hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc, a tincidunt elementum quis ante ultrices sed. Montes, blandit faucibus elit cum egestas mollis vitae quisque. Suspendisse vivamus vitae auctor mi sollicitudin habitant. Id nullam viverra enim nisi feugiat orci. Enim et cras nibh vel quis malesuada sed. Hendrerit vestibulum risus praesent sit morbi cras. Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget. Eu vulputate hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc, a tincidunt elementum quis ante ultrices sed. Montes, blandit faucibus elit cum egestas mollis vitae quisque. Suspendisse vivamus vitae auctor mi sollicitudin habitant. Id nullam viverra enim nisi feugiat orci. Enim et cras nibh vel quis malesuada sed. Hendrerit vestibulum risus praesent sit morbi cras. Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget. */

            position: absolute;
            width: 1220px;
            height: 169px;
            left: 110px;
            top: 366px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;

            color: #FFFFFF;


        }
        .WhatWeDo h1{
            /* WHAT WE DO */

            position: absolute;
            width: auto;
            height: 47px;
            left: 110px;
            top: 704px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 47px;
            /* identical to box height */

            color: #504ED8;


        }
        .WhatWeDo p{
            /* Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar tortor neque luctus diam at urna, sed feugiat. Sed pulvinar aliquet tristique molestie nisi. In adipiscing varius turpis amet. Nunc aliquet euismod turpis neque interdum semper tempor urna. Eu vulputate hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc, a tincidunt elementum quis ante ultrices sed. Montes, blandit faucibus elit cum egestas mollis vitae quisque. Suspendisse vivamus vitae auctor mi sollicitudin habitant. Id nullam viverra enim nisi feugiat orci. Enim et cras nibh vel quis malesuada sed. Hendrerit vestibulum risus praesent sit morbi cras. Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget. Eu vulputate hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc, a tincidunt elementum quis ante ultrices sed. Montes, blandit faucibus elit cum egestas mollis vitae quisque. Suspendisse vivamus vitae auctor mi sollicitudin habitant. Id nullam viverra enim nisi feugiat orci. Enim et cras nibh vel quis malesuada sed. Hendrerit vestibulum risus praesent sit morbi cras. Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget. */

            position: absolute;
            width: 1220px;
            height: 169px;
            left: 110px;
            top: 771px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;

            color: #8785A5;


        }
        .picture1 img{
            /* Group 3657 */

            position: absolute;
            width: 835.74px;
            height: 823.24px;
            left: -43px;
            top: 941px;


        }
        .OurVision h1{
            /* OUR VISION */

            position: absolute;
            width: auto;
            height: 47px;
            left: 755px;
            top: 1138px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 47px;
            /* identical to box height */

            color: #504ED8;


        }
        .OurVision p{
            /* Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar tortor neque luctus diam at urna, sed feugiat. Sed pulvinar aliquet tristique molestie nisi. In adipiscing varius turpis amet. Nunc aliquet euismod turpis neque interdum semper tempor urna. Eu vulputate hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc, a tincidunt elementum quis ante ultrices sed. Montes, blandit faucibus elit cum egestas mollis vitae quisque. Suspendisse vivamus vitae auctor mi sollicitudin habitant. Id nullam viverra enim nisi feugiat orci. Enim et cras nibh vel quis malesuada sed. Hendrerit vestibulum risus praesent sit morbi cras. Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget. Eu vulputate hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc, a tincidunt elementum quis ante ultrices sed. Montes, blandit faucibus elit cum egestas mollis vitae quisque. Suspendisse vivamus vitae auctor mi sollicitudin habitant. Id nullam viverra enim nisi feugiat orci. Enim et cras nibh vel quis malesuada sed. Hendrerit vestibulum risus praesent sit morbi cras. Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget. */

            position: absolute;
            width: 575px;
            height: 169px;
            left: 755px;
            top: 1205px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;

            color: #8785A5;


        }
        .picture2 img{
            /* Group 3656 */

            position: absolute;
            width: 835.74px;
            height: 823.24px;
            left: 624px;
            top: 1638px;


        }
        .OURMISSION h1{
            /* OUR MISSION */

            position: absolute;
            width: auto;
            height: 47px;
            left: 112px;
            top: 1868px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 47px;
            /* identical to box height */

            color: #504ED8;


        }
        .OURMISSION p{
            /* Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar tortor neque luctus diam at urna, sed feugiat. Sed pulvinar aliquet tristique molestie nisi. In adipiscing varius turpis amet. Nunc aliquet euismod turpis neque interdum semper tempor urna. Eu vulputate hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc, a tincidunt elementum quis ante ultrices sed. Montes, blandit faucibus elit cum egestas mollis vitae quisque. Suspendisse vivamus vitae auctor mi sollicitudin habitant. Id nullam viverra enim nisi feugiat orci. Enim et cras nibh vel quis malesuada sed. Hendrerit vestibulum risus praesent sit morbi cras. Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget. Eu vulputate hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc, a tincidunt elementum quis ante ultrices sed. Montes, blandit faucibus elit cum egestas mollis vitae quisque. Suspendisse vivamus vitae auctor mi sollicitudin habitant. Id nullam viverra enim nisi feugiat orci. Enim et cras nibh vel quis malesuada sed. Hendrerit vestibulum risus praesent sit morbi cras. Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget. */

            position: absolute;
            width: 575px;
            height: 169px;
            left: 112px;
            top: 1935px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 19px;

            color: #8785A5;


        }

        .blueBox {
            /* Rectangle 362 */

            position: absolute;
            width: 1440px;
            height: 70px;
            left: 0px;
            top: 2455px;

            background: #504ED8;

        }

        .blueBox .GreenBox { /* Rectangle 364 */

            /* Rectangle 364 */

            position: absolute;
            width: 202px;
            height: 70px;
            left: 1150px; /* Adjusted left to keep it within the blue box */
            top: 0px; /* Set top to 0 to align with the blue box */

            background: #00CAD7;

        }

        .blueBox p {
            /* Let’s get in touch text here* (something that would attract a potential client) */

            position: relative;
            width: 759px;
            height: 23px;
            left: 112px;
            top: 15px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 23px;

            color: #FFFFFF;
        }


        .blueBox .GreenBox h1 {
            /* CONTACT US! */

            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 23px;

            color: #FFFFFF;
        }

        .projects {
            /* Rectangle 60 */

            position: absolute;
            width: 1440px;
            height: 449px;
            left: 0px;
            top: 2525px;

            background: #F6F6F6;

        }

        .projects .inner-div {
            /* Group 3638 */

            position: absolute;
            width: 1216px;
            height: 336px;
            left: 112px;
            top: 56px; /* Adjusted top to be relative to the .projects div */

        }

        .projects .inner-div h1 {
            /* SOME OF OUR PROJECTS */

            position: relative;
            width: 376px;
            height: 35px;
            left: 0;
            top: 0;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 35px;

            color: #00CAD7;
        }

        .projects .inner-div .picture-div {
            /* Group 3637 */

            position: relative;
            width: 1216px;
            height: 255px;
            left: 0px;
            top: 20px;

        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 410px;
            height: 250px;
            background-color: rgba(0, 123, 255, 0.5); /* Blue color with opacity */
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        .overlay h2 {
            font-size: 2rem;
            margin: 0;
        }

        .overlay p {
            font-size: 1.2rem;
            margin: 0;
        }
        .foot{
            /* Footer 8 white */

            position: absolute;
            width: 1440px;
            height: 382px;
            left: 0px;
            top: 2974px;
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
            width: 360px;
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
</div>
<div class="WhatWeDo">
    <h1>WHAT WE DO</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar
        tortor neque luctus diam at urna, sed feugiat. Sed pulvinar aliquet tristique molestie nisi.
        In adipiscing varius turpis amet. Nunc aliquet euismod turpis neque interdum semper tempor urna.
        Eu vulputate hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc, a
        tincidunt elementum quis ante ultrices sed. Montes, blandit faucibus elit cum egestas mollis vitae
        quisque. Suspendisse vivamus vitae auctor mi sollicitudin habitant. Id nullam viverra enim
        nisi feugiat orci. Enim et cras nibh vel quis malesuada sed.
        Hendrerit vestibulum risus praesent sit morbi cras. Eu, in nisi mi, eu
        rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget.
        Eu vulputate hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc,
        a tincidunt elementum quis ante ultrices sed. Montes, blandit faucibus elit cum egestas mollis
        vitae quisque. Suspendisse vivamus vitae auctor mi sollicitudin habitant. Id nullam viverra enim
        nisi feugiat orci. Enim et cras nibh vel quis malesuada sed. Hendrerit vestibulum risus praesent
        sit morbi cras. Eu, in nisi mi, eu
        rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget.</p>
</div>
<div class="picture1">
    <img src="img/Group 3657.png">
</div>
<div class="OurVision">
    <h1>OUR VISION</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Pulvinar tortor neque luctus diam at urna, sed feugiat.
        Sed pulvinar aliquet tristique molestie nisi. In adipiscing varius turpis amet.
        Nunc aliquet euismod turpis neque interdum semper tempor urna.
        Eu vulputate hac sed praesent condimentum sit in facilisi natoque.
        Iaculis scelerisque nunc, a tincidunt elementum quis ante ultrices sed.
        Montes, blandit faucibus elit cum egestas mollis vitae quisque.
        Suspendisse vivamus vitae auctor mi sollicitudin habitant.
        Id nullam viverra enim nisi feugiat orci.
        Enim et cras nibh vel quis malesuada sed.
        Hendrerit vestibulum risus praesent sit morbi cras.
        Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum.
        Vitae justo molestie arcu, egestas eget.
        Eu vulputate hac sed praesent condimentum sit in facilisi natoque.
        Iaculis scelerisque nunc, a tincidunt elementum quis ante ultrices sed.
        Montes, blandit faucibus elit cum egestas mollis vitae quisque.
        Suspendisse vivamus vitae auctor mi sollicitudin habitant.
        Id nullam viverra enim nisi feugiat orci. Enim et cras nibh vel quis malesuada sed.
        Hendrerit vestibulum risus praesent sit morbi cras.
        Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum.
        Vitae justo molestie arcu, egestas eget.
    </p>
</div>
<div class="picture2">
    <img src="img/Group 3656.png">
</div>
<div class="OURMISSION">
    <h1>OUR MISSION</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar tortor neque luctus diam at urna,
        sed feugiat. Sed pulvinar aliquet tristique molestie nisi. In adipiscing varius turpis amet.
        Nunc aliquet euismod turpis neque interdum semper tempor urna. Eu vulputate hac sed praesent
        condimentum sit in facilisi natoque. Iaculis scelerisque nunc, a tincidunt elementum quis ante
        ultrices sed. Montes, blandit faucibus elit cum egestas mollis vitae quisque. Suspendisse vivamus
        vitae auctor mi sollicitudin habitant. Id nullam viverra enim nisi feugiat orci. Enim et cras nibh
        vel quis malesuada sed. Hendrerit vestibulum risus praesent sit morbi cras. Eu, in nisi mi,
        eu rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget. Eu vulputate
        hac sed praesent condimentum sit in facilisi natoque. Iaculis scelerisque nunc, a tincidunt
        elementum quis ante ultrices sed. Montes, blandit faucibus elit cum egestas mollis vitae quisque.
        Suspendisse vivamus vitae auctor mi sollicitudin habitant. Id nullam viverra enim nisi feugiat
        orci. Enim et cras nibh vel quis malesuada sed. Hendrerit vestibulum risus praesent sit morbi cras.
        Eu, in nisi mi, eu rhoncus elit viverra lorem vestibulum. Vitae justo molestie arcu, egestas eget.</p>
</div>
<div class="blueBox">
    <p>Let’s get in touch text here* (something that would attract a potential client)</p>
<div class="GreenBox" >
    <h1>CONTACT US!</h1>
</div>
</div>
<div class="projects">
    <div class="inner-div">
    <h1>SOME OF OUR PROJECTS</h1>
        <div class="picture-div">
            <div class="container">
                <div class="row g-0">
                    <div class="col" >
                        <img src="img/Ylk5n_nd9dA(4).png" class="img-fluid" alt="Image 1">
                        <div class="overlay">
                            <h2>PROJECT TITLE</h2>
                            <p>Company name</p>
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
