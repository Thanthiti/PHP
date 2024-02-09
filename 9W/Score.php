<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- class 5  Assign 10  homework 15 mid 35 final 35   -->
    <?php
        $maxRow = 10;
        $maxCol = 6 ;
        $Value_Score = array(5,10,15,35,35,0);
        
        for ( $i = 0; $i < $maxRow ; $i++ ) {
            for ( $n = 0; $n < $maxCol ; $n++ ) {
                $score[$i][$n] = rand(0,$Value_Score[$n]);
               
            }
            $score[$i][5]  = Sum_Of_Score($score,$maxCol,$i); 
            
        }
        

        echo "<table border='1' align='center' width='100%'>";
        echo "<tr><td width='80' align='center'>Class</td>";
        echo "<td width='80' align='center'>Assign</td>";
        echo "<td width='80' align='center'>Homework</td>";
        echo "<td width='80' align='center'>Midterm</td>";
        echo "<td width='80' align='center'>Final</td>";
        echo "<td width='80' align='center'>Sum Of Score</td></tr>";
        for ( $i = 0; $i < $maxRow ; $i++ ) {
            echo "<tr>";
            for ( $n = 0; $n < $maxCol ; $n++ ) {
                echo "<td align='center'>" . $score[$i][$n] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        function Sum_Of_Score($Score,$col,$index){
            $sum = 0;
            
            for($i = 0; $i < $col;$i++){
                 $sum += $Score[$index][$i] ;
            }
            return $sum;
            }
    
    ?>
</body>

</html>