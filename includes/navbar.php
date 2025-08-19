<?php

        $FullUrl = $_SERVER['REQUEST_URI']; 

        $UrlExploded = explode("/", $FullUrl);

        $EndUrl = end($UrlExploded);

?>

        <div class="navbar-area">

            <div class="trifles-responsive-nav">

                <div class="container">

                    <div class="trifles-responsive-menu">

                        <div class="logo">

                            <a href="index">

                                <img src="assets\img\logo.png" alt="logo">

                            </a>

                        </div>

                    </div>

                </div>

            </div>



            <div class="trifles-nav">

                <div class="container-fluid">

                    <nav class="navbar navbar-expand-md navbar-light">

                        <a class="navbar-brand" href="index">

                            <img src="assets\img\logo.png" alt="logo">

                        </a>



                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                            <ul class="navbar-nav">

                                <li class="nav-item">

                                    <a href="index" class="nav-link <?php echo ($EndUrl == '' || $EndUrl == 'index') ? 'active' : ''; ?>">

                                        Home 

                                    </a>

                                </li>



                                <li class="nav-item">

                                    <a href="#" class="nav-link <?php echo ($EndUrl == 'theproject') ? 'active' : ''; ?>">

                                        The Project

                                    </a>

                                    <ul class="dropdown-menu">



                                        <li class="nav-item">

                                            <a href="#" class="nav-link <?php echo ($EndUrl == 'aboutus') ? 'active' : ''; ?>">

                                                About Us

                                                <!-- <i class="fa fa-chevron-right"></i> -->

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="overview" class="nav-link <?php echo ($EndUrl == 'overview') ? 'active' : ''; ?>">

                                                        Overview

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="vissionmission" class="nav-link <?php echo ($EndUrl == 'vissionmission') ? 'active' : ''; ?>">

                                                        Vision & Mission

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="basicdatacsiap" class="nav-link <?php echo ($EndUrl == 'basicdatacsiap') ? 'active' : ''; ?>">

                                                        The Basic Data of CSIAP

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="implementation_areas_of_csiap" class="nav-link <?php echo ($EndUrl == 'implementation_areas_of_csiap') ? 'active' : ''; ?>">

                                                        Implementation Areas of CSIAP

                                                    </a>

                                                </li>



                                               <!--  <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Hon. Minister

                                                    </a>

                                                </li> -->

<!-- 

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        State Minister

                                                    </a>

                                                </li> -->


