<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
        span.Mo{
            color: yellow;
            font-size: 45px;
        }
        span{
        }
    
    </style>
</head>
<body>
    
    <?php
    $Row = $_GET["Row"];
    
    for($i = 1; $i <= $Row; $i++){
        echo" Row $i:";
        for($n = 1; $n <= $i ; $n++){
            echo"<span class=Mo>        *</span>";
        }
        echo"<br>";
    }
    ?>
    
   
</body>
</html>