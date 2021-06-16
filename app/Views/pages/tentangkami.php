<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Homepage</a>
                    <span>Tentang Kami</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Section Begin -->
<div class="container">
    <div class="section-title">
        <h4 style="margin-top: 32px;">Kelompok 6 RPL - Cultivation</h4>
    </div>
    <h5 style="color: azure;"> Kami adalah segerombol mahasiswa yang secara tidak sengaja menjadi sebuah kelompok di Mata Kuliah RPL <br>
        Dengan segala jerih payah usaha, keringat dan berbagai macam cairan yang keluar dari tubuh. <br>
        Alhamdulillah kami dapat menuntaskan website ini untuk memenuhi tugas besar di mata kuliah RPL kami.
    </h5>
    <div class="row">
        <?php foreach ($kami as $k) : ?>
            <div class="col-md-3 mb-5">
                <div class="main">
                    <div class="service">
                        <div class="service-logo">
                            <img src="/img/tentang-kami/<?php echo $k['gambar'] ?>" alt="">
                        </div>
                        <h4><?php echo $k['nama'] ?></h4>
                        <p><?php echo $k['deskripsi'] ?></p>
                    </div>

                    <div class="shadow1"></div>
                    <div class="shadow2"></div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
<!-- Blog Section End -->

<?= $this->endSection(); ?>