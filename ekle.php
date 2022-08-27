<?php
    if(isset($_POST["kaydet"]))
    {
    include "baglan.php";
    $sql = "INSERT INTO `yuzme` (`uyeno`, `uyead`, `uyesoyad`, `cinsiyet`, `uyeoldtar`) VALUES (NULL, ?, ?, ?, ?);";
    $dizi = [
        $_POST["ad"],
        $_POST["sad"],
        $_POST["cins"],
        $_POST["uyeoldtar"]

    ];
    $sth = $baglan->prepare($sql);
    $sonuc = $sth->execute($dizi);
    header("Location:index.php");
    }
    
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
                <div class="col-6">
                    <label for="ad" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="ad">
                </div>
                <div class="col-6">
                    <label for="sad" class="form-label">Soyad</label>
                    <input type="text" class="form-control" name="sad">
                </div>
                
                <div class="col-6">
                    <label for="uyeoldtar" class="form-label">Üye Olduğu Tarih:</label>
                    <input type="date" class="form-control" name="uyeoldtar">
                </div>
               
                <div class="col mt-4" >
                <label for="" class="form-label">Erkek
                        <input type="radio" name="cins" value="E">
                    </label>
                  
                    <label for="" class="form-label">Kız
                        <input type="radio" name="cins" value="K">
                    </label>
                </div>
                <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>
         </form>
     </div>

 </main>
 <footer></footer>
        
 </body>
 </html>