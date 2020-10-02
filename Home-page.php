<?php /* Template Name: Homepage */ get_header(); ?>

<div class="pageHome">
	<div class="bannerMain" style="background-image: url('<?php echo get_template_directory_uri(); ?>/image/3.png');">
		<div class="slidercontainerHomebanner">
			<?php
			if( have_rows('banner_repeater') ):
				while( have_rows('banner_repeater') ) : the_row(); ?>
					<div class="slideinner">
						<div class="container">
							<h2>
								<?php the_sub_field('banner_heading'); ?>
							</h2>
							<p>
								<?php the_sub_field('banner_content'); ?>
							</p>
							<div class="displayFlex" id="buttonContainerbanenr">
								<a href="<?php the_sub_field('button_1_link') ?>">
									<?php the_sub_field('button_1_text') ?>
								</a>
								<a href="<?php the_sub_field('button_2_link') ?>">
									<?php the_sub_field('button_2_text') ?>
								</a>
							</div>
						</div>
					</div>
			    <?php endwhile;
				else :
				endif;
			?>
		</div>
	</div>
</div>
<div class="section3homepage">
	<div class="container">
		<h6>
			<?php the_field('sub_headingss'); ?>
		</h6>
		<h3>
			<?php the_field('heading_main'); ?>
		</h3>
		<p>
			<?php the_field('contentsda'); ?>
		</p>
		<div class="row">
			<div class="col">
				<div class="contentLeft" id="boxcontainersection3">
					<h5>
						<?php the_field('headingaqwe'); ?>
					</h5>
					<ul>
						<?php
						if( have_rows('list_items1') ):
						    while( have_rows('list_items1') ) : the_row();?>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/image/9.png">
									<?php the_sub_field('list_items'); ?>
								</li>
						    <?php endwhile;
						else :
						endif; ?>
					</ul>
				</div>
			</div>
			<div class="col">
				<div class="contentRight" id="boxcontainersection3">
					<h5>
						<?php the_field('headingaqwe_2'); ?>
					</h5>
					<ul>
						<?php
						if( have_rows('list_items1_2') ):
						    while( have_rows('list_items1_2') ) : the_row();?>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/image/9.png">
									<?php the_sub_field('list_items2'); ?>
								</li>
						    <?php endwhile;
						else :
						endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section2homepage">
	<div class="container">
		<div class="row alignC">
			<div class="col-md-6">
				<div class="imagecontainersection2Hoepage">
					<img src="<?php the_field('imageSection2'); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="contentSection2">
					<h6>
						<?php the_field('sub_heading'); ?>
					</h6>
					<h4>
						<?php the_field('headingSection2'); ?>
					</h4>
					<p>
						<?php the_field('contentSection2') ?>
					</p>
					<a href="<?php the_field('button_linkSection2'); ?>">
						<?php the_field('button_textsection2'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="featureslist" style="background-image: url('<?php echo get_template_directory_uri(); ?>/image/1.png');">
	<div class="container">
		<h6>
			Our Production Process
		</h6>
		<h3>
			How we make it happen
		</h3>
		<div class="row" id="featurelistcontainer">
			<div class="col-md-4">
				<div class="boxcontainer">
					<span class="number">1</span>
					<p>
						Fusion of Titanium Dioxide, Aluminum and Carbon Powders
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxcontainer">
					<span class="number">2</span>
					<p>
						 Etch Titanium Aluminum Carbide with HCL and Fluoride Salt, Stirring
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxcontainer">
					<span class="number">3</span>
					<p>
						Rinse and filter to Neutral PH with DI water (dewaters to 40% water content)
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxcontainer">
					<span class="number">4</span>
					<p>
						Remove excess water, through press filtration (dewaters to 10% water content)
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxcontainer">
					<span class="number">5</span>
					<p>
						Drying under heated vacuum (dewaters to  < 0.1 % water content)
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxcontainer">
					<span class="number">6</span>
					<p>
						Airtight Packaging
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="surfacesection">
	<div class="container">
		<h6>
			<?php the_field('sub_headingsurface'); ?>
		</h6>
		<h3>
			<?php the_field('headingsurface'); ?>
		</h3>
		<p>
			<?php the_field('contetnsurface'); ?>
		</p>
		<img src="<?php the_field('image_surface'); ?>">
	</div>
</div>
<div class="testtmonials">
	<div class="container">
		<div class="slidertestimonials">
			<?php 
				global $woocommerce;
			    $args = array(  
			        'post_type' => 'testimonials',
			    );
			    $loop = new WP_Query( $args ); 
			        
			    while ( $loop->have_posts() ) : $loop->the_post();  ?>
					<div class="slidetest">
						<h6>
							Our Team
						</h6>
						<h5>
							Meet Our Team
						</h5>
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						<h4>
							<?php the_title(); ?>
							<span> <?php the_excerpt(); ?></span>
						</h4>
						<p>
							<?php the_content(); ?>
						</p>
						<div class="socialIconsandtest">
							<a href="<?php the_field('facebook'); ?>">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="<?php the_field('twitter'); ?>">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="<?php the_field('instagram'); ?>">
								<i class="fa fa-instagram"></i>
							</a>
							<a href="<?php the_field('linkedin'); ?>">
								<i class="fa fa-linkedin"></i>
							</a>
						</div>
					</div>
			    <?php endwhile;

			    wp_reset_postdata(); 
			?>
		</div>
	</div>
</div>


<div class="productscontainer">
	<div class="container">
		<h6>
			Our Products
		</h6>
		<h5>
			Products For You
		</h5>
		<p>
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
		</p>
		<div class="slideerProducts">
			<?php 
				global $woocommerce;
			    $args = array(  
			        'post_type' => 'product',
			    );
			    $loop = new WP_Query( $args ); 
			        
			    while ( $loop->have_posts() ) : $loop->the_post();
						$currency = get_woocommerce_currency_symbol();
						$price = get_post_meta( get_the_ID(), '_regular_price', true);
						$sale = get_post_meta( get_the_ID(), '_sale_price', true);
					?>
					<div class="slideProducts">
						<div class="innerslidercontainer">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							<h6>
								<?php the_title(); ?>
							</h6>
							<p class="priceProduct">
								<?php echo $price; ?>
							</p>
						</div>
					</div>
			    <?php endwhile;

			    wp_reset_postdata(); 
			?>
		</div>
	</div>
</div>








<?php get_footer(); ?>