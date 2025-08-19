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

Harvesting under Yala 2020 to strengthen food production in Sri Lanka

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                       <h3 itemprop="name"><a href="https://1.bp.blogspot.com/-n7O26neuets/XxrgDWYTlTI/AAAAAAAAAow/ijtFiLSXgVYXd6eluJ3TUWfzQbteL2g8ACLcBGAsYHQ/s1600/Yala%2B2020%2BEnglish%2B03.jpg"><img border="0" height="227" src="https://1.bp.blogspot.com/-n7O26neuets/XxrgDWYTlTI/AAAAAAAAAow/ijtFiLSXgVYXd6eluJ3TUWfzQbteL2g8ACLcBGAsYHQ/s640/Yala%2B2020%2BEnglish%2B03.jpg" width="640"></a></h3>
<div id="post-body-9054380931066854858" itemprop="description articleBody">
    <div>Harvesting of cultivation in hotspot areas in 11 districts of six &nbsp;provinces &nbsp;in the dry zone of Sri Lanka under &nbsp;Yala 2020 food production program launched by the Climate Smart Irrigated Agriculture Project (CSIAP) has been broadcasted by national Radios. &nbsp;The news was in the main news bulletins of Sinhala, Tamil &nbsp;and English services of Sri Lanka Broadcasting Services and Lakhanda Radio of Independent Television Network today (24<sup>th</sup>).<br><br><span lang="">Yala 2020 food production programme goes in line with the programme of the Implementation Ministry in promotion of food crops cultivation in the Yala 2020 season to overcome possible food shortage that could surface out owing to COVID 19 pandemic. It focuses on the promotion of Other Field Crops Cultivation following Climate Smart Agriculture Practices &nbsp;in hot spot areas of 11 districts as from the food crops sector Other field crops occupy the highest share of importation at present.&nbsp;</span><br><span lang=""><br></span>More than 7000 farmers affected by climate changes in Hambantota, Kilinochchi, Mullaitivu, Trincomalee, Batticaloa, Ampara, Polonnaruwa, Anuradhapura, Puttalam, Kurunegala and Monaragala have been selected for the above purpose. Cultivation is being carried out on 3635 acres and it is expected to produce nearly 8000 tons of OFCs. Groundnut, green gram, cowpea, chilli, maize, soya, red onion, kurakkan, sesame and Blake Gram are grown under this programme. The CSAIP contribution to this project is Rs 115.12M..8M.<br>Please click to listen:<a href="https://www.youtube.com/watch?v=_6YqBGSKvsU" target="_blank">Lakhanda Radio</a>, <a href="https://www.youtube.com/watch?v=AnVWpYFoyQo&t=2s" target="_blank">Sinhala Services at SLBC</a>, <a href="https://www.youtube.com/watch?v=cIoZSf28yNE" target="_blank">Tamil Services at SLBC</a> and <a href="https://www.youtube.com/watch?v=7-iBHpoTo7w&feature=youtu.be" target="_blank">&nbsp;English services st SLBC</a></div>
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_07_24_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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