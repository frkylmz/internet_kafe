<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YEMEKLER</title>
  <link rel="stylesheet" href="urunler.css">
  <link rel="shortcut icon" type="image/png" href="img/food.png"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>

<nav class="navbar bg-dark sticky-top navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="yemekler.php"><i class="fa-solid fa-burger"></i> YEMEKLER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <!-- aria-current="page" -->

        <li class="nav-item">
           <a href="giris.php" class="nav-link" aria-current="page" title="Ana Sayfa"><i class="fa fa-home"></i> ANA SAYFA</a>
        </li>

        <li class="nav-item">
           <a href="index.php" class="nav-link" aria-current="page" title="Randevu"><i class="fa fa-calendar"></i> RANDEVU</a>
        </li>

				<li class="nav-item active">
					<a href="urunler.php" class="nav-link" title="Ürünler"><i class="fa-solid fa-computer"></i> ÜRÜNLER <span class="sr-only">(current)</span></a>
				</li>

        <li class="nav-item">
           <a href="konsollar.php" class="nav-link" aria-current="page" title="Konsollar"><i class="fa-solid fa-gamepad"></i> KONSOLLAR</a>
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

<!-- ----------------------------- -->

<nav class="text-center p-2">
  <div class="">
    <h2 class="text-center p-2">
    ZENGİN DÜNYA MUTFAĞI BURADA
    </h2>

    <h5>
    DOKUZ EYLÜL INTERNET CAFE farklı mutfaklardan hazırladığı engin yemek yelpazesiyle siz müşterilerinin hizmetinde. Meksika ve İtalyan mutfağını fast food ve Türk mutfak kültürleriyle birleştiren DOKUZ EYLÜL INTERNET CAFE, eşsiz menüsüyle her türlü zevke hitap ediyor. Meksika’dan Quesadilla ve Mexican Burger, İtalya’dan ünlü makarnalar, fast food kültüründen hamburger, cheeseburger, patates kızartması ve dahası, Türk mutfağının benzeri olmayan lezzetleri olan döner, çökertme, mantı ve çok daha fazlasıyla DOKUZ EYLÜL INTERNET CAFE'de sizleri bekliyor.
    </h5>
  </div>
</nav>

<!-- ---------------------------- -->

