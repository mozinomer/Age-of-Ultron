<?php /* Template Name: Products */ get_header(); ?>


<div class="productscontaienr">
	<div class="container">
		<div class="row">
			<?php 
				global $woocommerce;
			    $args = array(  
			        'post_type' => 'product',
			    );
			    $loop = new WP_Query( $args ); 
			        
			    while ( $loop->have_posts() ) : $loop->the_post();  ?>
					<div class="col-md-3">
						<?php  
							$currency = get_woocommerce_currency_symbol();
							$price = get_post_meta( get_the_ID(), '_regular_price', true);
							$sale = get_post_meta( get_the_ID(), '_sale_price', true);
						?>
						<a href="<?php the_permalink(); ?>">
							<div class="boxcontainerinnerproduct">
								<div class="imagecontainerbox">
									<img src="<?php echo get_the_post_thumbnail(); ?>">
								</div>
								<h6>
									<?php the_title(); ?>
								</h6>
								<p class="pricecontainer">
									<?php echo $price; ?>
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