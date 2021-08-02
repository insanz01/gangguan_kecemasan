<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Diagnosa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Konsultasi</a></li>
              <li class="breadcrumb-item active">Diagnosa</li>
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
          <div class="col-11 mx-auto">
            <h3 class="display-4 text-center">Hasil Diagnosa</h3>
            <hr class="text-center">

            <div class="row">
              <div class="col-6 mx-auto">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col text-center">
                            <?php $gambar = mt_rand(1, 10); ?>
                            <img src="<?= base_url('assets/penyakit/') . strval($gambar) . '.jpg' ?>" alt="Gambar" width="300">
                            <h3 class="display-5">
                              <?= $hasil ?>
                            </h3>
                            <hr>
                            <p class="lead <?= ($kepercayaan > 0) ? 'text-success': 'text-danger' ?>">
                              Nilai Kepercayaan <?= $kepercayaan . '%' ?>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="col-6">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h3>Solusi dan Saran</h3>
                      <hr>
                      <p align="justify"><?= $solusi ?></p>

                      <?php if($penyakit_id != 13): ?>
                        <hr class="mt-2">
                        <h3>Rekomendasi Audio Relaksasi</h3>
                        <hr>
                        <audio controls>
                          <!-- <source src="horse.ogg" type="audio/ogg"> -->
                          <source src="<?= base_url() ?>assets/relaksasi/musik.mp3" type="audio/mpeg">
                          Your browser does not support the audio element.
                        </audio>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h3>Keterangan Penyakit</h3>
                      <hr>
                      <p align="justify"><?= $keterangan ?></p>
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
  <!-- /.content-wrapper