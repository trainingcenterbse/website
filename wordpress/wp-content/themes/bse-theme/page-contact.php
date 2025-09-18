<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1><?php the_title(); ?></h1>
            </div>
        </section>

        <!-- Contact Content -->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <h3><?php esc_html_e('Our Office', 'bse-theme'); ?></h3>
                            <p>
                                <strong><?php esc_html_e('Address:', 'bse-theme'); ?></strong><br>
                                <?php esc_html_e('P.O. Box 835', 'bse-theme'); ?><br>
                                <?php esc_html_e('Manama, Kingdom of Bahrain', 'bse-theme'); ?>
                            </p>
                            <p>
                                <strong><?php esc_html_e('Phone:', 'bse-theme'); ?></strong><br>
                                <a href="tel:+97317727100">+973 17727100</a>
                            </p>
                            <div class="social-links">
                                <h3><?php esc_html_e('Follow Us', 'bse-theme'); ?></h3>
                                <a href="https://twitter.com/BSEMohandis" target="_blank" class="social-icon twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.facebook.com/BSEMohandis" target="_blank" class="social-icon facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/BSEMohandis" target="_blank" class="social-icon instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UCp5qkiSZrg39v4M0KOtn4wg" target="_blank" class="social-icon youtube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/bahrain-society-of-engineers-bse-35792886" target="_blank" class="social-icon linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://wa.me/97332215274" target="_blank" class="social-icon whatsapp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <h3><?php esc_html_e('Send Us a Message', 'bse-theme'); ?></h3>
                            <?php 
                            if (function_exists('wpforms_display')) {
                                wpforms_display(get_theme_mod('bse_contact_form_id', ''));
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
                <!-- Useful Links -->
                <div class="useful-links">
                    <h3><?php esc_html_e('Useful Links', 'bse-theme'); ?></h3>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="http://www.crpep.bh/" target="_blank" class="link-card">
                                <?php esc_html_e('Council for Regulating the Practice of Engineering Professions', 'bse-theme'); ?>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="http://arabfedeng.org/" target="_blank" class="link-card">
                                <?php esc_html_e('Arab Federation of Engineers', 'bse-theme'); ?>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="http://www.wfeo.org/" target="_blank" class="link-card">
                                <?php esc_html_e('World Federation of Engineering Organizations', 'bse-theme'); ?>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://bse.bh/ar/gulf-engineers-societies" target="_blank" class="link-card">
                                <?php esc_html_e('Gulf Engineering Societies', 'bse-theme'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>