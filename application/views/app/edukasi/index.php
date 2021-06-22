<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Gejala & Penyakit</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Edukasi</a></li>
            <li class="breadcrumb-item active">Gejala & Penyakit</li>
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
        <div class="col-12">
          <div class="form-group">
            <div class="row">
              <div class="col-10">
                <input type="text" name="cari" class="form-control" placeholder="Search">
              </div>
              <div class="col-2">
                <button type="submit" class="btn btn-primary">Cari Sekarang</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table style="width: 100%" class="table table-striped table-hover">
                <thead>
                  <th style="width: 90%"></th>
                  <th style="width: 10%"></th>
                </thead>
                <tbody>
                  <?php foreach($edukasi as $e): ?>
                    <tr>
                      <td><?= $e['nama'] ?></td>
                      <td>
                        <a href="#!" role="button" class="badge badge-sm badge-pill badge-info" data-toggle="modal" data-target="#showModal" info-nama="<?= $e['nama'] ?>" info-detail="<?= $e['keterangan'] ?>" onclick="showDetail(this)">Lihat Detail</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
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
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="showModalLabel">Detail & Keterangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2 id="info-nama"></h2>
        <hr>
        <p class="lead font-weight-regular">deskripsi :</p>
        <p id="info-detail" class="lead"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  
  const showDetail = (target) => {
    const nama = target.getAttribute('info-nama');
    const keterangan = target.getAttribute('info-detail');

    const infoNama = document.getElementById('info-nama');
    const infoDetail = document.getElementById('info-detail');

    infoNama.innerText = nama;
    infoDetail.innerText = keterangan;
  }
</script>