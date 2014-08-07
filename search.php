<?php get_header(); ?>

<!-- section -->
<section class="custom-banner">
    <div class="custom-title">
        <h4>Search</h4>
    </div>


</section>
	<main id="search" role="main">
		<!-- section -->
		<section class="blog-main">

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_template_part('sub', 'footer'); ?>
<script>
    jQuery(function($){
        $(document).ready(function(){

            var customMain = $('.blog-main').height();
            $('.custom-test-sidebar').css('min-height', customMain + 50 + 'px');
        })

    });
</script>

<?php get_footer(); ?>
