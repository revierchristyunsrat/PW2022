<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pesona Gorontalo</title>
    <link rel="shortcut icon" type="image/png" href="asset/Pesona-Gorontalo-Icon.png"/>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="asset/logo-white.png" class="putih" /></a>
          <a href=""><img src="asset/logo-black.png" class="hitam" /></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="index.php#tentang">Tentang</a></li>
            <li><a href="index.php#support">Support</a></li>
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="index.php#blog">Blog</a></li>
            <li><a href="index.php#kontak">Kontak</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php echo "<li><p> Welcome " . $_SESSION['username'] . "</p></li>"; ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="layar-penuh">
        <header id="beranda">
          <div class="overlay"></div>
          <video autoplay muted loop>
            <source src="asset/Video-Background.mp4" type="video/mp4" />
          </video>
          <div class="intro">
            <h3>Galeri Wisata Gorontalo</h3>
            <p>
              Kumpulan tempat-tempat wisata yang ada di provinsi Gorontalo
            </p>
            <p>
              <a href="#galeri" class="tombol">INFO LANJUT</a>
            </p>
          </div>
        </header>
   <main>
    <section id="galeri">
        <div class="layar-dalam">
          <h3>Galeri</h3>
          <p class="ringkasan">
            Menawarkan pengalaman terbaik di destinasi wisata Gorontalo.
          </p>
          <div class="konten-isi">

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="asset/foto1.jpeg">
      <img src="asset/foto1.jpeg"  width="600" height="400">
    </a>
    <div class="desc">Benteng Otanaha</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="asset/foto2.jpg">
      <img src="asset/foto2.jpg"  width="600" height="400">
    </a>
    <div class="desc">Pulau Saronde</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="asset/foto3.jpg">
      <img src="asset/foto3.jpg"  width="600" height="400">
    </a>
    <div class="desc">Pantai Bolihutuo</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="asset/foto4.jpg">
      <img src="asset/foto4.jpg"  width="600" height="400">
    </a>
    <div class="desc">Pantai Pohon Cinta</div>
  </div>
</div>

<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="asset/foto5.jpg">
        <img src="asset/foto5.jpg"  width="600" height="400">
      </a>
      <div class="desc">Taman Laut Olele</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="asset/foto6.jpg">
        <img src="asset/foto6.jpg"  width="600" height="400">
      </a>
      <div class="desc">Pulo Cinta</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="asset/foto7.jpg">
        <img src="asset/foto7.jpg"  width="600" height="400">
      </a>
      <div class="desc">Wisata Mangrove</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="asset/foto8.jpeg">
        <img src="asset/foto8.jpeg"  width="600" height="400">
      </a>
      <div class="desc">Hutan Pinus Motilango</div>
    </div>
  </div>

<div class="clearfix"></div>

          </div>
        </div>
      </section>
   </main>
      <footer id="kontak">
        <div class="layar-dalam">
          <div>
           <h5>Kontak</h5> 
          </div>
          <div>
            <a href="https://www.facebook.com/Revier-Reinhart-Christy-109278161654363" target="_blank"><img src="asset/facebook-icon.png" style="margin-left: 200px;"></a>
            <a href="https://www.instagram.com/revierreinhartchristy/" target="_blank"><img src="asset/instagram-icon.png" ></a>
            <a href="https://twitter.com/revierrchristy" target="_blank"><img src="asset/twitter-icon.png" ></a>
          </div>
        <div class="layar-dalam">
          <div class="copyright">&copy; 2022 Pesona Gorontalo</div>
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
  </body>
</html>