<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Laporan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Laporan</a></li>
          <li class="breadcrumb-item active">Semua</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<style type="text/css">
  .text-item {
    color: black !important;
  }
</style>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-10 mx-auto">
        <div class="card">
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <th>#</th>
                <th>Nama Laporan</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Daftar Pasien</td>
                  <td>
                    <a href="<?= base_url('admin/cetak/pasien') ?>" class="btn btn-sm btn-primary" target="_blank">
                      <i class="fas fa-fw fa-print"></i>
                      <span>Cetak/Print</span>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Gejala</td>
                  <td>
                    <a href="<?= base_url('admin/cetak/gejala') ?>" class="btn btn-sm btn-primary" target="_blank">
                      <i class="fas fa-fw fa-print"></i>
                      <span>Cetak/Print</span>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Penyakit</td>
                  <td>
                    <a href="<?= base_url('admin/cetak/penyakit') ?>" class="btn btn-sm btn-primary" target="_blank">
                      <i class="fas fa-fw fa-print"></i>
                      <span>Cetak/Print</span>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Pakar</td>
                  <td>
                    <a href="<?= base_url('admin/cetak/pakar') ?>" class="btn btn-sm btn-primary" target="_blank">
                      <i class="fas fa-fw fa-print"></i>
                      <span>Cetak/Print</span>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Rekam Medis Per-Pasien</td>
                  <td>
                    <a href="#!" data-toggle="modal" data-target="#pasienRekmedModal" class="btn btn-sm btn-primary" target="_blank">
                      <i class="fas fa-fw fa-print"></i>
                      <span>Cetak/Print</span>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="pasienRekmedModal" tabindex="-1" role="dialog" aria-labelledby="pasienRekmedModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pasienRekmedModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/cetak_rekam_medis') ?>" method="post">
          <div class="form-group">
            <label>Nama Pasien</label>
            <select class="form-control" name="id_pasien" id="id_pasien">
              <option>- Pilih Pasien -</option>
              <?php foreach($pasien as $p): ?>
                <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-fw fa-print"></i>
            <span>Cetak/Print</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>