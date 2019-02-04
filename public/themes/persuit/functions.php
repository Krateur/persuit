<?php

function setup_features() {
    // Styles
    wp_enqueue_style('css', get_stylesheet_uri());
    wp_enqueue_style('awesome', get_theme_file_uri('css/font-awesome.min.css'));
    wp_enqueue_style('simple', get_theme_file_uri('vendors/line-icon/css/simple-line-icons.css'));
    wp_enqueue_style('elegant', get_theme_file_uri('vendors/elegant-icon/style.css'));
    wp_enqueue_style('bootstrap', get_theme_file_uri('css/bootstrap.min.css'));
    wp_enqueue_style('settings', get_theme_file_uri('vendors/revolution/css/settings.css'));
    wp_enqueue_style('layers', get_theme_file_uri('vendors/revolution/css/layers.css'));
    wp_enqueue_style('navigation', get_theme_file_uri('vendors/revolution/css/navigation.css'));
    wp_enqueue_style('owl-carousel', get_theme_file_uri('vendors/owl-carousel/owl.carousel.min.css'));
    wp_enqueue_style('bootstrap-selector', get_theme_file_uri('vendors/bootstrap-selector/css/bootstrap-select.min.css'));
    wp_enqueue_style('responsive', get_theme_file_uri('css/responsive.css'));
    wp_enqueue_style('oss', '//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js');
    wp_enqueue_style('maxcdn', '//oss.maxcdn.com/respond/1.4.2/respond.min.js');


    // JavaScripts And Bootstrap Jquery
    wp_enqueue_script('jquery', get_theme_file_uri('js/jquery-3.2.1.min.js'), NULL, '1.0', true);
    wp_enqueue_script('popper', get_theme_file_uri('js/popper.min.js'), NULL, '1.0', true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('js/bootstrap.min.js'), NULL, '1.0', true);


    // Rev Slider Js
    wp_enqueue_script('js-themepunch', get_theme_file_uri('vendors/revolution/js/jquery.themepunch.tools.min.js'), NULL, '1.0', true);
    wp_enqueue_script('themepunch', get_theme_file_uri('vendors/revolution/js/jquery.themepunch.revolution.min.js'), NULL, '1.0', true);
    wp_enqueue_script('actions', get_theme_file_uri('vendors/revolution/js/extensions/revolution.extension.actions.min.js'), NULL, '1.0', true);
    wp_enqueue_script('video', get_theme_file_uri('vendors/revolution/js/extensions/revolution.extension.video.min.js'), NULL, '1.0', true);
    wp_enqueue_script('video', get_theme_file_uri('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js'), NULL, '1.0', true);
    wp_enqueue_script('layeranimation', get_theme_file_uri('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js'), NULL, '1.0', true);
    wp_enqueue_script('navigation', get_theme_file_uri('vendors/revolution/js/extensions/revolution.extension.navigation.min.js'), NULL, '1.0', true);
    wp_enqueue_script('slideanims', get_theme_file_uri('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js'), NULL, '1.0', true);


    // Extra Plugins
    wp_enqueue_script('counterup', get_theme_file_uri('vendors/counterup/jquery.waypoints.min.js'), NULL, '1.0', true);
    wp_enqueue_script('carousel', get_theme_file_uri('vendors/owl-carousel/owl.carousel.min.js'), NULL, '1.0', true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('vendors/bootstrap-selector/js/bootstrap-select.min.js'), NULL, '1.0', true);
    wp_enqueue_script('image-dropdown', get_theme_file_uri('vendors/image-dropdown/jquery.dd.min.js'), NULL, '1.0', true);
    wp_enqueue_script('smoothscroll', get_theme_file_uri('js/smoothscroll.js'), NULL, '1.0', true);
    wp_enqueue_script('isotope', get_theme_file_uri('vendors/isotope/imagesloaded.pkgd.min.js'), NULL, '1.0', true);
    wp_enqueue_script('pkgd', get_theme_file_uri('vendors/isotope/isotope.pkgd.min.js'), NULL, '1.0', true);
    wp_enqueue_script('magnify', get_theme_file_uri('vendors/magnify-popup/jquery.magnific-popup.min.js'), NULL, '1.0', true);
    wp_enqueue_script('vertical', get_theme_file_uri('vendors/vertical-slider/js/jQuery.verticalCarousel.js'), NULL, '1.0', true);
    wp_enqueue_script('jquery-ui', get_theme_file_uri('vendors/jquery-ui/jquery-ui.js'), NULL, '1.0', true);
    wp_enqueue_script('theme', get_theme_file_uri('js/theme.js'), NULL, '1.0', true);
}


add_action('wp_enqueue_scripts', 'setup_features');
