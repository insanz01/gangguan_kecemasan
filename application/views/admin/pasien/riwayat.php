<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Riwayat Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pasien</a></li>
              <li class="breadcrumb-item active">Riwayat</li>
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

            <div class="row">
              <div class="col-12 mb-1">
                <div class="card">
                  <div class="card-body text-center">
                    <h1 class="display-4"><?= strtoupper($pasien['nama']) ?></h1>
                    <p class="lead">Umur <?= $pasien['umur'] ?> tahun</p>
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <table class="table table-striped table-hovered">
                          <thead>
                            <th>#</th>
                            <th>Tanggal Konsultasi</th>
                            <th>Diagnosis</th>
                            <th>Solusi</th>
                          </thead>
                          <tbody>
                            <?php $nomor = 1; ?>
                            <?php foreach($riwayat as $r): ?>
                              <tr>
                                <td><?= $nomor++ ?></td>
                                <td><?= date('d M Y', strtotime($r['tanggal_konsultasi'])) ?></td>
                                <td><?= $r['diagnosis'] ?></td>
                                <td><?= $r['solusi'] ?></td>
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
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->