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

Wishing you a very Happy New Year 2020

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                       <div id="collapse<?php echo($loopcount); ?>" class="collapse <?php echo ($loopcount == '0') ? 'show' : ''; ?>" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">
                    <div class="card-body" style="font-family: Georgia, serif;">
                                            <!-- content here -->
<h3 itemprop="name"><a href="https://1.bp.blogspot.com/-ifIy11BS1ko/XgwNLnqXCsI/AAAAAAAAAU4/Ya7tr8bJhKIPXAFWz3melSY5IAEpfUyqACLcBGAsYHQ/s1600/3.jpg"><img border="0" height="200" src="https://1.bp.blogspot.com/-ifIy11BS1ko/XgwNLnqXCsI/AAAAAAAAAU4/Ya7tr8bJhKIPXAFWz3melSY5IAEpfUyqACLcBGAsYHQ/s200/3.jpg" width="200"></a></h3>

<div id="post-body-6866930109283800030" itemprop="description articleBody">Climate Smart Irrigated Agriculture Project (CSIAP) extends its sincere greetings and best wishes to all sri Lankans to mark the New Year 2020 a meaningful and fruitful one. Sri Lanka is a multi-religious and multinational country where all communities live with amity and unity. CSIAP hopes that the new year will be the best year of Sri Lanka.<br>May the new year bring all the good things with no risks to those who live in climatically vulnerable areas in Sri Lanka. CSIAP hope that the new year will be full of positivity for them under its project activities.<br>The New Year binds with the expectations. May all Sri Lankans&rsquo; dreams come true and all their hopes be fulfilled. Let us all get together and join hands in order to strengthen and uplift our country. CSIAP wishes you a healthy, peaceful, and prosperous new year.<br></div>




                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/search?q=wishing+you+very+happy" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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