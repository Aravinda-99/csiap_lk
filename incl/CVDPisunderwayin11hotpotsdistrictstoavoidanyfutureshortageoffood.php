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

CVDP is underway in 11 hotpots districts to avoid any future shortage of food

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->
<p><a href="https://1.bp.blogspot.com/-gh8wdSQfmpk/XtocZCgPiSI/AAAAAAAAAgQ/kdIvmaMkVWUW9ufcQJ7rNZ7fkLjOz1z3gCLcBGAsYHQ/s1600/8x4%2BBoard%2BCluster%2BVillage%2BTI.jpg"><br><img border="0" height="386" src="https://1.bp.blogspot.com/-gh8wdSQfmpk/XtocZCgPiSI/AAAAAAAAAgQ/kdIvmaMkVWUW9ufcQJ7rNZ7fkLjOz1z3gCLcBGAsYHQ/s640/8x4%2BBoard%2BCluster%2BVillage%2BTI.jpg" width="640"></a>Cluster Village Development Programme is designed to increase farmer income, reduce food importation by applying all possible Climate Smart Agriculture practices in 11 hotpots districts. &nbsp;This programme covers 530 ac with 630 beneficiaries. The Project expenditure is Rs 43.0 million and it has been progressing successfully regardless of the many barriers encountered due to a chaotic situation in the country. The commitment of the officials and the farmers contribute to the success of the project.&nbsp;</p>
<p><br></p>
<p>Cluster Village Development Programme is one of four programs launched by Climate Smart Irrigated Agriculture Project in parallel to National Food Production Drive under Saubhagye Dekma &nbsp; to avoid any future shortage of food supply due to the Covid19 pandemic.&nbsp;</p>
<p><br><br>Benefits to beneficiaries&nbsp; &nbsp;&nbsp;&nbsp;</p>
<div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Identifying marketing opportunities</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Identifying suitable crops and lands</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Developing water resources and associated infrastructure.</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Providing 50% of the agricultural inputs from the project</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Forming market-focused producer groups and societies</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Setting up trade agreements to connect farmers with the market</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Smart technology for product sales, weather, cultivation technology and trade information</div>
</div>
<div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Training farmers on cultivation to withstand the changing climatic conditions</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Conducting Farmer Business Training Schools</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Providing assistance to empower the farmers as agro-entrepreneurs</div>
    <div><a href="https://1.bp.blogspot.com/-T9gw6hs1060/XwwR_Uw3wkI/AAAAAAAAAm4/l276mMKQb8suerUSg8WU-PLzg__Um36CwCLcBGAsYHQ/s1600/IMG_2020042.jpg"><img border="0" height="382" src="https://1.bp.blogspot.com/-T9gw6hs1060/XwwR_Uw3wkI/AAAAAAAAAm4/l276mMKQb8suerUSg8WU-PLzg__Um36CwCLcBGAsYHQ/s640/IMG_2020042.jpg" width="640"></a>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Providing seed and technology transfer</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Implementing sustainable garden development programs</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Developing the ecosystems of the village</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Providing facilities to cultivate in each land</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Establishing market and agricultural access</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Establishing village cantered market in the village</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Establishing processing and packing centres</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Providing storage facilities for production teams</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Supplying plastic crates and agricultural implements to pack the farmers&apos; produce</div>
    <div>&middot;&nbsp; &nbsp; &nbsp; &nbsp;Establishing demonstrations of climate smart agricultural practices</div>
    <div>&middot; &nbsp; &nbsp; &nbsp; Evaluating the farmers and create a mechanism to &nbsp;reward them &nbsp; &nbsp;&nbsp;</div>
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_06_05_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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