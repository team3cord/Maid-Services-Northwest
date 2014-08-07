<?php /* Template Name: CUSTOM Template */ get_header(); ?>

    <main id="custom" role="main">
        <!-- section -->


        <section class="custom-banner">
            <div class="custom-title">
                <h4><?php echo the_title(); ?></h4>
            </div>
            <div class="section-sub-nav">
                <?php echo get_field('sub_navigation_list');?>
            </div>

        </section>
        <section class="custom-main">
            <?php echo get_field('custom_content'); ?>
        </section>
        <aside class="custom-test-sidebar">
            <?php echo get_field('testimonial_shortcode', 4); ?>
        </aside>

    </main>

<?php get_template_part('sub', 'footer'); ?>
<script>
    jQuery(function($){
        $(document).ready(function(){
        $('.section-sub-nav a').not(':last').append('\xA0\xA0\xA0/\xA0\xA0\xA0');

        var customMain = $('.custom-main').height();
        $('.custom-test-sidebar').css('min-height', customMain + 50 + 'px');
        })

    });
</script>
<?php get_footer(); ?>
