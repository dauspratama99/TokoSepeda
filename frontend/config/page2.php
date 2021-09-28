<?php
if(isset($_GET['page2'])){
    $page = $_GET['page2'];
  switch ($page) {
  // Beranda
    case 'about':
      include 'frontend/pages/about.php';
      break;
      case 'produk':
          include 'frontend/pages/produk.php';
          break;
      case 'galeri':
            include 'frontend/pages/galleri.php';
            break;
      case 'berita':
            include 'frontend/pages/berita.php';
            break;
      case 'contact':
            include 'frontend/pages/contact.php';
            break;
      case 'detail-berita';
            include 'frontend/pages/berita-details.php';
      
   
    }
  }else{
      include "frontend/pages/home.php";
    }


?>
