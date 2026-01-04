<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kopi Terbaik</title>

    <!---FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!---FEATHER ICONS-->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!---MY STYLE--->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!---NAVBAR START-->
    <nav CLASS="navbar">
        <a href="#" class="navbar-logo">Sudut<span>temu.</span></a>


        <div class="navbar-nav">
            <a href="#">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">kontak</a>
        </div>


        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>

             <!-- HAMBURGER MENU YANG BENAR -->
       <button id="hamburger-menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
        </div>
    </nav>


    <!---NAVBAR END-->

    <!---HERO SECTION START-->
    <section class="hero" id="home">
      <main class="content">
        <h1> Selamat datang <span><i><?= $_SESSION["username"] ?>!</i></span> Mari Nikmati Kopi</h1>
        <p>Bangkitkan hari dengan satu gelas kopi. Energi untuk membangun mimpi.</p>
        <a href="#" class="cta">Beli Sekarang</a>
      </main>
    </section>
    <!---HERO SECTION end-->

    <!--about section start-->
    <section id="about" class="about">
      <h2><span>Tentang </span> Kami</h2>

      <div class="row">
      <div class="about-img">
       <img src="img/tentang-kami.jpg" alt="Tentang Kami">
      </div>

      <div class="content">
        <h3>Kenapa memilih cafe kami?</h3>
        <p> Di cafe kami, Anda tidak hanya menikmati kopi, tapi juga pengalaman unik. 
          Kami menawarkan rasa terbaik dengan teknik pengolahan khusus.
           Setiap gelas adalah perpaduan kesempurnaan rasa dan kenyamanan.
          </p>
           <p> Setiap gelas kopi kami adalah cerita. Kami menggabungkan passion,
             kreativitas dan dedikasi untuk menciptakan pengalaman unik.
              Nikmati kopi kami dan temukan inspirasi baru. </p>
 
      </div>
    </section>
    <!--about section END-->

    <!--- Menu Section start-->
    <section id="menu" class="menu">
      <h2><span>Menu </span>Kami</h2>
      <p>Kami menawarkan berbagai pilihan menu kopi berkualitas tinggi, dirancang untuk memuaskan selera Anda.
      </p>

        <div class="row">
          <div class="menu-card">
            <img src="img/menu/2.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">-
              Espresso -</h3>
              <p class="menu-card-price">IDR 15k</p>
              <a href="Espresso.html"
               class="menu-card-detail">Order Now</a>
        </div> 
          <div class="menu-card">
            <img src="img/menu/3.jpg" alt="CoffeMilk" class="menu-card-img">
            <h3 class="menu-card-title">-
              Coffe Milk -</h3>
              <p class="menu-card-price">IDR 25k</p>
              <a href="CoffeMilk.html"
              class="menu-card-detail">Order Now</a> 
              
        </div> 
          <div class="menu-card">
            <img src="img/menu/4.jpg" alt="GreenTea" class="menu-card-img">
            <h3 class="menu-card-title">-
              Green Tea -</h3>
              <p class="menu-card-price">IDR 20k</p>
              <a href="GreenTea.html"
              class="menu-card-detail">Order Now</a>  
               
        </div> 
        <div class="menu-card">
          <img src="img/menu/5.jpg" alt="CoffeLatte" class="menu-card-img">
          <h3 class="menu-card-title">-
            Coffe Latte -</h3>
            <p class="menu-card-price">IDR 30k</p>
            <a href="CoffeLatte.html"
            class="menu-card-detail">Order Now</a> 
              
      </div> 
          <div class="menu-card">
            <img src="img/menu/7.jpg" alt="ChocoCake" class="menu-card-img">
            <h3 class="menu-card-title">-
              Choco Chake-</h3>
              <p class="menu-card-price">IDR 35k</p>
              <a href="ChocoCake.html"
              class="menu-card-detail">Order Now</a> 
               
        </div> 
          <div class="menu-card">
            <img src="img/menu/8.jpg" alt="Es cream" class="menu-card-img">
            <h3 class="menu-card-title">-
              Es cream -</h3>
              <p class="menu-card-price">IDR 15k</p>
              <a href="EsCream.html"
              class="menu-card-detail">Order Now</a>  
                
        </div> 
      </section>
    <!--- Menu Section end-->


    <!---contact section start-->
      <!-- contact section start -->
<section id="contact" class="contact">
  <h2><span>kontak </span>Kami</h2>
  <p>Kami peduli dengan Anda! Jika Anda memiliki pertanyaan, 
    saran atau ingin berbagi pengalaman, silakan hubungi kami</p>

  <div class="row">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63378.673949226126!2d109.07603969145624!3d-6.870568940704589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9dfbf3264c3%3A0x3027a76e352bbe0!2sTegal%2C%20Kota%20Tegal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1736227673107!5m2!1sid!2sid"
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
      class="map">
    </iframe>

    <!-- FORM -->
    <form action="proses_kontak.php" method="POST">

      <div class="input-grup">
        <i data-feather="user"></i>
        <input type="text" name="nama" placeholder="nama" required>
      </div>

      <div class="input-grup">
        <i data-feather="instagram"></i>
        <input type="text" name="instagram" placeholder="instagram">
      </div>

      <div class="input-grup">
        <i data-feather="mail"></i>
        <input type="email" name="email" placeholder="email" required>
      </div>

      <div class="input-grup">
        <i data-feather="phone"></i>
        <input type="text" name="no_hp" placeholder="No Handphone">
      </div>

      <div class="input-grup">
        <i data-feather="message-circle"></i>
        <input type="text" name="catatan" placeholder="Catatan">
      </div>

      <button type="submit" class="btn">kirim pesan</button>

    </form>
  </div>
</section>
<!-- contact section end -->

      
      <!---contact section end-->

      <!----footer start-->
      <footer>
      <div class="social">
        <a href="#"><i data-feather="instagram"></i></a>
          <a href="#"><i data-feather="twitter"></i></a>   
      </div>

      <div class="link">
        <a href="#home">Home</a>
        <a href="#about">Tentang kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">AliSanni</a>
        . | &copy; 2025.</p> 
      </div>
      </footer>
      <!----footer end-->

    <!---FEATHER ICON-->
    <script>
      feather.replace();
    </script>

    <!---MY JAVASCRIPT-->
    <script src="js/script.js"></script>
  </body>
</html>
