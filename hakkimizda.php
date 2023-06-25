<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HAKKIMIZDA</title>
  <link rel="stylesheet" href="urunler.css">
  <link rel="shortcut icon" type="image/png" href="img/hakkımızda.png"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>

<nav class="navbar bg-dark sticky-top navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="hakkimizda.php"><i class="fa-solid fa-address-card"></i> HAKKIMIZDA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li li class="nav-item">
           <a href="giris.php" class="nav-link" aria-current="page" title="Ana Sayfa"><i class="fa fa-home"></i> ANA SAYFA</a>
        </li>

        <li class="nav-item">
           <a href="index.php" class="nav-link" aria-current="page" title="Randevu"><i class="fa fa-calendar"></i> RANDEVU</a>
        </li>

        <li class="nav-item">
           <a href="urunler.php" class="nav-link" aria-current="page" title="Ürünler"><i class="fa-solid fa-computer"></i> ÜRÜNLER</a>
        </li>

        <li class="nav-item">
           <a href="konsollar.php" class="nav-link" aria-current="page" title="Konsollar"><i class="fa-solid fa-gamepad"></i> KONSOLLAR</a>
        </li>

        <li class="nav-item">
          <a href="yemekler.php" class="nav-link" aria-current="page" title="Yemekler"><i class="fas fa-hamburger"></i> YEMEKLER</a>
        </li>

        <li class="nav-item">
          <a href="iletisim.php" class="nav-link" aria-current="page" title="İletişim"><i class="fas fa-address-book"></i> İLETİŞİM</a>
        </li>

        <!-- <li class="nav-item">
          <a href="admin/index.php" class="nav-link" aria-current="page" title="Admin"><i class="fas fa-address-card"></i> ADMIN</a>
        </li> -->
    
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Ara" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">ARA</button>
      </form>
    </div>
  </div>
</nav>

<!--  -->

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
  </div>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="img/netcafesilver.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SILVER GAMING</h5>
        <p>7. nesil Intel Core işlemcilerin ve GeForce GTX 960 ve Radeon RX 480 ekran kartlarının yer aldığı "SILVER GAMING" serisi bilgisayarlarda, PUBG ve GTA V gibi birçok güncel oyunu akıcı performansta oynayabilirsiniz.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/netcafegold.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>GOLD GAMING</h5>
        <p>Gücünü 7. nesil Core i5 işlemcilerden ve Pascal mimarili GeForce GTX 1060 6G ekran kartlarından alan "GOLD GAMING" serisi bilgisayarlarımızda oyunları 144Hz monitörle oynamanın keyfini yaşayacaksınız. Tüm bunların yanında size Corsair ve Cooler Master oyuncu ekipmanları eşlik ediyor!</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/netcafeplatinum.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>PLATINUM GAMING</h5>
        <p>"PLATINUM GAMING" serisi bilgisayarlarımız 240Hz akıcı oyun deneyimini sizlere en iyi şekilde sunuyor. Kafemizin üst katındaki arka alanda yer alan bu sistemlerimizde daha önce hiç olmadığı kadar akıcı bir oyun deneyimiyle rakiplerinize karşı üstün olun! Üstelik en güncel Cooler Master oyuncu ekipmanlarıyla oyun için gereken her şey hazır.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/netcafeplatinumplus.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>PLATINUM+ GAMING</h5>
        <p>"PLATINUM GAMING+" serisi bilgisayarlarımız 240Hz akıcı oyun deneyimini ve FreeSync teknolojisini bir arada size sunuyor. Kafemizin üst katındaki orta alanda yer alan bu sistemlerimiz kalabalık arkadaş grubunuzla birlikte mücadele etmeniz için sizi bekliyor! Üstelik en güncel SteelSeries oyuncu ekipmanlarıyla oyun için gereken her şey hazır.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/netcafeelite.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>ELITE GAMING</h5>
        <p>"ELITE GAMING" serisi bilgisayarlarımız kafemizde arkadaşlarıyla birlikte takım olarak mücadele etmek isteyenlerin tercihi olacaktır. Özel odalarımızda konumlanan bu sistemler beşerli olarak ister antrenman, isterse rekabetçi oyun deneyimini yaşamak isteyen tüm oyuncular için biçilmiş kaftan. Özel oyuncu koltuklarıyla, kapalı, klimalı bir ortamda ve en güncel donanım ve ekipmanlarla rakiplerinizden bir adım önde olacaksınız. Üstelik 34" Kavisli 144Hz monitör ayrıcalığıyla!</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/netcafestream.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>STREAM GAMING</h5>
        <p>"STREAM GAMING" serisi bilgisayarlarımız kafemizdeki en yüksek donanıma ve en iyi ekipmanlara sahip sistemlerimizdir. Klimalı özel bir odada hem en yüksek grafik seviyelerinde oyun oynamak isteyenler, hem de oynadığı oyunu takipçilerine yayınlamak isteyen oyun tutkunları için birebir!.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/netcafevalorant.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>VALORANT TURNUVASI</h5>
        <p>VALORANT turnuvasını kazanan takım: Dark Passage</p>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Back to top button -->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- Explanation -->
<div class="container mt-4 text-center">
</div>

<!--  -->


<!-- Footer -->
<footer class="bg-dark text-center text-white" style="margin-top: 50px">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">

      <!-- Website -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.farukyilmaz.info" role="button"
        ><i class="fa-solid fa-link"></i
      ></a>

      <!-- Linktree -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://linktr.ee/farukyilmaz" role="button"
        ><i class="fa-solid fa-link"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/frkylmz420/" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/frkylmz/" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/frkylmz" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <section class="">
      <form action="">
        <div class="row d-flex justify-content-center">
          <div class="col-auto">
            <p class="pt-2">
              <strong></strong>
            </p>
          </div>

          <div class="col-md-5 col-12">
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" placeholder="ornek@gmail.com" />
              <label class="form-label" for="form5Example21" >E-mail</label>
            </div>
          </div>

          <div class="col-auto">
           
            <button type="submit" class="btn btn-outline-light mb-4">
              ÜYE OL
            </button>
          </div>
        
        </div>
        
      </form>
    </section>
   

    <section class="mb-4">
      <p>
      OYUN, İNTERNET, RESTAURANT, EKİPMAN
      </p>
    </section>

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">DOKUZ EYLÜL INTERNET CAFE</h5>

          <ul class="list-unstyled mb-0">
            <p>Adatepe, 35390 Buca/İzmir</p>
            <p>(0232) 420 41 80</p>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">ÇALIŞMA SAATLERİMİZ</h5>

          <ul class="list-unstyled mb-0">
            <p>Her gün 09:00 - 00:00</p>
            <!-- <p><strong>Pazartesi:</strong> 09:00-00:00</p>
            <p><strong>Salı:</strong> 09:00-00:00</p>
            <p><strong>Çarşamba:</strong> 09:00-00:00</p>
            <p><strong>Perşembe:</strong> 09:00-00:00</p>
            <p><strong>Cuma:</strong> 09:00-00:00</p>
            <p><strong>Cumartesi</strong> 09:00-00:00</p>
            <p><strong>Pazar:</strong> 09:00-00:00</p> -->
          </ul>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://www.farukyilmaz.info">Faruk YILMAZ</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e33c1889f9.js" crossorigin="anonymous"></script>
<script src="urunler.js"></script>


  
</body>
</html>

