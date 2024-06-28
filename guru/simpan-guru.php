<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nuptk = $_POST['nuptk'];
$nama  = $_POST['nama'];
$golongan = $_POST['golongan'];
$gender = $_POST['gender'];
$ttl = $_POST['tgl_lahir'];


//query insert data ke dalam database
$query = "INSERT INTO tbl_guru (nuptk, nama, golongan, gender, tgl_lahir) VALUES ('$nuptk', '$nama', '$golongan', '$gender', '$ttl')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: ../header3.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>