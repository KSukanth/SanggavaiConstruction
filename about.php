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
        $Title = 'About Us';
        $MainTitle = 'Interior Designer, Expert Architect';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start wpo-about-section =====-->
<section id="about" class="wpo-about-section section-padding pb-0">
    <div class="about-wrap">
        <div class="content">
            <h2 class="poort-text poort-in-right">Sanggavai</h2>

            <p class="fade_bottom">
                Sanggavai Constructions is built on passion, expertise, and strong civil engineering knowledge, delivering high-quality construction across a wide range of projects. Over the years, we have successfully completed numerous projects in and around Chennai, earning client trust through consistent quality, reliability, and workmanship.
            </p>

            <p class="fade_bottom">
                We focus on creating well-planned, aesthetically pleasing designs while ensuring strong, durable, and long-lasting structures. With over 30+ years of experience, we bring deep industry knowledge to every project and provide cost-effective solutions without compromising on quality.
            </p>

            <!-- Founder Section -->
            <div class="founder-box fade_bottom">
                <h4>Founder</h4>
                <p>
                    <strong>[Founder Name Here]</strong> – With decades of experience in civil engineering and construction management, our founder has played a key role in shaping Sanggavai Constructions into a trusted and respected brand, known for quality, integrity, and excellence.
                </p>
            </div>

            <div class="about-btn fade_bottom">
                <a href="contact.php" class="theme-btn">
                    <span class="rolling-text">Get in touch</span>
                </a>
            </div>

            <div class="about-funfact fade_bottom">
                <h3><span class="odometer" data-count="34">00</span> <span class="icon">+</span></h3>
                <h4>Years Of <br> Experience</h4>
            </div>
        </div>
    </div>

    <div class="image">
        <div class="image-1 poort-in-right">
            <img src="assets/images/home/about-2.jpeg" alt="">
        </div>
        <div class="image-2 poort-in-right">
            <img src="assets/images/home/about-1.jpeg" alt="">
        </div>
    </div>
</section>

        <!--===== start wpo-project-section =====-->
       
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
        <!--===== start wpo-service-section =====-->
        <section class="wpo-service-section">
            <div class="container-fluid p-0">
                <div class="service-top">
                    <div class="image">
                        <img src="assets/images/home/banner-about.jpeg" alt="service-bg">
                    </div>
                    <div class="content">
                       <h2 class="poort-text poort-in-right">Our Strength</h2>

<p class="fade_bottom">
Our strength lies in maintaining high standards at every stage of construction.
We ensure quality workmanship, maintain strong relationships with suppliers,
and strictly follow safety procedures at all our project sites.
</p>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                
                                <h2>Quality Workmanship</h2>
<p>
We ensure every project is executed with precision, attention to detail,
and high construction standards.
</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                
                                <h2>Strong Supplier Network</h2>
<p>
We maintain reliable relationships with suppliers to ensure quality materials
and smooth project execution.
</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                
                                <h2>Safety First</h2>
<p>
We strictly follow safety procedures at all project sites to ensure a secure
working environment.
</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="service-card">
                                
                                <h2>Reliable Execution</h2>
<p>
We deliver projects on time with consistent quality and dependable construction practices.
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===== start wpo-funfact-section =====-->
        <section class="wpo-funfact-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="item">
                            <h2><span class="odometer" data-count="215">00</span> <span class="icon">+</span></h2>
                            <h3>CURRENT CLIENTS</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="item">
                            <h2><span class="odometer" data-count="550">00</span> <span class="icon">+</span></h2>
                            <h3>PROJECTS COMPLETE</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="item">
                            <h2><span class="odometer" data-count="23">00</span> <span class="icon">+</span></h2>
                            <h3>YEARS OF EXPERIENCE</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="item">
                            <h2><span class="odometer" data-count="25">00</span> <span class="icon">+</span></h2>
                            <h3>OFFICES WORLDWIDE</h3>
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

        <!--===== start wpo-partners-section =====-->
        <section class="wpo-partners-section fade_bottom">
            <h2 class="d-none">No Content</h2>
            <ul class="partners-slider">
                <li>
                    <div>
                        <img src="assets/images/partners/1.png" alt="">
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/images/partners/2.png" alt="">
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/images/partners/3.png" alt="">
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/images/partners/4.png" alt="">
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/images/partners/5.png" alt="">
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/images/partners/2.png" alt="">
                    </div>
                </li>
            </ul>
        </section>


        <!-- start wpo-site-footer -->
        <?php include './partials/footer.php' ?>
        <!-- end wpo-site-footer -->

    </div>
    <!-- end of page-wrapper -->
    <?php include './partials/script.php' ?>
</body>

</html>