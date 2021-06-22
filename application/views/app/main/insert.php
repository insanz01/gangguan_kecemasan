<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Insert Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Insert Data</li>
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
        		<div class="card">
        			<div class="card-body">
        				<form action="<?= base_url('app/input_data') ?>" method="post">
      						<div class="form-group">
	        					<div class="row">
	        						<div class="col-5">
	        							<label>No. Kartu Keluarga</label>
	        						</div>
	        						<div class="col-7">
	        							<input type="text" name="no_kartu_keluarga" placeholder="No. KK" class="form-control" required>
	        						</div>
        						</div>
        					</div>

        					<div class="form-group">
	        					<div class="row">
	        						<div class="col-5">
	        							<label>Nama Lengkap</label>
	        						</div>
	        						<div class="col-7">
	        							<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" required>
	        						</div>
        						</div>
        					</div>

        					<div class="form-group">
	        					<div class="row">
	        						<div class="col-5">
	        							<label>Tempat, Tanggal Lahir</label>
	        						</div>
	        						<div class="col-7">
	        							<div class="row">
	        								<div class="col-6">
			        							<input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" required>						
	        								</div>
	        								<div class="col-6">
			        							<input type="date" name="tanggal_lahir" class="form-control" required>
	        								</div>
	        							</div>
	        						</div>
        						</div>
        					</div>

        					<div class="form-group">
	        					<div class="row">
	        						<div class="col-5">
	        							<label>Alamat Lengkap</label>
	        						</div>
	        						<div class="col-7">
	        							<textarea class="form-control" placeholder="Type here..." name="alamat" required></textarea>
	        						</div>
        						</div>
        					</div>

        					<div class="form-group">
	        					<div class="row">
	        						<div class="col-5">
	        							<label>Jumlah Anggota Keluarga</label>
	        						</div>
	        						<div class="col-7">
	        							<select class="form-control" name="jumlah_anggota_keluarga" required>
	        								<option>- Belum Dipilih -</option>
	        								<option value="1">1</option>
	        								<option value="2">2</option>
	        								<option value="3">3</option>
	        								<option value="4">4</option>
	        								<option value="-1">> 4</option>
	        							</select>
	        						</div>
        						</div>
        					</div>

        					<div class="form-group">
	        					<div class="row">
	        						<div class="col-5">
	        							<label>Pekerjaan</label>
	        						</div>
	        						<div class="col-7">
	        							<input type="text" name="pekerjaan" placeholder="Nama Pekerjaan" class="form-control" required>
	        						</div>
        						</div>
        					</div>

        					<div class="form-group">
	        					<div class="row">
	        						<div class="col-5">
	        							<label>Penghasilan</label>
	        						</div>
	        						<div class="col-7">
	        							<input type="number" min="0" name="pekerjaan" class="form-control" required>
	        						</div>
        						</div>
        					</div>

        					<div class="form-group">
	        					<div class="row">
	        						<div class="col-5">
	        							<label>Kriteria Bantuan</label>
	        						</div>
	        						<div class="col-7">
	        							<select class="form-control" name="kriteria_bantuan" required>
	        								<option>- Belum Dipilih -</option>
	        								<?php foreach($kriteria as $k): ?>
	        									<option value="<?= $k['id'] ?>"><?= $k['nama'] ?></option>
	        								<?php endforeach; ?>
	        							</select>
	        						</div>
        						</div>
        					</div>

        					<div class="form-group">
	        					<div class="row">
	        						<div class="col-5">
	        							<label>Tanggal Menerima Bantuan</label>
	        						</div>
	        						<div class="col-7">
	        							<input type="date" name="tanggal_terima_bantuan" class="form-control" required>
	        						</div>
        						</div>
        					</div>

        					<div class="form-group">
        						<button role="submit" class="btn btn-primary">Simpan</button>
        						<button role="button" class="btn btn-danger">Batal</button>
        					</div>
        				</form>
        			</div>
        		</div>
        	</div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->