<header id="header">
<div class="wpo-site-header <?php echo isset($HeaderStyle) ? $HeaderStyle : 'wpo-header-style-s11'; ?>">
    <nav class="navigation navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="row align-items-center">

                <!-- Mobile Menu -->
                <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                    <div class="mobail-menu">
                        <button type="button" class="navbar-toggler open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar first-angle"></span>
                            <span class="icon-bar middle-angle"></span>
                            <span class="icon-bar last-angle"></span>
                        </button>
                    </div>
                </div>

                <!-- Logo -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/header-logo.png" alt="Logo">
                        </a>
                    </div>
                </div>

                <!-- Navigation Menu -->
                <div class="col-lg-7 col-md-1 col-1">
                    <div id="navbar" class="collapse navbar-collapse navigation-holder">
                        <button class="menu-close"><i class="ti-close"></i></button>

                        <ul class="nav navbar-nav mb-2 mb-lg-0">

                            <!-- Home -->
                            <li class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php') echo 'active'; ?>">
                                <a href="index.php">Home</a>
                            </li>

                            <!-- About -->
                            <li class="<?php if(basename($_SERVER['PHP_SELF'])=='about.php') echo 'active'; ?>">
                                <a href="about.php">About</a>
                            </li>

                            <!-- Services -->
                            <li class="menu-item-has-children <?php if(basename($_SERVER['PHP_SELF'])=='services.php') echo 'active'; ?>">
                                <a href="services.php">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="services.php">All Services</a></li>
                                </ul>
                            </li>

                            <!-- Projects -->
                            <li class="menu-item-has-children">
                                <a href="projects.php">Projects</a>
                                <ul class="sub-menu">
                                    <li><a href="projects-ongoing.php">Ongoing Projects</a></li>
                                    <li><a href="projects-completed.php">Completed Projects</a></li>
                                </ul>
                            </li>

                            <!-- Careers -->
                            <li class="<?php if(basename($_SERVER['PHP_SELF'])=='careers.php') echo 'active'; ?>">
                                <a href="careers.php">Careers</a>
                            </li>

                            <!-- Contact -->
                            <li class="<?php if(basename($_SERVER['PHP_SELF'])=='contact.php') echo 'active'; ?>">
                                <a href="contact.php">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-lg-3 col-md-4 col-2">
                    <div class="header-right">

                        <!-- Search -->
                       

                        <!-- CTA Button -->
                        <div class="close-form">
                            <a class="theme-btn" href="contact.php">Contact Us</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </nav>
</div>
</header>