<?php
/*
 * Template Name: Contact
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'title' ); ?>
<div id="fullwidth">
<?php get_template_part( 'content', 'introtext' ); ?>
	<section class="features">
    	<div class="container section" role="main">
        	<img src="<?php bloginfo('template_url') ?>/img/_delete/contact/contact.png" alt="Contact Retail Express" /><br /><br /><br />
        	<div class="row">
                	<div class="span6">
                    	<div class="row rel cform">
                			<?php gravity_form(1, false, false, false, '', true); ?>
                   		</div>
                    </div>
                    <div class="span5 offset1">
                    	<?php the_content(); ?>

                	</div>   
        	</div>
        </div>
       	<div class="container section noborder" role="main">
	        <img src="<?php bloginfo('template_url') ?>/img/bg-contact-us-map.png" alt="Contact Retail Express Map" />
    	</div>    
         
      </section>
    
    
    
    

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>