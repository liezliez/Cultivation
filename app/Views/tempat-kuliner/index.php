<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4 style="margin-top: 32px;">Daftar Tempat Kuliner</h4>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success mt-4" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <br>
                    <div class="anime__details__btn">
                        <a href="/tempat-kuliner/tambah" class="follow-btn">Tambah</a>
                        <a href="/tempat-kuliner/edit" class="follow-btn">Edit</a>
                    </div>
                </div>
            </div>

            <div class="trending__product">
                <div class="row">
                    <?php $i = 1; ?>
                    <?php foreach ($tempatkuliner as $tempatk) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <a href="/tempat-kuliner/<?= $tempatk['slug']; ?>">
                                    <div class="product__item__pic set-bg" data-setbg="/img/tempat-kuliner/<?= $tempatk['gambar']; ?>">
                                        <div class="ep">5k - 20k</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Kenyang</li>
                                            <li>Nyaman</li>
                                            <li>Murah</li>
                                        </ul>
                                        <h5><a href="#"><?= $tempatk['nama']; ?></a></h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>