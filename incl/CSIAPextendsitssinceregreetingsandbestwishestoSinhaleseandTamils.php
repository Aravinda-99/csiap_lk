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

CSIAP extends its sincere greetings and best wishes to Sinhalese and Tamils

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                           <h3 itemprop="name"><br></h3>
<div id="post-body-5004156273290336658" itemprop="description articleBody">
    <div><br>
        <div><a href="https://1.bp.blogspot.com/-xUrz2b4Mm5w/XpSWLhw8nPI/AAAAAAAAAbg/vcJmq3U7RZIW86IC_bPbVJJENdpiK_6nQCLcBGAsYHQ/s1600/3.jpg"><img border="0" height="200" src="https://1.bp.blogspot.com/-xUrz2b4Mm5w/XpSWLhw8nPI/AAAAAAAAAbg/vcJmq3U7RZIW86IC_bPbVJJENdpiK_6nQCLcBGAsYHQ/s200/3.jpg" width="200"></a></div>Climate Smart Irrigated Agriculture Project extends its sincere greetings and best wishes to the Sinhala and Tamil community to mark the Sinhala and Hindu New Year in a meaningful and fruitful manner. Currently, we are passing through uncertain and unprecedented period due to Covid 19. We must do the right things and be prepared to take steps beyond what we are typically required to defeat this pandemic. We hope that all Sri Lankans are safe and well during this critical time. We stand with all Sri Lankans and with the world at large in these trying times. We wish for a full recovery for all the infected and we are confident that together we will overcome this new challenging crisis very soon.<br>This New Year is the national and cultural festival of the people in Sri Lanka. The dawn of New Year is the most powerful cultural festival which unites all Sri Lankans. This is the season where all people enjoy traditional merrymaking. The New Year binds with the traditional customs which blooms interrelations, family relationships and friendships. Let us all get together and join hands in order to strengthen and uplift our country. &nbsp;Climate Smart Irrigated Agriculture Project wishes you a healthy, peaceful, and prosperous new year.&nbsp;
    </div>
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_04_13_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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