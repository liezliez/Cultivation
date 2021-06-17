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
                            <!-- QUERY NAVBAR -->
                            <li><a href="/">Homepage</a></li>
                            <li><a href="/tempat-kuliner">Tempat Kuliner</a></li>
                            <?php if ((session()->get('logged_in') == true) && (session()->get('role_id') == 1)) {
                                echo
                                '<li><a href="/user">User</a></li>';
                            } ?>
                            <li><a href="./categories.html">Daya Tarik<span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="/TempatK/murah">Murah</a></li>
                                    <li><a href="/TempatK/bersih">Bersih</a></li>
                                    <li><a href="/TempatK/enak">Enak</a></li>
                                </ul>
                            </li>
                            <li><a href="/tentang-kami">Tentang Kami</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <?php
            $username = session()->get('username');
            if (session()->get('logged_in') == true) {
                echo '
                        <div class="col-lg-2">
                            <div class="header__right">
                                <a href="/profile" class="ml-1">' . $username . ' | </a> <br>
                                <a href="/logout" class="logout">Logout <span class="fa fa-sign-out"></span></a>
                            </div>
                        </div>';
            } else {
                echo '
                        <div class="col-lg-2">
                            <div class="header__right">
                                <a href="/login" class="login-switch ml-4 mr-0">Login | Sign-up <span class="icon_profile"></a>
                            </div>
                        </div>';
            } ?>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Script -->
    <script>
        $(document).ready(function() {
            $(".header .container. .row .col-lg-10.header__nav .header__menu").bind("click", function(event) {
                event.preventDefault();
                var clickedItem = $(this);
                $(".header__menu .header__menu").each(function() {
                    $(this).removeClass("active");
                });
                clickedItem.addClass("active");
            });
        });
    </script>

    <!-- Script Silahkan Login Message -->
    <?php
    $message = session()->getFlashdata('larangan');
    function IsNullOrEmptyString($str)
    {
        return (!isset($str) || trim($str) === '');
    }
    if (!(IsNullOrEmptyString($message))) {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    ?>
</header>
<!-- Header End -->