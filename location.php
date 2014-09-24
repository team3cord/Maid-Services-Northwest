<?php /* Template Name: LOCATION Template */ get_header(); ?>

	<main role="main">
        <!-- section -->
        <section  class="home-marquee">
            <div class="marquee-list">
                <?php echo get_field('main_marquee_list'); ?>
            </div>
            <div class="arrow-right"></div>
            <img src="<?php echo get_field("main_image"); ?>">

        </section>
        <!-- /section -->
        <div class="orange-panel">
            <div class="contact-quote"><span class="line-one">CONTACT US FOR YOUR</span><br><span class="line-two">FREE ESTIMATE</span><img src="<?php echo get_template_directory_uri(); ?>/img/contact-arrow.png"></div>
            <div class="contact-btn"><a class="contact-btn-link" href="#mc-start-link">GET STARTED</a></div>
        </div>


        <section class="location-main">
                    <article class="repeater">
                        <img src="<?php  echo get_field('section_image'); ?>">
                        <div class="repeater-content">
                            <h3><?php echo get_field('section_title'); ?></h3>
                            <?php echo get_field('section_content'); ?>
                        </div>
                    </article>
         </section>
        <section class="test-rotate">
            <div class="test-header">
                <h3><?php echo get_field('testimonial_header', 4); ?></h3>
            </div>
            <div class="test-body">
                <?php echo get_field('loc_testimonial_shortcode'); ?>
            </div>
        </section>

        <section class="location-form" id="quote-form">

            <div id="mc-start-link" class="orange-panel">
                <div class="form-callout">
                    <span class="line-one">TAKE A MOMENT TO FILL OUR THIS FORM</span><br>
                    <span class="line-two">FOR YOUR FREE QUOTE</span><br>
                    <span class="disclaimer">We are the sole owners of the information collected.  We only use this information to respond to your request for an estimate.</span>
                </div>
            </div>
            <?php echo get_field('location_form'); ?>
        </section>
        <section class="location-sub-footer">
            <a target="_blank" href="<?php echo get_field('sub_footer_chamber_link'); ?>">
                <img class="chamber" src="<?php echo get_field('sub_footer_chamber_image'); ?>">
                <span><?php echo get_field('sub_footer_chamber_text'); ?></span>
            </a>
            <a target="_blank" href="<?php echo get_field('sub_footer_weather_link'); ?>">
                <img class="weather" src="<?php echo get_field('sub_footer_weather_image'); ?>">
                <span><?php echo get_field('sub_footer_weather_text'); ?></span>
            </a>
        </section>

	</main>



<?php get_footer(); ?>