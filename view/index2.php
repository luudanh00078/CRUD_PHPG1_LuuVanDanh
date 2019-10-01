<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dien tich hinh tron</title>
</head>
<body>
 <?php include_once 'nav.php';?>
    <?php
    include_once 'nav.php';
    /**
     * @param $banKinh là bán kinh hình tron
     * @return $rs dien tich hinh tron
     */
      function dienTichHinhTron($banKinh){
          $rs = 0;
          $rs = M_PI * $banKinh * $banKinh;
          return $rs;
      }
      $dientich = dienTichHinhTron(5);
      echo "diện tích hình tròn cần tính là" . $dientich; 
    ?>
</body>
</html>