<?php
 
include "baglan.php";
 
if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `yuzme` WHERE `yuzme`.`uyeno` = ?";
    $sorgusil=$baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);
 
    header('Location:index.php');
 
}
 
$sql ="SELECT * FROM yuzme";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();
 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erdemli Swimming Club</title>
    <!-- CSS bolumu -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
 <body>
 <header>
  <div class="container">
      <div class="row">
          <div class="col">
              <h1 class="display-1 text-center">Erdemli Swimming Club</h1>
          </div>
      </div>
      <div class="row">
          <div class="col">
              <div class="btn-group">
                  <a href="index.php" class="btn btn-outline-primary">Tüm Üyeler</a>
                  <a href="ekle.php" class="btn btn-outline-primary">Üye Ekle</a>
              </div>
          </div>
      </div>
  </div>

 </header>
 <main>
     
     <div class="container">
         <div class="row mt-4">
             <div class="col">
                 <table class="table table-hover table-dark table-striped">
                     <thead>
                        <tr>
                            <th>No</th>
                            <th>Ad</th>
                            <th>Soyad</th>
                            <th>İşlem</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td><?=$satir['uyeno']?></td>
                                <td><?=$satir['uyead']?></td>
                                <td><?=$satir['uyesoyad']?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="detay.php?uyeno=<?=$satir['uyeno']?>" class="btn btn-success">Detay</a>
                                        <a href="guncelle.php?uyeno=<?=$satir['uyeno']?>" class="btn btn-secondary">Güncelle</a>
                                        <a href="?sil= <?=$satir['uyeno']?>" onclick="return confirm('Belirtilen öğeyi kaldırmak istediğinize emin misiniz ?')" class="btn btn-danger">Kaldır</a>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </main>
 <footer></footer>
        
 </body>
 </html>