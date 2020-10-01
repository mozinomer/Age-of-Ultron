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

<?php get_footer(); ?>