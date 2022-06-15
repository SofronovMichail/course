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
  <title>Антигравийная защита автомобиля</title>
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
        <div class="header-paralax paralax-protecting">
          <div class="paralax-black">
            <h2 class="paralax-black_text">АНТИГРАВИЙНАЯ ЗАЩИТА АВТОМОБИЛЕЙ</h2>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="content-about">
          <h2 class="about-title">
            <a id="about"></a>
            ДЕТЕЙЛИНГ ЦЕНТР <span class="title-text">DETAIL52</span> ПРЕДОСТАВЛЯЕТ УСЛУГИ ПО
            АНТИГРАВИЙНОЙ ЗАЩИТЕ АВТОМОБИЛЕЙ В НИЖНЕМ НОВГОРОДЕ
          </h2>
          <div class="about-text">
            <p>Ни для кого не секрет, что летящий из-под колёс дорожный мусор оставляет сколы и царапины, а едкие
              химикаты и реагенты вызывают дефекты лакокрасочного покрытия автомобиля. Прежде всего, риску подвержены
              такие элементы как: капот, передний бампер, стойки, крылья и зеркала. Поэтому, чтобы защитить Ваш
              автомобиль от воздействия негативных факторов окружающей среды и продлить срок его эксплуатации, следует
              вовремя задуматься об антигравийной защите. Процесс антигравийной защиты представляет собой оклеивание
              автомобиля специальными плёнками, которые помогут сохранить лакокрасочное покрытие от механических
              повреждений. Детейлинг центр DETAIL52 предлагает услуги по антигравийной защите кузова виниловыми и
              полиуретановыми плёнками. Мы работаем с плёнками ведущих американских и европейских производителей, таких
              как: LLumar, 3M Venture Shield, Solar Gard, KPMF. Стоит отметить, что эти антигравийные плёнки имеют
              различные характеристики, которые влияют на степень защищённости Вашего автомобиля. В среднем срок службы
              антигравийной плёнки 5-7 лет. Поэтому, сделав антигравийную защиту автомобиля, Вы можете надолго забыть о
              косметическом ремонте! Если у вас остались какие-либо вопросы, свяжитесь с нами и специалисты детейлинг
              центра VINYL12 помогут Вам выбрать качественную плёнку для Вашего автомобиля.</p>
          </div>
        </div>
        <div class="tinting-works">
          <div class="services-container">
            <div v-for="item in protectWorks" class="tint-item">
              <img :src="item.img" alt="protecting" class="tint-img">
              <div class="item-text">
                <h3>{{item.description}}</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="prices-tinting">
          <h2 class="about-tint-title">ЦЕНА НА АНТИГРАВИЙНУЮ ЗАЩИТУ</h2>
          <p class="prices-tinting_about">Обращаем Ваше внимание, что ниже указаны ориентировочные цены. Точные цены для
            Вашего автомобиля, Вы можете узнать по телефону у менеджера.</p>
          <div class="prices-tint-content">
            <div class="tint-content-type">
              <p class="tint-content-type_about">БРОНИРОВАНИЕ ПЕРЕДНЕГО БАМПЕРА<span style="color: red;">ОТ 12000</span>
              </p>
              <p class="tint-content-type_about">БРОНИРОВАНИЕ КАПОТА (ЦЕЛИКОМ) <span style="color: red;">ОТ 12000</span>
              </p>
              <p class="tint-content-type_about">БРОНИРОВАНИЕ ПЕРЕДНЕЙ ЧАСТИ КАПОТА И КРЫЛЬЕВ
                <span style="color: red;">ОТ 7000</span>
              </p>
            </div>
            <div class="tint-content-type">
              <p class="tint-content-type_about">БРОНИРОВАНИЕ ПОРОГОВ<span style="color: red;">ОТ 3000</span></p>
              <p class="tint-content-type_about">БРОНИРОВАНИЕ БОКОВЫХ ЗЕРКАЛ
                <span style="color: red;">ОТ 2000</span>
              </p>
              <p class="tint-content-type_about">БРОНИРОВАНИЕ ФАР<span style="color: red;">ОТ 3000</span></p>
            </div>
          </div>
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
  <script src="/public/js/protecting.js"></script>
  <script src="/public/js/anim.js"></script>
  <script src="/public/js/button-up.js"></script>
  <script src="/public/js/modal.js"></script>
</body>

</html>