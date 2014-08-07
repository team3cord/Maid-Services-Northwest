<?php get_header(); ?>

<main role="main">
    <!-- section -->


    <section class="custom-banner">
        <div class="custom-title">
            <h4>404 ~ File or Page Not Found</h4>
        </div>


    </section>
    <section style="min-height: 600px;"class="custom-main">
        <p class="four-o-four">
            We're sorry the page you requested cannot be found in our database. It may have been moved or changed.
        </p>
    </section>
    <aside style="min-height: 600px;" class="custom-test-sidebar">
        <?php echo get_field('testimonial_shortcode', 4); ?>
    </aside>

</main>

<?php get_template_part('sub', 'footer'); ?>
<?php get_footer(); ?>


