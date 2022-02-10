<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $check = $_REQUEST["confirm-password"];
    $error = [];
    if (empty($email)) {
        $error["email"] = " Khong duoc de trong email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error["email"] = " Email khong dung dinh dang";
    }
    if (empty($password)) {
        $error["password"] = "Khong duoc de trong password";
    } elseif (!preg_match("^[/_a-z0-9]{6,}$/",$password)){
        $error["password"] = " Sai dinh dang password";
    }
    if(empty($check)){
        $error["confirm-password"] = " Khong duoc de trong phan nay";
    } elseif ($check != $password){
        $error["confirm-password"] = " Xac nhan mat khau khong dung" ;
    }
    if (empty($error)){
        header("location:show.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p> Email </p>
    <input type="text" name="email" placeholder="Nhap email vao day">
    <p style="color: red"><?php echo $error["email"] ?? "" ?></p>
    <p>Password</p>
    <input type="password" name="password" placeholder="Nhap mat khau vao day">
    <p style="color: red"><?php echo $error["password"] ?? "" ?></p>
    <p>Confirm Password</p>
    <input type="password" name="confirm-password" placeholder="Xac nhan mat khau">
    <p style="color: red"><?php echo $error["confirm-password"] ?? "" ?></p>
    <p>
        <button>Check</button>
    </p>
</form>
</body>
</html>