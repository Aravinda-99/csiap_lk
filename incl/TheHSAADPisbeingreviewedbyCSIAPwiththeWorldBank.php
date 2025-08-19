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

The HSAADP is being reviewed by CSIAP with the World Bank

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->
<p>Hot Spot Area Agriculture Development Plan (HSAADP) of the Climate Smart Irrigated Agriculture Project (CSIAP) is currently being reviewed at the Uva Management Development Institute (UMDI), Passara. It has been decided that all the specialists of CSIAP must review the HSAAD plans developed by the consultancy firms to make certain that HSAADPs are well prepared, organized.&nbsp;&nbsp;</p>
<div>
    <table cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td><a href="https://1.bp.blogspot.com/-uqTb57Zpk0U/XmGtcLNfq-I/AAAAAAAAAa4/uPPEnjGFNrModkGsK9_R9nEB5DWPaQVxgCLcBGAsYHQ/s1600/20200305_%2B-%2BCopy.jpg"><img border="0" height="304" src="https://1.bp.blogspot.com/-uqTb57Zpk0U/XmGtcLNfq-I/AAAAAAAAAa4/uPPEnjGFNrModkGsK9_R9nEB5DWPaQVxgCLcBGAsYHQ/s640/20200305_%2B-%2BCopy.jpg" width="640"></a></td>
            </tr>
            <tr>
                <td>Eng. Nadaraja Sivalingam, Project Director, CSIAP, is explaining the objectives of the HSAADP</td>
            </tr>
        </tbody>
    </table>The HSAADP is the key instrument of the CSIAP project which would identify necessary interventions to be carried out in Hot spot areas during the period of its implementation based on the HSAADPs developed. It is expected that the HSAADPs will propose productive, economically sound, environmentally friendly and socially acceptable interventions for the respective Hot spot areas assuring the improvement of agriculture livelihood of the community.<br><br>The Project Management Unit (PMU) of the CSIAP has organized this two-day training workshop for the specialists and officers of the CSIAP to furnish them with necessary understanding of reviewing the HSAADP with the assistance of experts from the World Bank. Representing the World Bank Mr. Seenithamby Manoharan, Task Team Leader &nbsp;of CSIAP and Senior Rural Development Specialist, &nbsp;Mr. Sarath Wickramarathne, Consultant, Dr. Gamini &nbsp;Wickramasinghe, Consultant (Social Safeguard) also participated in this event.
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_03_06_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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