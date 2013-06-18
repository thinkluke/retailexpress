<?php
/*
 * Template Name: eCommerce
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'title' ); ?>
<div id="ecomm">
<?php get_template_part( 'content', 'introtext' ); ?>
    <section> 
      <div class="container section sixpoints" role="main">
        <div class="row">
        	<div class="span4">
            	<div class="row">
                	<div class="span1">
                    	<img src="<?php bloginfo('template_url');?>/img/_delete/ecommerce/icon-integrated-mobile.png" alt="Integrated Mobile Web Store" /> 
                    </div>
                    <div class="span3">
            			<h4>Fully Integrated Mobile and Web Stores</h4> 
                    </div>
                </div>
            </div>
            <div class="span4">
            	<div class="row">
                	<div class="span1">
                    	<img src="<?php bloginfo('template_url');?>/img/_delete/ecommerce/icon-search-engine-optimisation.png" alt="Integrated Mobile Web Store" /> 
                    </div>
                    <div class="span3">
            			<h4>Search Engine Optimisation</h4> 
                    </div>
                </div>
            </div>
            <div class="span4">
            	<div class="row">
                	<div class="span1">
                    	<img src="<?php bloginfo('template_url');?>/img/_delete/ecommerce/icon-content-management-system.png" alt="Integrated Mobile Web Store" /> 
                    </div>
                    <div class="span3">
            			<h4>Content Development and Marketing</h4>
                    </div>
                </div>
            </div>
            <div class="span4">
            	<div class="row">
                	<div class="span1">
                    	<img src="<?php bloginfo('template_url');?>/img/_delete/ecommerce/icon-website-optimisation.png" alt="Integrated Mobile Web Store" /> 
                    </div>
                    <div class="span3">
            			<h4>Website Optimisation and Analytics</h4>
                    </div>
                </div>
            </div>
            <div class="span4">
            	<div class="row">
                	<div class="span1">
                    	<img src="<?php bloginfo('template_url');?>/img/_delete/ecommerce/icon-store-population.png" alt="Integrated Mobile Web Store" /> 
                    </div>
                    <div class="span3">
            			<h4>Store Population</h4>
                    </div>
                </div>
            </div>
            <div class="span4">
            	<div class="row">
                	<div class="span1">
                    	<img src="<?php bloginfo('template_url');?>/img/_delete/ecommerce/icon-site-refreshes.png" alt="Integrated Mobile Web Store" /> 
                    </div>
                    <div class="span3">
            			<h4>Site Refreshes</h4>
                    </div>
                </div>
            </div>
        </div>
      </div>
</section>
<section id="liveintegration">
    <div class="container section text-center rel" role="main">
          <h2>Live Integration</h2>
          <p class="subhead">Deep integration between back-office and ecommerce. </p>
       	  <img src="<?php bloginfo('template_url');?>/img/_delete/ecommerce/live-integration.png" alt="Live Website Integration" class="livediagram" />
    
    </div>
    <div class="leftred"></div>
    <div class="rightgreen"></div>
	<div class="container rel">
    	<div class="row livepoints">
        	<div class="span4">
            	<div class="bgred">
                	<ul>
                        <li>Intelligent Point of Sale</li>
                        <li>Smarter Stock Control</li>
                        <li>Sales Promotion Tools</li>
                        <li>Real-time Dashboard Reports</li>
                        <li>Real-time, Multi-store Data</li>
                        <li>Remote Access 24/7, Anywhere</li>
                    </ul>
                </div>
            </div>
            <div class="span4">
            	<div class="bgblue">
                	<ul>
                        <li>Customers</li>
                        <li>Products</li>
                        <li>Orders</li>
                        <li>Pricing</li>
                        <li>Stock Levels</li>
                    	<li>Vouchers</li>
                	</ul>
           		</div>
            </div>
            <div class="span4">
            	<div class="bggreen">
                	<ul>
                        <li>Full eCommerce Suite</li>
                        <li>Product Browsing</li>
                        <li>Multiple Payment Providers</li>
                        <li>Full Design Control</li>
                        <li>Endless Expandability</li>
                        <li>Search Engine Friendly</li>
                	</ul>
                </div>
            </div>      	
        </div>
    </div>
</section>
   
    
   <h2>Webstore Packages</h2>
    
    
    
    
    
</div>
<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
