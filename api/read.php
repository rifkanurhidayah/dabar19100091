<?php
    include "../config/koneksi.php";

    $data = [];

    $query = mysqli_query($kon, "SELECT * FROM `barang`ORDER BY Id DESC");

    if($query){
        $pesan = "data didapatkan";
        $status = true;
        while($row = mysqli_fetch_assoc($query)){   
          array_push($data, $row);
    }
}else{
    $pesan = "data gagal didapatkan";
    $status = false;
}
$json = [
    "status" => $status,
    "pesan" => $pesan,
    "data" => $data
];

header("Content-Type: application/json");
echo json_encode($json);

?>