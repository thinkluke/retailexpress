<?php
/*
 * Template Name: Cloud
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'title' ); ?>
<div id="cloud">
<?php get_template_part( 'content', 'introtext' ); ?>
<section class="cloud"> 
  <!--  Obsolete Model -->
  <div class="container section" role="main">
    <h2>Obsolete Model</h2>
    <br />
    <div class="row">
      <div class="span10 offset1 rel"> <img src="<?php bloginfo('template_url');?>/img/_delete/cloud/obsolete-retail-software.png" class="obsolete" /> <img src="<?php bloginfo('template_url');?>/img/_delete/cloud/obsolete-retail-software-overlay.gif" class="gifoverlay" /> </div>
    </div>
  </div>
</section>
<section class="cloud newcloud"> 
  <!--  New generation model-->
  <div class="container section" role="main">
    <h2>New Generation Model</h2>
    <div class="row">
      <div class="span10 offset1 rel"> <img src="<?php bloginfo('template_url');?>/img/_delete/cloud/new-model-retail-cloud-software.png" /> <img src="<?php bloginfo('template_url');?>/img/_delete/cloud/new-model-retail-cloud-software-overlay.gif" class="gifoverlay" /> </div>
    </div>
  </div>
</section>
<section class="cloud cloudadv">
  <div class="container section" role="main">
    <h2>Advantages of the Retail Cloud</h2>
    <p class="intro">The Retail Cloud delivers real-time access to all operational and financial data from right across the business, driving productivity and efficiency, enhancing customer service and informing better decision-making.</p>
    <div class="row">
      <div class="span6">
        <h3>Single & Central Database for All Stores</h3>
        <ul>
          <li>No polling of data between store locations and head office 
            – eliminating data corruption forever</li>
          <li>One centralised pool of Inventory, Customer and Transactional        
            records – ‘one version of the truth’</li>
          <li>Live, real time information – so that you can rely on accurate 
            data, to the second.</li>
        </ul>
        <h3>Reliability and Security</h3>
        <ul>
          <li>99.9% network uptime guarantee – via $85M Data Centre (this 
            would otherwise be cost prohibitive for SME businesses to
            replicate in their own environment)</li>
          <li>State of the art security infrastructure that offers your business        
            the best change of system and data security (this would 
            otherwise be cost prohibitive for SME businesses to replicate 
            in their own environment)</li>
        </ul>
        <h3>Omni-Channel Efficiencies</h3>
        <ul>
          <li> The Retail Cloud supports a real-time Omni-Channel strategy, 
            allowing  retailers to operate transparently, providing real time
            stock levels on their website, along with accurate store and 
            online order history details. The seamless integration between
            physical and online stores makes the interchange of data occur 
            in real-time – rather than on a batched basis – which ultimately
            improves efficiency, greatly reduces Administrative costs and
            enhances the customer buying experience. This improved 
            efficiency also speeds up the fulfilment of online orders, 
            reducing the time customers have to wait for their product</li>
        </ul>
        <h3>Scalability for Business Expansion</h3>
        <ul>
          <li> Faster, cheaper and easier deployment of new store locations 
            (traditional hardware and software requirements are eliminated)</li>
          <li>Pop-Up Shops, Kiosks, and Remote / Mobile Selling is instantly 
            accessible via the Retail Cloud</li>
        </ul>
      </div>
      <div class="span6">
        <h3>Ease of Remote Access</h3>
        <ul>
          <li>24/7 Live access to monitor and control the business, any 
            device, any location – no matter where you are in the world.</li>
        </ul>
        <h3>Substantially Lower IT Costs</h3>
        <ul>
<li>No hardware investment in expensive servers</li>
        <li>No investment in server software</li>
        <li>No ongoing administration & management costs associated 
        with IT</li>
        <li>Software upgrades are deployed by us overnight, directly to 
        your database</li>
</ul>
        <h3>Improved Customer Service Capabilities</h3>
       <ul>
 <li>Customer transactional and profile information is accessible 
        in real-time across all stores, enabling higher levels of customer
        service levels</li>
        <li>Supply chain and product availability information is visible by 
        sales staff at store level, enabling accurate information for 
        customer orders</li>
        <li>Improved Operational Efficiencies</li>
        <li>Merchandise planning and store replenishment is more 
        accurate and faster due to live information flows</li>
        <li>Logistics and warehouse processes are streamlined by having </li>
        <li>access to real-time supply and demand information
        <li>Administration functions can be performed in less time, and more 
        accurately, due to centralisation of data.</li>
</ul>
</div>
    </div>
  </div>
</section>
<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
