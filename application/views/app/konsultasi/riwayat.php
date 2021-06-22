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
        							</thead>
        							<tbody>
                        <?php foreach($riwayat as $r): ?>
          								<tr>
          									<td><?= $r['nama'] ?></td>
          									<td><?= date('d/m/Y', strtotime($r['tanggal_konsultasi'])) ?></td>
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
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->