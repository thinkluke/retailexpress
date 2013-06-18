<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'title' ); ?>
<div id="blog">
<?php get_template_part( 'content', 'introtext' ); ?>
	<section> 
    	<div class="container" role="main">
    		<div class="row">
                <div class="span9" role="main">
					<div class="post"><?php get_template_part( 'content', 'page' ); ?></div>
				</div>    
                <div class="span3 sidebar">
                	<div class="blognav">
                    	<?php get_sidebar('articles'); ?>
   					</div>
                </div>
            </div>
         </div>
    </section>
</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>