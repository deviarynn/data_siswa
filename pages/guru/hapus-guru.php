<?php

include('koneksi.php');

//get id
$id_guru = $_GET['id_guru'];

$query = "DELETE FROM tbl_guru WHERE id_guru = '$id_guru'";

if($connection->query($query)) {
    header("location: ../header3.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>