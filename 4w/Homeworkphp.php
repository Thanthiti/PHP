<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  
</head>
<body>
    <h1 class="head">แนะนำตัวเอง</h1>

  <?php 
  
  $รหัส = "6506021622159";
  $ชื่อ = "ธัญธิติ ปิ่นโมลี";
  $ที่อยู่ = "14 อนามัยงามเจริญ4 แขวงท่าข้าม เขตบางขุนเทียน กรุงเทพ 10150";
  $เบอร์= "0945255469";
  $คณะ= "อุตสาหกรรมและเทคโนโลยี";
  $สาขา="เทคโนโลยีสารสนเทศ";
  $หลักสูตร="วิทยาศาสตรบัณฑิต";
  
  echo ("<div class='box'> <p>รหัส : $รหัส <br> ชื่อ : $ชื่อ <br> ที่อยู่ : $ที่อยู่ <br> เบอร์ : $เบอร์ <br> 
        $คณะ<br> $สาขา<br> $หลักสูตร</p> </div> ");
  

    ?>
</body>
</html>