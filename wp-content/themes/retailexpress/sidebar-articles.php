<?php
/**
 * The sidebar containing the article links
 *
 */
?>
<?php 

query_posts( array(
	'showposts' => -1,
	'post_type' => 'page',
	'post_parent' => 0,
	'orderby' => 'title',
	'order' => 'ASC',
	'meta_query' => array( 
		array(
			'key' => 'is_article',
			'value' => '1',
			'compare' => '=='
			) 
		)
	));
	echo '<ul>';
	while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; 
	echo '</ul>';
	wp_reset_query(); ?>
    
	<?php if ( is_active_sidebar( 'articles' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'articles' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
	
    
    <?php /*
	$parent_title = get_the_title($post->post_parent);
	$permalink = get_permalink($post->post_parent);
	if ( is_page() ) {
		if($post->post_parent)
		$children = wp_list_pages('sort_column=menu_order&title_li=&child_of='.$post->post_parent.'&echo=0'); else
		$children = wp_list_pages('sort_column=menu_order&title_li=&child_of='.$post->ID.'&echo=0');
			if ($children) { ?>
	<h3><a href="<?php echo $permalink; ?>"><?php echo $parent_title; ?></a></h3>
	<ul class="sidenav clearfix">
		<?php echo $children; ?>
	</ul>
	<?php } else { ?>
	<h1 class="maintitle">
		<?php the_title(); ?>
	</h1>
	<?php }  ?>
	<?php } */?>