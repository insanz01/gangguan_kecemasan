<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Penerima</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Penerima</li>
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
	        	<div class="card">
	        		<div class="card-body">
		        		<table class="table table-striped table-bordered">
		        			<thead>
		        				<th>No. KK</th>
		        				<th>Nama Lengkap</th>
		        				<th>TTL</th>
		        				<th>Alamat</th>
		        				<th>Anggota Keluarga</th>
		        				<th>Pekerjaan</th>
		        				<th>Penghasilan</th>
		        				<th>Kriteria Bantuan</th>
		        				<th>Tanggal Terima</th>
		        				<th>Action</th>
		        			</thead>
		        			<tbody>
		        				<?php foreach($penerima as $p): ?>
			        				<tr>
			        					<td><?= $p['no_kartu_keluarga'] ?></td>
			        					<td><?= $p['nama_lengkap'] ?></td>
			        					<td><?= $p['tempat_lahir'] ?>, <?= $p['tanggal_lahir'] ?></td>
			        					<td><?= $p['alamat'] ?>?</td>
			        					<td><?= $p['jumlah_anggota_keluarga'] ?></td>
			        					<td><?= $p['pekerjaan'] ?></td>
			        					<td><?= $p['penghasilan'] ?></td>
			        					<td><?= $kriteria[$p['kriteria_id']-1]['nama'] ?></td>
			        					<td><?= $p['tanggal_terima_bantuan'] ?></td>
			        					<td>
			        						
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