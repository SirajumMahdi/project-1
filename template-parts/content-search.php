<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TukiOne
 */

?>



<div class="no-pd" id="content">
    <div class="container">
        <div class="category">
            <div class="row">
                <div class="category__header pr-3 pl-3">
                    <div class="category__header__text">
                        <h4 class="page-title">
                            <?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Are you looking for: %s', 'noonpost' ), '<span>' . get_search_query() . '</span>' );
						?>
                        </h4>
                    </div>

                </div>
                <div class="col-12 col-md-7 col-lg-8 order-md-1">
                    <div class="blog-masonry ">
                        <?php 
                                if (have_posts()):
                                    while(have_posts()):
                                        the_post(); 
                            
                                    get_template_part('template-parts/content');
                               
                                    endwhile;
                                endif;
                            ?>
                    </div>
                    <?php 
                            echo tukione_pagination();     
                        ?>
                </div>
                <div class="col-12 col-md-5 col-lg-4 order-md-2">
                    <div class="blog-sidebar">
                        <div class="blog-sidebar-section -category">
                            <h5 class="center-line-title">Categories</h5>
                            <?php foreach (get_categories() as $cat) : ?>
                            <a class="category -bar " href="<?php echo get_category_link($cat->term_id); ?>">
                                <div class="category__background">
                                    <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
                                </div>
                                <h5 class="title"><?php echo $cat->cat_name; ?></h5>
                                <h5 class="quantity"><?php echo $cat->count; ?></h5>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        <div class="blog-sidebar-section -trending-post">
                            <?php 
                                    if(is_active_sidebar('sidebar-1')) {
                                         dynamic_sidebar('sidebar-1');
                                    }
                                ?>
                        </div>
                        <form class="subcribe-box subcribe-box" action="/" method="POST">
                            <h5>Subcribe</h5>
                            <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed tempor.</p>
                            <input placeholder="Your email" name="email" type="email" /><a class="btn -normal"
                                href="#">Subcribe</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <?php //if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
            <?php
			//tukione_posted_on();
			//tukione_posted_by();
			?>
        </div><!-- .entry-meta -->
        <?php //endif; ?>
    </header><!-- .entry-header -->

    <?php //tukione_post_thumbnail(); ?>

    <div class="entry-summary">
        <?php //the_excerpt(); ?>
    </div><!-- .entry-summary -->

    <footer class="entry-footer">
        <?php //tukione_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article>
<!-- #post-<?php the_ID(); ?> -->