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

	register_setting( 'se-timeline-settings-group', 'timeline_2012_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2012_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2012_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2012_text2' );

	register_setting( 'se-timeline-settings-group', 'timeline_2013_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2013_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2013_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2013_text2' );

	register_setting( 'se-timeline-settings-group', 'timeline_2014_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2014_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2014_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2014_text2' );

	register_setting( 'se-timeline-settings-group', 'timeline_2015_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2015_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2015_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2015_text2' );

	register_setting( 'se-timeline-settings-group', 'timeline_2016_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2016_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2016_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2016_text2' );

	register_setting( 'se-timeline-settings-group', 'timeline_2017_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2017_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2017_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2017_text2' );

	register_setting( 'se-timeline-settings-group', 'timeline_2018_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2018_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2018_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2018_text2' );

	register_setting( 'se-timeline-settings-group', 'timeline_2019_title1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2019_text1' );
	register_setting( 'se-timeline-settings-group', 'timeline_2019_title2' );
	register_setting( 'se-timeline-settings-group', 'timeline_2019_text2' );
}

// displays the settings page
function se_timeline_display_settings() {
	//form to save api key and sheet settings
	echo "<form method=\"post\" action=\"options.php\">";
	settings_fields( 'se-timeline-settings-group' );
	do_settings_sections( 'se-timeline-settings-group' );

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




			</table>
		</div>";

	submit_button();
	echo "</form>";
}

