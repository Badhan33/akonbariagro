<?php
$banners = get_field( 'banner_slider', get_the_ID() );

if ( ! empty( $banners ) ) {
	?>

    <!-- banner -->
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
				<?php foreach ( $banners as $banner_id ) {
					$banner = wp_get_attachment_url( $banner_id );
					?>
                    <li>
                        <div class="banner" style="background-image: url('<?php echo $banner; ?>')">
                            <div class="container">
                                <div class="row w3ls_logo">
                                    <div class="col-md-3 col-sm-5">
										<?php echo sprintf( '<h1><a href="%s">%s</a></h1>', site_url(), get_bloginfo( 'title' ) ); ?>
                                    </div>
                                    <div class="col-md-offset-4 col-md-5 col-sm-offset-2 col-sm-5">
                                        <h1 style="margin-top: 50px;">Purity is our priority</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
				<?php } ?>
            </ul>
        </div>
    </section>
<?php } else { ?>

    <!-- banner -->
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
				<?php for ( $i = 1; $i <= 5; $i ++ ) {
					$banner = AKONBARIAGRO_ASSETS_URI . '/images/banners/banner-' . $i . '.jpeg';
					?>
                    <li>
                        <div class="banner" style="background-image: url('<?php echo $banner; ?>')">
                            <div class="container">
                                <div class="row w3ls_logo">
                                    <div class="col-md-3 col-sm-5">
										<?php echo sprintf( '<h1><a href="%s">%s</a></h1>', site_url(), get_bloginfo( 'title' ) ); ?>
                                    </div>
                                    <div class="col-md-offset-4 col-md-5 col-sm-offset-2 col-sm-5">
                                        <h1 style="margin-top: 50px;">Purity is our priority</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
				<?php } ?>
            </ul>
        </div>
    </section>

<?php } ?>