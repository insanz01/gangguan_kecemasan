<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Registrasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Akun</a></li>
              <li class="breadcrumb-item active">Registrasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php if($this->session->flashdata('pesan')): ?>
          <div class="row">
            <div class="col-7 mx-auto">
              <?= $this->session->flashdata('pesan'); ?>
            </div>
          </div>
        <?php endif; ?>
        <div class="row">
          <div class="col-7 mx-auto">
            <div class="card">
              <div class="card-body">
                <form action="<?= base_url('app/register') ?>" method="post">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="<?= set_value('nama_lengkap') ?>" required>
                    <small class="text-danger"><?= form_error('nama_lengkap') ?></small>
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?= set_value('username') ?>" required>
                    <small class="text-danger"><?= form_error('username') ?></small>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?= set_value('email') ?>" required>
                    <small class="text-danger"><?= form_error('email') ?></small>
                  </div>
                  <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" name="nomor_hp" class="form-control" value="<?= set_value('nomor_hp') ?>" required>
                    <small class="text-danger"><?= form_error('nomor_hp') ?></small>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="<?= set_value('tanggal_lahir') ?>" required>
                    <small class="text-danger"><?= form_error('tanggal_lahir') ?></small>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" required>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?= set_value('password') ?>" required>
                    <small class="text-danger"><?= form_error('password') ?></small>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">REGISTRASI</button>
                  </div>
                </form>
                <div class="text-center">
                  <a href="<?= base_url('app/login') ?>">Sudah Punya Akun ?</a>
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