<?php session_start(); ob_start(); ?>
<?php include 'baglantilar/database.php'; ?>
<?php
if( isset($_SESSION['yonetici']) && !empty($_SESSION['yonetici']) ){
	$records = $conn->prepare('SELECT * FROM yoneticiler WHERE id = :id');
	$records->bindParam(':id', $_SESSION['yonetici']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);
	$user = NULL;
	if( count($results) > 0){
		$user = $results;
	}
}
else
{
	header("Location: giris.php");
	die();
}
?>

<?php 
$vericek = $conn -> prepare("SELECT * FROM ayarlar where id = 1");
$vericek->bindParam(1, $_GET['id']);
$vericek-> execute();
$veriyigoster = $vericek -> fetch(PDO::FETCH_ASSOC);
?>

<?php
if (isset($_POST["Gonder"])) {
	$site_id = $_GET['id'];
	$site_title = $_POST['site_title'];
	$site_slogan = $_POST['site_slogan'];
	$site_description = $_POST['site_description'];
	$site_keywords = $_POST['site_keywords'];
	$site_copright = $_POST['site_copright'];	
	$site_telefon = $_POST['site_telefon'];	
	$site_calsaat = $_POST['site_calsaat'];
	$site_eposta = $_POST['site_eposta'];
	$site_adres = $_POST['site_adres'];	
	$guncelle = $conn -> prepare("UPDATE ayarlar SET site_title=:site_title, site_slogan=:site_slogan, site_description=:site_description, site_keywords=:site_keywords, site_copright=:site_copright, site_telefon=:site_telefon, site_calsaat=:site_calsaat, site_eposta=:site_eposta, site_adres=:site_adres WHERE id= 1");
	$guncelle->bindParam(':site_title', $site_title);	
	$guncelle->bindParam(':site_slogan', $site_slogan);
	$guncelle->bindParam(':site_description', $site_description);
	$guncelle->bindParam(':site_keywords', $site_keywords);
	$guncelle->bindParam(':site_copright', $site_copright);	
	$guncelle->bindParam(':site_telefon', $site_telefon);	
	$guncelle->bindParam(':site_calsaat', $site_calsaat);
	$guncelle->bindParam(':site_eposta', $site_eposta);
	$guncelle->bindParam(':site_adres', $site_adres);	
	$guncelle-> execute(); 
	if($guncelle){
		$mesaj = '<meta http-equiv="refresh" content="1;URL=?sayfa=ayarlar">
		<div class="alert alert-dismissible alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Başarı İle Düzenlendi. 2 Saniye İçinde Yönlendiriliyorsunuz...</strong>
		</div>';
	}else{
		$mesaj = '<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Hata Oluştu !</strong>
		</div>';
	}
}
?>
<div class="container-fluid">

	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?sayfa=anasayfa">Ana Sayfa</a></li>
		<li class="breadcrumb-item active">Site Ayarları</li>
	</ol>

	<form action="" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-xl-12 col-sm-12 mb-3">
				<div class="message"></div>
				<?php if(!empty($mesaj)): ?>
					<p><?= $mesaj ?></p>
				<?php endif; ?>
			</div>
			<div class="col-xl-6 col-sm-12 mb-3">
				<h6>Genel Ayarlar</h6>
				<hr>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend"><span class="input-group-text">Sitenin Adı (Title)</span></div>
					<input type="text" class="form-control" name="site_title" value="<?php echo $veriyigoster['site_title']; ?>">
				</div>
				
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend"><span class="input-group-text">Site Slogan (Logo)</span></div>
					<input type="text" class="form-control" name="site_slogan" value="<?php echo $veriyigoster['site_slogan']; ?>">
				</div>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend"><span class="input-group-text">Açıklama (Description)</span></div>
					<input type="text" class="form-control" name="site_description" value="<?php echo $veriyigoster['site_description']; ?>">
				</div>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend"><span class="input-group-text">Anahtar Kelimeler (Keywords)</span></div>
					<input type="text" class="form-control" name="site_keywords" value="<?php echo $veriyigoster['site_keywords']; ?>">
				</div>
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend"><span class="input-group-text">Site Alt Yazı (Copyright)</span></div>
					<input type="text" class="form-control" name="site_copright" value='<?php echo $veriyigoster['site_copright']; ?>'>
				</div>				
			</div>
			
			<div class="col-xl-12 col-sm-12 mb-3">
				<h6>İletişim Ayarları</h6>
				<hr>
				<div class="row">
					<div class="col-xl-6 col-sm-12 mb-3">
						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend"><span class="input-group-text">Telefon</span></div>
							<input type="text" class="form-control" name="site_telefon" value="<?php echo $veriyigoster['site_telefon']; ?>">
						</div>						
						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend"><span class="input-group-text">Çalışma Saati</span></div>
							<input type="text" class="form-control" name="site_calsaat" value="<?php echo $veriyigoster['site_calsaat']; ?>">
						</div>
					</div>
					<div class="col-xl-6 col-sm-12 mb-3">
						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend"><span class="input-group-text">E-Posta</span></div>
							<input type="text" class="form-control" name="site_eposta" value="<?php echo $veriyigoster['site_eposta']; ?>">
						</div>
						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend"><span class="input-group-text">Adres</span></div>
							<textarea type="text" class="form-control" name="site_adres"><?php echo $veriyigoster['site_adres']; ?></textarea>
						</div>
					</div>
					<div class="col-xl-12 col-sm-12 mb-3">
						<hr>
						<a href="?sayfa=anasayfa" class="btn btn-danger pull-left">Geri Dön</a>
						<button type="submit" name="Gonder" class="btn btn-success pull-right">Kaydet</button>
					</div>
				</div>
			</div>
		</div>
	</form>


</div>