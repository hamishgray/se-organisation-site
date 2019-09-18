<?php

/* =============================================
 #	 Options page for site admin
 # --------------------------------------------- */

//on-load, sets up the following settings for the plugin
add_action( 'admin_init', 'se_timeline_settings' );
function se_timeline_settings() {
	register_setting( 'se-timeline-settings-group', 'timeline_default_title' );

	register_setting( 'se-timeline-settings-group', 'timeline_2011_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2011_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2011_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2011_text2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2011_image' );

	register_setting( 'se-timeline-settings-group', 'timeline_2012_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2012_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2012_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2012_text2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2012_image' );

	register_setting( 'se-timeline-settings-group', 'timeline_2013_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2013_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2013_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2013_text2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2013_image' );

	register_setting( 'se-timeline-settings-group', 'timeline_2014_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2014_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2014_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2014_text2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2014_image' );

	register_setting( 'se-timeline-settings-group', 'timeline_2015_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2015_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2015_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2015_text2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2015_image' );

	register_setting( 'se-timeline-settings-group', 'timeline_2016_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2016_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2016_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2016_text2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2016_image' );

	register_setting( 'se-timeline-settings-group', 'timeline_2017_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2017_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2017_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2017_text2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2017_image' );

	register_setting( 'se-timeline-settings-group', 'timeline_2018_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2018_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2018_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2018_text2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2018_image' );

	register_setting( 'se-timeline-settings-group', 'timeline_2019_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2019_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2019_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2019_text2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2019_image' );
}

