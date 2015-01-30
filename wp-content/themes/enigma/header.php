<!DOCTYPE html>
 <!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo $wl_theme_options['upload_image_favicon']; ?>" /> 
	<?php } ?>	
	<?php wp_head(); ?>
	
	

	
	
</head>

<body <?php body_class(); ?> id="">
<div>
	<!-- Header Section -->
	<div class="header_section" style="background-color:#418BB1;color:#00327C;position:fixed;z-index:999999999;width:100%;height:110px;top:0px;">
		<div class="container-fluid" >
			<!-- Logo & Contact Info -->
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div claSS="logo">						
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php 
					if($wl_theme_options['text_title'] =="on")
					{ echo get_bloginfo('name'); }
					else if($wl_theme_options['upload_image_logo']!='') 
					{ ?>
					<img class="img-responsive" src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
					<?php } else { ?> 
					Enigma
					<?php } ?>
					</a>
					<p><?php bloginfo( 'description' ); ?></p>	
					</div>
<div class="input-group">
	 <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>"> 	
		<input type="text" class="form-control"  name="s" id="s" placeholder="<?php esc_attr_e( "What do you want to find?", 'weblizar' ); ?>" />
<input type="hidden" class="form-control"  name="post_type" id="post_type" value="product" />
		<span class="input-group-btn">
		<button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
		</span>
	 </form> 

</div>
<?php 
if (is_user_logged_in()) {
echo '<a class="enigma_blog_read_btn animated bounceInUp" href="'.site_url().'/my-account/" role="button" style="left: 900px;top: -158px;position:relative;">MyAccount</a>';
echo '<a class="enigma_blog_read_btn animated bounceInUp" href="'.site_url().'/addproduct/" role="button" style="left: 950px;top: -158px;position:relative;">AddProduct</a>';
}
else {
echo '<a class="enigma_blog_read_btn animated bounceInUp" href="'.site_url().'/my-account/" role="button" style="left: 900px;top: -158px;position:relative;">Login/Signup</a>';
echo '<a class="enigma_blog_read_btn animated bounceInUp" href="'.site_url().'/addproduct/" role="button" style="left: 950px;top: -158px;position:relative;">AddProduct</a>';
}



		
?>
    
   


				</div>
				<?php if($wl_theme_options['header_social_media_in_enabled']=='on') { ?>
				<div class="col-md-6 col-sm-12">
				<?php if($wl_theme_options['email_id'] || $wl_theme_options['phone_no'] !='') { ?>
				<ul class="head-contact-info">
						<?php if($wl_theme_options['email_id'] !='') { ?><li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $wl_theme_options['email_id']; ?>"><?php echo $wl_theme_options['email_id']; ?></a></li><?php } ?>
						<?php if($wl_theme_options['phone_no'] !='') { ?><li><i class="fa fa-phone"></i><?php echo $wl_theme_options['phone_no']; ?></li><?php } ?>
				</ul>
				<?php } ?>



					<ul class="social">
					<?php if($wl_theme_options['fb_link']!='') { ?>
					   <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="Twiiter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']); ?>"><i class="fa fa-twitter"></i></a></li>
					<?php } if($wl_theme_options['linkedin_link']!='') { ?>					
					<li class="linkedin" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']); ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } if($wl_theme_options['youtube_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
	                <?php } ?>
					</ul>	
				</div>
				<?php } ?>
			</div>
			<!-- /Logo & Contact Info -->


<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header_sidebar') ) : 
 
endif; ?>
		</div>	
	</div>	
	<!-- /Header Section -->
	

                </div>
                </div>
                </body>
                </html>