<!-- 
                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Secretary

                                                    </a>

                                                </li> -->



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Project Director

                                                    </a>

                                                </li>

                                            </ul>

                                        </li>



                                        <li class="nav-item">

                                            <a href="#" class="nav-link <?php echo ($EndUrl == 'thecsiap') ? 'active' : ''; ?>">

                                                The CSIAP

                                                <!-- <i class="fa fa-chevron-right"></i> -->

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="introduction" class="nav-link <?php echo ($EndUrl == 'introduction') ? 'active' : ''; ?>">

                                                        Introduction

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="project_components" class="nav-link <?php echo ($EndUrl == 'project_components') ? 'active' : ''; ?>">

                                                        Project Components

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="project_beneficiaries" class="nav-link <?php echo ($EndUrl == 'project_beneficiaries') ? 'active' : ''; ?>">

                                                        Project Beneficiaries

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="project_cost_and_financing" class="nav-link <?php echo ($EndUrl == 'project_cost_and_financing') ? 'active' : ''; ?>">

                                                        Project Cost and Financing

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="implementation_arrangements" class="nav-link <?php echo ($EndUrl == 'implementation_arrangements') ? 'active' : ''; ?>">

                                                        Implementation Arrangements

                                                    </a>

                                                </li>

                                            </ul>

                                        </li>



                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Project Staff

                                                <!-- <i class="fa fa-chevron-right"></i> -->

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="pmu" class="nav-link <?php echo ($EndUrl == 'pmu') ? 'active' : ''; ?>">

                                                        PMU

                                                    </a>

                                                </li>

                                                     <li class="nav-item">

                                                    <a href="eastern_province" class="nav-link <?php echo ($EndUrl == 'eastern_province') ? 'active' : ''; ?>">

                                                        Eastern Province

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="north_central_province" class="nav-link <?php echo ($EndUrl == 'north_central_province') ? 'active' : ''; ?>">

                                                        North Central Province

                                                    </a>

                                                </li>


                                                  <li class="nav-item">

                                                    <a href="north_western_province" class="nav-link <?php echo ($EndUrl == 'north_western_province') ? 'active' : ''; ?>">

                                                        North Western Province

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="northern_province" class="nav-link <?php echo ($EndUrl == 'northern_province') ? 'active' : ''; ?>">

                                                        Northern Province

                                                    </a>

                                                </li>



                                           



                                                <li class="nav-item">

                                                    <a href="spup_province" class="nav-link <?php echo ($EndUrl == 'spup_province') ? 'active' : ''; ?>">

                                                         Southern & Uva Provinces

                                                    </a>

                                                </li>



                                                <!-- <li class="nav-item">

                                                    <a href="southern_province" class="nav-link <?php echo ($EndUrl == 'southern_province') ? 'active' : ''; ?>">

                                                        Southern Province

                                                    </a>

                                                </li> -->



                                              

                                            </ul>

                                        </li>

                                    </ul>

                                </li>



                                <li class="nav-item">

                                    <a href="#ongoingprograms" class="nav-link">

                                         Programmes

                                    </a>

                                    <ul class="dropdown-menu">


                                           


                                           <li class="nav-item">

                                            <a href="ClimateSmartAgronomicImprovementsProgramme" class="nav-link <?php echo ($EndUrl == 'ClimateSmartAgronomicImprovementsProgramme') ? 'active' : ''; ?>">

                                                Climate Smart Agronomic Improvements Programme

                                            </a>

                                        </li> 
                                          <li class="nav-item">

                                            <a href="farmer_training_school" class="nav-link <?php echo ($EndUrl == 'farmer_training_school') ? 'active' : ''; ?>">

                                                Climate Smart Farmer Training School 

                                            </a>

                                        </li>

                                          <li class="nav-item">

                                            <a href="ClimateSmartHomeGardeningProgramme" class="nav-link <?php echo ($EndUrl == 'ClimateSmartHomeGardeningProgramme') ? 'active' : ''; ?>">

                                                Climate Smart Home Gardening Programme

                                            </a>

                                        </li> 

                                        <li class="nav-item">

                                            <a href="ClimateSmartSeedsProductionProgramme" class="nav-link <?php echo ($EndUrl == 'ClimateSmartSeedsProductionProgramme') ? 'active' : ''; ?>">

                                                Climate Smart Seeds Production Programme

                                            </a>

                                        </li> 

                                       

                                         <li class="nav-item">

                                            <a href="CropsDiversificationProgramme" class="nav-link <?php echo ($EndUrl == 'CropsDiversificationProgramme') ? 'active' : ''; ?>">

                                                Crops Diversification Programme

                                            </a>

                                        </li>

                                              <li class="nav-item">

                                            <a href="CommunityBasedSeasonalElectricFencingProgramme" class="nav-link <?php echo ($EndUrl == 'CommunityBasedSeasonalElectricFencingProgramme') ? 'active' : ''; ?>">

                                                       Community-Based Seasonal ElectricFencing Programme
                                            </a>

                                        </li>  

                                         

                                          <li class="nav-item">

                                            <a href="InterSeasonCultivationProgramme" class="nav-link <?php echo ($EndUrl == 'InterSeasonCultivationProgramme') ? 'active' : ''; ?>">

                                                Inter Season Cultivation Programme

                                            </a>

                                        </li> 

                                         <li class="nav-item">

                                            <a href="MicroIrrigationProgramme" class="nav-link <?php echo ($EndUrl == 'MicroIrrigationProgramme') ? 'active' : ''; ?>">

                                                Micro Irrigation Programme

                                            </a>

                                        </li> 

                                              <li class="nav-item">

                                            <a href="modernization_of_agrarian_service_centres" class="nav-link <?php echo ($EndUrl == 'modernization_of_agrarian_service_centres') ? 'active' : ''; ?>">

                                                Modernization of Agrarian Service Centres

                                            </a>

                                        </li>


                                         <li class="nav-item">

                                            <a href="OrganicManureProductionApplicationProgramme" class="nav-link <?php echo ($EndUrl == 'OrganicManureProductionApplicationProgramme') ? 'active' : ''; ?>">

                                                Organic Manure Production Application Programme
                                            </a>

                                        </li> 

                                             <li class="nav-item">

                                            <a href="TrankRehabilitationProgramme" class="nav-link <?php echo ($EndUrl == 'TrankRehabilitationProgramme') ? 'active' : ''; ?>">

                                               Tank Rehabilitation Programme
                                            </a>

                                        </li> 

                                            <li class="nav-item">

                                            <a href="WaterManagement" class="nav-link <?php echo ($EndUrl == 'WaterManagement') ? 'active' : ''; ?>">

                                              Water Management Programme
                                            </a>

                                        </li> 

                                          


                                       


                                         


                                 

                                        






                                     

                                    

                                           <!--   <li class="nav-item">

                                            <a href="#programmes_completed" class="nav-link">

                                                Programmes Completed

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="cluster_village_development_programme_2020" class="nav-link <?php echo ($EndUrl == 'cluster_village_development_programme_2020') ? 'active' : ''; ?>">

                                                        Cluster Village Development Programme 2020

                                                    </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="yala_2020_season" class="nav-link <?php echo ($EndUrl == 'yala_2020_season') ? 'active' : ''; ?>">

                                                        Yala 2020 Season

                                                    </a>

                                                </li>

                                            </ul>

                                        </li> -->

                                      <!--   <li class="nav-item">

                                            <a href="the_organic_fertilizer_production_programme" class="nav-link <?php echo ($EndUrl == 'the_organic_fertilizer_production_programme') ? 'active' : ''; ?>">

                                                Organic Fertilizer Production Programme

                                            </a>

                                        </li> -->

                                      

                                     

                                   

                                    </ul>

                                </li>



                                <li class="nav-item">

                                    <a href="#" class="nav-link">

                                        Publications

                                    </a>

                                    <ul class="dropdown-menu">



                                           <li class="nav-item">


                                            <a href="#" class="nav-link">

                                                Annual Work Plan and Progress Reports > 

                                            </a>




                                           <!--  <a href="AnnualWorkPlanwithBudget" class="nav-link <?php echo (in_array($EndUrl, ['AnnualWorkPlanwithBudget'], true )) ? 'active' : ''; ?>">

                                                Annual Work Plan With Budget

                                            </a> -->

                                             <ul class="dropdown-menu">

                                                <li class="nav-item">


                                                     <a href="AnnualWorkPlanwithBudget" class="nav-link <?php echo (in_array($EndUrl, ['AnnualWorkPlanwithBudget'], true )) ? 'active' : ''; ?>">

                                                Annual Work Plan With Budget

                                            </a>

                                                    

                                                </li>

                                                    <li class="nav-item">


                                                     <a href="AnnualReports1" class="nav-link <?php echo (in_array($EndUrl, ['AnnualReports1'], true )) ? 'active' : ''; ?>">

                                                Annual Reports

                                            </a>

                                                    

                                                </li>







                                                <li class="nav-item">

                                            <a href="#" class="nav-link <?php echo (in_array($EndUrl, ['climate_smart_nutritional_sensitive_home_garden_programme_report'], true )) ? 'active' : ''; ?>">

                                                Lesson learned    >

                                            </a>


                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="climate_smart_nutritional_sensitive_home_garden_programme_report" class="nav-link <?php echo ($EndUrl == 'climate_smart_nutritional_sensitive_home_garden_programme_report') ? 'active' : ''; ?>">

                                                        Climate Smart Nutritional Sensitive Home Garden Programme (CSNSHG)

                                                    </a>

                                                </li>

                                            </ul>


                                            </li>

                                               <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Progress Reports >

                                            </a>

                                            <ul class="dropdown-menu">



                                                <!--  <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Financial Progress Reports

                                                    </a>

                                                </li> -->

                                                <li class="nav-item">

                                                    <a href="monitoring_and_evaluation_report" class="nav-link <?php echo ($EndUrl == 'monitoring_and_evaluation_report') ? 'active' : ''; ?>">

                                                        Monitoring and Evaluation Reports

                                                    </a>

                                                </li>

                                               

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Safeguard Progress Reports

                                                    </a>

                                                   <!--   <ul class="dropdown-menu">

                                                          <a href="#" class="nav-link">

                                                         Safeguard Progress Report 

                                                    </a>

                                                     </ul> -->

                                                </li>

                                              <!--      <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Other Safeguard Documents

                                                    </a>

                                                </li> --> 

                                            </ul>

                                        </li>


                                            </ul> 

                                        </li>






