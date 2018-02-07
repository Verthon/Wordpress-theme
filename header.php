<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <title><?php bloginfo('name '); ?></title>       
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

<div class="container-fluid">

      <header class="container id="main-navigation">
          <div class="logo">
           <h2 class="logo-text"><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h2>
           
          </div>

       </div>                                  
        <nav class="container">
              <nav id="menu" class="navbar navbar-default ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                <div class="collapse navbar-collapse navbar-menubuilder">
                <ul class="nav navbar-nav navbar-middle">
                        <?php 
$args= array (
'theme-location' => 'primary'
);
?>
                        <li><a href="<?php echo home_url(); ?>">home</a>
                        </li>
                        <li> <a href="http://jurr.cba.pl/contact-us/">contact-us</a> </li>
                        <li> <a href="http://jurr.cba.pl/authors/">authors</a></li>  
                        <li><div class="search-form"><?php get_search_form(); ?></div>
                        </li>
                     
                </ul>                                         

                 <div class="main-image-socials">
                        <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                      </div>
                  </div>
            </nav>
          </nav>
      </header>
      
      <main class="container">

