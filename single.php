<?php get_header(); ?>
<div class="page-content" >
	<div class="inner-content">
		<div class="author">
					Posté par: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));  ?>"><?php the_author();?></a>
					le <?php the_time( 'DS, F, Y' );  ?>
				</div>
		<div class="page-title">
			<h1><?php the_title(  ); ?></h1>
		</div>
		<div class="blog" >
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				
				
				<p><?php the_content(); ?></p>
			<?php endwhile; else:  ?>
				no posts found
			<?php endif; ?>		
		</div>
	</div>
</div>
<?php get_footer(); ?>