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

                                    Best wishes to all Sri Lankans to mark the New Year 2021


	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->
<h3 itemprop="name"><a href="https://1.bp.blogspot.com/-oHcP4aMXKys/X-4J-gcRtJI/AAAAAAAAAzc/aZtUDItu684E8Ks8sWCvAe25dgn8pbeKACLcBGAsYHQ/s2048/03%2BJPEG%2B03.jpg"><img border="0" height="200" src="https://1.bp.blogspot.com/-oHcP4aMXKys/X-4J-gcRtJI/AAAAAAAAAzc/aZtUDItu684E8Ks8sWCvAe25dgn8pbeKACLcBGAsYHQ/w169-h200/03%2BJPEG%2B03.jpg" width="169"></a></h3>
<div id="post-body-3631838203693382413" itemprop="description articleBody">Climate Smart Irrigated Agriculture Project (CSIAP) extends its sincere greetings and best wishes to all Sri Lankans to mark the New Year 2021 a meaningful and fruitful one. We are entering a decade during which we must find solutions for combating climate change and building a better future for all. Therefore, CSIAP is making greater efforts in fighting climate change vowing to keep people safe and healthy as COVID-19 which, is spreading in our community, has been remaining an urgent task on an unprecedented scale.<p>May this year bring new happiness, new goals, new achievements, and a lot of new inspirations on your life. CSIAP encourages its beneficiaries to make 2021 a better year, and overcome challenges. May all Sri Lankans&rsquo; dreams come true and all their hopes are fulfilled. Let us all get together and join hands in order to strengthen and uplift our country. CSIAP wishes you a healthy, peaceful, and prosperous new year.</p>
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_12_31_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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