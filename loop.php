<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
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
	<!-- /article -->

<?php endwhile; ?>
            <div class="newer-posts orange-text">

                <?php previous_posts_link('&laquo; Newer Posts') ?></div>

            <div class="older-posts orange-text"><?php next_posts_link('Older Posts &raquo;') ?></div>
            <br><br>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
