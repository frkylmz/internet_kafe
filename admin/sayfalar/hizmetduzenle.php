<?php session_start(); ob_start(); ?>
<?php include 'baglantilar/database.php'; ?>
<?php
if( isset($_SESSION['yonetici']) && !empty($_SESSION['yonetici']) ){
  $records = $conn->prepare('SELECT * FROM yoneticiler WHERE id = :id');
  $records->bindParam(':id', $_SESSION['yonetici']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  $user = NULL;
  if( count($results) > 0){ $user = $results; }
}
else { header("Location: giris.php"); die(); }
?>

<?php 
$vericek = $conn -> prepare("SELECT * FROM hizmetler WHERE id = :id");
// $vericek = $conn -> prepare("SELECT * FROM hizmetler WHERE fiyat = :fiyat");
$vericek->bindParam(':id', $_GET['id']);
// $vericek->bindParam(':fiyat', $_GET['fiyat']);
$vericek-> execute();
$veriyigoster = $vericek -> fetch(PDO::FETCH_ASSOC);


?>

<?php
if (isset($_POST["Gonder"])) {
  $ids = $_GET['id'];
  $urunbaslik = $_POST['urunbaslik'];  
  // $fiyat = $_POST['fiyat'];   
  $guncelle = $conn -> prepare("UPDATE hizmetler SET urunbaslik=:urunbaslik WHERE id=:id");
  // $guncelle = $conn -> prepare("UPDATE hizmetler SET fiyat=:fiyat WHERE fiyat=:fiyat");
  $guncelle->bindParam(':id', $ids);
  $guncelle->bindParam(':urunbaslik', $urunbaslik); 
  // $guncelle->bindParam(':fiyat', $fiyat);
  $guncelle-> execute(); 
  if($guncelle){
    $mesaj = '<meta http-equiv="refresh" content="2;URL=?sayfa=hizmetler">
    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Başarı İle Düzenlendi. 2 Saniye İçinde Yönlendiriliyorsunuz...</strong>
    </div>';
  }else{
    $mesaj = '<div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Hata Oluştu!</strong>
    </div>';
  }
}
?>

<?php
if (isset($_GET['numaram'])) {
  $numaras = $_GET['numaram'];  
  $urunsil = $conn -> prepare("DELETE FROM hizmetler where id = :id");
  $urunsil->bindParam(':id', $_GET['numaram']);
  $urunsil-> execute();
  if($urunsil){
    $mesaj = '<meta http-equiv="refresh" content="2;URL=?sayfa=hizmetler">
    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Hizmet Başarı İle Silindi! 2 Saniye İçinde Yönlendiriliyorsunuz!</strong>
    </div>';
  }else{
    $mesaj = '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Hata Oluştu!</strong>
    </div>';
  }  
} 
?>

<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?sayfa=anasayfa">Ana Sayfa</a></li>
    <li class="breadcrumb-item"><a href="?sayfa=hizmetler">Hizmet Düzenle</a></li>
    <li class="breadcrumb-item active"><?php echo $veriyigoster['urunbaslik']; ?></li>
    <!-- <li class="breadcrumb-item active"><?php echo $veriyigoster['fiyat']; ?></li> -->
  </ol>

  <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-xl-12 col-sm-12 mb-3">
        <div class="message"></div>
        <?php if(!empty($mesaj)): ?>
          <p><?= $mesaj ?></p>
        <?php endif; ?>
      </div>   

      <div class="col-xl-8 col-sm-12 mb-3">        
        <div class="input-group mb-3">
          <div class="input-group-prepend"><span class="input-group-text">Hizmet İsmi - Hizmet Fiyatı</span></div>
          <input type="text" name="urunbaslik" class="form-control" value="<?php echo $veriyigoster['urunbaslik']; ?>">
          <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $_GET['id']; ?>">
        </div>        
      </div>

      <!-- <div class="col-xl-8 col-sm-12 mb-3">        
        <div class="input-group mb-3">
          <div class="input-group-prepend"><span class="input-group-text">Hizmet Fiyatı</span></div>
          <input type="text" name="fiyat" class="form-control" value="<?php echo $veriyigoster['fiyat']; ?>">
          <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $_GET['id']; ?>">
        </div>        
      </div> -->

      <div class="col-xl-12 col-sm-12 mb-3">
        <hr>
        <a href="?sayfa=hizmetler" class="btn btn-danger pull-left">Geri Dön</a>
        <button type="submit" name="Gonder" class="btn btn-success float-right">Kaydet</button>
      </div>

    </div>

  </form>
  
</div>
