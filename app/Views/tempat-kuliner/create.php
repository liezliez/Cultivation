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
                    <form action="/TempatK/save" method="POST" enctype="multipart/form-data">

                        <!-- cross section code igniter -->
                        <?= csrf_field(); ?>

                        <!-- Nama Tempat Kuliner -->
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Nama :</h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
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
                                <input type="text" class="form-control <?= ($validation->hasError('pemilik')) ? 'is-invalid' : ''; ?>" id="pemilik" name="pemilik" value="<?= old('pemilik'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('pemilik'); ?>
                                </div>
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
                                <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Deskripsi -->
                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-3 col-form-label">
                                <div class="create-title">
                                    <h4>deskripsi : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" value="<?= (old('deskripsi')) ?>"></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('deskripsi'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Gambar -->
                        <div class="form-group row">
                            <label for="gambar" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Gambar : </h4>
                                </div>
                            </label>
                            <div class="col-sm-2">
                                <img src="/img/tempat-kuliner/default.jpg" alt="" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-sm-7">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewGambar()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar'); ?>
                                    </div>
                                    <label class="custom-file-label" for="gambar">Pilih gambar..</label>
                                </div>
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