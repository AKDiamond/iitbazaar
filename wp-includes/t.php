<div class="navigation_menu "  data-spy="affix" data-offset-top="95" id="enigma_nav_top">
	<span id="header_shadow"></span>
	<div class="container navbar-container" >
		<nav class="navbar navbar-default " role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
				 
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
			</div>
			<?php wp_nav_menu( array(
            'exclude' => 'menu-item-188',
            'menu'              => 'primary',
            'theme_location'    => 'primary',               
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'menu',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'wlkr_bootstrap_navwalker::fallback',
			'walker'            => new wlkr_bootstrap_navwalker())
			); ?>
		</nav>
	</div>
</div>
