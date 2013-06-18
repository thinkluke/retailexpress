<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 */
?>

<article id="post-<?php the_ID(); ?>" class="row post">
	<div class="span1">
    <span class="day"><?php echo get_the_date('j'); ?></span>
    <span class="month"><?php echo get_the_date('M'); ?></span>
    <span class="year"><?php echo get_the_date('Y'); ?></span>
</div>
<div class="span8">
	<div class="articlepad">

		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'rex' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<?php the_post_thumbnail(); ?>
            
			<?php if ( is_single() ) : ?>
			<h1><?php the_title(); ?></h1>
			<?php else : ?>
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'rex' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'rex' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rex' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>
	
		<footer class="entry-meta">
			<?php // rex_entry_meta(); ?>
			<?php /* edit_post_link( __( 'Edit', 'rex' ), '<span class="edit-link">', '</span>' );*/ ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'rex_author_bio_avatar_size', 68 ) ); ?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'rex' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'rex' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
        <?php /* Disable Comments * if ( comments_open() ) : ?>
              <div class="comments-link">
                  <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'rex' ) . '</span>', __( '1 Reply', 'rex' ), __( '% Replies', 'rex' ) ); ?>
              </div><!-- .comments-link -->
		<?php endif; // comments_open() */ ?>
        </div>
        </div>
	</article><!-- #post -->

<div class="pagination">
	<ul>
  	  	<li><?php next_post_link('%link'); ?></li>
    	<li><?php previous_post_link('%link'); ?> </li>
    </ul>
</div>