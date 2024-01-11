
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
        p{
            font-size: 60px;
        }
    </Style>
</head>
<body>

    <p>
    <?php
    $Even  = 0;
    $Odd = 0;
    /*
    do{
        
        if($Number % 2 !== 0){
            echo "$Number is Odd Number<br>";
            $Sum += $Number;
        }
        $Number++;
    }while($Number <= 10);
    
     */
    
    
    for($i = 1; $i <= 10;$i++){
        if($i % 2 !== 0){
            $Odd += $i;
        }
        else{
            $Even += $i;
        }
    }
    
    echo "Sum of odd number = $Odd <br>";
    echo "Sum of even number = $Even";

    ?>
    </p>
</body>
</html>