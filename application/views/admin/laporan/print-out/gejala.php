<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laporan Gejala</title>
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
        <h1 class="text-center my-3">LAPORAN GEJALA</h1>
        <table class="table table-bordered">
          <thead>
            <th>No.</th>
            <th>Nama Gejala</th>
          </thead>
          <tbody>
            <?php $nomor = 1 ?>
            <?php foreach($laporan as $l): ?>
              <tr>
                <td>
                  <?= $nomor++ ?>
                </td>
                <td>
                  <?= $l['nama'] ?>
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