<!-- 
                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Baseline Survey Reports

                                            </a>

                                        </li>
 -->

                                          <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Completion Reports

                                            </a>

                                        </li>

                                                <li class="nav-item">


                                                     <a href="#" class="nav-link">

                                                Hydrology

                                            </a>

                                              <ul class="dropdown-menu">

                                                    <li class="nav-item">


                                                     <a href="Hydrology" class="nav-link <?php echo (in_array($EndUrl, ['Hydrology'], true )) ? 'active' : ''; ?>">

                                                Assessments

                                            </a>
                                        </li>


                                              </ul>

                                                    

                                                </li>






                                          

                                     <!--    <li class="nav-item">


                                            <a href="#" class="nav-link <?php echo (in_array($EndUrl, ['land_donation','code_of_conduct','resettlement_policy_framework','environmental_management_framework','guidance_notes_seasonal_paddy_field_fence_village_fence','guidance_notes_on_re-use_of_dredge_materials','guidance_notes_on_rehabilitation_of_small_scale_borrow','environmental_social_management_plan'], true )) ? 'active' : ''; ?>">

                                                Guidelines

                                            </a>

                                         


                                        </li> -->



                                     <!--     <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Hand Books

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Home Garden

                                                    </a>

                                                </li>

                                            </ul>

                                        </li>
 -->

                                         <!--  <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Hotspot Area Agriculture Development Plan (HSAASP)

                                            </a>

                                        </li> -->

                                        <!--    <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Hydrological Survey and Engineering Studies Reports

                                            </a>

                                        </li> -->



                                     <!--       <li class="nav-item">

                                            <a href="#" class="nav-link <?php echo (in_array($EndUrl, ['climate_smart_nutritional_sensitive_home_garden_programme_report'], true )) ? 'active' : ''; ?>">

                                                Lesson learned / Field Survey Reports

                                            </a>


                                        </li> -->



                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Training Manuals and Documents       >

                                            </a>

                                            <ul class="dropdown-menu">

                                              



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Agribusiness and Marketing

                                                    </a>

                                                </li>

                                                   <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Climate Smart Agriculture

                                                    </a>

                                                </li>


                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Finance Management

                                                    </a>

                                                </li>


                                                    <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Gender Mainstreaming

                                                    </a>

                                                </li>


                                                 <li class="nav-item">

                                                    <a href="EducationCommunication .php" class="nav-link">

                                                        Information, Education and Communication 

                                                    </a>

                                                </li>

                                                  <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Institutional Development and Capacity Building

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Monitoring and Evaluation

                                                    </a>

                                                </li>



                                            



                                               



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Procurement

                                                    </a>

                                                </li>
                                               



                                                <li class="nav-item">

                                                    <a href="safeguard" class="nav-link <?php echo ($EndUrl == 'safeguard') ? 'active' : ''; ?>">

                                                        Safeguard

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Others

                                                    </a>

                                                </li>

                                            </ul>

                                        </li>


                                     
                                            <li class="nav-item">

                                            <a href="#" class="nav-link <?php echo (in_array($EndUrl, ['project_appraisal_document'], true )) ? 'active' : ''; ?>">

                                                Project Documents    > 

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="project_appraisal_document" class="nav-link <?php echo ($EndUrl == 'project_appraisal_document') ? 'active' : ''; ?>">

                                                        Project Appraisal Document

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        <!-- Project Implementation Plan -->
                                                        Concept Notes  >

                                                    </a>


                                                       <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Assessment to Develop Strategies for Promoting Gender Involvement and Increasing Nutrition Levels of Famer Families

                                                    </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="code_of_conduct" class="nav-link <?php echo ($EndUrl == 'code_of_conduct') ? 'active' : ''; ?>">

                                                        Code of Conduct

                                                    </a>

                                                </li>

                                                    <li class="nav-item">

                                                    <a href="environmental_management_framework" class="nav-link <?php echo ($EndUrl == 'environmental_management_framework') ? 'active' : ''; ?>">

                                                        Environmental Management Framework

                                                    </a>

                                                </li>

                                                    <li class="nav-item">

                                                    <a href="environmental_social_management_plan" class="nav-link <?php echo ($EndUrl == 'environmental_social_management_plan') ? 'active' : ''; ?>">

                                                        Environmental & Social Management Plan (ESMP)

                                                    </a>

                                                </li>


                                                     <li class="nav-item">

                                                    <a href="guidance_notes_seasonal_paddy_field_fence_village_fence" class="nav-link <?php echo ($EndUrl == 'guidance_notes_seasonal_paddy_field_fence_village_fence') ? 'active' : ''; ?>">

                                                        Guidance Notes on Seasonal Paddy Field Fence & Village Fence

                                                    </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="guidance_notes_on_re-use_of_dredge_materials" class="nav-link <?php echo ($EndUrl == 'guidance_notes_on_re-use_of_dredge_materials') ? 'active' : ''; ?>">

                                                        Guidance Notes on Re-use of Dredge Materials

                                                    </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="guidance_notes_on_rehabilitation_of_small_scale_borrow" class="nav-link <?php echo ($EndUrl == 'guidance_notes_on_rehabilitation_of_small_scale_borrow') ? 'active' : ''; ?>">

                                                        Guidance Notes on Rehabilitation of Small Scale Borrow

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="land_donation" class="nav-link <?php echo ($EndUrl == 'land_donation') ? 'active' : ''; ?>">

                                                        Land Donation

                                                    </a>

                                                </li>

                                                 <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Producer Society Guideline

                                                    </a>

                                                </li>
                                                



                                                <li class="nav-item">

                                                    <a href="resettlement_policy_framework" class="nav-link <?php echo ($EndUrl == 'resettlement_policy_framework') ? 'active' : ''; ?>">

                                                        Resettlement Policy Framework

                                                    </a>

                                                </li>
                                           

                                            </ul>

                                                </li>

                                            </ul>

                                        </li>

                                             <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Publicity Materials >

                                            </a>

                                            <ul class="dropdown-menu">

                                                       <li class="nav-item">

                                                    <a href="Broachers1.php" class="nav-link">

                                                        Broachers

                                                    </a>

                                                </li>

                                                 <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                         Leaflets >

                                                    </a>

                                                    <ul class="dropdown-menu">


                                                         <!--    <li class="nav-item">

                                                            <a href="#" class="nav-link">

                                                                Cluster Village

                                                            </a>

                                                        </li> -->

                                                         <li class="nav-item">

                                                            <a href="Leaflets1.php" class="nav-link">

                                                                CSIAP

                                                            </a>

                                                        </li> 


                                                         <li class="nav-item">

                                                            <a href="Covid19leaflet.php" class="nav-link">

                                                                Covid 19

                                                            </a>

                                                        </li>


                                                     <!--      <li class="nav-item">

                                                            <a href="#" class="nav-link">

                                                                Home Garden

                                                            </a>

                                                        </li> -->



                                                    <!--     <li class="nav-item">

                                                            <a href="grievance_redressal_mechanism" class="nav-link <?php echo ($EndUrl == 'grievance_redressal_mechanism') ? 'active' : ''; ?>">

                                                                Grievance Redressal Mechanism

                                                            </a>

                                                        </li> -->



                                                    



                                                       <!--  <li class="nav-item">

                                                            <a href="#" class="nav-link">

                                                                Gender Mainstreaming

                                                            </a>

                                                        </li> -->



                                                      



                                                      <!--   <li class="nav-item">

                                                            <a href="#" class="nav-link">

                                                                Producer Society

                                                            </a>

                                                        </li> -->



                                                       

                                                    </ul>

                                                </li>




                                                <li class="nav-item">

                                                    <a href="newsletter1.php" class="nav-link">

                                                        News Letters

                                                    </a>

                                                </li>



                                               



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Posters >

                                                    </a>

                                                    <ul class="dropdown-menu">


                                                       <!--   <li class="nav-item">

                                                            <a href="#" class="nav-link">

                                                                Cluster Village

                                                            </a>

                                                        </li> -->
                                                        

                                                        <li class="nav-item">

                                                            <a href="poster1.php" class="nav-link">

                                                                CSIAP

                                                            </a>

                                                        </li>



                                                        <li class="nav-item">

                                                            <a href="covid19" class="nav-link <?php echo ($EndUrl == 'covid19') ? 'active' : ''; ?>">

                                                                COVID 19

                                                            </a>

                                                        </li>



                                                       



                                                        <!-- <li class="nav-item">

                                                            <a href="#" class="nav-link">

                                                                Home Garden

                                                            </a>

                                                        </li> -->


