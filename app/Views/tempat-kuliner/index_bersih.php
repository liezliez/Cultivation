<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Homepage</a>
                    <a href="/tempat-kuliner">Tempat Kuliner</a>
                    <span>Bersih</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4 style="margin-top: 32px;">Daftar Tempat Kuliner Yang Bersih</h4>

                    <!-- Button Tambah Tempat Kuliner -->
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success mt-4" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <br>
                    <?php if ((session()->get('logged_in') == true) && (session()->get('role_id') == 1)) {
                        echo '  <div class="anime__details__btn">
                                <a href="/tempat-kuliner/tambah" class="tambah-btn">Tambah</a>
                                </div>
                            ';
                    }
                    ?>
                </div>
            </div>

            <!-- List Daftar Tempat Kuliner -->

            <div class="trending__product">
                <div class="row">
                    <?php $i = 1; ?>
                    <?php foreach ($tempatkuliner as $tempatk) : ?>
                        <?php if ($tempatk['kategori'] == 'bersih') { ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="/tempat-kuliner/<?= $tempatk['slug']; ?>">
                                        <div class="product__item__pic set-bg" data-setbg="/img/tempat-kuliner/<?= $tempatk['gambar']; ?>">
                                            <div class="ep">Rp.<?php echo $tempatk['harga_min'] ?> - <?php echo $tempatk['harga_max'] ?></div>
                                            <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div> -->
                                            <div class="view"><i class="fa fa-star">
                                                </i> Rating <?php echo $tempatk['rating']; ?>/5</div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li><?php echo $tempatk['kategori'] ?></li>
                                            </ul>
                                            <h5><a href="#"><?= $tempatk['nama']; ?></a></h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <<?php } ?> <?php endforeach; ?> </div>
                </div>
            </div>
        </div>

        <?= $this->endSection(); ?>