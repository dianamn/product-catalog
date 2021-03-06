<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<div class="free_version_banner">
    <img class="manual_icon"
         src="<?php echo  plugins_url('../images/catalog_banner_logo.png',__FILE__); ?>"
         alt="user manual"/>
    <p class="usermanual_text"><?php _e('Wordpress Product Catalog', 'hugeit_contact'); ?></p>
    <a class="get_full_version" href="https://huge-it.com/product-catalog/" target="_blank">
        <?php _e('GO PRO', 'hugeit_contact'); ?>
    </a>
    <p class="close_banner">Close for now</p>
    <img class="closer_icon_only" alt="Close Icon"
         src="<?php echo  plugins_url('../images/free-banner/close_btn.png',__FILE__); ?>"/>
    <a href="http://huge-it.com" target="_blank"><img class="huge_it_logo"
                                                      src="<?php echo  plugins_url('../images/free-banner/huge-it_logo.png',__FILE__); ?>"/></a>
    <div class="mobile_icon_show hide">
        <a href="http://huge-it.com" target="_blank"><img class="huge_it_logo_mobile"
                                                          src="<?php echo  plugins_url('../images/free-banner/logo_mobile_screen.png',__FILE__); ?>"/></a>
    </div>
    <div style="clear: both;"></div>
    <div class="hg_social_link_buttons">
        <a target="_blank" class="fb" href="https://www.facebook.com/hugeit/"><i class="fa fa-facebook"
                                                                                 aria-hidden="true"></i></a>
        <a target="_blank" class="twitter" href="https://twitter.com/HugeITcom"><i class="fa fa-twitter"
                                                                                   aria-hidden="true"></i></a>
        <a target="_blank" class="gplus" href="https://plus.google.com/111845940220835549549"><i
                    class="fa fa-google-plus" aria-hidden="true"></i></a>
        <a target="_blank" class="yt" href="https://www.youtube.com/channel/UCueCH_ulkgQZhSuc0L5rS5Q"><i
                    class="fa fa-youtube-play" aria-hidden="true"></i></a>
    </div>
    <div class="hg_view_plugins_block">
        <ul class="inline_menu">
            <li>
                <a target="_blank" href="https://huge-it.com/product-catalog/">
                    <?php _e('Demo', 'hugeit_contact'); ?>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://wordpress.org/plugins/product-catalog/">
                    <?php _e('Review', 'hugeit_contact'); ?>
                </a>
            </li>
            <li class="help_element">

                <?php _e('Help', 'hugeit_contact'); ?>
                </a>
                <ul class="submenu">
                    <li>
                        <a target="_blank" href="https://huge-it.com/contact-us/">
                            <?php _e('Contact Us', 'hugeit_contact'); ?>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://huge-it.com/wordpress-product-catalog-user-manual/">
                            <?php _e('User Manual', 'hugeit_contact'); ?>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://huge-it.com/wordpress-product-catalog-faq/">
                            <?php _e('FAQ', 'hugeit_contact'); ?>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://wordpress.org/support/plugin/product-catalog">
                            <?php _e('Forum', 'hugeit_contact'); ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="toggle_element">
                <a href="#">
                    <img class="toggle_icon"
                         src="<?php echo  plugins_url('../images/free-banner/toggle_icon.png',__FILE__); ?>"/>
                </a>
            </li>
        </ul>
        <div class="description_text">
            <p><?php _e('Click GO PRO to activate all additional customization options.', 'hugeit_contact'); ?></p>
        </div>
    </div>
    <div style="clear: both;"></div>
</div>