<!-- 
                                                        <li class="nav-item">

                                                            <a href="#" class="nav-link">

                                                                Producer Society

                                                            </a>

                                                        </li> -->

                                                    </ul>

                                                </li>



                                         


<!-- 
                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Others

                                                    </a>

                                                </li> -->

                                            </ul>

                                        </li>



                                        <li class="nav-item">


                                             <a href="#" class="nav-link">

                                                       Safeguard Documents > 

                                                    </a>

                                                       <ul class="dropdown-menu">

                                                          <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Environmental Screening Reports  >

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="agrarian_service_center_modernization_and_digitalization_civil_work" class="nav-link <?php echo ($EndUrl == 'agrarian_service_center_modernization_and_digitalization_civil_work') ? 'active' : ''; ?>">

                                                        Agrarian Service Center Modernization and Digitalization 

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="agri__road_rehabilitation" class="nav-link <?php echo ($EndUrl == 'agri__road_rehabilitation') ? 'active' : ''; ?>">

                                                        Agri Road Rehabilitation

                                                    </a>

                                                </li>


                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Other Construction or Rehabilitation

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Ware House Constructions

                                                    </a>

                                                </li>




                                            </ul>

                                        </li>



                                                            <li class="nav-item">

                                            <a href="social_and_gender_screening_reports" class="nav-link <?php echo ($EndUrl == 'social_and_gender_screening_reports') ? 'active' : ''; ?>">

                                                Social and Gender Screening Reports > 

                                            </a>

                                     

                                         <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Agrarian Service Center Modernization and Digitalization 

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="agri_road_rehabilitation" class="nav-link <?php echo ($EndUrl == 'agri_road_rehabilitation') ? 'active' : ''; ?>">

                                                        Agri Road Rehabilitation

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="warehouse_constructions" class="nav-link <?php echo ($EndUrl == 'warehouse_constructions') ? 'active' : ''; ?>">

                                                        Warehouse Constructions

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Other Construction or Rehabilitation 

                                                    </a>

                                                </li>

                                            </ul>

                                        </li>





                                                      <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Social, Gender and Environmental Amalgamated Screening Report  >    

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="anicut_rehabilitation" class="nav-link <?php echo ($EndUrl == 'anicut_rehabilitation') ? 'active' : ''; ?>">

                                                        Anicut Rehabilitation

                                                    </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="agro_well_rehabilitation" class="nav-link <?php echo ($EndUrl == 'agro_well_rehabilitation') ? 'active' : ''; ?>">

                                                        Agro-Well Rehabilitation

                                                    </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="cascade_development_and_tank_rehabilitation" class="nav-link <?php echo ($EndUrl == 'cascade_development_and_tank_rehabilitation') ? 'active' : ''; ?>">

                                                        Cascade Development and Tank Rehabilitation

                                                    </a>

                                                </li>


