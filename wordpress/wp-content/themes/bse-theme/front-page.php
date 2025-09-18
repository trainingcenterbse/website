<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <h1><?php esc_html_e('Bahrain Society of Engineers', 'bse-theme'); ?></h1>
                <p><?php esc_html_e('The professional organization dedicated to advancing engineering in Bahrain', 'bse-theme'); ?></p>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-card">
                            <h3><?php esc_html_e('Professional Development', 'bse-theme'); ?></h3>
                            <p><?php esc_html_e('Enhancing engineering capabilities through training and workshops', 'bse-theme'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <h3><?php esc_html_e('Events & Conferences', 'bse-theme'); ?></h3>
                            <p><?php esc_html_e('Organizing key industry events and networking opportunities', 'bse-theme'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <h3><?php esc_html_e('Member Services', 'bse-theme'); ?></h3>
                            <p><?php esc_html_e('Supporting our members with resources and opportunities', 'bse-theme'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section class="news-section">
            <div class="container">
                <h2><?php esc_html_e('Latest News', 'bse-theme'); ?></h2>
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    );
                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="col-md-4">
                            <article class="news-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                                <div class="news-content">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <?php the_excerpt(); ?>
                                </div>
                            </article>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>