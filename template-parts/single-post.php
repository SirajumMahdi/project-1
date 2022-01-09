<?php
/**
 * Template part for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TukiOne
 */

?>

<div class="post">
    <div class="container">
        <div class="post-standard">
            <div class="post-standard__banner">
                <div class="post-standard__banner__image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="post-standard__banner__content">
                    <div class="post-card -center">
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
                                <a href="<?php echo $category_link ?>">
                                    <?php echo $category_name; ?>
                                </a>
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
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <div class="post-standard__content">
                        <div id="post-share">
                            <h5>Share:</h5>
                            <div class="social-media">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>"
                                    style="background-color: #075ec8" title="Share on Facebook" target="_blank"><i
                                        class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>"
                                    title="Tweet this" target="_blank" style="background-color: #40c4ff"><i
                                        class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                        <?php the_content() ?>
                        <div class="post-footer">
                            <div class="post-footer__tags center">
                                <?php
                                    $tags = get_tags();
                                    $html = '<div class="tags-group">';
                                        foreach ( $tags as $tag ) {
                                            $tag_link = get_tag_link( $tag->term_id );                                
                                            $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} tag-btn'>";
                                            $html .= "{$tag->name}</a>";
                                        }
                                    $html .= '</div>';
                                        echo $html;
                                ?>
                            </div>
                            <div class="post-footer__author">
                                <div class="author__avatar">
                                    <?php 
                                        $author_id=$post->post_author; 
                                        if($avatar = get_avatar($author_id)): 
                                            echo $avatar; 
                                        endif; 
                                    ?>
                                </div>
                                <div class="author__info">
                                    <h5><?php the_author_meta( 'display_name' , $author_id ); ?></h5>
                                    <p><?php the_author_meta('description', $author_id); ?> </p>
                                    <div class="social-media">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>