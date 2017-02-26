<?php
// Begin plugin function
function bphelp_private_community_for_bp_lite(){
 global $bp;
 
 
 // Unblocked public pages. 
 $bphelp_my_unblocked_page_1   = get_option( 'bphelp-unblocked-page-one'       ); 
 $bphelp_my_unblocked_page_2   = get_option( 'bphelp-unblocked-page-two'       );
 $bphelp_my_unblocked_page_3   = get_option( 'bphelp-unblocked-page-three'     );
 $bphelp_my_unblocked_page_4   = get_option( 'bphelp-unblocked-page-four'      );
 $bphelp_my_unblocked_page_5   = get_option( 'bphelp-unblocked-page-five'      );
 $bphelp_my_unblocked_page_6   = get_option( 'bphelp-unblocked-page-six'       );
 $bphelp_my_unblocked_page_7   = get_option( 'bphelp-unblocked-page-seven'     );
 $bphelp_my_unblocked_page_8   = get_option( 'bphelp-unblocked-page-eight'     );
 $bphelp_my_unblocked_page_9   = get_option( 'bphelp-unblocked-page-nine'      );
 $bphelp_my_unblocked_page_10  = get_option( 'bphelp-unblocked-page-ten'       );
 $bphelp_my_unblocked_page_11  = get_option( 'bphelp-unblocked-page-eleven'    ); 
 $bphelp_my_unblocked_page_12  = get_option( 'bphelp-unblocked-page-twelve'    );
 $bphelp_my_unblocked_page_13  = get_option( 'bphelp-unblocked-page-thirteen'  );
 $bphelp_my_unblocked_page_14  = get_option( 'bphelp-unblocked-page-fourteen'  );
 $bphelp_my_unblocked_page_15  = get_option( 'bphelp-unblocked-page-fifteen'   );
 $bphelp_my_unblocked_page_16  = get_option( 'bphelp-unblocked-page-sixteen'   );
 $bphelp_my_unblocked_page_17  = get_option( 'bphelp-unblocked-page-seventeen' );
 $bphelp_my_unblocked_page_18  = get_option( 'bphelp-unblocked-page-eighteen'  );
 $bphelp_my_unblocked_page_19  = get_option( 'bphelp-unblocked-page-nineteen'  );
 $bphelp_my_unblocked_page_20  = get_option( 'bphelp-unblocked-page-twenty'    );
  
  
 //IMPORTANT: Do not alter the following line. 
 $bphelp_if_I_changed_my_register_slug = get_option( 'bphelp-my-register-slug', 'register' );
 
 
 
 
 // DO NOT ALTER THE CODE BELOW THIS LINE UNLESS YOU KNOW WHAT YOU ARE DOING 
 if ( !is_user_logged_in()  
      && (is_single ( array(
	        $bphelp_my_unblocked_page_1, 
		$bphelp_my_unblocked_page_2,
		$bphelp_my_unblocked_page_3,
		$bphelp_my_unblocked_page_4,
		$bphelp_my_unblocked_page_5,
		$bphelp_my_unblocked_page_6,
		$bphelp_my_unblocked_page_7,
		$bphelp_my_unblocked_page_8,
		$bphelp_my_unblocked_page_9,
		$bphelp_my_unblocked_page_10,
		$bphelp_my_unblocked_page_11, 
		$bphelp_my_unblocked_page_12,
		$bphelp_my_unblocked_page_13,
		$bphelp_my_unblocked_page_14,
		$bphelp_my_unblocked_page_15,
		$bphelp_my_unblocked_page_16,
		$bphelp_my_unblocked_page_17,
		$bphelp_my_unblocked_page_18,
		$bphelp_my_unblocked_page_19,
		$bphelp_my_unblocked_page_20 
		) )
	|| is_page   ( array( 
		$bphelp_my_unblocked_page_1, 
		$bphelp_my_unblocked_page_2,
		$bphelp_my_unblocked_page_3,
		$bphelp_my_unblocked_page_4,
		$bphelp_my_unblocked_page_5,
		$bphelp_my_unblocked_page_6,
		$bphelp_my_unblocked_page_7,
		$bphelp_my_unblocked_page_8,
		$bphelp_my_unblocked_page_9,
		$bphelp_my_unblocked_page_10,
		$bphelp_my_unblocked_page_11, 
		$bphelp_my_unblocked_page_12,
		$bphelp_my_unblocked_page_13,
		$bphelp_my_unblocked_page_14,
		$bphelp_my_unblocked_page_15,
		$bphelp_my_unblocked_page_16,
		$bphelp_my_unblocked_page_17,
		$bphelp_my_unblocked_page_18,
		$bphelp_my_unblocked_page_19,
		$bphelp_my_unblocked_page_20
		) )

	|| is_category   ( array( 
		$bphelp_my_unblocked_page_1, 
		$bphelp_my_unblocked_page_2,
		$bphelp_my_unblocked_page_3,
		$bphelp_my_unblocked_page_4,
		$bphelp_my_unblocked_page_5,
		$bphelp_my_unblocked_page_6,
		$bphelp_my_unblocked_page_7,
		$bphelp_my_unblocked_page_8,
		$bphelp_my_unblocked_page_9,
		$bphelp_my_unblocked_page_10,
		$bphelp_my_unblocked_page_11, 
		$bphelp_my_unblocked_page_12,
		$bphelp_my_unblocked_page_13,
		$bphelp_my_unblocked_page_14,
		$bphelp_my_unblocked_page_15,
		$bphelp_my_unblocked_page_16,
		$bphelp_my_unblocked_page_17,
		$bphelp_my_unblocked_page_18,
		$bphelp_my_unblocked_page_19,
		$bphelp_my_unblocked_page_20
			      ) )

	  /* Blocks profile pages */
|| bp_is_user_profile()

	  /* Blocks forum home pages */
	  || bbp_is_single_forum()

	  /* Blocks forum directory pages */
	  || bbp_is_forum_archive()

	  /* Blocks forum topic pages */
	  || bbp_is_single_topic()
	  
	  ) ) 
	
  // Prevent logged out users from accessing bp pages 
  bp_core_redirect( get_option('home') . '/' .  $bphelp_if_I_changed_my_register_slug );

}

