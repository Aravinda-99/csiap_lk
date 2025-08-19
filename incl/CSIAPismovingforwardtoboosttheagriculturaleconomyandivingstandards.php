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

CSIAP is moving forward to boost the agricultural economy and living standards

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                           <div><br>
    <table cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td><a href="https://1.bp.blogspot.com/-GtuKVUL93x4/XpNCOSpMPZI/AAAAAAAAAbU/QCzMe6n0TiIifwERBXZzphk1WQjDGkN_gCLcBGAsYHQ/s1600/Dr%2BPriyantha%2BFinal%2B02.jpg"><img border="0" height="305" src="https://1.bp.blogspot.com/-GtuKVUL93x4/XpNCOSpMPZI/AAAAAAAAAbU/QCzMe6n0TiIifwERBXZzphk1WQjDGkN_gCLcBGAsYHQ/s320/Dr%2BPriyantha%2BFinal%2B02.jpg" width="320"></a></td>
            </tr>
            <tr>
                <td>Dr. Priyantha Weerasinghe,<br>Deputy&nbsp;Project&nbsp;Director, CSIAP</td>
            </tr>
        </tbody>
    </table>CSIAP is moving forward to boost the agricultural economy of the country and uplift the living standards of farmers in climatically vulnerable hot spots areas of 11 districts of the country despite a critical situation where the whole country is facing due to the Covid19 pandemic said, Dr. Priyantha Weerasinghe, Deputy Project Director, Climate Smart Irrigated Agriculture Project (CSIAP) with &nbsp;excursive interviews with National electronic media. &nbsp;
</div>
<div><br></div>
<div>Expressing furthermore during the interviews with the SLBC, Lakhanda and Ruhunu Sevaya, Dr. Weerasinghe said that this project aims to improve the climate resilience of farming communities through increasing &nbsp;productivity in climatically vulnerable Hot-Spot Areas identified in 11 districts of Sri Lanka.</div>
<div><br></div>
<div>In moving forward the project is implementing a program to increase other field crops production covering more than 3000 ac and 5000 beneficiary farmers in this Yala season in all 11 districts and the project will be implemented over six years (2018-2024), he further added.<br>Please click to listen:&nbsp;<br><a href="https://www.youtube.com/watch?v=UL1WO8XiNUA&t=50s" target="_blank">SLBC Sinhala Service</a>,&nbsp;<a href="https://www.youtube.com/watch?v=ObL7TVk5IFE" target="_blank">SLBC Tamil Service</a>,&nbsp;<a href="https://www.youtube.com/watch?v=qcXl8_CMxys" target="_blank">SLBC English Service</a>,&nbsp;<a href="https://www.youtube.com/watch?v=e9LMgS3GMoY" target="_blank">Lakhanda&nbsp;</a>and&nbsp;<a href="https://www.youtube.com/watch?v=rRq3yOd7074&t=4s" target="_blank">Ruhunu Sevaya</a>.</div>


                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_04_12_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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