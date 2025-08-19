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

The Hot-Spot area development model aims to enhance resilience

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                          <div>The Hot-Spot area development model aims to enhance resilience of hotspot areas where you live said&nbsp;Mr. Nagarajah Rajkumar, Deputy Project Director, Project Management Unit (PMU)&nbsp;at Agrarian Service Centre (ASC), Akkarayan, Kilinochchi. Addressing the local community on the benefits and importance of the Climate Smart Irrigated Agriculture Project will bring to the men and women farmers in the Hot Spot Area, he further added:</div>
<div>
    <table cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td><a href="https://1.bp.blogspot.com/-zxypGl2okuU/XdebVNrhNxI/AAAAAAAAAKs/mWATxQmAthY75eK0kMz08TppStPGZxfvwCEwYBhgL/s1600/1111.jpg"><img border="0" height="198" src="https://1.bp.blogspot.com/-zxypGl2okuU/XdebVNrhNxI/AAAAAAAAAKs/mWATxQmAthY75eK0kMz08TppStPGZxfvwCEwYBhgL/s640/1111.jpg" width="640"></a></td>
            </tr>
            <tr>
                <td>Mr. Rajkumar is addressing farmers</td>
            </tr>
        </tbody>
    </table>&ldquo;Those, who depend on hotspot areas for their livelihoods by adapting flexible climate change management practices, will be feasible in the locality.&nbsp;&nbsp;This project will also focus on adaptive management of existing , improved irrigation water storage and delivery structures to make irrigation more reliable in the face of rising climatic variability.&rdquo;
</div>
<div><br></div>
<div>&nbsp;&ldquo; The project will also provide men and women smallholder farmers with better agricultural inputs, techniques and practices along with the additional water now available tohelp farmers to better stabilize crop yield rising climatic variability and reduce crop harvest losses&quot;.</div>
<div>&ldquo;The project will focus on identifying&nbsp;new markets, and ensure better access to markets and higher prices, through marketing higher up the value chain, more competitive agri-enterprises and upgraded infrastructure for agricultural trade, so that producers and other value chain participants could better stabilize and increase incomes from agricultural livelihoods.&rdquo;</div>
<div><br></div>
<div>Miss. Sharmila Shanmuganathan, Social Safeguard and Gender Development Officer of Project Management Unit (PMU), Mr. S. Parthipan and Mr.V. Suganthan, Agrarian Development Officers of Dept of Agrarian Development and Staff of Provincial Deputy Project Director Office (PDPDO) of Northern Province also participated in this event.</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2019_11_22_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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