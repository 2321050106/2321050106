<?php
    include('connect.php');

    // Kiểm tra id tồn tại
    if (!isset($_GET['id'])) {
        echo "<script>
            alert('Không tìm thấy ID để xóa.');
            window.location.href = 'index.php?page_layout=nguoidung';
        </script>";
        exit();
    }

    $id = intval($_GET['id']); // chống SQL Injection

    // 1. Kiểm tra xem người dùng có đang được bảng phim tham chiếu không
    $sql_check = "SELECT * FROM phim WHERE dao_dien_id = $id";
    $result = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>
            alert('Không thể xóa! Người dùng này đang được sử dụng trong bảng phim (đạo diễn).');
            window.location.href = 'index.php?page_layout=nguoidung';
        </script>";
        exit();
    }

    // 2. Nếu không có ràng buộc → xóa người dùng
    $sql_delete = "DELETE FROM nguoi_dung WHERE id = $id";

    if (mysqli_query($conn, $sql_delete)) {
        echo "<script>
            alert('Xóa người dùng thành công!');
            window.location.href = 'index.php?page_layout=nguoidung';
        </script>";
    } else {
        echo "<script>
            alert('Lỗi khi xóa người dùng!');
            window.location.href = 'index.php?page_layout=nguoidung';
        </script>";
    }
?>