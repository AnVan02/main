<?php
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $result = dbconnect();
    $flag = 0;

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($row["SoSerial"] === $search) {
                $flag = 1;

                // Định dạng kết quả tìm kiếm với màu sắc và kiểu dáng
                echo '<div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; border-radius: 5px; background-color: #F9F9F9;">';
                echo '<p><strong style="color:dodgerblue;">Số Serial:</strong> <span style="font-weight: bold; color: #FF0000;">' . htmlspecialchars($row["SoSerial"]) . '</span></p>';
                echo '<p><strong style="color:dodgerblue;">Mã Hàng:</strong> <span style=" color: #000000;">' . htmlspecialchars($row["MaHang"]) . '</span></p>';
                echo '<p><strong style="color:dodgerblue;">Tên sản phẩm:</strong> <span style=" color: #000000;">' . htmlspecialchars($row["TenHang"]) . '</span></p>';
                echo '<p><strong style="color:dodgerblue;">Ngày Xuất:</strong> <span style=" color: #000000;">' . htmlspecialchars($row["NgayXuat"]) . '</span></p>';
                echo '<p><strong style="color:dodgerblue;">Thời hạn bảo hành:</strong> <span style=" color: #000000;">' . htmlspecialchars($row["ThoiHanBH"]) . '</span></p>';
                echo '</div>';
            }
        }
    }
    if ($flag == 0) {
        echo '<p style="color: #FF0000; font-weight: bold;">Không tìm thấy <span style="color: #0000FF;">' . htmlspecialchars($search) . '</span> trong cơ sở dữ liệu</p>';
    }
}
?>
