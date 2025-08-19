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

The CSIAP Farmers’ Database Training Programme for CSIAP Staff

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                       <h3 itemprop="name"><a href="https://lh3.googleusercontent.com/-EbUHcbSEcBc/X-Mlh5SeuZI/AAAAAAAAAyA/GHo-ememZ6UnTp1CyOY9p94Z6iGpTkNrgCLcBGAsYHQ/20201222_123906.jpg"><img alt="" height="360" src="https://lh3.googleusercontent.com/-EbUHcbSEcBc/X-Mlh5SeuZI/AAAAAAAAAyA/GHo-ememZ6UnTp1CyOY9p94Z6iGpTkNrgCLcBGAsYHQ/w640-h360/20201222_123906.jpg" width="640"></a></h3>
<div id="post-body-8955308678707548432" itemprop="description articleBody">
    <p>A special training programme on CSIAP framers&rsquo; database was held at the Governor&rsquo;s Auditorium of North Central Provincial Council Office, Anuradhapura yesterday (22<sup>nd</sup>) under the patronage of Dr. Priyantha Weerasinghe, Project Director, CSIAP. This is the first time that CSIAP has conducted such a training for its staff.</p>
    <p>&nbsp;Selected staff from six Deputy Project Directors&rsquo; Offices including Provincial Deputy Project Directors and senior officials of PMU attended this event. Those, who were on the training programme, had been given hands on experience by Mr. Uvindu Anuradha, Senior Web Developer and Mr. Ajantha Lakmal, Senior Web Developer, a &nbsp; team from SLT Digital Info Service Ltd lead by Mr. Danushka Gangoda, Team Leader. Mr. Lakshman Premanath, Deputy Project Director, North Central Province, CSIAP organized the above programme.</p>
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_12_23_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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