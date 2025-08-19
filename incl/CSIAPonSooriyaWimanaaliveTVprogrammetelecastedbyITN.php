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

CSIAP on Sooriya Wimana, a live TV programme telecasted by ITN

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                      <h3 itemprop="name"><a href="https://1.bp.blogspot.com/-r-RPzu3YH_4/XgbFcKnYlUI/AAAAAAAAAUk/1BpNxnzmS1sXijUQ5DZZivhDDgmF_6wNACLcBGAsYHQ/s1600/edited%2B-%2BCopy.jpg"><img border="0" height="318" src="https://1.bp.blogspot.com/-r-RPzu3YH_4/XgbFcKnYlUI/AAAAAAAAAUk/1BpNxnzmS1sXijUQ5DZZivhDDgmF_6wNACLcBGAsYHQ/s640/edited%2B-%2BCopy.jpg" width="640"></a></h3>
<div id="post-body-5007144426549481599" itemprop="description articleBody">
    <div>Dr. Priyantha Weerasinghe, Deputy Project Director and Mr. Sisira Semasinghe, Agriculture extension Specialist of the Climate Smart Irrigated Agriculture Project (CSIAP) were on Sooriya Wimana, a live TV programme telecasted by ITN at 10.00am on 27th this month to talk about CSIAP and its objectives.<br>
        <div><br></div>
        <div>Please click to watch: <a href="https://www.youtube.com/watch?v=Ozxsfd0YgOI&t=772s" target="_blank">Sooriya Wimana on YouTube</a> or <a href="https://www.facebook.com/watch/?v=984752451907225" target="_blank">Sooriya Wimana on Facebook</a></div>
    </div>
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2019_12_28_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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