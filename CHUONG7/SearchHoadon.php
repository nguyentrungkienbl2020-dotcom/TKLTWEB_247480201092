<?php
// Gọi file kết nối cơ sở dữ liệu từ Bài 1[cite: 2]
include("Connection.php");

// Kiểm tra xem nút submit đã được nhấn hay chưa
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ form HTML
    $makh = $_POST['makh'];

    // Viết câu lệnh SQL tìm kiếm hóa đơn theo mã khách hàng (makh)
    $sql = "SELECT * FROM hoadon WHERE makh = '$makh'";

    // Thực thi câu lệnh truy vấn
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<h3>Kết quả tìm kiếm cho mã khách hàng: $makh</h3>";
        
        // Kiểm tra xem có dòng dữ liệu nào không
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
            echo "No Records (Không tìm thấy hóa đơn nào của khách hàng này)";
        }
    } else {
        echo "Truy vấn thất bại: " . mysqli_error($conn);
    }
}

echo "<br><a href='SearchHoadon.html'>Quay lại trang tìm kiếm</a>";

// 3. Đóng kết nối
mysqli_close($conn);
?>