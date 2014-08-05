<?php

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php get_header(); ?>

</head>
<body>
<div id="bg_noise"> 
    <div id="bg_top"> 
        <div id="bg_spotlight">
        	<div class="national_website_tile">
                <a href="http://www.homehardware.com.au" target="_blank">
                    <img src="<?php bloginfo('template_directory');?>/images/hh_site_tile.png" width="132" height="106" alt="National Home Hardware Website" />
                </a>
            </div>    
            <div id="wrapper"> 
            	<div id="logos"> 
                   <div id="hh_logo"> 
                    	<a href="index.html"><img width="193" alt="Home Hardware - The Proper Hardware Store" src="<?php bloginfo('template_directory');?>/images/logo.png" /></a>
                   </div>
                   <div id="store_name"> 
                   		<img width="169" height="91" alt="oops!" src="<?php bloginfo('template_directory');?>/images/pb_sign_banner.jpg" />
                   </div>
            </div> 
                <div id="menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </div>                 
                <div id="centre_col"> 
                    <!-- Hero Image -->
                  <?php echo do_shortcode("[huge_it_slider id='2']"); ?>				
                    
                    <div class="frame_top">
                            <div class="frame_btm">
                                <div class="frame_content">                                
                                        <!-- Content Start -->
                                        <h1>Welcome to Peterborough Home Hardware</h1>
                                        <p>Welcome to our new website <a href="<?php bloginfo('template_directory');?>/images/sandy.png"  title="what does this do">read more</a></p>
                                        
                                        <h2>Our store</h2>
                                        <p>Items include <a href="content.html" title="Content Page">Read more.</a> </a></p>
                                        
                                        <h3>Gardening Centre</h3>
                                        <p>Plants and things.<a href="gardening.php" title="Gardening page">read more</a></p>
                                        
                                        <h3>Building Supplies</h3>
                                        <p>For all your projects big and small.</p>
                                        <!-- Content End -->                               
                                </div>
                            </div>
                    	</div>
                    <!-- Bottom Banner Start -->
                    <div class="footer_banners">                    
                    	<div id="sub_banner">
                        	<a href="#"><img alt="oops!" src="<?php bloginfo('template_directory');?>/images/footer_banner_sample.jpg" width="555" height="90"></a>
                        </div> 
                        <div id="sub_banner_half">
                        	<a href="#" class="banner_left"><?php if ( dynamic_sidebar('sidebar-1') ) : else : endif; ?></a>
                            <a href="#" class="banner_right"><img alt="oops!" src="<?php bloginfo('template_directory');?>/images/banner_right.gif" width="265" height="90"></a>
                        
                        </div>                        	
                  </div><!-- Bottom Banner End -->                   
                </div>               
            </div>
            <div id="bottom">
            	<div id="footer">
                	<div id="footer_menu">
			 <ul>
			<!-- Footer Menu Items -->  
                        <li>2014 &copy; Copyright Danks </li>                     
			<?php wp_nav_menu ( array( 'theme_location' => 'extra-menu', 'container_class' => 'my_extra_menu_class' ) );  ?> 
                        <!-- Footer Menu Items -->              
                    </ul> 
 		   </div>
                </div>
            </div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>