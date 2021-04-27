<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="section-title">
                <h4 style="margin-top: 32px;">Tambah Tempat Kuliner</h4>
                <br>
            </div>
        </div>
    </div>
    <!-- Signup Section Begin -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="create__form">
                    <form action="/TempatK/save" method="POST">
                        <?= csrf_field(); ?>
                        <!-- Nama Tempat Kuliner -->
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Nama :</h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama" autofocus>
                            </div>
                        </div>
                        <!-- Pemilik -->
                        <div class="form-group row">
                            <label for="pemilik" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Pemilik : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="pemilik" name="pemilik">
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Alamat : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gambar" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Gambar : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="gambar" name="gambar">
                            </div>
                        </div>
                        <div class="col offset-md-9">
                            <button type="submit" class="site-btn mb-4">Tambah Data</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Signup Section End -->

</div>
<?= $this->endSection(); ?>