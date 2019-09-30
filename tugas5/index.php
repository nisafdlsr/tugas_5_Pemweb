<?php 
  include ('conn.php'); 
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
                <a class="nav-link active" href="<?php echo "index.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "form.php"; ?>">Input Data</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php 
            //mengecek apakah proses update dan delete sukses/gagal
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">Update Sukses!!!</h4>
                      <p>Data yang di- <i>update</i> berhasil disimpan.</p>   
                      </div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">
                      <h4 class="alert-heading">Update Gagal!!!</h4>
                      <p>Maaf, data yang di- <i>update</i> gagal disimpan.</p>
                      <hr>
                      <p class="mb-0">Check data di Data Mahasiswa.</p>   
                      </div>';
              }

            }
           ?>
          <h2 style="margin: 30px 0 30px 0;">Data Mahasiswa UPN</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>NPM</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>Fakultas</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                <!--  <th>Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM mhs";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['npm'];   ?></td>
                    <td><?php echo $data['nama'];  ?></td>
                    <td><?php echo $data['jurus']; ?></td>
                    <td><?php echo $data['fakul']; ?></td>
                    <td><?php echo $data['jk'];    ?></td>
                    <td><?php echo $data['alm'];   ?></td>
                    <td>
                    <!--  <a href="<?php echo "update.php?npm=".$data['npm']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "delete.php?npm=".$data['npm']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td> -->
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>

