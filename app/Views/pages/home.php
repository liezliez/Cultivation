//Menggunakan template navbar
<?= $this->extend('layout/template'); ?>

<!DOCTYPE html>
<html lang="english">


<?= $this->section('content'); ?>
<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="/img/hero/crisbar.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Kenyang</div>
                            <div class="label">Pedas</div>
                            <h2> Ayam Geprek Crisbar</h2>
                            <p> Ayam Geprek Crisbar adalah populer makan yang berfokus pada Ayam
                                geprek crispy dimana kita dapat memilih sendiri sambal dan topping ..
                            </p>
                            <a href="/tempatkuliner.php"><span>Detail</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="/img/hero/baghdad.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Murah</div>
                            <div class="label">Kenyang</div>
                            <h2> Ayam Baghdad</h2>
                            <p> Setiap Mahasiswa yang sering melewati pengkolan sukabirus pasti
                                sudah tidak asing lagi dengan populer makan yang satu ini ...
                            </p>
                            <a href="#"><span>Detail</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="/img/hero/warteg-pengkolan.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Murah</div>
                            <div class="label">Enak</div>
                            <div class="label">Akhir Bulan</div>
                            <h2>Warteg Pengkolan</h2>
                            <p>Warpeng atau Warteg Pengkolan adalah Warung nasi yang terkenal murah dan enak
                                bagi para mahasiswa-mahasiswi pecinta masakan tegal. Biasanya warung ini ..
                            </p>
                            <a href="#"><span>Detail</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Item Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Populer</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">Lihat Semua <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="/img/trending/crisbar-long.jpg">
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
                                    <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="/img/hero/warteg-pengkolan.jpg">
                                    <div class="ep">5k - 20k</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                        <li>Bersih</li>
                                    </ul>
                                    <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="/img/hero/warteg-pengkolan.jpg">
                                    <div class="ep">5k - 20k</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="/img/hero/warteg-pengkolan.jpg">
                                    <div class="ep">5k - 20k</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Warteg Pengkolan</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="/img/trending/crisbar-long.jpg">
                                    <div class="ep">5k - 20k</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Warteg Pengkolan</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popular__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Rating Tertinggi</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?php echo base_url('/img/hero/warteg-pengkolan.jpg'); ?>">
                                    <div class="ep">5k - 20k</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?php echo base_url('/img/hero/warteg-pengkolan.jpg'); ?>">
                                    <div class="ep">5k - 20k</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?php echo base_url('/img/hero/warteg-pengkolan.jpg'); ?>">
                                    <div class="ep">5k - 20k</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="recent__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Baru Ditambahkan</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?php echo base_url('/img/recent/baghdad.jpg'); ?>">
                                    <div class="ep">5k - 20k</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?php echo base_url('/img/recent/baghdad.jpg'); ?>">
                                    <div class="ep">5k - 20k</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?php echo base_url('/img/recent/baghdad.jpg'); ?>">
                                    <div class="ep">5k - 20k</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Ayam Geprek Crisbar</a></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <div class="section-title">
                            <h5>Paling Sering Dicari</h5>
                        </div>
                        <ul class="filter__controls">
                            <li class="Kenyang" data-filter="*">Day</li>
                            <li data-filter=".week">Week</li>
                            <li data-filter=".month">Month</li>
                            <li data-filter=".years">Years</li>
                        </ul>
                        <div class="filter__gallery">
                            <div class="product__sidebar__view__item set-bg mix day years" data-setbg="<?php echo base_url('/img/hero/baghdad.jpg'); ?>">
                                <div class="ep">Sekitar 12k/Menu</div>
                                <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                <h5><a href="#">Starbuck</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week" data-setbg="<?php echo base_url('/img/hero/baghdad.jpg'); ?>">
                                <div class="ep">Sekitar 12k/Menu</div>
                                <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                <h5><a href="#">Solaria</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix week years" data-setbg="<?php echo base_url('/img/hero/baghdad.jpg'); ?>">
                                <div class="ep">Sekitar 12k/Menu</div>
                                <div class="view"><i class="fa fa-star"></i> 6.9/10</div>
                                <h5><a href="#">Dunkin Donuts</a></h5>

                            </div>
                        </div>
                        <div class="product__sidebar__comment">
                            <div class="section-title">
                                <h5>Riview Terbaru</h5>
                            </div>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="<?php echo base_url('/img/sidebar/sidebar-baghdad.jpg'); ?>" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Ayam Baghdad</a></h5>
                                    <span><i class="fa fa-star"></i> 6.900 kali dilihat</span>
                                </div>
                            </div>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="<?php echo base_url('/img/sidebar/sidebar-baghdad.jpg'); ?>" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Ayam Baghdad</a></h5>
                                    <span><i class="fa fa-star"></i> 6.900 kali dilihat</span>
                                </div>
                            </div>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="<?php echo base_url('/img/sidebar/sidebar-baghdad.jpg'); ?>" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Kenyang</li>
                                        <li>Nyaman</li>
                                    </ul>
                                    <h5><a href="#">Ayam Baghdad</a></h5>
                                    <span><i class="fa fa-star"></i> 6.900 kali dilihat</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Item Section End -->

<?= $this->endSection('content'); ?>