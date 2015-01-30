<?php

include_once get_template_directory() . '/functions/gommero-functions.php';
$functions_path = get_template_directory() . '/functions/';
/* These files build out the options interface.  Likely won't need to edit these. */
require_once ($functions_path . 'admin-functions.php');  // Custom functions and plugins
require_once ($functions_path . 'admin-interface.php');  // Admin Interfaces (options,framework, seo)
/* These files build out the theme specific options and associated functions. */
require_once ($functions_path . 'theme-options.php');   // Options panel settings and custom settings
/* ----------------------------------------------------------------------------------- */
/* jQuery Enqueue */
/* ----------------------------------------------------------------------------------- */

function gommero_jquery_init() {
    if (!is_admin()) {
        wp_enqueue_script('ddsmoothmenu', get_template_directory_uri() . "/js/ddsmoothmenu.js", array('jquery'));
        wp_enqueue_script('slider', get_template_directory_uri() . '/js/slides.min.jquery.js', array('jquery'));
        wp_enqueue_script('cufon-ui', get_template_directory_uri() . '/js/cufon-yui.js', array('jquery'));
        wp_enqueue_script('cufon-font', get_template_directory_uri() . '/js/Futura_LT_400.font.js', array('jquery'));
        wp_enqueue_script('ddsmoothmenuinit', get_template_directory_uri() . "/js/custom.js", array('jquery'));
        wp_enqueue_script('validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'));
        wp_print_scripts('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'gommero_jquery_init');

function gommero_get_option($name) {
    $options = get_option('gommero_options');
    if (isset($options[$name]))
        return $options[$name];
}

//
function gommero_update_option($name, $value) {
    $options = get_option('gommero_options');
    $options[$name] = $value;
    return update_option('gommero_options', $options);
}

//
function gommero_delete_option($name) {
    $options = get_option('gommero_options');
    unset($options[$name]);
    return update_option('gommero_options', $options);
}

//Add plugin notification 
require_once(get_template_directory() . '/functions/plugin-activation.php');
require_once(get_template_directory() . '/functions/inkthemes-plugin-notify.php');
add_action('tgmpa_register', 'inkthemes_plugins_notify');