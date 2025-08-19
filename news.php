<!doctype html>
<html>

    <head>
            <title>CSIAP Sri Lanka</title>
    </head>

    <?php include('includes/header.php'); ?>

    <body>

        <!-- <div class="preloader">
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
                            <h2>News</h2>
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li>News & Events</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Blog Section -->
        <section class="blog-section py-5">
            <div class="container">

 <?php

           $json = file_get_contents('https://csiaplk.blogspot.com/feeds/posts/default?alt=json&max-results=1000');
           // print_r($jsona);
           // exit();
        $json = json_decode($json);

        $temparray = $json->{'feed'}->{'entry'};
        $temparraycount = count($temparray);
        foreach($temparray as $loopcount => $value) {
            
            $temp_url = $value->{'link'}['2']->{'href'};
            $divided_temp_url = explode("/", $temp_url);
            $temp_url_end = end($divided_temp_url);
            $correct_url = str_replace(".html","",$temp_url_end);

         

          ?>      
           <div class="accordion" id="accordionExample<?php echo($loopcount); ?>">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo($loopcount); ?>" aria-expanded="true" aria-controls="collapse<?php echo($loopcount); ?>">
                            <i class="fas fa-plus pr-3"></i>
                            <?php echo($value->{'title'}->{'$t'}) ; ?>
                        </button>
                    </h2>
                    </div>

                    <div id="collapse<?php echo($loopcount); ?>" class="collapse <?php echo ($loopcount == '0') ? 'show' : ''; ?>" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">
                    <div class="card-body">
                        <?php echo($value->{'content'}->{'$t'}) ; ?>
                    <hr class="border-top: 1px dashed green;">
                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="<?php echo($value->{'link'}['2']->{'href'}) ; ?>" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full blog article</a><a target="-_blank" href="<?php echo('blognews?id='.$correct_url); ?>" class="btn btn-warning btn-sm ml-3"><i class="fas fa-link"></i> Read full web article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>
                    </div>
                    </div>
                </div>
                </div>
        <?php
        



    }

    include('manualposts.php');
        ?>



            </div>
        </section>
        <!-- End Blog Section -->

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