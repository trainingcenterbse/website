<?php
/*
Template Name: Services Page
*/

get_header();
?>

<main id="primary" class="site-main">
    <section class="page-header">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="services-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h3>Professional Development</h3>
                        <p>Continuous learning opportunities through workshops, seminars, and training programs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h3>Certification</h3>
                        <p>Professional certification programs and accreditation services for engineers.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3>Consultancy</h3>
                        <p>Expert consultancy services for engineering projects and technical challenges.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Networking</h3>
                        <p>Professional networking events and industry conferences.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3>Resources</h3>
                        <p>Access to technical publications, research papers, and industry standards.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Career Services</h3>
                        <p>Job postings, career guidance, and professional development support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>