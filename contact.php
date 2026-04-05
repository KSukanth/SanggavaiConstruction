<!DOCTYPE html>
<html lang="en">
<?php include './partials/head.php' ?>

<body>

<div class="page-wrapper">

<?php include './partials/preloader.php' ?>

<div class="cursor"></div>
<div class="cursor2"></div>

<header id="header">
<?php $HeaderStyle = 'wpo-header-style-s11'; ?>
<?php include './partials/header-topbar-s2.php' ?>
<?php include './partials/header-six.php' ?>
</header>

<?php
$Title = 'Contact Us';
?>
<?php include './partials/page-header.php' ?>

<!-- CONTACT SECTION -->
<section class="wpo-contact-pg-section section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col col-lg-10 offset-lg-1">

                <!-- CONTACT INFO -->
                <div class="office-info">
                    <div class="row">

                        <!-- Address -->
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12 fade_bottom">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-placeholder"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Address</h2>
                                    <p>
                                        S.No.89/2D1, 4th Floor, Pearl House, Valluvar Salai, Ramapuram, Chennai – 600089
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12 fade_bottom">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-email"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Email Us</h2>
                                    <p>info@sanggavais.in</p>
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12 fade_bottom">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-phone-call"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Call Now</h2>
                                    <p><a href="tel:+919150035559">(+91) 91500 35559</a></p>
                                    <p><a href="https://wa.me/919150035559" target="_blank">Chat on WhatsApp</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- TITLE -->
                <div class="wpo-contact-title">
                    <h2>Contact Sanggavai Construction</h2>
                    <p>
                        We have 34 years of experience in construction and 27 years in the business.
                        We are here to help you build your valuable asset with quality work and a personal touch.
                    </p>
                </div>

                <!-- FORM -->
                <div class="wpo-contact-form-area">
                    <form onsubmit="sendToWhatsApp(); return false;" class="contact-validation-active">

                        <div>
                            <input type="text" class="form-control" id="name" placeholder="Your Name*" required>
                        </div>

                        <div>
                            <input type="email" class="form-control" id="email" placeholder="Your Email*" required>
                        </div>

                        <div>
                            <input type="text" class="form-control" id="address" placeholder="Address">
                        </div>

                        <div>
                            <select id="service" class="form-control" required>
                                <option value="">Select Service</option>
                                <option>Joint Venture</option>
                                <option>Design & Build</option>
                                <option>Industrial Construction</option>
                                <option>Commercial Spaces</option>
                            </select>
                        </div>

                        <div class="fullwidth">
                            <textarea class="form-control" id="note" placeholder="Message..."></textarea>
                        </div>

                        <div class="submit-area">
                            <button type="submit" class="theme-btn">Submit Enquiry</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- MAP -->
<section class="wpo-contact-map-section">
    <div class="wpo-contact-map">
        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.1379794317068!2d80.18326379999999!3d13.0268841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5260d474e8ac43%3A0x4063d651a2c445ec!2sValluvar%20Salai%2C%20Ramapuram%2C%20Chennai%2C%20Tamil%20Nadu%20600089!5e0!3m2!1sen!2sin!4v1775382855626!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</section>

<?php include './partials/footer.php' ?>

</div>

<?php include './partials/script.php' ?>

<!-- WHATSAPP SCRIPT -->
<script>
function sendToWhatsApp() {

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var service = document.getElementById("service").value;
    var message = document.getElementById("note").value;

    if(name === "" || email === "" || service === ""){
        alert("Please fill required fields");
        return;
    }

    var whatsappMessage =
        "Hello, I would like to enquire:\n\n" +
        "Name: " + name + "\n" +
        "Email: " + email + "\n" +
        "Service: " + service + "\n" +
        "Message: " + message;

    var url = "https://wa.me/919150035559?text=" + encodeURIComponent(whatsappMessage);

    window.open(url, "_blank");
}
</script>

</body>
</html>