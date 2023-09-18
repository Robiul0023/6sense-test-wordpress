<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?></title>

</head>
<?php wp_head();?>
<body <?php body_class();?>>
<header> 
<section class="nav_wrap">
<!-- Simulate a smartphone / tablet look -->
<div class="mobile-container">
 
<!-- Mobile Navigation Menu -->

<div class="mobilenav">
  <a href="#home" class="active"><img src="<?php bloginfo('template_directory');?>/images/6sense-logo/logo_ux ui company.png" alt="" srcset=""></a>
  <!-- Navigation links (hidden by default) -->
   <div id="webPage"> 
    <a href="#platform">Platform</a>
    <a href="#for">For</a>
    <a href="#pricing">Pricing</a>
    <a href="#about Us">About Us</a>
    <a href="#contact Us">Contact Us</a>
  </div>
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

    <div class="nav_container"> 
        <div class="6sense_logo">
            <img src="<?php bloginfo('template_directory');?>/images/6sense-logo/logo_ux ui company.png" alt="" srcset="">
        </div>
        <div class="menu"> 

             <?php wp_nav_menu(array(

              'theme_location' => 'header menu',
              'fallback_cb'    => false


             ));

             ?>
          </div>
        </div>
      </section>
    </header> 