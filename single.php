<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TukiOne
 */

get_header();
?>

<main id="primary" class="site-main">
    <div id="content">

        <?php 
            while (have_posts()):
                the_post();
            get_template_part( 'template-parts/single-post' ); ?>

        <div class="post-footer__related">
            <?php
				$prevPost= get_previous_post();
				    if(is_a($prevPost, 'WP_Post')):
			?>
            <div class="post-footer__related__item -prev">
                <a href="<?php echo get_permalink($prevPost->ID); ?>"> <i class="fas fa-chevron-left"></i>Previous
                    posts</a>
                <div class="post-footer__related__item__content">
                    <?php echo get_the_post_thumbnail($prevPost->ID); ?>
                    <div class="post-card ">
                        <div class="card__content">
                            <h5 class="card__content-category">Typography</h5>
                            <a class="card__content-title"
                                href="<?php echo get_permalink($prevPost->ID); ?>"><?php echo get_the_title($prevPost->ID); ?></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php 
                $nextPost= get_next_post();
				if(is_a($nextPost, 'WP_Post')):	 
            ?>
            <div class="post-footer__related__item -next">
                <a href="<?php echo get_permalink($nextPost->ID); ?>">
                    Next posts<i class="fas fa-chevron-right"></i></a>
                <div class="post-footer__related__item__content">
                    <div class="post-card -right">
                        <div class="card__content">
                            <h5 class="card__content-category">Graphic</h5>
                            <a class="card__content-title"
                                href="<?php echo get_permalink($nextPost->ID); ?>"><?php echo get_the_title($nextPost->ID); ?></a>
                        </div>
                    </div>
                    <?php echo get_the_post_thumbnail($nextPost->ID); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()):
				comments_template();              
			endif;
        endwhile;
		?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</main>

<?php
get_footer();