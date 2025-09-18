<?php
/**
 * Template Name: Modern Homepage
 * 
 * This is a custom template for the homepage with modern design elements
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Hero Slider Section
        get_template_part('template-parts/components/hero-slider');
        ?>

        <!-- Quick Links Section -->
        <section class="quick-links-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="quick-link-card membership">
                            <i class="fas fa-id-card"></i>
                            <h3><?php _e('Membership', 'bse-theme'); ?></h3>
                            <p><?php _e('Join BSE Community', 'bse-theme'); ?></p>
                            <a href="<?php echo esc_url(home_url('/membership')); ?>" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="quick-link-card training">
                            <i class="fas fa-graduation-cap"></i>
                            <h3><?php _e('Training', 'bse-theme'); ?></h3>
                            <p><?php _e('Professional Development', 'bse-theme'); ?></p>
                            <a href="<?php echo esc_url(home_url('/training')); ?>" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="quick-link-card events">
                            <i class="fas fa-calendar-alt"></i>
                            <h3><?php _e('Events', 'bse-theme'); ?></h3>
                            <p><?php _e('Upcoming Activities', 'bse-theme'); ?></p>
                            <a href="<?php echo esc_url(home_url('/events')); ?>" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="quick-link-card certification">
                            <i class="fas fa-certificate"></i>
                            <h3><?php _e('Certification', 'bse-theme'); ?></h3>
                            <p><?php _e('Professional Certificates', 'bse-theme'); ?></p>
                            <a href="<?php echo esc_url(home_url('/certification')); ?>" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        // News and Events Section
        get_template_part('template-parts/components/news-events');

        // Membership Calculator Section
        get_template_part('template-parts/components/membership-calculator');
        ?>

        <!-- Statistics Section -->
        <section class="statistics-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-number" data-count="1000">0</div>
                            <div class="stat-label"><?php _e('Members', 'bse-theme'); ?></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="stat-number" data-count="50">0</div>
                            <div class="stat-label"><?php _e('Annual Events', 'bse-theme'); ?></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="stat-number" data-count="30">0</div>
                            <div class="stat-label"><?php _e('Training Programs', 'bse-theme'); ?></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="stat-number" data-count="20">0</div>
                            <div class="stat-label"><?php _e('Partners', 'bse-theme'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
get_footer();
?>