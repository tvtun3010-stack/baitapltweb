<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>



<form method="post">
    Tên tài liệu:
    <input type="text" name="ten"><br><br>

    Số lượng:
    <input type="number" name="sl"><br><br>

    Đơn giá:
    <input type="number" name="gia"><br><br>

    <input type="submit" name="tinh" value="Tính">
</form>

<?php
if (isset($_POST["tinh"])) {
    $ten = $_POST["ten"];
    $sl = $_POST["sl"];
    $gia = $_POST["gia"];

    $tien = $sl * $gia;

    echo "Tên tài liệu: " . $ten . "<br>";
    echo "Số tiền: " . $tien . " VNĐ";
}
?>

</body>
</html>