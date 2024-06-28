<?php 
  
  include('koneksi.php');
  
  $id_guru = $_GET['id_guru'];
  
  $query = "SELECT * FROM tbl_guru WHERE id_guru = $id_guru LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Guru</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT GURU
            </div>
            <div class="card-body">
              <form action="update-guru.php" method="POST">
                
                <div class="form-group">
                  <label for="nuptk">Nuptk</label>
                  <input type="hidden" name="id_guru" value="<?php echo $row['id_guru'] ?>">
                  <input type="text" name="nuptk" class="form-control" value="<?php echo $row['nuptk']; ?>" readonly>
                  </div>

                  <div class="form-group">
                  <label for="nuptk">Nama</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">
                  </div>

                  <div class="form-group">
                  <label>Golongan</label><br>
                  <select class="form-select" name="golongan" aria-label="Default select example" required>
                          <option value="III/a" <?php echo ($row['golongan'] == 'III/a') ? 'selected' : ''?>>III/a</option>
                          <option value="III/b" <?php echo ($row['golongan'] == 'III/b') ? 'selected' : ''?>>III/b</option>
                          <option value="III/c" <?php echo ($row['golongan'] == 'III/c') ? 'selected' : ''?>>III/c</option>
                          <option value="III/d" <?php echo ($row['golongan'] == 'III/d') ? 'selected' : ''?>>III/d</option>
                          <option value="IV/a" <?php echo ($row['golongan'] == 'IV/a') ? 'selected' : ''?>>IV/a</option>
                          </select>
                </div>

                <div class="form-group">
                  <label>Gender</label><br>
                    <input type="radio" name="gender" value="P" <?php echo ($row['gender'] == 'P')  ? 'checked' :'' ?>>Perempuan
                    <input type="radio" name="gender" value="L" <?php echo ($row['gender'] == 'L')  ? 'checked' :'' ?>>Laki-laki
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir</label><br>
                    <input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ;?>">                
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