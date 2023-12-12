<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yordan Personal</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" /> 
    <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>
    <video autoplay muted loop id="bg-video">
        <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
    </video>
    <div class="page-container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="cd-slider-nav">
              <nav class="navbar navbar-expand-lg" id="tm-nav">
                <a class="navbar-brand" href="#">Yordan Personal Website</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbar-supported-content">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                      <li class="nav-item selected">
                        <a class="nav-link" aria-current="page" href="#0" data-no="1">Home</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="2">Portfolio</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="3">About</a>
                        <div class="circle"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="4">Contact</a>
                        <div class="circle"></div>
                      </li>
                    </ul>
                  </div>
              </nav>
            </div>
          </div>          
        </div>        
      </div>      
      <div class="container-fluid tm-content-container">
        <ul class="cd-hero-slider mb-0 py-5">
        <li class="px-1" data-page-no="1">
      <div class="page-width-4 page-left">
        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
          <div class="intro-left tm-bg-dark" style="padding-top: 10%;padding-right:10px" >
            <h2 class="mb-4" style="font-size:50px">Selamat Datang Di Personal Profile Yordan!</h2>
            <p class="mb-4">Halo! Saya Yordan Mirza Hanif, terima kasih telah mengunjungi profil pribadi saya. Saya percaya bahwa setiap langkah hidup memberikan pelajaran berharga, dan halaman ini adalah gambaran singkat tentang saya.</p>
          </div>
          <div class="intro-right" >
            <img src="img/yordan.jpg" alt="Image" class="img-fluid intro-img-1" style=" width: 400px;height: 600px;  border-radius: 50%;margin-left:200px;">
          </div>
          <div class="circle intro-circle-1"></div>
          <div class="circle intro-circle-2"></div>
          <div class="circle intro-circle-3"></div>
          <div class="circle intro-circle-4"></div>
        </div>
        <div class="text-center">
          <a href="#0" data-page-no="2" class="btn btn-primary tm-intro-btn tm-page-link">
            View Portofolio
          </a>
        </div>            
      </div>            
    </li>
    <li data-page-no="2">
            <!-- Image Carousel -->
            <div class="mx-auto position-relative gallery-container">
              <div class="circle intro-circle-1"></div>
              <div class="circle intro-circle-2"></div>
              <div class="mx-auto tm-border-top gallery-slider">
                <figure class="effect-julia item" >
                    <img src="img/jasut.jpeg" alt="Image">
                    <figcaption>
                        <div>
                            <p>Pendidikan SD Jaya Suti</p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                    <div>
                          <p>Saya bersekolah SD di Jaya Suti dari 2013-2019</p>
                    </div>
                </figure>
                <figure class="effect-julia item">
                    <img src="img/telesandi.jpeg" alt="Image">
                    <figcaption>
                        <div>
                            <p>Pendidikan SMK Telesandi</p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                    <div>
                          <p>Saya bersekolah SMK TELKOM dari 20-2019</p>
                    </div>
                </figure>
                <figure class="effect-julia item">
                    <img src="img/gallery-img-06.jpg" alt="Image">
                    <figcaption>
                        <div>
                            <p>My Creations</p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-julia item">
                    <img src="img/gallery-img-07.jpg" alt="Image">
                    <figcaption>
                        <div>
                            <p>My Creations</p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-julia item">
                    <img   src="img/gallery-img-08.jpg" alt="Image">
                    <figcaption>
                        <div>
                            <p>My Creations</p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-julia item">
                    <img src="img/gallery-img-09.jpg" alt="Image">
                    <figcaption>
                        <div>
                            <p>My Creations</p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
              </div>
            </div>
          </li>
          <li data-page-no="3" class="px-3">
            <div class="position-relative page-width-1 page-right tm-border-top tm-border-bottom">
              <div class="circle intro-circle-1"></div>
              <div class="circle intro-circle-2"></div>
              <div class="circle intro-circle-3"></div>
              <div class="circle intro-circle-4"></div>
              <div class="tm-bg-dark content-pad">
                <h2 class="mb-4">About Me</h2>
                <p class="mb-4" align= "justify">
                     Saya Yordan Mirza Hanif saya adalah seorang fotografer
                     dan saya adalah orang yang bermotivasi tinggi dengan integritas
                    dan memiliki kemampuan untuk mempelajari hal-hal baru
                    saya mampu melakukan fotografi, video editing, videografi.
                </p>
                <p align= "justify">
                  Saya seorang pelajar dari SMK Telekomunikasi Telesandi Bekasi 
                  dan saya sangat tertarik pada bidang Fotografi, Vidio Editing
                  saya juga akrab dengan aplikasi-aplikasi untuk Editing foto maupun vidio.
                </p>
              </div>              
            </div>
          </li>
          <li data-page-no="4">
  <div class="mx-auto page-width-3">
    <div class="bgabout">
      <div class="row">
        <div class="col-mx-1 me-0 ms-auto">
          <h2 class="mb-4">Contact & Feedback</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 tm-contact-left">
        <p class="mb-4">
            Jika ingin tahu lebih lanjut bisa hubungi kontak saya dibawah ini.
          </p>
          <div>
            Email: <a href="mailto:info@company.com" class="tm-link-white">Yordan@gmail.com</a>
          </div>
          <div class="tm-mb-45">
            Tel: <a href="tel:080203" class="tm-link-white">080203</a>
          </div>
          <!-- Map -->
          <div class="map-outer">
            <div class="gmap-canvas">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.248035772276!2d107.08499367418277!3d-6.230996661019299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f685caf2e17%3A0x44c88a5f169ec53c!2sJl.%20Perum%20Regensi%20Blok%20E.%203%20No.2%2C%20RT.5%2FRW.5%2C%20Wanasari%2C%20Kec.%20Cibitung%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat%2017520!5e0!3m2!1sen!2sid!4v1700530446196!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-6 tm-contact-right">
        <form action="prosesfeed.php" method="POST" class="contact-form">
            <div class="input-group tm-mb-30">
              <input name="name" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Name">
            </div>
            <div class="input-group tm-mb-30">
              <input name="email" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Email">
            </div>
            <div class="input-group tm-mb-30">
              <textarea rows="5" name="message" class="textarea form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Message"></textarea>
            </div>
            <div class="input-group justify-content-end">
              <input type="submit" class="btn btn-primary tm-btn-pad-2" name="feed" value="Send">
            </div>
          </form>

          
        </div>
      </div>
        </div>
    </div>
    <div class="comments-section">
    <div class="col-mx-4 me-0 ms-auto">
          <h2 class="mb-4">View Feedback</h2>
        </div>
    <?php
      // Ambil data komentar dari database
      $sqlComments = "SELECT * FROM ifeedback ORDER BY id DESC LIMIT 5"; // Mengambil 5 komentar terbaru
      $resultComments = mysqli_query($db, $sqlComments);

      if ($resultComments) {
        while ($row = mysqli_fetch_assoc($resultComments)) {
          echo "<div class='comment'>";
          echo "<strong>" . $row["Name"] . "(".$row["Email"].")" ."</strong>";
          echo "<p>" . $row["Message"] . "</p>";
          echo "<p class='text-muted'>" . date("F j, Y, g:i a", strtotime($row["timestamp"])) . "</p>";
          echo "</div>";
        }
      } else {
        echo "Error in query: " . mysqli_error($db);
      }
    ?>
</div>
          
</li>

        </ul>
    </div>
    <div class="container-fluid">
      <footer class="row mx-auto tm-footer">
        <div class="col-md-6 px-0">
        </div>
        <div class="col-md-6 px-0 tm-footer-right">
         <a rel="sponsored" href="https://templatemo.com" target="_blank" class="tm-link-white"></a>
        </div>
      </footer>
    </div>
  </div>
  <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
  <div id="loader-wrapper">            
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>  
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/templatemo-script.js"></script>
</body>
</html>