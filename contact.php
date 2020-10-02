<?php /* Template Name: Contact */ get_header(); ?>

<div class="informationsetup">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="boxcontaineercontact">
					<a href="#">
						<i class="fa fa-phone"></i>
						<h6>Phone Number</h6>
						<span> 123 456 7888</span>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxcontaineercontact">
					<a href="#">
						<i class="fa fa-phone"></i>
						<h6>Email Address</h6>
						<span> sales@ultrionenergy.com</span>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxcontaineercontact">
					<a href="#">
						<i class="fa fa-phone"></i>
						<h6>Address</h6>
						<span> 1790  Russell Street, Utah 84101</span>
					</a>
				</div>
			</div>
		</div>
		<div class="formcontainer">
			<h6>
				Get In Touch
			</h6>
			<h4>
				Write A Message
			</h4>
			<?php echo do_shortcode('[wpforms id="40" title="false" description="false"]') ?>
		</div>
	</div>
</div>



<?php get_footer(); ?>
