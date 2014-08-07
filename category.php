<?php get_header(); ?>

	<main id="category" role="main">
        <!-- section -->
        <section class="custom-banner">
            <div class="custom-title">
                <h4><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h4>
            </div>

        </section>
        <section class="blog-main">
		<!-- section -->
		<section>


			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
