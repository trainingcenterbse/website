<?php
/**
 * Template Name: About Page
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

        <!-- About Content -->
        <section class="about-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        while (have_posts()) :
                            the_post();
                            get_template_part('template-parts/content', 'page');
                        endwhile;
                        ?>
                    </div>
                    <div class="col-md-4">
                        <div class="about-sidebar">
                            <div class="vision-mission">
                                <h3><?php esc_html_e('Our Vision', 'bse-theme'); ?></h3>
                                <p><?php echo get_theme_mod('bse_vision_text', 'To be the leading engineering society in the region.'); ?></p>
                                
                                <h3><?php esc_html_e('Our Mission', 'bse-theme'); ?></h3>
                                <p><?php echo get_theme_mod('bse_mission_text', 'To promote excellence in the engineering profession and facilitate the exchange of technical knowledge.'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section">
            <div class="container">
                <h2><?php esc_html_e('Our Leadership', 'bse-theme'); ?></h2>
                <div class="row">
                    <?php
                    // Add team members loop here if using a custom post type
                    ?>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>