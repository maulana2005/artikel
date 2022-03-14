<?php foreach ($artikel as $ar) : ?>

    <div class="card-body">

        <h4><?= $ar->judul ?></h4>
        <small><?= $ar->nama_penulis ?></small> -
        <small><?= $ar->tanggal ?></small>


        <!-- <div class="row"> -->
        <div class="col-md-5">
            <img src="<?= base_url() . 'uploads/' . $ar->gambar ?>" class="card-img-top" width="100px">
        </div>
        <!-- <div class="col-md-0"> -->
        <p><?= $ar->artikel ?></p>
        <!-- <table class="table">
                <tr>
                    <td>Nama Penulis</td>
                    <td><strong><?= $ar->nama_penulis ?></strong></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><strong><?= $ar->kategori ?></strong></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><strong><?= $ar->tanggal ?></strong></td>
                </tr>
            </table> -->

        <?= anchor('welcome', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
        <!-- </div> -->

        <!-- </div> -->
    <?php endforeach; ?>
    </div>
    </div>