<?php
$errors=[];

if($_SERVER["REQUEST_METHOD"]=="POST"){

$email=$_POST["email"];
$password=$_POST["password"];

if(isset($_COOKIE["email"]) && isset($_COOKIE["password"])){

if($email==$_COOKIE["email"] && $password==$_COOKIE["password"]){

header("Location: success.php");
exit();

}else{
$errors[]="Sai email hoặc mật khẩu";
}

}else{
$errors[]="Chưa đăng ký tài khoản";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="style.css">
<title>Login</title>
</head>

<body>

<div id="form-content">

<a href="login.php">
<h2 class="active">ĐĂNG NHẬP</h2>
</a>

<a href="register.php">
<h2>ĐĂNG KÝ</h2>
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

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Mật khẩu">

<input type="submit" value="ĐĂNG NHẬP">

</form>

<div id="form-footer">
<a href="#">Quên mật khẩu?</a>
</div>

</div>

</body>
</html>
