<?php
/**
 * Template Part: News and Events
 */
?>
<section class="news-events-section">
    <div class="container">
        <!-- Latest News -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="section-header d-flex justify-content-between align-items-center">
                    <h2><?php _e('Latest News', 'bse-theme'); ?></h2>
                    <a href="<?php echo get_post_type_archive_link('post'); ?>" class="btn btn-outline-primary">
                        <?php _e('View All News', 'bse-theme'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $news_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $news_query = new WP_Query($news_args);
            
            if($news_query->have_posts()) :
                while($news_query->have_posts()) : $news_query->the_post();
            ?>
                <div class="col-md-4">
                    <article class="news-card">
                        <?php if(has_post_thumbnail()) : ?>
                            <div class="news-image">
                                <?php the_post_thumbnail('medium_large'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="date">
                                    <i class="far fa-calendar"></i>
                                    <?php echo get_the_date(); ?>
                                </span>
                                <?php
                                $categories = get_the_category();
                                if($categories) :
                                ?>
                                    <span class="category">
                                        <i class="far fa-folder"></i>
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
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

        <!-- Upcoming Events -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="section-header d-flex justify-content-between align-items-center">
                    <h2><?php _e('Upcoming Events', 'bse-theme'); ?></h2>
                    <a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn-outline-primary">
                        <?php _e('View All Events', 'bse-theme'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $event_args = array(
                'post_type' => 'event',
                'posts_per_page' => 3,
                'meta_key' => 'event_date',
                'orderby' => 'meta_value',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'value' => date('Y-m-d'),
                        'compare' => '>=',
                        'type' => 'DATE'
                    )
                )
            );
            $event_query = new WP_Query($event_args);
            
            if($event_query->have_posts()) :
                while($event_query->have_posts()) : $event_query->the_post();
                $event_date = get_post_meta(get_the_ID(), 'event_date', true);
                $event_time = get_post_meta(get_the_ID(), 'event_time', true);
                $event_location = get_post_meta(get_the_ID(), 'event_location', true);
            ?>
                <div class="col-md-4">
                    <div class="event-card">
                        <?php if(has_post_thumbnail()) : ?>
                            <div class="event-image">
                                <?php the_post_thumbnail('medium_large'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="event-content">
                            <div class="event-meta">
                                <span class="date">
                                    <i class="far fa-calendar"></i>
                                    <?php echo date_i18n(get_option('date_format'), strtotime($event_date)); ?>
                                </span>
                                <?php if($event_time) : ?>
                                    <span class="time">
                                        <i class="far fa-clock"></i>
                                        <?php echo esc_html($event_time); ?>
                                    </span>
                                <?php endif; ?>
                                <?php if($event_location) : ?>
                                    <span class="location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <?php echo esc_html($event_location); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                <?php _e('Learn More', 'bse-theme'); ?>
                            </a>
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