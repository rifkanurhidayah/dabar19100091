<?php

    include "../config/koneksi.php";
    $namaBarang = @$_POST['Nama_barang'];
    $jumlahBarang = @$_POST['Jumlah_barang'];

    $data = [];

    $query = mysqli_query($kon, "INSERT INTO `barang`( `Nama_barang`, `Jumlah_barang`) 
    VALUES ('".$namaBarang."','".$jumlahBarang."')");

    if($query){
        $pesan = "data berhasil diinput";
        $status = true;
        $data = $query;
    }else{
        $status = false;
        $pesan = "data tidak dapat diinput";
    }

    $json = [
        "status" => $status,
        "pesan" => $pesan,
        "data" => $data
    ];

    header("Content-Type: application/json");
    echo json_encode($json);

    ?>
     