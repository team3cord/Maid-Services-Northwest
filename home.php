<?php /* Template Name: HOME Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section style="background: url('<?php echo get_field("main_image"); ?>')no-repeat;background-size: cover;background-position: center center;    width: 100%;min-height: 485px;" class="home-marquee">
            <div class="marquee-list">
                <?php echo get_field('main_marquee_list'); ?>
            </div>
            <div class="arrow-right"></div>

		</section>
		<!-- /section -->
        <div class="orange-panel">
            <div class="contact-quote"><span class="line-one">CONTACT US FOR YOUR</span><br><span class="line-two">FREE ESTIMATE</span><img src="<?php echo get_template_directory_uri(); ?>/img/contact-arrow.png"></div>
            <div class="contact-btn"><a class="contact-btn-link" href="<?php get_permalink(); ?>">GET STARTED</a></div>
        </div>

        <section class="home-main">
            <?php

            // check if the repeater field has rows of data
            if( have_rows('main_repeater') ):

                // loop through the rows of data
                while ( have_rows('main_repeater') ) : the_row();

                    // display a sub field value
                    ?>
                    <article class="repeater">
                        <img src="<?php the_sub_field('section_image'); ?>">
                        <div class="repeater-content">
                            <h3><?php the_sub_field('section_title'); ?></h3>
                            <?php the_sub_field('section_content'); ?>
                        </div>
                    </article>
                <?php

                endwhile;

            else :

                // no rows found

            endif;

            ?>
        </section>
        <section class="test-rotate">
            <div class="test-header">
                <h3><?php echo get_field('testimonial_header'); ?></h3>
            </div>
            <div class="test-body">
                <?php echo get_field('testimonial_shortcode'); ?>
            </div>
        </section>
        <section class="main-locations">
            <div class="loc-icon">
            </div>
            <div class="loc-content">
                <h4><?php echo get_field('area_locations'); ?></h4>
                <?php

                // check if the repeater field has rows of data
                if( have_rows('area_location_repeater') ):

                    // loop through the rows of data
                    while ( have_rows('area_location_repeater') ) : the_row();

                        // display a sub field value
                        ?>
                        <div class="list-columns">
                            <?php the_sub_field('single_location'); ?>
                        </div>
                    <?php

                    endwhile;

                else :

                    // no rows found

                endif;

                ?>
            </div>
        </section>
	</main>


<?php get_template_part('sub', 'footer'); ?>
<?php get_footer(); ?>