<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
        body {
  margin: 0;
  padding-top: 70px;
}
        header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 70px;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
    background-color: #524f4f;
}
header ul {
  display: flex;
  list-style: none;
  height: 100%;
  align-items: center;
  gap: 15px;
  margin-left: 10px;
}
header ul li a {
  text-decoration: none;
  font-size: 18px;
  font-weight: bold;
  border-radius: 5px;
  color: white;
}
header ul li a:hover {
  background-color: #e50914;}
        </style>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION["dangnhap"])) {
    header("Location: dangnhap.php");
    }
    include 'connect.php';//dùng để kết nối 2 file lại với nhau
    ?>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
                <li><a href="index.php?page_layout=Taikhoan">Tài khoản</a></li>
                <li><a href="index.php?page_layout=theloai">Thể loại</a></li>
                <li><a href="index.php?page_layout=phim">Phim</a></li>
            </ul>
        </nav>
    </header>
    <?php
        $page_layout = isset($_GET['page_layout']) ? $_GET['page_layout'] : 'trangchu';
        switch ($page_layout) {
            case 'Taikhoan':
                include 'Taikhoan.php';
                break;
            case 'themtaikhoan':
                include 'themtaikhoan.php';
                break;
            case 'theloai':
                include 'theloai.php';
                break;
            case 'phim':
                include 'phim.php';
                break;
            case 'capnhattk':
                include 'capnhattk.php';
                break;
            case 'xoatk':
                include 'xoatk.php';
                break;
            case 'themtheloai':
                include 'themtheloai.php';
                break;
            case 'xoatheloai':
                include 'xoatheloai.php';
                break;
            case 'themphim':
                include 'themphim.php';
                break;
            case 'xoaphim':
                include 'xoaphim.php';
                break;
            case 'capnhatphim':
                include 'capnhatphim.php';
                break;
            case 'trangchu':
            default:
                include 'trangchu.php';
                break;
        }
        ?>
</body>
</html>