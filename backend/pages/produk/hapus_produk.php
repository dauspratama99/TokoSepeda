<?php 

include 'config/koneksi.php';

if ($_GET['page'] == "hapus_produk"){

    $hapus = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$_GET[id]'");
        // memilih gambar untuk di hapus
        $nama_gambar = mysqli_fetch_array($hapus);
        //nama filed gambar
        $lokasi = $nama_gambar['gambar'];
        //alamat tempat gambar
        $hapus_gambar = "../assets/backend/img_produk/$lokasi";
        //script delete gambar dari folder
        unlink($hapus_gambar);


   $query = ("DELETE FROM produk WHERE id_produk = '$_GET[id]'" );
   if(!mysqli_query($koneksi, $query)){
    //  die() untuk memberhentikan script melihat erorr
   }else{
      echo "<script> alert('Data Berhasil Di Hapus');document.location='index.php?page=tampil_produk';</script>";
   }

}


?>