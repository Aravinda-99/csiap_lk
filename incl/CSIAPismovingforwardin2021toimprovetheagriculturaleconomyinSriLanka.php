<?php
?>

<!doctype html>

<html>
    <head>
            <title>CSIAP Sri Lanka</title>
    </head>
    <?php include('./header.php'); ?>
    <body>

        <?php include('./navbar.php'); ?>

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
                <div class="accordion" id="accordionExample<?php echo($loopcount); ?>">
	                <div class="card">
	                    <div class="card-header" id="headingOne">
	                    <h2 class="mb-0">

	                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo($loopcount); ?>" aria-expanded="true" aria-controls="collapse<?php echo($loopcount); ?>">

	                            <i class="fas fa-plus pr-3"></i>

CSIAP is moving forward in 2021 to improve the agricultural economy in Sri Lanka

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->
<h3 itemprop="name"><br></h3>
<div id="post-body-441124934817402270" itemprop="description articleBody">
    <div><a href="https://1.bp.blogspot.com/-m6ZYlDkVTMk/X-h32_wajeI/AAAAAAAAAyc/zrvdUEsHzd0K2T3RaD-Ja8O8jQXORhV9QCLcBGAsYHQ/s1933/Tamil%2BRadio%2B24%2BDec%2B2020%2Bedit%2B002.jpg"><img border="0" src="https://1.bp.blogspot.com/-m6ZYlDkVTMk/X-h32_wajeI/AAAAAAAAAyc/zrvdUEsHzd0K2T3RaD-Ja8O8jQXORhV9QCLcBGAsYHQ/s320/Tamil%2BRadio%2B24%2BDec%2B2020%2Bedit%2B002.jpg" width="320"></a></div>
    <p>The climate Smart Irrigated Agriculture Project (CSIAP) is moving forward in 2021 to improve living standards of farmers in CSIAP command areas and boost agroeconomic in Sri Lanka said, Miss. Sharmi Shanmuganathan, Gender Development Officer and Acting Social Safeguarded Officer, Climate Smart Irrigated Agriculture Project, (CSIAP), with an exclusive interview with Tamil National Service of SLBC &nbsp;on 24th Dec 2020.&nbsp;</p>
    <p>CSIAP is implementing COVID 19/ YALA 2020 Cultivation Programme, Mid-season Cultivation Programme, Maha Season Cultivation Programme, Cluster Village Development programmers, Climate Smart Nutritional Sensitive Home Garden Progaamme, 47 ASC Modernization and Digitalization, Rehabilitation of Agriculture Roads, Construction of Grain Warehouses, Cascade Development through the rehabilitation of minor and medium tanks, Establishment of Farm Field School at Thirappane and CSA Model Villages, She further added. This discussion was broadcasted simultaneously with &nbsp;Thendral FM and Yaal FM of SLBC too.</p>Please click to listen to full interview on: <a href="https://www.youtube.com/watch?v=6JVTsGqaXoo">Tamil Service at SLBC</a>
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_12_27_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

	                    </div>

	                    </div>

	                </div>

                </div>

     

            </div>

        </div>

        </section>

        <!-- End Blog Section -->



        <?php include('./footer.php'); ?>



        <div class="go-top">

            <i class="fas fa-chevron-up"></i>

            <i class="fas fa-chevron-up"></i>

        </div>



        <script src="../assets/js/jquery.min.js"></script>

        <script src="../assets/js/popper.min.js"></script>

        <script src="../assets/js/bootstrap.min.js"></script>

        <script src="../assets/js/owl.carousel.min.js"></script>

        <script src="../assets/js/jquery.meanmenu.js"></script>

        <script src="../assets/js/jquery.magnific-popup.min.js"></script>

        <script src="../assets/js/jquery.appear.min.js"></script>

        <script src="../assets/js/odometer.min.js"></script>

        <script src="../assets/js/imagelightbox.min.js"></script>

        <script src="../assets/js/jquery.nice-select.min.js"></script>

        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>

        <script src="../assets/js/form-validator.min.js"></script>

        <script src="../assets/js/contact-form-script.js"></script>

        <script src="../assets/js/main.js"></script>

    </body>

</html>