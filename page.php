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
            <div class="national_website_tile internal_tile">
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
                <div id="internal">
                       <div id="internal_content">                        
                        <!-- Content Start Here -->                        
                         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  <h1><?php the_title(); ?></h1> <?php the_content(); ?>  <?php endwhile; endif; ?>
                         <!-- Content End Here --> 
                       </div>
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
</body>
</html>
