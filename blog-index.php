<?php /* Template Name: BLOG INDEX Template */ get_header(); ?>

    <main id="blog-index" role="main">
        <!-- section -->
        <section class="custom-banner">
            <div class="custom-title">
                <h4><?php echo the_title(); ?></h4>
            </div>

        </section>
        <section class="blog-main">

                <?php
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query('showposts=5&post_type=post'.'&paged='.$paged);

                while ($wp_query->have_posts()) : $wp_query->the_post();
                    ?>

                    <article class="blog-list-post ">
                        <!-- post thumbnail -->
                        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                            <!-- /post thumbnail -->
                            <div class="blog-list-img" >
                                <a href="<?php the_permalink(); ?>"><?the_post_thumbnail('thumbnail'); ?></a>
                            </div>
                        <?php endif; ?>

                        <div class="blog-list-content">
                            <h3><a href="<?php the_permalink(); ?>"><?the_title(); ?></a></h3>
                            <span class="blog-list-meta">Published <?php the_time('F j, Y'); ?> | By <?php the_author_posts_link(); ?></span><br>
                            <p><?php the_excerpt(); ?></p>
                            <a class="read-more" href="<?php the_permalink(); ?>">Read More ...</a>
                        </div>
                    </article>

                <?php endwhile; ?>

            <div class="newer-posts orange-text">

                <?php previous_posts_link('&laquo; Newer Posts') ?></div>

            <div class="older-posts orange-text"><?php next_posts_link('Older Posts &raquo;') ?></div>
            <br><br>


            <?php
            $wp_query = null;
            $wp_query = $temp;  // Reset
            ?>





        </section>
        <!-- /section -->
    </main>

<?php get_sidebar(); ?>

<?php get_template_part('sub', 'footer'); ?>
    <script>
        jQuery(function($){
            $(document).ready(function(){
                $('.section-sub-nav a').not(':last').append('\xA0\xA0\xA0/\xA0\xA0\xA0');

                if ($(window).width() > 641) {
                    var customMain = $('.custom-main').height();
                    $('.custom-test-sidebar').css('min-height', customMain + 50 + 'px');
                }
            })

        });
    </script>

<?php get_footer(); ?>