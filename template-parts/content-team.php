<?php
$members = [
	[
		'image'    => 'monju.jpeg',
		'name'     => 'মঞ্জু',
		'position' => 'পরিচালক, অপারেশনস এন্ড ফিনান্স'
	],
	[
		'image'    => 'ahad.jpeg',
		'name'     => 'আহাদ',
		'position' => 'পরিচালক, খামার ব্যবস্থাপনা এবং ক্রয়'
	],
	[
		'image'    => 'amjad.jpeg',
		'name'     => 'আমজাদ',
		'position' => 'উপদেষ্টা'
	],
	[
		'image'    => 'mahbub.jpeg',
		'name'     => 'মাহবুব',
		'position' => 'হেড অফ প্ল্যানিং'
	],
];
?>

<!-- team -->
<div class="team" id="team">
	<div class="container">
		<h3 class="head"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Our Team</h3>
		<div class="agile_team_grids">
            <?php foreach ( $members as $member ) { ?>
			<div class="col-md-3 agile_team_grid">
				<div class="agile_team_grid1 teams-photos">
					<img src="<?php echo AKONBARIAGRO_ASSETS_URI . '/images/team/' . $member['image']; ?>" alt="<?php echo $member['name'] . ', ' . $member['position'] ?>" class="img-responsive" />
				</div>
				<h4><?php echo $member['name']; ?></h4>
				<p><?php echo $member['position']; ?></p>
			</div>
            <?php } ?>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //team -->