<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- Required meta tags --> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Pintu Keluar</title>
		<!-- Favicons -->
		<link href="<?= base_url('assets/img/favicon.png'); ?>" rel="icon">
		<link href="<?= base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

		<!-- Template Main CSS File -->
		<link href="<?= base_url('assets/css/main.css'); ?>" rel="stylesheet">
    </head>
    <!-- body -->
	<body>
		<!-- ======= Header ======= -->
		<header id="header" class="header d-flex align-items-center">
			<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

			<a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
				<h1><?= @$lang->title; ?><span>.</span></h1>
			</a>

			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
			<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
			<nav id="navbar" class="navbar">
				<ul>
					<li><a href="<?= base_url('/') ?>" class="<?= (($uri === '') ? 'active' : '') ?>"><?= @$lang->home; ?></a></li>
					<li><a href="<?= base_url('/product') ?>" class="<?= (($uri === 'product') ? 'active' : '') ?>"><?= @$lang->product; ?></a></li>
					<li><a href="<?= base_url('/about') ?>" class="<?= (($uri === 'about') ? 'active' : '') ?>"><?= @$lang->about; ?></a></li>
					<li><a href="<?= base_url('/contact') ?>" class="<?= (($uri === 'contact') ? 'active' : '') ?>"><?= @$lang->contact; ?></a></li>
					<li class="dropdown"><a href="#"><span><?= @$lang->language; ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
						<ul>
							<?php foreach ($master_language as $key => $value) : ?>
								<li>
									<a href="<?= base_url('/lang/'.$value->code_language); ?>"><?= strtoupper($value->code_language); ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
				</ul>
			</nav><!-- .navbar -->

			</div>
		</header><!-- End Header -->
		<?= $this->renderSection('slider') ?>
		<div class="bg-dark">
			<?= $this->renderSection('content') ?>
		</div>
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md">
						<div class="ftco-footer-widget mb-4" data-aos="fade-up">
							<div style="display: -webkit-inline-box;">
								<img src="<?= base_url('/assets/images/logo.png'); ?>" style="width: 30px;">
								<h2 style="margin-top: 3px; margin-left: 10px;" class="ftco-heading-2 font-meiryo"><?= @$lang->title; ?></h2>
							</div>
							<p><?= @$lang->contact_us_sub; ?></p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5" data-aos="fade-up">
								<h5 class="text-white"><?= @$lang->social_media ?></h5>
								<li class="mr-3 my-1">
									<a target="_black" href="https://www.instagram.com/pintukeluar.id/">
										<img src="<?= base_url('assets/images/instagram.png'); ?>" style="width: 45px">
									</a>
								</li>
								<li class="mr-3 my-1">
									<a target="_black" href="https://www.tiktok.com/@pintukeluar.id">
										<img src="<?= base_url('assets/images/tiktok.png'); ?>" style="width: 50px">
									</a>
								</li>
								<li class="mr-3 my-1">
									<a target="_black" href="https://www.youtube.com/channel/UCxseEbS26x3dKxNDnhQGPTg">
										<img src="<?= base_url('assets/images/youtube.png'); ?>" style="width: 50px">
									</a>
								</li>
								<li class="mr-3 my-1">
									<a target="_black" href="https://twitter.com/PintuKeluarId">
										<img src="<?= base_url('assets/images/twitter.png'); ?>" style="width: 50px">
									</a>
								</li>
								<li class="mr-3 my-1">
									<a target="_black" href="https://www.facebook.com/profile.php?id=100087929764176">
										<img src="<?= base_url('assets/images/facebook.png'); ?>" style="width: 50px">
									</a>
								</li>
								<li class="mr-3 my-1">
									<a target="_black" href="https://www.linkedin.com/in/pintukeluarid-a75058257">
										<img src="<?= base_url('assets/images/linkedin.png'); ?>" style="width: 55px">
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md" data-aos="fade-up">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2"><?= @$lang->information; ?></h2>
							<ul class="list-unstyled">
								<li><a href="<?= base_url('/about'); ?>" class="py-2 d-block"><?= @$lang->about ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md" data-aos="fade-up">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2"><?= @$lang->customer_support ?></h2>
							<ul class="list-unstyled">
								<li><a href="<?= base_url('/contact'); ?>" class="py-2 d-block"><?= @$lang->contact ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md" data-aos="fade-up">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2"><?= @$lang->have_questions ?></h2>
							<div class="block-23 mb-3">
								<ul>
									<!-- <li>
										<span class="icon icon-map-marker"></span>
										<span class="text">
											Ds. Kaweden No. 48 Seleman. <br>
											Yogyakarta <br> 0274-2886381
											informasi@pintukeluar.id <br>
											pintukeluar.id
										</span>
									</li> -->
									<li>
										<a target="_blank" href="mailto:informasi@pintukeluar.id">
											<span class="icon icon-envelope"></span><span class="text">informasi@pintukeluar.id</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							&copy;<script>document.write(new Date().getFullYear());</script> <?= @$lang->all_rights_reserved; ?> <a href="<?= base_url('/'); ?>" target="_blank"><?= @$lang->title ?></a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- ======= Footer ======= -->
		<footer id="footer" class="footer">

			<div class="footer-content position-relative">
				<div class="container">
				<div class="row">

					<div class="col-lg-4 col-md-6">
					<div class="footer-info">
						<h3><?= @$lang->title; ?></h3>
						<p>
							A108 Adam Street <br>
							NY 535022, USA<br><br>
							<strong>Phone:</strong> +1 5589 55488 55<br>
							<strong>Email:</strong> info@example.com<br>
						</p>
						<div class="social-links d-flex mt-3">
						<a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
						</div>
					</div>
					</div><!-- End footer info column-->

					<div class="col-lg-2 col-md-3 footer-links">
					<h4>Useful Links</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Terms of service</a></li>
						<li><a href="#">Privacy policy</a></li>
					</ul>
					</div><!-- End footer links column-->

					<div class="col-lg-2 col-md-3 footer-links">
					<h4>Our Services</h4>
					<ul>
						<li><a href="#">Web Design</a></li>
						<li><a href="#">Web Development</a></li>
						<li><a href="#">Product Management</a></li>
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Graphic Design</a></li>
					</ul>
					</div><!-- End footer links column-->

					<div class="col-lg-2 col-md-3 footer-links">
					<h4>Hic solutasetp</h4>
					<ul>
						<li><a href="#">Molestiae accusamus iure</a></li>
						<li><a href="#">Excepturi dignissimos</a></li>
						<li><a href="#">Suscipit distinctio</a></li>
						<li><a href="#">Dilecta</a></li>
						<li><a href="#">Sit quas consectetur</a></li>
					</ul>
					</div><!-- End footer links column-->

					<div class="col-lg-2 col-md-3 footer-links">
					<h4>Nobis illum</h4>
					<ul>
						<li><a href="#">Ipsam</a></li>
						<li><a href="#">Laudantium dolorum</a></li>
						<li><a href="#">Dinera</a></li>
						<li><a href="#">Trodelas</a></li>
						<li><a href="#">Flexo</a></li>
					</ul>
					</div><!-- End footer links column-->

				</div>
				</div>
			</div>

			<div class="footer-legal text-center position-relative">
				<div class="container">
				<div class="copyright">
					&copy; Copyright <strong><span>UpConstruction</span></strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
					Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>
				</div>
			</div>

		</footer>
		<!-- End Footer -->

		<!-- Vendor JS Files -->
		<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

		<!-- Template Main JS File -->
		<script src="<?= base_url('assets/js/main.js') ?>"></script>
	</body>
</html>