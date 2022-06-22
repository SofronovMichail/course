<?
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/public/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="/public/css/login.css">
  <title>Шумоизоляция автомобилей</title>
</head>

<body>
  <div id="main">
    <div class="container">
      <div class="header">
        <div class="header-top">
          <div class="top">
            <div class="icons">
              <a href="https://www.instagram.com/" target="_blank"><img src="/public/img/instagram.svg" alt="instagram"
                  class="icon"></a>
              <a href="https://vk.com/" target="_blank"><img src="/public/img/vk.svg" alt="vk" class="icon"></a>
            </div>

            <h1 class="top-title_text">DETAIL52</h1>

            <div class="top-title-time">ЧАСЫ РАБОТЫ
              <p>ПН-ПТ: с 10:00 до 19:00</p>
              <p>СБ: с 10:00 до 13:00</p>
              <p>ВС: выходной</p>
            </div>
          </div>
          <div class="header-menu">
            <a v-for="item in menu" class="menu_item" :href="item.menuHref">{{item.menuTitle}}</a>
          </div>
        </div>
        <div class="header-paralax paralax-polishing">
          <div class="paralax-black">
            <h2 class="paralax-black_text">ШУМОИЗОЛЯЦИЯ АВТОМОБИЛЕЙ</h2>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="content-about">
          <h2 class="about-title">
            <a id="about"></a>
            ДЕТЕЙЛИНГ ЦЕНТР <span class="title-text">DETAIL52</span> ПРЕДОСТАВЛЯЕТ УСЛУГИ ПО
            ШУМОИЗОЛЯЦИИ АВТОМОБИЛЕЙ В НИЖНЕМ НОВГОРОДЕ
          </h2>
          <div class="about-text">
            Одним из важных условий комфортной езды, является тишина внутри салона автомобиля. Представьте на секунду,
            Вы едите домой после тяжёлого рабочего дня и всё, что Вам хочется - это несколько минут покоя, чтобы
            расслабиться и перезагрузить свои мозги. Вы только что включили любимый трек или поймали волны той самой,
            любимой Вами, радиостанции и Ваше воображение уже рисует картинку берега лазурного моря, где вокруг Вас
            красуются загорелые мулатки и вот одна из них уже несёт Вам коктейль. Но вдруг резкий звуковой сигнал и
            свист покрышек проносящегося мимо спорткара рушит идиллию и возвращает Вас к жестокой реальности серых и
            унылых Российских дорог. Да как он только посмел? И почему столь пронзительный звук так отчётливо прозвенел
            в салоне моей новенькой иномарки? - Спросите Вы!? К сожалению, даже владельцы автомобилей премиум класса не
            застрахованы от надоедливого постороннего шума, который проникает в салон при потере свойств заводской
            шумоизоляции. Поэтому, детейлинг центр DETAIL52 поможет Вам обновить шумоизоляцию Вашего автомобиля или
            сделать новую, более качественную шумоизоляцию даже в самых труднодоступных местах! Хотя, полностью
            устранить шум в автомобиле невозможно. Но даже самая обыкновенная шумоизоляции салона снизит проникновение
            посторонних шумов в салон Вашего автомобиля и поможет придать ему антикоррозийные свойства. Вам не нужно
            вникать в сложные технологические аспекты шумоизоляции, специалисты детейлинг центра DETAIL52 сделают это за
            Вас и помогут Вам уберечь нервы от надоедливого шума!
          </div>
        </div>
        <div class="tinting-works">
          <div class="services-container">
            <div v-for="item in tintWorks" class="tint-item">
              <img :src="item.img" alt="tinting" class="tint-img">
              <div class="item-text">
                <h3>{{item.description}}</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="prices-tinting">
          <h2 class="about-tint-title">ЦЕНА НА ШУМОИЗОЛЯЦИЮ АВТОМОБИЛЕЙ</h2>
          <p class="prices-tinting_about">Чтобы узнать стоимость и записаться на шумоизоляцию автомобиля виниловой
            плёнкой в детейлинг центре DETAIL52, пожалуйста, заполните форму ниже и наш менеджер свяжется с вами!</p>
        </div>
      </div>
      <div class="footer">
        <div class="footer-menu">
          <a v-for="item in footerMenu" class="footer-menu_item" :href="item.menuHref">{{item.menuTitle}}</a>
        </div>
        <div class="footer-text">© 2022 Детейлинг центр DETAIL52 </div>
      </div>
    </div>
    <?
if ($_SESSION['error_messege']) {
    echo '<p class="messege_error"> ' . $_SESSION['error_messege'] . ' </p>';
    unset($_SESSION['error_messege']);
}
if ($_SESSION['messege']) {
    echo '<p class="messege_error"> ' . $_SESSION['messege'] . ' </p>';
    unset($_SESSION['messege']);
}
?>
    <a class="back_to_top" title="Наверх">
      <img src="/public/img/up-arrow.svg" alt="up-arrow" class="up-arrow">
    </a>
  </div>
  <script src="/public/js/vue.js"></script>
  <script src="/public/js/tintings.js"></script>
  <script src="/public/js/anim.js"></script>
  <script src="/public/js/button-up.js"></script>
  <script src="/public/js/modal.js"></script>
</body>

</html>