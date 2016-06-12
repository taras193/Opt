<!DOCTYPE html>
<html>
<head>
  <meta content="text/html; charset=UTF-8" http-equiv=content-type>
  <meta name=viewport content="width=480">
  <title>Better for kids</title>
  <script type="text/javascript">if (screen.width > 699) {document.location = "../"+document.location.search;}</script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <style><?php include('css/head.css'); ?></style>
  <?php include('../track/head.php'); ?>
</head>
<body>
  <header>
    <div class="wrapper">
      <div class="head">
        <a href="#" class="logo"></a>
        <div class="btn btn_zz">Заказать звонок</div>
        <div class="clear"></div>
        <div class="phone"><span class="lptracker_phone">8 800 505 14 76</span></div>
      </div>
      <div class="label"></div>
      <div class="content">
        <h2>Увеличьте прибыль, работая с<br> надежным партнером. <span>Оптовые<br> поставки детской обуви</span><br> от производителя<sup>*</sup></h2>
        <p>Не работаем с совместными закупками, минимальный заказ от 20 000</p>
        <a href="#sec1" class="arrow view mouse">Смотрите далее</a>
      </div>
    </div>
  </header>
  <section class="sec1" id="sec1">
    <div class="wrapper">
      <h2>Заполните форму,<br> получите прайс и узнайте<br>
о специальных предложениях<br> для вас</h2>
      <div class="calc-w">
      <div class="calc" data-step="3">
        <h3>Введите ваши данные, мы вышлем наш прайс,<br>
расскажем об акциях и условиях работы</h3>
        <form action="ajax/mail.php" method="post">
        <div class="center">
          <div class="content1">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="phone" placeholder="Телефон">
            <input type="text" name="email" placeholder="E-mail">
            <input type="hidden" data-step="1" name="step1">
            <input type="hidden" data-step="2" name="step2">
            <input type="hidden" data-step="3" name="step3">
            <input type="hidden" name="frm" value="Калькулятор">
            <input type="hidden" name="event" value="d_calc">
          </div>
        </div>
        <button type="submit" class="btn">Отправить</button>
        </form>
      </div>
      <div class="calc" data-step="2" data-var="5">
        <h3>Скидка зависит от объема,<br>
какой объем вас интересует?</h3>
        <div class="center">
          <div class="content2">
            <div class="btn-big line-h" data-next-step="3">250
              <br> тыс. руб.
            </div>
            <div class="btn-big line-h" data-next-step="3">250-500
              <br> тыс. руб.
            </div>
            <div class="btn-big line-h" data-next-step="3">От 500
              <br> тыс. руб.
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="calc" data-step="1" data-var="1">       
          <h3 class="calc-h3" style="opacity:0;">Кого вы представляете?</h3>
        <div class="center">
          <div class="content2">
            <p>К сожалению, мы не работем в розницу</p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="calc" data-step="1" data-var="2">       
          <h3 class="calc-h3" style="opacity:0;">Кого вы представляете?</h3>
        <div class="center">
          <div class="content2">
            <p>К сожалению, мы не работем с совместными покупками</p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="calc" data-step="2" data-var="1">       
          <h3 class="calc-h3" style="opacity:0;">Кого вы представляете?</h3>
        <div class="center">
          <div class="content2">
            <p>К сожалению, мы не работем в розницу</p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="calc" data-step="2" data-var="2">       
          <h3 class="calc-h3" style="opacity:0;">Кого вы представляете?</h3>
        <div class="center">
          <div class="content2">
            <p>К сожалению, мы не работем с совместными покупками</p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="calc" data-step="2" data-var="5">
        <h3>Скидка зависит от объема,<br>
