<!doctype html>
<html>

    <head>
            <title>CSIAP Sri Lanka</title>
    </head>

    <?php include('includes/header.php'); ?>

    <body>

<!--         <div class="preloader">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div> -->

        <?php include('includes/navbar.php'); ?>

        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Photos</h2>
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li>Photos</li>
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

<?php

function listFolderFiles($dir){
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);
    unset($ffs[array_search('thumb', $ffs, true)]);

    return $ffs;
}

      $dir = "assets/img/photos";
      $ffs = listFolderFiles($dir);

      foreach($ffs as $ff){
?>
                            <div class="col-md-3" style="padding-bottom: 30px;">
                                <div class="">
                                    <div class="single-gallery-box">
                                        <img src="<?php echo($dir.'/thumb/'.$ff); ?>" alt="image">
                                        <a href="<?php echo($dir.'/'.$ff); ?>" class="gallery-btn" data-imagelightbox="popup-btn">
                                            <i class="flaticon-view"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
<?php
      }
?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="summary-shape-image">
                <img src="assets\img\summary\shape.png" alt="image">
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

