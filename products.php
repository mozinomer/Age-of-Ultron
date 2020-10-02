<?php /* Template Name: Products */ get_header(); ?>


<div class="productscontaienr">
	<div class="container">
		<div class="row">
			<?php 
			    $args = array(  
			        'post_type' => 'product',
			        'orderby’ => 'title', 
			        'order’ => 'ASC', 
			    );
			    $loop = new WP_Query( $args ); 
			        
			    while ( $loop->have_posts() ) : $loop->the_post();  ?>
					<div class="col-md-3">
						<a href="<?php the_permalink(); ?>">
							<div class="boxcontainerinnerproduct">
								<div class="imagecontainerbox">
									<img src="<?php echo get_the_post_thumbnail(); ?>">
								</div>
								<h6>
									<?php the_title(); ?>
								</h6>
								<p class="pricecontainer">
									<?php echo $post->price; ?>
								</p>
							</div>
						</a>
					</div>
			    <?php endwhile;

			    wp_reset_postdata(); 
			?>
		</div>
	</div>
</div>



<?php get_footer(); ?>