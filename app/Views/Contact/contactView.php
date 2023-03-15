<?= $this->extend('App\Views\Layout\main') ?>
<?= $this->section('slider') ?>
    <style>
        .img-bg {
            background-image: linear-gradient(
                to bottom,
                rgb(0 0 0 / 59%),
                rgb(0 0 0 / 72%)
            ), url('<?= base_url('assets/img/kontak.png') ?>');
        }
    </style>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center img-bg">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2><?= @$lang->contact; ?></h2>
            <ol>
                <li><a href="<?= base_url('/'); ?>"><?= @$lang->home; ?></a></li>
                <li><?= @$lang->contact; ?></li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-3">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-map"></i>
                        <h3><?= @$lang->address ?></h3>
                        <p>-</p>
                    </div>
                </div><!-- End Info Item -->

                <a href="mailto:informasi@pintukeluar.id" class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3><?= @$lang->email; ?></h3>
                        <p>informasi@pintukeluar.id</p>
                    </div>
                </a><!-- End Info Item -->

                <a href="tel:6283862080888" class="col-lg-3 col-md-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-telephone"></i>
                        <h3><?= @$lang->phone; ?></h3>
                        <p>+62 838-6208-0888</p>
                    </div>
                </a><!-- End Info Item -->

                <a class="col-lg-3 col-md-6" href="https://docs.google.com/forms/d/e/1FAIpQLSdZ17RCrBhsK2CXnqYkUWH8gTfoc8CyhdqGXHp83dWjJXdZgQ/viewform?usp=sf_link">
                    <div>
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="fas fa-check-square"></i>
                            <h3><?= "Form"; ?></h3>
                            <p>
                                Beriklan
                            </p>
                        </div>
                    </div><!-- End Info Item -->
                </a>
            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-12">
                    <iframe src="https://maps.google.com/maps?q=indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div><!-- End Google Maps -->
                <div class="col-lg-12">
                    <iframe 
                        src="https://docs.google.com/forms/d/e/1FAIpQLSfofRRjmxKWhcpZRR80gi6XITBS6QmOy2ZMwpOtX54NSiJwYA/viewform?embedded=true"
                        width="100%"
                        height="1000"
                        frameborder="0"
                        marginheight="0"
                        marginwidth="0">
                    </iframe>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </section><!-- End Contact Section -->
<?= $this->endSection() ?>