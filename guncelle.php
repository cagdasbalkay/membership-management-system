<?php

include "baglan.php";

if(isset($_POST['guncelle'])){

    $sql = "UPDATE `yuzme` 
        SET `uyead` = ?, 
            `uyesoyad` = ?, 
            `uyeoldtar` = ? 
             WHERE `yuzme`.`uyeno` = ?";
    $dizi=[
        $_POST['ad'],
        $_POST['sad'],
        $_POST['uyeoldtar'],
        $_POST['uyeno']
    ];
    $sorgu = $baglan->prepare($sql);
    $sorgu->execute($dizi);

    header("Location:index.php");
}

$sql ="SELECT * FROM yuzme WHERE uyeno = ?";
$sorgu = $baglan->prepare($sql);
$sorgu->execute([
    $_GET['uyeno']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
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
         <form action="" method="post" class="row mt-4 g-3">
             <input type="hidden" name="uyeno" value="<?=$satir['uyeno']?>">
                <div class="col-6">
                    <label for="ad" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="ad" value="<?=$satir['uyead']?>">
                </div>
                <div class="col-6">
                    <label for="sad" class="form-label">Soyad</label>
                    <input type="text" class="form-control" name="sad" value="<?=$satir['uyesoyad']?>" >
                </div>
              
                <div class="col-6">
                    <label for="uyeoldtar" class="form-label">Üye Olduğu Tarih:</label>
                    <input type="date" class="form-control" name="uyeoldtar" value="<?=$satir['uyeoldtar']?>">
                </div>
               
               
                <button type="submit" name="guncelle" class="btn btn-primary">Güncelle</button>
         </form>
     </div>

 </main>
 <footer></footer>
        
 </body>
 </html>