<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama_jurusan = $_POST['nama_jurusan'];
$email_jurusan       = $_POST['email_jurusan'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_jurusan (nama_jurusan, email_jurusan) VALUES ('$nama_jurusan', '$email_jurusan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: ../header2.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>