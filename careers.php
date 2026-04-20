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
        $Title = 'Build Your Career With Us';
        $MainTitle = 'Careers With Us';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->

      <section class="wpo-teame-page">
    <div class="container-fluid">
        <div class="row">

            <!-- Left Side Content -->
            <div class="col-lg-7 col-12">
                <div class="left-sidbar">

                    <div class="image">
                        <img src="assets/images/career.jpg" alt="Careers">
                    </div>

                    <div class="info-description">
                        <h2 class="poort-text poort-in-right">Build Your Future</h2>

                        <p>
                            At <strong>Sanggavai Constructions</strong>, we are passionate about creating high-quality spaces that stand the test of time. 
                            Our success is driven by a strong team of dedicated professionals who bring innovation, expertise, and commitment to every project.
                        </p>

                        <p>
                            If you are looking to grow your career in the construction industry and work on exciting and impactful projects, we would love to hear from you.
                        </p>

                        <h2 class="mt-4">Why Join Us</h2>
                        
                            <p>✔ Competitive Salary & Performance-Based Growth</p>
                            <p>✔ Opportunity to Work on Premium Projects</p>
                            <p>✔ Supportive & Professional Work Environment</p>
                            <p>✔ Continuous Learning & Skill Development</p>
                            <p>✔ Clear Career Growth Path</p>
                        
                    </div>

                </div>
            </div>

            <!-- Right Side Content -->
            <div class="col-lg-5 col-12">
                <div class="right-sidbar">

                    <!-- Current Openings -->
                    <div class="personal-info">
                        <h2>Current Openings</h2>
                        <ul>
                            <li><span>Site Engineer</span></li>
                            <li><span>Civil Supervisor</span></li>
                            <li><span>Project Manager</span></li>
                            <li><span>Architect</span></li>
                            <li><span>Accountant</span></li>
                        </ul>
                    </div>

                    <!-- Extra Message -->
                    <div class="education-info">
                        <h3>Join Our Team</h3>
                        <ul>
                            <li>
                                <img src="assets/images/team-single/arrow.svg" alt="">
                                <span>Don’t see a role that fits you?</span>
                            </li>
                            <li>
                                <img src="assets/images/team-single/arrow.svg" alt="">
                                <span>We are always looking for talented individuals.</span>
                            </li>
                            <li>
                                <img src="assets/images/team-single/arrow.svg" alt="">
                                <span>Feel free to share your profile with us.</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

        <!--===== start wpo-consultaForm-section =====-->
      <section class="wpo-consultaForm-section-s3">
    <div class="wraper" style="background: url(assets/images/carrer.jpg);">
        <div class="contact">

            <h2>Application Form</h2>
            <p>Please fill out the form below and our HR team will get in touch with you:</p>

            <form action="send-mail.php" method="post" enctype="multipart/form-data" class="contact-validation-active">

                <div>
                    <label>Full Name*</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div>
                    <label>Phone Number*</label>
                    <input type="tel" class="form-control" name="phone" required>
                </div>

                <div>
                    <label>Email Address*</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div>
                    <label>Position Applying For*</label>
                    <input type="text" class="form-control" name="position" placeholder="Eg: Site Engineer, Civil Engineer" required>
                </div>

                <div>
                    <label>Upload Resume (PDF)*</label>
                    <input type="file" class="form-control" name="resume" accept=".pdf" required>
                </div>

                <div class="fullwidth">
                    <label>Message</label>
                    <textarea class="form-control" name="message" placeholder="Write your message..."></textarea>
                </div>

                <div class="submit-area">
                    <button type="submit" class="shop-btn">Submit Application</button>
                    <div id="loader">
                        <i class="ti-reload"></i>
                    </div>
                </div>

                <div class="clearfix error-handling-messages">
                    <div id="success">Application submitted successfully!</div>
                    <div id="error">Error occurred while sending application. Please try again later.</div>
                </div>

            </form>

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