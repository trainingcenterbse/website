<?php
/**
 * Template Part: Slider
 */
?>
<div class="hero-slider">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('<?php echo get_theme_file_uri('assets/images/slider/slide1.jpg'); ?>')">
                <div class="carousel-overlay"></div>
                <div class="slider-content">
                    <h1><?php _e('Advancing Engineering Excellence', 'bse-theme'); ?></h1>
                    <p><?php _e('Join the leading engineering society in Bahrain', 'bse-theme'); ?></p>
                    <a href="/membership" class="btn btn-primary btn-lg"><?php _e('Join Now', 'bse-theme'); ?></a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('<?php echo get_theme_file_uri('assets/images/slider/slide2.jpg'); ?>')">
                <div class="carousel-overlay"></div>
                <div class="slider-content">
                    <h1><?php _e('Professional Development', 'bse-theme'); ?></h1>
                    <p><?php _e('Enhance your skills with our training programs', 'bse-theme'); ?></p>
                    <a href="/training" class="btn btn-primary btn-lg"><?php _e('Explore Courses', 'bse-theme'); ?></a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('<?php echo get_theme_file_uri('assets/images/slider/slide3.jpg'); ?>')">
                <div class="carousel-overlay"></div>
                <div class="slider-content">
                    <h1><?php _e('Engineering Community', 'bse-theme'); ?></h1>
                    <p><?php _e('Network with fellow engineers and industry leaders', 'bse-theme'); ?></p>
                    <a href="/events" class="btn btn-primary btn-lg"><?php _e('View Events', 'bse-theme'); ?></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>