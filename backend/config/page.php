<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
  switch ($page) {
  // Beranda
//     case 'tampil_barang':
//       include 'pages/barang/barang.php';
//       break;
//       case 'tambah_barang':
//         include 'pages/barang/tambah_barang.php';
//         break;
//       case 'edit_barang':
//           include 'pages/barang/edit_barang.php';
//           break;
//       case 'hapus_barang':
//             include 'pages/barang/hapus_barang.php';
//             break;
//       case 'tampil_chart':
//             include 'pages/chart/chart.php';
//             break;
//       case 'tambah_chart':
//             include 'pages/chart/tambah_chart.php';
//             break;

            // Untuk About

      case 'edit_about':
            include 'pages/about/edit_about.php';
            break;


      case 'tampil_produk':
            include 'pages/produk/produk.php';
            break;
      case 'tambah_produk':
            include 'pages/produk/tambah_produk.php';
            break;
      case 'edit_produk':
            include 'pages/produk/edit_produk.php';
            break;
      case 'hapus_produk':
            include 'pages/produk/hapus_produk.php';
            break;

            // Untuk produk

      case 'tampil_berita':
            include 'pages/berita/berita.php';
            break;
      case 'tambah_berita':
            include 'pages/berita/tambah_berita.php';
            break;
      case 'edit_berita':
            include 'pages/berita/edit_berita.php';
            break;
      case 'hapus_berita':
            include 'pages/berita/hapus_berita.php';
            break;

            // Untuk Galeri

      case 'tampil_galeri':
            include 'pages/galeri/galeri.php';
            break;
      case 'tambah_galeri':
            include 'pages/galeri/tambah_galeri.php';
            break;
      case 'edit_galeri':
            include 'pages/galeri/edit_galeri.php';
            break;
      case 'hapus_galeri':
            include 'pages/galeri/hapus_galeri.php';
            break;
      case 'hapus_galeri':
            include 'pages/galeri/hapus_galeri.php';
            break;

            // Untuk Contact

     
      case 'edit_contact':
            include 'pages/contact/edit_contact.php';
            break; 
     
    }
  }else{
      include "pages/beranda.php";
    }


?>
