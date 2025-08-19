<!doctype html>







<html>







    <head>







            <title>CSIAP Sri Lanka</title>











          <style>

        body {

            font-family: Arial, sans-serif;

            margin: 0;

            padding: 0;

            background-color: #f9f9f9;

        }



        #gallery-container {

            display: grid;

            grid-template-columns: repeat(3, 1fr); 

            gap: 20px;

            max-width: 1200px;

            margin: 20px auto;

            padding: 0 20px;

        }



 



        .card img {

            width: 100%;

            height: 100%;

            object-fit: cover; 

        }



        .card:hover {

            transform: scale(1.05);

        }



        .pagination-area {

            text-align: center;

            margin: 20px 0;

        }



        .page-numbers {

            display: inline-block;

            padding: 10px 15px;

            margin: 0 5px;

            background: #f4f4f4;

            color: #333;

            border: 1px solid #ddd;

            border-radius: 4px;

            cursor: pointer;

            transition: background 0.3s, color 0.3s;

        }



        .page-numbers.current {

            background: #007bff;

            color: white;

        }



        .page-numbers:hover {

            background: #0056b3;

            color: white;

        }



        .prev, .next {

            font-size: 16px;

            padding: 10px 15px;

            border: none;

            background: #007bff;

            color: white;

            border-radius: 4px;

            cursor: pointer;

        }



        .prev:hover, .next:hover {

            background: #0056b3;

        }



        @media (max-width: 768px) {

            #gallery-container {

                grid-template-columns: repeat(2, 1fr); 

            }

        }



        @media (max-width: 480px) {

            #gallery-container {

                grid-template-columns: 1fr; 

        }

    </style>  









    </head>















    <?php include('includes/header.php'); ?>















    <body>















        <!-- Start Preloader Area -->







		<div class="preloader">







			<div class="lds-ripple">







				<div></div>







				<div></div>







			</div>







		</div>







        <!-- End Preloader Area -->















        <?php include('includes/navbar.php'); ?>















        <div class="page-title-area">







            <div class="d-table">







                <div class="d-table-cell">







                    <div class="container">







                        <div class="page-title-content">







                            <h2>News Letters</h2>







                            <ul>







                                <li><a href="index">Home</a></li>







                                <li>News Letters</li>







                            </ul>







                        </div>







                    </div>







                </div>







            </div>







        </div>















        <!-- Start Gallery Area -->



        <div id="gallery-container" class="card-columns">







        <!-- <div class="gallery-area pt-100"> -->







            <!-- <div class="container"> -->







                <!-- <div class="card-columns"> -->
                     <div class="card">
                       <div class="single-gallery-box">

                        <img src="assets\uploads\newsletters\The successful Journey of farmer Prabash.jpg" alt="csiap news article">

                            <a href="assets\uploads\newsletters\The successful Journey of farmer Prabash.jpg" class="gallery-btn" data-imagelightbox="popup-btn">
                                <i class="flaticon-view"></i>

                            </a>

                        </div>
                    </div>


                      <div class="card">
                       <div class="single-gallery-box">

                        <img src="assets\uploads\newsletters\The Inspiring Story of CSA Family.jpg" alt="csiap news article">

                            <a href="assets\uploads\newsletters\The Inspiring Story of CSA Family.jpg" class="gallery-btn" data-imagelightbox="popup-btn">
                                <i class="flaticon-view"></i>

                            </a>

                        </div>
                    </div>

                     <div class="card">
                       <div class="single-gallery-box">

                        <img src="assets\uploads\newsletters\Farmer Lelawathi triump.jpg" alt="csiap news article">

                            <a href="assets\uploads\newsletters\Farmer Lelawathi triump.jpg" class="gallery-btn" data-imagelightbox="popup-btn">
                                <i class="flaticon-view"></i>

                            </a>

                        </div>
                    </div>



                     <div class="card">
                       <div class="single-gallery-box">

                        <img src="assets\uploads\newsletters\Empowering Youth in Agriculture.jpg" alt="csiap news article">

                            <a href="assets\uploads\newsletters\Empowering Youth in Agriculture.jpg" class="gallery-btn" data-imagelightbox="popup-btn">
                                <i class="flaticon-view"></i>

                            </a>

                        </div>
                    </div>





                    <div class="card">
                       <div class="single-gallery-box">

                        <img src="assets\uploads\newsletters\Publication Edited Sucess Stories funal-5.jpg" alt="csiap news article">

                            <a href="assets\uploads\newsletters\Publication Edited Sucess Stories funal-5.jpg" class="gallery-btn" data-imagelightbox="popup-btn">
                                <i class="flaticon-view"></i>

                            </a>

                        </div>
                    </div>





                       <div class="card">



                        <div class="single-gallery-box">

                            <img src="assets\uploads\newsletters\Publication Edited Sucess Stories funal-4.jpg" alt="csiap news article">

                            <a href="assets\uploads\newsletters\Publication Edited Sucess Stories funal-4.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                        <div class="card">



                        <div class="single-gallery-box">

                            <img src="assets\uploads\newsletters\Publication Edited Sucess Stories funal-3.jpg" alt="csiap news article">

                            <a href="assets\uploads\newsletters\Publication Edited Sucess Stories funal-3.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>









                             <div class="card">



                        <div class="single-gallery-box">

                            <img src="assets\uploads\newsletters\Publication Edited Sucess Stories funal-2.jpg" alt="csiap news article">

                            <a href="assets\uploads\newsletters\Publication Edited Sucess Stories funal-2.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>









                     <div class="card">



                        <div class="single-gallery-box">

                            <img src="assets\uploads\newsletters\Publication Edited Sucess Stories funal-1.jpg" alt="csiap news article">

                            <a href="assets\uploads\newsletters\Publication Edited Sucess Stories funal-1.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>











    <div class="card">



                        <div class="single-gallery-box">

                            <img src="assets\uploads\newsletters\NWP young farmer from traditional to innovative_19.11.2024 002 .jpg" alt="csiap news article">

                            <a href="assets\uploads\newsletters\NWP young farmer from traditional to innovative_19.11.2024 002 .jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>























                    







                       <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\NP -Red onion youth farmer -sucess story 08082024 (1).jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\NP -Red onion youth farmer -sucess story 08082024 (1).jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>











                      <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\1 EP - Home Gardening with success - Nadun_s story.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\1 EP - Home Gardening with success - Nadun_s story.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>











                          <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\2 EP - parachute cultivation - 6.3.2024i.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\2 EP - parachute cultivation - 6.3.2024i.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>











                         



                       <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\03.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\03.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>











                    



                       <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\4 EP - Young Farmer with CSIAP interventions.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\4 EP - Young Farmer with CSIAP interventions.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>











                        <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\5 EP Meena_s Story - Compost - Waste to Wealth.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\5 EP Meena_s Story - Compost - Waste to Wealth.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>











                       <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\6 NCP - 2.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\6 NCP - 2.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>







                     <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\7 NCP - 3.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\7 NCP - 3.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>











                     <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\8 NCP - Success Story-HMRanaweera_NCP.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\8 NCP - Success Story-HMRanaweera_NCP.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>















                      <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\9 NP - A Success Story_Elephant Fence_NP (1).png" alt="csiap news article">







                            <a href="assets\uploads\newsletters\9 NP - A Success Story_Elephant Fence_NP (1).png" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>











                      <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\10 NP - Groundnut Cultivation in Puthukudiyiruppu.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\10 NP - Groundnut Cultivation in Puthukudiyiruppu.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>







                      <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\11 NP - Modernization in Paddy transplanting - FINAL success story.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\11 NP - Modernization in Paddy transplanting - FINAL success story.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>















                      <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\12 NP Ground nut decorticator DRAFT 1.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\12 NP Ground nut decorticator DRAFT 1.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>















                      <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\13.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\13.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>







                         <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\14.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\14.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>







                                  <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\15.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\15.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>











                                          <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\16 NWP - Rain Sheltr Cultivation to Agro entreprenure.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\16 NWP - Rain Sheltr Cultivation to Agro entreprenure.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>











                                  <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\17 NP -Success Story_NP (12.01.2024)vii.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\17 NP -Success Story_NP (12.01.2024)vii.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>











                                  <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\18  NWP Success story - FBS Final.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\18  NWP Success story - FBS Final.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>



                    







                          <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\19 SP Success Story_Gender (16.02.2024) (2).jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\19 SP Success Story_Gender (16.02.2024) (2).jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>







                            <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\20 UP - Agro-Well Success Story_From UP_22.02.2024.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\20 UP - Agro-Well Success Story_From UP_22.02.2024.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>







                	



                                       <div class="card">







                        <div class="single-gallery-box">







                            <img src="assets\uploads\newsletters\21 Success Story_NP (12.01.2024) copy 3.jpg" alt="csiap news article">







                            <a href="assets\uploads\newsletters\21 Success Story_NP (12.01.2024) copy 3.jpg" class="gallery-btn" data-imagelightbox="popup-btn">







                                <i class="flaticon-view"></i>







                            </a>







                        </div>







                    </div>





                </div>







            <!-- </div> -->







        <!-- </div> -->

    <!-- </div> -->







        <!-- End Gallery Area -->









 <div class="pagination-area">

    <button class="prev page-numbers" onclick="changePage(-1)"><i class="fas fa-angle-double-left"></i></button>

    <span id="pagination-numbers"></span>

    <button class="next page-numbers" onclick="changePage(1)"><i class="fas fa-angle-double-right"></i></button>

