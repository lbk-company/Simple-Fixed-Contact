<?php

// Exit if accessed directly
if ( !defined ( 'ABSPATH' ) ) exit;

if ( !class_exists( 'lbkFc_Admin' ) ) {
    /**
     * Class lbkFc_Admin
     */
    final class lbkFc_Admin {
        /**
         * Setup plugin for admin use
         * 
         * @access private
         * @since 1.0
         * @static
         */
        public function __construct() {
            $this->hooks();
        }

        /**
         * Add the core admin hooks.
         * 
         * @access private
         * @since 1.0
         * @static
         */
        private function hooks() {
            add_action( 'admin_init', array( $this, 'registerScripts' ) );
            add_action( 'admin_menu', array( $this, 'menu' ) );
            add_action( 'admin_init', array( $this, 'register_lbk_fc_general_settings') );
            // add_action( 'init', array( $this, 'registerMetaboxes' ), 99 );
            // add_action( 'plugin_action_links_' . LBK_FC_BASE_NAME, array( $this, 'pluginActionLinks' ), 10, 2 );
            add_filter( 'plugin_action_links', array( $this, 'add_settings_link' ), 10, 2 );
        }

        /**
         * Register settings.
         * 
         * @access private
         * @since 1.0
         * @static
         */
        public function register_lbk_fc_general_settings() { 
            // Register all settings for general settings page 
            register_setting( 'lbk_fc_settings', 'lbk_fc_gfx' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_phone' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_phone_show' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_zalo' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_zalo_show' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_mess' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_mess_show' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_fb' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_fb_show' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_insta' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_insta_show' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_twitter' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_twitter_show' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_position' ); 
            register_setting( 'lbk_fc_settings', 'lbk_fc_lightbox' );
            register_setting( 'lbk_fc_settings', 'lbk_fc_lightbox_show' );
            register_setting( 'lbk_fc_settings', 'lbk_fc_link' );
            register_setting( 'lbk_fc_settings', 'lbk_fc_link_show' );
        }

        /**
         * Callback to add the settings link to the plugin action links.
         * 
         * @access private
         * @since 1.0
         * @static
         * 
         * @param $links
         * @param $file
         * 
         * @return array
         */
        public function pluginActionLinks( $links, $file ) {}
        
        /**
         * Register the scripts used in the admin
         * 
         * @access private
         * @since 1.0
         * @static
         */
        public function registerScripts() {
            wp_register_script( 'lbk_fc_admin_script', LBK_FC_URL . 'assets/js/admin.js', array( 'jquery', 'wp_color-picker' ), lbkFc::VERSION, true );
            wp_register_style( 'lbk_fc_admin_style', LBK_FC_URL . 'assets/css/admin.css', array( 'wp-color-picker' ), lbkFc::VERSION );
        }

        /**
         * Callback to add plugin as a submenu page of the Options page.
         * 
         * This also adds the action to enqueue the scripts to be loaded on plugin's admin page only.
         * 
         * @access private
         * @since 1.0
         * @static
         */
        public function menu() {
            $page = add_submenu_page( 
                'options-general.php',
                esc_html__( 'LBK Fixed Contact', 'lbk-fc' ),
                esc_html__( 'LBK Fixed Contact', 'lbk-fc' ),
                'manage_options',
                'lbk-fixed-contact',
                array( $this, 'page' )
            );

            add_action( 'admin_print_styles-' . $page, array( $this, 'enqueueScripts' ) );
        }

        /**
         * Enqueue the scripts.
         * 
         * @access private
         * @since 1.0
         * @static
         */
        public function enqueueScripts() {
            wp_enqueue_script( 'lbk_fc_admin_script' );
            wp_enqueue_style( 'lbk_fc_admin_style' );
        }

        /**
         * Callback used to render the admin options page.
         * 
         * @access private
         * @since 1.0
         * @static
         */
        public function page() {
            include LBK_FC_PATH . 'includes/inc.admin-options-page.php';
        }

        /**
         * Add a link to the settings page
         * 
         * @access public
         * @since 1.0
         * @static
         */
        public function add_settings_link( $links, $file ) {
            if (
                strrpos( $file, '/lbk-fixed-contact.php' ) === ( strlen( $file ) - 22 ) &&
                current_user_can( 'manage_options' )
            ) {
                $settings_link = sprintf( '<a href="%s">%s</a>', admin_url( 'options-general.php?page=lbk-fixed-contact' ), __( 'Settings', 'lbk-fc' ) );
                $links = (array) $links;
                $links['lbksvc_settings_link'] = $settings_link;
            }

            return $links;
        }
    }

    new lbkFc_Admin();
}