<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Konsultasi</a></li>
              <li class="breadcrumb-item active">Data Pasien</li>
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
          <div class="col-7 mx-auto">
            <h3 class="text-center">Pengisian Data Pasien</h3>
            <hr class="text-center">

            <div class="row">
              <div class="col-10 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url('app/konsultasi/3') ?>" method="post">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group">
                        <label>Umur</label>
                        <input type="number" name="umur" min=1 class="form-control" placeholder="Masukkan Umur">
                      </div>
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <br>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
                        <br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Lanjut</button>
                        <button type="reset" class="btn btn-danger btn-block">Reset</button>
                      </div>
                    </form>
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