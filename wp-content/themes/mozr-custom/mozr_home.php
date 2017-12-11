<?php
 /*
 Template Name: MOZR Home Template
 */
 get_header(); ?>
 
     <div class="row jumbotron">
         <div class="container jb-mobile" style="margin-top: 90px">
             <br>
             <div class="col-md-6 col-md-offset-6">
                 <h1 class="home-title">
                     We Scale <br>
                     Wordpress & <br>
                     WooCommerce <br>
                     Sites
                 </h1>
                 <button class='blue-btn'>Learn More</button><button class='orange-btn'>Join Our Waiting List</button>
             </div>
             <img src="<?php echo get_stylesheet_directory_uri() ?>/img/shape-0.png" class='shape-0' alt="">
         </div>
     </div>
 
     </div><!-- Content  -->
 </div> <!-- Row  -->
 
 <div class="shape-1-container" style='background-color:white'>
     <div class="container">
 
         <div class='shape-1'>
             We have everything to make your store lighting fast and handle huge traffic spikes
         </div>
         <h2 class='h2-title adjust-top'>Our Model For Scaling</h2>
         <p class='p-opensans adjust-top'>Say goodbye to disputes around data definitions, governance and metrics. Periscope Data is the single source of truth for all your data.</p>
     </div>
 </div>
 
 <div class="row shape-3">
     <div class="container">
         <div class="col-md-5 col-md-offset-1">
             <h3 class='h3-title'>Dedicated <br> Hardware <br>. . .</h3>
             <p class='p-opensans p-dedicated-hardware'>
                 The first component for scaling your website is to have good hardware that is dedicated to you.  Most web hosting companies put hundreds of websites on the same hardware and then charge each company a fraction of the server cost.  This is great if you want to keep costs low but is really detrimental when another site is hogging all of the hardware resources.  If you want to scale your website the fastest way to make major improvements is to get on a host that will dedicate hardware resources to your site and your site alone.  We leverage the Amazon Web Services Elastic Compute Cloud to deliver best in class hardware resources dedicated to your site.
             </p>
         </div>
         <di class="col-md-6">
             <img class='shape-2' src="<?php echo get_stylesheet_directory_uri() ?>/img/shape-2.png" alt="hardware">
         </di>
     </div>
 </div>
 
 <div class="row shape-4">
     <div class="container">
         
         <di class="col-md-5 col-md-offset-1">
             <img class='shape-5' src="<?php echo get_stylesheet_directory_uri() ?>/img/shape-5.png" alt="hardware">
         </di>
         <div class="col-md-4 ">
             <h3 class='h3-title '>Server <br> Software <br></h3>
             <p class='p-opensans p-dedicated-hardware'>
                 Once you have your store running on the proper hardware it is time to look the Server Software. We take advantage for the highest performance server software stack available forWordpress.  LOGOS (NGINX, REDIS, ELASTIC SEARCH,  AMAZON AURORA)
             </p>
         </div>
     </div>
 </div>
 
 <div class="row shape-6">
     <div class="container">
         <div class="col-md-5 col-md-offset-1">
             <h3 class='h3-title color-blue'>Caching <br> . . . <br></h3>
             <p class='p-opensans p-dedicated-hardware'>
                 Proper caching is the key to speed and scale.  When you host your site with MOZR you will get our best in class multi tier caching system
             </p>
         </div>
         <di class="col-md-6">
             <img class='shape-7' src="<?php echo get_stylesheet_directory_uri() ?>/img/shape-7.png" alt="hardware">
         </di>
     </div>
 </div>
 
 <div class="">
     <div class="container">
         <div class="col-md-8 col-md-offset-2">
             <div class="bg-tier-1" style='padding: 0px'>
                 <span class='tier'>
                     Tier 1
                 </span>
                 <span class='tier-title'>
                     Asset Caching
                 </span>
                 <span class='tier-more'>
                     more <img src="<?php echo get_stylesheet_directory_uri() ?>/img/right.png" class='right-row' alt="">
                 </span>
             </div>
             <div class="bg-tier-2" style='padding: 0px'>
                 <span class='tier'>
                     Tier 2
                 </span>
                 <span class='tier-title'>
                     Static Page Caching
                 </span>
                 <span class='tier-more'>
                     more <img src="<?php echo get_stylesheet_directory_uri() ?>/img/right.png" class='right-row' alt="">
                 </span>
             </div>
             <div class="bg-tier-3" style='padding: 0px'>
                 <span class='tier'>
                     Tier 3
                 </span>
                 <span class='tier-title'>
                     Database Caching
                 </span>
                 <span class='tier-more'>
                     more <img src="<?php echo get_stylesheet_directory_uri() ?>/img/right.png" class='right-row' alt="">
                 </span>
             </div>
 
             <div class="bg-tier-4" style='padding: 0px'>
                 <span class='tier'>
                     Tier 4
                 </span>
                 <span class='tier-title'>
                     Op Cache
                 </span>
                 <span class='tier-more'>
                     more <img src="<?php echo get_stylesheet_directory_uri() ?>/img/right.png" class='right-row' alt="">
                 </span>
             </div>
 
             <div class="bg-tier-5" style='padding: 0px'>
                 <span class='tier'>
                     Tier 5
                 </span>
                 <span class='tier-title'>
                     Object Caching
                 </span>
                 <span class='tier-more'>
                     more <img src="<?php echo get_stylesheet_directory_uri() ?>/img/right.png" class='right-row' alt="">
                 </span>
             </div>
         </div>
     </div>
 </div>
 
 <div class="row shape-8">
     <div class="container">
         
         <di class="col-md-5 col-md-offset-1">
             <img class='shape-9' src="<?php echo get_stylesheet_directory_uri() ?>/img/shape-9.png" alt="hardware">
         </di>
         <div class="col-md-4 ">
             <h3 class='h3-title color-darkblue'>Code <br> . . . <br></h3>
             <p class='p-opensans p-dedicated-hardware'>
                 The final place to look for optimizations for your site is in the code itself. MOZR offers professional development services to audit your code and give suggestions on how you can modify your code to make your site run faster.
             </p>
         </div>
     </div>
 </div>
 
 <div class=" latest-post">
     <div class="container">
         <h3 class='h3-title'>Latest Post</h3>
         <?php 
             $args = array(
                     'numberposts' => 2,
                     'offset' => 0,
                     'category' => 0,
                     'orderby' => 'post_date',
                     'order' => 'DESC',
                     'include' => '',
                     'exclude' => '',
                     'meta_key' => '',
                     'meta_value' =>'',
                     'post_type' => 'post',
                     'post_status' => 'draft, publish, future, pending, private',
                     'suppress_filters' => true
                 );
 
             $lastposts = wp_get_recent_posts( $args, ARRAY_A );
 
             foreach ( $lastposts as $post ) :
                         setup_postdata( $post ); ?>
                 <div class="col-md-6">
                     <div class="post-container">
                         <div class="post-category">
                             <a href="<?php echo get_site_url() ?>/blog/?category=<?php echo get_the_category()[0]->cat_ID; ?>"><?php echo get_the_category()[0]->cat_name; ?></a>
                         </div>
                         <img src="<?php echo the_post_thumbnail_url() ?>" alt="Feature Image">
                         <div class='blog-content'>
                             <p class='post-date'><?php echo get_the_date()?></p>
                             <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                             <p class='post-description'>
                                 <?php echo get_the_excerpt(); ?>
                             </p>
                             <a href="<?php the_permalink(); ?>">
                                 <div class="read-this">
                                     Read this post
                                 </div>
                             </a>
 
                             <a href="" class='post-author'>By <?php echo get_the_author()?></a>
                         </div>
                     </div>
                 </div>
         <?php
             endforeach; 
         ?>
     </div>
 </div>
 
 <div class=" interested-mozr">
     <div class="container">
         <h3 class='h3-title color-white'>Interested in Switching to MOZR? </h3>
         <button class="orange-btn">
             Join Our Waiting List
         </button>
     </div>
 </div>
 
 <div class=""> <!-- row -->
     <div id="content" class="container"> <!-- container -->
 
 <?php
 get_footer();