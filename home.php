<?php /* Template Name: HOME Template */ get_header(); ?>

	<main role="main">


        <?php get_template_part('main', 'marquee'); ?>
        <div class="location-coupon">
            <img src="<?php echo get_field('coupon_image'); ?>">
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