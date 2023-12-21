<html>
<head><title>การสร้างฟอร์มในการรับค่าเพื่อค านวณ</title></head>
<body>
<table border="1" align="center" width="500">
    <tr>
            <td colspan='2' align='center'>
                <big>คำนวณพื้นที่สี่เหลี่ยมคางหมู</big>
            </td>
            </tr> 
    <?php
    $height = 12;
    $parallel_T = 4;
    $parallel_B= 7;
    $SumofParallel = $parallel_T + $parallel_B;
    $Result = 1/2 * $height * $SumofParallel;


    echo
    "<tr>
    <td >ความสูง : </td>
    <td><input type='inteager' name='number1' size='10' value='$height'/> </td>
    </tr>

    <tr>
    <td >ด้านคู่ขนานด้านบน : </td>
    <td><input type='inteager' name='number1' size='10' value='$parallel_T'/> </td>
    </tr>

    <tr>
    <td >ด้านคู่ขนานด้านล่าง : </td>
    <td><input type='inteager' name='number1' size='10' value='$parallel_B'/> </td>
    </tr>

    <td>พื้นที่สี่เหลี่ยมคางหมู 1/2 * $height * $SumofParallel : </td>
    <td><input type='text' name='number1' size='10' value='$Result'/> </td>
    </tr>";
    ?>
    <tr>
        <td colspan='2' align='center'><a href="index.php">กลับ</a></td>
    </tr>

</table>
</form>
</body>
</html>