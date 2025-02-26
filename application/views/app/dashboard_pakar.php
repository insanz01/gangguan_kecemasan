<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $total_penyakit ?></h3>

            <p>Penyakit</p>
          </div>
          <div class="icon">
            <i class="fas fa-viruses"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      
      <div class="col-lg-4 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $total_gejala ?></h3>

            <p>Gejala</p>
          </div>
          <div class="icon">
            <i class="fas fa-head-side-mask"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3><?= $total_pasien ?></h3>

            <p>Pasien</p>
          </div>
          <div class="icon">
            <i class="fas fa-user-injured"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-title">
            <h3>
              Reminder Pasien
            </h3>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <th>#</th>
                <th>Nama Pasien</th>
                <th>Tanggal Konsultasi Terakhir</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php if(count($pasien) == 0): ?>
                  <tr>
                    <td class="text-center" colspan="4">
                      Data pasien yang perlu diingatkan belum ada
                    </td>
                  </tr>
                <?php else: ?>
                  <?php $number = 1; ?>
                  <?php foreach($pasien as $p): ?>
                    <tr>
                      <td><?= $number++ ?></td>
                      <td><?= $p['nama_pasien'] ?></td>
                      <td><?= tgl_indo($p['tanggal_konsultasi']) ?></td>
                      <td>
                        <a href="<?= base_url('app/email/reminder/') . $p['pasien_id'] ?>" class="badge badge-warning badge-sm">
                          <i class="fas fa-fw fa-bell"></i>
                          <span>ingatkan pasien</span>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper