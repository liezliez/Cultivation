<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Homepage</a>
                    <span>User</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-lg-6 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4 style="margin-top: 32px;">Daftar User</h4>
                </div>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukan Keyword Pencarian.." aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (8 * ($currentPage - 1)); ?>
                    <?php foreach ($user as $u) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $u['nama']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><a href="/tempat-kuliner/tambah" class="btn btn-danger">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('user', 'user_pagination'); ?>
            <br>
            <br>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>