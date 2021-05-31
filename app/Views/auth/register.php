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
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4>Error</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- <form action="#">
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
                    </form> -->

                    <form action="/register/save" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="username" class="form-label"></label>
                            <input type="text" placeholder="Username" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"></label>
                            <input type="password" placeholder="Password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_conf" class="form-label"></label>
                            <input type="password" placeholder="Confirm Password" class="form-control" id="password_conf" name="password_conf">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"></label>
                            <input type="text" placeholder="Email" class="form-control" id="email" name="email">
                        </div>
                        <!-- Gambar -->
                        <div class="form-group row">
                            <label for="gambar" class="form-label"></label>
                            <div class="col-sm-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewGambar()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar'); ?>
                                    </div>
                                    <label class="custom-file-label" for="gambar">Pilih gambar..</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="site-btn">Register</button>
                        </div>
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
<!-- <script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script> -->