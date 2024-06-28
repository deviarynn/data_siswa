<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_jurusan     = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];
$email_jurusan       = $_POST['email_jurusan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_jurusan SET id_jurusan = '$id_jurusan', nama_jurusan = '$nama_jurusan', email_jurusan = '$email_jurusan' WHERE id_jurusan = '$id_jurusan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: ../header2.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>