<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    <title>Document</title>

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
