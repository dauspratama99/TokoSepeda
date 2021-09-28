<?php
 $server = "localhost";
 $user = "root";
 $pass = "";
 $database = "penjualan";

$koneksi = mysqli_connect($server, $user, $pass, $database);


if(mysqli_connect_error()){
    echo "Gagal melakukan koneksi ke MySQL :" . mysqli_connect_error();
}
?>
