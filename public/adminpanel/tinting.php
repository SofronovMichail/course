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
  <title>Тонировка автомобиля</title>
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
        <div class="header-paralax paralax-tinting">
          <div class="paralax-black">
            <h2 class="paralax-black_text">ТОНИРОВКА АВТОМОБИЛЕЙ</h2>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="content-about">
          <h2 class="about-title">
            <a id="about"></a>
            ДЕТЕЙЛИНГ ЦЕНТР <span class="title-text">DETAIL52</span> ПРЕДОСТАВЛЯЕТ УСЛУГИ ПО
            ТОНИРОВКЕ АВТОМОБИЛЕЙ В НИЖНЕМ НОВГОРОДЕ
          </h2>
          <div class="about-text">
            <p class="about-text-top">Мы предоставляем услуги по тонированию автомобилей, съёмной тонировке,
              антигравийной защите, химчистке
              салона, полировке кузова, шумоизоляции и оклеиванию винилом. Наша цель — обезопасить Ваш автомобиль от
              механических повреждений и негативного влияния внешних факторов окружающей среды, восстановить
              первозданный вид и продлить срок эксплуатации.</p>
            <p>Существуют причины, по которым автовладельцы предпочитают тонировать стекла своих
              автомобилей.</p>
            <p>Тонировка:</p>
            <ul>
              <li> спасает салон от нагревания;</li>
              <li> препятствует проникновению ультрафиолетовых лучей;</li>
              <li> помогает удерживать осколки разбившихся стёкол при боковом столкновении;</li>
              <li> защищает от отблесков снега, солнца и фар встречных автомобилей;</li>
              <li> скрывает имущество от посторонних глаз.</li>
            </ul>
            <p>Бытует мнение, что тонировка стёкол автомобиля ухудшает видимость в тёмное время суток. Однако при
              правильном выборе степени затемнения и грамотном процессе тонировки, этой проблемы легко избежать. Наши
              специалисты помогут вам сделать верный выбор, обеспечить качество тонировки, а также исключить
              дополнительные расходы. Также детейлинг центр DETAIL52 осуществляет тонировку пленкой Хамелеон (Дубай),
              которая проходит по ГОСТу и не вызывает никаких проблем с инспекторами ГИБДД.</p>
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
          <h2 class="about-tint-title">ЦЕНА НА ТОНИРОВКУ АВТОМОБИЛЕЙ</h2>
          <p class="prices-tinting_about">Обращаем Ваше внимание, что ниже указаны ориентировочные цены. Точные цены для
            Вашего автомобиля, Вы можете узнать по телефону у менеджера.</p>
          <div class="prices-tint-content">
            <div class="tint-content-type">
              <h3 class="tint-content-type_title">ТОНИРОВКА <span style="color: red;">«СТАНДАРТ»</span> SPECTROL</h3>
              <p class="tint-content-type_about">ТОНИРОВКА ПОЛУКРУГА<span style="color: red;">ОТ 2500</span></p>
              <p class="tint-content-type_about">ТОНИРОВКА ЛОБОВОГО СТЕКЛА<span style="color: red;">ОТ 1500</span></p>
              <p class="tint-content-type_about">ТОНИРОВКА БОКОВЫХ СТЁКОЛ<span style="color: red;">ОТ 1200</span></p>
            </div>
            <div class="tint-content-type">
              <h3 class="tint-content-type_title">ТОНИРОВКА <span style="color: red;">«ПРЕМИУМ»</span> SUN TEK</h3>
              <p class="tint-content-type_about">ТОНИРОВКА ПОЛУКРУГА<span style="color: red;">ОТ 3000</span></p>
              <p class="tint-content-type_about">ТОНИРОВКА ЛОБОВОГО СТЕКЛА<span style="color: red;">ОТ 1800</span></p>
              <p class="tint-content-type_about">ТОНИРОВКА БОКОВЫХ СТЁКОЛ<span style="color: red;">ОТ 1200</span></p>
            </div>
          </div>
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