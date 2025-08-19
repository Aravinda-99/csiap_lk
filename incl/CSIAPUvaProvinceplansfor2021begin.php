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

CSIAP’s Uva Province plans for 2021 begin

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                 <div><a href="https://1.bp.blogspot.com/-kJamqvfCjx0/YBgkxH4n82I/AAAAAAAAA8M/BkXGl8LJwPQaLn6EVFbPyGNM3CJ-4p39ACLcBGAsYHQ/s2330/111%2BCopy.jpg"><img border="0" height="257" src="https://1.bp.blogspot.com/-kJamqvfCjx0/YBgkxH4n82I/AAAAAAAAA8M/BkXGl8LJwPQaLn6EVFbPyGNM3CJ-4p39ACLcBGAsYHQ/w747-h257/111%2BCopy.jpg" width="747"></a></div>
<p>An awareness programme on Climate Smart Irrigated Agriculture Project (CSIAP) and its Uva Province plans in 2021 for government officers in Buttala Divisional Secretariat Area, Monaragala District, Uva Province was held under the patronage of Mr. R. M. R. S. Thilakarathna, Divisional Secretary, Buttala at the Divisional Secretariat, Buttala on 01st of&nbsp;this month.&nbsp;</p>
<p>&nbsp;Agrarian Development Officers, Economic Development Officers, Grama Niladari Officers, Agriculture Instructors, Agriculture Research and Production Assistants, Samurdhi Development Officers and Mid Wives including top officials of the Divisional Secretariate and officers from CSIAP attended this event.</p>
<p>&nbsp;Mr. I.H. Dharmarasekara, Deputy Project Director (Uva Province) CSIAP and his staff organized this programme.</p>


                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2021_02_01_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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