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
        	<div class="col-10 mx-auto">
        		<h3 class="display-4 text-center">Hasil Diagnosa</h3>
        		<hr class="text-center">

        		<div class="row">
        			<div class="col-7 mx-auto">
        				<div class="card">
        					<div class="card-body">
                    <div class="row">
                      <div class="col text-center">
                        <h3 class="display-5">
                          <?= $hasil ?>
                        </h3>
                        <hr>
                        <p class="lead <?= ($akurasi > 0.5) ? 'text-success': 'text-danger' ?>">
                          <?= $akurasi . '%' ?>
                        </p>
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