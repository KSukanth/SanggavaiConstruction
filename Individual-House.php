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
        $MainTitle = 'Individual House';
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
                    This beautifully designed independent residence is crafted for comfortable family living, offering privacy, spacious interiors, and high-quality construction. The home is thoughtfully planned to provide a peaceful lifestyle with modern design and practical space utilization.
                </p>

                <p>
                    Built as a Stilt + 3 Floors structure with only 3 exclusive units, this project ensures maximum privacy and a calm residential environment. Each unit comes with a spacious layout of 1500 Sq.ft, ideal for families seeking comfort and functionality.
                </p>

                <p>
                    The project is CMDA approved, ensuring legal clarity and long-term value, making it a perfect choice for secure residential investment.
                </p>

                <h3 class="mt-4">Key Highlights</h3>
                <p>✔ CMDA Approved</p>
                <p>✔ Stilt + 3 Floors Structure</p>
                <p>✔ Individual House Configuration</p>
                <p>✔ Unit Size: 1500 Sq.ft</p>
                <p>✔ 3 Exclusive Units</p>
                <p>✔ Completion: December 2021</p>

                <h3 class="mt-4">Why Choose This Individual House?</h3>
                <p>✔ Private and peaceful lifestyle</p>
                <p>✔ Spacious and practical layout</p>
                <p>✔ Quality construction standards</p>
                <p>✔ Ideal for modern family living</p>
                <p>✔ Strong long-term residential value</p>

                <!-- CTA Buttons -->
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
                    <li><span>Configuration :</span> <span>Individual House</span></li>
                    <li><span>Unit Size :</span> <span>1500 Sq.ft</span></li>
                    <li><span>Total Units :</span> <span>3 Exclusive Units</span></li>
                    <li><span>Completion :</span> <span>December 2021</span></li>
                    <li><span>Category :</span> <span>Independent Residential Home</span></li>
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