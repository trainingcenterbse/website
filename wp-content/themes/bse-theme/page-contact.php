<?php
/*
Template Name: Contact Page
*/

get_header();
?>

<main id="primary" class="site-main">
    <section class="page-header">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <h2>Get in Touch</h2>
                        <div class="info-item">
                            <h4>Address</h4>
                            <p>BSE Building, Road XXXX<br>
                            Manama, Kingdom of Bahrain</p>
                        </div>
                        <div class="info-item">
                            <h4>Phone</h4>
                            <p>+973 XXXX XXXX</p>
                        </div>
                        <div class="info-item">
                            <h4>Email</h4>
                            <p>info@bse.bh</p>
                        </div>
                        <div class="info-item">
                            <h4>Working Hours</h4>
                            <p>Sunday - Thursday: 8:00 AM - 4:00 PM<br>
                            Friday - Saturday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <h2>Send us a Message</h2>
                        <?php
                        // Contact form 7 shortcode
                        echo do_shortcode('[contact-form-7 id="contact-form" title="Contact Form"]');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>