<?php

/* =============================================
 #	 Generate shortcode.
 # --------------------------------------------- */

function timeline_display($atts,$content=null) {

	/* ======================================
	#	 Setup variables
	# -------------------------------------- */

 /* -------------------
  * Get data from settings page */

	$timelineArr = array(
		'2011' => array(
			'title' => '2011',
			'story1' 			=> esc_attr( get_option('timeline_2011_title1') ),
			'story1_text' => esc_attr( get_option('timeline_2011_text1') ),
			'story2' 			=> esc_attr( get_option('timeline_2011_title2') ),
			'story2_text' => esc_attr( get_option('timeline_2011_text2') )
		),
		'2012' => array(
			'title' => '2012',
			'story1' 			=> esc_attr( get_option('timeline_2012_title1') ),
			'story1_text' => esc_attr( get_option('timeline_2012_text1') ),
			'story2' 			=> esc_attr( get_option('timeline_2012_title2') ),
			'story2_text' => esc_attr( get_option('timeline_2012_text2') )
		),
		'2013' => array(
			'title' => '2013',
			'story1' 			=> esc_attr( get_option('timeline_2013_title1') ),
			'story1_text' => esc_attr( get_option('timeline_2013_text1') ),
			'story2' 			=> esc_attr( get_option('timeline_2013_title2') ),
			'story2_text' => esc_attr( get_option('timeline_2013_text2') )
		),
		'2014' => array(
			'title' => '2014',
			'story1' 			=> esc_attr( get_option('timeline_2014_title1') ),
			'story1_text' => esc_attr( get_option('timeline_2014_text1') ),
			'story2' 			=> esc_attr( get_option('timeline_2014_title2') ),
			'story2_text' => esc_attr( get_option('timeline_2014_text2') )
		),
		'2015' => array(
			'title' => '2015',
			'story1' 			=> esc_attr( get_option('timeline_2015_title1') ),
			'story1_text' => esc_attr( get_option('timeline_2015_text1') ),
			'story2' 			=> esc_attr( get_option('timeline_2015_title2') ),
			'story2_text' => esc_attr( get_option('timeline_2015_text2') )
		),
		'2016' => array(
			'title' => '2016',
			'story1' 			=> esc_attr( get_option('timeline_2016_title1') ),
			'story1_text' => esc_attr( get_option('timeline_2016_text1') ),
			'story2' 			=> esc_attr( get_option('timeline_2016_title2') ),
			'story2_text' => esc_attr( get_option('timeline_2016_text2') )
		),
		'2017' => array(
			'title' => '2017',
			'story1' 			=> esc_attr( get_option('timeline_2017_title1') ),
			'story1_text' => esc_attr( get_option('timeline_2017_text1') ),
			'story2' 			=> esc_attr( get_option('timeline_2017_title2') ),
			'story2_text' => esc_attr( get_option('timeline_2017_text2') )
		),
		'2018' => array(
			'title' => '2018',
			'story1' 			=> esc_attr( get_option('timeline_2018_title1') ),
			'story1_text' => esc_attr( get_option('timeline_2018_text1') ),
			'story2' 			=> esc_attr( get_option('timeline_2018_title2') ),
			'story2_text' => esc_attr( get_option('timeline_2018_text2') )
		),
		'2019' => array(
			'title' => '2019',
			'story1' 			=> esc_attr( get_option('timeline_2019_title1') ),
			'story1_text' => esc_attr( get_option('timeline_2019_text1') ),
			'story2' 			=> esc_attr( get_option('timeline_2019_title2') ),
			'story2_text' => esc_attr( get_option('timeline_2019_text2') )
		)
	);

	// loop through years
	$output ='';
	$nav ='';
	$keys = array_keys( $timelineArr );
	for($i = 0; $i <= count($keys)-1; $i++){

		$item = $timelineArr[$keys[$i]];

		// Turn line breaks into list
		// $milestones = explode("\n", $item['milestones']);
		// $milestonesList = '';
		// foreach($milestones as $milestone){
		// 	if(!empty($milestone)){
		// 		$milestonesList.= "<li>".$milestone."</li>";
		// 	}
		// }

		// Build nav with years
		$nav.= "<a href='javascript:void(0);' class='timeline__nav-item' data-nav-id='".$i."'>".$item['title']."</a>";
		// Build year content slides
		$output.=
			"
			<div class='timeline__slide timeline__slide--inactive' data-slide-id='".$i."'>
				<div class='timeline__slide-image'>
					<h4 class='timeline__slide-year'>".$item['title']."</h4>
				</div>
				<div class='timeline__slide__content'>
					<div class='row'>
						<div class='timeline__slide-col col col--6'>
							<h5 class='timeline__slide-title'>".$item['story1']."</h5>
							<div class='timeline__slide-text'><p>".$item['story1_text']."</p></div>
						</div>
						<div class='timeline__slide-col col col--6'>
							<h5 class='timeline__slide-title'>".$item['story2']."</h5>
							<div class='timeline__slide-text'><p>".$item['story2_text']."</p></div>
						</div>
					</div>
				</div>
			</div>
		";

	} // end loop creating slides

	// ===================
	// Wrap slides in section
	$timeline = "
		<div class='timeline' id='timeline'>
			<div class='timeline__nav'>
				".$nav."
			</div>
			".$output."
		</div>
	";

	// ===================
	// Return full section
	return $timeline;

}
