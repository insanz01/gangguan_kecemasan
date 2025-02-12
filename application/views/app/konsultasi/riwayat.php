<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Riwayat Konsultasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Konsultasi</a></li>
              <li class="breadcrumb-item active">Riwayat Konsultasi</li>
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
            <h3 class="text-center">Riwayat Konsultasi</h3>
            <hr class="text-center">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <th>Nama</th>
                        <th>Tanggal Konsultasi</th>
                        <th>Diagnosis</th>
                        <th>Solusi Penanganan</th>
                        <th>Audio Terapi</th>
                      </thead>
                      <tbody>
                        <?php
                          function randomAngka() {
                            return rand(1, 4); // Menghasilkan angka acak antara 1 dan 4
                          }
                        ?>
                        <?php if($riwayat != []): ?>
                          <?php foreach($riwayat as $r): ?>
                            <tr>
                              <td><?= $r['nama'] ?></td>
                              <td><?= date('d/m/Y', strtotime($r['tanggal_konsultasi'])) ?></td>
                              <td><?= $r['diagnosis'] ?></td>
                              <td><?= $r['solusi'] ?></td>
                              <td>
                                <?php if($r['id'] != 13): ?>
                                   <audio class="mt-2" controls>
                                    <!-- <source src="horse.ogg" type="audio/ogg"> -->
                                     <?php
                                      $source = "assets/relaksasi/relaksasi-" . randomAngka() . ".mp3";
                                     ?>
                                    <source src="<?= base_url() . $source ?>" type="audio/mpeg">
                                      Your browser does not support the audio element.
                                    </audio>
                                <?php endif; ?>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        <?php else: ?>
                          <tr>
                            <?php if($this->session->userdata('sess_role_id')): ?>
                              <td colspan="5" class="text-center">Tidak ada riwayat pasien pada akun ini.</td>
                            <?php else: ?>
                              <td colspan="5" class="text-center">Tidak ada riwayat. Anda belum <a href="<?= base_url('app/login') ?>">login</a></td>
                            <?php endif; ?>
                          </tr>
                        <?php endif; ?>
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