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

CSIAP and its objectives on SLBC

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                      <h3 itemprop="name"><br></h3>
<div id="post-body-7749424927661411248" itemprop="description articleBody">
    <div><a href="https://1.bp.blogspot.com/-tLod_5Gm9Ow/Xip4gi5M2eI/AAAAAAAAAZI/-fpnarFmBiM35DuDAwrCrVrOsovl34dUgCLcBGAsYHQ/s1600/maxresdefault.jpg"><img border="0" height="131" src="https://1.bp.blogspot.com/-tLod_5Gm9Ow/Xip4gi5M2eI/AAAAAAAAAZI/-fpnarFmBiM35DuDAwrCrVrOsovl34dUgCLcBGAsYHQ/s200/maxresdefault.jpg" width="200"></a>All three services of Si Lanka Broadcasting Corporation broadcasted the news of the Climate Smart Irrigated Agriculture Project (CSIAP) and its objectives in Sinhalese, Tamil and English.<br>
        <div>
            <div>Please click to listen: <a href="https://www.youtube.com/watch?v=vjfRInM6uUU&t=27s">SLBC Sinhala service</a>, &nbsp;<a href="https://www.youtube.com/watch?v=vBTcDmyMx80" target="_blank">SLBC Tamil Service</a> and <a href="https://www.youtube.com/watch?v=k5ZkdqwW-j4" target="_blank">&nbsp;SLBC English Service</a></div>
        </div>
    </div>
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_01_24_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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