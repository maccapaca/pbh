<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
     <div id="internal_top">
                       <div id="feature_dogs">
                           <img src="<?php bloginfo('template_directory');?>/images/feature_dogs.png" alt="Interchangable dogs">
                       </div>
                       <div id="subnav">
                        <div class="subnav">
                        <?php wp_nav_menu ( array( 'theme_location' => 'extra-menu', 'container_class' => 'my_extra_menu_class' ) );  ?>
                        </div>
                    
                    </div>
         </div>   
    </body>
</html>
