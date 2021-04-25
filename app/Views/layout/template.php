<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cultivation">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

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
                        <a href="/">
                            <!-- echo '<img src="' . base_url('assets/images/man.png') . '" -->
                            <img src="/img/headerlogo.png" alt="" height="40px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>

                                <li class="active"><a href="/">Homepage</a></li>
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
                        <a href="/login" class="login-switch"><span class="icon_profile"></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <?= $this->renderSection('content'); ?>

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="/"><img src="<?php echo base_url('/img/logo.png'); ?>" alt=""></a>
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