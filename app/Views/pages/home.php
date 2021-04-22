<!DOCTYPE html>
<html lang="english">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cultivation">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cultivation | Cari populer kulinermu disini</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/elegant-icons.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/plyr.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/nice-select.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/slicknav.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <!-- echo '<img src="' . base_url('assets/images/man.png') . '" -->
                            <img src="/img/headerlogo.png" alt="" height="40px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="/pages/home.php">Homepage</a></li>
                                <li><a href="./blog.html">Tempat Kuliner</a></li>
                                <li><a href="./categories.html">Kategori <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Murah</a></li>
                                        <li><a href="./anime-details.html">Kenyang</a></li>
                                        <li><a href="./anime-watching.html">Mewah</a></li>
                                        <li><a href="./blog-details.html">Pedas</a></li>
                                        <li><a href="./signup.html">Cepat Saji</a></li>
                                        <li><a href="./login.html">populer Nongkrong</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Tentang Kami</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="#" class="login-switch"><span class="icon_profile"></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

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

    <!-- Product Section Begin -->
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
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="<?php echo base_url('/img/logo.png'); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="Kenyang"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Tempat Kuliner</a></li>
                            <li><a href="./blog.html">Kategori</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | by RPL kelompok 7 referensi web : <a href="www.colorlib.com">Colorlib</a></a>
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('js/player.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?php echo base_url('js/mixitup.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.slicknav.js') ?>"></script>
    <script src="<?php echo base_url('js/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('js/main.js') ?>"></script>


</body>

</html>