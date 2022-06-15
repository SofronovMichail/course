<?
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$req = $conn->query("SELECT `password` FROM users WHERE `login` = '$login' LIMIT 1");
$data = mysqli_fetch_assoc($req);
$rezult = password_verify($password, $data['password']);
if ($rezult == false) {
    $_SESSION['error_messege'] = "Неверный логин или пароль!";
    header('Location: ../');
}
else {
    $_SESSION['messege'] = 'Вход в ' . $login . ' выполнен!';
    header('Location: ../');
}
?>