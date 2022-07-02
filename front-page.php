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

    <!-- features -->
    <div class="features">
        <div class="container">
            <h3 class="head"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>Special Features</h3>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab"
                                                              aria-controls="home" aria-expanded="true">Feature-1</a>
                    </li>
                    <li role="presentation"><a href="#Feature1" role="tab" id="Feature1-tab" data-toggle="tab"
                                               aria-controls="Feature1">Feature-2</a></li>
                    <li role="presentation"><a href="#Feature2" role="tab" id="Feature2-tab" data-toggle="tab"
                                               aria-controls="Feature2">Feature-3</a></li>
                    <li role="presentation"><a href="#Feature3" role="tab" id="Feature3-tab" data-toggle="tab"
                                               aria-controls="Feature3">Feature-4</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="w3agile_tabs">
                            <div class="col-md-7 w3agile_tab_left">
                                <h4>suscipit sapien nec interdum sollicitudin</h4>
                                <p>Nunc faucibus lorem a arcu gravida, eget auctor eros
                                    ultrices. Vestibulum non erat ut odio euismod accumsan.
                                    Phasellus libero tellus, pulvinar vitae sem sit amet,
                                    faucibus consectetur neque.</p>
                                <ul>
                                    <li>pulvinar vitae sem sit amet</li>
                                    <li>faucibus consectetur neque</li>
                                    <li>erat odio euismod accumsan</li>
                                    <li>sapien nec interdum euismod</li>
                                    <li>Phasellus libero tellus sem</li>
                                    <li>gravida eget auctor eros</li>
                                </ul>
                            </div>
                            <div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
                                <img src="<?php echo AKONBARIAGRO_ASSETS_URI; ?>/images/7.jpg" alt=" " class="img-responsive"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Feature1" aria-labelledby="Feature1-tab">
                        <div class="w3agile_tabs">
                            <div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
                                <img src="<?php echo AKONBARIAGRO_ASSETS_URI; ?>/images/8.jpg" alt=" " class="img-responsive"/>
                            </div>
                            <div class="col-md-7 w3agile_tab_left">
                                <h4>pulvinar vitae sem sit amet non erat ut</h4>
                                <p>Nunc faucibus lorem a arcu gravida, eget auctor eros
                                    ultrices. Vestibulum non erat ut odio euismod accumsan.
                                    Phasellus libero tellus, pulvinar vitae sem sit amet,
                                    faucibus consectetur neque.</p>
                                <ul>
                                    <li>pulvinar vitae sem sit amet</li>
                                    <li>faucibus consectetur neque</li>
                                    <li>erat odio euismod accumsan</li>
                                    <li>sapien nec interdum euismod</li>
                                    <li>Phasellus libero tellus sem</li>
                                    <li>gravida eget auctor eros</li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Feature2" aria-labelledby="Feature2-tab">
                        <div class="w3agile_tabs">
                            <div class="col-md-7 w3agile_tab_left">
                                <h4>faucibus consectetur neque sollicitudin</h4>
                                <p>Nunc faucibus lorem a arcu gravida, eget auctor eros
                                    ultrices. Vestibulum non erat ut odio euismod accumsan.
                                    Phasellus libero tellus, pulvinar vitae sem sit amet,
                                    faucibus consectetur neque.</p>
                                <ul>
                                    <li>pulvinar vitae sem sit amet</li>
                                    <li>faucibus consectetur neque</li>
                                    <li>erat odio euismod accumsan</li>
                                    <li>sapien nec interdum euismod</li>
                                    <li>Phasellus libero tellus sem</li>
                                    <li>gravida eget auctor eros</li>
                                </ul>
                            </div>
                            <div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
                                <img src="<?php echo AKONBARIAGRO_ASSETS_URI; ?>/images/9.jpg" alt=" " class="img-responsive"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Feature3" aria-labelledby="Feature3-tab">
                        <div class="w3agile_tabs">
                            <div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
                                <img src="<?php echo AKONBARIAGRO_ASSETS_URI; ?>/images/10.jpg" alt=" " class="img-responsive"/>
                            </div>
                            <div class="col-md-7 w3agile_tab_left">
                                <h4>gravida eget auctor eros libero tellus</h4>
                                <p>Nunc faucibus lorem a arcu gravida, eget auctor eros
                                    ultrices. Vestibulum non erat ut odio euismod accumsan.
                                    Phasellus libero tellus, pulvinar vitae sem sit amet,
                                    faucibus consectetur neque.</p>
                                <ul>
                                    <li>pulvinar vitae sem sit amet</li>
                                    <li>faucibus consectetur neque</li>
                                    <li>erat odio euismod accumsan</li>
                                    <li>sapien nec interdum euismod</li>
                                    <li>Phasellus libero tellus sem</li>
                                    <li>gravida eget auctor eros</li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //features -->

<?php
get_footer();
