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
  <title>Детейлинг центр DETAIL52</title>
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
        <div class="header-paralax paralax-main">
          <div class="paralax-black "></div>
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
        <div class="content-services">
          <h2 class="services-title"><a id="services"></a>ПРОФЕССИОНАЛЬНЫЕ УСЛУГИ ДЛЯ ВАШЕГО АВТОМОБИЛЯ</h2>
          <div class="services-container">
            <a v-for="service in services" :href="service.href" class="services-item">
              <img :src="service.img" alt="" class="services-img">
              <div class="item-text">
                <h3>{{service.title}}</h3>
                <p>{{service.description}}</p>
              </div>
            </a>
          </div>
        </div>
        <div class="content-prices">
          <h2 class="prices-title"><a id="prices"></a>ЦЕНЫ НА ОКАЗЫВАЕМЫЕ УСЛУГИ</h2>
          <p class="prices-text">Обращаем Ваше внимание, что ниже указаны ориентировочные цены. Точные цены для Вашего
            автомобиля, Вы можете узнать у менеджера по телефону.</p>
          <div class="prices-items">
            <div class="prices-item">
              <details class="item-toner">
                <summary>
                  <h3 class="item-title">ТОНИРОВКА АВТОМОБИЛЯ</h3><span class="title-elem">+</span>
                </summary>
                <div class="item-toner-content accodion-content">
                  <p class="item-class">Тонировка плёнкой Solernex «Стандарт».</p>
                  <ul>
                    <li>Тонировка полукруга от 2500₽.</li>
                    <li>Тонировка лобового стекла от 1500₽.</li>
                    <li>Тонировка боковых стёкол от 1200₽.</li>
                  </ul>
                  <p class="item-class">Тонировка плёнкой SunTek «Премиум».</p>
                  <ul>
                    <li>Тонировка полукруга от 3000₽.</li>
                    <li>Тонировка лобового стекла от 1800₽.</li>
                    <li>Тонировка боковых стёкол от 1200₽.</li>
                  </ul>
                </div>
              </details>
            </div>
            <div class="prices-item">
              <details class="item-antigrav">
                <summary>
                  <h3 class="item-title">АНТИГРАВИЙНАЯ ЗАЩИТА АВТОМОБИЛЯ<span class="title-elem">+</span></h3>
                </summary>
                <div class="item-about accodion-content">Цены на антигравийную защиту, указанные ниже, действительны
                  лишь
                  для автомобилей
                  малого и среднего класса. Для автомобилей бизнес класса и паркетников использовать коэффициент 1,3.
                  Для
                  внедорожников и микроавтобусов использовать коэффициент 1,7.
                  <p class="item-class">Антигравийная защита автомобилей виниловой пленкой марки Oraguard 270.</p>
                  <ul>
                    <li>«Минимальный» 5000₽. В стоимость входит: антигравийная защита передней части капота и крыльев,
                      фар
                      и
                      боковых зеркал.</li>
                    <li>«Стандарт» 10000₽. В стоимость входит: антигравийная защита передней части капота и крыльев,
                      переднего бампера, фар и боковых зеркал.</li>
                    <li>«Стандарт+» 15000₽. В стоимость входит: антигравийная защита капота, передней части крыльев,
                      стоек
                      у
                      лобового стекла, передней части крыши, порогов, переднего бампера, фар, боковых зеркал и ручек
                      дверей.
                    </li>
                    <li>«Премиум» 17000₽. В стоимость входит: антигравийная защита капота, крыльев, стоек у лобового
                      стекла,
                      передней части крыши, порогов, переднего бампера, фар, боковых зеркал и ручек дверей.</li>
                    <li>«Максимум» от 40000₽. В стоимость входит антигравийная защита всего кузова.</li>
                    <p class="item-class">Отдельные элементы:</p>
                    <li>Передний бампер от 12000₽.</li>
                    <li>Капот (целиком) от 12000₽.</li>
                    <li>Передняя часть капота и крыльев от 7000₽.</li>
                    <li>Пороги от 3000₽.</li>
                    <li>Боковые зеркала от 2000₽.</li>
                    <li>Фары от 3000₽.</li>
                  </ul>
                </div>
              </details>
            </div>
            <div class="prices-item">
              <details class="item-clean">
                <summary>
                  <h3 class="item-title">ХИМЧИСТКА САЛОНА АВТОМОБИЛЯ<span class="title-elem">+</span></h3>
                </summary>
                <div class="item-clean-content accodion-content">
                  <p class="item-class">Малый и средний класс:</p>
                  <ul>
                    <li>Полная химчистка салона от 8000₽. В стоимость входит: химчистка пола, сидений, обшивки дверей и
                      потолка, приборной панели, багажника.</li>
                    <li>Химчистка сидений от 4000₽.</li>
                    <li>Химчистка пола от 2000₽.</li>
                    <li>Химчистка обшивки потолка от 2000₽.</li>
                    <li>Химчистка обшивки дверей от 500₽.</li>
                    <li>Химчистка приборной панели от 500₽.</li>
                    <li>Химчистка багажника от 500₽.</li>
                  </ul>
                  <p class="item-class">Представительский класс:</p>
                  <ul>
                    <li>Полная химчистка салона от 10000₽. В стоимость входит: химчистка пола, сидений, обшивки дверей и
                      потолка, приборной панели, багажника.</li>
                    <li>Химчистка сидений от 5000₽.</li>
                    <li>Химчистка пола от 3000₽.</li>
                    <li>Химчистка обшивки потолка от 3000₽.</li>
                    <li>Химчистка обшивки дверей от 500₽.</li>
                    <li>Химчистка приборной панели от 500₽.</li>
                    <li>Химчистка багажника от 500₽.</li>
                  </ul>
                  <p class="item-class">Малые и средние джипы:</p>
                  <ul>
                    <li>Полная химчистка салона от 10000₽. В стоимость входит: химчистка пола, сидений, обшивки дверей и
                      потолка, приборной панели, багажника.</li>
                    <li>Химчистка сидений от 5000₽.</li>
                    <li>Химчистка пола от 3000₽.</li>
                    <li>Химчистка обшивки потолка от 3000₽.</li>
                    <li>Химчистка обшивки дверей от 500₽.</li>
                    <li>Химчистка приборной панели от 500₽.</li>
                    <li>Химчистка багажника от 1000₽.</li>
                  </ul>
                  <p class="item-class">Минивены и крупные внедорожники:</p>
                  <ul>
                    <li>Полная химчистка салона от 12000₽. В стоимость входит: химчистка пола, сидений, обшивки дверей и
                      потолка, приборной панели, багажника.</li>
                    <li>Химчистка сидений от 5000₽.</li>
                    <li>Химчистка пола от 3000₽.</li>
                    <li>Химчистка обшивки потолка от 2000₽.</li>
                    <li>Химчистка обшивки дверей от 500₽.</li>
                    <li>Химчистка приборной панели от 500₽.</li>
                    <li>Химчистка багажника от 1200₽.</li>
                  </ul>
                </div>
              </details>
            </div>
            <div class="prices-item">
              <details>
                <summary>
                  <h3 class="item-title">ПОЛИРОВКА АВТОМОБИЛЯ<span class="title-elem">+</span></h3>
                </summary>
                <div class="item-polirovka-content accodion-content">
                  <p>В стоимость полировки кузова керамикой входит: 3-х фазная мойка автомобиля, чернение шин и чистка
                    стёкол.</p>
                  <p class="item-class">Малый и средний класс:</p>
                  <ul>
                    <li>Мягкая восстанавливающая полировка (восстановление блеска) от 3000₽.</li>
                    <li>Абразивная полировка (удаление царапин) от 7000₽.</li>
                    <li>Покрытие и полировка кузова жидким стеклом Willson Body Glass Guard от 4000₽.</li>
                    <li>Полировка кузова керамикой: Nano Polish + Ceramic Pro Light от 9000₽.</li>
                    <li>Полировка кузова керамикой 3 слоя: Nano Polish + Ceramic Pro Light + Ceramic Pro 9H от 15000₽.
                    </li>
                    <li>Полировка кузова керамикой 4 слоя: Nano Polish + Ceramic Pro Light + 2x Ceramic Pro 9H от
                      23000₽.
                    </li>
                    <li>Полировка кузова керамикой 6 слоёв: Nano Polish + Ceramic Pro Light + 4x Ceramic Pro 9H от
                      40000₽.
                    </li>
                  </ul>
                  <p class="item-class">Представительский класс:</p>
                  <ul>
                    <li>Мягкая восстанавливающая полировка (восстановление блеска) от 3000₽.</li>
                    <li>Абразивная полировка (удаление царапин) от 7500₽.</li>
                    <li>Покрытие и полировка кузова жидким стеклом Willson Body Glass Guard от 5000₽.</li>
                    <li>Полировка кузова керамикой: Nano Polish + Ceramic Pro Light от 9000₽.</li>
                    <li>Полировка кузова керамикой 3 слоя: Nano Polish + Ceramic Pro Light + Ceramic Pro 9H от 16000₽.
                    </li>
                    <li>Полировка кузова керамикой 4 слоя: Nano Polish + Ceramic Pro Light + 2x Ceramic Pro 9H от
                      25000₽.
                    </li>
                    <li>Полировка кузова керамикой 6 слоёв: Nano Polish + Ceramic Pro Light + 4x Ceramic Pro 9H от
                      50000₽.
                    </li>
                  </ul>
                  <p class="item-class">Малые и средние джипы:</p>
                  <ul>
                    <li>Мягкая восстанавливающая полировка (восстановление блеска) от 3500₽.</li>
                    <li>Абразивная полировка (удаление царапин) от 8500₽.</li>
                    <li>Покрытие и полировка кузова жидким стеклом Willson Body Glass Guard от 5000₽.</li>
                    <li>Полировка кузова керамикой: Nano Polish + Ceramic Pro Light от 10000₽.</li>
                    <li>Полировка кузова керамикой 3 слоя: Nano Polish + Ceramic Pro Light + Ceramic Pro 9H от 17000₽.
                    </li>
                    <li>Полировка кузова керамикой 4 слоя: Nano Polish + Ceramic Pro Light + 2x Ceramic Pro 9H от
                      26000₽.
                    </li>
                    <li>Полировка кузова керамикой 6 слоёв: Nano Polish + Ceramic Pro Light + 4x Ceramic Pro 9H от
                      55000₽.
                    </li>
                  </ul>
                  <p class="item-class">Минивены и крупные внедорожники:</p>
                  <ul>
                    <li>Мягкая восстанавливающая полировка (восстановление блеска) от 4000₽.</li>
                    <li>Абразивная полировка (удаление царапин) от 9000₽.</li>
                    <li>Покрытие и полировка кузова жидким стеклом Willson Body Glass Guard от 6000₽.</li>
                    <li>Полировка кузова керамикой: Nano Polish + Ceramic Pro Light от 12000₽.</li>
                    <li>Полировка кузова керамикой 3 слоя: Nano Polish + Ceramic Pro Light + Ceramic Pro 9H от 18000₽.
                    </li>
                    <li>Полировка кузова керамикой 4 слоя: Nano Polish + Ceramic Pro Light + 2x Ceramic Pro 9H от
                      28000₽.
                    </li>
                    <li>Полировка кузова керамикой 6 слоёв: Nano Polish + Ceramic Pro Light + 4x Ceramic Pro 9H от
                      58000₽.
                    </li>
                  </ul>
                </div>
              </details>
            </div>
            <div class="prices-item">
              <details>
                <summary>
                  <h3 class="item-title">ШУМОИЗОЛЯЦИЯ АВТОМОБИЛЯ<span class="title-elem">+</span></h3>
                </summary>
                <div class="item-shumka-content accodion-content">
                  <p>Стоимость шумоизоляции Вашего автомобиля уточняйте по телефонам:</p>
                  <p>+ 7 (8315) 66-66-20</p>
                  <p>+7 (902) 225-34-50</p>
                </div>
              </details>
            </div>
            <div class="prices-item">
              <details>
                <summary>
                  <h3 class="item-title">ОКЛЕИВАНИЕ ВИНИЛОВОЙ ПЛЁНКОЙ<span class="title-elem">+</span></h3>
                </summary>
                <div class="item-vinil-content accodion-content">
                  <p>Стоимость оклеивания Вашего автомобиля виниловой плёнкой уточняйте по телефонам:
                  </p>
                  <p>+ 7 (8315) 66-66-20</p>
                  <p>+7 (902) 225-34-50</p>
                </div>
              </details>
            </div>
          </div>
        </div>
        <div class="content-contacts">
          <h2 class="contacts-title"><a id="contacts"></a>КОНТАКТЫ</h2>
          <div class="item-contact">
            <p>Нижний Новгород, улица Народная 78А, 603116</p>
            <p>Режим работы: </p>
            <p>ПН-ПТ: с 10:00 до 19:00</p>
            <p>СБ: с 10:00 до 13:00</p>
            <p>ВС: выходной</p>
            <p>Телефон: + 7 (8315) 66-66-20 , +7 (902) 115-38-30</p>
            <p>Email: DETAIL52@mail.ru</p>
          </div>
          <div class="contact-map">
            <img src="/public/img/map.jpg" alt="map">
          </div>
        </div>
        <div class="content-form">
          <h2 class="form-title"><a id="online"></a>ОНЛАЙН ЗАПИСЬ</h2>
          <div class="item-form">Чтобы записаться на обслуживание в детейлинг центр DETAIL52, пожалуйста, заполните
            форму ниже!
          </div>
          <a id="btn">Зарегистрироваться</a>
        </div>
        <div class="btn-form">
        </div>
        <div id="form-modal" class="modal">
          <div class="modal-content">
            <div class="form-header">
              <div class="close">
                <span class="close-modal-window">×</span>
              </div>
              <h1 class="top-title_text">DETAIL52</h1>
            </div>
            <div class="content-login">
              <div class="signIn">
                <form method="POST" action="/public/auth.php">
                  <h2>Авторизация</h2>
                  <div class="form-group">
                    <p><label class="form-title-text name">Логин</label></p>
                    <input class="form-group_item" type="text" name="login" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <p><label class="form-title-text name">Пароль</label></p>
                    <input class="form-group_item" type="password" name="password" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <p><button type="submit" class="btn-success">Войти</button></p>
                    <p>У вас ещё нет аккаунта? - <a id="btn-reg">зарегестрироваться</a>!</p>
                  </div>
                </form>
              </div>
              <div class="signUp">
                <form method="POST" action="/public/registration.php">
                  <h2>Регистрация</h2>
                  <div class="form-group">
                    <p><label class="form-title-text name">Ваше имя</label></p>
                    <input class="form-group_item" type="text" name="name" placeholder="Иван" required>
                  </div>
                  <div class="form-group">
                    <p><label class="form-title-text email">Ваш email</label></p>
                    <input class="form-group_item" type="email" name="email" placeholder="ivanivanov@mail.ru" required>
                  </div>
                  <div class="form-group">
                    <p><label class="form-title-text tel">Ваш номер телефона</label></p>
                    <input class="form-group_item" type="tel" name="tel" placeholder="89876543210" maxlength="10"
                      required>
                  </div>
                  <div class="form-group">
                    <p><label class="form-title-text name">Логин</label></p>
                    <input class="form-group_item" type="text" name="login" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <p><label class="form-title-text name">Пароль</label></p>
                    <input class="form-group_item" type="password" name="password" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <p><label class="form-title-text name">Повторите пароль</label></p>
                    <input class="form-group_item" type="password" name="password_confirm" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <p><button type="submit" class="btn-success">Зарегистрироваться</button></p>
                    <p>У вас уже есть аккаунт? - <a id="btn-auth">авторизироваться</a>!</p>
                  </div>
                </form>
              </div>
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
    echo '<p id="messege-click" class="messege_error"> ' . $_SESSION['error_messege'] . ' </p>';
    unset($_SESSION['error_messege']);
}

if ($_SESSION['messege']) {
    echo '<p id="messege-click" class="messege"> ' . $_SESSION['messege'] . ' </p>';
    unset($_SESSION['messege']);
}
?>
    <a class="back_to_top" title="Наверх">
      <img src="/public/img/up-arrow.svg" alt="up-arrow" class="up-arrow">
    </a>
  </div>
  <script src="/public/js/vue.js"></script>
  <script src="/public/js/main.js"></script>
  <script src="/public/js/anim.js"></script>
  <script src="/public/js/button-up.js"></script>
  <script src="/public/js/modal.js"></script>
</body>

</html>