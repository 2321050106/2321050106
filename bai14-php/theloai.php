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
    <a href="index.php?page_layout=themtheloai">Thêm thể loại</a><br><br>
    <?php
    include("connect.php");
        $sql = "SELECT * FROM the_loai";
        $result = mysqli_query($conn, $sql);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên thể loại</th>
            <th>Chức năng</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['ten_the_loai']."</td>";
                echo "<td><a href='index.php?page_layout=capnhattl&id=".$row['id']."'>Cập nhật</a> |
                    <a href='index.php?page_layout=xoatheloai&id=".$row['id']."'>Xóa</a></td>";
                echo "</tr>";
            }
        ?>
</body>
</html>