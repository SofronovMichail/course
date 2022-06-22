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
            <h2 class="paralax-black_text">ОКЛЕИВАНИЕ ВИНИЛОВОЙ ПЛЕНКОЙ</h2>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="content-about">
          <h2 class="about-title">
            <a id="about"></a>
            ДЕТЕЙЛИНГ ЦЕНТР <span class="title-text">DETAIL52</span> ПРЕДОСТАВЛЯЕТ УСЛУГИ ПО
            ОКЛЕИВАНИЮ АВТОМОБИЛЯ ВИНИЛОВОЙ ПЛЕНКОЙ В НИЖНЕМ НОВГОРОДЕ
          </h2>
          <div class="about-text">
            Услуги по оклеиванию автомобиля виниловой плёнкой стали чрезвычайно популярными среди автолюбителей, которые
            хотят обновить внешний вид автомобиля, не прибегая к серьезным покрасочным работам. Одно из главных
            преимуществ оклеивания автомобиля виниловой плёнкой заключается в том, что оно полностью обратимо. Поэтому,
            если Вы устанете от виниловой плёнки, всё что Вам нужно сделать, чтобы восстановить первоначальный заводской
            цвет, - это удалить виниловую плёнку. При этом лакокрасочное покрытие будет в идеальном состоянии, поскольку
            под виниловой плёнкой оно защищено от воздействия внешних факторов. Также если Вы поцарапаете виниловую
            плёнку, Вам не нужно будет переклеивать весь автомобиль целиком. Повреждённый элемент может быть с лёгкостью
            перетянут той же самой виниловой плёнкой, что поможет Вам сэкономить на покрасочных работах. Детейлинг центр
            VINYL12 использует виниловую плёнку, срок службы которой составляет от 3 до 5 лет. Поэтому лакокрасочное
            покрытие будет защищено на весь срок использования плёнки, и при её удалении сохранит изначальный заводской
            блеск. Это также может помочь Вам при продаже автомобиля.
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
          <h2 class="about-tint-title">ЦЕНА НА ОКЛЕИВАНИЕ ВИНИЛОВОЙ ПЛЕНКОЙ</h2>
          <p class="prices-tinting_about">Чтобы узнать стоимость и записаться на шумоизоляцию автомобиля виниловой
            плёнкой в детейлинг центре DETAIL52, пожалуйста, заполните форму ниже и наш менеджер свяжется с вами!</p>
        </div>
      </div>
      <div class="footer">
        <div class="footer-menu">
          <a v-for="item in footerMenu" class="footer-menu_item" :href="item.menuHref">{{item.menuTitle}}</a>
        </div>
        <div class="footer-text">© 2021 Детейлинг центр DETAIL52 </div>
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