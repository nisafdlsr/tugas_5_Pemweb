<?php 
  include ('conn.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $npm = $_POST['npm'];
      $nama = $_POST['nama'];
      $jurus = $_POST['jurus'];
      $fakul = $_POST['fakul'];
      $jk = $_POST['jk'];
      $alm = $_POST['alm'];
      //query SQL
      $query = "INSERT INTO mhs (npm, nama, jurus, fakul, jk, alm) VALUES('$npm','$nama', '$jurus', '$fakul', '$jk','$alm')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Data Mahasiswa</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Laman Data Mahasiswa</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "index.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "form.php"; ?>">Input Data</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">Input Sukses!!!</h4>
                      <p>Data yang diinputkan berhasil disimpan.</p>
                      <hr>
                      <p class="mb-0">Check data <a href="#http://localhost/tugas5/index.php" class="alert-link"> di sini </a>.</p>   
                      </div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">
                      <h4 class="alert-heading">Input Gagal!!!</h4>
                      <p>Maaf, data yang diinputkan gagal disimpan.</p>
                      <hr>
                      <p class="mb-0">Coba check data inputan kembali!</p>   
                      </div>';
              }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Form Mahasiswa UPN</h2>
          <form action="form.php" method="POST">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required="required">
            </div>
            <div class="form-group">
            <label>NPM</label>
              <input type="text" class="form-control" placeholder="NPM mahasiswa" name="npm" required="required">
            </div>
            <div class="form-group">
            <label>Jurusan</label>
              <input type="text" class="form-control" placeholder="Jurusan" name="jurus" required="required">
            </div>
            <div class="form-group">
            <label>Fakultas</label>
            <select class="custom-select" name="fakul" required="required">
                <option value="">Pilih Salah Satu</option>
                <option value="FIK">F. Ilmu Komputer</option>
                <option value="FT">F. Teknik</option>
                <option value="FH">F. Hukum</option>
                <option value="FEB">F. Ekonomi & Bisnis</option>
                <option value="FISIP">F. Ilmu Sosial & Ilmu Politik</option>
                <option value="FAD">F. Arsitektur & Desain</option>
                <option value="FP">F. Pertanian</option>
              </select>
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="custom-select" name="jk" required="required">
                <option value="">Pilih Salah Satu</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" placeholder="Nama Kota" name="alm" required="required"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>