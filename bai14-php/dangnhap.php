<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            width: 400px;
            height: 350px;
            margin: 10vh auto;
            border: 1px solid black;
            border-radius: 10px;
            background-color: #f2f2f2;
            text-align: center;
        }
        input{
            width: 100%;
            height: 30px;
            border-radius: 5px;
        }
        form{
            width: 80%;
            margin: auto;
        }
        button{
            width: 75%;
            height: 40px;
            border-radius: 5px;
            background-color: #151414;
            color: white;
            border: none;
            margin-top: 20px;
        }
        </style>
</head>
<body>
    <div class="khoi">
    <h1>Đăng nhập</h1>

        <div style="width: 80%; text-align:center; margin: auto" class="">
            <form action="dangnhap.php" method="POST">
                <div>
                    <p><b>Tên đăng nhập</b></p>
                    <input type="text" name="tendangnhap" placeholder="Nhập tên đăng nhập">
                </div>
                <div>
                    <p></p><b>Mật khẩu</b></p>
                    <input type="password" name="password" placeholder="Nhập mật khẩu">
                </div>
                <div>
                    <button type="submit">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
    <?php
    include 'connect.php';//dùng để kết nối 2 file lại với nhau
    session_start();
      if (isset($_POST['tendangnhap']) && isset($_POST['password'])) {
        $tendangnhap = $_POST['tendangnhap'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `nguoi_dung` WHERE ten_dang_nhap = '$tendangnhap' AND mat_khau = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            
            $_SESSION["dangnhap"] = "thanhcong";
            header("Location: index.php");
        } else {
            echo "<p style='color:red; text-align:center'>Đăng nhập thất bại</p>";
        }
      }
       ?>
</body>
</html>