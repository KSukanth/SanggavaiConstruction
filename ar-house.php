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
        $MainTitle = 'Sanggavai\'s AR House';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start project-single-page =====-->
      <section class="project-single-page">
    <div class="container-fluid">
       

        <div class="row align-items-center">
            <div class="col-lg-8 col-12">
                <div class="content">
                  

                     <div class="scroll-text-animation" style="padding-bottom: 10px;" data-animation="fade_from_bottom">
            <img src="assets/images/project/ARHouse.jpg" alt="Sanggavai AR House">
        </div>

                    <p>
                        Sanggavai’s AR House is a premium residential apartment project designed for modern families seeking comfort, privacy, and quality living. This exclusive development features thoughtfully planned 3 BHK homes with spacious layouts and elegant interiors.
                    </p>

                    <p>
                        Built with a Stilt + 3 Floors structure, the project offers only 6 exclusive units, ensuring a peaceful and private living environment. Each unit ranges from 1110 Sq.ft to 1230 Sq.ft, crafted with practical floor plans, modern elevation, and high-quality finishes to meet contemporary lifestyle needs.
                    </p>

                    <p>
                        Located in a serene and family-friendly neighborhood, AR House combines convenience with comfort, making it an ideal choice for homeowners looking for a refined residential experience.
                    </p>

                    <h3 class="mt-4">Why Choose Sanggavai's AR House?</h3>
                    
                        <p>✔ Premium residential development</p>
                        <p>✔ Spacious and practical floor plans</p>
                        <p>✔ Modern elevation with quality finishes</p>
                        <p>✔ Peaceful family-friendly environment</p>
                        <p>✔ Limited units for enhanced privacy</p>
                    

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
                        <li><span>Project Name :</span> <span>AR House</span></li>
                        <li><span>Approval :</span> <span>RERA Approved</span></li>
                        <li><span>Project Type :</span> <span>Stilt + 3 Floors</span></li>
                        <li><span>Configuration :</span> <span>3 BHK Homes</span></li>
                        <li><span>Unit Sizes :</span> <span>1110 – 1230 Sq.ft</span></li>
                        <li><span>Total Units :</span> <span>6 Exclusive Units</span></li>
                        <li><span>Completion :</span> <span>December 2024</span></li>
                        <li><span>Category :</span> <span>Residential Apartment</span></li>
                    </ul>
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