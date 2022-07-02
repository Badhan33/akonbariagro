<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'akonbariagro' ); ?>>
<div class="top-nav">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

				<?php
				wp_nav_menu( array(
					'menu_id'         => 'primary',
					'container'       => 'nav',
					'container_class' => 'menu menu--shylock',
                    'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav link-effect-7">%3$s</ul>'
				) );
				?>
                <a class="btn btn-warning cta-btn" href="tel:+8801755548444"><i class="fa fa-phone"></i>&nbsp;&nbsp;Call Us at: 01755548444</a>
                <a class="shop-link cta-btn" href="<?php echo site_url(); ?>/shop">Shop</a>
			</div>
		</nav>
	</div>
</div>