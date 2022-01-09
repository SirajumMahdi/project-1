<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TukiOne
 */

?>

<footer>
    <div class="container">
        <div class="footer-content">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <?php 
                        if(is_active_sidebar('footer-1')) {
                            dynamic_sidebar('footer-1');
                        }
                    ?>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <?php 
                        if(is_active_sidebar('footer-2')) {
                            dynamic_sidebar('footer-2');
                        }
                    ?>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="footer-col -util">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12">
                                <?php 
                                    if(is_active_sidebar('footer-3')) {
                                         dynamic_sidebar('footer-3');
                                    }
                                ?>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12">
                                <?php 
                                    if(is_active_sidebar('footer-4')) {
                                         dynamic_sidebar('footer-4');
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>© <?php echo do_shortcode("[year]") ?>, <?php bloginfo('title')?> - <?php bloginfo('description')?>.
                All rights reserved.</p>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>