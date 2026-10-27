<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tính Toán Số Học</title>
</head>
<body>

<?php
$kq = "";
// Kiểm tra xem người dùng đã nhấn nút tính toán nào chưa
if (isset($_POST['cong']) || isset($_POST['tru']) || isset($_POST['nhan']) || isset($_POST['chia']) || isset($_POST['mod'])) {
    $so1 = $_POST['so1'];
    $so2 = $_POST['so2'];

    if (isset($_POST['cong'])) {
        $kq = $so1 + $so2;
    } elseif (isset($_POST['tru'])) {
        $kq = $so1 - $so2;
    } elseif (isset($_POST['nhan'])) {
        $kq = $so1 * $so2;
    } elseif (isset($_POST['chia'])) {
        if ($so2 == 0) {
            $kq = "Không chia được cho 0";
        } else {
            $kq = $so1 / $so2;
        }
    } elseif (isset($_POST['mod'])) {
        if ($so2 == 0) {
            $kq = "Không chia được cho 0";
        } else {
            $kq = $so1 % $so2;
        }
    }
}
?>

<form method="post" action="">
    <h3>TÍNH TOÁN SỐ HỌC</h3>
    Số thứ 1: <input type="text" name="so1" value="<?php echo isset($_POST['so1']) ? $_POST['so1'] : ''; ?>"><br><br>
    Số thứ 2: <input type="text" name="so2" value="<?php echo isset($_POST['so2']) ? $_POST['so2'] : ''; ?>"><br><br>
    Kết quả: <input type="text" value="<?php echo $kq; ?>"><br><br>
    
    <input type="submit" name="cong" value="Cộng">
    <input type="submit" name="tru" value="Trừ">
    <input type="submit" name="nhan" value="Nhân">
    <input type="submit" name="chia" value="Chia">
    <input type="submit" name="mod" value="Mod">
</form>

</body>
</html>