<?php 

include "koneksi.php";

if ($_GET['page'] == "hapus_barang"){

    $hapus = mysqli_query($koneksi, "DELETE FROM tb_barang WHERE id_barang = '$_GET[id]'");

    if($hapus){
        echo "<script> alert('Data Berhasil Di Hapus');document.location='index.php?page=tampil_barang';</script>";
        
    }
}


?>