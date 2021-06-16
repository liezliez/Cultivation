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

                            <!-- <li class="active"><a href="/">Homepage</a></li> -->
                            <li><a href="/admin">Homepage</a></li>
                            <li><a href="/tempat-kuliner">Tempat Kuliner</a></li>
                            <li><a href="/User/index">User</a></li>
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
                            <li><a href="/tentang-kami">Tentang Kami</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <?php
                    $username = session()->get('username');
                    if (session()->get('logged_in') == true) {
                        echo '<a href="/profile" class="ml-1">' . $username . ' | </a> <br>
                              <a href="/logout" class="logout">Logout <span class="fa fa-sign-out"></span></a>';
                    } else {
                        echo '<a href="/login" class="login-switch ml-4 mr-0">Login | Sign-up <span class="icon_profile"></a>';
                    } ?>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->