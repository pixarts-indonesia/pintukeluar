<?= $this->extend('App\Views\Layout\main') ?>
<?= $this->section('slider') ?>
    <style>
        .img-bg {
            background-image: linear-gradient(
                to bottom,
                rgb(0 0 0 / 59%),
                rgb(0 0 0 / 72%)
            ), url('<?= base_url('assets/images/bg_3.jpg') ?>'); }
    </style>
    <div class="hero-wrap js-fullheight img-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <span class="mr-2">
                        <a href="<?= base_url('/'); ?>"><?= @$lang->home; ?></a>
                    </span>
                    <span><?= @$lang->about; ?></span>
                </p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <h1><?= @$lang->sub_about; ?></h1>
                    <p><?= @$lang->sub_sub_about; ?></p>
                </h1>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <section class="bg-dark">
        <div class="container ftco-section">
            <h1 class="text-white text-center font-weight-bold" data-aos="fade-up"><?= strtoupper(@$lang->milestone); ?></h1>
        </div>
    </section>
    <section class="bg-dark">
        <div class="container">
            <?php foreach (@$list_about as $key => $value) : ?>
                <div class="single-box <?= ($key % 2 === 1) ? '' : 'box-right'?>">
                <div class="custom"></div>
                    <div class="date-area">
                        <span data-aos="fade-up"><?= @$value->title; ?></span>
                    </div>
                    <div class="content" data-aos="fade-up">
                        <?= @$value->text; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="bg-light py-5 radius-list">
        <div class="container">
            <h1 class="text-dark text-center font-weight-bold" data-aos="fade-up"><?= strtoupper(@$lang->pillar_of_power); ?></h1>
            <div class="row">
                <div class="col-lg-4 col-md-12 p-5">
                    <div class="p-5 shadow-lg" style="border-radius: 2rem; background-color: #78ffe6;" data-aos="zoom-in">
                        <h4 class="font-weight-bold"><?= @$lang->social_power; ?></h4>
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/images/kekuatan-sosial.png') ?>" width="100%">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 p-5">
                    <div class="p-5 shadow-lg" style="border-radius: 2rem; background-color: #7895ff;" data-aos="zoom-in">
                        <h4 class="font-weight-bold"><?= @$lang->innovation; ?></h4>
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/images/inovasi.png') ?>" width="100%">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 p-5">
                    <div class="p-5 shadow-lg" style="border-radius: 2rem; background-color: #cbff78;" data-aos="zoom-in">
                        <h4 class="font-weight-bold"><?= @$lang->solution ?></h4>
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/images/solusi.png') ?>" width="100%">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-5">
                    <div class="p-5 shadow-lg" style="border-radius: 2rem; background-color: #ff7878;" data-aos="zoom-in">
                        <h4 class="font-weight-bold"><?= @$lang->transformation ?></h4>
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/images/tranformasi.png') ?>" width="100%">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-5">
                    <div class="p-5 shadow-lg" style="border-radius: 2rem; background-color: #ffdc78;" data-aos="zoom-in">
                        <h4 class="font-weight-bold"><?= @$lang->conquer_boundaries ?></h4>
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/images/taklukan-batas.png') ?>" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>