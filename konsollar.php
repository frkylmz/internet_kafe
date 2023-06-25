<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KONSOLLAR</title>
  <link rel="stylesheet" href="urunler.css">
  <link rel="shortcut icon" type="image/png" href="img/console.png"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>

<nav class="navbar bg-dark sticky-top navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="konsollar.php"><i class="fa-solid fa-gamepad"></i> KONSOLLAR</a>
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

				<li class="nav-item active">
					<a href="urunler.php" class="nav-link" title="Ürünler"><i class="fa-solid fa-computer"></i> ÜRÜNLER <span class="sr-only">(current)</span></a>
				</li>

        <li class="nav-item active">
					<a href="yemekler.php" class="nav-link" title="Yemekler"><i class="fas fa-hamburger"></i> YEMEKLER <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item active">
					<a href="iletisim.php" class="nav-link" title="İletişim"><i class="fas fa-address-book"></i> İLETİŞİM <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item active">
					<a href="hakkimizda.php" class="nav-link" title="Hakkımızda"><i class="fas fa-address-card"></i> HAKKIMIZDA <span class="sr-only">(current)</span></a>
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

<div class="row row-cols-1 row-cols-md-3 g-4 p-3">
  <div class="col">
    <div class="card h-100">
      <img src="imgkonsollar/ps3.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >PlayStation 3</h3>
        <h4 class="card-title" style="text-align:center" >₺14,00</h4>
        <h6>Kiralama Bedeli</h6>
        <p class="card-text">Haftalık: ₺300</p>
        <p class="card-text">Aylık: ₺1000</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>DEPOLAMA KAPASİTESİ:</strong> 500GB / 1TB</p></li>
        <li class="list-group-item"><p><strong>GRAFİK İŞLEMCİSİ:</strong> NVIDIA RSX</p></li>
        <li class="list-group-item"><p><strong>BELLEK:</strong> 512MB</p></li>
        <li class="list-group-item"><p><strong>OYUN ÇÖZÜNÜRLÜĞÜ:</strong> 1280x720p (HD)</p></li>
        <li class="list-group-item"><p><strong>VİDEO ÇÖZÜNÜRLÜĞÜ:</strong> 1920x1080p (Full HD)</p></li>
        <li class="list-group-item"><p><strong>FPS DEĞERİ:</strong> 60 FPS</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <img src="imgkonsollar/ps4.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >PlayStation 4</h3>
        <h5 class="card-title" style="text-align:center" >₺17,00</h5>
        <h6>Kiralama Bedeli</h6>
        <p class="card-text">Haftalık: ₺300</p>
        <p class="card-text">Aylık: ₺1000</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>ANA İŞLEMCİ:</strong> Ix86-64 AMD "Jaguar", 8 çekirdek</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> 1,84 TFLOPS, AMD Radeon™ tabanlı grafik motoru</p></li>
        <li class="list-group-item"><p><strong>BELLEK:</strong> GDDR5 8 GB</p></li>
        <li class="list-group-item"><p><strong>DEPOLAMA KAPASİTESİ:</strong> 500 GB / 1 TB</p></li>
        <li class="list-group-item"><p><strong>AĞ:</strong> Ethernet （10BASE-T, 100BASE-TX, 1000BASE-T, ×1IEEE 802.11 a/b/g/n/ac, Bluetooth® v4.0</p></li>
        <li class="list-group-item"><p><strong>GÜÇ:</strong> AC 100-240 V, 50/60 Hz</p></li>
        <li class="list-group-item"><p><strong>AV ÇIKIŞI:</strong> HDMI™ ÇIKIŞ BAĞLANTI NOKTAS (HDR ÇIKIŞI DESTEKLENİR)</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <img src="imgkonsollar/ps5.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >PlayStation 5</h3>
        <h5 class="card-title" style="text-align:center" >₺21,00</h5>
        <h6>Kiralama Bedeli</h6>
        <p class="card-text">Haftalık: ₺300</p>
        <p class="card-text">Aylık: ₺1000</p>
      </div>
      <ul class="list-group list-group-flush">
      <li class="list-group-item"><p><strong>ANA İŞLEMCİ:</strong> Ix86-64 AMD "Jaguar", 8 çekirdek</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> 1,84 TFLOPS, AMD Radeon™ tabanlı grafik motoru</p></li>
        <li class="list-group-item"><p><strong>BELLEK:</strong> GDDR5 8 GB</p></li>
        <li class="list-group-item"><p><strong>DEPOLAMA KAPASİTESİ:</strong> 500 GB / 1 TB</p></li>
        <li class="list-group-item"><p><strong>AĞ:</strong> Ethernet （10BASE-T, 100BASE-TX, 1000BASE-T, ×1IEEE 802.11 a/b/g/n/ac, Bluetooth® v4.0</p></li>
        <li class="list-group-item"><p><strong>GÜÇ:</strong> AC 100-240 V, 50/60 Hz</p></li>
        <li class="list-group-item"><p><strong>AV ÇIKIŞI:</strong> HDMI™ ÇIKIŞ BAĞLANTI NOKTAS (HDR ÇIKIŞI DESTEKLENİR)</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <img src="imgkonsollar/xboxs.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >Xbox Series S</h3>
        <h5 class="card-title" style="text-align:center" >₺17</h5>
        <h6>Kiralama Bedeli</h6>
        <p class="card-text">Haftalık: ₺300</p>
        <p class="card-text">Aylık: ₺1000</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>İŞLEMCİ:</strong> 3,6 GHz Hızında 8X Çekirdek (SMT ile 3,4 GHz) Özel Zen 2 CPU</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> 4 TFLOP, 1,565 GHz Hızında 20 CU Özel RDNA 2 GPU</p></li>
        <li class="list-group-item"><p><strong>BELLEK:</strong> 10 GB GDDR6 128 bit genişliğinde veri yolu</p></li>
        <li class="list-group-item"><p><strong>DAHİLİ DEPOLAMA:</strong>  512 GB Özel NVME SSD</p></li>
        <li class="list-group-item"><p><strong>OYUN ÇÖZÜNÜRLÜĞÜ:</strong> 1440p</p></li>
        <li class="list-group-item"><p><strong>OPTİK SÜRÜCÜ:</strong> 4K UHD Blu-Ray</p></li>
        <li class="list-group-item"><p><strong>FPS:</strong> 120 FPS'ye Kadar</p></li>
        <li class="list-group-item"><p><strong>BAĞLANTI NOKTALARI VE BAĞLANTI:</strong> HDMI, USB, KABLOSUZ, ETHERNET</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="imgkonsollar/xboxx.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >Xbox Series X</h3>
        <h5 class="card-title" style="text-align:center" >₺21</h5>
        <h6>Kiralama Bedeli</h6>
        <p class="card-text">Haftalık: ₺300</p>
        <p class="card-text">Aylık: ₺1000</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>İŞLEMCİ:</strong> 3,8 GHz Hızında 8X Çekirdek (SMT ile 3,66 GHz) Özel Zen 2 CPU</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> 12 TFLOP, 1,825 GHz Hızında 52 CU Özel RDNA 2 GPU</p></li>
        <li class="list-group-item"><p><strong>BELLEK:</strong> 320 bit genişliğinde veri yoluyla 16 GB GDDR6</p></li>
        <li class="list-group-item"><p><strong>DAHİLİ DEPOLAMA:</strong>   1 TB Özel NVME SSD</p></li>
        <li class="list-group-item"><p><strong>OYUN ÇÖZÜNÜRLÜĞÜ:</strong> Gerçek 4K</p></li>
        <li class="list-group-item"><p><strong>FPS:</strong> 120 FPS'ye Kadar</p></li>
        <li class="list-group-item"><p><strong>BAĞLANTI NOKTALARI VE BAĞLANTI:</strong> HDMI, USB, KABLOSUZ, ETHERNET</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="imgkonsollar/steamdeck.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >Steam Deck</h3>
        <h5 class="card-title" style="text-align:center" >₺17</h5>
        <h6>Kiralama Bedeli</h6>
        <p class="card-text">Haftalık: ₺300</p>
        <p class="card-text">Aylık: ₺1000</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>İŞLEMCİ:</strong> AMD APU Zen 2 4c/8t, 2,4-3,5 GHz (en fazla 448 GFlops FP32)</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> 8 RDNA 2 CU, 1,0-1,6 GHz (en fazla 1,6 TFlops FP32)</p></li>
        <li class="list-group-item"><p><strong>BELLEK:</strong> 16 GB LPDDR5 tümleşik bellek (32 bitlik dörtlü kanal, 5500 MT/sn.)</p></li>
        <li class="list-group-item"><p><strong>DAHİLİ DEPOLAMA:</strong> 64/256/512 GB NVME SSD</p></li>
        <li class="list-group-item"><p><strong>OYUN ÇÖZÜNÜRLÜĞÜ:</strong> 1280 x 800 piksel (16:10 görüntü oranı)</p></li>
        <li class="list-group-item"><p><strong>YENİLEME HIZI:</strong> 60 Hz</p></li>
        <li class="list-group-item"><p><strong>BAĞLANTI NOKTALARI VE BAĞLANTI:</strong> Bluetooth 5.0</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="imgkonsollar/nintendo.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >Nintendo Switch</h3>
        <h5 class="card-title" style="text-align:center" >₺17</h5>
        <h6>Kiralama Bedeli</h6>
        <p class="card-text">Haftalık: ₺300</p>
        <p class="card-text">Aylık: ₺1000</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>İŞLEMCİ:</strong> ARM Cortex A57</p></li>
        <li class="list-group-item"><p><strong>EKRAN KARTI:</strong> NVIDIA Tegra X1</p></li>
        <li class="list-group-item"><p><strong>BELLEK:</strong> 4 GB</p></li>
        <li class="list-group-item"><p><strong>DAHİLİ DEPOLAMA:</strong> 32 GB</p></li>
        <li class="list-group-item"><p><strong>OYUN ÇÖZÜNÜRLÜĞÜ:</strong> 1280x720p (HD)</p></li>
        <li class="list-group-item"><p><strong>VİDEO ÇÖZÜNÜRLÜĞÜ:</strong> 1920x1080p (Full HD)</p></li>
        <li class="list-group-item"><p><strong>FPS:</strong> 60 fps</p></li>
        <li class="list-group-item"><p><strong>BAĞLANTI NOKTALARI VE BAĞLANTI:</strong> Kablosuz</p></li>
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
            <p><strong>Pazar:</strong> 09:00-00:00</p>-->
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

