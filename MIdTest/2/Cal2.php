<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Salary = $_GET['Salary'];
    $Allowance = $_GET['Allowance'];
    $Cost = $_GET['Cost'];
    $rate = array(1,5,10,15,20,25,30,35);
    $Money_rate = array(150000,300000,500000,750000,1000000,2000000,5000000);
    $Result = 0;
    $money = ($Salary * 12) - $Allowance - $Cost;
    
    echo "เงินสุทธิ : $money  =  ($Salary *12) - $Allowance - $Cost </br> ";
    
   for($i = 0; $i < 8; $i++){
    if($money <= $Money_rate[$i] ){
        
        $Result = $money * ($rate[$i] /100);
        echo"ภาษี : $money * $rate[$i]%";
        break;
    }else if($money > 5000000){
        $Result = $money * ($rate[$i] /100);
        echo"ภาษี : $money * $rate[$i]%";
        break;
    }
   }
   echo "</br>ต้องเสียภาษีภาษี : $Result";
    ?>
</body>
</html>