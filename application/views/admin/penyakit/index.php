<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Penyakit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Data</a></li>
              <li class="breadcrumb-item active">Penyakit</li>
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
            <h3 class="text-center">Master Data Penyakit</h3>
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
                        <th style="width: 30%">Nama Penyakit</th>
                        <th style="width: 50%">Solusi</th>
                        <th style="width: 10%">Aksi</th>
                      </thead>
                      <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach($penyakit as $p): ?>
                          <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['solusi'] ?></td>
                            <td>
                              <a href="#!" id-penyakit="<?= $p['id'] ?>" onclick="show_data(this)" role="button" class="badge badge-sm badge-info badge-pill" data-toggle="modal" data-target="#editModal">Edit</a>
                              <a href="<?= base_url('Admin/penyakit/delete/') . $p['id'] ?>" class="badge badge-sm badge-danger badge-pill">Hapus</a>
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
      <form action="<?= base_url('admin/penyakit/add') ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Penyakit</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Keterangan Penyakit</label>
            <textarea name="keterangan" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label>Solusi Penyakit</label>
            <textarea name="solusi" class="form-control" required></textarea>
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
      <form action="<?= base_url('admin/penyakit/update') ?>" method="post">
        <div class="modal-body">
          <input type="hidden" id="id_penyakit" name="id_penyakit">
          <div class="form-group">
            <label>Nama Penyakit</label>
            <input type="text" name="nama" id="nama_edit" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Keterangan Penyakit</label>
            <textarea name="keterangan" id="keterangan_edit" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label>Solusi Penyakit</label>
            <textarea name="solusi" id="solusi_edit" class="form-control" required></textarea>
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
    return await axios.get(`<?= base_url('api/penyakit/get/') ?>${id}`).then(res => res.data)
  }

  const show_data = async (target) => {
    const id = target.getAttribute('id-penyakit')

    const result = await get_data(id).then(res => res)

    console.log(result)

    document.getElementById('id_penyakit').value = id;
    document.getElementById('nama_edit').value = result.nama;
    document.getElementById('keterangan_edit').value = result.keterangan;
    document.getElementById('solusi_edit').value = result.solusi;
  }
</script>