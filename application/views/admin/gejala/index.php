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
                              <a href="#!" id-gejala="<?= $g['id'] ?>" onclick="show_data(this)" role="button" class="badge badge-sm badge-info badge-pill" data-toggle="modal" data-target="#editModal">Edit</a>
                              <a href="<?= base_url('Admin/gejala/delete/') . $g['id'] ?>" class="badge badge-sm badge-danger badge-pill">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/gejala/update') ?>" method="post">
        <div class="modal-body">
          <input type="hidden" id="id_gejala" name="id_gejala">
          <div class="form-group">
            <label>Nama Gejala</label>
            <input type="text" name="nama" id="nama_edit" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Keterangan Gejala</label>
            <textarea name="keterangan" id="keterangan_edit" class="form-control" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  const get_data = async (id) => {
    return await axios.get(`<?= base_url('api/gejala/get/') ?>${id}`).then(res => res.data)
  }

  const show_data = async (target) => {
    const id = target.getAttribute('id-gejala')

    const result = await get_data(id).then(res => res)

    console.log(result)

    document.getElementById('id_gejala').value = id;
    document.getElementById('nama_edit').value = result.nama;
    document.getElementById('keterangan_edit').value = result.keterangan;
  }
</script>