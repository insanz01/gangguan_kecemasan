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

          <div class="col-lg-6 col-6">
            <div class="small-box" style="background-color: #C3B1E1;">
              <div class="inner">
                <h3><?= $total_member ?></h3>

                <p>Pengguna (Member)</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <div class="small-box" style="background-color: #FDFD96;">
              <div class="inner">
                <h3><?= $total_pakar ?></h3>

                <p>Pakar</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-md"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper