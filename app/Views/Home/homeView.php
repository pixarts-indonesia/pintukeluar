<?= $this->extend('App\Views\Layout\main') ?>

<?= $this->section('slider') ?>
    <style>
        .img-bg {
            background-image: linear-gradient(
                to bottom,
                rgb(0 0 0 / 59%),
                rgb(0 0 0 / 72%)
            ), url('<?= base_url('assets/images/bg_1.jpg') ?>');
        }
    </style>
    
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                <h2 data-aos="fade-down"><?= @$lang->welcome; ?></h2>
                <p data-aos="fade-up"><?= @$lang->sub_slider; ?> </p>
                </div>
            </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
	<section class="container py-5">
		<h1 class="m-0 text-center text-white font-weight-bold">
			<?= @$lang->sub_satu ?>
		</h1>
	</section>
	<section class="bg-light radius-list">
		<div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 py-5">
                    <div class="py-3 px-3 shadow-lg text-center" style="border-radius: 2rem; background-color: #ffc378;" data-aos="zoom-in" data-aos-duration="1000">
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/images/sun.gif') ?>" width="50%">
                        <!-- <p class="font-weight-bold"><?php @$lang->social_power; ?></p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 py-5">
                    <div class="py-3 px-3 shadow-lg text-center" style="border-radius: 2rem; background-color: #78ffe6;" data-aos="zoom-in" data-aos-duration="2000">
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/images/partly-cloudy-day.gif') ?>" width="50%">
                        <!-- <p class="font-weight-bold"><?php @$lang->social_power; ?></p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 py-5">
                    <div class="py-3 px-3 shadow-lg text-center" style="border-radius: 2rem; background-color: #ff7878;" data-aos="zoom-in" data-aos-duration="2000">
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/images/cloud-lightning.gif') ?>" width="50%">
                        <!-- <p class="font-weight-bold"><?php @$lang->social_power; ?></p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 py-5">
                    <div class="py-3 px-3 shadow-lg text-center" style="border-radius: 2rem; background-color: #7aff78;" data-aos="zoom-in" data-aos-duration="3000">
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/images/umbrella.gif') ?>" width="50%">
                        <!-- <p class="font-weight-bold"><?php @$lang->social_power; ?></p> -->
                    </div>
                </div>
            </div>
        </div>
	</section>
<?= $this->endSection() ?>