<?php get_header(); ?>
	<div id="content" class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_title( '<div class="title"><h1>', '</h1></div>' ); ?>
			<?php the_content(); ?>
			<?php //edit_post_link( __( 'Edit', 'base' ) ); ?>
		<?php endwhile; ?>
		<?php //wp_link_pages(); ?>
		<?php //comments_template(); ?>
	</div>
	<?php //get_sidebar(); ?>
<?php get_footer(); ?>