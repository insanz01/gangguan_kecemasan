<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Akun Member</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Master Data</a></li>
          <li class="breadcrumb-item active">Akun Member</li>
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
        <h3 class="text-center">Akun Member</h3>
        <hr class="text-center">

        <div class="row">
          <div class="col-12 mb-2">
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">
              Tambah Data
            </button> -->
          </div>
          <div class="col-12 mx-auto">
            <div class="card">
              <div class="card-body">
                <table class="table table-striped tabled-bordered">
                  <thead>
                    <th style="width: 5%">#</th>
                    <th style="width: 15%">Username</th>
                    <th style="width: 20%">Nama Pengguna</th>
                    <th style="width: 25%">Email</th>
                    <th style="width: 15%">Terakhir Login</th>
                    <th style="width: 10%">Created At</th>
                    <th style="width: 10%">Aksi</th>
                  </thead>
                  <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach($user as $u): ?>
                      <tr>
                        <td><?= $nomor++ ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= $u['nama_lengkap'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td>
                          <?php if($u['last_login'] < 1): ?>
                            &lt; 1
                          <?php else: ?>
                            <?= $u['last_login'] ?>
                          <?php endif; ?>
                          hari
                        </td>
                        <td><?= date('d M Y', strtotime($u['created_at'])) ?></td>
                        <td>
                          <a href="#!" class="badge badge-sm badge-primary badge-pill" data-toggle="modal" data-target="#detailModal" role="button" onclick="showDetail(this)" id-member="<?= $u['id'] ?>">detail</a>
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
    
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Show Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/akun/member/update') ?>" method="post">
        <div class="modal-body">
          <input type="hidden" name="id" id="id_edit">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" readonly id="username_edit">
          </div>
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap_edit" name="nama_lengkap">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" id="email_edit" name="email">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" onclick="hapusAkun(this)" id="hapus_edit" class="btn btn-danger float-left">Hapus</button>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  const getData = async (id) => {
    return await axios.get(`<?= base_url('api/user/get/') ?>${id}`).then(res => res.data);
  }
  const showDetail = async (target) => {
    // console.log(target.getAttribute('id-pakar'));
    const id = target.getAttribute('id-member');
    console.log('id :', id);
    const user = await getData(id).then(res => res);

    if(user) {
      document.getElementById('id_edit').value = user.id;
      document.getElementById('username_edit').value = user.username;
      document.getElementById('nama_lengkap_edit').value = user.nama_lengkap;
      document.getElementById('email_edit').value = user.email;

      document.getElementById('hapus_edit').setAttribute('id-member', user.id);
    }
  }

  const hapusAkun = (target) => {
    // console.log(target.getAttribute('id-member'));
    const id = target.getAttribute('id-member');
    window.location = "<?= base_url('admin/akun/member/delete/') ?>" + id;
  }
</script>