<!DOCTYPE html>

<!--
       /\                
      /  \                    
     /,--.\                                                      
    /< () >\          
   /  `--'  \       
  /          \          
 /            \               
/______________\ 
      ROY
-->

<html lang="">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo(); ?></title>
    
    <!-- CSS -->    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style.css">
    
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/core/favicon.png"/>
    
</head>

<body>


<nav>
    
    <div class="nav-container">
        
        <a href="<?php echo site_url(); ?>">Home</a>
        <a href="<?php echo site_url(); ?>/?page_id=6">Wie zijn wij</a>
        <a href="<?php echo site_url(); ?>/?page_id=11">Nieuwe hulpmiddelen</a>
        <a href="<?php echo site_url(); ?>" id="nav-logo"><img src="<?php echo get_template_directory_uri(); ?>/library/images/core/jact-logo.png" alt=""></a>
        <a href="<?php echo site_url(); ?>/?page_id=13">Partners</a>
        <a href="<?php echo site_url(); ?>/?page_id=15">Leveranciers</a>
        <a href="<?php echo site_url(); ?>/?page_id=17">Contact</a>
        
    </div>
    
</nav>


<header>
   
   <div class="header-title">
       <h1><?php echo get_field( "header_slogan" ); ?></h1>
   </div>
   
   
    
    <div class="header-overlay"></div>
    
    <div class="header-bg" style=" background: url('<?php echo get_template_directory_uri(); ?>/library/images/fotos/ING_33594_120788.jpg');"></div>
    
</header>