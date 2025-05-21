<?php

$defaultemail="admin@gmail.com";
$defaultpassworld="admin";

if ($_SERVER['REQUEST_METHOD']=== "POST") {
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);

    if($email === $defaultemail && $password === $defaultpassworld) {
        echo "<meta http-equiv='refresh' content='1;url=dashboard.php'>";
    }else {
        echo "email atau password salah!";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    }
}else {
    echo "404 - Akses ditolak";
}