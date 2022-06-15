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
            <li><?php echo "<li><p> Welcome " . $_SESSION['username'] . "<p></li>"; ?></li>
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
            <h3>Profil</h3>
            <p>
              Profil dan identitas dari kelompok 1 kelas TIK2032G - Pemrograman Web
            </p>
            <p>
              <a href="#profil" class="tombol">INFO LANJUT</a>
            </p>
          </div>
        </header>
<section id="profil">
    <div class="layar-dalam">
      <h3>Profil dan Link Video Presentasi</h3>
      <p class="ringkasan">
        Berikut ini merupakan profil dari Kelompok 1 Kelas TIK2032G - Pemrograman Web beserta link video presentasi
      </p>
      <div class="profil">
        <div>
          <img src="asset/profil1.jpg" />
          <h6>Revier Reinhart Christy</h6>
          <span>20021106175</span>
        </div>
        <div>
          <img src="asset/profil2.jpeg" />
          <h6>Velisya Umboh</h6>
          <span>19021106017</span>
        </div>
        <div>
          <img src="asset/profil3.jpg" />
          <h6>Hebron Prasetya</h6>
          <span>210211060054</span>
        </div>
        <div>
          <img src="asset/profil4.jpg" />
          <h6>Talita Esther Manampiring</h6>
          <span>19021106008</span>
        </div>
      </div>
      <div>
        <b><p style="font-size: 20px;">Link video presentasi UTS: <a style="text-decoration: none; font-size: 20px;" href="https://drive.google.com/file/d/1ul7vhGY6Qk0jLoNalzaZzmn1nGssKCJL/view?usp=sharing" target='_blank'>Klik Di Sini</a></p></b>
        <b><p style="font-size: 20px;">Link video presentasi UAS: <a style="text-decoration: none; font-size: 20px;" href="https://youtu.be/BJp5XEvS8JU" target='_blank'>Klik Di Sini</a></p></b>
      </div>
    </div>
  </section>
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