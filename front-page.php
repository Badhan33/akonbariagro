<?php
/**
 * Front Page
 */

get_header();
?>

    <!-- banner -->
    <div class="banner">
        <div class="container">
            <div class="w3ls_logo">
				<?php echo sprintf( '<h1><a href="%s">%s</a></h1>', site_url(), get_bloginfo( 'title' ) ); ?>
            </div>
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="w3l_banner_info">
                                <h3>PURITY IS OUR PRIORITY</h3>
                            </div>
                        </li>
                        <li>
                            <div class="w3l_banner_info">
                                <h3>We have the best cattle in our farm</h3>
                            </div>
                        </li>
                        <li>
                            <div class="w3l_banner_info">
                                <h3>With great care and supervision, they are brought up to be the finest. Have a look!</h3>
                            </div>
                        </li>
                        <li>
                            <div class="w3l_banner_info">
                                <h3>We're just one call away!</h3>
                            </div>
                        </li>
                        <li>
                            <div class="w3l_banner_info">
                                <h3>Vestibulum non erat ut odio euismod accumsan. Phasellus libero tellus.</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- //banner -->
    <?php get_template_part( 'template-parts/content', 'about' ) ?>
    <?php get_template_part( 'template-parts/content', 'gallery' ) ?>
    <?php get_template_part( 'template-parts/content', 'team' ) ?>

<?php
get_footer();
