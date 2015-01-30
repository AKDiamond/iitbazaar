
<div class="footer-widget-container">

	<div class="footer-widgets">
    		<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'volta' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>
    </div>
    
    <div class="footer-widgets">
    		<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'volta' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>
    </div>
    
    <div class="footer-widgets-right">
    		<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'volta' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>
    </div>

</div><!-- footer-widgets -->