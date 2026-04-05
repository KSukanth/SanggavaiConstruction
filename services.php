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
        $Title = 'Services';
        $MainTitle = 'What’s part of the service';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start wpo-service-section =====-->
       <section class="wpo-service-section-s8 section-padding">
    <div class="container-fluid p-0">
        <div class="service-wrap">
            <div class="row">

                <!-- Joint Venture -->
                <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                    <div class="service-card">
                        <div class="icon">
                            <img src="assets/images/icons/joint-venture.svg" alt="icon" width="100px">
                        </div>
                        <h2><a href="#">Joint Venture</a></h2>
                        <p>
                            Development of vacant lands, apartment redevelopment, and reconstruction
                            projects ensuring maximum value for property owners.
                        </p>
                    </div>
                </div>

                <!-- Design & Build -->
                <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                    <div class="service-card">
                        <div class="icon">
                            <img src="assets/images/icons/sketch.svg" alt="icon" width="100px">
                        </div>
                        <h2><a href="#">Design & Build</a></h2>
                        <p>
                            Complete end-to-end construction solutions from design to execution
                            with quality, efficiency, and timely delivery.
                        </p>
                    </div>
                </div>

                <!-- Industrial -->
                <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                    <div class="service-card">
                        <div class="icon">
                            <img src="assets/images/icons/industrial.svg" alt="icon" width="100px">
                        </div>
                        <h2><a href="#">Industrial Construction</a></h2>
                        <p>
                            Industrial buildings with proper planning and infrastructure
                            to support heavy equipment and operations.
                        </p>
                    </div>
                </div>

                <!-- Commercial -->
                <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                    <div class="service-card">
                        <div class="icon">
                            <img src="assets/images/icons/market-expansion.svg" alt="icon" width="100px">
                        </div>
                        <h2><a href="#">Commercial Spaces</a></h2>
                        <p>
                            Functional commercial buildings designed for retail shops,
                            offices, and business growth.
                        </p>
                    </div>
                </div>

                <!-- Residential Projects -->
                <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                    <div class="service-card">
                        <div class="icon">
                            <img src="assets/images/icons/home.svg" alt="icon" width="100px">
                        </div>
                        <h2><a href="#">Residential Projects</a></h2>
                        <p>
                            Well-designed apartments and housing projects with modern layouts
                            and durable construction standards.
                        </p>
                    </div>
                </div>

                <!-- Individual Houses -->
                <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                    <div class="service-card">
                        <div class="icon">
                            <img src="assets/images/icons/house-owner.svg" alt="icon" width="100px">
                        </div>
                        <h2><a href="#">Individual Houses</a></h2>
                        <p>
                            Customized individual house construction tailored to customer
                            needs and lifestyle preferences.
                        </p>
                    </div>
                </div>

                <!-- Renovation -->
                <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                    <div class="service-card">
                        <div class="icon">
                            <img src="assets/images/icons/renovation.svg" alt="icon" width="100px">
                        </div>
                        <h2><a href="#">Renovation</a></h2>
                        <p>
                            Reconstruction and renovation of old buildings to improve structure,
                            design, and usability.
                        </p>
                    </div>
                </div>

                <!-- Property Development -->
                <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                    <div class="service-card">
                        <div class="icon">
                            <img src="assets/images/icons/stats.svg" alt="icon" width="100px">
                        </div>
                        <h2><a href="#">Property Development</a></h2>
                        <p>
                            Complete development solutions for land and properties with focus on
                            planning, execution, and long-term value.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
      <section class="section-padding pt-0">
    <div class="container text-center">

        <h3 style="margin-bottom:15px;">Have a Project in Mind?</h3>

        <p style="margin-bottom:25px;">
            Contact us directly on WhatsApp for quick consultation and expert guidance.
        </p>

        <a href="https://wa.me/919150035559" target="_blank" class="theme-btn" style="background:#25D366; border-color:#25D366;">
            <i class="ti-mobile"></i> Chat on WhatsApp
        </a>

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