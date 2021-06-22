<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('app/index') ?>" class="brand-link">
      <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Diagnosis SP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php if($this->session->userdata('sess_user_id')): ?>
            <?php if($this->session->userdata('sess_role_id') == 1): ?>
              <a href="#" class="d-block">Admin Pusat</a>
            <?php else: ?>
              <a href="#" class="d-block">Member Pusat</a>
            <?php endif; ?>
          <?php else: ?>
            <a href="#" class="d-block">Belum Login</a>
          <?php endif; ?>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <!-- tambah class menu-open untuk secara otomatis membuka -->
          <li class="nav-item">
            <a href="<?= base_url('app/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('app/konsultasi') ?>" class="nav-link">
              <i class="nav-icon fas fa-person-booth"></i>
              <p>
                Konsultasi
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('app/edukasi') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Edukasi
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('app/artikel') ?>" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Artikel
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('app/bantuan') ?>" class="nav-link">
              <i class="nav-icon fas fa-hands-helping"></i>
              <p>
                Bantuan
              </p>
            </a>
          </li>
          <?php if(!$this->session->userdata('sess_user_id')): ?>
            <li class="nav-item">
              <a href="<?= base_url('app/login') ?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Akun
                  <!-- <span class="badge badge-info right">2</span> -->
                </p>
              </a>
            </li>
          <?php else: ?>
            <?php if($this->session->userdata('sess_role_id') == 1): ?>
              <li class="nav-header">ADMIN AREA</li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Master Data
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('admin/gejala') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Gejala</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/penyakit') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Penyakit</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/certainty') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Certainty Factor</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/artikel') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Artikel</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php endif; ?>
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