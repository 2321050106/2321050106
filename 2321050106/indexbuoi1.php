<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //1. in ra màn hình
    echo "Hello world! <br>";

    echo "Hi";

    //2. biến
    // cú pháp: $ +tên biến = giá trị của biến
    $ten = "Phạm Đức";
    $tuoi = 20;

    echo $ten . " " .$tuoi . "tuổi <br>";

    //3. hằng

    define("soPi", "3,14");
    echo soPi . "<br>";

    //4. phân biệt ' ' và " "
    echo '$ten' . "<br>";
    echo "$ten" . "<br>";

    //5.chuỗi
    #5.1 kiểm tra độ dài của chuỗi
    echo strlen($ten) . "<br>";
    #5.2 đếm số từ
    str_word_count($ten);
    #5.3 tìm kiếm ký tự trong chuỗi
    echo strpos($ten, "Đ");
    #5.4 thay thế kí tự trong chuỗi
    echo str_replace("Đức", "Thái", $ten);

    //6.toán tử
    $sothunhat=10;
    $sothuhai=5;
    #+ - * / 
    echo $sothunhat + $sothuhai;
    # += -= *= /= %=
    echo $sothunhat %= $sothuhai;
    #so sánh == != > < >= <= ===
    echo $sothunhat < $sothuhai;

    //7. câu điều kiện
    // if("điều kiện"){
        // logic
        //}
    //else{
        // logic
    //}

    //kiểm tra tổng của số thứ nhất và số thứ hai (nếu <15 thì in ra nhỏ hơn 15
    //(nếu = 15 thì in ra bằng 15))
    //(nếu >15 thì in ra lớn hơn 15)

    if ($sothunhat + $sothuhai <15){
        echo "nhỏ hơn 15";
    }
    else if ($sothunhat + $sothuhai ==15){
        echo "bằng 15";
    } else { 
        echo "lớn hơn 15";
    }

    //8.switch case
    $color = "red";
    switch ($color){
        case "red";
            echo "is red";
            break;
        case "blue";
            echo "is blue";
            break;
        default:
            echo "no color";
            break;
    }

    //9. vòng lặp for
    for ($i=0; $i <50; $i++) {
        echo $i . "<br>";
    }

    //10. mảng 
    $mang = ["đức", "thái", "trường", "tuấn"];
    //đếm phần tử trong mảng
    echo count($mang);
    //lấy ra phần tử trong mảng
    echo $mang[1];
    print_r($mang);
    $mang[2] = "thái đần";
    print_r($mang);
    #xóa
    unset($mang[1]);
    print_r($mang);
    ?>
</body>
</html>