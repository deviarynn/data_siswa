<?php 
  
  include('koneksi.php');
  
  $id_jurusan = $_GET['id_jurusan'];
  
  $query = "SELECT * FROM tbl_jurusan WHERE id_jurusan = $id_jurusan LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Jurusan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT JURUSAN
            </div>
            <div class="card-body">
              <form action="update-jurusan.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Jurusan</label><br>
                  <input type="hidden" name="id_jurusan" value="<?php echo $row['id_jurusan'] ?>">
                  <select class="form-select" name="nama_jurusan" aria-label="Default select example" required>
                          <option selected>Pilih Jurusan</option>
                          <option value="Teknik Komputer dan Jaringan" <?php echo ($row['nama_jurusan'] == 'Teknik Komputer dan Jaringan') ? 'selected' : ''?>>Teknik Komputer dan Jaringan</option>
                          <option value="Teknik Mesin" <?php echo ($row['nama_jurusan'] == 'Teknik Mesin') ? 'selected' : ''?>>Teknik Mesin</option>
                          <option value="Rekayasa Perangkat Lunak" <?php echo ($row['nama_jurusan'] == 'Rekayasa Perangkat Lunak') ? 'selected' : ''?>>Rekayasa Perangkat Lunak</option>
                          <option value="Multimedia" <?php echo ($row['nama_jurusan'] == 'Multimedia') ? 'selected' : ''?>>Multimedia</option> 
                          </select>
                </div>

                <div class="form-group">
                  <label>EMAIL JURUSAN</label>
                  <input type="text" name="email_jurusan" required="" value="<?php echo $row['email_jurusan'] ?>" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>