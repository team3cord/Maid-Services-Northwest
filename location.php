<?php /* Template Name: LOCATION Template */ get_header(); ?>

	<main role="main">
        <?php get_template_part('main', 'marquee'); ?>

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
                <?php echo get_field('testimonial_shortcode', 4); ?>
            </div>
        </section>

        <section class="location-form" id="quote-form">

            <div class="orange-panel">
                <div class="form-callout">
                    <span class="line-one">TAKE A MOMENT TO FILL OUR THIS FORM</span><br>
                    <span class="line-two">FOR YOUR FREE QUOTE</span><br>
                    <span class="disclaimer">We are the sole owners of the information collected.  We only use this information to respond to your request for an estimate.</span>
                </div>
            </div>
            <?php echo get_field('location_form'); ?>
        </section>
        <section class="location-sub-footer">
            <img class="chamber" src="<?php echo get_field('sub_footer_chamber_image'); ?>">
            <span><?php echo get_field('sub_footer_chamber_text'); ?></span>
            <img class="weather" src="<?php echo get_field('sub_footer_weather_image'); ?>">
            <span><?php echo get_field('sub_footer_weather_text'); ?></span>
        </section>

	</main>



<?php get_footer(); ?>