<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="title-table">Daftar Tempat Kuliner</h2>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tempatkuliner as $tempatk) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td class="image-table"> <img src="/img/tempat-kuliner/<?= $tempatk['gambar']; ?>" alt=""> </td>
                            <td> <?= $tempatk['nama']; ?> </td>
                            <td> <a href="" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>