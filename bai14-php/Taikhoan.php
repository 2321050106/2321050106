<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Tài khoản</h1>
    <a href="index.php?page_layout=themtaikhoan">Thêm tài khoản</a><br><br>
    <?php
    include("connect.php");
        $sql = "SELECT * FROM nguoi_dung";
        $result = mysqli_query($conn, $sql);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên đăng nhập</th>
            <th>email</th>
            <th>Ngày sinh</th>
            <th>Số điện thoại</th>
            <th>Giới tính</th>
            <th>Chức năng</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['ten_dang_nhap']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['ngay_sinh']."</td>";
                echo "<td>".$row['so_dien_thoai']."</td>";
                $gioi_tinh = ($row['gioi_tinh'] == 1) ? 'Nam' : 'Nữ';
                echo "<td>".htmlspecialchars($gioi_tinh)."</td>";
                echo "<td><a href='index.php?page_layout=capnhattk&id=".$row['id']."'>Cập nhật</a> |
                    <a href='index.php?page_layout=xoatk&id=".$row['id']."'>Xóa</a></td>";
                echo "</tr>";
            }
        ?>
</body>
</html>