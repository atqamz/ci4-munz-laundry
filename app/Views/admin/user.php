<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-10">
        <h1><?= $title; ?></h1>
      </div>
      <div class="col-sm">
        <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#add">
          <i class="fa fa-plus mr-2"></i>Tambah User
        </button>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>

<section class="content">

  <!-- Alert -->
  <!-- Alert sukses -->
  <?php if (session()->getFlashData('message')) { ?>
    <div class="alert alert-success text-center shadow p-3" role="alert">
      <?php echo session()->getFlashData('message'); ?>
    </div>
  <?php } ?>

  <!-- Alert delete -->
  <?php if (session()->getFlashData('delete')) { ?>
    <div class="alert alert-danger text-center shadow p-3" role="alert">
      <?php echo session()->getFlashData('delete'); ?>
    </div>
  <?php } ?>
  <!-- /Alert -->

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar User</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>

    <div class="card-body p-0">
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th style="width: 1%">ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Outlet</th>
            <th>Role</th>
            <th style="width: 20%"></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($user as $u) : ?>
            <tr>
              <td class="text-center"><?= $u['id_user'] ?></td>
              <td><?= $u['nama_user'] ?></td>
              <td><?= $u['username'] ?></td>
              <td><?= $u['nama_outlet'] ?></td>
              <td><?= $u['role'] ?></td>

              <td class="project-actions text-center">
                <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit<?= $u['id_user'] ?>">
                  <i class="fas fa-pencil-alt"></i>
                  Edit
                </a>
                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $u['id_user'] ?>">
                  <i class="fas fa-trash"></i>
                  Delete
                </a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</section>

<?= $this->include('admin/modal/user_modal'); ?>

<?php $this->endSection(); ?>