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

            grid-template-columns: repeat(3, 1fr); /* 3 columns */

            gap: 20px;

            max-width: 1200px;

            margin: 20px auto;

            padding: 0 20px;

        }



        .card {

            width: 100%;

            aspect-ratio: 4 / 2; 

            background: white;

            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

            border-radius: 10px;

            overflow: hidden;

            transition: transform 0.3s;

        }



        .card img {

            width: 100%;

            height: 100%;

            object-fit: cover; /* Ensure images fill the container while maintaining aspect ratio */

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

                grid-template-columns: repeat(2, 1fr); /* 2 columns for tablets */

            }

        }



        @media (max-width: 480px) {

            #gallery-container {

                grid-template-columns: 1fr; /* 1 column for smaller devices */

            }

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



                            <h2>Newspaper Articles</h2>



                            <ul>



                                <li><a href="index">Home</a></li>



                                <li>News & Events</li>



                            </ul>



                        </div>



                    </div>



                </div>



            </div>



        </div>







        <!-- Start Gallery Area -->

<!-- 

        <div class="gallery-area pt-100">



            <div class="container">



                <div class="card-columns"> -->















<div id="gallery-container" class="card-columns">





         <!-- <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Publication Edited Sucess Stories funal-5.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Publication Edited Sucess Stories funal-5.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                  <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Publication Edited Sucess Stories funal-4.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Publication Edited Sucess Stories funal-4.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                                        <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Publication Edited Sucess Stories funal-3.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Publication Edited Sucess Stories funal-3.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                                   <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Publication Edited Sucess Stories funal-2.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Publication Edited Sucess Stories funal-2.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>   -->
                      <div class="card">
                        <div class="single-gallery-box">
                            <img src="assets\uploads\newsarticle\ Dinamina 09 Aug 2025 - Copy.jpg" loading="lazy" alt="csiap news article">

                            <a href="assets\uploads\newsarticle\ Dinamina 09 Aug 2025 - Copy.jpg" class="gallery-btn" data-imagelightbox="popup-btn">

                                <i class="flaticon-view"></i>

                            </a>

                        </div>

                    </div>




                   
                     <div class="card">
                        <div class="single-gallery-box">
                            <img src="assets\uploads\newsarticle\Thinakaran 05 Aug 2025.jpg" loading="lazy" alt="csiap news article">

                            <a href="assets\uploads\newsarticle\Thinakaran 05 Aug 2025.jpg" class="gallery-btn" data-imagelightbox="popup-btn">

                                <i class="flaticon-view"></i>

                            </a>

                        </div>

                    </div>

                       <div class="card">
                        <div class="single-gallery-box">
                            <img src="assets\uploads\newsarticle\Thinakural 26 July 27.jpg" loading="lazy" alt="csiap news article">

                            <a href="assets\uploads\newsarticle\Thinakural 26 July 27.jpg" class="gallery-btn" data-imagelightbox="popup-btn">

                                <i class="flaticon-view"></i>

                            </a>

                        </div>

                    </div>


                        <div class="card">
                        <div class="single-gallery-box">
                            <img src="assets\uploads\newsarticle\Dinamina 22 July 2025.jpg" loading="lazy" alt="csiap news article">

                            <a href="assets\uploads\newsarticle\Dinamina 22 July 2025.jpg" class="gallery-btn" data-imagelightbox="popup-btn">

                                <i class="flaticon-view"></i>

                            </a>

                        </div>

                    </div>


                      <div class="card">
                        <div class="single-gallery-box">
                            <img src="assets\uploads\newsarticle\Dinamina 30 June 2025.jpg" loading="lazy" alt="csiap news article">

                            <a href="assets\uploads\newsarticle\Dinamina 30 June 2025.jpg" class="gallery-btn" data-imagelightbox="popup-btn">

                                <i class="flaticon-view"></i>

                            </a>

                        </div>

                    </div>

                    <div class="card">
                        <div class="single-gallery-box">
                            <img src="assets\uploads\newsarticle\Dinamina 17-06-2025 (1).jpg" loading="lazy" alt="csiap news article">

                            <a href="assets\uploads\newsarticle\Dinamina 17-06-2025 (1).jpg" class="gallery-btn" data-imagelightbox="popup-btn">

                                <i class="flaticon-view"></i>

                            </a>

                        </div>

                    </div>




                    


                          <div class="card">
                        <div class="single-gallery-box">
                            <img src="assets\uploads\newsarticle\Mawbima 30 April 2025.jpg" loading="lazy" alt="csiap news article">

                            <a href="assets\uploads\newsarticle\Mawbima 30 April 2025.jpg" class="gallery-btn" data-imagelightbox="popup-btn">

                                <i class="flaticon-view"></i>

                            </a>

                        </div>

                    </div>


                        <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 28 April 2025.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 28 April 2025.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                             <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 24 April 2025.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 24 April 2025.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                          <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Daily News 24 April 2025.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Daily News 24 April 2025.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div> 



                    
                               <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 24 Dec 2024.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 24 Dec 2024.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div> 


                    



                               <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Thinakaran 13 Dec 2024.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Thinakaran 13 Dec 2024.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div> 









                               <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 2024-12-12 paper (1).jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 2024-12-12 paper (1).jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div> 









                               <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Daily News 21 Nov 2024.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Daily News 21 Nov 2024.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>













                          <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\2024.11.15-11182024095918 copy.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\2024.11.15-11182024095918 copy.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                          <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dailynews 26 Oct 2024.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dailynews 26 Oct 2024.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                         <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Thinakaran  2024.10.18-14.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Thinakaran  2024.10.18-14.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                              <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Mawbima 17 Oct 2024.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Mawbima 17 Oct 2024.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                           <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 2024.10.14.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 2024.10.14.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                       













                          <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\MB-11-10-2024-MB-9 copy.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\MB-11-10-2024-MB-9 copy.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                       <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Thinakaran 09 Oct 2024.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Thinakaran 09 Oct 2024.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





















                          <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dauily News copy (2).jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dauily News copy (2).jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>

















                    









                          <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 2024.10.08-13.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 2024.10.08-13.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>













                    





                      <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Daily News 26 March 2024 .jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Daily News 26 March 2024 .jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                          <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 18-03-2024.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 18-03-2024.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                         

                       <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 11-03-2024 (2)-24.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 11-03-2024 (2)-24.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                    

                       <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 01 Jan 2024.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 01 Jan 2024.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                        <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\ITN.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\ITN.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                       <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 25-11-2023-81 copy 2.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 25-11-2023-81 copy 2.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                     <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\8 DN.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\8 DN.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                     <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\7 newlk S.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\7 newlk S.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                      <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\6 Neswlk E.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\6 Neswlk E.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                      <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\5 DFT.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\5 DFT.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                      <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\11 Ec.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\11 Ec.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                      <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\10 DN 2.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\10 DN 2.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                      <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\9 LNW 2.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\9 LNW 2.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                         <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\3 Mawrata News.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\3 Mawrata News.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                                  <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\2 AD.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\2 AD.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                                          <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\1 PM2.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\1 PM2.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                                  <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\4 DM.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\4 DM.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                                  <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\TK 25 Oct 23.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\TK 25 Oct 23.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>

                    



                          <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 14-10-23 (2).jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 14-10-23 (2).jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                            <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 14-10-23 (1).jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 14-10-23 (1).jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                	

                                       <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\01.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\01.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                                       <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 16 Sep 2023 in page 8.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 16 Sep 2023 in page 8.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                                             <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\15 July 23.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\15 July 23.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                                             <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\14 June 23rd.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\14 June 23rd.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                	

                                                <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\14 June 23.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\14 June 23.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                                           <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\12 June 2023.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\12 June 2023.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>









                	                       <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Sunday Observer 15 April 23.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Sunday Observer 15 April 23.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                                     <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Daily News 05 April 2023.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Daily News 05 April 2023.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                            <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Varimanjari 26 March 2023.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Varimanjari 26 March 2023.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                           <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 25 March 2023.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 25 March 2023.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                       <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Thinakaran 21 March 23.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Thinakaran 21 March 23.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                         <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 14 March 23.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 14 March 23.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                     <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 06 March 23.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 06 March 23.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>

                    



                       <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Ada 02 March 2023.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Ada 02 March 2023.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>





                   <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\agric-1-divaina.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\agric-1-divaina.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>









                             <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Varimanjari 19 Feb 23.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Varimanjari 19 Feb 23.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                



                       <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 11 Feb 23.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 11 Feb 23.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                      <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\DN 09 Feb 2023.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\DN 09 Feb 2023.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                     <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Thinakaran 01 Feb 23.png" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Thinakaran 01 Feb 23.png" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                     <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\DroneSprayerJan2023d.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\DroneSprayerJan2023d.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dailynews30Dec22.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dailynews30Dec22.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\news-tamil.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\news-tamil.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\12 Dec 22-min.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\12 Dec 22-min.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\DIM03122022028ee1d5_mr-min.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\DIM03122022028ee1d5_mr-min.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\MB-2022-12-07-7-min.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\MB-2022-12-07-7-min.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Thinakaran 05 Dec 22-min.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Thinakaran 05 Dec 22-min.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\DN 15 July 22.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\DN 15 July 22.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\DN.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\DN.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina 07 July 2022.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina 07 July 2022.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\FFS 22 Dec 2021.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\FFS 22 Dec 2021.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\FM 03 Feb 2022_mr.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\FM 03 Feb 2022_mr.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\FM T.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\FM T.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\NP.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\NP.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\01Thinakaran.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\01Thinakaran.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Sunday Observer 22 Jan 2022.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Sunday Observer 22 Jan 2022.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\news1.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\news1.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\news2.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\news2.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Mavbima.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Mavbima.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\Dinamina.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\Dinamina.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\12_mr-min.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\12_mr-min.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\uploads\newsarticle\FFS T-min.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\uploads\newsarticle\FFS T-min.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\img\articles\Thinakaran on 09 Jan 2020.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\img\articles\Thinakaran on 09 Jan 2020.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\img\articles\Desathiya.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\img\articles\Desathiya.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\img\articles\Silumina.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\img\articles\Silumina.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\img\articles\22.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\img\articles\22.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\img\articles\Dinamina 18 Feb 2020.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\img\articles\Dinamina 18 Feb 2020.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                 







                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\img\articles\CSIAP 29th July.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\img\articles\CSIAP 29th July.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                    <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\img\articles\CSIAP July 28th 02.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\img\articles\CSIAP July 28th 02.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>







                       <div class="card">



                        <div class="single-gallery-box">



                            <img src="assets\img\articles\123.jpg" loading="lazy" alt="csiap news article">



                            <a href="assets\img\articles\123.jpg" class="gallery-btn" data-imagelightbox="popup-btn">



                                <i class="flaticon-view"></i>



                            </a>



                        </div>



                    </div>



                </div>













<!-- 

                </div>



            </div>



        </div>

 -->





<div class="pagination-area">

    <button class="prev page-numbers" onclick="changePage(-1)"><i class="fas fa-angle-double-left"></i></button>

    <span id="pagination-numbers"></span>

    <button class="next page-numbers" onclick="changePage(1)"><i class="fas fa-angle-double-right"></i></button>

</div>









        <!-- End Gallery Area -->







        <?php include('includes/footer.php'); ?>







        <!-- Start Go Top Section -->

<script>

    const itemsPerPage = 15; // Number of items per page

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



    // Initialize

    goToPage(1);

</script>



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