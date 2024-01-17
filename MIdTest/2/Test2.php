<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="Cal2.php">
    <table width="400" align="center" border="2"e>
        <tr>
            <td align="center" colspan="2">คำนวณภาษี</td>
        </tr>
        <tr >
            <td>รับค่าเงินเดือน/เดือน</td>
            <td> <input type="text" name="Salary" value="" size="15"></td>
        </tr>
        <tr >
            <td>รับค่าลดหย่อนภาษี/ปี</td>
            <td> <input type="text" name="Allowance" value="" size="15"></td>
        </tr>
        <tr >
            <td>รับค่าใช้จ่าย/ปี</td>
            <td> <input type="text" name="Cost" value="" size="15"></td>
        </tr>
        <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="OK">
                    <input type="reset" value="NO">
                </td>
            </tr>
    </table>

    </form>
</body>
</html>