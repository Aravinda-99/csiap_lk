<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$id = isset($_GET['id']) ? $_GET['id'] : '';

if (!empty($id)) {

      if ($id == ' Tank Rehabilitation in Pahala Giribawa Cascade in NWP by the CSIAP (English)') {
        $url = 'https://www.youtube.com/embed/pQ8K44sjHFw';
        $title = ' Tank Rehabilitation in Pahala Giribawa Cascade in NWP by the CSIAP (English)';
    }

     if ($id == 'Introducing a Tank Cascade System in Sri Lanka') {
        $url = 'https://www.youtube.com/embed/JElqx2EbQ58';
        $title = 'Introducing a Tank Cascade System in Sri Lanka';
    } 



       if ($id == ' A Transect Walk for Leaning the Cascade (Sinhala)') {
        $url = 'https://www.youtube.com/embed/-aht30umF9M';
        $title = ' A Transect Walk for Leaning the Cascade (Sinhala)';
    }
    if ($id == 'A Transect Walk for Leaning the Cascade (English)') {
        $url = 'https://www.youtube.com/embed/sUBI4GzN2A0';
        $title = 'A Transect Walk for Leaning the Cascade (English)';
    }
   

     else {  // Fixed Syntax
        header("Location: TankCascadevedio.php");
        die();
    }
}
?>

<!doctype html>
<html>
<head>
    <title>CSIAP Sri Lanka</title>
</head>

<?php include('includes/header.php'); ?>

<body>
    <?php include('includes/navbar.php'); ?>

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2><?php echo isset($title) ? $title : 'Tank Cascade Vedio'; ?></h2>
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li>Tank Cascade System</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="summary-section pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="row">
                        <?php if (!empty($id)) { ?>
                            <div class="col-md-12" style="padding-bottom: 30px;">
                                <div class="fun-facts-content-area-custom">
                                    <iframe width="100%" height="500px" src="<?php echo $url; ?>" frameborder="0" allowfullscreen></iframe>
                                    <a href="TankCascadevedio.php?id=<?php echo $id; ?>">
                                        <h6 class="text-center" style="padding-top: 10px;"><?php echo $title; ?></h6>
                                    </a>
                                </div>

                                 


                            </div>
                        <?php } else { ?>


                                <div class="col-md-4" style="padding-bottom: 30px;">
                                <div class="fun-facts-content-area-custom">
                                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/pQ8K44sjHFw" frameborder="0" allowfullscreen></iframe>
                                    <h6 class="text-center" style="padding-top: 10px;"> Tank Rehabilitation in Pahala Giribawa Cascade in NWP by the CSIAP (English)</h6>
                                </div>
                            </div>

                                <div class="col-md-4" style="padding-bottom: 30px;">
                                <div class="fun-facts-content-area-custom">
                                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/JElqx2EbQ58" frameborder="0" allowfullscreen></iframe>
                                    <h6 class="text-center" style="padding-top: 10px;">Introducing a Tank Cascade System in Sri Lanka (Sinhala)</h6>
                                </div>
                            </div>


                              <div class="col-md-4" style="padding-bottom: 30px;">
                                <div class="fun-facts-content-area-custom">
                                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/-aht30umF9M" frameborder="0" allowfullscreen></iframe>
                                    <h6 class="text-center" style="padding-top: 10px;"> A Transect Walk for Leaning the Cascade (Sinhala)</h6>
                                </div>
                            </div>






                            <div class="col-md-4" style="padding-bottom: 30px;">
                                <div class="fun-facts-content-area-custom">
                                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/sUBI4GzN2A0" frameborder="0" allowfullscreen></iframe>
                                    <h6 class="text-center" style="padding-top: 10px;">A Transect Walk for Leaning the Cascade (English)</h6>
                                </div>
                            </div>

                         
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>



        <div class="summary-shape-image">
            <img src="assets/img/summary/shape.png" alt="image">
        </div>




    </section>

      <?php include('includes/footer.php'); ?>



        <div class="go-top">

            <i class="fas fa-chevron-up"></i>

            <i class="fas fa-chevron-up"></i>

        </div>



        <script src="assets\js\jquery.min.js"></script>

        <script src="assets\js\popper.min.js"></script>

        <script src="assets\js\bootstrap.min.js"></script>

        <script src="assets\js\owl.carousel.min.js"></script>

        <script src="assets\js\jquery.meanmenu.js"></script>

        <script src="assets\js\jquery.magnific-popup.min.js"></script>

        <script src="assets\js\jquery.appear.min.js"></script>

        <script src="assets\js\odometer.min.js"></script>

        <script src="assets\js\imagelightbox.min.js"></script>

        <script src="assets\js\jquery.nice-select.min.js"></script>

        <script src="assets\js\jquery.ajaxchimp.min.js"></script>

        <script src="assets\js\form-validator.min.js"></script>

        <script src="assets\js\contact-form-script.js"></script>

        <script src="assets\js\main.js"></script>

</body>
</html>
