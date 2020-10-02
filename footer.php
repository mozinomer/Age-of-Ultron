



<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="leftfooter">
					<img src="">
					<p>
						Ultrion Energy is developing manufacturable battery technologies that are ultra-energy dense. To achieve these high energy densities new materials technologies must be utilized. Ultrion Energy has identified Two Dimensional MXene materials as the key to significant and attainable improvements to battery performance.
					</p>
					<ul class="displayFlex">
						<li>
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="col" id="middlefooter">
						<h5>
							Quick Links
						</h5>
						<?php
							wp_nav_menu( array( 
							    'theme_location' => 'header-menu', 
							    'container_class' => 'Menuheader' ) ); 
						?>
					</div>
					<div class="col" id="rightmostfooter">
						<h5>
							Contact Information
						</h5>
						<a href="#">
							<i class="fa fa-phone"></i>
							(208) 539-7809
						</a>
						<a href="#">
							<i class="fa fa-envelope"></i>
							zane.jesser@ultrionenergy.com
						</a>
						<a href="#">
							<i class="fa fa-map"></i>
							Cheap Tubes Inc. 3992 Rte 121 East STE 3, Grafton, VT 05146 USA
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>


</body>
<script type="text/javascript">
	$('.slidercontainerHomebanner').slick({
	  dots: true,
	  infinite: false,
	  arrows: false,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	});
	$('.slidertestimonials').slick({
	  dots: false,
	  infinite: false,
	  arrows: true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	});
	$('.slideerProducts').slick({
	  dots: false,
	  infinite: false,
	  arrows: true,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 3,
	    responsive: [
	    {
	      breakpoint: 767,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	      }
	    },
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});


	if($(window).width() < 767 ) {
		$('div#featurelistcontainer').slick({
		  dots: true,
		  infinite: false,
		  arrows: false,
		  speed: 300,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		});
		$('.ourresources .row').slick({
		  dots: true,
		  infinite: false,
		  arrows: false,
		  speed: 300,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		});
	}
</script>
<?php wp_footer(); ?>

</html>