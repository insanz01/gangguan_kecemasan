<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Akun Member</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Master Data</a></li>
          <li class="breadcrumb-item active">Akun Member</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-10 mx-auto">
        <h3 class="text-center">Akun Member</h3>
        <hr class="text-center">

        <div class="row">
          <div class="col-12 mb-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">
            Tambah Data
            </button>
          </div>
          <div class="col-12 mx-auto">
            <div class="card">
              <div class="card-body">
                <table class="table table-striped tabled-bordered">
                  <thead>
                    <th style="width: 5%">#</th>
                    <th style="width: 15%">Username</th>
                    <th style="width: 20%">Nama Pengguna</th>
                    <th style="width: 25%">Email</th>
                    <th style="width: 15%">Terakhir Login</th>
                    <th style="width: 10%">Created At</th>
                    <th style="width: 10%">Aksi</th>
                  </thead>
                  <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach($user as $u): ?>
                      <tr>
                        <td><?= $nomor++ ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= $u['nama_lengkap'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td>
                          <?php if($u['last_login'] < 1): ?>
                            < 1
                          <?php else: ?>
                            <?= $u['last_login'] ?>
                          <?php endif; ?>
                          hari
                        </td>
                        <td><?= date('d M Y', strtotime($u['created_at'])) ?></td>
                        <td>
                          <!-- <a href="#!" id-certainty="<?= $c['id'] ?>" onclick="show_data(this)" role="button" class="badge badge-sm badge-info badge-pill" data-toggle="modal" data-target="#editModal">Edit</a> -->
                          <!-- <a href="<?= base_url('Admin/certainty/delete/') . $c['id'] ?>" class="badge badge-sm badge-danger badge-pill">Hapus</a> -->
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script type="text/javascript">

</script>