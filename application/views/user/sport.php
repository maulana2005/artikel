<div class="container-fluid">

    <font>
        <marquee behavior="" direction="left">
            <h3> SELAMAT DATANG DI WEBSITE KAMI</h3>
        </marquee>
    </font>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/slider8.jpg'); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider10.jpg'); ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row text-center mt-4">

        <?php foreach ($sport as $ar) : ?>

            <div class="card ml-3 mb-3" style="width: 17rem;">
                <img src="<?= base_url() . 'uploads/' . $ar->gambar; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="<?= base_url('dashboard/detail/' . $ar->id) ?>">
                        <h6 class="card-title mb-3"><?= $ar->judul ?></h6>
                    </a>
                    <p><?= $ar->tanggal ?></p>
                    <!-- <?= anchor('dashboard/detail/' . $ar->id) ?> -->

                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>