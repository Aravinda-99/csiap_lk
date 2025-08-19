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

Yala 2020 is now in operation throughout the country

	                        </button>

	                    </h2>

	                    </div>



	                    <div id="collapse<?php echo($loopcount); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo($loopcount); ?>">

	                    <div class="card-body">

	                          <div class="card-body" style="font-family: Georgia, serif;">

                                            <!-- content here -->

                                            <p>Climate Smart Irrigated Agriculture Project&nbsp;implements Yala 200&nbsp;&nbsp;which is&nbsp;in line with the programme&nbsp;implemented by the&nbsp;&nbsp;Ministry of Agriculture&nbsp;to overcome possible food shortage that could surface out owing to COVID 19 pandemic. Therefore, this project will be implemented in all climatically vulnerable hot spot areas identified by the project covering 11 districts of the island giving priority for the promotion of Other Food crops (OFC). The total cultivable area expected to cover by the project is 4,029.4 Ac involving with more than 7,074 beneficiaries. The project aims to grow OFC in fields coming under the command area of tanks with&nbsp;adequate water applying climate-smart practices.</p>
<div>
    <table cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td><a href="https://1.bp.blogspot.com/-_pVif5LDYtk/XtzZv54EiRI/AAAAAAAAAjA/02w79P5MmQQ_LNCKQgqm-k19WJtAJrV-QCLcBGAsYHQ/s1600/IMG-20200506-11111.jpg"><img border="0" height="211" src="https://1.bp.blogspot.com/-_pVif5LDYtk/XtzZv54EiRI/AAAAAAAAAjA/02w79P5MmQQ_LNCKQgqm-k19WJtAJrV-QCLcBGAsYHQ/s640/IMG-20200506-11111.jpg" width="640"></a></td>
            </tr>
            <tr>
                <td>Harvesting cowpea &nbsp;in the field</td>
            </tr>
        </tbody>
    </table>The COVID -19 pandemic occurred in end 2019 will limit the future food supply of the country owing not only to the limited availability of food items in the export market but also to the unhealthy financial status of the country to import those. Under this circumstance, the Government of Sri Lanka has launched a Saubhagya National Food Production Drive persuading the cultivation of all food crops. Consistent with the AgStat volume XVI (Department of Agriculture, 2019), it was noted that from the total importation of food items, OFC alone utilizes 39.26% of the food import bill. Further, the decision recently taken by the cabinet of ministers to limit imports except pharmaceuticals and petroleum will create a food shortage in the market in the short run.
</div>
<div><br></div>
<div>To face this situation, the Presidential Task Force established to fight for Covid 19, has declared the promotion of food crops as an urgent need and which has become a high priority in the country at present. This task force has identified Maize, Mung bean, Ground nut, Cowpea, Kollu, Sesame, Kurakkan, Chili, Soya, B Onion, Red Onion, Black gram, Turmeric and Ginger as the main crops to be given priority.</div>
<div><br></div>
<div>Main the objective&nbsp;&nbsp;of the Yala 2020</div>
<div>To support more than 7,000 farmers in hot spot areas of 11 districts to cultivate OFCs in 4,029.4 acres to increase food production in the country and the annual farmer family income by 10%.</div>
<div>
    <div align="center"><br></div>
</div>
<div>Beneficiaries of&nbsp;&nbsp;Yala 2020</div>
<div><a href="https://1.bp.blogspot.com/-1ThItX8GRjw/XtzWulImBcI/AAAAAAAAAik/v__9hsm4Sl0TB8jUMmGwzvvxju328ppdACLcBGAsYHQ/s1600/123.jpg"><img border="0" height="182" src="https://1.bp.blogspot.com/-1ThItX8GRjw/XtzWulImBcI/AAAAAAAAAik/v__9hsm4Sl0TB8jUMmGwzvvxju328ppdACLcBGAsYHQ/s320/123.jpg" width="320"></a>The number of direct beneficiaries of the sub-project is 7074 farmers in all hot spot areas. Out of which 4882 farmers are male and 2192 are female. No of women headed farmer families involved in the sub-project is 384.</div>
<div><br>Type of agriculture inputs and assistance for beneficiaries.</div>
<div>It is proposed that the selected farmers will be provided with seed materials required for the cultivation of identified crops. the table &nbsp;shows the seed requirement different OFC crops that would be cultivated under the project.</div>
<div>Crops proposed to be cultivated and the seed requirement.</div>



                                            <!-- content end -->



	                    <hr class="border-top: 1px dashed green;">

	                    <p>Posted by <?php echo($value->{'author'}[0]->{'name'}->{'$t'}) ; ?><a target="-_blank" href="https://csiaplk.blogspot.com/2020_06_07_archive.html" class="btn btn-info btn-sm ml-3"><i class="fas fa-link"></i> Read full article</a> <span class="float-right">Published Date : <?php echo substr(nl2br($value->{'published'}->{'$t'}),0,10) ; ?></span></p>

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