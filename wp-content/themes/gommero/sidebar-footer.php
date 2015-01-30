<div class="grid_8 alpha">
    <div class="inner first">
        <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
            <?php dynamic_sidebar('first-footer-widget-area'); ?>
			<?php else : ?>
		<h4>Setting Footer Widgets</h4>
			Footer is widgetized. To setup the footer, drag the required Widgets in Appearance -> Widgets Tab in the First, Second or Third Footer Widget Areas.
        <?php endif; ?>
    </div>
</div>
<div class="grid_8">
    <div class="inner">
        <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
            <?php dynamic_sidebar('second-footer-widget-area'); ?>
			<?php else : ?>
		<h4>Archives Widget</h4>
					  <ul>
              <li><a href="#">January</a></li>
              <li><a href="#">February</a></li>
              <li><a href="#">March</a></li>
              <li><a href="#">April</a></li>
              <li><a href="#">August</a></li>
              <li><a href="#">September</a></li>
            </ul>
        <?php endif; ?>
    </div>
</div>
<div class="grid_8 omega">
    <div class="inner">
        <?php if (is_active_sidebar('third-footer-widget-area')) : ?>
            <?php dynamic_sidebar('third-footer-widget-area'); ?>
		<?php else : ?>
		<h4>All Links</h4>
					  <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
        <?php endif; ?>
    </div>
</div>
