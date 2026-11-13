<?php
// Gọi file kết nối cơ sở dữ liệu từ Bài 1
include("Connection.php");

// Kiểm tra xem nút submit đã được nhấn hay chưa
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ form HTML
    $mahd = $_POST['mahd'];
    $makh = $_POST['makh'];
    $mahang = $_POST['mahang'];
    $soluong = $_POST['soluong'];

    // Lấy giá của mặt hàng để tính thành tiền tự động
    $sql_gia = "SELECT gia FROM hanghoa WHERE mahang = '$mahang'";
    $res_gia = mysqli_query($conn, $sql_gia);
    $row_gia = mysqli_fetch_assoc($res_gia);
    $gia = $row_gia['gia'] ?? 0;
    $thanhtien = $soluong * $gia;

    // Viết câu lệnh SQL chèn dữ liệu khớp với các cột trong bảng hoadon
    $sql = "INSERT INTO hoadon (mahd, makh, mahang, soluong, thanhtien) 
            VALUES ('$mahd', '$makh', '$mahang', '$soluong', '$thanhtien')";

    // Thực thi câu lệnh truy vấn và thông báo kết quả
    if (mysqli_query($conn, $sql)) {
        echo "Thêm hóa đơn thành công!", "<br>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Truy vấn hiển thị danh sách bảng hoadon sau khi thao tác
$sql = "SELECT * FROM hoadon";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['mahd'] . " - ";
            echo $row['makh'] . " - ";
            echo $row['mahang'] . " - ";
            echo $row['soluong'] . " - ";
            echo $row['thanhtien'] . "<br>";
        }
        // Giải phóng bộ nhớ của biến
        mysqli_free_result($result);
    } else {
        echo "No Records";
    }
} else {
    echo "Truy vấn thất bại: " . mysqli_error($conn);
}

// 3. Đóng kết nối
mysqli_close($conn);
?>