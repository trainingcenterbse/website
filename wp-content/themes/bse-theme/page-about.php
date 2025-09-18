<?php
/*
Template Name: About Page
*/

get_header();
?>

<main id="primary" class="site-main">
    <section class="page-header">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="about-text">
                        <h2>About Bahrain Society of Engineers</h2>
                        <p>The Bahrain Society of Engineers (BSE) is a professional organization dedicated to advancing the field of engineering in Bahrain. Established with a vision to promote excellence in engineering practices, BSE serves as a platform for engineers to connect, learn, and grow professionally.</p>
                        
                        <h3>Our Mission</h3>
                        <p>To advance the engineering profession by:</p>
                        <ul>
                            <li>Promoting professional excellence</li>
                            <li>Fostering innovation and technical advancement</li>
                            <li>Supporting continuous professional development</li>
                            <li>Facilitating knowledge exchange</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-sidebar">
                        <div class="stats-box">
                            <h4>BSE in Numbers</h4>
                            <div class="stat-item">
                                <span class="stat-number">1000+</span>
                                <span class="stat-label">Members</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">30+</span>
                                <span class="stat-label">Years of Excellence</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">100+</span>
                                <span class="stat-label">Annual Events</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>