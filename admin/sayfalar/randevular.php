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
$vericek = $conn -> prepare("SELECT * FROM randevular where id = :id");
$vericek->bindParam(':id', $_GET['id']);
$vericek-> execute();
$veriyigoster = $vericek -> fetch(PDO::FETCH_ASSOC);
?>

<?php
if (isset($_GET['id'])) {
  $numaras = $_GET['id']; 
  $sil = $conn -> prepare("DELETE FROM randevular where id = :id");
  $sil->bindParam(':id', $_GET['id']);
  $sil-> execute();
  if($sil){
    echo '<meta http-equiv="refresh" content="2;URL=?sayfa=randevular">
    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Randevu Talebi Başarı İle Silindi! 2 Saniye İçinde Yönlendiriliyorsunuz!</strong>
    </div>';
  }else{
    echo '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Hata Oluştu!</strong>
    </div>';
  }  
} 
?> 

<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?sayfa=anasayfa">Ana Sayfa</a></li>
    <li class="breadcrumb-item active">Randevular</li>
  </ol>
  <div class="row">
    <div class="col-xl-12 col-sm-6 mb-3">
      <div class="table-responsive">
        <table class="table table-bordered text-center" id="dataTable">
          <thead>
            <tr>
              <th>Durum</th>
              <th>Adı Soyadı</th>
              <th>Telefon</th>
              <th>Hizmet - Hizmet Fiyatı</th>              
              <!-- <th>Hizmet Fiyatı</th>                -->
              <th>Randevu Tarihi</th>
              <th>Randevu Saati</th>
              <th>Açıklama</th>
              <th>Yönet</th>
            </tr>
          </thead>
          <tbody>
            
            <?php
            // $verial1 = $conn -> prepare("SELECT * FROM randevular order by ID desc");
            $verial1 = $conn -> prepare("SELECT * FROM randevular ORDER BY randevu_tarihi ASC, randevu_saati ASC");
            $verial1-> execute();
            while ($randevular = $verial1 -> fetch(PDO::FETCH_ASSOC)){
              if($randevular["yoneticicevap"]=='Yeni') {
                echo ' 
                <tr>
                  <td>
                    <span class="badge badge-success">'.$randevular['yoneticicevap'].'</span>
                  </td>
                  <td>'.$randevular['adsoyad'].'</td>
                  <td>'.$randevular['telefon'].'</td>
                  <td>'.$randevular['hizmet'].'</td>                                           
                  <td>'.$randevular['randevu_tarihi'].'</td>
                  <td>'.$randevular['randevu_saati'].'</td>
                  <td>'.$randevular['aciklama'].'</td>
                  <td>
                    <span style="float: right;">

                    <a href="?sayfa=randevugoruntule&id='.$randevular['id'].'" class="btn-warning btn-sm"><i class="fas fa-edit"> Düzenle</i></a> 
                    <a href="?sayfa=randevular&id='.$randevular['id'].'" class="btn-danger btn-sm"><i class="fas fa-trash-alt"> Sil</i></a>

                  </td>
                </tr>';
              }
              if($randevular["yoneticicevap"]=='Onaylı') {
                echo ' 
                <tr>
                  <td>
                    <span class="badge badge-warning">'.$randevular['yoneticicevap'].'</span>
                  </td>
                  <td>'.$randevular['adsoyad'].'</td>
                  <td>'.$randevular['telefon'].'</td>
                  <td>'.$randevular['hizmet'].'</td>              
                  <td>'.$randevular['randevu_tarihi'].'</td>
                  <td>'.$randevular['randevu_saati'].'</td>
                  <td>'.$randevular['aciklama'].'</td>
                  <td>
                    <span style="float: right;">

                    <a href="?sayfa=randevugoruntule&id='.$randevular['id'].'" class="btn-warning btn-sm"><i class="fas fa-edit"> Düzenle</i></a> 
                    <a href="?sayfa=randevular&id='.$randevular['id'].'" class="btn-danger btn-sm"><i class="fas fa-trash-alt"> Sil</i></a>
                     
                  </td>
                </tr>';
              }
              if($randevular["yoneticicevap"]=='Tamamlanmış') {
                echo ' 
                <tr>
                  <td>
                    <span class="badge badge-dark">'.$randevular['yoneticicevap'].'</span>
                  </td>
                  <td>'.$randevular['adsoyad'].'</td>
                  <td>'.$randevular['telefon'].'</td>
                  <td>'.$randevular['hizmet'].'</td>              
                  <td>'.$randevular['randevu_tarihi'].'</td>
                  <td>'.$randevular['randevu_saati'].'</td>
                  <td>'.$randevular['aciklama'].'</td>
                  <td>
                    <span style="float: right;">

                    <a href="?sayfa=randevugoruntule&id='.$randevular['id'].'" class="btn-warning btn-sm"><i class="fas fa-edit"> Düzenle</i></a> 
                    <a href="?sayfa=randevular&id='.$randevular['id'].'" class="btn-danger btn-sm"><i class="fas fa-trash-alt"> Sil</i></a>

                  </td>
                </tr>';
              }
              if($randevular["yoneticicevap"]=='İptal') {
                echo ' 
                <tr>
                  <td>
                    <span class="badge badge-secondary">'.$randevular['yoneticicevap'].'</span>
                  </td>
                  <td>'.$randevular['adsoyad'].'</td>
                  <td>'.$randevular['telefon'].'</td>
                  <td>'.$randevular['hizmet'].'</td>
                  <td>'.$randevular['randevu_tarihi'].'</td>
                  <td>'.$randevular['randevu_saati'].'</td>
                  <td>'.$randevular['aciklama'].'</td>
                  <td>
                    <span style="float: right;">

                    <a href="?sayfa=randevugoruntule&id='.$randevular['id'].'" class="btn-warning btn-sm"><i class="fas fa-edit"> Düzenle</i></a> 
                    <a href="?sayfa=randevular&id='.$randevular['id'].'" class="btn-danger btn-sm"><i class="fas fa-trash-alt"> Sil</i></a>

                    </span>
                  </td>
                </tr>';
              }
            }
            ?>
          </tbody>
        </table>
        <div class="card-footer small text-muted">
            En yakın randevu tarihine göre listelenir.
            <?php
              $sorgu = $conn->prepare("SELECT COUNT(*) FROM randevular");
              $sorgu->execute();
              $say = $sorgu->fetchColumn();
              echo 'Toplam randevu sayısı: <b>'.$say.'</b>';
              // echo '<b>'.$say.'</b> adet hizmet var';
            ?>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- <button type="button" class="btn btn-danger" data-target="#deleteModal" data-toggle="modal">Sil</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="deleteModal">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">
      Bu ögeyi silmek istediğine emin misin?
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
   </div>
   <div class="modal-body">
    <p>Bu öge hemen silinecek. Bu işlemi geri alamazsınız.</p>
  </div>
  <div class="modal-footer">
   <button type="button" class="btn btn-secondary" id="close-modal">Geri Dön</button>
    <button type="button" class="btn btn-danger">
      <a href="?sayfa=randevular&id='.$randevular['id'].'" class="btn-danger btn-sm">Sil</a>
    </button>
   </div>
  </div>
 </div>
</div> -->


