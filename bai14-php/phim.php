<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim</title>

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
<h1>Phim</h1>
<a href="index.php?page_layout=themphim">Thêm phim</a>
<br><br>
<?php

$sql = "SELECT 
            p.id AS phim_id,
            p.ten_phim,
            p.quoc_gia,
            p.dao_dien_id,
            p.nam,
            p.do_tuoi,
            p.mo_ta,
            p.trailer,
            p.banner,
            dd.ho_ten,
            tl.ten_the_loai
        FROM phim p
        LEFT JOIN dao_dien dd
        ON p.dao_dien_id = dd.id
        LEFT JOIN phim_the_loai ptl
        ON p.id = ptl.phim_id
        LEFT JOIN the_loai tl
        ON ptl.the_loai_id = tl.id";

$result = mysqli_query($conn, $sql);

?>

<table>
    <tr>
        <th>ID</th>
        <th>Tên phim</th>
        <th>Thể loại</th>
        <th>Quốc gia</th>
        <th>Đạo diễn</th>
        <th>Năm</th>
        <th>Độ tuổi</th>
        <th>Mô tả</th>
        <th>Trailer</th>
        <th>Banner</th>
        <th>Chức năng</th>
    </tr>

    <?php
        while($row = mysqli_fetch_assoc($result))
        {
    ?>

    <tr>
        <td><?php echo $row['phim_id']; ?></td>

        <td><?php echo $row['ten_phim']; ?></td>

        <td>
            <?php echo $row['ten_the_loai']; ?>
        </td>

        <td><?php echo $row['quoc_gia']; ?></td>

        <td><?php echo $row['ho_ten']; ?></td>

        <td><?php echo $row['nam']; ?></td>

        <td><?php echo $row['do_tuoi']; ?></td>

        <td><?php echo $row['mo_ta']; ?></td>
        <td><?php echo $row['trailer']; ?></td>
        <td><?php echo $row['banner']; ?></td>

        <td>
            <a href="index.php?page_layout=capnhatphim&id=<?php echo $row['phim_id']; ?>">
                Cập nhật
            </a>

            |

            <a href="index.php?page_layout=xoaphim&id=<?php echo $row['phim_id']; ?>">
                Xóa
            </a>
        </td>
    </tr>

    <?php
        }
    ?>

</table>

</body>
</html>
