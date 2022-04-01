<?php

/** remove actions from parent theme (file functions.php) */
remove_action( 'show_user_profile', 'my_show_extra_profile_fields' );
remove_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );



/** add new custom actions */

add_action( 'show_user_profile', 'wpd_show_extra_profile_fields', 11 );
add_action( 'edit_user_profile', 'wpd_show_extra_profile_fields', 11 );

function wpd_show_extra_profile_fields( $user ) { ?>

    <h3>Extra profile information</h3>

    <table class="form-table">

        <tr>
            <th><label for="linkedin">Linkedin</label></th>

            <td>
                <input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">Please enter your Linkedin url.</span>
            </td>
        </tr>

        <tr>
            <th><label for="instagram">Instagram</label></th>

            <td>
                <input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">Please enter your Instagram url.</span>
            </td>
        </tr>

        <tr>
            <th><label for="telegram">Telegram</label></th>

            <td>
                <input type="text" name="telegram" id="telegram" value="<?php echo esc_attr( get_the_author_meta( 'telegram', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">Please enter your Instagram url.</span>
            </td>
        </tr>

        <tr>
            <th><label for="knowsabout">Knows about (for schemes)</label></th>

            <td>
                <input type="text" name="knowsabout" id="knowsabout" value="<?php echo esc_attr( get_the_author_meta( 'knowsabout', $user->ID ) ); ?>" class="regular-text" /><br />

            </td>
        </tr>

    </table>
<?php }

add_action( 'personal_options_update', 'wpd_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'wpd_save_extra_profile_fields' );

function wpd_save_extra_profile_fields( $user_id ) {

    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;

    update_user_meta( $user_id, 'linkedin', $_POST['linkedin'] );
    update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
    update_user_meta( $user_id, 'telegram', $_POST['telegram'] );
    update_user_meta( $user_id, 'knowsabout', $_POST['knowsabout'] );
}