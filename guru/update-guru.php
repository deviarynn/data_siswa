<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_guru = $_POST['id_guru'];
$nuptk     = $_POST['nuptk'];
$nama = $_POST['nama'];
$golongan = $_POST['golongan'];
$gender       = $_POST['gender'];
$ttl = $_POST['tgl_lahir'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_guru SET id_guru = '$id_guru', nuptk = '$nuptk', nama = '$nama', golongan = '$golongan', gender = '$gender', tgl_lahir = '$ttl' WHERE id_guru = '$id_guru'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: ../header3.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>