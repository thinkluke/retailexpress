<?php
/**
 * The sidebar containing the Feature Links
 *
 */
?>

<h5>Features</h5>
<?php wp_nav_menu( array( 'theme_location' => 'features', 'container' => 'div', 'container_class' => 'nav-collapse collapse', 'menu_class' => 'nav' ) ); ?>
   
<?php if ( is_active_sidebar( 'articles' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'articles' ); ?>
	</div><!-- #secondary -->
<?php endif; ?>