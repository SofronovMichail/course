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
  <title>Химчистка автомобилей</title>
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
        <div class="header-paralax paralax-cleaning">
          <div class="paralax-black">
            <h2 class="paralax-black_text">ХИМЧИСТКА АВТОМОБИЛЕЙ</h2>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="content-about">
          <h2 class="about-title">
            <a id="about"></a>
            ДЕТЕЙЛИНГ ЦЕНТР <span class="title-text">DETAIL52</span> ПРЕДОСТАВЛЯЕТ УСЛУГИ ПО
            ХИЧИСТКЕ АВТОМОБИЛЕЙ В НИЖНЕМ НОВГОРОДЕ
          </h2>
          <div class="about-text">
            Заботливый автолюбитель должен поддерживать эстетичный вид автомобиля не только снаружи, но и следить за
            чистотой и порядком в салоне. На первый взгляд, интерьер автомобиля представляет собой относительно
            небольшое пространство. Однако, маленькие беспорядки всегда имеют огромное влияние! Случайно разлитые
            напитки, въевшиеся в обивку пятна, грязь, пыль и песок с улицы - всё это является рассадником вредоносных
            микроорганизмов сапрофитов – пылевых клещей микроскопического размера. Попадая в легкие, они могут вызывать
            заболевания дыхательной системы. Для того, чтобы обезопасить Ваше здоровье и поддерживать чистоту в салоне
            автомобиля, специалисты детейлинг центра DETAIL52 рекомендуют производить химчистку салона дважды в год.
            Химчистка салона автомобиля поможет удалить застарелые загрязнения, которые трудно вывести иными способами.
            Проводя химчистку автомобиля, специалисты детейлинг центра DETAIL52 используют автокосметику, индивидуально
            подобранную для каждого конкретного вида пятен. Также, химчистка автомобиля продлевает срок службы пластиков
            и иных материалов отделки, препятствует выцветанию обивки. Профессиональная химчистка салона в детейлинг
            центре DETAIL52 включает в себя: тщательную уборку салона, обработку каждого элемента гипоалергенными
            чистящими средствами, устранение въевшихся пятен и грязи, сушку вымытых элементов и обработку поверхностей
            салона полиролями и кондиционерами.
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
          <h2 class="about-tint-title">ЦЕНА НА ХИМЧИСТКУ АВТОМОБИЛЕЙ</h2>
          <p class="prices-tinting_about">Обращаем Ваше внимание, что ниже указаны ориентировочные цены. Точные цены для
            Вашего автомобиля, Вы можете узнать по телефону у менеджера.</p>
          <div class="prices-tint-content">
            <div class="tint-content-type">
              <h3 class="tint-content-type_title"><span style="color: red;">МАЛЫЙ И СРЕДНИЙ КЛАСС</span></h3>
              <p class="tint-content-type_about">ПОЛНАЯ ХИМЧИСТКА САЛОНА<span style="color: red;">ОТ 8000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА СИДЕНИЙ<span style="color: red;">ОТ 4000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ПОЛА<span style="color: red;">ОТ 2000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ОБШИВКИ ПОТОЛКА<span style="color: red;">ОТ 2000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ОБШИВКИ ДВЕРЕЙ<span style="color: red;">ОТ 500</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ПРИБОРНОЙ ПАНЕЛИ<span style="color: red;">ОТ 500</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА БАГАЖНИКА<span style="color: red;">ОТ 500</span></p>
            </div>
            <div class="tint-content-type">
              <h3 class="tint-content-type_title"><span style="color: red;">ПРЕДСТАВИТЕЛЬСКИЙ КЛАСС</span></h3>
              <p class="tint-content-type_about">ПОЛНАЯ ХИМЧИСТКА САЛОНА<span style="color: red;">ОТ 10000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА СИДЕНИЙ<span style="color: red;">ОТ 5000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ПОЛА<span style="color: red;">ОТ 3000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ОБШИВКИ ПОТОЛКА<span style="color: red;">ОТ 3000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ОБШИВКИ ДВЕРЕЙ<span style="color: red;">ОТ 500</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ПРИБОРНОЙ ПАНЕЛИ<span style="color: red;">ОТ 500</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА БАГАЖНИКА<span style="color: red;">ОТ 500</span></p>
            </div>
            <div class="tint-content-type">
              <h3 class="tint-content-type_title"><span style="color: red;">МАЛЫЕ И СРЕДНИЕ ДЖИПЫ</span></h3>
              <p class="tint-content-type_about">ПОЛНАЯ ХИМЧИСТКА САЛОНА<span style="color: red;">ОТ 10000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА СИДЕНИЙ<span style="color: red;">ОТ 5000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ПОЛА<span style="color: red;">ОТ 3000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ОБШИВКИ ПОТОЛКА<span style="color: red;">ОТ 3000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ОБШИВКИ ДВЕРЕЙ<span style="color: red;">ОТ 500</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ПРИБОРНОЙ ПАНЕЛИ<span style="color: red;">ОТ 500</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА БАГАЖНИКА<span style="color: red;">ОТ 1000</span></p>
            </div>
            <div class="tint-content-type">
              <h3 class="tint-content-type_title"><span style="color: red;">МИНИВЕНЫ И КРУПНЫЕ ВНЕДОРОЖНИКИ</span></h3>
              <p class="tint-content-type_about">ПОЛНАЯ ХИМЧИСТКА САЛОНА<span style="color: red;">ОТ 12000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА СИДЕНИЙ<span style="color: red;">ОТ 5000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ПОЛА<span style="color: red;">ОТ 3000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ОБШИВКИ ПОТОЛКА<span style="color: red;">ОТ 3000</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ОБШИВКИ ДВЕРЕЙ<span style="color: red;">ОТ 500</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА ПРИБОРНОЙ ПАНЕЛИ<span style="color: red;">ОТ 500</span></p>
              <p class="tint-content-type_about">ХИМЧИСТКА БАГАЖНИКА<span style="color: red;">ОТ 1200</span></p>
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