</div> 











        <?php include('includes/footer.php'); ?>















        <!-- Start Go Top Section -->







<script>

    const itemsPerPage = 6; // Number of items per page

    let currentPage = 1;

    const cards = document.querySelectorAll("#gallery-container .card");

    const totalPages = Math.ceil(cards.length / itemsPerPage);



    function renderPagination() {

        const paginationNumbers = document.getElementById("pagination-numbers");

        paginationNumbers.innerHTML = '';



        for (let i = 1; i <= totalPages; i++) {

            const pageBtn = document.createElement("button");

            pageBtn.classList.add("page-numbers");

            pageBtn.innerText = i;

            pageBtn.onclick = () => goToPage(i);

            if (i === currentPage) pageBtn.classList.add("current");

            paginationNumbers.appendChild(pageBtn);

        }

    }



    function goToPage(page) {

        currentPage = page;

        updateGallery();

        renderPagination();

    }



    function changePage(direction) {

        const newPage = currentPage + direction;

        if (newPage > 0 && newPage <= totalPages) {

            goToPage(newPage);

        }

    }



    function updateGallery() {

        cards.forEach((card, index) => {

            card.style.display =

                index >= (currentPage - 1) * itemsPerPage && index < currentPage * itemsPerPage

                    ? "block"

                    : "none";

        });

    }



    goToPage(1);

