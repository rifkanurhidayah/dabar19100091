<?php

include "../config/koneksi.php";

$Username = @$_POST['Username'];
$password = md5(@$_POST['Password']);

$data = [];

$query = mysqli_query($kon, "SELECT * FROM `admin` WHERE 'username' = '". $Username ."');

if($query){
    $status = true;
    $pesan = "data didapatkan";
    $data[] = mysqli_fetch_assoc($query); 
}else{
    $status = false;
    $pesan = "data tidak dapat diinput";
}

$json = [
    "status" => $status,
    "pesan" => $pesan,
    "data" => $data
];

<header("Content-Type: application/json");
echo json_encode;

?>