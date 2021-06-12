<?= $this->extend('layout/template'); ?>

<!DOCTYPE html>
<html lang="english">

<!-- Content Section -->
<?= $this->section('content'); ?>
<div class="col-12">
    <div class="card text-white bg-dark">
        <div class="card-header">
            <h3 class="card-title">Data User</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 650px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary"> Temukan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 400px;">
            <table class="table table-striped table-dark table-head-fixed text-nowrap">
                <thead class="thead-dark">
                    <tr>
                        <th style="width: 70px;">No</th>
                        <th style="width: 70px;">ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($users as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['id']; ?></td>
                            <td><?= $value['username']; ?></td>
                            <td><?= $value['email']; ?></td>
                            <td><?= ($value['role_id'] == 1) ? 'admin' : 'user'; ?></td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
<?= $this->endSection('content'); ?>