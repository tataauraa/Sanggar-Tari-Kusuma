<?php
session_start();

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password =isset ($_POST['password']) ? $_POST['password'] : '';
$s_email = isset ($_SESSION['email']) ? $_SESSION['email'] : $email;
$s_password = isset($_SESSION['password']) ? $_SESSION['password'] : $password;

if ($email === $s_email && $password === $s_password)
{
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: index.php");
    exit();
}
else
{
    echo "<script> alert ('Login Gagal');</script>";
}
?>