<?php
include 'connect.php';
    if (!empty($_POST['ten_phim']) &&
    !empty($_POST['dao_dien']) &&
    !empty($_POST['nam_phat_hanh']) &&
    !empty($_POST['poster']) &&
    !empty($_POST['quoc_gia']) &&
    !empty($_POST['so_tap']) &&
    !empty($_POST['trailer']) &&
    !empty($POST['mo_ta']))
    {
    $tenphim = $_POST['ten_phim'];
    $daodien = $_POST['dao_dien'];
    $namphathanh = $_POST['nam_phat_hanh'];
    $poster = $_POST['poster'];
    $quocgia = $_POST['quoc_gia'];
    $sotap = $_POST['so_tap'];
    $trailer = $_POST['trailer'];
    $mota = $_POST['mo_ta'];
    INSERT INTO `phim`(`id`, `ten_phim`, `dao_dien_id`, `nam_phat_hanh`, `poster`, `quoc_gia_id`, `so_tap`, `trailer`, `mo_ta`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')
    echo $sql;
    mysqli_query($conn, $sql);
    header('location: index.php?page_layout=phim');
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            margin: 0;
            padding: 0;
        }
        h1{
            text-align: center;
        }
        form {
            width: 400px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <h1>thêm người dùng</h1>
    <form action="index.php?page_layout=themphim" method ="post">
        
        <div>
            <p style= "font-weight: bold;">Đăng nhập</p>
            <input type="text" name ="ten_dang_nhap" placeholder="Tên đăng nhập" >
        </div>
        <div>
            <p style= "font-weight: bold;">mật khẩu</p>
            <input type="password" name ="mat_khau" placeholder="Mật khẩu" >
        </div>
        <div>
            <p style= "font-weight: bold;">Họ tên</p>
            <input type="text" name ="ho_ten" placeholder="Họ tên" >
        </div>
        <div>
            <p style= "font-weight: bold;">Email</p>
            <input type="email" name ="email" placeholder="Email" >
        </div>
        <div>
            <p style= "font-weight: bold;">Số điện thoại</p>
            <input type="text" name ="sdt" placeholder="số điện thoại" >
        </div>
        <div>
            <p style= "font-weight: bold;">Ngày sinh</p>
            <input type="date" name ="ngay_sinh" placeholder="ngày sinh" >
        </div>
        <div style= "margin-bottom: 15px;">
            <p style:= "font-weight: bold;">vai trò</p>
            <select name="vaitro">
                <option value="1">admin</option>
                <option value="2">đạo diễn</option>
                <option value="3">diễn viên</option>
                <option value="4">người dùng</option>
            </select>
        </div>
        <div style= "text-align: center; margin-top:20px; ">
            <input style:="width: 30px;" type="submit" value ="Thêm mới">
        </div>
</form>

</body>
</html>