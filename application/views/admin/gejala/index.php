<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gejala</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Data</a></li>
              <li class="breadcrumb-item active">Gejala</li>
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
        		<h3 class="text-center">Master Data Gejala</h3>
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
                    <table style="width: 100%" class="table table-striped tabled-bordered">
                      <thead>
                        <th style="width: 10%">#</th>
                        <th style="width: 80%">Nama Gejala</th>
                        <th style="width: 10%">Aksi</th>
                      </thead>
                      <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach($gejala as $g): ?>
                          <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?= $g['nama'] ?></td>
                            <td>
                              <a href="#!" class="badge badge-sm badge-info badge-pill">Edit</a>
                              <a href="#!" class="badge badge-sm badge-danger badge-pill">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/gejala/add') ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Gejala</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Keterangan Gejala</label>
            <textarea name="keterangan" class="form-control" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>