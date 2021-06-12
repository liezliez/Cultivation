<?= $this->extend('layout/template'); ?>

<!DOCTYPE html>
<html lang="english">
<?php $autoload['helpers'] = array('form', 'myhelper'); ?>


<!-- Content Section -->
<?= $this->section('content'); ?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Homepage</a>
                    <span>Daftar User</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="section-title">
                    <h4 style="margin-top: 32px;">Daftar User</h4>
                </div>
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <!-- <h3 class="card-title" style="font-family: Oswald, sans-serif;">Data User</h3> -->
                        <div class="card-tools">
                            <div class="input-group input-group-md">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Cari Username">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">Temukan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="col-11 card-body table-responsive p-0 ml-3">
                        <table class="table table-striped table-dark table-head-fixed text-nowrap">
                            <thead class="thead-dark ">
                                <tr>
                                    <th style="width: 70px;">No</th>
                                    <th style="width: 70px;">ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>
                                        Aksi
                                    </th>
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
                                        <td><?= ($value['active'] == 1) ? 'aktif' : 'non-aktif'; ?></td>
                                        <td>
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#edit<?= $value['id']; ?>"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#delete<?= $value['id']; ?>"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php }  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <?php foreach ($users as $key => $value) { ?>
        <div class="modal fade" id="edit<?= $value['id']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Users</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('user/editUser/' . $value['id']) ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" value="<?= $value['username']; ?>" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" value="<?= $value['email']; ?>" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <input name="role_id" value="<?= $value['role_id']; ?>" class="form-control" placeholder="role_id">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input name="active" value="<?= $value['active']; ?>" class="form-control" placeholder="'1': aktif, '0':nonaktif">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <?php }  ?>
    <!-- Modal delete -->
    <?php foreach ($users as $key => $value) { ?>
        <div class="modal fade" id="delete<?= $value['id']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda ingin menghapus <b><?= $value['username']; ?></b> ?
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <?php }  ?>
</div>
</div>
<?= $this->endSection('content'); ?>