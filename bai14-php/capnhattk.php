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
     <?php
    $id= $_GET['id'];
    $sql="select * from `nguoi_dung` where id ='$id'";
    $result=mysqli_query($conn,$sql);
    $nguoidung=mysqli_fetch_assoc($result);
    ?>
    <h1>Cập nhật tài khoản</h1>
    <form class="khoi" action="index.php?page_layout=capnhattk&id=<?php echo $id;?>" method="POST">
        <div>
            <p><b>Tên đăng nhập</b></p>   
            <input type="text" name="ten_dang_nhap" value="<?php echo $nguoidung['ten_dang_nhap'] ?>" id="" placeholder="Tên đăng nhập">
        </div>
        <div>
            <p><b>Email</b></p>   
            <input type="email" name="email" value="<?php echo $nguoidung['email'] ?>" id="" placeholder="email">
        </div>
        <div>
            <p><b>Mật khẩu</b></p>   
            <input type="password" name="mat_khau" value="<?php echo $nguoidung['mat_khau'] ?>" id="" placeholder="Mật khẩu">
        </div>
        <div>
            <p><b>Ngày sinh</b></p>   
            <input type="date" name="ngay_sinh" value="<?php echo $nguoidung['ngay_sinh'] ?>" id="" placeholder="Ngày sinh">
        </div>
        <div>
            <p><b>Số điện thoại</b></p>   
            <input type="text" name="so_dien_thoai" value="<?php echo $nguoidung['so_dien_thoai'] ?>" id="" placeholder="Số điện thoại">
        </div>
        <div>
            <p><b>Giới tính</b></p>   
            <input type="radio" name="gioi_tinh" id="" value="1" <?php echo $nguoidung['gioi_tinh']?"checked":"" ?> >Nam
            <input type="radio" name="gioi_tinh" id="" value="0" <?php echo $nguoidung['gioi_tinh']?"checked":"" ?> >Nữ
        </div>
        <div>
            <button>Cập nhật</button>
        </div>
        
    </form>
    <?php
    if(isset($_POST['ten_dang_nhap'])&&
        isset($_POST['email'])&&
        isset($_POST['matkhau'])&&
        isset($_POST['ngay_sinh'])&&
        isset($_POST['so_dien_thoai'])&&
        isset($_POST['gioi_tinh'])
        ){
        
        $tenDangNhap=$_POST['ten_dang_nhap'];
        $email=$_POST['email'];
        $matKhau=$_POST['matkhau'];
        $ngaySinh=$_POST['ngay_sinh'];
        $soDienThoai=$_POST['so_dien_thoai'];
        $gioiTinh=$_POST['gioi_tinh'];
        if(!empty($ten_dang_nhap)
            && !empty($email)
            && !empty($matkhau)
            && !empty($ngay_sinh)
            && !empty($so_dien_thoai)
            && !empty($gioi_tinh)
        ){
            $sql="UPDATE `nguoi_dung` SET `ten_dang_nhap`='$ten_dang_nhap',
            `mat_khau`='$matkhau',
            `email`='$email',
            `ngay_sinh`='$ngay_sinh',
            `so_dien_thoai`='$so_dien_thoai',
            `gioi_tinh`='$gioi_tinh' WHERE id='$id'";
            $result=mysqli_query($conn,$sql);

            if($result){
                header("Location: index.php?page_layout=Taikhoan");
            }else{
                echo" Thêm thất bại";
            }
        }else{
            echo "Vui lòng nhập đủ thông tin";
        }
    }
    ?>
</body>
</html>

