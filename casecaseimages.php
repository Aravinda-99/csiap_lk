<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSIAP Sri Lanka</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

       .gallery {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 columns */
    gap: 20px;
    max-width: 80%;
    justify-content: center;
    margin-top: 200px; /* Added top margin */
}


        .frame {
            border: 20px solid goldenrod;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .frame img {
            display: block;
            width: 100%;
            height: auto;
        }

        /* Responsive - for smaller screens */
        @media (max-width: 992px) {
            .gallery {
                grid-template-columns: repeat(2, 1fr); /* 2 columns on tablets */
            }
        }

        @media (max-width: 600px) {
            .gallery {
                grid-template-columns: repeat(1, 1fr); /* 1 column on mobile */
            }
        }
    </style>
</head>

<body>

    <?php include('includes/header.php'); ?>
    <?php include('includes/navbar.php'); ?>

    <div class="gallery">
        <div class="frame"><img src="./assets/img/casecaseimges/01  Sinhala.jpg" alt="Framed Image 1"></div>
        <div class="frame"><img src="./assets/img/casecaseimges/02 English.jpg" alt="Framed Image 2"></div>
       <!--  <div class="frame"><img src="image3.jpg" alt="Framed Image 3"></div>
        <div class="frame"><img src="image4.jpg" alt="Framed Image 4"></div> -->
    </div>

    <?php include('includes/footer.php'); ?>

    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/imagelightbox.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
