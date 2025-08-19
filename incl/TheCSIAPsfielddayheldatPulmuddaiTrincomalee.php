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

The CSIAP’s field day held at Pulmuddai , Trincomalee

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->
<h3 itemprop="name"><br></h3>
<div id="post-body-6641088269255673448" itemprop="description articleBody">
    <table align="center" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td><a href="https://1.bp.blogspot.com/-7RGFEP8zbzw/X_ugU5puaHI/AAAAAAAAA4I/D9Dlk8NSXjEdmMyLiaKdBF3KW-t0ZqM2wCLcBGAsYHQ/s1730/TV.jpg"><img border="0" src="https://1.bp.blogspot.com/-7RGFEP8zbzw/X_ugU5puaHI/AAAAAAAAA4I/D9Dlk8NSXjEdmMyLiaKdBF3KW-t0ZqM2wCLcBGAsYHQ/s320/TV.jpg" width="320"></a></td>
            </tr>
            <tr>
                <td>
                    <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Capital TV and Kinniyan TV telecasted the event</div>
                </td>
            </tr>
        </tbody>
    </table>
    <p>The groundnut field day was held at Pulmuddai , Trincomalee on 07<sup>th</sup> this month with the aim of promoting agricultural practices in &nbsp;CSIAP&rsquo;s command areas under the Maha Season. &nbsp;The field day is a special event: A series of demonstration skits, speeches and other activities focused on a central theme are strung out over the course of a day to promote new practices and bring recognition to successful farmers and agricultural workers in a particular area. The prevailing mood is festive and the atmosphere is not unlike that of a country fair. The point of such a day is to call attention to new and exciting developments in agriculture. The Groundnut cultivation program was initiated by the Deputy Project Director&rsquo;s office in the Eastern Province of Climate Smart Irrigated Agriculture Project (CSIAP) which desperately focusing on uplifting the country from agriculture and improving the living slandered of famers in drystone in Sri Lanka.</p>
    <p>This field day was conducted under the patronage of Mr.M.Parameswaran, Deputy Director of Agriculture (Trincomalee) and &nbsp;Dr. R. M.Ariyadasa, Deputy Project Director, CSIAP Project (Eastern Province). The staff of the Department of Agriculture, CSIAP, Community leaders and farmers &nbsp;were present at this ceremony.</p>
    <p>Please watch <a href="https://www.youtube.com/watch?v=2G9MqZHBsCk">&nbsp;Capital TV</a> and <a href="https://www.youtube.com/watch?v=xSpxOiW7KRs">Kinniyan TV</a></p>
</div>


                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2021_01_11_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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