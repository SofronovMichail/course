<?
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];
$key = '';
$d = new DateTime();

$key = md5(md5($login . $password));
if ($_SESSION['key'] && $_SESSION['key'] == $key) {
    header('Location: ../public/admin_panel.php');
}

if ($type != 'GET_KEY') {
    $req = $conn->query("SELECT `password`, `role` FROM users WHERE `login` = '$login' LIMIT 1");
    if ($req) {
        $data = mysqli_fetch_assoc($req);
        if ($data['role'] == 'admin') {
            $rezult = password_verify($password, $data['password']);
            if ($rezult == false) {
                $_SESSION['error_messege'] = "Неверный пароль!";
                header('Location: /admin');
            }
            else {
                $_SESSION['messege'] = "Вход в " . $login . " выполнен!";
                $key = md5(md5($login . $password));
                $_SESSION['key'] = $key;
                header('Location: ../public/admin_panel.php');
            }
        }
        else {
            $_SESSION['error_messege'] = "Данный пользователь не имеет прав администратора!";
            header('Location: /admin');
        }

    }
    else {
        $_SESSION['error_messege'] = "Неверный логин!";
        header('Location: /admin');
    }
}


$type = $_POST["type"];

switch ($type) {
    case "GET_KEY":
        echo json_encode($key);
        break;
    default:
        break;
}
?>