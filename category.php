<?php
/**
 * The template for displaying Category archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TukiOne
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="no-pd" id="content">
        <div class="container">
            <div class="category">
                <div class="row">
                    <div class="category__header pr-3 pl-3">
                        <div class="category__header__text">
                            <?php the_archive_title( '<h5 class="page-title">', '</h5>' ); ?>
                        </div>
                        <div class="category__background">
                            <div id="overlay" class="mr-3 ml-3"></div>
                            <img src="<?php echo z_taxonomy_image_url(); ?>" />
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
                        <?php echo tukione_pagination(); ?>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4 order-md-2">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar-section ">
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
                            </div>
                            <div class="blog-sidebar-section ">
                                <?php 
                                    if(is_active_sidebar('sidebar-3')) {
                                         dynamic_sidebar('sidebar-3');
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
</main>

<?php
get_footer();