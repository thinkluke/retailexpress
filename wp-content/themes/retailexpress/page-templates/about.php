<?php
/*
 * Template Name: about
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'title' ); ?>
<div id="about">
<?php get_template_part( 'content', 'introtext' ); ?>
	<section> 
    	<div class="container section" role="main">
    		<div class="row">
            	<div class="span3">
                	<div class="aboutnav">
                        <h5>Retail Express</h5>
                        <?php wp_nav_menu( array( 'theme_location' => 'about', 'container' => 'div', 'container_class' => '', 'menu_class' => 'nav' ) ); ?>
                    </div>
                </div>
                <div class="span9">
					  <?php the_content(); ?>
                      <!-- ABOUT PAGE FEATURES -->
                      <?php if(get_field('features')) : while(has_sub_field('features')) : ?>
                          <div class="aboutfeatures">
                              <div class="row">
                                  <div class="span1">
                                      <?php $image = get_sub_field('feature_icon'); ?>
                                      <img src="<?php echo $image[url]; ?>" alt="<?php $image[alt]; ?>" />
                                  </div>
                              <div class="span8">                           
                                  <h3><?php the_sub_field('feature_title') ?></h3>
                              </div>
                              </div>   
                              <?php the_sub_field('feature_description') ?>
                          </div>
                      <?php endwhile; endif; ?>
                      
                      <!-- TEAM MEMEBERS -->
                      <?php if(get_field('team_member')) : while(has_sub_field('team_member')) : ?>
                          <div class="aboutteam">
                              <div class="row">
                                  <div class="span2">
                                      <?php
                                      $image = get_sub_field('profile_picture'); 
                                      if($image) : ?>
                                          <img src="<?php echo $image[url]; ?>" alt="<?php $image[alt]; ?>" />
                                      <?php endif; ?>
                                  </div>
                              <div class="span7">                           
                                  <h3><?php the_sub_field('name') ?></h3>
                                  <span class="position"><?php the_sub_field('position') ?></span>
                                  <?php the_sub_field('description') ?>
                              </div>
                              </div>   
                          </div>
                      <?php endwhile; endif; ?>
                      
                      <!-- JOB OPENINGS -->
                      <?php if(get_field('job')) : while(has_sub_field('job')) : ?>
                          <h3>Open Positions</h3>
                          <div class="aboutfeatures">
                              <div class="row">
                              <div class="span9">                           
                                  <h3><?php the_sub_field('title') ?></h3>
                                  <span class="position"><?php the_sub_field('position') ?></span>
                                  <?php the_sub_field('description') ?>
                              </div>
                              </div>   
                          </div>
                      <?php endwhile; else : ?>
                          <p>Sorry there are currently no positions available</p>
                      <?php endif; ?>
                </div>                
            </div>
         </div>
    </section>
</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
