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
        $Title = 'Project Single';
        $MainTitle = 'Dream House Residentials';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!--===== start project-single-page =====-->
        <section class="project-single-page">
            <div class="container-fluid">
                <div class="project-image scroll-text-animation" data-animation="fade_from_bottom">
                    <img src="assets/images/project-single/single.jpg" alt="">
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-8  col-12">
                        <div class="content">
                            <h2 class="poort-text poort-in-right">Project Descriptions</h2>
                            <p><span>M</span>odern Buildings Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has beening the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and scrambled it to make a good
                                type specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was a popularised in the
                                1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                            <p>Lorem ipsum dolor sit amet consectetur. Sit aliquam dignissim situt id amet cyrium. Nulla
                                thurg varius purus bibendum pellentesque eu sit nascetur vitae. Nibh tortor etrutnibh
                                tincidunt tempor proin. Est placerat felis pellentesque temupus condimentum consectetur.
                                Faucibus nunc pellentesque ac mus posuere aliquam mor augue orci. Egestas donec sit
                                pellentesque lacus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4  col-12 scroll-text-animation" data-animation="fade_from_bottom">
                        <div class="description">
                            <h3>Project Info:</h3>
                            <ul>
                                <li><span>Project :</span> <span>ANT BUilding</span></li>
                                <li><span>Architect :</span> <span>Jhonthan Hayway</span></li>
                                <li><span>Clients :</span> <span>David Arham</span></li>
                                <li><span>Duration :</span> <span>06 Months</span></li>
                                <li><span>Budget :</span> <span>$800.58</span></li>
                                <li><span>Location :</span> <span>Nastek, USA.</span></li>
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