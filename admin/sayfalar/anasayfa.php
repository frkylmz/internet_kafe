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

<div class="container-fluid">
  
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="?sayfa=anasayfa">Ana Sayfa</a></li>
  </ol>

  <div class="row"> 

    <!-- Toplam randevular -->
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-calendar"></i>
          </div>
          <div class="mr-5">
            <?php
            $sorgu = $conn->prepare("SELECT COUNT(*) FROM randevular");
            $sorgu->execute();
            $say = $sorgu->fetchColumn();
            echo 'Toplam Randevular: <b>'.$say.'</b>';
            // echo '<b>'.$say.'</b> adet randevu talebi var';
            ?>
          </div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="?sayfa=randevular">
          <span class="float-left">Detaylar</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <!-- Toplam hizmetler -->
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-box-open"></i>
          </div>
          <div class="mr-5">
            <?php
            $sorgu = $conn->prepare("SELECT COUNT(*) FROM hizmetler");
            $sorgu->execute();
            $say = $sorgu->fetchColumn();
            echo 'Toplam Hizmetler: <b>'.$say.'</b>';
            // echo '<b>'.$say.'</b> adet hizmet var';
            ?>
          </div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="?sayfa=hizmetler">
          <span class="float-left">Detaylar</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <!-- Toplam yemekler -->
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-hamburger"></i>
          </div>
          <div class="mr-5">
            <?php
            $sorgu = $conn->prepare("SELECT COUNT(*) FROM yemekler");
            $sorgu->execute();
            $say = $sorgu->fetchColumn();
            echo 'Toplam Yemekler: <b>'.$say.'</b>';
            // echo '<b>'.$say.'</b> adet yemek var';
            ?>
          </div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="?sayfa=yemekler">
          <span class="float-left">Detaylar</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <!-- Toplam duyurular -->
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-bullhorn"></i>
          </div>
          <div class="mr-5">
            <?php
            $sorgu = $conn->prepare("SELECT COUNT(*) FROM duyurular");
            $sorgu->execute();
            $say = $sorgu->fetchColumn();
            echo 'Toplam Duyurular: <b>'.$say.'</b>';
            // echo '<b>'.$say.'</b> adet duyuru var';
            ?>
          </div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="?sayfa=duyurular">
          <span class="float-left">Detaylar</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <!-- Randevular -->
    <div class="col-xl-6 col-sm-6 mb-3">
      <div class="card mb-3">
        <div class="card-header"><i class="fas fa-fw fa-calendar"></i> <strong>Randevular</strong></div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Durum</th>
                <th>Randevu</th>
                <th>Telefon</th>
                <th class="text-right">Detaylar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sorgu = $conn->prepare("SELECT * FROM randevular ORDER BY randevu_tarihi ASC, randevu_saati ASC");
              $sorgu->execute();
              while ($randevu = $sorgu -> fetch(PDO::FETCH_ASSOC)){
                
                if($randevu["yoneticicevap"]=='Yeni') {
                  echo
                  '<tr>
                    <td>
                      <span class="badge badge-success">
                    '.$randevu['yoneticicevap'].'</span>
                    </td>
                    <td>' . $randevu["adsoyad"] . '</td>
                    <td>' . $randevu["telefon"] . '</td>
                    <td class="text-right"><a href="?sayfa=randevugoruntule&id='.$randevu['id'].'" class="btn btn-primary btn-sm">
                      <i class="fas fa-fw fa-eye"></i>
                    </td>
                  </tr>';
                }

                if($randevu["yoneticicevap"]=='Onaylı') {
                  echo 
                  '<tr>
                    <td>
                      <span class="badge badge-warning">'.$randevu['yoneticicevap'].'</span>
                    </td>
                    <td>' . $randevu["adsoyad"] . '</td>
                    <td>' . $randevu["telefon"] . '</td>
                    <td class="text-right"><a href="?sayfa=randevugoruntule&id='.$randevu['id'].'" class="btn btn-primary btn-sm">
                      <i class="fas fa-fw fa-eye"></i>
                    </td>
                  </tr>';
                }

                if($randevu["yoneticicevap"]=='Tamamlanmış') {
                  echo 
                  '<tr>
                    <td>
                      <span class="badge badge-dark">'.$randevu['yoneticicevap'].'</span>
                    </td>
                    <td>' . $randevu["adsoyad"] . '</td>
                    <td>' . $randevu["telefon"] . '</td>
                    <td class="text-right"><a href="?sayfa=randevugoruntule&id='.$randevu['id'].'" class="btn btn-primary btn-sm">
                      <i class="fas fa-fw fa-eye"></i>
                    </td>
                  </tr>';
                }

                if($randevu["yoneticicevap"]=='İptal') {
                  echo 
                  '<tr>
                    <td>
                      <span class="badge badge-secondary">'.$randevu['yoneticicevap'].'</span>
                    </td>
                    <td>' . $randevu["adsoyad"] . '</td>
                    <td>' . $randevu["telefon"] . '</td>
                    <td class="text-right"><a href="?sayfa=randevugoruntule&id='.$randevu['id'].'" class="btn btn-primary btn-sm">
                      <i class="fas fa-fw fa-eye"></i>
                    </td>
                  </tr>';
                }
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="card-footer small text-muted">
          En yakın randevu tarihine göre listelenir.
          <?php
            $sorgu = $conn->prepare("SELECT COUNT(*) FROM randevular");
            $sorgu->execute();
            $say = $sorgu->fetchColumn();
            echo 'Sistemde toplam <b>'.$say.'</b> adet randevu bulunmaktadır.';
            // echo '<b>'.$say.'</b> adet yemek var';
          ?>
        </div>
      </div>
    </div>

    <!-- -------------------------------------------------------- -->

    <!-- <div class="col-xl-6 col-sm-6 mb-3">
      <div class="card mb-3">
        <div class="card-header"><i class="fas fa-fw fa-box-open"></i> Hizmetler</div>
        <div class="table-responsive">
          
          <table class="table">
            <thead>
              <tr>
                <th>Hizmet</th>  
                <th>Hizmet Fiyatı</th>              
                <th class="text-right">#</th>
              </tr>
            </thead>
            
            <tbody>
              <?php
              // try {
              //   $sorgu = $conn->prepare("SELECT * FROM hizmetler ORDER BY ID ASC LIMIT 100");
              //   // $sorgu = $conn->prepare("SELECT * FROM hizmetler ORDER BY fiyat ASC LIMIT 100");
              //   $sorgu->execute();
              //   while ($veri = $sorgu->fetch()) {
              //     $goster .= 
              //     '<tr>

              //       <td>
              //         <span data-toggle="tooltip" data-html="true">' . $veri["urunbaslik"] . '</span>
              //       </td>

              //       <td>
              //         <span data-toggle="tooltip" data-html="true">' . $veri["fiyat"] . '</span>
              //       </td>

              //       <td class="text-right"><a href="?sayfa=hizmetduzenle&id='.$veri['id'].'" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-eye"></i>
              //       </td>
              //     </tr>';
              //   }
              //   echo $goster;
              // } catch (PDOException $e) {
              //   die($e->getMessage());
              // }
              ?>
            </tbody>

          </table>
        </div>
        <div class="card-footer small text-muted">Son 100 Hizmet Listelenir.</div>
      </div>
    </div> -->

    <!-- -------------------------------------------------------hizmetler---------------------------------------------------------------------------------------- -->

    <!-- Hizmetler -->
    <div class="col-xl-6 col-sm-6 mb-3">
      <div class="card mb-3">
        <div class="card-header"><i class="fas fa-fw fa-box-open"></i> <strong>Hizmetler</strong></div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Hizmet - Fiyat</th>  
                <!-- <th>Hizmet Fiyatı</th>            -->
                <th class="text-right">Detaylar</th>
              </tr>
            </thead>

            <!-- 
              <td> <span data-toggle="tooltip" data-html="true">' . $veri["fiyat"] . '</span> </td> 
            -->
            
            <tbody>
              <?php
              try {
                $sorgu = $conn->prepare("SELECT * FROM hizmetler ORDER BY urunbaslik ASC");
                // $sorgu = $conn->prepare("SELECT * FROM hizmetler ORDER BY ID ASC LIMIT 100");
                // $sorgu = $conn->prepare("SELECT * FROM hizmetler ORDER BY fiyat ASC LIMIT 100");
                $sorgu->execute();
                while ($veri = $sorgu->fetch()) {
                  $goster .= 
                  '<tr>

                    <td>
                      <span data-toggle="tooltip" data-html="true">' . $veri["urunbaslik"] . '</span>
                    </td>

                    <td class="text-right">
                      <a href="?sayfa=hizmetduzenle&id='.$veri['id'].'" class="btn btn-primary btn-sm">
                        <i class="fas fa-fw fa-eye">
                        </i>
                    </td>
                  </tr>';
                }
                echo $goster;
              } catch (PDOException $e) {
                die($e->getMessage());
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="card-footer small text-muted">
            Alfabetik olarak listelenir.
            <?php
              $sorgu = $conn->prepare("SELECT COUNT(*) FROM hizmetler");
              $sorgu->execute();
              $say = $sorgu->fetchColumn();
              echo 'Sistemde toplam <b>'.$say.'</b> adet hizmet bulunmaktadır.';
              // echo '<b>'.$say.'</b> adet hizmet var';
            ?>
        </div>
      </div>
    </div>

<!-- --------------------------------------- yemekler------------------------------------------------------------------------------- -->

    <!-- Yemekler -->
    <div class="col-xl-6 col-sm-6 mb-3">
      <div class="card mb-3">
        <div class="card-header"><i class="fas fa-hamburger"></i> <strong>Yemekler</strong></div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Yemek - Fiyat</th>  
                <!-- <th>Yemek Fiyatı</th>            -->
                <th class="text-right">Detaylar</th>
              </tr>
            </thead>

            <!-- 
              <td> <span data-toggle="tooltip" data-html="true">' . $veri2["fiyat"] . '</span> </td> 
            -->
            
            <tbody>
              <?php
              try {
                $sorgu2 = $conn->prepare("SELECT * FROM yemekler ORDER BY urunbaslik ASC");
                // $sorgu = $conn->prepare("SELECT * FROM yemekler ORDER BY ID ASC LIMIT 100");
                // $sorgu = $conn->prepare("SELECT * FROM yemekler ORDER BY fiyat ASC LIMIT 100");
                $sorgu2->execute();
                while ($veri2 = $sorgu2->fetch()) {
                  $goster2 .= 
                  '<tr>

                    <td>
                      <span data-toggle="tooltip" data-html="true">' . $veri2["urunbaslik"] . '</span>
                    </td>

                    <td class="text-right"><a href="?sayfa=yemekduzenle&id='.$veri2['id'].'" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-eye"></i>
                    </td>
                  </tr>';
                }
                echo $goster2;
              } catch (PDOException $e) {
                die($e->getMessage());
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="card-footer small text-muted">
            Alfabetik olarak listelenir.
            <?php
              $sorgu = $conn->prepare("SELECT * FROM yemekler ORDER BY fiyat ASC");
              $sorgu->execute();
              $say = $sorgu->fetchColumn();
              echo 'Sistemde toplam <b>'.$say.'</b> adet yemek bulunmaktadır.';
              // echo '<b>'.$say.'</b> adet hizmet var';
            ?>
        </div>
      </div>
    </div>

    <!-- ------------------------------------------- görevler ------------------------------------------ -->
    
    <!-- Görevler -->
    <div class="col-xl-6 col-sm-6 mb-3">
      <div class="card mb-3">
        <div class="card-header"><i class="fas fa-fw fa-check"></i> <strong>Görevler</strong></div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Görev</th>            
                <th class="text-right">Detaylar</th>
              </tr>
            </thead>
            
            <tbody>
              <?php
              try {
                $sorgu3 = $conn->prepare("SELECT * FROM gorevler ORDER BY tarih DESC");
                // $sorgu = $conn->prepare("SELECT * FROM hizmetler ORDER BY ID ASC LIMIT 100");
                // $sorgu = $conn->prepare("SELECT * FROM hizmetler ORDER BY fiyat ASC LIMIT 100");
                $sorgu3->execute();
                while ($veri3 = $sorgu3->fetch()) {
                  $goster3 .= 
                  '<tr>

                    <td>
                      <span data-toggle="tooltip" data-html="true">' . $veri3["urunbaslik"] . '</span>
                    </td>

                    <td class="text-right"><a href="?sayfa=gorevduzenle&id='.$veri3['id'].'" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-eye"></i>
                    </td>
                  </tr>';
                }
                echo $goster3;
              } catch (PDOException $e) {
                die($e->getMessage());
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="card-footer small text-muted">
          En yakın eklenme tarihine göre listelenir.
            <?php
              $sorgu = $conn->prepare("SELECT COUNT(*) FROM gorevler");
              $sorgu->execute();
              $say = $sorgu->fetchColumn();
              echo 'Sistemde toplam <b>'.$say.'</b> adet görev bulunmaktadır.';
              // echo '<b>'.$say.'</b> adet hizmet var';
            ?>
        </div>
      </div>
    </div>

  </div>
</div>