<div class="row row-cols-1 row-cols-md-3 g-4 p-3">
  <div class="col">
    <div class="card h-100">
      <img src="imgyemekler/kaşarlıtost.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >TOSTLAR</h3>
        <h5 class="card-title" style="text-align:center" >₺36-78</h5>
        <!-- <p class="card-text">DENEME</p> -->
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>KAŞARLI TOST:</strong> ₺36</p></li>
        <li class="list-group-item"><p><strong>KEPEKLİ, BEYAZ PEYNİRLİ TOST:</strong> ₺42</p></li>
        <li class="list-group-item"><p><strong>KARIŞIK TOST:</strong> ₺49</p></li>
        <li class="list-group-item"><p><strong>AYVALIK TOSTU:</strong> ₺78</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="imgyemekler/burger.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >BURGERLER</h3>
        <h5 class="card-title" style="text-align:center" >₺68-106</h5>
        <!-- <p class="card-text">DENEME</p> -->
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>PİLİÇ BURGER:</strong> ₺68</p></li>
        <li class="list-group-item"><p><strong>HAMBURGER:</strong> ₺76</p></li>
        <li class="list-group-item"><p><strong>CHEESEBURGER:</strong> ₺82</p></li>
        <li class="list-group-item"><p><strong>BOMBA BURGER:</strong> ₺86</p></li>
        <li class="list-group-item"><p><strong>DOUBLE BURGER:</strong> ₺106</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <img src="imgyemekler/tatlı.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >TATLILAR</h3>
        <h5 class="card-title" style="text-align:center" >₺56-64</h5>
        <!-- <p class="card-text">DENEME</p> -->
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>EKLER:</strong> ₺46</p></li>
        <li class="list-group-item"><p><strong>MAGNOLIA:</strong> ₺54</p></li>
        <li class="list-group-item"><p><strong>TİRAMİSU:</strong>  ₺54</p></li>
        <li class="list-group-item"><p><strong>BROWNIE:</strong> ₺59</p></li>
        <li class="list-group-item"><p><strong>CHEESECAKE:</strong> ₺62</p></li>
        <li class="list-group-item"><p><strong>SUFLE:</strong> ₺64</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <img src="imgyemekler/içecek.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >İÇECEKLER</h3>
        <h5 class="card-title" style="text-align:center" >₺6-46</h5>
        <!-- <p class="card-text">DENEME</p> -->
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>SU:</strong> ₺6</p></li>
        <li class="list-group-item"><p><strong>BARDAK ÇAY:</strong> ₺12</p></li>
        <li class="list-group-item"><p><strong>AYRAN:</strong> ₺16</p></li>
        <li class="list-group-item"><p><strong>MEYVELİ SODALAR:</strong> ₺19</p></li>
        <li class="list-group-item"><p><strong>FİNCAN ÇAY:</strong> ₺20</p></li>
        <li class="list-group-item"><p><strong>KUTU İÇECEKLER:</strong> ₺22</p></li>
        <li class="list-group-item"><p><strong>BİTKİ ÇAYLARI:</strong> ₺24</p></li>
        <li class="list-group-item"><p><strong>FİLTRE KAHVE:</strong> ₺28</p></li>
        <li class="list-group-item"><p><strong>LİMONATA:</strong> ₺39</p></li>
        <li class="list-group-item"><p><strong>SICAK ÇİKOLATA:</strong> ₺40</p></li>
        <li class="list-group-item"><p><strong>SALEP:</strong> ₺40</p></li>
        <li class="list-group-item"><p><strong>MILKSHAKE:</strong> ₺46</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <img src="imgyemekler/atıştırmalık.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >ATIŞTIRMALIKLAR</h3>
        <h5 class="card-title" style="text-align:center" >₺8-30</h5>
        <!-- <p class="card-text">DENEME</p> -->
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>KEK:</strong> ₺8</p></li>
        <li class="list-group-item"><p><strong>ÇİKOLATA:</strong> ₺10</p></li>
        <li class="list-group-item"><p><strong>GOFRET:</strong> ₺10</p></li>
        <li class="list-group-item"><p><strong>CİPS:</strong> ₺15</p></li>
        <li class="list-group-item"><p><strong>BİSKÜVİ:</strong> ₺15</p></li>
        <li class="list-group-item"><p><strong>PATLAMIŞ MISIR:</strong> ₺20</p></li>
        <li class="list-group-item"><p><strong>ÇEREZ:</strong> ₺20</p></li>
        <li class="list-group-item"><p><strong>PATATES KIZARTMASI:</strong> ₺30</p></li>
      </ul>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <img src="imgyemekler/sandwich.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center" >SANDVİÇLER</h3>
        <h5 class="card-title" style="text-align:center" >₺54-72</h5>
        <!-- <p class="card-text">DENEME</p> -->
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p><strong>BEYAZ PEYNİRLİ SANDVİÇ:</strong> ₺54</p></li>
        <li class="list-group-item"><p><strong>TON BALIKLI SANDVİÇ:</strong> ₺59</p></li>
        <li class="list-group-item"><p><strong>KARIŞIK SANDVİÇ:</strong> ₺59</p></li>
        <li class="list-group-item"><p><strong>ÇITIR TAVUK SANDVİÇ:</strong> ₺66</p></li>
        <li class="list-group-item"><p><strong>AMERİKAN SANDVİÇ:</strong> ₺66</p></li>
        <li class="list-group-item"><p><strong>KÖFTE SANDVİÇ:</strong> ₺72</p></li>
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
  
</body>
</html>

