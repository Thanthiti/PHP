<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Start = $_GET['Start'];
    $End = $_GET['End'];
    $Divine = 12;
    $count = 0;
    $Result = array();

    for(;$Start <= $End;$Start++){
       if($Start % $Divine == 0){
            $Result[$count++] = $Start;
       }
       
    }
    if($count==0){
        echo"ไม่มีตัวหารลงตัว";
    }else{
        echo"ผลลัพธ์คือ : ";
        echo $Result[$count-1];
    }
    ?>
</body>
</html>