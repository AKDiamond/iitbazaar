<?php
/**
 * volta Theme Customizer
 *
 * @package volta
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function volta_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	/* Static front Page */
	$wp_customize->add_setting(
		'volta_front_page_layout', array(
        'default'        => 'two',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_front_layout',
    ));
    $wp_customize->add_control( 'volta_front_page_layout', array(
        'label'   => __('Front Page Layout for Posts:', 'volta'),
        'section' => 'static_front_page',
        'type'    => 'select',
		'priority'   => 10,
        'choices' => array('one'=>__('Mag One', 'volta'), 'two'=>__('Mag Two', 'volta'), 'standard'=>__('Standard', 'volta')),
    ));	
	
	/* Social Section */
   	$wp_customize->add_section( 'volta_social_options' , array(
		'title'      => __('Social Options', 'volta'),
		'priority'   => 200,
   	) );
	$wp_customize->add_setting(
		'volta_show_social_section', array(
        'default'        => 'no',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
    $wp_customize->add_control( 'volta_show_social_section', array(
        'label'   => __('Show Social Section:', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'select',
		'priority'   => 10,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	$wp_customize->add_setting(
		'volta_social_facebook', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_facebook', array(
        'label'   => __('Facebook Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 20,
    ));
	$wp_customize->add_setting(
		'volta_social_twitter', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_twitter', array(
        'label'   => __('Twitter Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 30,
    ));
	$wp_customize->add_setting(
		'volta_social_behance', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_behance', array(
        'label'   => __('Behance Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 40,
    ));
	$wp_customize->add_setting(
		'volta_social_bitbucket', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_bitbucket', array(
        'label'   => __('BitBucket Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 50,
    ));
	$wp_customize->add_setting(
		'volta_social_github', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_github', array(
        'label'   => __('GitHub Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 60,
    ));
	$wp_customize->add_setting(
		'volta_social_instagram', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_instagram', array(
        'label'   => __('InstaGram Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 69,
    ));
	$wp_customize->add_setting(
		'volta_social_youtube', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_youtube', array(
        'label'   => __('YouTube Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 70,
    ));
	$wp_customize->add_setting(
		'volta_social_dribble', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_dribble', array(
        'label'   => __('Dribble Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 80,
    ));
	$wp_customize->add_setting(
		'volta_social_googleplus', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_googleplus', array(
        'label'   => __('Google Plus Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 90,
    ));
	$wp_customize->add_setting(
		'volta_social_tumblr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_tumblr', array(
        'label'   => __('Tunblr Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 100,
    ));	
	$wp_customize->add_setting(
		'volta_social_vine', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_vine', array(
        'label'   => __('Vine Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 110,
    ));
	$wp_customize->add_setting(
		'volta_social_wp', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_wp', array(
        'label'   => __('WordPress Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 120,
    ));
	$wp_customize->add_setting(
		'volta_social_spotify', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_spotify', array(
        'label'   => __('Spotify Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 130,
    ));
	$wp_customize->add_setting(
		'volta_social_soundcloud', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_soundcloud', array(
        'label'   => __('SoundCloud Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 140,
    ));
	$wp_customize->add_setting(
		'volta_social_reddit', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_reddit', array(
        'label'   => __('Reddit Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 150,
    ));
	$wp_customize->add_setting(
		'volta_social_pinterest', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_pinterest', array(
        'label'   => __('Pinterest Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 160,
    ));
	$wp_customize->add_setting(
		'volta_social_linkedin', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_linkedin', array(
        'label'   => __('LinkedIn Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 170,
    ));
	$wp_customize->add_setting(
		'volta_social_flickr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_flickr', array(
        'label'   => __('Flickr Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 180,
    ));
	$wp_customize->add_setting(
		'volta_social_stackexchange', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'volta_social_stackexchange', array(
        'label'   => __('StackExchange Link :', 'volta'),
        'section' => 'volta_social_options',
        'type'    => 'text',
		'priority'   => 190,
    ));	
	
	/* Single Post Section */
   	$wp_customize->add_section( 'volta_single_post' , array(
		'title'      => __('Single Post Options', 'volta'),
		'priority'   => 900,
   	) );
	$wp_customize->add_setting(
		'volta_show_slider_post', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_slider_post', array(
        'label'   => __('Show Slider on Single Post:', 'volta'),
        'section' => 'volta_single_post',
        'type'    => 'select',
		'priority'   => 100,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	$wp_customize->add_setting(
		'volta_show_title_post', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_title_post', array(
        'label'   => __('Show Title on Single Post:', 'volta'),
        'section' => 'volta_single_post',
        'type'    => 'select',
		'priority'   => 200,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	$wp_customize->add_setting(
		'volta_show_meta_post', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_meta_post', array(
        'label'   => __('Show Meta on Single Post:', 'volta'),
        'section' => 'volta_single_post',
        'type'    => 'select',
		'priority'   => 300,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	$wp_customize->add_setting(
		'volta_show_featured_post', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_featured_post', array(
        'label'   => __('Show Featured Image on Single Post:', 'volta'),
        'section' => 'volta_single_post',
        'type'    => 'select',
		'priority'   => 390,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	$wp_customize->add_setting(
		'volta_show_cats_post', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_cats_post', array(
        'label'   => __('Show Categories on Single Post:', 'volta'),
        'section' => 'volta_single_post',
        'type'    => 'select',
		'priority'   => 400,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	$wp_customize->add_setting(
		'volta_show_tags_post', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_tags_post', array(
        'label'   => __('Show Tags on Single Post:', 'volta'),
        'section' => 'volta_single_post',
        'type'    => 'select',
		'priority'   => 500,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	$wp_customize->add_setting(
		'volta_show_author_post', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_author_post', array(
        'label'   => __('Show Author Section on Single Post:', 'volta'),
        'section' => 'volta_single_post',
        'type'    => 'select',
		'priority'   => 600,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	$wp_customize->add_setting(
		'volta_show_nav_post', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_nav_post', array(
        'label'   => __('Show Nav Section on Single Post:', 'volta'),
        'section' => 'volta_single_post',
        'type'    => 'select',
		'priority'   => 700,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));

	
	/* Page Section */
   	$wp_customize->add_section( 'volta_page_options' , array(
		'title'      => __('Page Options', 'volta'),
		'priority'   => 910,
   	) );
	$wp_customize->add_setting(
		'volta_show_slider_page', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_slider_page', array(
        'label'   => __('Show Slider on Page:', 'volta'),
        'section' => 'volta_page_options',
        'type'    => 'select',
		'priority'   => 90,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	$wp_customize->add_setting(
		'volta_show_title_page', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_title_page', array(
        'label'   => __('Show Title on Page:', 'volta'),
        'section' => 'volta_page_options',
        'type'    => 'select',
		'priority'   => 100,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	$wp_customize->add_setting(
		'volta_show_featured_image_page', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_featured_image_page', array(
        'label'   => __('Show Featured Image on Page:', 'volta'),
        'section' => 'volta_page_options',
        'type'    => 'select',
		'priority'   => 200,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	
	/* Archive Section */
   	$wp_customize->add_section( 'volta_category_page' , array(
		'title'      => __('Archive Pages Options', 'volta'),
		'priority'   => 920,
   	) );
	$wp_customize->add_setting(
		'volta_show_slider_categories', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_slider_categories', array(
        'label'   => __('Show Slider on Archive Pages:', 'volta'),
        'section' => 'volta_category_page',
        'type'    => 'select',
		'priority'   => 100,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
	$wp_customize->add_setting(
		'volta_show_excerpt_categories', array(
        'default'        => 'yes',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'volta_sanitize_yes_no',
    ));
	$wp_customize->add_control( 'volta_show_excerpt_categories', array(
        'label'   => __('Show Excerpt instead of content on Archive Pages:', 'volta'),
        'section' => 'volta_category_page',
        'type'    => 'select',
		'priority'   => 200,
        'choices' => array('yes'=>__('Yes', 'volta'), 'no'=>__('No', 'volta')),
    ));
		
}
add_action( 'customize_register', 'volta_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function volta_customize_preview_js() {
	wp_enqueue_script( 'volta_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'volta_customize_preview_js' );

function volta_sanitize_yes_no( $value ) {
    if ( ! in_array( $value, array( 'yes', 'no' ) ) ){
        $value = 'yes';
	}
    return $value;
}

function volta_sanitize_front_layout( $value ) {
    if ( ! in_array( $value, array( 'one', 'two', 'standard' ) ) ){
        $value = 'two';
	}
    return $value;
}