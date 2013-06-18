<?php get_header(); ?>
<div class="sliderContainer fullWidth clearfi" id="homeslider">
    <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
        <div class="rsContent retailshouldbe" data-rsDelay="6000">
          <img src="<?php bloginfo('template_url'); ?>/img/slide/retail-should-be.jpg" class="rsImg rsMainSlideImage" alt="The Way Retail Should Be"/>
          <div class="slidecaption rsABlock rsNoDrag" data-fade-effect="" data-move-offset="10" data-move-effect="left" data-speed="200">
            <h2>The retail should be</h2>
            <p>Retail Express delivers market leading cloud based Retail Operating Software, designed specifically to reduce costs,improve efficiency, and grow sales.</p>
          </div>
        </div>
        <div class="rsContent cloudretail" data-rsDelay="6000">
           <div class="rsABlock rsNoDrag" data-fade-effect="" data-move-offset="10" data-move-effect="top" data-speed="200"><h2>Cloud Retail Operating System</h2></div>
           <img src="<?php bloginfo('template_url'); ?>/img/slide/cloud-retail.jpg" class="rsImg rsMainSlideImage" alt="The Way Retail Should Be" />
        </div>
       <div class="rsContent" data-rsDelay="6000">
       		
          	<img src="<?php bloginfo('template_url'); ?>/img/slide/ease.jpg" class="rsImg rsMainSlideImage" alt="The Way Retail Should Be"  />
        </div>
        <div class="rsContent cloudretail" data-rsDelay="6000">
        	<div class="rsABlock rsNoDrag" data-fade-effect="" data-move-offset="10" data-move-effect="top" data-speed="200"><h2>Integrated eCommerce Solutions</h2></div>
          	<img src="<?php bloginfo('template_url'); ?>/img/slide/ecommerce.jpg" class="rsImg rsMainSlideImage" alt="The Way Retail Should Be"  />
        </div>
        <div class="rsContent showselling" data-rsDelay="6000">
          	<img src="<?php bloginfo('template_url'); ?>/img/slide/mobilepos.jpg" class="rsImg rsMainSlideImage" alt="The Way Retail Should Be"  />
            <div class="slidecaption rsABlock rsNoDrag" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
                <h2>ShowSelling<br />
– with Mobile POS</h2>
          </div>
        </div>
		 <div class="rsContent retailcloud" data-rsDelay="6000">
        	<div class="rsABlock rsNoDrag" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
            	<h2>Retail Cloud</h2>
                <p class="subhead">Multi-Store. Multi Channel</p>
            </div>
          	<img src="<?php bloginfo('template_url'); ?>/img/slide/retail-cloud.jpg" class="rsImg rsMainSlideImage" alt="The Way Retail Should Be"  />
        </div>        
    </div>
</div>
<section id="keyfeatures">
	<div class="container">
        <div class="keys">
            <div class="instore">
                <img src="<?php bloginfo('template_url'); ?>/img/bg-keyfeature-instore.png" alt="Instore Point of Sale System" />
                <div class="keyfeat">                    
                    <h3>Instore</h3>
                    <p>Engage. Sell. Grow.</p>
                </div>
            </div>
            <div class="backoffice">
                <img src="<?php bloginfo('template_url'); ?>/img/bg-keyfeature-backoffice.png" alt="Instore Point of Sale System" />
                <div class="keyfeat">
                    <h3>Backoffice</h3>
                    <p>Reduce costs. Streamline.</p>
                </div>
            </div>
            <div class="ecomm">
                <img src="<?php bloginfo('template_url'); ?>/img/bg-keyfeature-ecomm.png" alt="eCommerce Website Solutions" />
                <div class="keyfeat">
                    <h3>eCommerce</h3>
                    <p>Design. Build. Integrate. </p>
               </div>
        </div>
        </div>
        <div class="calltoaction">
            <a href="#" class="btn-watchvideo">Watch Video</a>
            <a href="#" class="btn-contact">Contact Us</a>
        </div>
    </div>
</section>


