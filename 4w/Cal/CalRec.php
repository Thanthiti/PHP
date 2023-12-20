<html>
<head><title>การสร้างฟอร์มในการรับค่าเพื่อค านวณ</title></head>
<body>
<table border="1" align="center" width="500">
    <tr>
            <td colspan='2' align='center'>
                <big>คำนวณพื่นที่ 4 เหลี่ยม</big>
            </td>
            </tr> 
    <?php
    $height = 10;
    $width = 5;
    $Result = $height * $width;

    echo"<tr>
    <td >ความกว้าง : </td>
    <td><input type='inteager' name='number1' size='10' value='$width'/> </td>
    </tr>
    <tr>
    <td>ความยาว : </td>
    <td><input type='text' name='number1' size='10' value='$height'/> </td>
    </tr>
    <td>พื้นที่สี่เหลี่ยม $width  * $height : </td>
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