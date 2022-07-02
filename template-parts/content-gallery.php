<?php
$cows = [
	[
		'token'   => 'Blue-08',
		'type'    => 'দেশাল',
		'weight'  => '২৯৬ কেজি',
		'date'    => '১৫ জুন ২০২২',
		'contact' => '০১৭৫৫৫৪৮৪৪৪'

	],
	[
		'token'   => 'ইয়েলো-০৪',
		'type'    => 'শাহীওয়াল',
		'weight'  => '৩৪০ কেজি',
		'date'    => '১৫ জুন ২০২২',
		'contact' => '০১৭৫৫৫৪৮৪৪৪'

	],
	[
		'token'   => 'ইয়েলো-০৬',
		'type'    => 'শাহীওয়াল',
		'weight'  => '৩২০ কেজি',
		'date'    => '১৫ জুন ২০২২',
		'contact' => '০১৭৫৫৫৪৮৪৪৪'

	],
	[
		'token'   => 'ব্লু-০২',
		'type'    => 'ফ্রিজিয়ান ক্রস',
		'weight'  => '৩২৫ কেজি',
		'date'    => '১৫ জুন ২০২২',
		'contact' => '০১৭৫৫৫৪৮৪৪৪'

	],
	[
		'token'   => 'ওয়াই-১২',
		'type'    => 'ফ্রিজিয়ান ক্রস',
		'weight'  => '৩৭২ কেজি',
		'date'    => '০১ জুলাই ২০২২',
		'contact' => '০১৭৫৫৫৪৮৪৪৪'

	],
	[
		'token'   => 'ব্লু-২০',
		'type'    => 'ফ্রিজিয়ান ক্রস',
		'weight'  => '৩৪০ কেজি',
		'date'    => '০১ জুলাই ২০২২',
		'contact' => '০১৭৫৫৫৪৮৪৪৪'

	],
	[
		'token'   => 'ওয়াই-০৩',
		'type'    => 'ফ্রিজিয়ান ক্রস',
		'weight'  => '৩০৪ কেজি',
		'date'    => '০১ জুলাই ২০২২',
		'contact' => '০১৭৫৫৫৪৮৪৪৪'

	],
	[
		'token'   => 'ওয়াই-০২',
		'type'    => 'ফ্রিজিয়ান ক্রস',
		'weight'  => '২৮০ কেজি',
		'date'    => '০১ জুলাই ২০২২',
		'contact' => '০১৭৫৫৫৪৮৪৪৪'

	],
	[
		'token'   => 'বি-২০',
		'type'    => 'ফ্রিজিয়ান ক্রস',
		'weight'  => '৩৪০ কেজি',
		'date'    => '০১ জুলাই ২০২২',
		'contact' => '০১৭৫৫৫৪৮৪৪৪'

	]
];
?>
<!-- gallery -->
<div class="gallery">
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
