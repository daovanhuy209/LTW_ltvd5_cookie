<?php
$errors=[];
$username="";
$email="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$repeat=$_POST["repeat-password"];

if(empty($username)){
$errors[]="Vui lòng nhập họ tên";
}

if(empty($email)){
$errors[]="Vui lòng nhập email";
}

if(empty($password)){
$errors[]="Vui lòng nhập mật khẩu";
}

if($password!=$repeat){
$errors[]="Mật khẩu xác nhận không khớp";
}

if(empty($errors)){

setcookie("username",$username,time()+3600);
setcookie("email",$email,time()+3600);
setcookie("password",$password,time()+3600);

header("Location: login.php");
exit();

}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="style.css">
<title>Register</title>
</head>

<body>

<div id="form-content">

<a href="login.php">
<h2>ĐĂNG NHẬP</h2>
</a>

<a href="register.php">
<h2 class="active">ĐĂNG KÝ</h2>
</a>

<img src="avatar.png" id="avatar">

<?php
if(!empty($errors)){
foreach($errors as $e){
echo "<p style='color:red'>$e</p>";
}
}
?>

<form method="post">

<input type="text" name="username" placeholder="Họ tên">

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Mật khẩu">

<input type="password" name="repeat-password" placeholder="Xác nhận mật khẩu">

<input type="submit" value="ĐĂNG KÝ">

</form>

<div id="form-footer">
<a href="#">Quên mật khẩu?</a>
</div>

</div>

</body>
</html>
