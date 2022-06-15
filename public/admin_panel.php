<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="/public/css/adminpanel.css">
  <script>sessionStorage.setItem("userKey", "<? echo $_SESSION['key']; ?>")</script>
</head>

<body>
  <div id="main">
    <h1>Admin Panel</h1>
    <table class="services-panel">
      <tr>
        <th>Наименование услуги</th>
        <th>Путь к фото</th>
        <th>Ссылка</th>
        <th>Описание</th>
      </tr>
      <tr v-for="service in services" class="services-item">
        <td class="services-id">{{service.id}}</td>
        <td class="services-title"><textarea v-model="service.title"></textarea></td>
        <td class="services-img"><textarea v-model="service.img"></textarea></td>
        <td class="services-href"><textarea v-model="service.href"></textarea></td>
        <td class="services-decriprion"><textarea cols="40" v-model="service.description"></textarea></td>
      </tr>
    </table>
    <div class="services-btn">
      <button class="btn-item" @click="addNewService">Добавить услугу</button>
      <button class="btn-item" @click="deleteService">Удалить услугу</button>
      <button class="btn-item" @click="saveChanges">Сохранить изменения</button>
    </div>
  </div>
  <script src="/public/js/vue.js"></script>
  <script src="/public/js/main.js"></script>
</body>

</html>