<?php
//1.session 
session_start();//khởi tạo session
$_SESSION['Name'] = "user"; //gán giá trị cho session

echo "Session Name " . $_SESSION['Name'];

//2.cookie
$cookie_name = "user";
$cookie_value = "Pham Duc";
setcookie($cookie_name, $cookie_value, time() +86400, "/"); //thời gian sống của cookie là 1 ngày
if (isset($_COOKIE[$cookie_name])) {
    echo "<br>Cookie đã tồn tại";
} else {
    echo "<br>cookie chưa tồn tại";
}
?>