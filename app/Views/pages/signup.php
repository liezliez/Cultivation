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
                    <h2>Sign Up</h2>
                    <p>Welcome to Cultivation</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Signup Section Begin -->
<section class="signup spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Sign Up</h3>
                    <form action="#">
                        <div class="input__item">
                            <input type="text" placeholder="Email address">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" placeholder="Your Name">
                            <span class="icon_profile"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" placeholder="Password">
                            <span class="icon_lock"></span>
                        </div>
                        <button type="submit" class="site-btn">Login Now</button>
                    </form>
                    <h5>Already have an account? <a href="#">Log In!</a></h5>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="signup__word">
                    <h3>Cari Tempat Kulinermu <br> <a>Sekarang!</a>
                    </h3>
                </div>
                <div class="img-container">
                    <img src="/img/cultivation/logo-gede.png" alt="">
                </div>
                <div class="signup__word">
                    <h2>CULTIVATION</h2>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Signup Section End -->
<?= $this->endSection('content'); ?>