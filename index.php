<?php
include('./admin/backend/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SMK Muh 6</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- <link href="img/favicon.png" rel="icon">ss -->
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png" >

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" >

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css" >
  <link rel="stylesheet" href="lib/ionicons/css/ionicons.min.css" >
  <link rel="stylesheet" href="lib/aos/aos.css">
  <link rel="stylesheet" href="lib/magnific-popup/magnific-popup.css" >


  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="css/style.css" >

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h2><a href="#intro" class="scrollto"> </a> MuhSIX</h2>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></img></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Profil</a></li>
          <li><a href="#features">Visi & Misi</a></li>
          <li><a href="#more-features">Fasilitas</a></li>
          <li><a href="#gallery">Galleri</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="http://gg.gg/smkmuh62020">PPDB</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
      <h2>Selamat Dtang</h2>
      <p> Di SMK Muhammadiyah 6 Karanganyar</p>
      <a href="#about" class="btn-get-started scrollto">Profil </a>
    </div>

  

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Profil SMK Muhammadiyah 6 Karanganyar</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            SMK Muhammadiyah 6 Karanganyar
          </p>
        </div>

        <div class="row">
               <?php
                  $query = mysqli_query($koneksi,"SELECT * from tbl_tentang ORDER BY id_tentang DESC limit 1");
                  foreach($query as $tampil)         
               ?> 
          <div class="col-lg-5 col-md-8">
            <div class="form">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <img class="advanced-feature-img-left" height="300" src="./admin/foto/<?php echo $tampil['gambar'];?>" height="300" data-aos="fade-left">
                  <div data-aos="fade-left">
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

          <div class="col-lg-6 content" data-aos="fade-left">
            <h2> SMK Muhammadiyah 6 Karanganyar</h2>
            <h3><?php echo $tampil['deskripsi'];?></h3>
          
          </div>
        </div>

      </div>
    </section>


    <!--==========================
      Product Featuress Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header" data-aos="fade" data-aos-duration="1000">
              <h3 class="section-title">Visi & Misi SMK Muhammadiyah 6</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="img/product-features.png" alt="" data-aos="fade-right" data-aos-easing="ease-out-back">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">
            <?php
                  $query = mysqli_query($koneksi,"SELECT * from tbl_visimisi ORDER BY id_visi DESC limit 1");
                  foreach($query as $tampil)         
               ?> 
              <div class="col-lg-6 col-md-6 box" data-aos="fade-left">
                <div class="icon"><i class="fa fa-code"></i></div>
                <h4 class="title"><a>Visi</a></h4>
                <p class="description"><?php echo $tampil['visi'];?></p>
              </div>
              <div class="col-lg-6 col-md-6 box" data-aos="fade-left" data-aos-delay="100">
                <div class="icon"><i class="fa fa-car"></i></div>
                <h4 class="title"><a >Misi</a></h4>
                <p class="description"><?php echo $tampil['misi'];?></p>
              </div>

            </div>

          </div>

        </div>

      </div>

    </section><!-- #features -->

    <!--==========================
      Product Advanced Featuress Section
    ============================-->
    <section id="advanced-features">

      <div class="features-row section-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
            <?php
                  $query = mysqli_query($koneksi,"SELECT * from tbl_tkj ORDER BY id_tkj DESC limit 1");
                  foreach($query as $tampil)         
               ?> 
              <img class="advanced-feature-img-right"  height="400" src="./admin/foto/<?php echo $tampil['gambar'];?>" alt="" data-aos="fade-left">
              <div data-aos="fade-right">
                <h2>Teknik Komputer Dan Jaringan</h2>
                <p><?php echo $tampil['deskripsi'];?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row">
        <div class="container">
          <div class="row">
            <div class="col-12">
            <?php
                  $query = mysqli_query($koneksi,"SELECT * from tbl_tkr ORDER BY id_tkr DESC limit 1");
                  foreach($query as $tampil)         
               ?> 
              <img class="advanced-feature-img-left" height="400" src="./admin/foto/<?php echo $tampil['gambar'];?>" alt="">
              <div data-aos="fade-left">
                <h2>Teknik Kendaraan Ringan  </h2>
                <p><?php echo $tampil['deskripsi'];?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row section-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
            <?php
                  $query = mysqli_query($koneksi,"SELECT * from tbl_tav ORDER BY id_tav DESC limit 1");
                  foreach($query as $tampil)         
               ?> 
             <img class="advanced-feature-img-right"  height="400" src="./admin/foto/<?php echo $tampil['gambar'];?>" alt="" data-aos="fade-left">
              <div data-aos="fade-right">
              <h2>Teknik Audio Dan video</h2>
              <p><?php echo $tampil['deskripsi'];?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #advanced-features -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">SMK Muhammadiyah 6 Karanganyar</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <!-- <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div> -->
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Fasilitas</h3>
          <span class="section-divider"></span>
          <p class="section-description">Untuk Menunjang Sarana Dan Prasarana SMK Muhammadiyah 6 Karanganyar Memiliki Fasilitas</p>
        </div>

        <div class="row">

        <div class="col-lg-6">
            <div class="box" data-aos="fade-left">
              <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
              <h4 class="title"><a href="">Ruang Kelas</a></h4>
              <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p> -->
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box" data-aos="fade-right">
              <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
              <h4 class="title"><a href="">Mushola</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p> -->
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box" data-aos="fade-left">
              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
              <h4 class="title"><a href="">Kantin</a></h4>
              <!-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p> -->
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box" data-aos="fade-right">
              <div class="icon"><i class="ion-ios-heart-outline"></i></div>
              <h4 class="title"><a href="">Perpustakaan</a></h4>
              <!-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p> -->
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box" data-aos="fade-left">
              <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
              <h4 class="title"><a href="">WIFI Area</a></h4>
              <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p> -->
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box" data-aos="fade-left">
              <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
              <h4 class="title"><a href="">Lapangan</a></h4>
              <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p> -->
            </div>
          </div>

        </div>
      </div>
    </section><!-- #more-features -->



    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Gallery</h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row no-gutters">
        <?php
                  $query = mysqli_query($koneksi,"SELECT * from tbl_galeri ORDER BY id_galeri ASC limit 6");
                  foreach($query as $tampil)         
               ?> 
 
          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
                <img src="./admin/foto/<?php echo $tampil['gambar'];  ?>" class="gallery-popup">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
            <img src="./admin/foto/<?php echo $tampil['gambar'];  ?>" class="gallery-popup">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <img src="./admin/foto/<?php echo $tampil['gambar'];  ?>" class="gallery-popup">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <img src="./admin/foto/<?php echo $tampil['gambar'];  ?>" class="gallery-popup">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
          
              <img src="./admin/foto/<?php echo $tampil['gambar'];  ?>" class="gallery-popup">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">

              <img src="./admin/foto/<?php echo $tampil['gambar'];  ?>" class="gallery-popup">
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>
    
    <!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h2>SMK Muhammadiyah 6 Karanganyar</h2>
              <p>SMK Muhammadiyah 6 Karanganyar terletak di kabupaten karangayar lebih tepatnya di Jengglong, Bejen kabupaten Karanganyar </p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Jl.Ir Juwanda<br>Jengglong, Bejen, Karanganyar, Jawa Tengah</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+62 5589 55488 55</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <img class="advanced-feature-img-right" src="img/advanced-feature-1.jpg" height="300" data-aos="fade-left">
                  <div data-aos="fade-right">
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>SMK Muhammadiyah 6 KRA</strong>. All Rights Reserved
          </div>
          <div class="credits">
            Version :V.1.0.0
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/aos/aos.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>