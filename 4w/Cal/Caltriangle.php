<html>
<head><title>การสร้างฟอร์มในการรับค่าเพื่อค านวณ</title></head>
<body>
<table border="1" align="center" width="500">
    <tr>
            <td colspan='2' align='center'>
                <big>คำนวณพื่นที่สามเหลี่ยม</big>
            </td>
            </tr> 
    <?php
    $base =3;
    $height = 10;
    $Result = 1/2 * $base * $height;
    

    echo"<tr>
    <td> ฐาน: </td>
    <td><input type='inteager' name='number1' size='10' value='$base'/> </td>
    </tr>
    
    <tr>
    <td >ความสูง : </td>
    <td><input type='inteager' name='number1' size='10' value='$height'/> </td>
    </tr>
    <tr>
    <td>พื้นที่สามเหลี่ยม 1/2  * $base * $height : </td>
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