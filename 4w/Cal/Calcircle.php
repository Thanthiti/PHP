<html>
<head><title>การสร้างฟอร์มในการรับค่าเพื่อค านวณ</title></head>
<body>
<table border="1" align="center" width="500">
    <tr>
            <td colspan='2' align='center'>
                <big>คำนวณพื่นที่วงกลม</big>
            </td>
            </tr> 
    <?php
    $radius =3;
    define("PI",3.14);
    $Result = PI * ($radius *2);

    echo"<tr>
    <td >รัศมี : </td>
    <td><input type='inteager' name='number1' size='10' value='$radius'/> </td>
    </tr>

    <td>พื้นที่วงกลม 3.14  * $radius * $radius : </td>
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