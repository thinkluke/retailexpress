<?php /* The template used for displaying page content in page.php */ ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="page-title">
			<h1><?php the_title(); ?></h1>
		</header>
		<div class="entry-content articlepad">
			<?php the_content(); ?>
			  <?php if(get_field('is_article')): ?>
                  <?php $this_page_id=$wp_query->post->ID; ?>
                  <ul>
                      <?php
                      query_posts(array('showposts' => -1, 'post_parent' => $this_page_id, 'post_type' => 'page'));
                      while (have_posts()) : the_post(); ?>
                          <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if(get_field('page_overview')){ the_field('page_overview'); } else { the_title(); } ?></a></li>
                      <?php endwhile; ?>
                  </ul>
              <?php endif; ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rex' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php /* edit_post_link( __( 'Edit', 'rex' ), '<span class="edit-link">', '</span>' ); */?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
    
   <?php if(get_field('bottom_seo_text')) : ?>
   		<div class="extraseotext">
			<?php the_field('bottom_seo_text'); ?> 
        </div>  
   <? endif; ?>
    
    
    
    