</script> 











        <div class="go-top">







            <i class="fas fa-chevron-up"></i>







            <i class="fas fa-chevron-up"></i>







        </div>







        <!-- End Go Top Section -->















        <!-- jQuery Min JS -->







        <script src="assets\js\jquery.min.js"></script>







        <!-- Popper Min JS -->







        <script src="assets\js\popper.min.js"></script>







        <!-- Bootstrap Min JS -->







        <script src="assets\js\bootstrap.min.js"></script>







        <!-- Owl Carousel Min JS -->







        <script src="assets\js\owl.carousel.min.js"></script>







        <!-- MeanMenu JS -->







        <script src="assets\js\jquery.meanmenu.js"></script>







        <!-- Popup JS -->







        <script src="assets\js\jquery.magnific-popup.min.js"></script>







        <!-- Appear JS -->







        <script src="assets\js\jquery.appear.min.js"></script>







        <!-- Odometer JS -->







        <script src="assets\js\odometer.min.js"></script>







        <!-- Image LightBox Min JS -->







        <script src="assets\js\imagelightbox.min.js"></script>







        <!-- Nice Selects Min JS -->







        <script src="assets\js\jquery.nice-select.min.js"></script>







        <!-- AjaxChimp Min JS -->







        <script src="assets\js\jquery.ajaxchimp.min.js"></script>







        <!-- Form Validator Min JS -->







        <script src="assets\js\form-validator.min.js"></script>







        <!-- Contact Form Min JS -->







        <script src="assets\js\contact-form-script.js"></script>







        <!-- Main JS -->







        <script src="assets\js\main.js"></script>







    </body>







</html>