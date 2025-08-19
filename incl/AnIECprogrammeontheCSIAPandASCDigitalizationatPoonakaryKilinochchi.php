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

                                    An IEC programme on the CSIAP and ASC Digitalization at Poonakary, Kilinochchi

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                            <h3 itemprop="name"><br></h3>
<div id="post-body-5581515603720071744" itemprop="description articleBody">
    <div><a href="https://1.bp.blogspot.com/-HVMJD08h6hk/YDy1x7IKOXI/AAAAAAAABAg/EQlKhAvTcBE1fMG_XDrEU-r_RY8krNimwCLcBGAsYHQ/s2682/4%2B%2B%25285%2529.jpg"><img border="0" height="224" src="https://1.bp.blogspot.com/-HVMJD08h6hk/YDy1x7IKOXI/AAAAAAAABAg/EQlKhAvTcBE1fMG_XDrEU-r_RY8krNimwCLcBGAsYHQ/w662-h224/4%2B%2B%25285%2529.jpg" width="662"></a></div>&nbsp;IEC programme on the CSIAP and ASC Digitalization was conducted for government officers at the &nbsp;Poonakary ASC, Kilinochchi recently &nbsp;under the patronage of Mr. M. Raghunathan, Agrarian Development Officer by the Climate Smart Irrigated Agriculture Project (CSIAP).<p>Around 40 officers representing Department of Agriculture, Department of Agrarian Development and Divisional Secretariate, Poonakary attended this event. The CSIAP&rsquo;s Northern Province office organized this event and on behalf of the project IECT &amp; ICT Specialist Mr. Samanatha Mallawaarachchi delivered the main lecture on CSIAP and ASC Digitalization. Mr.Rajeswaran Sanjeepan, Institutional Development &amp; Capacity Building Specialist &nbsp;and Mr. Kathirgamanathan Kapilan, Social Safeguard Officer of the CSIAP&rsquo;s Northern Provincial Office also addressed the audience.</p>
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2021_03_01_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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