какой объем вас интересует?</h3>
        <div class="center">
          <div class="content2">
            <div class="btn-big line-h" data-next-step="3">250
              <br> тыс. руб.
            </div>
            <div class="btn-big line-h" data-next-step="3">250-500
              <br> тыс. руб.
            </div>
            <div class="btn-big line-h" data-next-step="3">От 500
              <br> тыс. руб.
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="calc" data-step="1" data-var="5">
        <h3 class="calc-h3">Какой товар вы сейчас закупаете?</h3>
        <div class="center">
          <div class="content2">
            <div class="btn-big" data-next-step="2">Отечественный
            </div>
            <div class="btn-big" data-next-step="2">Импортный
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="calc" data-step="2" data-var="4">
        <h3 class="calc-h3">На какие объемы вы рассчитываете?</h3>
        <div class="center">
          <div class="content2">
            <div class="btn-big line-h" data-next-step="3">До 100
              <br> тыс. руб.
            </div>
            <div class="btn-big line-h" data-next-step="3">100-200
              <br> тыс. руб.
            </div>
            <div class="btn-big line-h" data-next-step="3"> От 200
              <br> тыс. руб.
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="calc" data-step="1" data-var="4">
        <h3>Вас интересует брендирование <br>
бирками вашей сети?</h3>
        <div class="center">
          <div class="content2">
            <div class="btn-big" data-next-step="2">Да, обязательно
            </div>
            <div class="btn-big" style="line-height: 24px;" data-next-step="2">Не принципиально
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div> 
      <div class="calc" data-step="2" data-var="3">
        <h3 class="calc-h3">На какие объемы вы рассчитываете?</h3>
        <div class="center">
          <div class="content2">
            <div class="btn-big line-h" data-next-step="3">30-50 <br> тыс. руб.
            </div>
            <div class="btn-big line-h" data-next-step="3">50-100 <br> тыс. руб.
            </div>
            <div class="btn-big line-h" data-next-step="3">от 100 <br>тыс. руб.
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="calc" data-step="1" data-var="3">
        <h3 class="calc-h3">Что вас интересует?</h3>
        <div class="center">
          <div class="content2">
            <div class="btn-big" data-next-step="2">Дистрибьюция
            </div>
            <div class="btn-big line-h" data-next-step="2"> Закупка
              <br> товара
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      
      
       <!--div class="calc">
        <h3 class="calc-h3">На какие объемы вы рассчитываете?</h3>
        <div class="center">
          <div class="content2">
            <div class="btn-big">До 10тыс. руб.
            </div>
            <div class="btn-big">10-30тыс. руб.
            </div>
   <div class="btn-big">От 30тыс. руб.
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div> 
      
         <div class="calc">
        <h3 class="calc-h3">Вас интересует товар:</h3>
        <div class="center">
          <div class="content2">
            <div class="btn-big line-h">Размерными<br>`
рядами
            </div>
            <div class="btn-big">Поштучно
            </div>
  
          </div>
        </div>
        <div class="clear"></div>
      </div-->
        <div class="calc active" data-step="0">
          <h3 class="calc-h3">Кого вы представляете?</h3>
          <div class="center">
            <div class="content2">
              <div class="btn-big line-h var" data-next-step="1" data-var="1">Cебя. Розничная покупка
              </div>
              <div class="btn-big line-h var" data-next-step="1" data-var="2">Совместную
                <br> покупку
              </div>
              <div class="btn-big line-h var" data-next-step="1" data-var="3">Розничный
                <br> магазин
              </div>
              <div class="btn-big line-h var" data-next-step="1" data-var="4">Сеть
                <br> магазинов
              </div>
              <div class="btn-big line-h var" data-next-step="1" data-var="5">Оптовый
                <br> склад
              </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
          <a href="javascript:void(0)" class="back" data-next-step="0"> Назад к 1 вопросу</a>
          <div class="btns">
            <div class="btn-round active" data-next-step="0">1</div>
            <div class="btn-round" data-next-step="1">2</div>
            <div class="btn-round" data-next-step="2">3</div>
            <div class="btn-round no-active" data-next-step="3">4</div>
          </div>
      
    </div>
      <p>Не работаем с совметными покупками.
        <br> Только опт от 20 тыс. руб.</p>
      <div class="clear"></div>
    </div>
  </section>
  <section class="sec2">
    <div class="wrapper">
      <h2>Почему нас выбирают <br>
и рекомендуют?</h2>
      <div class="content">
        <div class="trig">
          <img src="img/s2-img1.png" alt="Clothes" class="img">
          <div class="cont">
            <div class="h4">Качественный
              <br> товар
            </div>
            <p>Обувь не склеена,
              <br>а прошита
            </p>
          </div>
        </div>
        <div class="trig">
          <img src="img/s2-img3.png" alt="Clothes" class="img">
          <div class="cont">
            <div class="h4">Наличие
              <br> документов
            </div>
            <p>Работаем по
              <br> официальному
              <br> договору
            </p>
          </div>
        </div>
        <div class="trig">
          <img src="img/s2-img2.png" alt="Clothes" class="img">
          <div class="cont">
            <div class="h4">Гарантия
              <br> сроков
            </div>
            <p>Штраф 1% от
              <br> договора за каждый
              <br> день просрочки
            </p>
          </div>
        </div>
        <div class="trig">
          <img src="img/s2-img4.png" alt="Clothes" class="img">
          <div class="cont">
            <div class="h4">Выгодная
              <br> цена
            </div>
            <p>В среднем у нас
              <br> на 30% дешевле
              <br> чем у конкурентов
            </p>
          </div>
        </div>
      </div>
      <a href="#sec3" class="arrow view mouse">Смотрите далее</a>
    </div>
  </section>
  <section class="sec3" id="sec3">
    <div class="wrapper">
      <h2>Популярные товары</h2>
      <div class="triger">
        <span class="togl">для мальчиков</span>
        <div class="toggle" data-page="0"></div>
        <span class="togr">для девочек</span>
      </div>
      <div class="content" data-pagek="0">
        <div class="block animation">
          <div class="img"> <img src="img/buy/shirt1.png" alt="Сандали"> </div>
          <p>Сандали</p>
          <span>от 230 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 230
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"> <img src="img/buy/shirt2.png" alt="Слипоны"> </div>
          <p>Слипоны</p>
          <span>от 250 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 250
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"> <img src="img/buy/shirt3.png" alt="Кеды"> </div>
          <p>Кеды</p>
          <span>от 165 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 165
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"><img src="img/buy/shirt4.png" alt="Туфли"> </div>
          <p>Туфли</p>
          <span>от 175 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 175
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"> <img src="img/buy/shirt5.png" alt="Сапоги"> </div>
          <p>Сапоги</p>
          <span>от 450 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 450
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img">
            <img src="img/buy/shirt6.png" alt="Ботинки">
          </div>
          <p>Ботинки</p>
          <span>от 265 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 265
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"> <img src="img/buy/shirt7.png" alt="Пляжная"> </div>
          <p>Пляжная</p>
          <span>от 130 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 130
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"> <img src="img/buy/shirt8.png" alt="Кроссовки"> </div>
          <p>Кроссовки</p>
          <span>от 390 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 390
            <br> р/шт
          </div>
        </div>
      </div>
      <div class="content rob" data-pagek="1">
        <div class="block animation">
          <div class="img"> <img src="img/buy/shir1.png" alt="Босоножки"> </div>
          <p>Босоножки</p>
          <span>от 160 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 160 
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"> <img src="img/buy/shir2.png" alt="Слипоны"> </div>
          <p>Слипоны</p>
          <span>от 250 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 250 
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"> <img src="img/buy/shir3.png" alt="Сандалики"> </div>
          <p>Сандалики</p>
          <span>от 230 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 230 
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"><img src="img/buy/shir4.png" alt="Туфельки"> </div>
          <p>Туфельки</p>
          <span>от 180 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 180 
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"> <img src="img/buy/shir5.png" alt="Сапоги"> </div>
          <p>Сапоги</p>
          <span>от 450 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 450 
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img">
            <img src="img/buy/shir6.png" alt="Балетки">
          </div>
          <p>Балетки</p>
          <span>от 190 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 190  
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"> <img src="img/buy/shir7.png" alt="Пляжная"> </div>
          <p>Пляжная</p>
          <span>от 130 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 130 
            <br> р/шт
          </div>
        </div>
        <div class="block animation">
          <div class="img"> <img src="img/buy/shir8.png" alt="Кроссовки"> </div>
          <p>Кроссовки</p>
          <span>от 390 р/шт</span>
          <div class="btn btn_zz2">Заказать</div>
          <div class="label-top">от 390 
            <br> р/шт
          </div>
        </div>
      </div>
      <a href="#sec4" class="arrow view mouse">Смотрите далее</a>
      <div class="clear"></div>
    </div>
  </section>
  <section class="sec4" id="sec4">
    <div class="wrapper">
      <h2>О нашей текстильной<br> фабрике
в цифрах</h2>
      <div class="content">
        <div class="trig left"> <img src="img/sec4-ico1.png" alt="ico">
          <span>35</span>
          <p>Постоянных
            <br>клиентов
          </p>
        </div>
        <div class="trig left">
          <img src="img/sec4-ico2.png" alt="ico">
          <span>60</span>
          <p>Тыс. опт
            <br> крупнейший
          </p>
        </div>
        <div class="trig left"> <img src="img/sec4-ico3.png" alt="ico">
          <span>158</span>
          <p>Единиц
            <br> товара
          </p>
        </div>
        <div class="trig left">
          <img src="img/sec4-ico5.png" alt="ico">
          <span>8</span>
          <p>Лет
            <br> на рынке
          </p>
        </div>
      </div>
      <a href="#sec5" class="arrow view mouse">Смотрите далее</a>
      <div class="clear"></div>
    </div>
  </section>
  <section class="sec5" id="sec5">
    <div class="wrapper">
      <h2>Заполните форму,<br> мы вышлем вам прайсы<br>
 и расскажем об условиях<br> работы с нами <br>
и отправим образцы</h2>
      <form action="ajax/mail.php" method="post">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="phone" placeholder="Телефон">
        <input type="text" name="email" placeholder="E-mail">
        <input type="hidden" name="frm" value="Прайсы, условия, образцы">
        <input type="hidden" name="event" value="d_price">
        <button type="submit" class="btn">Отправить</button>
      </form>
      <div class="lock">Ваши данные защищены</div>
      <div class="content">
        <div class="trig">
          <p>Наш товар
            <br> не уступает в
            <br> качестве турецкому,
            <br> но как минимум
            <br> на 40% дешевле!</p>
          <img src="img/sec5-ico1.png" alt="">
        </div>
        <div class="trig"> <img src="img/sec5-ico2.png" alt="">
          <p>Мы можем выслать
            <br> вам образцы нашего
            <br> товара в течение
            <br> 3 дней</p>
        </div>
      </div>
       <a href="#sec6" class="arrow view mouse">Смотрите далее</a>
    </div>
  </section>
  <section class="sec6" id="sec6">
    <div class="wrapper">
      <h2> Наше производство</h2>
      <div class="sliderg">
        <div class="left-arr"></div>
        <div class="right-arr"></div>
        <div class="slide">
         <div id="sld1">
          <img src="img/galery/slid1.jpg" alt="">
          <img src="img/galery/slid2.jpg" alt="">
          <img src="img/galery/slid4.jpg" alt="">
          <img src="img/galery/slid5.jpg" alt="">
          <img src="img/galery/slid6.jpg" alt="">
        </div>
        </div>
      <div class="slider-choose" id="choose">
          <a href="#" class="item" data-slide-index="0">
            <div class="bl">
              <img src="img/galery/slid1.jpg" alt="" class="img">
              <p></p>
            </div>
            <span>Производство<br>
  в Better for kids</span>
          </a>
          <a href="#" class="item" data-slide-index="1">
            <div class="bl">
              <img src="img/galery/slid2.jpg" alt="" class="img">
              <p></p>
            </div>
            <span>Производство<br>
  в Better for kids</span>
          </a>
          <a href="#" class="item" data-slide-index="2">
            <div class="bl">
              <img src="img/galery/slid4.jpg" alt="" class="img">
              <p></p>
            </div>
            <span>Производство<br>
  в Better for kids</span>
          </a>
          <a href="#" class="item" data-slide-index="3">
            <div class="bl">
              <img src="img/galery/slid5.jpg" alt="" class="img">
              <p></p>
            </div>
            <span>Производство<br>
  в Better for kids</span>
          </a>
          <a href="#" class="item" data-slide-index="4">
            <div class="bl">
              <img src="img/galery/slid6.jpg" alt="" class="img">
              <p></p>
            </div>
            <span>Производство<br>
  в Better for kids</span>
          </a>
        </div>
</div>
      <a href="#map" class="arrow view mouse">Смотрите далее</a>
    </div>
  </section>
  <section class="maps">
  <h2>Карта</h2>
    <div class="map_t"></div>
    <div id="map"></div>
    <div class="map_b"></div>
  </section>
  <footer>
  <div class="wrappper">
    <a href="" class="btn_zz">betterkids@yandex.ru</a>
    <p>© Better for kids. Все права защищены</p>
    <a href="http://gulfstream.bz/" target="_blank" class="gulf">Разработка сайта:</a>  
  </div>
  </footer>
    <div id="hidden-box">
    <div class="modal1" id="pop">
      <div class="calc">
        <h3 class="calc-h3">Заказать звонок</h3>
        <form action="ajax/mail.php" method="post">
        <div class="center">
          <div class="content1">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="phone" placeholder="Телефон">
            <input type="hidden" name="frm" value="Заказаь звонок">
            <input type="hidden" name="event" value="d_zz">
          </div>
        </div>
        <button type="submit" class="btn">Отправить</button>
        <div class="clear"></div>
        </form>
      </div>
    </div>
    <div class="modal1" id="pop2">
      <div class="calc">
        <h3 class="calc-h3">Более 10 наименований</h3>
        <form action="ajax/mail.php" method="post">
        <div class="center">
          <div class="content1">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="phone" placeholder="Телефон">
            <input type="hidden" name="frm" value="Заказаь продукцию">
            <input type="hidden" name="event" value="d_zakaz">
          </div>
        </div>
        <button type="submit" class="btn">Получить прайс</button>
        <div class="clear"></div>
        </form>
      </div>
    </div>
    <div class="modal2" id="okgo">
      <div class="calc">
        <h3 class="calc-h3">Спасибо!</h3>
        <div class="center">
          Заявка отправлена,
          <br> наш менеджер перезвонит вам
          <br> в течение 5 минут и поможет
          <br> сделать следующий шаг
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
<script type=text/javascript src=js/jquery-2.1.1.min.js></script>
<script type=text/javascript src=js/jquery.cookie.min.js></script>
<script type=text/javascript src=js/jquery.maskedinput.min.js></script>
<script type=text/javascript src=js/jquery.arcticmodal.min.js></script>
<script type=text/javascript src=js/jquery.lilanding.min.js></script>
<script type=text/javascript src=js/jquery.maphilight.min.js></script>
<script type=text/javascript src=js/jquery.bxslider.min.js></script>
<script type=text/javascript src=js/jquery.fancybox.pack.js></script>
<script type=text/javascript src=js/jquery.viewportchecker.min.js></script>
<script type=text/javascript src=js/main.js></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="js/map.js"></script>
<?php include_once("../track/body.php") ?>
</body>
</html>