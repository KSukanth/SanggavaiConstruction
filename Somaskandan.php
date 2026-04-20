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
        $MainTitle = 'Somaskandan';
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
                    Sanggavai's Somaskandan is a premium residential project thoughtfully designed for modern lifestyles, combining smart space utilization, elegant design, and quality living standards. This project offers a perfect blend of comfort, functionality, and contemporary living.
                </p>

                <p>
                    Built with a Stilt + 3 Floors structure and limited to just 6 exclusive units, it ensures a peaceful and private residential environment. The 2 BHK homes are efficiently planned with a unit size of 798 Sq.ft, making them ideal for small families and smart urban living.
                </p>

                <p>
                    The project is RERA approved, ensuring legal transparency and providing confidence for both homeowners and investors.
                </p>

                <h3 class="mt-4">Key Highlights</h3>
                <p>✔ RERA Approved</p>
                <p>✔ Stilt + 3 Floors Structure</p>
                <p>✔ 2 BHK Homes</p>
                <p>✔ Unit Size: 798 Sq.ft</p>
                <p>✔ 6 Exclusive Units</p>
                <p>✔ Completion: January 2024</p>

                <h3 class="mt-4">Why Choose Sanggavai's Somaskandan?</h3>
                <p>✔ Smartly designed compact homes</p>
                <p>✔ Premium construction quality</p>
                <p>✔ Peaceful residential environment</p>
                <p>✔ Excellent space planning</p>
                <p>✔ Ideal for families and investment</p>

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
                    <li><span>Approval :</span> <span>RERA Approved</span></li>
                    <li><span>Project Type :</span> <span>Stilt + 3 Floors</span></li>
                    <li><span>Configuration :</span> <span>2 BHK Homes</span></li>
                    <li><span>Unit Size :</span> <span>798 Sq.ft</span></li>
                    <li><span>Total Units :</span> <span>6 Exclusive Units</span></li>
                    <li><span>Completion :</span> <span>January 2024</span></li>
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