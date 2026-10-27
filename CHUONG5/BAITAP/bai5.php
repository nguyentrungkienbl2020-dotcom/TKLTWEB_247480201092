<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tính USCLN và BSCNN</title>
</head>
<body>

<?php
$kq = "";

// Hàm tính Ước số chung lớn nhất (USCLN) bằng thuật toán Euclid
function uscln($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Kiểm tra khi người dùng bấm nút USCLN hoặc BSCNN
if (isset($_POST['uscln']) || isset($_POST['bscnn'])) {
    $so1 = $_POST['so1'];
    $so2 = $_POST['so2'];

    // Kiểm tra xem có phải là số không
    if (is_numeric($so1) && is_numeric($so2)) {
        $a = abs((int)$so1);
        $b = abs((int)$so2);

        if (isset($_POST['uscln'])) {
            $kq = uscln($a, $b);
        } elseif (isset($_POST['bscnn'])) {
            if ($a == 0 || $b == 0) {
                $kq = 0;
            } else {
                // Công thức BSCNN = (A * B) / USCLN(A, B)
                $kq = ($a * $b) / uscln($a, $b);
            }
        }
    } else {
        $kq = "Vui lòng nhập số hợp lệ!";
    }
}
?>

<form method="post" action="">
    <h3>TÍNH USCLN VÀ BSCNN</h3>
    Số thứ 1: <input type="text" name="so1" value="<?php echo isset($_POST['so1']) ? $_POST['so1'] : ''; ?>"><br><br>
    Số thứ 2: <input type="text" name="so2" value="<?php echo isset($_POST['so2']) ? $_POST['so2'] : ''; ?>"><br><br>
    Kết quả: <input type="text" value="<?php echo $kq; ?>"><br><br>
    
    <input type="submit" name="uscln" value="USCLN">
    <input type="submit" name="bscnn" value="BSCNN">
</form>

</body>
</html>