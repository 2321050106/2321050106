<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }

        .xoa {
            background-color: red;
            padding: 0 10px;
            color: #fff;
        }

        td {
            padding: 10px;
        }

        .chuc-nang {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .sua {
            color: black;

        }

        .btn {
            border-radius: 3px;
            border: 1px solid gray;
            padding: 5px;
        }

        .them {
            color: black;
            padding: 10px;
        }

    </style>
</head>
<body>
    <div>
        <div style=" display: flex; justify-content: space-between; align-items: center;">
            <h1>Quốc gia</h1>
            <div>
                <a class="btn them" href="index.php?page_layout=themquocgia">Thêm quốc gia</a>
            </div>
        </div>
        <table border=1>
            <tr>
                <th>ID</th>
                <th>Tên quốc gia</th>
            </tr>
            <?php
            include 'connect.php';
            $sql = "select * from quoc_gia";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["ten_quoc_gia"] ?></td>
                    <td class="chucnang">
                        <a class="btnsua" href="capnhatquocgia.php?id=<?php echo $row['id']?>">Cập nhật</a>
                        <a class="btnsua" href="xoaquocgia.php?id=<?php echo $row['id']?>">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
        </table>
    </div>
</body>
</html>