<?php
$team_members = get_field( 'team_members', get_the_ID() );
if ( ! empty( $team_members ) ) {
	foreach ( $team_members as $team_member ) {
		$person = $team_member['member'];
		?>
        <!-- team -->
        <div class="team" id="team">
            <div class="container">
                <h3 class="head"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Our Team</h3>
                <div class="agile_team_grids">
                    <div class="col-md-2 agile_team_grid">
                        <div class="agile_team_grid1 teams-photos">
                            <img src="<?php echo wp_get_attachment_url( $person['photo'] ); ?>"
                                 alt="<?php echo $person['name'] . ', ' . $person['designation'] ?>"
                                 class="img-responsive img-rounded img-thumbnail"/>
                        </div>
                        <h4><?php echo $person['name']; ?></h4>
                        <p><?php echo $person['designation']; ?></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //team -->
	<?php }
} else {
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
			'image'    => 'amzad.jpeg',
			'name'     => 'আমজাদ',
			'position' => 'উপদেষ্টা'
		],
		[
			'image'    => 'mahbub.jpeg',
			'name'     => 'মাহবুব',
			'position' => 'হেড অফ প্ল্যানিং'
		],
		[
			'image'    => 'borson.jpeg',
			'name'     => 'বর্ষন',
			'position' => 'বিক্রয় এবং খামার পরিচালনা'
		]
	];
	?>

    <!-- team -->
    <div class="team" id="team">
        <div class="container">
            <h3 class="head"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Our Team</h3>
            <div class="agile_team_grids">
                <div class="col-md-1"></div>
				<?php foreach ( $members as $member ) { ?>
                    <div class="col-md-2 agile_team_grid">
                        <div class="agile_team_grid1 teams-photos">
                            <img src="<?php echo AKONBARIAGRO_ASSETS_URI . '/images/team/' . $member['image']; ?>"
                                 alt="<?php echo $member['name'] . ', ' . $member['position'] ?>"
                                 class="img-responsive img-rounded img-thumbnail"/>
                        </div>
                        <h4><?php echo $member['name']; ?></h4>
                        <p><?php echo $member['position']; ?></p>
                    </div>
				<?php } ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //team -->
	<?php
}