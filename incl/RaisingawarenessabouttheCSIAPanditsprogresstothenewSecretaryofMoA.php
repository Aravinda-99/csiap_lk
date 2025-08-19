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

Raising awareness about the CSIAP and its progress to the new Secretary of MoA

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                         <h3 itemprop="name"><br></h3>
<div itemprop="description articleBody">
    <div>
        <div id="post-body-8648744370118147225" itemprop="description articleBody">
            <div><a href="https://1.bp.blogspot.com/-D3pL15kgfzM/YEmMgJTsQuI/AAAAAAAABBo/5qSWgT3qrQsTMw34jNkX3LHwthzX82kEgCLcBGAsYHQ/s1452/4.jpg"><img border="0" height="321" src="https://1.bp.blogspot.com/-D3pL15kgfzM/YEmMgJTsQuI/AAAAAAAABBo/5qSWgT3qrQsTMw34jNkX3LHwthzX82kEgCLcBGAsYHQ/w772-h321/4.jpg" width="772"></a></div>Senior officials of the Climate Smart Irrigated Agriculture Project (CSIAP) let by Dr. Priyantha Weerasinghe, the Acting Project Director, had a special discussion&nbsp;to raise awareness about the CSIAP and its progress under the patronage of Mr. M.B Rohana Pushpakumara who assumed duties as the new Secretary of the Ministry of Agriculture.<p>Dr. Weerasinghe explained the journey from the beginning of the CSIAP to the present, activities to be implemented in &nbsp;2021 and &nbsp;coming years, and CSIAP&rsquo;s contribution to the national food production in detail during the discussion. Representing the CSIAP, subject specialists from the Project Management Unit (PMU) and Provincial Deputy Project Directors from six provinces attended the meeting held at the Ministry.</p>
        </div>
    </div>
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2021_03_10_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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