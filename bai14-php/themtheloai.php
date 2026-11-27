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
    <h1 style="text-align: center;">Thêm thể loại</h1>
    <form action="index.php?page_layout=themtheloai" method="POST">
        <label for="ten_the_loai">Tên thể loại:</label>
        <input type="text" id="ten_the_loai" name="ten_the_loai" required><br><br>
        <input type="submit" value="Thêm thể loại">
    </form>
    <?php
    if(isset($_POST['ten_the_loai']))
        {
            $ten_the_loai = $_POST['ten_the_loai'];
            if(!empty($ten_the_loai)){
                //người dùng nhập đủ thông tin
            }
            $sql = "INSERT INTO the_loai (ten_the_loai) VALUES ('$ten_the_loai')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: index.php?page_layout=theloai");
        } else {
            echo "thêm thể loại thất bại";
        }
        }
        
    
    ?>
</body>
</html>

