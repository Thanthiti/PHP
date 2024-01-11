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
    $Sum = 0;
    echo "Start Number $Start </br>";
    echo "End Number$End </br>";
    for($i = $Start;$i <= $End;$i++){
        $Sum = $Sum +  $i;
    }
    echo $Sum;
    ?>
</body>
</html>