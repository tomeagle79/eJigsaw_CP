<!doctype html>
    <html class="no-js" lang="">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        
        <!-- Place favicon.ico in the root directory -->
    
        
        <?php wp_head(); ?>
        
        </head>
        <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        
        <header class="">
            <div class="header-container main">
                <div id="logo-container">
                                      
                    <a href="<?php echo home_url(); ?>"><picture>
                      <source media="(min-width: 568px)" srcset="<?php bloginfo( 'template_url' ); ?>/img/logo-full-colour.png">
                      <img src="<?php bloginfo( 'template_url' ); ?>/img/logo-stacked.png" alt="logo" style="height: 150px; width:auto;">
                    </picture></a>

                </div>

                <div id="header-right-wrapper" class="clearfix">   
                </div>

                 <div class="header-right">   
                        <ul id="header-social">
                            <li class="header-social-icon"><a href="https://www.linkedin.com/in/chris-percival-19189814/" target="_blank">
                            <i class="fa fa-linkedin"></i></li>
                            
                            <li class="header-social-icon"><a href="https://twitter.com/ChrisPercival_" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            
                        </ul>  
                        
                        <nav id="topNav" class="clearfix">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>

                        </nav>
                        
                    </div>

                <div class="button">
                    <a class="btn-open" href="#"></a>
                </div>
                <div style="clear:both; height: 0;">&nbsp;</div>
            </div>

        </header>
        
        


      
        
        
        