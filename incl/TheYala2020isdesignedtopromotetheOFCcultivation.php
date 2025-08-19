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

The Yala 2020 is designed to promote the OFC cultivation

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->
<div><br></div>
<div itemprop="description articleBody">
    <table cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td><a href="https://1.bp.blogspot.com/-GVmVnUBfAmE/X0Ntg43hPkI/AAAAAAAAAqA/mNf6YCOgAGYL9faauff3_rmgeZzqQJsCACLcBGAsYHQ/s1658/Covid19.jpg"><img border="0" height="205" src="https://1.bp.blogspot.com/-GVmVnUBfAmE/X0Ntg43hPkI/AAAAAAAAAqA/mNf6YCOgAGYL9faauff3_rmgeZzqQJsCACLcBGAsYHQ/w190-h205/Covid19.jpg" width="190"></a></td>
            </tr>
            <tr>
                <td>
                    <p>Mr Sisira Semasinghe,&nbsp;</p>
                    <p>Agriculture Extension Specialist&nbsp;</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p><span lang="">The Yala 2020 is designed to promote the Other Field Crops cultivation among the farming community in hot spot areas of the 11 districts of the island said&nbsp;</span>Mr Sisira Semasinghe, Agriculture Extension Specialist of Climate Smart Irrigated Agriculture Project (CSIAP) with an exclusive interview with Lakhanda News on 11<sup>th</sup> August 2020<span lang="">.&nbsp;</span></p>
    <p><span lang="">This Yala 2020 covers the area of more than 3,600Ac of OFC (Groundnut, green gram, cowpea, chilli, maize, soya, red onion, kurakkan, sesame and Blake Gram are grown) cultivating lands of the country. Farmers who will be involving with the project have been familiar with the cultivation of OFCs and involving with the cultivation of OFCs for production purposes. The lessons learned by implementing the project in this season will be applied to correct mistakes in the coming seasons. In order to achieve the objectives of the programme, &nbsp;many strategies have been planned to be implemented by the CSIAP with implementing agencies.</span></p>
    <p><span lang="">Please click <a href="https://www.youtube.com/watch?v=nBDqV6upCG8&t=4s" target="_blank">&nbsp;Lakhanda News</a>to listen</span></p>
</div>




                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_08_24_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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