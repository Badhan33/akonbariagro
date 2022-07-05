<?php
$products = get_field( 'products_showcase', get_the_ID() );
if ( ! empty( $products ) ) { ?>

    <!-- gallery -->
    <div class="gallery" id="products">
        <h3 class="head"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Our Cattle</h3>
        <br>
        <div class="container">
            <div class="row">
				<?php foreach ( $products as $key => $product ) {
					$i     = $key + 1;
					$count = count( $product['products']['images'] );
					?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div id="carousel-cows-<?php echo $key; ?>" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
									<?php foreach ( $product['products']['images'] as $newkey => $cattle ) { ?>
                                        <div class="item<?php echo 0 == $newkey ? ' active' : ''; ?>">
                                            <img src="<?php echo wp_get_attachment_url( $cattle ); ?>"
                                                 alt="<?php echo $product['products']['token']; ?>">
                                        </div>
									<?php } ?>
                                </div>
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
									<?php for ( $c = 0; $c < $count; $c ++ ) { ?>
                                        <li data-target="#carousel-cows-<?php echo $key; ?>"
                                            data-slide-to="<?php echo $c; ?>"
                                            class="<?php echo 0 == $c ? 'active' : ''; ?>"></li>
									<?php } ?>
                                </ul>
                            </div>
                            <div class="caption">
                                <h3>টোকেন নম্বর: <?php echo $product['products']['token']; ?></h3>
                                <p>জাতঃ <?php echo $product['products']['type']; ?></p>
                                <p>ওজনঃ <?php echo $product['products']['weight']; ?></p>
                                <p>মূল্য <?php echo $product['products']['price']; ?></p>
                                <p>ওজন নেয়ার তারিখঃ <?php echo $product['products']['date']; ?></p>
                                <p>যোগাযোগের নম্বরঃ <?php echo $product['products']['contact']; ?></p>
                            </div>
                        </div>
                    </div>
				<?php } ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- gallery -->
<?php } else {
	$cows = [
		[
			'token'   => 'Blue-08',
			'type'    => 'দেশাল',
			'weight'  => '২৯৬ কেজি',
			'price'   => '২৯৬ × ৳৪৬০ = ৳১,৩৬,১৬০',
			'date'    => '১৫ জুন ২০২২',
			'contact' => '০১৮৮৬১৪৮৪৪৪'

		],
		[
			'token'   => 'ইয়েলো-০৪',
			'type'    => 'শাহীওয়াল',
			'weight'  => '৩৪০ কেজি',
			'price'   => '৩৪০ × ৳৪৬০ = ৳১,৫৬,৪০০',
			'date'    => '১৫ জুন ২০২২',
			'contact' => '০১৮৮৬১৪৮৪৪৪'

		],
		[
			'token'   => 'ইয়েলো-০৬',
			'type'    => 'শাহীওয়াল',
			'weight'  => '৩২০ কেজি',
			'price'   => '৩২০ × ৳৪৬০ = ৳১,৪৭,২০০',
			'date'    => '১৫ জুন ২০২২',
			'contact' => '০১৮৮৬১৪৮৪৪৪'

		],
		[
			'token'   => 'ব্লু-০২',
			'type'    => 'ফ্রিজিয়ান ক্রস',
			'weight'  => '৩২৫ কেজি',
			'price'   => '৩২৫ × ৳৪৬০ = ৳১,৪৯,৫০০',
			'date'    => '১৫ জুন ২০২২',
			'contact' => '০১৮৮৬১৪৮৪৪৪'

		],
		[
			'token'   => 'ওয়াই-১২',
			'type'    => 'ফ্রিজিয়ান ক্রস',
			'weight'  => '৩৭২ কেজি',
			'price'   => '৩৭২ × ৳৪৬০ = ৳১,৭১,১২০',
			'date'    => '০১ জুলাই ২০২২',
			'contact' => '০১৮৮৬১৪৮৪৪৪'

		],
		[
			'token'   => 'ব্লু-২০',
			'type'    => 'ফ্রিজিয়ান ক্রস',
			'weight'  => '৩৪০ কেজি',
			'price'   => '৩৪০ × ৳৪৬০ = ৳১,৫৬,৪০০',
			'date'    => '০১ জুলাই ২০২২',
			'contact' => '০১৮৮৬১৪৮৪৪৪'

		],
		[
			'token'   => 'ওয়াই-০৩',
			'type'    => 'ফ্রিজিয়ান ক্রস',
			'weight'  => '৩০৪ কেজি',
			'price'   => '৩০৪ × ৳৪৬০ = ৳১,৩৯,৮৪০',
			'date'    => '০১ জুলাই ২০২২',
			'contact' => '০১৮৮৬১৪৮৪৪৪'

		],
		[
			'token'   => 'ওয়াই-০২',
			'type'    => 'ফ্রিজিয়ান ক্রস',
			'weight'  => '২৮০ কেজি',
			'price'   => '২৮০ × ৳৪৬০ = ৳১,২৮,৮০০',
			'date'    => '০১ জুলাই ২০২২',
			'contact' => '০১৮৮৬১৪৮৪৪৪'

		],
		[
			'token'   => 'বি-২০',
			'type'    => 'ফ্রিজিয়ান ক্রস',
			'weight'  => '৩৪০ কেজি',
			'price'   => '৩৪০ × ৳৪৬০ = ৳১,৫৬,৪০০',
			'date'    => '০১ জুলাই ২০২২',
			'contact' => '০১৮৮৬১৪৮৪৪৪'

		],
		[
			'token'   => 'বি-১৮',
			'type'    => 'দেশাল',
			'weight'  => '২৪৫ কেজি',
			'price'   => '২৪৫ × ৳৪৬০ = ৳১,১২,৭০০',
			'date'    => '০১ জুলাই ২০২২',
			'contact' => '০১৮৮৬১৪৮৪৪৪'

		]
	];
	?>
    <!-- gallery -->
    <div class="gallery" id="products">
        <h3 class="head"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Our Cattle</h3>
        <br>
        <div class="container">
            <div class="row">
				<?php foreach ( $cows as $key => $cow ) {
					$i = $key + 1;
					?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div id="carousel-cows-<?php echo $key; ?>" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
									<?php for ( $j = 1; $j <= 3; $j ++ ) { ?>
                                        <div class="item<?php echo 1 == $j ? ' active' : ''; ?>">
                                            <img src="<?php echo AKONBARIAGRO_ASSETS_URI . '/images/products/' . $i . '.' . $j . '.jpeg'; ?>"
                                                 alt="<?php echo $cow['token']; ?>">
                                        </div>
									<?php } ?>
                                </div>
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#carousel-cows-<?php echo $key; ?>" data-slide-to="0"
                                        class="active"></li>
                                    <li data-target="#carousel-cows-<?php echo $key; ?>" data-slide-to="1"></li>
                                    <li data-target="#carousel-cows-<?php echo $key; ?>" data-slide-to="2"></li>
                                </ul>
                            </div>
                            <div class="caption">
                                <h3>টোকেন নম্বর: <?php echo $cow['token']; ?></h3>
                                <p>জাতঃ <?php echo $cow['type']; ?></p>
                                <p>ওজনঃ <?php echo $cow['weight']; ?></p>
                                <p>মূল্য <?php echo $cow['price']; ?></p>
                                <p>ওজন নেয়ার তারিখঃ <?php echo $cow['date']; ?></p>
                                <p>যোগাযোগের নম্বরঃ <?php echo $cow['contact']; ?></p>
                            </div>
                        </div>
                    </div>
				<?php } ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- gallery -->
	<?php
}