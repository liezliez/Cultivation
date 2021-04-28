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
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4 style="margin-top: 32px;">Daftar User</h4>
                </div>
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