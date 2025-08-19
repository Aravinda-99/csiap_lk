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

Activities of CSNSHG and CVDP for the betterment of Sri Lanka

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
                <td><a href="https://1.bp.blogspot.com/-Q9xkiEu7rmY/XyLx32A1lRI/AAAAAAAAApM/9ggM64Ir9cQEINzjxboi1CvAJvR1Zja1ACLcBGAsYHQ/s1600/Sisira%2BUP%2B02.jpg"><img border="0" height="288" src="https://1.bp.blogspot.com/-Q9xkiEu7rmY/XyLx32A1lRI/AAAAAAAAApM/9ggM64Ir9cQEINzjxboi1CvAJvR1Zja1ACLcBGAsYHQ/s320/Sisira%2BUP%2B02.jpg" width="320"></a></td>
            </tr>
            <tr>
                <td>Mr Sisira Semasinghe, Agriculture Extension Specialist</td>
            </tr>
        </tbody>
    </table>Women farmers are provided greater access to agriculture expertise, participation in local cultivation planning and decision making under Climate Smart Nutrient&nbsp;Sensitive Home Garden (CSNSHG); they are also provided adequate representation at all levels in relevant planning and decision making addressing the&nbsp;gender gap. CSNSHG is identified as the women farmer-based activity targeting to empower women farmers
</div>
<div>A cluster village is an area where farmers are cultivation same crop or crop combinations following the Climate Smart Practices under&nbsp;the Cluster Village Development Programe (CVDP) . Cluster Village hence act as a Climate smart model village for farmers in hot spot areas and act as a information exchange and feedback receival village on Climate Smart Agriculture providing greater learning experience for farmers. The basic idea of each Cluster&nbsp;Village is to increase farmer income, applying all possible Climate Smart Agriculture practices.&nbsp;</div>
<div><br></div>
<div>Mr Sisira Semasinghe, Agriculture Extension Specialist, Climate Smart Irrigated Agriculture Project (CSIAP) explained the current status of both CSNSHG and CVDP, which is being implemented by CSIAP , in an exclusive interview with Lakhanda Radio on 29<sup>th</sup> this month.</div>
<div>Please click&nbsp;<a href="https://www.youtube.com/watch?v=RFV3wjyjs0E" target="_blank">Lakhnda Radio</a> to listen .</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_07_30_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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