// displays the settings page
function se_timeline_display_settings() {
	//form to save api key and sheet settings
	echo "<form method=\"post\" action=\"options.php\">";
	settings_fields( 'se-timeline-settings-group' );
	do_settings_sections( 'se-timeline-settings-group' );
	// jQuery
	wp_enqueue_script('jquery');
	// This will enqueue the Media Uploader script
	wp_enqueue_media();

	// Plugin description and usage guide
	echo "
		<div style='max-width: 720px; padding-top:30px;'>
			<h1>Timeline builder</h1>
			<p>Build the Secret Escapes timeline to be displayed on the about page, using the following shortcode. </p>

			<p>
				<code>
					[timeline]
				</code>
			</p>

			<table id=\"gsheets-settings\" class=\"form-table\" aria-live=\"assertive\">



				<!--===================================================
				# 2011
				-->

				<tr>
					<td colspan='2' style='padding:5px 10px 5px 0px;'>
						<hr />
						<h2 style='margin-bottom:0;'>2011</h2>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2011_title1\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2011_title1') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2011_text1\" style='width:100%;' />".esc_attr( get_option('timeline_2011_text1') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
					<input type=\"text\" name=\"timeline_2011_title2\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2011_title2') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2011_text2\" style='width:100%;' />".esc_attr( get_option('timeline_2011_text2') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Image:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<label for='timeline_2011_image'>Image</label>
						<input type='text' name='timeline_2011_image' id='timeline_2011_image' class='regular-text'  value=\"".esc_attr( get_option('timeline_2011_image') )."\" />
						<input type='button' name='upload-btn' class='js-upload-btn button-secondary' value='Upload Image' data-image='timeline_2011_image'>
					</td>
				</tr>




				<!--===================================================
		 	  # 2012
				-->

				<tr>
					<td colspan='2' style='padding:5px 10px 5px 0px;'>
						<hr />
						<h2 style='margin-bottom:0;'>2012</h2>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2012_title1\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2012_title1') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2012_text1\" style='width:100%;' />".esc_attr( get_option('timeline_2012_text1') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
					<input type=\"text\" name=\"timeline_2012_title2\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2012_title2') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2012_text2\" style='width:100%;' />".esc_attr( get_option('timeline_2012_text2') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Image:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<label for='timeline_2012_image'>Image</label>
						<input type='text' name='timeline_2012_image' id='timeline_2012_image' class='regular-text'  value=\"".esc_attr( get_option('timeline_2012_image') )."\" />
						<input type='button' name='upload-btn' class='js-upload-btn button-secondary' value='Upload Image' data-image='timeline_2012_image'>
					</td>
				</tr>



				<!--===================================================
		 	  # 2013
				-->

				<tr>
					<td colspan='2' style='padding:5px 10px 5px 0px;'>
						<hr />
						<h2 style='margin-bottom:0;'>2013</h2>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2013_title1\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2013_title1') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2013_text1\" style='width:100%;' />".esc_attr( get_option('timeline_2013_text1') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
					<input type=\"text\" name=\"timeline_2013_title2\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2013_title2') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2013_text2\" style='width:100%;' />".esc_attr( get_option('timeline_2013_text2') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Image:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<label for='timeline_2013_image'>Image</label>
						<input type='text' name='timeline_2013_image' id='timeline_2013_image' class='regular-text'  value=\"".esc_attr( get_option('timeline_2013_image') )."\" />
						<input type='button' name='upload-btn' class='js-upload-btn button-secondary' value='Upload Image' data-image='timeline_2013_image'>
					</td>
				</tr>



				<!--===================================================
		 	  # 2014
				-->

				<tr>
					<td colspan='2' style='padding:5px 10px 5px 0px;'>
						<hr />
						<h2 style='margin-bottom:0;'>2014</h2>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2014_title1\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2014_title1') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2014_text1\" style='width:100%;' />".esc_attr( get_option('timeline_2014_text1') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2014_title2\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2014_title2') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2014_text2\" style='width:100%;' />".esc_attr( get_option('timeline_2014_text2') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Image:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<label for='timeline_2014_image'>Image</label>
						<input type='text' name='timeline_2014_image' id='timeline_2014_image' class='regular-text'  value=\"".esc_attr( get_option('timeline_2014_image') )."\" />
						<input type='button' name='upload-btn' class='js-upload-btn button-secondary' value='Upload Image' data-image='timeline_2014_image'>
					</td>
				</tr>



				<!--===================================================
		 	  # 2015
				-->

				<tr>
					<td colspan='2' style='padding:5px 10px 5px 0px;'>
						<hr />
						<h2 style='margin-bottom:0;'>2015</h2>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2015_title1\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2015_title1') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2015_text1\" style='width:100%;' />".esc_attr( get_option('timeline_2015_text1') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2015_title2\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2015_title2') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2015_text2\" style='width:100%;' />".esc_attr( get_option('timeline_2015_text2') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Image:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<label for='timeline_2015_image'>Image</label>
						<input type='text' name='timeline_2015_image' id='timeline_2015_image' class='regular-text'  value=\"".esc_attr( get_option('timeline_2015_image') )."\" />
						<input type='button' name='upload-btn' class='js-upload-btn button-secondary' value='Upload Image' data-image='timeline_2015_image'>
					</td>
				</tr>



				<!--===================================================
		 	  # 2016
				-->

				<tr>
					<td colspan='2' style='padding:5px 10px 5px 0px;'>
						<hr />
						<h2 style='margin-bottom:0;'>2016</h2>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2016_title1\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2016_title1') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2016_text1\" style='width:100%;' />".esc_attr( get_option('timeline_2016_text1') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2016_title2\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2016_title2') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2016_text2\" style='width:100%;' />".esc_attr( get_option('timeline_2016_text2') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Image:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<label for='timeline_2016_image'>Image</label>
						<input type='text' name='timeline_2016_image' id='timeline_2016_image' class='regular-text'  value=\"".esc_attr( get_option('timeline_2016_image') )."\" />
						<input type='button' name='upload-btn' class='js-upload-btn button-secondary' value='Upload Image' data-image='timeline_2016_image'>
					</td>
				</tr>



				<!--===================================================
		 	  # 2017
				-->

				<tr>
					<td colspan='2' style='padding:5px 10px 5px 0px;'>
						<hr />
						<h2 style='margin-bottom:0;'>2017</h2>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2017_title1\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2017_title1') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2017_text1\" style='width:100%;' />".esc_attr( get_option('timeline_2017_text1') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2017_title2\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2017_title2') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2017_text2\" style='width:100%;' />".esc_attr( get_option('timeline_2017_text2') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Image:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<label for='timeline_2017_image'>Image</label>
						<input type='text' name='timeline_2017_image' id='timeline_2017_image' class='regular-text'  value=\"".esc_attr( get_option('timeline_2017_image') )."\" />
						<input type='button' name='upload-btn' class='js-upload-btn button-secondary' value='Upload Image' data-image='timeline_2017_image'>
					</td>
				</tr>



				<!--===================================================
		 	  # 2018
				-->

				<tr>
					<td colspan='2' style='padding:5px 10px 5px 0px;'>
						<hr />
						<h2 style='margin-bottom:0;'>2018</h2>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2018_title1\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2018_title1') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2018_text1\" style='width:100%;' />".esc_attr( get_option('timeline_2018_text1') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2018_title2\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2018_title2') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2018_text2\" style='width:100%;' />".esc_attr( get_option('timeline_2018_text2') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Image:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<label for='timeline_2018_image'>Image</label>
						<input type='text' name='timeline_2018_image' id='timeline_2018_image' class='regular-text'  value=\"".esc_attr( get_option('timeline_2018_image') )."\" />
						<input type='button' name='upload-btn' class='js-upload-btn button-secondary' value='Upload Image' data-image='timeline_2018_image'>
					</td>
				</tr>



				<!--===================================================
		 	  # 2019
				-->

				<tr>
					<td colspan='2' style='padding:5px 10px 5px 0px;'>
						<hr />
						<h2 style='margin-bottom:0;'>2019</h2>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2019_title1\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2019_title1') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 1:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2019_text1\" style='width:100%;' />".esc_attr( get_option('timeline_2019_text1') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Headline 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<input type=\"text\" name=\"timeline_2019_title2\" style='width:100%;' value=\"".esc_attr( get_option('timeline_2019_title2') )."\" />
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Text content 2:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<textarea rows='4' type=\"text\" name=\"timeline_2019_text2\" style='width:100%;' />".esc_attr( get_option('timeline_2019_text2') )."</textarea>
					</td>
				</tr>

				<tr>
					<td style='padding:5px 10px 5px 0px;vertical-align:top;'><strong>Image:</strong></td>
			    <td style='padding:5px 10px 5px 0px;vertical-align:top;'>
						<label for='timeline_2019_image'>Image</label>
						<input type='text' name='timeline_2019_image' id='timeline_2019_image' class='regular-text'  value=\"".esc_attr( get_option('timeline_2019_image') )."\" />
						<input type='button' name='upload-btn' class='js-upload-btn button-secondary' value='Upload Image' data-image='timeline_2019_image'>
					</td>
				</tr>



				<!--===================================================
		 	  # IMAGE UPLOAD SCRIPT
				-->

				<script type='text/javascript'>
					jQuery(document).ready(function($){
				    $('.js-upload-btn').click(function(e) {
			        e.preventDefault();
							var imageId = $(this).data('image');
			        var image = wp.media({
		            title: 'Upload Image',
		            multiple: false
			        }).open()
			        .on('select', function(e){
		            var uploaded_image = image.state().get('selection').first();
		            var imageUploaded = uploaded_image.toJSON().url;
		            $( '#' + imageId ).val(imageUploaded);
			        });
				    });
					});
				</script>




			</table>
		</div>";

	submit_button();
	echo "</form>";
}

