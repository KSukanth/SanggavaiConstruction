<!DOCTYPE html>
<html lang="en">
<?php include './partials/head.php' ?>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <?php include './partials/preloader.php' ?>
        <!-- end preloader -->

        <!--  cursor style -->
        <div class="cursor"></div>
        <div class="cursor2"></div>

        <!-- Start header -->
        <header id="header">
            <?php
            $HeaderStyle = 'wpo-header-style-s11';
            ?>
            <?php include './partials/header-topbar-s2.php' ?>
            <?php include './partials/header-six.php' ?>
        </header>
        <!-- end of header -->

        <!-- start wpo-page-title -->
        <?php
        $Title = 'Completed Project';
        $MainTitle = 'Sanggavai\'s Clara Garden';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start project-single-page =====-->
      <section class="project-single-page">
    <div class="container-fluid">

   
        <div class="row align-items-center">
            <div class="col-lg-8 col-12">
                <div class="content">

                  <img src="assets/images/project/ClaraGarden.png" alt="Completed Projects">
                  
                    <p>
                        This premium residential apartment project is thoughtfully designed for modern living, combining quality construction, approved documentation, and spacious unit planning. Built to offer comfort, convenience, and long-term value, the project ensures a perfect balance of style and functionality.
                    </p>

                    <p>
                        With a Stilt + 5 Floors structure and only 20 exclusive units, this development provides a well-planned living environment with enhanced privacy. The 3 BHK homes come in multiple size options ranging from 1310 Sq.ft to 1490 Sq.ft, making it ideal for families seeking spacious and well-ventilated homes.
                    </p>

                    <p>
                        Located in a prime residential area, the project is fully approved with CMDA and RERA certifications, ensuring legal clarity and peace of mind for buyers.
                    </p>

                    <h3 class="mt-4">Key Highlights</h3>
                    <p>✔ CMDA Approved</p>
                    <p>✔ RERA Approved</p>
                    <p>✔ Stilt + 5 Floors Structure</p>
                    <p>✔ 3 BHK Spacious Homes</p>
                    <p>✔ Unit Sizes: 1310 / 1425 / 1490 Sq.ft</p>
                    <p>✔ 20 Exclusive Units</p>
                    <p>✔ Completion: September 2024</p>

                    <h3 class="mt-4">Why Choose This Project?</h3>
                    <p>✔ Prime residential location</p>
                    <p>✔ Spacious floor plans</p>
                    <p>✔ Premium quality construction</p>
                    <p>✔ All legal approvals completed</p>
                    <p>✔ Ready for comfortable family living</p>


                    

                    
                                      <!-- CTA Buttons -->
                    <div class="mt-4">
                         <a style="background-color:black; color:white; display:inline-block; padding:10px 20px; border-radius:5px; font-weight:bold; font-size:24px;" class="hero-btn fade_bottom" href="contact.php"><span>Contact Us</span> <i
                            class="ti-arrow-right"></i></a>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-12 scroll-text-animation" data-animation="fade_from_bottom">
                <div class="description">
                    <h3>Project Info:</h3>
                    <ul>
                        <li><span>Approval :</span> <span>CMDA & RERA Approved</span></li>
                        <li><span>Project Type :</span> <span>Stilt + 5 Floors</span></li>
                        <li><span>Configuration :</span> <span>3 BHK Homes</span></li>
                        <li><span>Unit Sizes :</span> <span>1310 / 1425 / 1490 Sq.ft</span></li>
                        <li><span>Total Units :</span> <span>20 Exclusive Units</span></li>
                        <li><span>Completion :</span> <span>September 2024</span></li>
                        <li><span>Category :</span> <span>Residential Apartment</span></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="solve-section project-gallery-section">
    <div class="container-fluid">

        <!-- Title -->
        <div class="project-title">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <h2 class="poort-text poort-in-right">Project Gallery</h2>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="poort-text poort-in-right">
                        Explore the premium features of Sanggavai's Clara Garden including modern elevation,
                        children play area, lift lobby, and spacious covered parking.
                    </p>
                </div>
            </div>
        </div>

        <!-- Images Grid -->
        <div class="image-wrap">
            <div class="row g-4">

                <!-- Image 1 -->
                <div class="col-lg-6 col-md-6 col-12 scroll-text-animation" data-animation="fade_from_bottom">
                    <div class="image">
                        <img src="assets/images/project/Clara Garden (1).png" class="img-fluid gallery-img" alt="Building Exterior">
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="col-lg-6 col-md-6 col-12 scroll-text-animation" data-animation="fade_from_bottom">
                    <div class="image">
                        <img src="assets/images/project/Clara Garden (2).png" class="img-fluid gallery-img" alt="Children Play Area">
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="col-lg-6 col-md-6 col-12 scroll-text-animation" data-animation="fade_from_bottom">
                    <div class="image">
                        <img src="assets/images/project/Clara Garden (3).png" class="img-fluid gallery-img" alt="Lift Lobby">
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="col-lg-6 col-md-6 col-12 scroll-text-animation" data-animation="fade_from_bottom">
                    <div class="image">
                        <img src="assets/images/project/Clara Garden (4).png" class="img-fluid gallery-img" alt="Car Parking">
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
       
        <!-- start wpo-site-footer -->
        <?php include './partials/footer.php' ?>
        <!-- end wpo-site-footer -->

    </div>
    <!-- end of page-wrapper -->
    <?php include './partials/script.php' ?>
</body>

</html>