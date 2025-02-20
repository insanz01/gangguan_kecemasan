<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laporan Rekam Medis</title>

    <style>
      .no-border {
        border: 0 !important;
        border-color: white !important;
      }
    </style>
  </head>
  <body>
    <div class="row">
      <div class="col-12">
        <p align="center">
          <b><font size="4">PRAKTIK MANDIRI PSIKOLOG KONSELING AHMAD ZAIN HABIBULLAH, M.Psi.</font> </b><br>
          <font size="2">Jl. Cempaka Raya No.99, RT.10, Telaga Biru, Kec. Banjarmasin Barat</font><br>
          <font size="2">Kota Banjarmasin, Kalimantan Selatan 70119 Email: ahmadzain23@gmail.com</font> 
          <br><br>
          <hr size="2px" color="black">
        </p>
      </div>
      <div class="col-12">
        <h1 class="text-center my-3">LAPORAN REKAM MEDIS</h1>
        <table style="width: 100%" class="no-border mt-1 mb-4">
          <tr>
            <td style="width: 10%">Nama Pasien</td>
            <td style="width: 5%"> : </td>
            <td><?= $pasien['nama'] ?></td>
          </tr>
          <tr>
            <td>Umur</td>
            <td> : </td>
            <td><?= $pasien['umur'] ?></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td><?= $pasien['jenis_kelamin'] ?></td>
          </tr>
          <tr>
            <td>Nomor HP</td>
            <td> : </td>
            <td><?= $pasien['nomor_hp'] ?></td>
          </tr>
        </table>
        <table class="table table-bordered">
          <thead>
            <th>No.</th>
            <th>Diagnosa</th>
            <th>Solusi</th>
            <th>Tanggal Konsultasi</th>
          </thead>
          <tbody>
            <?php $nomor = 1 ?>
            <?php foreach($laporan as $l): ?>
              <tr>
                <td>
                  <?= $nomor++ ?>
                </td>
                <td>
                  <?= $l['diagnosis'] ?>
                </td>
                <td>
                  <?= $l['solusi'] ?>
                </td>
                <td>
                  <?= $l['tanggal_konsultasi'] ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        // Fungsi untuk memanggil print setelah halaman selesai dimuat
        window.onload = function() {
            window.print();
        };
    </script>
  </body>
</html>