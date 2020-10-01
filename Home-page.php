<?php /* Template Name: Homepage */ get_header(); ?>

<div class="pageHome">
	<div class="bannerMain">
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
<div class="section3homepage">
	<div class="container">
		<h6>
			See The difference
		</h6>
		<h3>
			MXene Vs Graphene Oxide
		</h3>
		<p>
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
		</p>
		<div class="row">
			<div class="col">
				<div class="contentLeft" id="boxcontainersection3">
					<h5>
						MXene
					</h5>
					<ul>
						<li>
							10X Higher Practical Conductivity Than Reduced Graphene Oxide
						</li>
						<li>
							Processing Requirements Suited for Volume Production
						</li>
						<li>
							Unique Lithophilic Properties Promote Fast Lithium Ion Transport, and Prevents Dendrite Formation
						</li>
						<li>
							Easily Modifiable Surface Chemistry
						</li>
					</ul>
				</div>
			</div>
			<div class="col">
				<div class="contentRight" id="boxcontainersection3">
					<h5>
						Graphene Oxide
					</h5>
					<ul>
						<li>
							Single Layer Graphene Sheets Production technology not Scalable 
						</li>
						<li>
							“Graphene” available in powdered form is actually Reduced Graphene Oxide (rGO)
						</li>
						<li>
							Functional Conductivity of rGO is several orders of magnitude less than single layer graphene.
						</li>
						<li>
							Caustic Oxidization Synthesis Processes for rGO
						</li>
					</ul>
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
					<span class="number">1</span>
					<p>
						Fusion of Titanium Dioxide, Aluminum and Carbon Powders
					</p>
				</div>
			</div>
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
					<span class="number">1</span>
					<p>
						Fusion of Titanium Dioxide, Aluminum and Carbon Powders
					</p>
				</div>
			</div>
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
					<span class="number">1</span>
					<p>
						Fusion of Titanium Dioxide, Aluminum and Carbon Powders
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="surfacesection">
	<div class="container">
		<h6>
			Inner process
		</h6>
		<h3>
			Mxene Surface Modification
		</h3>
		<p>
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
		</p>
		<img src="<?php echo get_template_directory_uri(); ?>/image/2.png>">
	</div>
</div>
<div class="testtmonials">
	<div class="container">
		<div class="slidertestimonials">
			<div class="slidetest">
				<h6>
					Our Team
				</h6>
				<h5>
					Meet Our Team
				</h5>
				<img src="">
				<h4>
					Zane Jesser
					<span> Founder</span>
				</h4>
				<p>
					Zane Jesser is the founder of Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
				</p>
				<div class="socialIconsandtest">
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fa fa-instagram"></i>
					</a>
					<a href="#">
						<i class="fa fa-linkedin"></i>
					</a>
				</div>
			</div>
			<div class="slidetest">
				<h6>
					Our Team
				</h6>
				<h5>
					Meet Our Team
				</h5>
				<img src="">
				<h4>
					Zane Jesser
					<span> Founder</span>
				</h4>
				<p>
					Zane Jesser is the founder of Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
				</p>
				<div class="socialIconsandtest">
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fa fa-instagram"></i>
					</a>
					<a href="#">
						<i class="fa fa-linkedin"></i>
					</a>
				</div>
			</div>
			<div class="slidetest">
				<h6>
					Our Team
				</h6>
				<h5>
					Meet Our Team
				</h5>
				<img src="">
				<h4>
					Zane Jesser
					<span> Founder</span>
				</h4>
				<p>
					Zane Jesser is the founder of Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
				</p>
				<div class="socialIconsandtest">
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fa fa-instagram"></i>
					</a>
					<a href="#">
						<i class="fa fa-linkedin"></i>
					</a>
				</div>
			</div>
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
			<div class="slideProducts">
				<div class="innerslidercontainer">
					<img src="">
					<h6>
						Few Layer Graphene Oxide 2-4L
					</h6>
					<p class="priceProduct">
						$2.00 - $3.00
					</p>
				</div>
			</div>
			<div class="slideProducts">
				<div class="innerslidercontainer">
					<img src="">
					<h6>
						Few Layer Graphene Oxide 2-4L
					</h6>
					<p class="priceProduct">
						$2.00 - $3.00
					</p>
				</div>
			</div>
			<div class="slideProducts">
				<div class="innerslidercontainer">
					<img src="">
					<h6>
						Few Layer Graphene Oxide 2-4L
					</h6>
					<p class="priceProduct">
						$2.00 - $3.00
					</p>
				</div>
			</div>
			<div class="slideProducts">
				<div class="innerslidercontainer">
					<img src="">
					<h6>
						Few Layer Graphene Oxide 2-4L
					</h6>
					<p class="priceProduct">
						$2.00 - $3.00
					</p>
				</div>
			</div>
			<div class="slideProducts">
				<div class="innerslidercontainer">
					<img src="">
					<h6>
						Few Layer Graphene Oxide 2-4L
					</h6>
					<p class="priceProduct">
						$2.00 - $3.00
					</p>
				</div>
			</div>
			<div class="slideProducts">
				<div class="innerslidercontainer">
					<img src="">
					<h6>
						Few Layer Graphene Oxide 2-4L
					</h6>
					<p class="priceProduct">
						$2.00 - $3.00
					</p>
				</div>
			</div>
			<div class="slideProducts">
				<div class="innerslidercontainer">
					<img src="">
					<h6>
						Few Layer Graphene Oxide 2-4L
					</h6>
					<p class="priceProduct">
						$2.00 - $3.00
					</p>
				</div>
			</div>
			<div class="slideProducts">
				<div class="innerslidercontainer">
					<img src="">
					<h6>
						Few Layer Graphene Oxide 2-4L
					</h6>
					<p class="priceProduct">
						$2.00 - $3.00
					</p>
				</div>
			</div>
		</div>
	</div>
</div>








<?php get_footer(); ?>