add_action( 'template_redirect', 'bphelp_private_community_for_bp_lite', 1 );
  //End Prevent logged out users from accessing bp pages 
  
  
  
  
/* Prevent RSS Feeds */
function pcfbp_lite_cut_nonreg_visitor_rss_feed() {
	if ( !is_user_logged_in() ) {
		remove_action( 'bp_actions', 'bp_activity_action_sitewide_feed' ,3      );
		remove_action( 'bp_actions', 'bp_activity_action_personal_feed' ,3      );
		remove_action( 'bp_actions', 'bp_activity_action_friends_feed'  ,3      );
		remove_action( 'bp_actions', 'bp_activity_action_my_groups_feed',3      );
		remove_action( 'bp_actions', 'bp_activity_action_mentions_feed' ,3      );
		remove_action( 'bp_actions', 'bp_activity_action_favorites_feed',3      );
		remove_action( 'groups_action_group_feed', 'groups_action_group_feed',3 );
	}
}
add_action('init', 'pcfbp_lite_cut_nonreg_visitor_rss_feed'); 
/* End Prevent RSS Feeds */

/////////////////////////////// Dashboard Settings //////////////////////////////////
/*
 * bphelp_pcfbp_add_admin_menu()
 */
function bphelp_pcfbp_lite_add_admin_menu() {
	global $bp;

	if ( !is_super_admin() )
		return false;
		
		// Add translation
		load_plugin_textdomain( 'bphelp_pcfbp', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	add_options_page( __( 'PrivateCommunityBP', 'bphelp_pcfbp' ), __( 'PrivateCommunityBP', 'bphelp_pcfbp' ), 'manage_options', 'bphelp-pcfbp-settings', 'bphelp_pcfbp_lite_admin' );
}

add_action( 'admin_menu', 'bphelp_pcfbp_lite_add_admin_menu' );

/**
 * bp_bphelp_pcfbp_admin()
 *
 * Checks for form submission, saves component settings and outputs admin screen HTML.
 */
function bphelp_pcfbp_lite_admin() {
	global $bp;

	/* If the form has been submitted and the admin referrer checks out, save the settings */
	if ( isset( $_POST['submit'] ) && check_admin_referer('bphelp-settings') ) {
		update_option( 'bphelp-unblocked-page-one'       , $_POST['bphelp-unblocked-page-one']       );
		update_option( 'bphelp-unblocked-page-two'       , $_POST['bphelp-unblocked-page-two']       );
		update_option( 'bphelp-unblocked-page-three'     , $_POST['bphelp-unblocked-page-three']     );
		update_option( 'bphelp-unblocked-page-four'      , $_POST['bphelp-unblocked-page-four']      );
		update_option( 'bphelp-unblocked-page-five'      , $_POST['bphelp-unblocked-page-five']      );
		update_option( 'bphelp-unblocked-page-six'       , $_POST['bphelp-unblocked-page-six']       );
		update_option( 'bphelp-unblocked-page-seven'     , $_POST['bphelp-unblocked-page-seven']     );
		update_option( 'bphelp-unblocked-page-eight'     , $_POST['bphelp-unblocked-page-eight']     );
		update_option( 'bphelp-unblocked-page-nine'      , $_POST['bphelp-unblocked-page-nine']      );
		update_option( 'bphelp-unblocked-page-ten'       , $_POST['bphelp-unblocked-page-ten']       );
		update_option( 'bphelp-unblocked-page-eleven'    , $_POST['bphelp-unblocked-page-eleven']    );
		update_option( 'bphelp-unblocked-page-twelve'    , $_POST['bphelp-unblocked-page-twelve']    );
		update_option( 'bphelp-unblocked-page-thirteen'  , $_POST['bphelp-unblocked-page-thirteen']  );
		update_option( 'bphelp-unblocked-page-fourteen'  , $_POST['bphelp-unblocked-page-fourteen']  );
		update_option( 'bphelp-unblocked-page-fifteen'   , $_POST['bphelp-unblocked-page-fifteen']   );
		update_option( 'bphelp-unblocked-page-sixteen'   , $_POST['bphelp-unblocked-page-sixteen']   );
		update_option( 'bphelp-unblocked-page-seventeen' , $_POST['bphelp-unblocked-page-seventeen'] );
		update_option( 'bphelp-unblocked-page-eighteen'  , $_POST['bphelp-unblocked-page-eighteen']  );
		update_option( 'bphelp-unblocked-page-nineteen'  , $_POST['bphelp-unblocked-page-nineteen']  );
		update_option( 'bphelp-unblocked-page-twenty'    , $_POST['bphelp-unblocked-page-twenty']    );
		update_option( 'bphelp-my-register-slug'         , $_POST['bphelp-my-register-slug']         );

		$updated = true;
	}

		$bphelp_my_unblocked_page_1   = get_option( 'bphelp-unblocked-page-one'       );
		$bphelp_my_unblocked_page_2   = get_option( 'bphelp-unblocked-page-two'       );
		$bphelp_my_unblocked_page_3   = get_option( 'bphelp-unblocked-page-three'     );
		$bphelp_my_unblocked_page_4   = get_option( 'bphelp-unblocked-page-four'      );
		$bphelp_my_unblocked_page_5   = get_option( 'bphelp-unblocked-page-five'      );
		$bphelp_my_unblocked_page_6   = get_option( 'bphelp-unblocked-page-six'       );
		$bphelp_my_unblocked_page_7   = get_option( 'bphelp-unblocked-page-seven'     );
		$bphelp_my_unblocked_page_8   = get_option( 'bphelp-unblocked-page-eight'     );
		$bphelp_my_unblocked_page_9   = get_option( 'bphelp-unblocked-page-nine'      );
		$bphelp_my_unblocked_page_10  = get_option( 'bphelp-unblocked-page-ten'       );
		$bphelp_my_unblocked_page_11  = get_option( 'bphelp-unblocked-page-eleven'    );
		$bphelp_my_unblocked_page_12  = get_option( 'bphelp-unblocked-page-twelve'    );
		$bphelp_my_unblocked_page_13  = get_option( 'bphelp-unblocked-page-thirteen'  );
		$bphelp_my_unblocked_page_14  = get_option( 'bphelp-unblocked-page-fourteen'  );
		$bphelp_my_unblocked_page_15  = get_option( 'bphelp-unblocked-page-fifteen'   );
		$bphelp_my_unblocked_page_16  = get_option( 'bphelp-unblocked-page-sixteen'   );
		$bphelp_my_unblocked_page_17  = get_option( 'bphelp-unblocked-page-seventeen' );
		$bphelp_my_unblocked_page_18  = get_option( 'bphelp-unblocked-page-eighteen'  );
		$bphelp_my_unblocked_page_19  = get_option( 'bphelp-unblocked-page-nineteen'  );
		$bphelp_my_unblocked_page_20  = get_option( 'bphelp-unblocked-page-twenty'    );
		$bphelp_if_I_changed_my_register_slug = get_option( 'bphelp-my-register-slug', 'register' );
?>
	<div class="wrap">
		<?php screen_icon(); ?>
		<h2><?php _e( 'Private Community For BP Lite Settings', 'bphelp_pcfbp' ) ?></h2>
		<br />
		<p>
		<?php _e( 'Enter the slug of the posts/pages you would like to block in the options below.<br /> <b>Example:</b> enter "activity" without quotes to block the activity page.<br /> <b>You can also enter the slug of a category to block the entire category.</b>', 'bphelp_pcfbp' ) ?>
		</p>
		<br />

		<?php if ( isset($updated) ) : ?><?php echo "<div id='message' class='updated fade'><p>" . __( 'Settings Updated.', 'bphelp_pcfbp' ) . "</p></div>" ?><?php endif; ?>

		<form action="<?php echo site_url() . '/wp-admin/admin.php?page=bphelp-pcfbp-settings' ?>" name="bphelp-settings-form" id="bphelp-settings-form" method="post">

			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page One:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-one" type="text" id="bphelp-unblocked-page-one"      value="<?php echo esc_attr( $bphelp_my_unblocked_page_1          ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Two:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-two" type="text" id="bphelp-unblocked-page-two"      value="<?php echo esc_attr( $bphelp_my_unblocked_page_2          ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Three:</b>', 'bphelp_pcfbp' ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-three" type="text" id="bphelp-unblocked-page-three"  value="<?php echo esc_attr( $bphelp_my_unblocked_page_3          ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Four:</b>', 'bphelp_pcfbp'  ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-four" type="text" id="bphelp-unblocked-page-four"    value="<?php echo esc_attr( $bphelp_my_unblocked_page_4           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Five:</b>', 'bphelp_pcfbp'  ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-five" type="text" id="bphelp-unblocked-page-five"    value="<?php echo esc_attr( $bphelp_my_unblocked_page_5           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Six:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-six" type="text" id="bphelp-unblocked-page-six"      value="<?php echo esc_attr( $bphelp_my_unblocked_page_6           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Seven:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-seven" type="text" id="bphelp-unblocked-page-seven"  value="<?php echo esc_attr( $bphelp_my_unblocked_page_7           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Eight:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-eight" type="text" id="bphelp-unblocked-page-eight"  value="<?php echo esc_attr( $bphelp_my_unblocked_page_8           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Nine:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-nine" type="text" id="bphelp-unblocked-page-nine"    value="<?php echo esc_attr( $bphelp_my_unblocked_page_9           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Ten:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-ten" type="text" id="bphelp-unblocked-page-ten"      value="<?php echo esc_attr( $bphelp_my_unblocked_page_10          ); ?>" size="60" />
					</td>
				</tr>
					<!-- NEW ROWS -->
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Eleven:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-eleven" type="text" id="bphelp-unblocked-page-eleven"        value="<?php echo esc_attr( $bphelp_my_unblocked_page_11          ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Twelve:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-twelve" type="text" id="bphelp-unblocked-page-twelve"        value="<?php echo esc_attr( $bphelp_my_unblocked_page_12          ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Thirteen:</b>', 'bphelp_pcfbp' ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-thirteen" type="text" id="bphelp-unblocked-page-thirteen"    value="<?php echo esc_attr( $bphelp_my_unblocked_page_13          ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Fourteen:</b>', 'bphelp_pcfbp'  ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-fourteen" type="text" id="bphelp-unblocked-page-fourteen"    value="<?php echo esc_attr( $bphelp_my_unblocked_page_14           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Fifteen:</b>', 'bphelp_pcfbp'  ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-fifteen" type="text" id="bphelp-unblocked-page-fifteen"      value="<?php echo esc_attr( $bphelp_my_unblocked_page_15           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Sixteen:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-sixteen" type="text" id="bphelp-unblocked-page-sixteen"      value="<?php echo esc_attr( $bphelp_my_unblocked_page_16           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Seventeen:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-seventeen" type="text" id="bphelp-unblocked-page-seventeen"  value="<?php echo esc_attr( $bphelp_my_unblocked_page_17           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Eighteen:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-eighteen" type="text" id="bphelp-unblocked-page-eighteen"    value="<?php echo esc_attr( $bphelp_my_unblocked_page_18           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Nineteen:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-nineteen" type="text" id="bphelp-unblocked-page-nineteen"    value="<?php echo esc_attr( $bphelp_my_unblocked_page_19           ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Blocked Page Twenty:</b>', 'bphelp_pcfbp'   ) ?></label></th>
					<td>
						<input name="bphelp-unblocked-page-twenty" type="text" id="bphelp-unblocked-page-twenty"        value="<?php echo esc_attr( $bphelp_my_unblocked_page_20          ); ?>" size="60" />
					</td>
				</tr>
					<th scope="row"><label for="target_uri"><?php _e( '<b>Define Your Redirect Slug For Logged Out Visitors.</b><br /> Example:<br /> This can be <b>register, sign-up, or wp-login.php.</b>', 'bphelp_pcfbp' ) ?></label></th>
					<td>
						<input name="bphelp-my-register-slug" type="text" id="bphelp-my-register-slug"          value="<?php echo esc_attr( $bphelp_if_I_changed_my_register_slug ); ?>" size="60" />
					</td>
				</tr>
			</table>
			
			<p class="submit">
				&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" class="button-primary" value="<?php _e( 'Save Settings', 'bphelp_pcfbp' ) ?>"/>
			</p>

			<?php
			/* Make sure this is filled in */
			wp_nonce_field( 'bphelp-settings' );
			?>
		</form>
	</div>
<?php
} 
///Enjoy!
?>