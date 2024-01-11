<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style ="font-size: 25px;">
        fds
    <?php
    $num1 = $_GET['number1'];
    $num2 = $_GET['number2'];
    $Shape = $_GET['Oper'];
    define("PI",3.14);
    
    echo "<p style=font-size: 25px;>ข้อมูลที่ผู้ใช้ใส่มา </br>";
    echo "Number 1 :$num1 </br>";
    echo "Number 2 :$num2 </br>";
    echo "ผลลัพธ์  $Shape : ";
    if($Shape == "Rectangle"){

        echo "ความกว้าง = $num1 ความยาว = $num2 พื้นที่ = " ;
        echo $num1 * $num2;
    }
    if($Shape == "Triangle"){
        echo "ฐาน = $num1 สูง = $num2 พื้นที่ = ";
        echo 1/2 * $num1 * $num2;
    }
    if($Shape == "Circle") {

        echo "รัศมี = $num1 พื้นที่ = ";
        echo PI * ($num1 * $num1);
    }
    echo "</p>"

    ?>
        </p>
        

</body>
</html>