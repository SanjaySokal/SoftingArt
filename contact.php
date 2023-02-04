<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'inc/head.php' ?>
    <title>SoftingArt</title>
</head>

<body>
    <?php include 'inc/header.php' ?>

    <div class="page-heading">
        <div class="container">
            <h2>Contact us</h2>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="mail.php" method="post">
                            <div class="row justify-center">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Name" required name="name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" required name="email">
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" placeholder="Phone" required name="phone">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Subject" required name="subject">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.279413159019!2d77.02303131436236!3d28.471130798119994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1930bf2ddf6b%3A0x313c87919d329ce2!2sSoftingArt!5e0!3m2!1sen!2sin!4v1673788548219!5m2!1sen!2sin"
                        width="100%" height="100%" loading="lazy" style="border: 0;"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="contact-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-links">
                            <i class="fa-solid fa-headset"></i> <a href="tel:+918816078687">+91-88-160-786-87</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-links">
                            <i class="fa-solid fa-map-location-dot"></i> <a href="https://goo.gl/maps/A9HtxSzXjmS6JbRP8"
                                target="_blank">SoftingArt, Sanjay colony, Sector 6, Gurugram, Haryana 122006</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-links mb-0">
                            <i class="fa-regular fa-paper-plane"></i> <a
                                href="mailto:contact@softingart.com">contact@softingart.com</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-links mb-0">
                            <a href="#"><i class="fa-brands fa-facebook-messenger"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'inc/why.php' ?>
    <?php include 'inc/footer.php' ?>
</body>

</html>