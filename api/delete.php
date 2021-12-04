<?php

include "../config/koneksi.php";

$Id = @$_POST['Id'];

$data = [];

$query = mysqli_query($kon, "DELETE FROM `barang` WHERE 'id'='".$id."'");

if($query){
    $status = true;
    $pesan = "data didapatkan";
    $data = "$query";
}else{
    $status = false;
    $pesan = "data tidak didaptkan";
}

$json = [
    "status" => $status,
    "pesan" => $pesan,
    "data" => $data
];

header("Content-Type: application/json");
echo json_encode($json);

?>