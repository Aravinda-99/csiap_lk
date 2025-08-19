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

CSIAP to improve the productivity and climate resilience is underway in Sri Lanka

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                               <h3 itemprop="name">
    <table cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td><a href="https://1.bp.blogspot.com/-JRNyeRQso3w/XgJG7epo12I/AAAAAAAAAT0/7gbZeJjkEb819CSl5bnw7Adm5lkoEWJCwCLcBGAsYHQ/s1600/002.jpg"><img border="0" height="229" src="https://1.bp.blogspot.com/-JRNyeRQso3w/XgJG7epo12I/AAAAAAAAAT0/7gbZeJjkEb819CSl5bnw7Adm5lkoEWJCwCLcBGAsYHQ/s320/002.jpg" width="320"></a></td>
            </tr>
            <tr>
                <td>Dr. Weerasinghe is on ITN FM</td>
            </tr>
        </tbody>
    </table>
</h3>
<div id="post-body-6984326223573820810" itemprop="description articleBody">
    <div><br></div>The development objective of Climate Smart Irrigated Agriculture Project (CSIAP) is to improve the productivity and climate resilience of smallholder agriculture in selected hotspot areas. The project will address the key problem of the vulnerability of agriculture systems in climatic hot spot areas of the country. Dr. Priyantha Weerasinghe, Deputy Project Director of CSIAP talked about CSIAP on ITN FM at 7.55pm on 23rd this month.<br><br>The project is fully integrated within the Government of Sri Lanka administration, and the project implementation is designed to capitalize on existing government agencies at all levels. The participating departments will carry out the project activities within their mandates, but coordinated by provincial DPD (Deputy Project Director) offices, with district units established at the Department of Agriculture (DoA)/Provincial Irrigation Department (PID)/Assistant Commissioner Agrarian Development (ACAD) offices and divisional units established at Agrarian Service Centers (ASCs). Please click to listen: <a href="https://twitter.com/CsiapSl/status/1209183050388692992" target="_blank">News of ITN FM</a> yesterday (23rd).&nbsp;
</div>


                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2019_12_24_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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