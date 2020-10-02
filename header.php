<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- cdns -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<?php wp_head(); ?>
<body>


<header>
	<div class="topHeader">
		<div class="container">
			<div class="row justifyB">
				<div class="col">
					<div class="informationCompany displayFlex">
						<a href="#">
							<i class="fa fa-phone"></i>
							(208) 539-7809
						</a>
						<a href="#">
							<i class="fa fa-envelope"></i>
							zane.jesser@ultrionenergy.com
						</a>
					</div>
				</div>
				<div class="col">
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
		</div>
	</div>
	<div class="logoCOntainer">
		<a href="<?php echo site_url(); ?>">
			<img src="https://yourstudentvoice.co.uk/wp-content/uploads/2019/08/logo-1-e1566148908483.png">
		</a>
	</div>
	<div class="mainMenu">
		<div class="container">
			<div class="menuMain">
				<?php
					wp_nav_menu( array( 
					    'theme_location' => 'header-menu', 
					    'container_class' => 'Menuheader' ) ); 
				?>
			</div>
		</div>
	</div>
</header>

<?php if( ! is_front_page() ) { ?>
<div class="aboutBanner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/image/3.png');">
	<div class="container">
		<h2>
			<?php the_title(); ?>
		</h2>
		<div class="breadcrumbs">
			<a href="<?php echo site_url(); ?>">Home</a>
			<span><?php the_title(); ?></span>
		</div>
	</div>
</div>


<?php } ?>
