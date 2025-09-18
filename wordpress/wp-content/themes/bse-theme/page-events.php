<?php
/**
 * Template Name: Events & Training
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

        <!-- Events Filter -->
        <section class="events-filter">
            <div class="container">
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all"><?php esc_html_e('All', 'bse-theme'); ?></button>
                    <button class="filter-btn" data-filter="events"><?php esc_html_e('Events', 'bse-theme'); ?></button>
                    <button class="filter-btn" data-filter="training"><?php esc_html_e('Training', 'bse-theme'); ?></button>
                </div>
            </div>
        </section>

        <!-- Events Grid -->
        <section class="events-grid">
            <div class="container">
                <div class="row">
                    <?php
                    // Query for events (you'll need to set up a custom post type for events)
                    $args = array(
                        'post_type' => 'event',
                        'posts_per_page' => 9,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    
                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="col-md-4">
                            <div class="event-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="event-image">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="event-content">
                                    <div class="event-meta">
                                        <span class="event-date"><?php echo get_post_meta(get_the_ID(), 'event_date', true); ?></span>
                                        <span class="event-type"><?php echo get_post_meta(get_the_ID(), 'event_type', true); ?></span>
                                    </div>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e('Learn More', 'bse-theme'); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </section>

        <!-- Pagination -->
        <section class="pagination">
            <div class="container">
                <?php
                echo paginate_links(array(
                    'prev_text' => __('Previous', 'bse-theme'),
                    'next_text' => __('Next', 'bse-theme'),
                ));
                ?>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>