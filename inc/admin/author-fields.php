<?php
function samsungnxt_additional_profile_fields($user)
{ ?>
  <h3>Extra profile information</h3>
  <table class="form-table">
    <tbody>
      <tr class="user-company-wrap">
        <th><label for="company">Company</label></th>
        <td><input type="text" name="company" id="text" aria-describedby="company-description" value="<?php echo esc_attr( get_the_author_meta( 'company', $user->ID ) ); ?>" class="regular-text ltr">
        </td>
      </tr>

      <tr class="user-title-wrap">
        <th><label for="title">Title</label></th>
        <td><input type="text" name="title" id="title" value="<?php echo esc_attr( get_the_author_meta( 'title', $user->ID ) ); ?>" class="regular-text code"></td>
      </tr>

    </tbody>
  </table>

<?php }
add_action('show_user_profile', 'samsungnxt_additional_profile_fields');
add_action('edit_user_profile', 'samsungnxt_additional_profile_fields');

/**
 * Save additional profile fields.
 *
 * @param  int $user_id Current user ID.
 */
function samsungnxt_save_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
  update_usermeta( $user_id, 'company', $_POST['company'] );
  update_usermeta( $user_id, 'title', $_POST['title'] );
}

add_action( 'personal_options_update', 'samsungnxt_save_profile_fields' );
add_action( 'edit_user_profile_update', 'samsungnxt_save_profile_fields' );
