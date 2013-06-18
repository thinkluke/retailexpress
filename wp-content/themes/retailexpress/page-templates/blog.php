<?php
/*
 * Template Name: Blog
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'title' ); ?>
<div id="blog">
<?php get_template_part( 'content', 'introtext' ); ?>
	<section class="features">
    	<div class="container" role="main">
        	<div class="row">
            	<div class="span9">
                	<p><em>Articles, News & Info on Retailing, EPOS Software Systems</em></p>
                    <?php the_content(); ?>
                    <div class="blogholder">
                    	<?php $blog_posts = new WP_Query( 'post_type=post&posts_per_page=10&paged=' . $paged ); ?>
	 					<?php $i = 0; 
							while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                    		<div <?php ++$i; if($i == 10) { echo 'class="last row"'; $i = 0; } else { echo 'class="row"'; }  ?>>
                            	<div class="span1">
                                	<span class="day"><?php echo get_the_date('j'); ?></span>
									<span class="month"><?php echo get_the_date('M'); ?></span>
                                    <span class="year"><?php echo get_the_date('Y'); ?></span>
                                </div>
                              	<div class="span8">
                                	<div class="articlepad">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'rex' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <?php echo content(80); ?>
                                        <a href="<?php the_permalink(); ?>" class="#">Read More</a>
                                	</div>
                             	</div>
                             </div>
                    	<?php endwhile;  ?>
                </div>
                </div>
                <div class="span3 sidebar">
                	<div class="blognav">
                    	<?php get_sidebar(); ?>
   					</div>
                </div>
                
        	</div>
        </div>
	</section>
 </div>    
    <div class="clearfix"></div>
                <?php
				if(function_exists('wp_pagenavi')) { 
							wp_pagenavi( array(
								'query' => $blog_posts   
							)); 
						}
						 wp_reset_query();
						 ?>           
    
    

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>