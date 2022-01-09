<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TukiOne
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-card -center">
        <?php
            if ( has_post_thumbnail() ) : ?>
        <a class="card__cover" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
        <?php endif; ?>
        <div class="card__content">
            <?php
                $categories = get_categories();
                    foreach ($categories as $cat) {
                        $category_link = get_category_link($cat->cat_ID);                                
                    }
                    foreach (get_the_category() as $category){
                        $category_name = $category -> cat_name;
                    }
            ?>
            <h5 class="card__content-category">
                <a href="<?php echo $category_link ?>"><?php echo $category_name; ?></a>
            </h5>
            <a class="card__content-title" href="<?php the_permalink() ?>"><?php the_title() ?></a>
            <div class="card__content-info">
                <div class="info__time"><i class="far fa-clock"></i>
                    <p><?php the_time('F j, Y');?></p>
                </div>
                <div class="info__comment"><i class="far fa-comment"></i>
                    <p>3</p>
                </div>
            </div>
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->