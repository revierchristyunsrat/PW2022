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
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#support">Support</a></li>
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#kontak">Kontak</a></li>
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
          <h3>Pesona Gorontalo</h3>
          <p>
            Nikmati pengalaman perjalanan wisata indah Gorontalo
          </p>
          <p>
            <a href="#tentang" class="tombol">INFO LANJUT</a>
          </p>
        </div>
      </header>
      <main>
        <section id="tentang">
          <div class="layar-dalam">
            <h3>Tentang</h3>
            <p class="ringkasan">
              Menawarkan pengalaman terbaik di destinasi wisata Gorontalo.
            </p>
            <div class="konten-isi">
              <p>
               Website ini dibuat dengan tujuan untuk lebih memperkenalkan kekayaan dan
               keindahan alam dari Provinsi Gorontalo melalui promosi tempat-tempat
               destinasi wisata di dalamnya. Di dalam website ini juga tersedia galeri 
               berbagai macam foto-foto tempat wisata di Gorontalo.
              </p>
            </div>
          </div>
        </section>
        <section class="abuabu" id="support">
          <div>
            <h3>Support</h3>
          </div>
          <div class="layar-dalam support">
            <div>
              <img src="asset/matahari.png" />
              <h6>Dalam Kondisi Apapun</h6>
              <p>
                Tempat-tempat wisata di Provinsi Gorontalo terbuka luas
                untuk dikunjungi dalam kondisi cuaca maupun lingkungan
                apapun.
              </p>
            </div>
            <div>
              <img src="asset/tas.png" />
              <h6>Pengalaman Wisata Yang Luar Biasa</h6>
              <p>
                Nikmati pengalaman luar biasa dan tak terlupakan dalam 
                perjalanan liburan di setiap destinasi wisata yang ada
                di Provinsi Gorontalo.
              </p>
            </div>
            <div>
              <img src="asset/kompas.png" />
              <h6>Pemandu Terlatih</h6>
              <p>
                Kunjungilah tempat-tempat wisata di Provinsi Gorontalo
                bersama dengan para pemandu terbaik kami untuk menuntun
                perjalanan wisata.
              </p>
            </div>
          </div>
        </section>
        <section id="galeri">
          <div><img src="asset/foto1.jpeg" /></div>
          <div><img src="asset/foto2.jpg" /></div>
          <div><img src="asset/foto3.jpg" /></div>
          <div><img src="asset/foto4.jpg" /></div>
          <div><img src="asset/foto5.jpg" /></div>
          <div><img src="asset/foto6.jpg" /></div>
          <div><img src="asset/foto7.jpg" /></div>
          <div><img src="asset/foto8.jpeg" /></div>
        </section>
        <section class="quote">
          <div class="layar-dalam">
            <p><b>Gorontalo merupakan tujuan destinasi wisata yang luar biasa.<b></p>
          </div>
        </section>
        <section class="abuabu" id="blog">
          <div class="layar-dalam">
            <h3>Blog Terkini</h3>
            <p class="ringkasan">
              Temukan kumpulan blog menarik seputar tempat wisata di Gorontalo
            </p>
            <div class="blog">
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/blog1.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">Tentang Gorontalo?</a></h4>
                    <p>
                      Gorontalo merupakan salah satu provinsi yang terletak di pulau
                      Sulawesi. Tidak heran di tempat ini terdapat banyak destinasi
                      wisata yang dapat menarik perhatian pengunjung.
                    </p>
                  </article>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/blog2.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">Tentang Pulo Cinta?</a></h4>
                    <p>
                      Pulo Cinta merupakan salah satu tempat wisata yang paling terkenal
                      di Provinsi Gorontalo. Sebuah penginapan terapung dan didesain berbentuk hati.
                    </p>
                  </article>
                </div>
              </div>
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