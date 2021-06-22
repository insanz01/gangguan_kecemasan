<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Certainty Factor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Data</a></li>
              <li class="breadcrumb-item active">Certainty Factor</li>
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
        		<h3 class="text-center">Certainty Factor</h3>
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
                        <th style="width: 10%">#</th>
                        <th style="width: 20%">Nama Penyakit</th>
                        <th style="width: 50%">Nama Gejala</th>
                        <th style="width: 10%">Skor CF</th>
                        <th style="width: 10%">Aksi</th>
                      </thead>
                      <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach($certainty as $c): ?>
                          <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?= $c['nama_penyakit'] ?></td>
                            <td><?= $c['nama_gejala'] ?></td>
                            <td><?= $c['skor'] ?></td>
                            <td>
                              <a href="#!" class="badge badge-sm badge-info badge-pill">Edit</a>
                              <a href="<?= base_url('Admin/certainty/delete/') . $c['id'] ?>" class="badge badge-sm badge-danger badge-pill">Hapus</a>
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
      <form action="<?= base_url('admin/certainty/add') ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Penyakit</label>
            <select class="form-control" name="penyakit_id" required>
              <option value="">BELUM DIPILIH</option>
              <?php foreach($penyakit as $p): ?>
                <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Gejala</label>
            <select class="form-control" name="gejala_id" required>
              <option value="">BELUM DIPILIH</option>
              <?php foreach($gejala as $g): ?>
                <option value="<?= $g['id'] ?>"><?= $g['nama'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Skor CF</label>
            <input type="text" name="skor" class="form-control" required>
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