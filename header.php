<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="<?php bloginfo( 'charst' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" >

    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    
    <div class="container" >
    	<header class="site-header">
    		<h1><a href="<?php echo home_url(); ?>"> <?php echo bloginfo(); ?> </a></h1>
    	</header>
    	<nav class="main-nav">
    		<?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
    	</nav>
   