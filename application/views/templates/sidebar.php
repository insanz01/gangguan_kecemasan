<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #87cefa !important;">
  <!-- Brand Logo -->
  <a href="<?= base_url('app/index') ?>" class="brand-link">
    <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light" style=" color: #252525; !important">Diagnosis SP</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3">
      <div class="d-flex mt-2">
        <div class="info">
          <p class="text-center font-weight-bold">Sistem Pakar Diagnosis <br> Awal Gangguan Kecemasan</p>
        </div>
      </div>
      <hr style="color: black !important;">
      <div class="d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" style="color: #252525; !important">
          <?php if($this->session->userdata('sess_user_id')): ?>
            <?php if($this->session->userdata('sess_role_id') == 1): ?>
              <a href="#" class="d-block"style=" color: #252525; !important">Admin Pusat</a>
            <?php elseif($this->session->userdata('sess_role_id') == 3): ?>
              <a href="#" class="d-block"style=" color: #252525; !important">Pakar Pusat</a>
            <?php else: ?>
              <a href="#" class="d-block"style=" color: #252525; !important">Member Pusat</a>
            <?php endif; ?>
          <?php else: ?>
            <a href="#" class="d-block"style=" color: #252525; !important">Belum Login</a>
          <?php endif; ?>
        </div>
      </div>    
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <!-- tambah class menu-open untuk secara otomatis membuka -->
          <?php if($this->session->userdata('sess_role_id') == 1): ?>
            <li class="nav-item">
              <a href="<?= base_url('admin/dashboard') ?>" class="nav-link" style=" color: #252525; !important">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a href="<?= base_url('app/index') ?>" class="nav-link" style=" color: #252525; !important">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
          <?php endif; ?>
        <?php if($this->session->userdata('sess_role_id') != 1): ?>
          <?php if($this->session->userdata('sess_role_id')): ?>
            <li class="nav-item">
              <a href="<?= base_url('app/konsultasi') ?>" class="nav-link" style=" color: #252525; !important">
                <i class="nav-icon fas fa-person-booth"></i>
                <p>
                  Konsultasi
                  <!-- <span class="badge badge-info right">2</span> -->
                </p>
              </a>
            </li>
          <?php endif; ?>
          <li class="nav-item">
            <a href="<?= base_url('app/edukasi') ?>" class="nav-link" style=" color: #252525; !important">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Edukasi
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= base_url('app/artikel') ?>" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Artikel
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="<?= base_url('app/bantuan') ?>" class="nav-link" style=" color: #252525; !important">
              <i class="nav-icon fas fa-hands-helping"></i>
              <p>
                Bantuan
              </p>
            </a>
          </li>
        <?php endif; ?>
        <?php if(!$this->session->userdata('sess_user_id')): ?>
          <li class="nav-item">
            <a href="<?= base_url('app/login') ?>" class="nav-link" style=" color: #252525; !important">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Akun
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
        <?php else: ?>
          <?php if($this->session->userdata('sess_role_id') == 3): ?>
            <li class="nav-header" style=" color: #252525; !important">PAKAR AREA</li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link" style=" color: #252525; !important">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Master Data
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('admin/gejala') ?>" class="nav-link" style=" color: #252525; !important">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Gejala</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('admin/penyakit') ?>" class="nav-link" style=" color: #252525; !important">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penyakit</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('admin/certainty') ?>" class="nav-link" style=" color: #252525; !important">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Certainty Factor</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="<?= base_url('admin/artikel') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Artikel</p>
                  </a>
                </li> -->
              </ul>
            </li>
          <?php elseif($this->session->userdata('sess_role_id') == 1): ?>
            <li class="nav-header" style=" color: #252525; !important">PASIEN AREA</li>
            <li class="nav-item">
              <a href="<?= base_url('admin/pasien') ?>" class="nav-link" style=" color: #252525; !important">
                <i class="nav-icon fas fa-hands-helping"></i>
                <p>
                  Data Pasien
                </p>
              </a>
            </li>
            <li class="nav-header" style=" color: #252525; !important">ADMIN AREA</li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link" style=" color: #252525; !important">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Master Data
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('admin/akun/pakar') ?>" class="nav-link" style=" color: #252525; !important">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Akun Pakar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('admin/akun/member') ?>" class="nav-link" style=" color: #252525; !important">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Akun Member</p>
                  </a>
                </li>
              </ul>
            </li>
          <?php endif; ?>
          <li class="nav-item">
            <a href="<?= base_url('app/logout') ?>" class="nav-link" style=" color: #252525; !important">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>
        <?php endif; ?>
        
        <!-- <li class="nav-header">MEMBER AREA</li> -->
        <!-- <li class="nav-item">
          <a href="<?= base_url('app/register_member') ?>" class="nav-link">
            <i class="nav-icon far fa-user"></i>
            <p>
              Registrasi Member
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Users dan Members
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('app/users') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('app/members') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Members</p>
              </a>
            </li>
          </ul>
        </li> -->

        <!-- <li class="nav-header">AKSI</li> -->
         <!-- tambah class menu-open untuk secara otomatis membuka -->  	
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-dollar-sign"></i>
            <p>
              Transaksi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('app/simpan') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simpan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('app/pinjam') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pinjam</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('app/withdraw') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Withdraw</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('app/angsuran') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Angsuran</p>
              </a>
            </li>
          </ul>
        </li> -->

        <!-- <li class="nav-header">LABELS</li> -->
        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
          </a>
        </li> -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>