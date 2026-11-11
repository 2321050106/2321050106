<?php
echo "Hello world!";
//biến: $tên biến = giá trị;
$hoten = "Pham Duc";
echo "<br>Họ tên: $hoten <br>";
$tuoi = 21;
//để nối chuỗi trong php dùng dấu chấm
echo   $tuoi . " " . $hoten;

//strlen: đếm số ký tự trong chuỗi
echo "<br>Độ dài chuỗi: " . strlen($hoten);

//tìm kiếm kí tự trong chuỗi: strpos
echo "<br>Vị trí của ký tự 'D' trong chuỗi: " . strpos($hoten, "D");

//thay thế kí tự trong chuỗi: str_replace
echo "<br>Thay thế 'Duc' bằng 'Đức': " . str_replace("Duc", "Đức", $hoten);

$soThu1 = 10;
$soThu2 = 20;
// phép cộng
echo "<br>Phép cộng: " . ($soThu1 + $soThu2);
// phép trừ
echo "<br>Phép trừ: " . ($soThu1 - $soThu2);
//phép nhân
echo "<br>Phép nhân: " . ($soThu1 * $soThu2);
//phép chia
echo "<br>Phép chia: " . ($soThu1 / $soThu2);

//toán tử gán: =, +=, -=, *=, /=
$soThu1 += $soThu2; // $soThu1 = $soThu1 + $soThu2
echo "<br>" . $soThu1 ;

//toán tử so sánh: ==, !=, >, <, >=, <=
echo "<br>" . ($soThu1 > $soThu2); //true = 1, false = 0

//câu đk: if, else, elseif
// if ("điều kiện") {
//logic
//}
//elseif ("điều kiện") {
//logic
//} else {
//logic
//} 
// kiểm tra tổng của số thứ 1 và số thứ 2, nếu <15 thì in ra nhỏ hơn 15, nếu =15 thì in ra bằng 15, nếu >15 thì in ra lớn hơn 15
if ($soThu1 + $soThu2 < 15) {
    echo "<br>Tổng nhỏ hơn 15";
} elseif ($soThu1 + $soThu2 == 15) {
    echo "<br>Tổng bằng 15";
} else {
    echo "<br>Tổng lớn hơn 15";
}
 //swich case
    echo "<br>";
    $color = "red";
    switch ($color) {
        case "red":
            echo "Màu đỏ";
            break;
        case "blue":
            echo "Màu xanh dương";
            break;
        case "green":
            echo "Màu xanh lá cây";
            break;
        default:
            echo "Không có màu này";
    }

    //Vòng lặp for
    echo "<br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Anh xin lỗi anh sai rồi <br>";
    };

    //Mảng
    echo "<br>";
    $mang = ["Thái", "Đức", "Linh"];
    echo count ($mang) . "<br>";
    echo $mang[2]."<br>";

    $mang[] = "Trường";
    print_r($mang);
?>
