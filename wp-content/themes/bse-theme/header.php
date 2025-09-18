<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="contact-info">
                        <span><i class="fas fa-phone"></i> +973 1772 7100</span>
                        <span><i class="fas fa-envelope"></i> info@bse.bh</span>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <div class="top-actions">
                        <?php if(function_exists('pll_the_languages')): ?>
                            <div class="language-switcher">
                                <?php pll_the_languages(array('show_flags'=>true,'show_names'=>false)); ?>
                            </div>
                        <?php endif; ?>
                        <a href="/member-login" class="btn btn-outline-light btn-sm">Member Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo get_bloginfo('name');
                }
                ?>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php bse_bootstrap_nav_menu(); ?>

            <div class="nav-actions">
                <button class="btn btn-primary join-now-btn"><?php _e('Join Now', 'bse-theme'); ?></button>
            </div>
        </div>
    </nav>
</header>