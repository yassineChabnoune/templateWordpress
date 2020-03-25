<?php get_header(); ?>
<div class="page-content" >
	<div class="inner-content">
		<div class="page-title">
			<h1>Présentation</h1>
		</div>
			<div class="contentleft">
		<div class="blog">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<div class="post">
				<h2 class="title"><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h2>
				<div class="author">
					Posté par: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));  ?>"><?php the_author();?></a>
					le <?php the_time( 'DS, F, Y' );  ?>
				</div>
				<p><?php the_content() ?></p>
				</div>
			<?php endwhile; else:  ?>
				no posts found

			<?php endif; ?>		

		</div>
		</div>
		<div class="contentright">
			<?php get_sidebar(  ); ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php get_footer(); ?>