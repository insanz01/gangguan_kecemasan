<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Login</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Akun</a></li>
              <li class="breadcrumb-item active">Login</li>
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
              <div class="col-5 mx-auto">
                <?= $this->session->flashdata('pesan'); ?>
              </div>
            </div>
          <?php endif; ?>
        <div class="row">
          <div class="col-5 mx-auto">
            <div class="card">
              <div class="card-body">
                <form action="<?= base_url('app/login') ?>" method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required class="form-control">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                  </div>
                  <div class="text-center">
                    <a href="<?= base_url('app/register') ?>">Belum punya akun?</a>
                    <br>
                    <a href="<?= base_url('app/forgot') ?>">Lupa password !</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
