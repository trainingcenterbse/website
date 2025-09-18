<?php
/**
 * Template Name: Membership Page
 * 
 * This is a custom template for the membership page
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1><?php the_title(); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>"><?php _e('Home', 'bse-theme'); ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Membership Types -->
        <section class="membership-types">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <h2><?php _e('Membership Categories', 'bse-theme'); ?></h2>
                    <p><?php _e('Choose the membership type that best suits your professional status', 'bse-theme'); ?></p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="membership-type-card">
                            <div class="card-header">
                                <h3><?php _e('Fellow Member', 'bse-theme'); ?></h3>
                                <div class="price">50.000 <span>BD/year</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="benefits-list">
                                    <li><i class="fas fa-check"></i> <?php _e('Full voting rights', 'bse-theme'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('Access to all facilities', 'bse-theme'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('Special event invitations', 'bse-theme'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('Committee membership eligibility', 'bse-theme'); ?></li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="#registration" class="btn btn-primary"><?php _e('Apply Now', 'bse-theme'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="membership-type-card featured">
                            <div class="card-header">
                                <h3><?php _e('Full Member', 'bse-theme'); ?></h3>
                                <div class="price">40.000 <span>BD/year</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="benefits-list">
                                    <li><i class="fas fa-check"></i> <?php _e('Voting rights', 'bse-theme'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('Access to facilities', 'bse-theme'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('Event participation', 'bse-theme'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('Professional development', 'bse-theme'); ?></li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="#registration" class="btn btn-primary"><?php _e('Apply Now', 'bse-theme'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="membership-type-card">
                            <div class="card-header">
                                <h3><?php _e('Associate Member', 'bse-theme'); ?></h3>
                                <div class="price">30.000 <span>BD/year</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="benefits-list">
                                    <li><i class="fas fa-check"></i> <?php _e('Limited voting rights', 'bse-theme'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('Basic facility access', 'bse-theme'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('Event participation', 'bse-theme'); ?></li>
                                    <li><i class="fas fa-check"></i> <?php _e('Learning resources', 'bse-theme'); ?></li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="#registration" class="btn btn-primary"><?php _e('Apply Now', 'bse-theme'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Registration Form -->
        <section id="registration" class="registration-section">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <h2><?php _e('Membership Registration', 'bse-theme'); ?></h2>
                    <p><?php _e('Complete the form below to apply for BSE membership', 'bse-theme'); ?></p>
                </div>
                <?php get_template_part('template-parts/components/membership-registration'); ?>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="benefits-section">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <h2><?php _e('Member Benefits', 'bse-theme'); ?></h2>
                    <p><?php _e('Enjoy exclusive benefits as a BSE member', 'bse-theme'); ?></p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <h4><?php _e('Networking', 'bse-theme'); ?></h4>
                            <p><?php _e('Connect with fellow engineers and industry leaders', 'bse-theme'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h4><?php _e('Professional Development', 'bse-theme'); ?></h4>
                            <p><?php _e('Access training and certification programs', 'bse-theme'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <h4><?php _e('Publications', 'bse-theme'); ?></h4>
                            <p><?php _e('Stay updated with industry news and publications', 'bse-theme'); ?></p>
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