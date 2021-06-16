<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cultivation">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link href="favicon.png" rel="shortcut icon" type="image/x-icon" />

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
    <!-- Navbar -->
    <?= $this->include('layout/navbar-admin'); ?>

    <!-- content -->
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
                            <li class="Kenyang"><a href="/">Homepage</a></li>
                            <li><a href="/tempat kuliner">Tempat Kuliner</a></li>
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

    <!-- Script Tambahan Urang -->

    <!-- Buat Priview Gambar di Create -->
    <script>
        function previewGambar() {
            const gambar = document.querySelector('#gambar');
            const gambarLabel = document.querySelector('.custom-file-label');
            const gambarPreview = document.querySelector('.img-preview');

            gambarLabel.textContent = gambar.files[0].name;

            const fileGambar = new FileReader();
            fileGambar.readAsDataURL(gambar.files[0]);

            fileGambar.onload = function(e) {
                gambarPreview.src = e.target.result;
            }

        }
    </script>


</body>

</html>