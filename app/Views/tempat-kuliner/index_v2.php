<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Homepage</a>
                    <span>Tempat Kuliner</span>
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
                    <h4 style="margin-top: 32px;">Daftar Tempat Kuliner</h4>

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

            <section class="blog spad">
                <div class="container">
                    <div class="row">
                        <?php $i = 0;
                        $kolom = 0 ?>
                        <?php foreach ($tempatkuliner as $tempatk) : ?>
                            <?php $rate = $tempatk['rating']; ?>
                            <?php if (($i % 6 == 0) or ($i == 0)) { ?>
                                <div class="col-lg-6">
                                    <div class="row">
                                    <?php } ?>
                                    <?php if ($kolom == 0) { ?>
                                        <?php if (($i % 3 == 0) or ($i == 0)) { ?>
                                            <!-- <h1> <?= $i; ?></h1> -->
                                            <div class="col-lg-12">
                                                <div class="blog__item set-bg" data-setbg="/img/tempat-kuliner/<?= $tempatk['gambar']; ?>">
                                                    <div class="blog__item__text">
                                                        <div class="rating">
                                                            <?php for ($x = 0; $x < $rate; $x++) { ?>
                                                                <i><span class="fa fa-star"></span></i>
                                                            <?php } ?>
                                                        </div>
                                                        <h4><a href="/tempat-kuliner/<?= $tempatk['slug']; ?>">Yuri Kuma Arashi Viverra Tortor Pharetra</a></h4>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } else { ?>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="blog__item small__item set-bg" data-setbg="/img/tempat-kuliner/<?= $tempatk['gambar']; ?>">
                                                    <div class="blog__item__text">
                                                        <?php for ($x = 0; $x < $rate; $x++) { ?>
                                                            <i><span class="fa fa-star"></span></i>
                                                        <?php } ?>
                                                        <h4><a href="/tempat-kuliner/<?= $tempatk['slug']; ?>">Bok no Hero Academia Season 4 – 18</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php if (($i == 1) or ($i == 3) or ($i == 0) or ($i == 4)) { ?>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="blog__item small__item set-bg" data-setbg="/img/tempat-kuliner/<?= $tempatk['gambar']; ?>">
                                                    <div class="blog__item__text">
                                                        <p><span class="icon_calendar"></span> 01 March 2020</p>
                                                        <h4><a href="/tempat-kuliner/<?= $tempatk['slug']; ?>"><?= $i; ?></a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="col-lg-12">
                                                <div class="blog__item set-bg" data-setbg="/img/tempat-kuliner/<?= $tempatk['gambar']; ?>">
                                                    <div class="blog__item__text">
                                                        <p><span class="icon_calendar"></span> 01 March 2020</p>
                                                        <h4><a href="/tempat-kuliner/<?= $tempatk['slug']; ?>"><?= $i; ?></a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php $i++; ?>
                                    <?php if (($i % 6 == 0) or ($i == 0)) { ?>
                                    </div>
                                </div>
                            <?php $i = 0;
                                        $kolom = 1;
                                    }
                            ?>
                        <?php endforeach; ?>

            </section>

        </div>
    </div>

    <?= $this->endSection(); ?>