<?= $this->extend('App\Views\Layout\main') ?>
<?= $this->section('slider') ?>
    <style>
        .img-bg {
            background-image: linear-gradient(
                to bottom,
                rgb(0 0 0 / 59%),
                rgb(0 0 0 / 72%)
            ), url('<?= base_url('assets/images/bg_4.jpg') ?>');
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
                    <span><?= @$lang->contact; ?></span>
                </p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <?= @$lang->contact; ?>
                </h1>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="bg-light ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info" data-aos="fade-up">
                <div class="col-md-12 mb-4">
                    <h2 class="h4"><?= @$lang->title_contact; ?></h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span><?= @$lang->address ?>:</span> -</p>
                </div>
                <div class="col-md-3">
                    <p><span><?= @$lang->phone ?>:</span> <a href="tel:6283862080888">+62 838-6208-0888</a></p>
                </div>
                <div class="col-md-3">
                    <p><span><?= @$lang->email; ?>:</span> <a href="mailto:informasi@pintukeluar.id">informasi@pintukeluar.id</a></p>
                </div>
                <div class="col-md-3">
                    <p><span><?= @$lang->website; ?></span> <a href="<?= base_url('/') ?>">pintukeluar.id</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <form data-aos="fade-up">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="<?= @$lang->name; ?> *">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="mail" placeholder="<?= @$lang->email; ?> *">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" placeholder="<?= @$lang->message; ?> *" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <a href="#" class="btn btn-secondary"><?= @$lang->sand; ?></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div class="mapouter" data-aos="fade-up">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="80%" id="gmap_canvas" src="https://maps.google.com/maps?q=indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://123movies-to.org"></a>
                            <br>
                            <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                            <a href="https://www.embedgooglemap.net"></a>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>