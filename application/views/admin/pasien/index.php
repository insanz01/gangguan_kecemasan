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
              <li class="breadcrumb-item"><a href="#">Pasien</a></li>
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
          <div class="col-10 mx-auto">
            <h3 class="display-4 text-center">Daftar Pasien</h3>
            <hr class="text-center">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <table class="table table-striped table-hovered">
                          <thead>
                            <th>#</th>
                            <th>Nama Pasien</th>
                            <th>Umur</th>
                            <th>Aksi</th>
                          </thead>
                          <tbody>
                            <?php $nomor = 1; ?>
                            <?php foreach($pasien as $p): ?>
                              <tr>
                                <td><?= $nomor++ ?></td>
                                <td><?= $p['nama'] ?></td>
                                <td><?= $p['umur'] ?></td>
                                <td>
                                  <a href="#" role="badge" class="badge badge-sm badge-primary badge-pill">
                                    Riwayat
                                  </a>
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
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->