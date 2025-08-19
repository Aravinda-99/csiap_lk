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

Demonstrating a Drum Seeder in Ranorawa and Mahanikawewa, Anuradhapura

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                         <p>A demonstration programme on a Drum Seeder was held in Ranorawa and Mahanikawewa cascades in Anuradhapur District under Climate Smart Irrigated Agriculture Project (CSIAP).</p>
<div>
    <table cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td><a href="https://1.bp.blogspot.com/-SNYIC6-4SLI/XdylkxIXllI/AAAAAAAAAK8/j9-7G0w63S8u9w04Bt-RenA4s0keEfX6gCLcBGAsYHQ/s1600/01%2B-%2Bedited.jpg"><img border="0" height="211" src="https://1.bp.blogspot.com/-SNYIC6-4SLI/XdylkxIXllI/AAAAAAAAAK8/j9-7G0w63S8u9w04Bt-RenA4s0keEfX6gCLcBGAsYHQ/s640/01%2B-%2Bedited.jpg" width="640"></a></td>
            </tr>
            <tr>
                <td>Row seeding in paddy field by using Drum Seeder and Eng. Balasooriya is explaining<br></td>
            </tr>
        </tbody>
    </table>
</div>
<div>The major benefit on this system is that the drum seeder itself can be also placed on any type of soil. Then seeding can be done easily , quickly and evenly by this drum seeder. In row seeding, the seeds are sowed in furrows made by the boot of the planter and evenly covered with loose soil to a given depth. This ensures uniform sprouting and plant development and simultaneous maturation.<br><br>Eng. Chinthaka Balasooriya of Farm Mechanization Training Centre explained the advantages of using Drum Seeder to farmers.</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2019_11_26_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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