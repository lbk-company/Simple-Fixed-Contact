<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function lbk_fc_template() {
    // Get the general settings options
    $phone = get_option( 'lbk_fc_phone' );
    $template = get_option( 'lbk_fc_gfx' );
    $zalo = get_option( 'lbk_fc_zalo' );
    $messenger = get_option( 'lbk_fc_mess' );
    $facebook = get_option( 'lbk_fc_fb' );
    $instagram = get_option( 'lbk_fc_insta' );
    $twitter = get_option( 'lbk_fc_twitter' );
    $position = get_option( 'lbk_fc_position' );
    $link = get_option( 'lbk_fc_link' );

    if ( empty($position) ) $position = 'bottom-right';

    // Display Fixed Contact
    ?>

    <div class="lbk lbk-fc <?php if ( $template == 'phonering' ) { echo 'hotline '; } else { echo 'custom '; }; echo $position; ?>" id="lbk-fc">
        <div class="content">
            <div class="rows">
                <?php if ( $phone && $template == 'phonering' ) { ?>
                <div class="lbk-hotline-wrapper cols">
                    <span class="lbk-hotline-inner">
                        <span class="contain-img">
                            <svg height="512" viewBox="0 0 58 58" width="512" xmlns="http://www.w3.org/2000/svg"><g id="Page-1"  fill-rule="evenodd"><g id="003---Call" fill="rgb(255,255,255)" fill-rule="nonzero" transform="translate(-1)"><path id="Shape" d="m25.017 33.983c-5.536-5.536-6.786-11.072-7.068-13.29-.0787994-.6132828.1322481-1.2283144.571-1.664l4.48-4.478c.6590136-.6586066.7759629-1.685024.282-2.475l-7.133-11.076c-.5464837-.87475134-1.6685624-1.19045777-2.591-.729l-11.451 5.393c-.74594117.367308-1.18469338 1.15985405-1.1 1.987.6 5.7 3.085 19.712 16.855 33.483s27.78 16.255 33.483 16.855c.827146.0846934 1.619692-.3540588 1.987-1.1l5.393-11.451c.4597307-.9204474.146114-2.0395184-.725-2.587l-11.076-7.131c-.7895259-.4944789-1.8158967-.3783642-2.475.28l-4.478 4.48c-.4356856.4387519-1.0507172.6497994-1.664.571-2.218-.282-7.754-1.532-13.29-7.068z"/><path id="Shape" d="m47 31c-1.1045695 0-2-.8954305-2-2-.0093685-8.2803876-6.7196124-14.9906315-15-15-1.1045695 0-2-.8954305-2-2s.8954305-2 2-2c10.4886126.0115735 18.9884265 8.5113874 19 19 0 1.1045695-.8954305 2-2 2z"/><path id="Shape" d="m57 31c-1.1045695 0-2-.8954305-2-2-.0154309-13.800722-11.199278-24.9845691-25-25-1.1045695 0-2-.8954305-2-2s.8954305-2 2-2c16.008947.01763587 28.9823641 12.991053 29 29 0 .530433-.2107137 1.0391408-.5857864 1.4142136-.3750728.3750727-.8837806.5857864-1.4142136.5857864z"/></g></g></svg>
                        </span>
                        <a href="tel: <?php echo str_replace( '.', '', $phone ); ?>"><?php echo str_replace( '.', '', $phone ); ?></a>
                    </span>
                </div>
                <?php } ?>
                <?php if ( $template == 'custom' ) { ?>
                    <?php if ( get_option( 'lbk_fc_zalo_show' ) ) { ?>
                    <div class="lbk-zalo-wrapper cols">
                        <span class="lbk-zalo-inner">
                            <a href="<?php echo $zalo ?>">
                                <span class="contain-img">
                                    <img src="<?php echo lbk_get_link_img('zalo.svg'); ?>">
                                </span>
                            </a>
                            <span class="mobile">Zalo</span>
                        </span>
                    </div>
                    <?php } ?>

                    <?php if ( get_option( 'lbk_fc_mess_show' ) ) { ?>
                    <div class="lbk-mess-wrapper cols">
                        <span class="lbk-mess-inner">
                            <a href="<?php echo $messenger ?>">
                                <span class="contain-img">
                                    <img src="<?php echo lbk_get_link_img('messenger.svg'); ?>">
                                </span>
                            </a>
                            <span class="mobile">Messenger</span>
                        </span>
                    </div>
                    <?php } ?>

                    <?php if ( get_option( 'lbk_fc_phone_show' ) ) { ?>
                    <div class="lbk-phone-wrapper cols">
                        <span class="lbk-phone-inner">
                            <a href="tel: <?php echo str_replace( '.', '', $phone ); ?>">
                                <span class="contain-img">
                                    <img src="<?php echo lbk_get_link_img('phone.svg'); ?>">
                                </span>
                                <span class="mobile">Phone</span>
                            </a>
                        </span>
                    </div>
                    <?php } ?>

                    <?php if ( get_option( 'lbk_fc_fb_show' ) ) { ?>
                    <div class="lbk-fb-wrapper cols">
                        <span class="lbk-fb-inner">
                            <a href="<?php echo $facebook ?>">
                                <span class="contain-img">
                                    <img src="<?php echo lbk_get_link_img('facebook.svg'); ?>">
                                </span>
                                <span class="mobile">Facebook</span>
                            </a>
                        </span>
                    </div>
                    <?php } ?>

                    <?php if ( get_option( 'lbk_fc_insta_show' ) ) { ?>
                    <div class="lbk-insta-wrapper cols">
                        <span class="lbk-insta-inner">
                            <a href="<?php echo $instagram ?>">
                                <span class="contain-img">
                                    <img src="<?php echo lbk_get_link_img('instagram.svg'); ?>">
                                </span>
                            </a>
                            <span class="mobile">Instagram</span>
                        </span>
                    </div>
                    <?php } ?>

                    <?php if ( get_option( 'lbk_fc_twitter_show' ) ) { ?>
                    <div class="lbk-twitter-wrapper cols">
                        <span class="lbk-twitter-inner">
                            <a href="<?php echo $twitter ?>">
                                <span class="contain-img">
                                    <img src="<?php echo lbk_get_link_img('twitter.svg'); ?>">
                                </span>
                            </a>
                            <span class="mobile">Twitter</span>
                        </span>
                    </div>
                    <?php } ?>

                    <?php if ( get_option( 'lbk_fc_link_show' ) ) { ?>
                    <div class="lbk-link-wrapper cols">
                        <span class="lbk-link-inner">
                            <a href="<?php echo $link ?>">
                                <span class="contain-img">
                                    <img src="<?php echo lbk_get_link_img('link.svg'); ?>">
                                </span>
                            </a>
                            <span class="mobile">Twitter</span>
                        </span>
                    </div>
                    <?php } ?>

                    <?php if( get_option( 'lbk_fc_lightbox_show' ) ) { ?>
                    <div class="lbk-lightbox-wrapper cols">
                        <span class="lbk-lightbox-inner">
                            <span class="contain-img">
                                <img src="<?php echo lbk_get_link_img('form.svg'); ?>">
                            </span>
                            <span class="mobile">Form liên hệ</span>
                        </span>
                    </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php if( get_option( 'lbk_fc_lightbox_show' ) ) { ?>
    <div id="lbk-fc-lightbox">
        <div class="lbk-lightbox">
            <h3>Đăng ký nhận tư vấn</h3>
            <?php echo do_shortcode( get_option( 'lbk_fc_lightbox' ) ); ?>
        </div>
    </div>
    <?php } ?>
    
<?php }
add_action( 'wp_footer', 'lbk_fc_template', 188 );