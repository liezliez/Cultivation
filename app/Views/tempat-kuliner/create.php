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
                    <form>
                        <!-- Nama Tempat Kuliner -->
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Nama :</h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                        <!-- Pemilik -->
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Pemilik : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="Pemilik" name="Pemilik">
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="form-group row">
                            <label for="Alamat" class="col-sm-3 col-form-label">
                                <div class="create-title">
                                    <h4>Alamat : </h4>
                                </div>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="Alamat" name="Alamat">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-2">Checkbox</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Example checkbox
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Signup Section End -->

</div>
<?= $this->endSection(); ?>