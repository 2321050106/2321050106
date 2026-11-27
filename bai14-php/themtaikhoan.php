<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: auto;
            max-width: 600px;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 60%;
            height: 70%;
            margin: 0 auto;
            border: 1px solid black;
            padding: 15px;
            border-radius: 10px;
        }
        input, select {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Thêm tài khoản</h1>
    <form action="index.php?page_layout=themtaikhoan" method="POST">
        <label for="ten_dang_nhap">Tên đăng nhập:</label>
        <input type="text" id="ten_dang_nhap" name="ten_dang_nhap" required><br><br>

        <label for="mat_khau">Mật khẩu:</label>
        <input type="password" id="mat_khau" name="mat_khau" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="ngay_sinh">Ngày sinh:</label>
        <input type="date" id="ngay_sinh" name="ngay_sinh" required><br><br>

        <label for="so_dien_thoai">Số điện thoại:</label>
        <input type="text" id="so_dien_thoai" name="so_dien_thoai" required><br><br>

        <label for="gioi_tinh">Giới tính:</label>
        <select id="gioi_tinh" name="gioi_tinh" required>
            <option value="">Chọn giới tính</option>
            <option value="1">Nam</option>
            <option value="0">Nữ</option>
            <option value="2">Khác</option>
        </select><br><br>

        <input type="submit" value="Thêm tài khoản">
    </form>
    <?php
    if(isset($_POST['ten_dang_nhap']) && 
           isset($_POST['mat_khau']) && 
           isset($_POST['email']) && 
           isset($_POST['ngay_sinh']) &&
           isset($_POST['so_dien_thoai']) &&
           isset($_POST['gioi_tinh']))
        {
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $mat_khau = $_POST['mat_khau'];
            $email = $_POST['email'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $gioi_tinh = $_POST['gioi_tinh'];
            if(!empty($ten_dang_nhap) && 
                !empty($mat_khau) && 
                !empty($email) && 
                !empty($ngay_sinh) &&
                !empty($so_dien_thoai) &&
                !empty($gioi_tinh)){
                //người dùng nhập đủ thông tin
            }
            $sql = "INSERT INTO nguoi_dung (ten_dang_nhap, mat_khau, email, ngay_sinh, so_dien_thoai, gioi_tinh) VALUES ('$ten_dang_nhap', '$mat_khau', '$email', '$ngay_sinh', '$so_dien_thoai', '$gioi_tinh')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: index.php?page_layout=Taikhoan");
        } else {
            echo "thêm người dùng thất bại";
        }
        }
        
    
    ?>
</body>
</html>

