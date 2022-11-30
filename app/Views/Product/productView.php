<?= $this->extend('App\Views\Layout\main') ?>
<?= $this->section('slider') ?>
    <style>
        .img-bg {
            background-image: linear-gradient(
                to bottom,
                rgb(0 0 0 / 59%),
                rgb(0 0 0 / 72%)
            ), url('<?= base_url('assets/images/bg_2.jpg') ?>');
        }
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
                    <span><?= @$lang->product; ?></span>
                </p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <?= @$lang->product; ?>
                </h1>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<?= $this->endSection() ?>