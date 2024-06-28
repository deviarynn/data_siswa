<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Jurusan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
             JURUSAN SISWA
            </div>
            <div class="card-body">
              <form action="simpan-jurusan.php" method="POST">
                

                <div class="form-group">
                  <label>Nama Jurusan</label><br>
                  <select class="form-select" name="nama_jurusan" aria-label="Default select example" required>
                          <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                          <option value="Teknik Mesin">Teknik Mesin</option>
                          <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                          <option value="Multimedia">Multimedia</option>            
                          </select>
                </div>
                
                <div class="form-group">
                  <label>EMAIL JURUSAN</label>
                  <input type="text" name="email_jurusan" required="" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
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