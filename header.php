<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url');?>"" />

<meta charset="<?php bloginfo( 'charst'); ?>">

<meta name="viewport" content="width=device-width , initial-scale:1.0"> 

<title> <?php bloginfo( 'name' ); ?> </title>
<?php wp_head(); ?>

</head>
<body>
    
<div class="container">
     <header class= "site-header">
         <h1> <?php bloginfo('name'); ?> </h1>

         <nav class="main-nav">
            <?php wp_nav_menu(array('theme_location '=>'main-menu'));?>
             
             
             
             
         </nav>
</div>