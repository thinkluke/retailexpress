<?php
/*
 * Template Name: Full Width
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'title' ); ?>
<div id="contact">
<?php get_template_part( 'content', 'introtext' ); ?>
	<section class="features">
    	<div class="container section" role="main">
        	<div class="row">
            	<div class="span12">
                	<?php get_template_part( 'content', 'page' ); ?>
                </div>
        	</div>
        </div>
	</section>
</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>