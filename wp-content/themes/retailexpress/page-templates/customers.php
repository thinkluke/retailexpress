<?php
/*
 * Template Name: customers
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'title' ); ?>
<div id="testimonials">
<?php get_template_part( 'content', 'introtext' ); ?>
	<section> 
    	<div class="container section sixpoints" role="main">
    		<div class="row">
            	
            	<!-- testimonials -->
				<?php 
                $page_id = 8;
                if( get_field( 'customers', $page_id ) ):
                    while( has_sub_field( 'customers', $page_id ) ): $i++ ?>
                    
                    <div class="span4">
                        <?php $attachment_id = get_sub_field('video_image');
                        $size = "testimonials"; // (thumbnail, medium, large, full or custom size)
                        $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
                        <a href="#myModal-<?php echo $i; ?>" role="modal" data-toggle="modal" class="customer-modal">
                            <img src="<?php echo $image[0]; ?>" />
                        </a>
                        <div class="test-desc">
                            <span class="play"><i class="icon-play icon-white"></i></span>
                            <h4><?php the_sub_field('store_name'); ?></h4>
                           
                            <span class="stores"><i class="icon-home icon-white"></i> <?php the_sub_field('number_of_stores'); ?> Stores</span>
                        </div>
                    </div>
                    
                    <!-- Modal -->
                    <div id="myModal-<?php echo $i; ?>" class="modal hide fade customervideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel"><?php the_sub_field('store_name'); ?></h3>
                      </div>
                      <div class="modal-body" id="video">
                        <?php /*?><img src="<?php bloginfo('template_url'); ?>/img/_delete/testimonials/petbiz-video.jpg" /><?php */?>
                        <?php the_sub_field('video_code'); ?>
                      </div>
                    </div>
                    
                    
                    <?php if ($i == 6) break;
                    endwhile;
                endif;
                ?>
     		</div>
    	</div>
        
         <!--/END CONTAINER -->
        <div class="container section clients-inner rel" id="clients">
        	<div class="row">
                	<div class="fadeleft"></div>
               		<div class="faderight"></div>
                        <?php
                        $c = 0;
                        $images = get_field('clients', '8');
                        if( $images ): 
                            echo '<div>';
                                 foreach( $images as $image ): ?>
                                    <div class="span3">
                                        <img src="<?php echo $image['sizes']['client-logo']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </div>
                                <?php
                                $c++; 
                                if($c % 8 == 0) echo '</div><div>';
                                endforeach;
                                
                                 echo '</div>'; ?>
                               
                        <?php endif; ?>            
                      
         	<div class="clear"></div>
        </div>    		
        </div> 
        
        <!--/END CONTAINER -->
        <div class="container section text-center" id="casestudies">
        	<h2>Case Studies</h2>
        	<div class="row">
            	<div class="span4">
                	Case 
                </div>
                <div class="span4">
                	Case 
                </div>
                <div class="span4">
                	Case 
                </div>
            
            </div>
        </div> 
    </section>
</div>
<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