<!-- 
                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Cultivation

                                                    </a>

                                                </li> -->



                                                <li class="nav-item">

                                                    <a href="cluster_village_development_programme" class="nav-link <?php echo ($EndUrl == 'cluster_village_development_programme') ? 'active' : ''; ?>">

                                                        Cluster Village Development Programme

                                                    </a>

                                                </li>


                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Maha Season Cultivation Programme 

                                                    </a>

                                                </li>



                                              



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Climate Smart Nutritional Sensitive Home Garden Programme

                                                    </a>

                                                </li>

                                                 <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Nutritional Sensitive Home Garden Programme 

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Mid Season or Inter Season Cultivation Programme

                                                    </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                       Other Contruction/ Rehabilittaion/ Cultivation Programmes 

                                                    </a>

                                                </li>


                                                  <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Yala 2020 (COVID 19) Cultivation Programme

                                                    </a>

                                                </li>


                                            </ul>

                                        </li>



                    <!--                      <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Environmental Screening Reports

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="agrarian_service_center_modernization_and_digitalization_civil_work" class="nav-link <?php echo ($EndUrl == 'agrarian_service_center_modernization_and_digitalization_civil_work') ? 'active' : ''; ?>">

                                                        Agrarian Service Center Modernization and Digitalization 

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="agri__road_rehabilitation" class="nav-link <?php echo ($EndUrl == 'agri__road_rehabilitation') ? 'active' : ''; ?>">

                                                        Agri Road Rehabilitation

                                                    </a>

                                                </li>


                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Other Construction or Rehabilitation

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Ware House Constructions

                                                    </a>

                                                </li>




                                            </ul>

                                        </li> -->



          <li class="nav-item">

                                            <a href="OtherSafeguardDocuments" class="nav-link <?php echo ($EndUrl == 'OtherSafeguardDocuments') ? 'active' : ''; ?>">

