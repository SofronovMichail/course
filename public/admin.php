<?
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin panel</title>
  <link rel="stylesheet" href="/public/css/admin.css">
</head>

<body>
  <div class="form-admin">
    <form action="/public/auth_admin.php" method="POST" type="auth">
      <!-- Вход в админ панель -->
      <div class="form-admin-item">
        <label class="form-admin_text">LOGIN</label>
        <input class="form-admin_input" type="text" name="login" placeholder="" required>
      </div>
      <div class="form-admin-item">
        <label class="form-admin_text">PASSWORD</label>
        <input class="form-admin_input" type="password" name="password" placeholder="" required>
      </div>
      <div class="form-admin-item">
        <button type="submit" class="btn-admin-success">Sign In</button>
      </div>
    </form>
    <?
if ($_SESSION['error_messege']) {
    echo '<p class="messege_error"> ' . $_SESSION['error_messege'] . ' </p>';
    unset($_SESSION['error_messege']);
}
if ($_SESSION['messege']) {
    echo '<p class="messege"> ' . $_SESSION['messege'] . ' </p>';
    unset($_SESSION['messege']);
}
?>
  </div>
</body>

</html>