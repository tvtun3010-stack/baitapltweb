<?php

$students = [
    [
        "name" => "Đinh Gia Hưng",
        "midterm" => 7,
        "final" => 8
    ],
    [
        "name" => "Nguyễn Việt Hùng",
        "midterm" => 5,
        "final" => 6
    ],
    [
        "name" => "Đặng Đình Thái An",
        "midterm" => 4,
        "final" => 3
    ]
];

function calculateAverage($midterm, $final) {
    return ($midterm + $final) / 2;
}

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảng điểm 3 sinh viên</title>
</head>

<body>

<h2>BẢNG ĐIỂM 3 SINH VIÊN</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>STT</th>
        <th>Họ tên</th>
        <th>Giữa kỳ</th>
        <th>Cuối kỳ</th>
        <th>Điểm trung bình</th>
        <th>Kết quả</th>
    </tr>

    <?php
    $stt = 1;

    foreach ($students as $student) {

        $average = calculateAverage(
            $student["midterm"],
            $student["final"]
        );

        if ($average >= 5) {
            $result = "Đạt";
        } else {
            $result = "Chưa đạt";
        }

        echo "<tr>";
        echo "<td>" . $stt . "</td>";

        echo "<td>" .
            htmlspecialchars($student["name"]) .
            "</td>";

        echo "<td>" . $student["midterm"] . "</td>";
        echo "<td>" . $student["final"] . "</td>";
        echo "<td>" . number_format($average, 2) . "</td>";
        echo "<td>" . $result . "</td>";

        echo "</tr>";

        $stt++;
    }
    ?>

</table>

</body>
</html>