Other Safeguard Documents
                                            </a>

                                       <!--      <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="agrarian_service_center_modernization_and_digitalization_civil_work" class="nav-link <?php echo ($EndUrl == 'agrarian_service_center_modernization_and_digitalization_civil_work') ? 'active' : ''; ?>">

                                                        Agrarian Service Center Modernization and Digitalization 

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="agri__road_rehabilitation" class="nav-link <?php echo ($EndUrl == 'agri__road_rehabilitation') ? 'active' : ''; ?>">

                                                        Agri Road Rehabilitation

                                                    </a>

                                                </li>


                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Other Construction or Rehabilitation

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Ware House Constructions

                                                    </a>

                                                </li>




                                            </ul> -->

                                        </li>

                                            </ul>

                                        </li>








                                                  <li class="nav-item">


                                            <a href="#" class="nav-link">

                                                Water for Agriculture > 

                                            </a>




                                           <!--  <a href="AnnualWorkPlanwithBudget" class="nav-link <?php echo (in_array($EndUrl, ['AnnualWorkPlanwithBudget'], true )) ? 'active' : ''; ?>">

                                                Annual Work Plan With Budget

                                            </a> -->

                                             <ul class="dropdown-menu">

                                                <li class="nav-item">


                                                     <a href="CropWaterRequirements" class="nav-link <?php echo (in_array($EndUrl, ['CropWaterRequirements'], true )) ? 'active' : ''; ?>">

                                                Crop Water Requirement

                                            </a>

                                                    

                                                </li>


                                                <li class="nav-item">

                                            <a href="OperationMaintenance" class="nav-link <?php echo (in_array($EndUrl, ['OperationMaintenance'], true )) ? 'active' : ''; ?>">

                                                Operation & Maintenance

                                            </a>


                                         


                                            </li>

                                               <li class="nav-item">

                                                <a href="WaterManagementPlans" class="nav-link <?php echo (in_array($EndUrl, ['WaterManagementPlans'], true )) ? 'active' : ''; ?>">


                                                

                                                Water Management Plans

                                            </a>

                                        

                                        </li>


                                            </ul> 

                                        </li>








                                     


                            <!--             <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Training Materials

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Farmer Business School (FBS)

                                                    </a>

                                                </li>



                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">

                                                        Climate Smart Agriculture (CSA)

                                                    </a>

                                                </li>

                                            </ul>

                                        </li> -->

                                    

                                     

                                   

                                   

                                       

                                      

                                  

                                      

                            

                                    </ul>

                                </li>



                                <li class="nav-item">

                                    <a href="#" class="nav-link">

                                        Public Notice

                                    </a>

                                    <ul class="dropdown-menu">

                                        <li class="nav-item">

                                            <a href="bidnotices" class="nav-link <?php echo ($EndUrl == 'bidnotices') ? 'active' : ''; ?>">

                                                Bid Notices

                                            </a>

                                        </li>


                                        <li class="nav-item">

                                            <a href="request_for_expression_of_interests" class="nav-link <?php echo ($EndUrl == 'request_for_expression_of_interests') ? 'active' : ''; ?>">

                                                Request for Expression of Interests

                                            </a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="vacancies" class="nav-link <?php echo ($EndUrl == 'vacancies') ? 'active' : ''; ?>">

                                                Vacancies

                                            </a>

                                        </li>

                                        

                                    </ul>

                                </li>



                                <li class="nav-item">

                                    <a href="#" class="nav-link">

                                        News & Events

                                    </a>

                                    <ul class="dropdown-menu">

                                        <li class="nav-item">

                                            <a href="news" class="nav-link <?php echo ($EndUrl == 'news') ? 'active' : ''; ?>">

                                                News

                                            </a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="newsarticle" class="nav-link <?php echo ($EndUrl == 'newsarticle') ? 'active' : ''; ?>">

                                                Newspaper Articles

                                            </a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="social_media_links" class="nav-link <?php echo ($EndUrl == 'social_media_links') ? 'active' : ''; ?>">

                                                Social Media Links

                                            </a>

                                        </li>

                                       <!--  <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Training Programmes

                                            </a>

                                        </li> -->

                                       <!--  <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Training Summary Sheets

                                            </a>

                                        </li> -->

                                         <li class="nav-item">

                                            <a href="tankcascade" class="nav-link <?php echo ($EndUrl == 'tankcascade') ? 'active' : ''; ?>">

                                                Tank Cascades

                                            </a>

                                        </li>




                                    </ul>

                                </li>



                                <li class="nav-item">

                                    <a href="conflicts_mediation_and_grievance_redressal" class="nav-link">

                                        GRM

                                    </a>

                                    <ul class="dropdown-menu">

                                        <li class="nav-item">

                                            <a href="conflicts_mediation_and_grievance_redressal#conflicts_mediation_grievance_redressal" class="nav-link">

                                                Conflicts Mediation & Grievance Redressal

                                            </a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                No of Grievances Received

                                            </a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Solved

                                            </a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Under Progress

                                            </a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Unsolved

                                            </a>

                                        </li>

                                    </ul>

                                </li>



                                <li class="nav-item">

                                    <a href="#" class="nav-link">

                                        Gallery

                                    </a>

                                    <ul class="dropdown-menu">


                                        <li class="nav-item">

                                            <a href="audio" class="nav-link <?php echo ($EndUrl == 'audio') ? 'active' : ''; ?>">

                                                Audio

                                            </a>

                                        </li>

                                         <li class="nav-item">

                                            <a href="photos" class="nav-link <?php echo ($EndUrl == 'photos') ? 'active' : ''; ?>">

                                                Photos

                                            </a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="presentations" class="nav-link <?php echo ($EndUrl == 'presentations') ? 'active' : ''; ?>">

                                                Presentations

                                            </a>

                                        </li>



                                        <li class="nav-item">

                                            <a href="video" class="nav-link <?php echo ($EndUrl == 'video') ? 'active' : ''; ?>">

                                                Videos

                                            </a>

                                        </li>


                                       

                                        

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Voice of People

                                            </a>

                                        </li>

                                    </ul>

                                </li>



                                <li class="nav-item">

                                    <a href="contact" class="nav-link">

                                        Contacts

                                    </a>

                                </li>

                            </ul>



                            <!-- <div class="others-options">

                                <div class="option-item"><i class="search-btn fa fa-search"></i>

                                    <i class="close-btn fa fa-times"></i>

                                    <div class="search-overlay search-popup">

                                        <div class='search-box'>

                                            <form class="search-form">

                                                <input class="search-input" name="search" placeholder="Search" type="text">



                                                <button class="search-button" type="submit">

                                                    <i class="fas fa-search"></i>

                                                </button>

                                            </form>

                                        </div>

                                    </div>

                                </div>



                                <div class="cart-btn">

                                    <a href="cart">

                                        <i class="fa fa-shopping-cart"></i>

                                    </a>

                                </div>



                                <div class="burger-menu">

                                    <i class="flaticon-menu"></i>

                                </div>

                            </div> -->

                        </div>

                    </nav>

                </div>

            </div>

        </div>