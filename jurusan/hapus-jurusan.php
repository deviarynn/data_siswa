<?php

include('koneksi.php');

//get id
$id_jurusan = $_GET['id_jurusan'];

$query = "DELETE FROM tbl_jurusan WHERE id_jurusan = '$id_jurusan'";

if($connection->query($query)) {
    header("location: ../header2.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>