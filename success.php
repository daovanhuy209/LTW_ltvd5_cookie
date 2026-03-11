<?php
if(!isset($_COOKIE["username"])){
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Success</title>
</head>

<body style="text-align:center;margin-top:100px">

<h1>Đăng nhập thành công</h1>

<h2>Xin chào <?php echo $_COOKIE["username"]; ?></h2>

</body>
</html>
