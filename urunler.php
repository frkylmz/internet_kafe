<?php session_start(); ob_start(); ?>
<?php include_once 'baglantilar/database.php'; ?>
<?php include_once 'baglantilar/fonksiyonlar.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ÜRÜNLER</title>
  <link rel="stylesheet" href="urunler.css">
  <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>

<nav class="navbar bg-dark sticky-top navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="urunler.php"><i class="fa-solid fa-computer"></i> ÜRÜNLER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
           <a href="giris.php" class="nav-link" aria-current="page" title="Ana Sayfa"><i class="fa fa-home"></i> ANA SAYFA</a>
        </li>

        <li class="nav-item">
           <a href="index.php" class="nav-link" aria-current="page" title="Randevu"><i class="fa fa-calendar"></i> RANDEVU</a>
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

        <li class="nav-item">
          <a href="hakkimizda.php" class="nav-link" aria-current="page" title="Hakkımızda"><i class="fas fa-address-card"></i> HAKKIMIZDA</a>
        </li>

        <!-- <li class="nav-item">
          <a href="admin/index.php" class="nav-link" aria-current="page" title="Admin"><i class="fas fa-address-card"></i> ADMIN</a>
        </li> -->
        
      </ul>
      <form class="d-flex" role="search" id="search">
        <input class="form-control me-2" type="search" placeholder="Ara" id="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">ARA</button>
      </form>
    </div>
  </div>
</nav>

<!--  -->

<nav class="text-center p-2">
  <div class="">

    <h5 class="text-center p-2">
    Oyun, donanım ve ekipman firmaları ile birlikte düzenlediğimiz turnuva, altyapı ve pazarlama çalışmalarını her geçen yıl iyileştirerek Türkiye’de oyun sektörünün vazgeçilmez isimlerinden biri haline geldik. 2 katlı, 150 bilgisayarlı ve zengin yemek menüsüyle İzmir'in vazgeçilmez mekanlarından biri haline gelen DOKUZ EYLÜL INTERNET CAFE, müşteri portföyü ve popülerliği bir arada tutmayı başararak oyunculara sunduğu hizmetlere yenilerini eklemeye devam etmektedir.
    </h5>

  </div>
</nav>


<!--  -->

