<?php
// Gọi file kết nối cơ sở dữ liệu từ Bài 1
include("Connection.php");

// Kiểm tra xem nút submit đã được nhấn hay chưa
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ form HTML
    $makh = $_POST['makh'];
    $tenkh = $_POST['tenkh'];
    $namsinh = $_POST['namsinh'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];

    // Viết câu lệnh SQL cập nhật dữ liệu theo mã khách hàng (makh)
    $sql = "UPDATE khachhang 
            SET tenkh = '$tenkh', namsinh = '$namsinh', dienthoai = '$dienthoai', diachi = '$diachi' 
            WHERE makh = '$makh'";

    // Thực thi câu lệnh truy vấn và thông báo kết quả
    if (mysqli_query($conn, $sql)) {
        echo "Cập nhật khách hàng thành công!", "<br>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Truy vấn hiển thị danh sách bảng khachhang sau khi thao tác
$sql = "SELECT * FROM khachhang";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['makh'] . " - ";
            echo $row['tenkh'] . " - ";
            echo $row['namsinh'] . " - ";
            echo $row['dienthoai'] . " - ";
            echo $row['diachi'] . "<br>";
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