<?= $this->extend('layout/template'); ?>
<!DOCTYPE html>
<html lang="english">
<?php

use CodeIgniter\I18n\Time; ?>

<?= $this->section('content'); ?>


<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Homepage</a>
                    <a href="/tempat-kuliner">Tempat Kuliner</a>
                    <span><?= $tempatk['nama']; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg" data-setbg="/img/tempat-kuliner/<?= $tempatk['gambar']; ?>">
                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3><?= $tempatk['nama']; ?></h3>
                            <span><?= $tempatk['alamat']; ?></span>
                        </div>
                        <div class="anime__details__rating">
                            <div class="rating">
                                <?php $rate = $tempatk['rating']; ?>
                                <?php for ($x = 0; $x < $rate; $x++) { ?>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                <?php } ?>
                            </div>
                            <span>Rating kami : <?php
                                                switch ($rate) {
                                                    case 1:
                                                        echo "Buruk";
                                                        break;
                                                    case 2:
                                                        echo "Lumayan";
                                                        break;
                                                    case 3:
                                                        echo "Baik";
                                                        break;
                                                    case 4:
                                                        echo "Sangat Baik";
                                                        break;
                                                    default:
                                                        echo "Auto Langganan";
                                                }
                                                ?></span>
                        </div>
                        <p><?= $tempatk['deskripsi']; ?></p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Pemilik:</span> <?php echo $tempatk['pemilik'] ?></li>
                                        <li><span>Jam Buka:</span>
                                            <?php echo date('G:i', strtotime($tempatk['jam_buka'])); ?> -
                                            <?php echo date('G:i', strtotime($tempatk['jam_tutup'])); ?>
                                        </li>
                                        <li><span>Harga:</span> Rp.<?php echo $tempatk['harga_min'] ?> - <?php echo $tempatk['harga_max'] ?></li>
                                        <li><span>Rating:</span><i class="fa fa-star"></i> <?php echo $rate ?>/5</li>
                                        <!-- <li><span>Kategori :</span> Murah, Enak, Banyak, Bersih</li> -->
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <!-- <li><span>Views:</span> 13.454</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__btn">
                            <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Like</a>
                            <a href="#comment-section" class="watch-btn"><span> Beri Review</span></a>
                            <a href="/tempat-kuliner/edit/<?= $tempatk['slug']; ?>" class="follow-btn ml-2"> <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</a>
                            <form action="/tempat-kuliner/<?= $tempatk['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="follow-btn" onclick="return confirm('apakah anda yakin?');">Delete</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">

                <!-- Reviews Users -->
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Reviews</h5>
                    </div>
                    <?php $autoload['helpers'] = array('date', 'myhelper'); ?>
                    <?php $i = 0; ?>
                    <?php foreach ($reviews as $review => $value) : ?>
                        <!-- For one Review by -->
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="<?php echo base_url('img/user/' . $value['gambar']) ?>" alt="">
                            </div>
                            <div class="anime__review__item__text">

                                <h6><?php echo $value['username'] ?> -
                                    <span>
                                        <?php
                                        // echo $value['slug'];
                                        echo $review;
                                        ?>
                                    </span>
                                </h6>
                                <p><?php echo $value['review']; ?></p>
                            </div>
                        </div>
                        <!-- Review -->
                    <?php endforeach; ?>


                </div>
                <div class="anime__details__form">
                    <!-- Comment Section -->
                    <a id="comment-section"></a>
                    <div class="section-title">
                        <h5>Your Review</h5>
                    </div>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <form action="/review/save/<?= $tempatk['slug']; ?>" method="post" enctype="multipart/form-data">
                        <textarea id="main-review" name="main-review" placeholder="Your Comment"></textarea>
                        <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="anime__details__sidebar">
                    <div class="section-title">
                        <h5>Yang mungkin kamu suka</h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/crisbar.jpg">
                        <div class="ep">10k - 20k/Porsi ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/crisbar.jpg">
                        <div class="ep">10k - 20k/Porsi</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/crisbar.jpg">
                        <div class="ep">10k - 20k/Porsi</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/crisbar.jpg">
                        <div class="ep">10k - 20k/Porsi</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<!-- Anime Section End -->
<?= $this->endSection('content'); ?>