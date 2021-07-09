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
              <form action="<?= base_url('app/forgot/reset') ?>" method="post">
                <input type="hidden" name="email" value="<?= $user['email'] ?>">
                <div class="form-group">
                  <label>Password baru : </label>
                  <input type="password" name="password" id="primary" required class="form-control">
                </div>
                <div class="form-group">
                  <label>Ulangi password : </label>
                  <input type="password" required class="form-control" onkeyup="validation(this)">
                  <small class="text-danger" id="error_message"></small>
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

<script type="text/javascript">
  const validation = (target) => {
    const password = document.getElementById('primary').value;
    if(target.value !== password) {
      document.getElementById('error_message').innerHTML = "Password tidak cocok";
    } else {
      document.getElementById('error_message').innerHTML = "";
    }
  }
</script>