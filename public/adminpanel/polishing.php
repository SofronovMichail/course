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
  <title>Полировка автомобилей</title>
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
            <h2 class="paralax-black_text">ПОЛИРОВКА АВТОМОБИЛЕЙ</h2>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="content-about">
          <h2 class="about-title">
            <a id="about"></a>
            ДЕТЕЙЛИНГ ЦЕНТР <span class="title-text">DETAIL52</span> ПРЕДОСТАВЛЯЕТ УСЛУГИ ПО
            ПОЛИРОВКЕ АВТОМОБИЛЕЙ В НИЖНЕМ НОВГОРОДЕ
          </h2>
          <div class="about-text">
            Ах, какой же он красивый, этот Ваш новый автомобиль! Чистый, сверкающий полировкой, незамутненными стёклами
            и фарами. Но, к сожалению так будет продолжаться не всегда. Поскольку лакокрасочные покрытия подвержены
            износу, под воздействием солнца и грязи, они могут потускнеть и приобрести царапины. Регулярная мойка и
            полировка кузова способны замедлить эти процессы. А для автомобилей "повидавших жизнь", полировка кузова -
            это отличный способ повысить ценность перед продажей. Существует большое количество видов полировки
            автомобилей, которые образуют защитную плёнку на кузове. Мягкая полировка кузова поможет восстановить шик и
            блеск Вашего автомобиля. А абразивная полировка кузова удалит сколы и царапины на лакокрасочном покрытии.
            Также, большую популярность приобрела керамическая полировка кузова. Детейлинг центр DETAIL52 предлагает
            многослойную полировку кузова керамикой Ceramic Pro Nano-Polish, Ceramic Pro Light и Ceramic Pro 9H.
            Полировка кузова в детейлинг центре DETAIL52 - это выбор в пользу качества обслуживания лакокрасочных
            покрытий Вашего автомобиля.
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
          <h2 class="about-tint-title">ЦЕНА НА ПОЛИРОВКУ АВТОМОБИЛЕЙ</h2>
          <p class="prices-tinting_about">Обращаем Ваше внимание, что ниже указаны ориентировочные цены. Точные цены для
            Вашего автомобиля, Вы можете узнать по телефону у менеджера.</p>
          <div class="prices-tint-content">
            <div class="tint-content-type">
              <h3 class="tint-content-type_title"><span style="color: red;">МАЛЫЙ И СРЕДНИЙ КЛАСС</span></h3>
              <p class="tint-content-type_about">МЯГКАЯ ВОССТАНАВЛИВАЮЩАЯ ПОЛИРОВКА<span style="color: red;">ОТ
                  5000</span></p>
              <p class="tint-content-type_about">АБРАЗИВНАЯ ПОЛИРОВКА<span style="color: red;">ОТ 8000</span></p>
              <p class="tint-content-type_about">ПОЛИРОВКА КУЗОВА С ПОСЛЕДУЮЩИМ НАНЕСЕНИЕМ ЖИДКОГО СТЕКЛА KRYTEX
                H7+<span style="color: red;">ОТ 12000</span></p>
              <p class="tint-content-type_about">ПОЛИРОВКА КУЗОВА КУЗОВА С ПОСЛЕДУЮЩИМ НАНЕСЕНИЕМ КЕРАМИЧЕСКОГО СОСТАВА
                GYEON PURE EVO<span style="color: red;">ОТ 25000</span></p>
            </div>
            <div class="tint-content-type">
              <h3 class="tint-content-type_title"><span style="color: red;">ПРЕДСТАВИТЕЛЬСКИЙ КЛАСС</span></h3>
              <p class="tint-content-type_about">МЯГКАЯ ВОССТАНАВЛИВАЮЩАЯ ПОЛИРОВКА<span style="color: red;">ОТ
                  8000</span></p>
              <p class="tint-content-type_about">АБРАЗИВНАЯ ПОЛИРОВКА<span style="color: red;">ОТ 12000</span></p>
              <p class="tint-content-type_about">ПОЛИРОВКА КУЗОВА С ПОСЛЕДУЮЩИМ НАНЕСЕНИЕМ ЖИДКОГО СТЕКЛА KRYTEX
                H7+<span style="color: red;">ОТ 16000</span></p>
              <p class="tint-content-type_about">ПОЛИРОВКА КУЗОВА КУЗОВА С ПОСЛЕДУЮЩИМ НАНЕСЕНИЕМ КЕРАМИЧЕСКОГО СОСТАВА
                GYEON PURE EVO<span style="color: red;">ОТ 30000</span></p>
            </div>
            <div class="tint-content-type">
              <h3 class="tint-content-type_title"><span style="color: red;">МАЛЫЕ И СРЕДНИЕ ДЖИПЫ</span></h3>
              <p class="tint-content-type_about">МЯГКАЯ ВОССТАНАВЛИВАЮЩАЯ ПОЛИРОВКА<span style="color: red;">ОТ
                  6500</span></p>
              <p class="tint-content-type_about">АБРАЗИВНАЯ ПОЛИРОВКА<span style="color: red;">ОТ 9000</span></p>
              <p class="tint-content-type_about">ПОЛИРОВКА КУЗОВА С ПОСЛЕДУЮЩИМ НАНЕСЕНИЕМ ЖИДКОГО СТЕКЛА KRYTEX
                H7+<span style="color: red;">ОТ 15000</span></p>
              <p class="tint-content-type_about">ПОЛИРОВКА КУЗОВА КУЗОВА С ПОСЛЕДУЮЩИМ НАНЕСЕНИЕМ КЕРАМИЧЕСКОГО СОСТАВА
                GYEON PURE EVO<span style="color: red;">ОТ 28000</span></p>
            </div>
            <div class="tint-content-type">
              <h3 class="tint-content-type_title"><span style="color: red;">МИНИВЕНЫ И КРУПНЫЕ ВНЕДОРОЖНИКИ</span></h3>
              <p class="tint-content-type_about">МЯГКАЯ ВОССТАНАВЛИВАЮЩАЯ ПОЛИРОВКА<span style="color: red;">ОТ
                  7000</span></p>
              <p class="tint-content-type_about">АБРАЗИВНАЯ ПОЛИРОВКА<span style="color: red;">ОТ 10000</span></p>
              <p class="tint-content-type_about">ПОЛИРОВКА КУЗОВА С ПОСЛЕДУЮЩИМ НАНЕСЕНИЕМ ЖИДКОГО СТЕКЛА KRYTEX
                H7+<span style="color: red;">ОТ 16000</span></p>
              <p class="tint-content-type_about">ПОЛИРОВКА КУЗОВА КУЗОВА С ПОСЛЕДУЮЩИМ НАНЕСЕНИЕМ КЕРАМИЧЕСКОГО СОСТАВА
                GYEON PURE EVO<span style="color: red;">ОТ 30000</span></p>
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
  <script src="/public/js/tintings.js"></script>
  <script src="/public/js/anim.js"></script>
  <script src="/public/js/button-up.js"></script>
  <script src="/public/js/modal.js"></script>
</body>

</html>