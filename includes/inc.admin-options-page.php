<div id="lbkfc" class="wrap">
    <h1><?php _e( 'LBK Fixed Contact', 'lbk-fc' ); ?></h1>

    <form method="post" id="lbk_fc_options_form" action="options.php">
        <div class="lbk card">
            <h2><?php _e( 'Choose Template', 'lbk-fc' ); ?></h2>
            <div class="lbk_fc_customizer">
                <table>
                    <tbody>
                        <tr>
                            <td><label for="lbk_fc_gfx"><?php _e( 'Template', 'lbk-fc' ) ?></label></td>
                            <td>
                                <select name="lbk_fc_gfx">
                                    <option <?php if ( get_option( 'lbk_fc_gfx' ) == 'phonering' ) echo 'selected'; ?> value="phonering">Phonering</option>
                                    <option <?php if ( get_option( 'lbk_fc_gfx' ) == 'custom' ) echo 'selected'; ?> value="custom">Custom</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="lbk card">
            <h2><?php _e( 'Data', 'lbk-fc' ); ?></h2>
            <table>
                <thead>
                    <th></th>
                    <th></th>
                    <th>Show</th>
                </thead>
                <tbody>
                    <tr>
                        <?php echo lbkFc_Function::form_text_input( 'lbk_fc_phone', __( 'Phone number', 'lbk-fc' ), get_option( 'lbk_fc_phone' ) ) ?>
                        <?php echo lbk_form_checkbox( 'lbk_fc_phone_show', 'Show', get_option( 'lbk_fc_phone_show' ) ); ?>
                    </tr>
                    <tr>
                        <?php echo lbkFc_Function::form_text_input( 'lbk_fc_zalo', __( 'Link Zalo', 'lbk-fc' ), get_option( 'lbk_fc_zalo' ) ) ?>
                        <?php echo lbk_form_checkbox( 'lbk_fc_zalo_show', 'Show', get_option( 'lbk_fc_zalo_show' ) ); ?>
                    </tr>
                    <tr>
                        <?php echo lbkFc_Function::form_text_input( 'lbk_fc_mess', __( 'Link Messenger', 'lbk-fc' ), get_option( 'lbk_fc_mess' ) ) ?>
                        <?php echo lbk_form_checkbox( 'lbk_fc_mess_show', 'Show', get_option( 'lbk_fc_mess_show' ) ); ?>
                    </tr>
                    <tr>
                        <?php echo lbkFc_Function::form_text_input( 'lbk_fc_fb', __( 'Link Facebook', 'lbk-fc' ), get_option( 'lbk_fc_fb' ) ) ?>
                        <?php echo lbk_form_checkbox( 'lbk_fc_fb_show', 'Show', get_option( 'lbk_fc_fb_show' ) ); ?>
                    </tr>
                    <tr>
                        <?php echo lbkFc_Function::form_text_input( 'lbk_fc_insta', __( 'Link Instagram', 'lbk-fc' ), get_option( 'lbk_fc_insta' ) ) ?>
                        <?php echo lbk_form_checkbox( 'lbk_fc_insta_show', 'Show', get_option( 'lbk_fc_insta_show' ) ); ?>
                    </tr>
                    <tr>
                        <?php echo lbkFc_Function::form_text_input( 'lbk_fc_twitter', __( 'Link Twitter', 'lbk-fc' ), get_option( 'lbk_fc_twitter' ) ) ?>
                        <?php echo lbk_form_checkbox( 'lbk_fc_twitter_show', 'Show', get_option( 'lbk_fc_twitter_show' ) ); ?>
                    </tr>
                    <tr>
                        <?php echo lbkFc_Function::form_text_input( 'lbk_fc_lightbox', __( 'Shortcode Contact Form 7', 'lbk-fc' ), get_option( 'lbk_fc_lightbox' ) ) ?>
                        <?php echo lbk_form_checkbox( 'lbk_fc_lightbox_show', 'Show', get_option( 'lbk_fc_lightbox_show' ) ); ?>
                    </tr>
                    <tr>
                        <td><label for="lbk_fc_position"><?php _e( 'Position', 'lbk-fc' ); ?></label></td>
                        <td>
                            <select name="lbk_fc_position">
                                <option <?php if ( get_option( 'lbk_fc_position' ) == 'bottom-right' ) echo 'selected'; ?> value="bottom-right">Bottom Right</option>
                                <option <?php if ( get_option( 'lbk_fc_position' ) == 'bottom-left' ) echo 'selected'; ?> value="bottom-left">Bottom Left</option>
                                <option <?php if ( get_option( 'lbk_fc_position' ) == 'middle-left' ) echo 'selected'; ?> value="middle-left">Middle Left</option>
                                <option <?php if ( get_option( 'lbk_fc_position' ) == 'middle-right' ) echo 'selected'; ?> value="middle-right">Middle Right</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php settings_fields( 'lbk_fc_settings' ) ?>
        <?php do_settings_sections( 'lbk_fc_settings' ); ?>
        <?php submit_button( __( 'Save Changes', 'lbk-fc' ) ); ?>
    </form>
</div>