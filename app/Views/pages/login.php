<?= $this->extend('layout/template'); ?>

<!DOCTYPE html>
<html lang="english">

<?= $this->section('content'); ?>
<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="img/food.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Login</h2>
                    <p>Welcome to Cultivation</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Login</h3>
                    <form action="#">
                        <div class="input__item">
                            <input type="text" placeholder="Email address">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" placeholder="Password">
                            <span class="icon_lock"></span>
                        </div>
                        <button type="submit" class="site-btn">Login Sekarang</button>
                    </form>
                    <a href="#" class="forget_pass">Lupa Password</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Belum Punya Akun?</h3>
                    <a href="/signup" class="primary-btn">Registrasi Sekarang</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Login Section End -->
<?= $this->endSection('content'); ?>