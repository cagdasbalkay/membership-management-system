<?php
    include "baglan.php";
    $sql = "SELECT * FROM yuzme WHERE uyeno = ?";
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
         <div class="row">
             <div class="col">
             <div class="card">
                <div class="card-body">
                <h5 class="card-title">
                    <?=$satir["uyead"]?> <?=$satir["uyesoyad"]?>
                </h5> 
                <h6 class="card-subtitle mb-2 text-muted ">Bilgiler</h6>
                <p class="card-text">Üye Olduğu Tarih : <?=$satir["uyeoldtar"]?></p>
                <p class="card-text " >Cinsiyet : <?=$satir["cinsiyet"]?></p>
                
  </div>
</div>
        </div>
</div>
             </div>
         </div>
     </div>
 </main>
 <footer></footer>
        
 </body>
 </html>