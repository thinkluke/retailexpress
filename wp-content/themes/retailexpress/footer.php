<section id="contact-footer" class="block">
	<div class="container">
    	<div class="row">
        	<div class="span6 rel cblock">
            	<h2>Contact Us</h2>
            	<?php gravity_form(1, false, false, false, '', true); ?>
            </div>
        
        </div>	
            
    </div>
</section>


<footer id="footer" role="contentinfo">
	<div class="container-fluid bgfooter">
    	<div class="row-fluid">
        	<div class="con"></div>
         </div>
    </div>
	<div class="container">
    	<div class="row">
        	<div class="span9 block">
            	<div class="row footerlist">
                    <div class="span2">
                        <h5>Retail Express</h5>
                        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => 'div', 'container_class' => '', 'menu_class' => 'nav' ) ); ?>
                    </div>
                    <div class="span2">
                        <h5>Features</h5>
                        <?php wp_nav_menu( array( 'theme_location' => 'features', 'container' => 'div', 'container_class' => '', 'menu_class' => 'nav' ) ); ?>
                    </div>
                    <div class="span5">
                        <h5>Latest Articles</h5>
                        <?php $products = new WP_Query( 'posts_per_page=5' );
                            // start the wordpress loop!
							echo "<ul>";
                            while ( $products->have_posts() ) : $products->the_post();  ?>
                            	<li>
                           			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            	</li>
                            
                        <?php endwhile;
							echo "</ul>";
						?>
                        <a href="<?php bloginfo('template_url'); ?>/blog/" class="blue">View all</a>
                    </div>
                 </div>
                 
                 <div class="row">
                 	<div class="span9 flinks fkeys">
                    	<?php wp_nav_menu( array( 'theme_location' => 'footer-seo-links', 'container' => 'div', 'container_class' => '', 'menu_class' => 'nav' ) ); ?>
                    </div>
                 </div>
                 <div class="row">
                 	<div class="span9 flinks sociallinks">
                    	<div class="fb-like" data-href="https://www.facebook.com/RetailExpress" data-send="false" data-layout="button_count" data-width="125" data-show-faces="false"></div>
                        <a href="https://www.facebook.com/RetailExpress" class="fb" target="_blank"></a>
                        <a href="#" class="twitter" target="_blank"></a>
                        <a href="#" class="vimeo" target="_blank"></a>
                        <a href="#" class="youtube" target="_blank"></a>
                        <a href="#" class="linkedin" target="_blank"></a>
                    </div>                 
                 </div>
                 <div class="row">
                 	<div class="span9 flinks">
                    	© <?php the_date('Y'); ?> <a href="<?php echo esc_url( __( 'http://www.retailexpress.com.au/', 'rex' ) ); ?>" title="<?php esc_attr_e( 'Australia’s Leading Point of Sale Software', 'rex' ); ?>">Retail Express</a> &bull;  Sitemap  &bull;  Privacy Policy
                    </div>
                 </div>
                 
                 
            </div>  
			<div class="contactdetails block">
            	<h5>Contact Us</h5>
                Phone <strong>1300 732 618</strong><br />
                Headquarters <strong>+617 3105 2830</strong><br />
                email <a href="mailto:info@retailexpress.com.au"><strong>info@retailexpress.com.au</strong></a>
                <br /><br />
                <h5>HeadQuarters</h5>
                Level 5, 45 Brisbane Rd, <br />
                Mooloolaba, QLD, 4557<br />
                Phone <strong>+617 3105 2830</strong>
                <br /><br />
                <h5>United Kingdom</h5>
                4 Claridge Court, Lower Kings Rd<br />
                Berkhamsted, Herts, HP4 2AF<br />
                Phone <strong>0800 069 9834</strong><br />
                <br />
                <h5>New Zealand</h5>
                Level 14, Vodafone on the Quay<br />
                157 Lambton Quay,<br />
                Wellington, 6011<br />
                Phone <strong>04 831 0713</strong>
            </div>
        </div>    
    </div>
</footer>
<?php wp_footer(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=197425410358084";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>