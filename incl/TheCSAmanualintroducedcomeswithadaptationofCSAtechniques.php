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

The CSA manual introduced comes with adaptation of CSA techniques

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                       <p itemprop="name">
    <table cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td><a href="https://1.bp.blogspot.com/-TUufjZ4gqdM/XcVDyO4YCoI/AAAAAAAAAGs/vNFts0yxm8IE3cZhG6awCfHjZf-g1wyNACLcBGAsYHQ/s1600/IMAG0304%2Bedited.jpg"><img border="0" height="270" src="https://1.bp.blogspot.com/-TUufjZ4gqdM/XcVDyO4YCoI/AAAAAAAAAGs/vNFts0yxm8IE3cZhG6awCfHjZf-g1wyNACLcBGAsYHQ/w1087-h270/IMAG0304%2Bedited.jpg" width="1087"></a></td>
            </tr>
            <tr>
                <td>Dr. V. K. Ravichandran is addressing the audience in the workshop</td>
            </tr>
        </tbody>
    </table>
</p>
<div id="post-body-6564897774981440628" itemprop="description articleBody">
 
    <div>The CSA manual provides good information regarding the adaptation of CSA Techniques said Dr. V.K. Ravichandran, a World Bank Consultant in the workshop on obtaining comments on the CSA manual of &nbsp;CSIAP for improvement held on 04th this month at the National Training Center of the Department of Agrarian Development, Pothuhara, Kurunagala.<br><br>Expressing his idea on the Climate Smart Agriculture (CSA) Dr. Ravichandran further added &ldquo;The adaptation of climate smart agriculture is essentially required in the present-day scenario of climate change in agriculture.&nbsp;CSIAP (Climate Smart irrigated Agriculture Project), a world bank funded project in Sri Lanka is started implementing the CSA techniques in agriculture. In this context, a CSA manual has been prepared by the project for the use of implementing officials in six provinces in Sri Lanka.&rdquo;<br>&ldquo;The CSA manual provides good information regarding the adaptation of CSA Techniques&nbsp;which resolve around ( i). increasing the resources to use efficiently (ii). adaptation techniques to withstand the extremes of climate change events and findings (iii). climate change mitigation effects in the agriculture sector to reduce greenhouse gas emission to enable to bring out the climate resilient techniques&rdquo;<br>&ldquo;I hope that this workshop is highly useful to finetune the location specific farmers needed CSA techniques for the six provinces.&rdquo;<br>Top officials representing Department of Agriculture in provincial and district levels, &nbsp;and staff of the CSIAP were also present on the occasion.</div>
</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2019_11_08_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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