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
        $Title = 'Home / 404';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

        <!-- start error-404-section -->
        <section class="error-404-section section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="content clearfix">
                            <div class="error">
                                <img src="assets/images/error-404.png" alt>
                            </div>
                            <div class="error-message">
                                <h3>Oops! Page Not Found!</h3>
                                <p>We’re sorry but we can’t seem to find the page you requested. This might be
                                    because
                                    you have typed the web address incorrectly.</p>
                                <a href="index.php" class="theme-btn">Back to home</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end error-404-section -->

        <!-- start wpo-site-footer -->
        <?php include './partials/footer.php' ?>
        <!-- end wpo-site-footer -->

    </div>
    <!-- end of page-wrapper -->
    <?php include './partials/script.php' ?>
</body>

</html>