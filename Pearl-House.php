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
        $MainTitle = 'Pearl House';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start project-single-page =====-->
      <section class="project-single-page">
  <div class="container-fluid">

    <div class="row align-items-center">
        <div class="col-lg-8 col-12">
            <div class="content">

                <p>
                    Sanggavai's Pearl House is a premium commercial project strategically developed to support business growth and long-term investment value. Designed with smart space planning and modern construction standards, this project offers an ideal environment for various commercial activities.
                </p>

                <p>
                    Built with a Stilt + 3 Floors structure and limited to just 3 exclusive units, the project ensures better visibility, accessibility, and a focused business environment. Each unit offers a spacious 1500 Sq.ft layout, suitable for offices, showrooms, and commercial establishments.
                </p>

                <p>
                    The project is CMDA approved, ensuring complete legal compliance and making it a reliable choice for business owners and investors seeking secure commercial property.
                </p>

                <h3 class="mt-4">Key Highlights</h3>
                <p>✔ CMDA Approved</p>
                <p>✔ Stilt + 3 Floors Structure</p>
                <p>✔ Commercial Space Configuration</p>
                <p>✔ Unit Size: 1500 Sq.ft</p>
                <p>✔ 3 Exclusive Units</p>
                <p>✔ Completion: December 2021</p>

                <h3 class="mt-4">Why Choose Sanggavai's Pearl House?</h3>
                <p>✔ Prime commercial opportunity</p>
                <p>✔ Smartly planned business spaces</p>
                <p>✔ Quality construction standards</p>
                <p>✔ Excellent visibility and accessibility</p>
                <p>✔ Strong long-term investment potential</p>

                <!-- CTA Button -->
                <div class="mt-4">
                    <a style="background-color:black; color:white; display:inline-block; padding:10px 20px; border-radius:5px; font-weight:bold; font-size:24px;" class="hero-btn fade_bottom" href="contact.php">
                        <span>Contact Us</span> 
                        <i class="ti-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-12 scroll-text-animation" data-animation="fade_from_bottom">
            <div class="description">
                <h3>Project Info:</h3>
                <ul>
                    <li><span>Approval :</span> <span>CMDA Approved</span></li>
                    <li><span>Project Type :</span> <span>Stilt + 3 Floors</span></li>
                    <li><span>Configuration :</span> <span>Commercial Spaces</span></li>
                    <li><span>Unit Size :</span> <span>1500 Sq.ft</span></li>
                    <li><span>Total Units :</span> <span>3 Exclusive Units</span></li>
                    <li><span>Completion :</span> <span>December 2021</span></li>
                    <li><span>Category :</span> <span>Commercial Building</span></li>
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