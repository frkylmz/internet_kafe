<?php session_start(); ob_start(); ?>
<?php include_once 'baglantilar/database.php'; ?>
<?php include_once 'baglantilar/fonksiyonlar.php';?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $ayarlargoster['site_title']; ?></title>
	<link rel="shortcut icon" type="image/png" href="/admin/assets/resim/favicon/logo.png"/>
	<meta name="description" content="<?php echo $ayarlargoster['site_description']; ?>">
	<meta name="keywords" content="<?php echo $ayarlargoster['site_keywords']; ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
	<link rel="stylesheet" href="/admin/assets/css/sb-admin.css">
	<link rel="stylesheet" href="/admin/assets/css/custom.css">
	<link rel="stylesheet" href="urunler.css">
	<?php echo $ayarlargoster['site_analytics']; ?>
	<link rel="stylesheet" href="/admin/assets/css/datepicker.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lumen/bootstrap.css">
	<link rel="shortcut icon" type="image/png" href="img/logo.png"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body id="page-top" class="theme-purple">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<!-- <a href="?sayfa=anasayfa" class="navbar-brand" title="Site Slogan">
			<?php echo $ayarlargoster['site_slogan']; ?>
		</a> -->

    <a href="giris.php" class="navbar-brand" title="Site Slogan">
			<?php echo $ayarlargoster['site_slogan']; ?>
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
        
				<li class="nav-item active">
					<a href="?sayfa=anasayfa" class="nav-link" title="Randevu"><i class="fa fa-calendar"></i> RANDEVU <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item active">
					<a href="urunler.php" class="nav-link" title="Ürünler"><i class="fa-solid fa-computer"></i> ÜRÜNLER <span class="sr-only">(current)</span></a>
				</li>

        <li class="nav-item active">
					<a href="konsollar.php" class="nav-link" title="Konsollar"><i class="fa-solid fa-gamepad"></i> KONSOLLAR <span class="sr-only">(current)</span></a>
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

        <!-- <li class="nav-item active">
					<a href="giris.php" class="nav-link" title="Giriş"><i class="fas fa-address-card"></i> GİRİŞ <span class="sr-only">(current)</span></a>
				</li> -->

				<!-- <li class="nav-item active">
					<a href="admin/giris.php" class="nav-link" title="Admin"><i class="fas fa-user"></i> ADMİN GİRİŞ <span class="sr-only">(current)</span></a>
				</li> -->

			</ul>
		</div>

    <div class="float-right">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a href="admin/giris.php" class="nav-link" title="Admin"> ADMİN GİRİŞ <i class="fas fa-user"></i> <span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>

	</nav>

	<br /><br /><br />

  <!-- randevu -->

	<div class="container mt-5">
			<div class="col">
				<?php Duyuru(); ?>
			</div>

			<div class="row container">
				<label class="col-4 mt-2 h-1">
					<img class="image" style="height: 400px;" src="img/logo.png" alt="">
				</label>

				<label class="col-8 h-100 mt-5">
					<?php SayfaGetir(); ?>
				</label>
			</div>
	</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script src="/admin/assets/js/sb-admin.min.js"></script>
		<script src="/admin/assets/js/custom.js"></script>
		<script src="/admin/assets/js/datepicker.js"></script>
		<script>
			$('.datepicker').datepicker({
				todayBtn: "linked",
				clearBtn: true,
				language: "tr"
			});


			function run() {
				document.getElementById("fiyat").value = document.getElementById("select").value;
				document.getElementById("hizmet").value = document.getElementById("select").value;
			}

			function run() {
				var select = document.getElementById("select"),
				option = select.options[select.selectedIndex];
				document.getElementById("fiyat").value = option.id;
				document.getElementById("hizmet").value = option.innerHTML;
			}

		</script>

<!-- Back to top button -->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- Explanation -->
<div class="container mt-4 text-center">
</div>

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

          <!-- <ul class="list-unstyled mb-0" name="site_adres">
            <p><?php echo $veriyigoster['site_adres']; ?></p>
          </ul> -->

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
            <!-- <?php echo $veriyigoster['site_calsaat']; ?> -->
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

<!-- Start of ChatBot (www.chatbot.com) code -->
  <script type="text/javascript">
      window.__be = window.__be || {};
      window.__be.id = "640f295fc237d900077dc604";
      (function() {
          var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
          be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
      })();
  </script>
<!-- End of ChatBot code -->


	</body>
	</html>