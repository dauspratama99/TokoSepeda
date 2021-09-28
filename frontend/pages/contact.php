


  <?php
      
      include 'backend/config/koneksi.php';

      $sql5 = mysqli_query($koneksi, "SELECT * FROM contact");

      $contact1 = mysqli_fetch_array($sql5); 
      
      ?>

<!-- ======= Blog Header ======= -->
<div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">Hubungi Kami </h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Halaman Contact</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->


<!-- ======= Contact Section ======= -->
<div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: <?= $contact1['nohp'] ?><br>
                    <span>Senin-Minggu (9am-9pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: <?= $contact1['email']; ?><br>
                    <span>Web: www.mbersama.com</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Location: 3992+Q28, Flamboyan Baru, <br>
                    <span>Kec.Padang Bar. Kota Padang, Sumatera Barat</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31914.410282369092!2d100.37015956832275!3d-0.9224137146380865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4bf5e2182e651%3A0x10237e1d9a3d994!2sTaplau%20Padang!5e0!3m2!1sid!2sid!4v1631871836632!5m2!1sid!2sid" width="550" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6">
              <div class="form contact-form">
                <form action="" method="POST">
                  <div class="form-group">
                    <input type="text" name="tnama" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="temail" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="thp" id="subject" placeholder="Number phone" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="tpesan" rows="5" placeholder="Message" required></textarea>
                  </div>
               <br>
                   <button type="submit" class="btn btn-primary text-center" name="bsimpan">Kirim Pesan</button>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->
  

<?php 

if(isset($_POST['bsimpan'])){

    $simpan = mysqli_query($koneksi, "INSERT INTO pesan (nama, email, hp, pesan)
                                                VALUES ('$_POST[tnama]','$_POST[temail]','$_POST[thp]','$_POST[tpesan]')");

    if($simpan){

      echo "<script> alert('Pesan Berhasil DiKirim');document.location='index.php?page2=contact';</script>";
    }else{
        echo "<script> alert('Pesan Gagal Dikirim')document.location='index.php';</script>";
    }

}


?>