<div class="row row-cols-1 row-cols-md-3 g-4 p-3">
  <div class="col">
    <div class="card h-100">
      <a href="silver.php"><img src="img/silver.png" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >SILVER GAMING</h3>
        <h5 class="card-title" style="text-align:center" >₺14,00</h5>
        <p class="card-text">7. nesil Intel Core işlemcilerin ve GeForce GTX 960 ve Radeon RX 480 ekran kartlarının yer aldığı "SILVER GAMING" serisi bilgisayarlarda, PUBG ve GTA V gibi birçok güncel oyunu akıcı performansta oynayabilirsiniz.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>İŞLEMCİ:</strong> Intel® Core™ i3-7100</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> GeForce GTX 960</p></li>
        <li class="list-group-item"><p><strong>RAM:</strong> 16GB DDR4</p></li>
        <li class="list-group-item"><p><strong>SSD:</strong> 240GB</p></li>
        <li class="list-group-item"><p><strong>HDD:</strong> 1TB</p></li>
        <li class="list-group-item"><p><strong>MONİTÖR:</strong> 24" 144Hz 1ms Gaming</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <a href="gold.php"><img src="img/gold.png" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >GOLD GAMING</h3>
        <h5 class="card-title" style="text-align:center" >₺17,00</h5>
        <p class="card-text">Gücünü 7. nesil Core i5 işlemcilerden ve Pascal mimarili GeForce GTX 1060 6G ekran kartlarından alan "GOLD GAMING" serisi bilgisayarlarımızda oyunları 144Hz monitörle oynamanın keyfini yaşayacaksınız. Tüm bunların yanında size Corsair ve Cooler Master oyuncu ekipmanları eşlik ediyor!</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>İŞLEMCİ:</strong> Intel® Core™ i5-7500, i7-7700</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> GeForce GTX 1060 6G</p></li>
        <li class="list-group-item"><p><strong>RAM:</strong> 16GB DDR4</p></li>
        <li class="list-group-item"><p><strong>SSD:</strong> 240GB / 480GB</p></li>
        <li class="list-group-item"><p><strong>HDD:</strong> 1TB</p></li>
        <li class="list-group-item"><p><strong>MONİTÖR:</strong> 24" 144Hz 1ms Gaming</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <a href="platinum.php"><img src="img/platinum.png" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >PLATINUM GAMING</h3>
        <h5 class="card-title" style="text-align:center" >₺21,00</h5>
        <p class="card-text">"PLATINUM GAMING" serisi bilgisayarlarımız 240Hz akıcı oyun deneyimini sizlere en iyi şekilde sunuyor. Kafemizin üst katındaki arka alanda yer alan bu sistemlerimizde daha önce hiç olmadığı kadar akıcı bir oyun deneyimiyle rakiplerinize karşı üstün olun! Üstelik en güncel Cooler Master oyuncu ekipmanlarıyla oyun için gereken her şey hazır.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>İŞLEMCİ:</strong> Intel® Core™ i7-7700</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> GeForce RTX 2080</p></li>
        <li class="list-group-item"><p><strong>RAM:</strong> 16GB DDR4</p></li>
        <li class="list-group-item"><p><strong>SSD:</strong> 240GB VNMe</p></li>
        <li class="list-group-item"><p><strong>HDD:</strong> 1TB</p></li>
        <li class="list-group-item"><p><strong>MONİTÖR:</strong> Alienware 24.5" 240Hz</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <a href="platinumplus.php"><img src="img/platinumplus.png" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >PLATINUM+ GAMING</h3>
        <h5 class="card-title" style="text-align:center" >₺24,00</h5>
        <p class="card-text">"PLATINUM+ GAMING" serisi bilgisayarlarımız 240Hz akıcı oyun deneyimini ve FreeSync teknolojisini bir arada size sunuyor. Kafemizin üst katındaki orta alanda yer alan bu sistemlerimiz kalabalık arkadaş grubunuzla birlikte mücadele etmeniz için sizi bekliyor! Üstelik en güncel SteelSeries oyuncu ekipmanlarıyla oyun için gereken her şey hazır.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>İŞLEMCİ:</strong> Intel® Core™ i7-10700K, i7-11700K</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> GeForce GTX 3060Ti</p></li>
        <li class="list-group-item"><p><strong>RAM:</strong> 16GB DDR4</p></li>
        <li class="list-group-item"><p><strong>SSD:</strong> 512GB M2 NVMe</p></li>
        <li class="list-group-item"><p><strong>MONİTÖR:</strong> BenQ Zowie 24" 240Hz</p></li>
        <li class="list-group-item"><p><strong>EKİPMAN:</strong> Steelseries</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <a href="elite.php"><img src="img/elite.png" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >ELITE GAMING</h3>
        <h5 class="card-title" style="text-align:center" >₺36,00</h5>
        <p class="card-text">"ELITE GAMING" serisi bilgisayarlarımız kafemizde arkadaşlarıyla birlikte takım olarak mücadele etmek isteyenlerin tercihi olacaktır. Özel odalarımızda konumlanan bu sistemler beşerli olarak ister antrenman, isterse rekabetçi oyun deneyimini yaşamak isteyen tüm oyuncular için biçilmiş kaftan. Özel oyuncu koltuklarıyla, kapalı, klimalı bir ortamda ve en güncel donanım ve ekipmanlarla rakiplerinizden bir adım önde olacaksınız. Üstelik 34" Kavisli 144Hz monitör ayrıcalığıyla!</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>İŞLEMCİ:</strong> Intel® Core™ i7-10700K, i7-11700K</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> GeForce GTX 3070</p></li>
        <li class="list-group-item"><p><strong>RAM:</strong> 32GB DDR4</p></li>
        <li class="list-group-item"><p><strong>SSD:</strong> 2TB</p></li>
        <li class="list-group-item"><p><strong>MONİTÖR:</strong> Asus 27" 280Hz, Monster Aryond 27" 240Hz</p></li>
        <li class="list-group-item"><p><strong>EKİPMAN:</strong> Razer</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <a href="stream.php"><img src="img/stream.png" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >STREAM GAMING</h3>
        <h5 class="card-title" style="text-align:center" >₺45,00</h5>
        <p class="card-text">"STREAM GAMING" serisi bilgisayarlarımız kafemizdeki en yüksek donanıma ve en iyi ekipmanlara sahip sistemlerimizdir. Klimalı özel bir odada hem en yüksek grafik seviyelerinde oyun oynamak isteyenler, hem de oynadığı oyunu takipçilerine yayınlamak isteyen oyun tutkunları için birebir!</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>İŞLEMCİ:</strong> Intel® Core™ i9-11900KF, i9-10900K, i7-10700K</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> GeForce RTX 4080, GeForce RTX 4090</p></li>
        <li class="list-group-item"><p><strong>RAM:</strong> 32GB / 64GB / 128GB DDR4</p></li>
        <li class="list-group-item"><p><strong>SSD:</strong> 2TB NVMe</p></li>
        <li class="list-group-item"><p><strong>MONİTÖR:</strong> Asus 27" 280Hz</p></li>
        <li class="list-group-item"><p><strong>EKİPMAN:</strong> Razer</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>

<!-- Back to top button -->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- Explanation -->
<div class="container mt-4 text-center">
</div>

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

<!-- <script>
  document.querySelector('#search').addEventListener('input', filterList);

  function filterList() {
    const searchInput = document.querySelector('#search')
    const filter = searchInput.value.toLowerCase()
    const listItems = document.querySelectorAll('form-control')

    listItems.forEach((item) => {
      let text = item.textContent;
      if(text.toLowerCase().includes(filter.toLowerCase())){
        item.style.display = '';
      }
      else {
        item.style.display = 'none';
      }
    })
  }
</script> -->


  
</body>
</html>

