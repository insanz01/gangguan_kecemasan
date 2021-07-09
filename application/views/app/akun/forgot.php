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
        <div class="row">
          <?php if($this->session->flashdata('pesan')): ?>
            <div class="col-5 mx-auto">
              <?= $this->session->flashdata('pesan'); ?>
            </div>
          <?php endif; ?>
          <div class="col-5 mx-auto">
            <div class="card">
              <div class="card-body">
                <form action="<?= base_url('app/forgot/reset') ?>" method="post">
                  <div class="form-group">
                    <label>Email : </label>
                    <input type="email" name="email" required class="form-control">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">RESET PASSWORD</button>
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