<?php 
get_header();
$home = get_field('home_banner');
$about = get_field('about_us');
$services = get_field('services');
$policy = get_field('policy');
// echo "<pre>";
// print_r($policy);
?>
<!-- Banner -->
<section id="banner" style="background-image: url('<?php echo $home['backgroud_image']['url'] ?>')">
				<div class="inner">
					<header>
						<h1><?php echo $home['heading']; ?></h1>
						<p><?php echo $home['subheading']; ?></p>
					</header>
					<a href="<?php echo $home['btn_link']; ?>" class="button big scrolly"><?php echo $home['btn_txt']; ?></a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="javascript:void(0)" class="link"><img src="<?php echo $about['about_image']['url']; ?>" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3><?php echo $about['about_heading']; ?></h3>
										<p><?php echo $about['about_subheading']; ?> </p>
										
									</div>
								</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="col col2">
									<h3><?php echo $services['service_heading']; ?></h3>
									<p><?php echo $services['service_subheading']; ?></p>
								</div>
								<div class="col col1 first">
									<div class="image round fit">
									<a href="javascript:void(0)" class="link"><img src="<?php echo $services['service_image']['url']; ?>" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="javascript:void(0)" class="link"><img src="<?php echo $policy['policy_image']['url']; ?>" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3><?php echo $policy['policy_heading']; ?></h3>
										<p><?php echo $policy['policy_subheading']; ?></p>
										<!-- <a href="#" class="button">Learn More</a> -->
									</div>
								</div>
						</div>
					</section>

			</div>

<?php 
get_footer();
?>