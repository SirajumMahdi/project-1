<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TukiOne
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <div class="no-pd top-pd" id="content">
            <div class="container">
                <div class="error-404">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="error-404__content">
                                <h2>404 Not Found</h2>
                                <p>It looks like nothing was found at this location.</p>
                                <a class="btn" href="<?php echo site_url() ?>">Go back to home</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="error-404__image"><img
                                    src="http://localhost/project-1/wp-content/uploads/2022/01/404.png"
                                    alt="404 error image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();