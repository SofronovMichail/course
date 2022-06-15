<?
session_start();

require_once 'connect.php';

$name = $_POST['name'];
$role = "user";
$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$phone = $_POST['tel'];
$email = $_POST['email'];

if ($password === $password_confirm) {
    $pass_hashed = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO users (`role`, `login`, `password`, `name`, `phone`, `email`)
    VALUES ('$role', '$login', '$pass_hashed', '$name', '$phone', '$email')");
    $_SESSION['messege'] = 'Регистрация завершена успешно!!!';
    header('Location: ../');
}
else {
    $_SESSION['error_messege'] = 'Пароли не совпадают!!!';
    header('Location: ../');
}
?>