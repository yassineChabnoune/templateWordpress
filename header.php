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

<!-- test -->

    


    <div class="container" >
    	<header class="site-header">
    		
    		<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img style="width:100%; height:70vh"  src="<?php echo get_template_directory_uri()?>/image/img1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3 style>DUT Génie Informatique </h3>
                <p>Description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img style="width:100%; height:70vh"  src="<?php echo get_template_directory_uri()?>/image/img2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>DUT technique de Management</h3>
                <p>Description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img style="width:100%; height:70vh" src="<?php echo get_template_directory_uri()?>/image/img3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>DUT GA</h3>
                <p>Description</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    	</header>
    	<nav class="main-nav">
    		<?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
    	</nav>
   