<section id="profits" class="block">
	<div class="container">
    	<h2>The way your profits should be</h2>
        <p class="subhead">Take the ROI Challenge</p>
        <div class="profit_input_desc">
        	<div class="c_input first">
            	How many stores do you have?
            </div>
            <div class="c_input">
            	Average monthly turnover per store?
            </div>
            <div class="c_input">
            	What is your average margin?
            </div>
            <div class="c_input">
            	Monthly hours
spent purchasing?
            </div>
            <div class="c_input last">
            	Monthly advertising
spend?
            </div>
        </div>
    </div>
    <div class="profit_inputs">
    	<div class="container">
              <div class="c_input first">
                  <input type="range" name="test" min="1" max="100" value="5" />
              </div>
              <div class="c_input">
                  <input type="range" name="test" min="100" max="300" value="150" />
              </div>
              <div class="c_input">
                  <input type="range" name="test" min="100" max="300" value="150" />
              </div>
              <div class="c_input">
                  <input type="range" name="test" min="100" max="300" value="150" />
              </div>
              <div class="c_input last">
                  <input type="range" name="test" min="100" max="300" value="150" />
              </div>
    	</div>    
    </div>
    <div class="profit_returns">
    	<div class="container rel">
        	<div class="return_head">
                <div class="rh oi">Optimised Inventory</div>
                <div class="rh irs">Increased Repeat Sales</div>
                <div class="rh oa">Optimised Advertising</div>
                <div class="rh tsp">Time Saved Purchasing</div>
                <div class="rh es last-b">eCommerce Sales</div>
            </div>
            <div class="profit_circle">
            	
                <span class="terms">
                Note: the projected results are speculative and should 
not be relied on as a guarantee.</span>
            
            </div>
        </div>  
    </div>
    <div class="profit_total">
    	<div class="container">
        	Total Annual Benefit
                $250,000
        </div>   	
    </div>
    
</section>

<section class="testimonials block">

	<div class="container">
    	<h2>Loved by thousands of retailers</h2>
        <p class="subhead">We’ve helped thousands of retailers run a better business</p>
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
            
           
            <div class="clear"></div>
    	</div>
        <!--/END CONTAINER -->
        <div class="container rel" id="clients">
        	<div class="row">
                <!--<div class="fadeleft"></div>
                <div class="faderight"></div>-->
                <div id="client-slider" class="royalSlider contentSlider rsDefault" >
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
                  
                     </div>
                <div class="clear">
               </div>
        </div>    		
    </div>
</section>

<section id="seo" class="block">
	<div class="container">
    	<h2>Australia’s Leading Point of Sale Software, Retail Management Software</h2>
        <div class="row">
        	<div class="span6"><p>Choosing the best POS software can be a challenge in a crowded retail sector dramatically impacted by changing consumer spending patterns and growing online competition. For medium to large businesses, Retail Express offers a significant advantage over other POS systems.</p><p>Since 2006, Retail Express ahs been the market leading cloud-based retail point of sale solution in Australia, delivering real-time access to all operational and financial data right across the business -- driving productivity, efficiency, enhancing customer service and informing better decision making.</p>
<h3>Easy-to-use POS Software in the Cloud</h3>
<p>Accessible anywhere, anytime via the cloud, Retail Express enables retailers to control every aspect of the business.  Our comprehensive POS solutions encompass the full spectrum of functionality, including point of sale, inventory management, integrated webstore, loyalty programs, marketing, business intelligence, and logistics.</p></div>
            <div class="span6"><p>Tight integration between all modules allows management to monitor and respond to changes in every aspect of the business in real-time -- via on-demand access to real-time information, including, sales figures, costs, margins, gross profits, inventory control and valuations, forecast projections, reviews and more.</p><h3>POS Systems that Enable Confident Business Decisions</h3>
<p>Retail Express POS software provides improved visibility into the business, enabling retailers to make better-informed decisions daily. It allows your organisation to respond faster to changing market conditions and competitive threats. Unique among point-of-sale solutions, it reduces the work associated with opening up new stores, and makes mobile point of sale, pop-up shops and kiosks easier and more cost-effective to manage.</p>

            
            </div>        
        </div>
    </div>
</section>

<?php get_footer(); ?>