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
$Title = 'Sanggavai Construction';
$MainTitle = 'Ongoing Projectsn';
?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start service-single-page =====-->
        <section class="service-single-page">
            <div class="container-fluid">
                <div class="service-image scroll-text-animation" data-animation="fade_from_bottom">
                    <img src="assets/images/service-single/single.jpg" alt="">
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-8  col-12">
                        <div class="content">
                           <h2 class="poort-text poort-in-right">Project Expertise</h2>

<p>
    Sanggavai Construction is currently engaged in multiple ongoing projects, 
    all executed with a strong emphasis on quality, precision, and timely completion.
</p>

<p>
    Our ongoing work reflects our expertise across various services, including joint ventures, 
    design and build projects, industrial constructions, and commercial developments. 
    Each project is handled with a commitment to excellence, ensuring superior standards 
    and client satisfaction at every stage.
</p>

 <!-- Project Listings -->
    <h2 class="poort-text poort-in-right mt-4">Project Listings</h2>
    <p>
        Our ongoing portfolio includes residential developments, commercial spaces, 
        industrial constructions, and joint venture projects. Each project is designed 
        to meet modern standards and deliver long-term value.
    </p>

    <!-- Progress Information -->
    <h2 class="poort-text poort-in-right mt-4">Progress Information</h2>
    <p>
        All projects are progressing as per planned timelines with strict quality checks, 
        professional site supervision, and transparent execution. We ensure consistent updates 
        and smooth project delivery.
    </p>

    <!-- CTA -->
    <h2 class="poort-text poort-in-right mt-4">Get in Touch</h2>
<p>
    Looking to invest or collaborate? Contact Sanggavai Construction today to explore 
    our ongoing projects, schedule a site visit, or get detailed information. 
    Chat with us on WhatsApp: 
    <a href="https://wa.me/919150035559" target="_blank"><strong>+91 91500 35559</strong></a>
</p>
                        </div>
                    </div>
                    <div class="col-lg-4  col-12 scroll-text-animation" data-animation="fade_from_bottom">
                        <div class="video" style="background: url(assets/images/ongoing.jpg);">
                           
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