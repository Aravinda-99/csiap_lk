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

An Awareness Programme on the CSNSHG for Gov.Officers in Buttala

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->
<div><br>An awareness programme on the Climate Smart Nutrient&nbsp;Sensitive Home Garden (CSNSHG), for officers in Buttala and Welaway Divisional Secretariats Areas, Uva Province was held at the Divisional Secretariats, Buttala on 21st this month.&nbsp;&nbsp;Climate Smart Nutrient Sensitive Home Garden is a very special programme that has been planned to implement with 2695 women farmers is aiming to increase the nutrition level of the farming families to ensure adequate immunity level to face COVID-19 pandemic.&nbsp;</div>
<div><br></div>
<table cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td><a href="https://1.bp.blogspot.com/-jyWlF3ifyiw/XxmlqFmQLkI/AAAAAAAAAnY/E4Neao8aCAMpI6VdQhHe9wQRTxAsntWGQCLcBGAsYHQ/s1600/DSCF4279%2B-%2BCopy.jpg"><img border="0" height="226" src="https://1.bp.blogspot.com/-jyWlF3ifyiw/XxmlqFmQLkI/AAAAAAAAAnY/E4Neao8aCAMpI6VdQhHe9wQRTxAsntWGQCLcBGAsYHQ/s640/DSCF4279%2B-%2BCopy.jpg" width="640"></a></td>
        </tr>
        <tr>
            <td>Mr. I. H. Dharmasekara, Deputy Project Director, CSIAP is addressing the audience</td>
        </tr>
    </tbody>
</table>
<div>This program is implemented in all 11 districts to establish 2695 sustainable home gardens applying Climate Smart practices to provide nutrient enrich diet to farmers. CSNSHG is&nbsp;in line with the &ldquo;Saubagya Gewaththa&rdquo; implemented by the Ministry of Mahaweli, Agriculture, Irrigation and Rural Development&nbsp;Mr. S. K . Semasinghe, Agriculture Extension Specialist at Project Management Unit and Dr.Y. Ketipearachchi, Agriculture Specialist in Uva Province, CSIAP&nbsp;delivered lectures to educate officers too.</div>
<div><br></div>
<div>Officers of Department Agriculture (Provincial Uva), Department of Agriculture (Inter Provincial-Uva), Agrarian Services Department (Wellawaya, Buttala, Thelulla) and Divisional Secretariats Offices (Buttala, Wellwaya) attended this programme.</div>
<div><br></div>
<div>Mr. S. K . Semasinghe, Agriculture Extension Specialist, Mrs. S. M. S. Udayangani, Assistant Director, Department of Agriculture, Mr. H.K. P Jayalath, Deputy Director, Department of Agriculture(Provincial-Uva), Mrs. K, A. R. M, Karunanayakr, Assistant Director (Planning), Divisional Secretariat, Buttala and &nbsp; Dr. Y. Ketipearachchi, Agriculture Specialist CSIAP were at the head table while Mr. I. H. Dharmasekara, Deputy Project Director, CSIAP is addressing the audience.</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_07_23_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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