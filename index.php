<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/fonts.css">
    <link rel="stylesheet" href="CSS/jquery.fancybox.min.css">
    <link rel="stylesheet" href="CSS/slick.css">
    <link rel="stylesheet" href="CSS/jquery.formstyler.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="CSS/jquery.formstyler.theme.css"> -->
    <link rel="stylesheet" href="CSS/media.css">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <title>Poytaxt Group</title>
</head>
<!--Helloworld-->
<body>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__contacts">
                    <a class="header__phone" href="tel:998 71 250 30 01">+998 71 250 30 01</a>
                    <a class="header__email" href="mailto:">samjdt7@gmail.com</a>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">
                        Бесплатная консультация
                    </a>
                </div>
            </div>
        </div>
        <div class="header__content">
            <div class="container">
                <div class="header__content-inner">
                    <div class="header__logo">
                        <a href="#">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <nav class="navbar navbar-expand-md navbar-light ">
                         <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button> 
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link active" href="#">Главная</a>
                                <a class="nav-item nav-link" href="#a">Наши товары</a>
                                <a class="nav-item nav-link" href="#b">Наши услуги</a>
                                <a class="nav-item nav-link" href="#c">История</a>
                                <a class="nav-item nav-link" href="#d">Сотрудники</a>
                                <a class="nav-item nav-link" href="#e">Контакты</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- <?php $images = scandir('./IMG/slider/'); ?> -->
    <!-- <div id="carouselExampleIndicators" class="carousel slide carouse-fade" data-ride="carousel"> -->

    <!-- <div class="carousel-inner">
        <?php for($i = 2; $i < count($images); $i++): ?>
            <div class="carousel-item <?php if($i == 2){echo 'active';} ?>">
                <img class="d-block w-100" src="./IMG/slider/<?php echo $images[$i]; ?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="slider__title">
                        POYTAXT GROUP
                    </div>
                    <div class="slider__text">
                        Специализируемся на оптовых поставках бумаги, картона и других видов целлюлозно-бумажной
                        продукции, сотрудничая с крупнейшими иностранными производителями
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
                        Связаться с Нами
                    </a>
                </div>
            </div>
            <?php endfor; ?>     
        </div>
    </div> -->

    <div id="carouselExampleIndicators" class="carousel slide carouse-fade" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./IMG/slider/1.jpg" alt="Первый слайд">
                <div class="carousel-caption d-md-block">
                    <div class="slider__title">
                        POYTAXT GROUP
                    </div>
                    <div class="slider__text">
                        Специализируемся на оптовых поставках бумаги, картона и других видов целлюлозно-бумажной
                        продукции, сотрудничая с крупнейшими иностранными производителями
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
                        Связаться с Нами
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./IMG/slider/2.jpg" alt="Второй слайд">
                <div class="carousel-caption d-md-block">
                    <div class="slider__title">
                        POYTAXT GROUP
                    </div>
                    <div class="slider__text">
                        Специализируемся на оптовых поставках бумаги, картона и других видов целлюлозно-бумажной
                        продукции, сотрудничая с крупнейшими иностранными производителями
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
                        Связаться с Нами
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./IMG/slider/3.jpg" alt="Третий слайд">
                <div class="carousel-caption d-md-block">
                    <div class="slider__title">
                        POYTAXT GROUP
                    </div>
                    <div class="slider__text">
                        Специализируемся на оптовых поставках бумаги, картона и других видов целлюлозно-бумажной
                        продукции, сотрудничая с крупнейшими иностранными производителями
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
                        Связаться с Нами
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./IMG/slider/4.jpg" alt="Четвертый слайд">
                <div class="carousel-caption d-md-block">
                    <div class="slider__title">
                        POYTAXT GROUP
                    </div>
                    <div class="slider__text">
                        Специализируемся на оптовых поставках бумаги, картона и других видов целлюлозно-бумажной
                        продукции, сотрудничая с крупнейшими иностранными производителями
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
                        Связаться с Нами
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section id="c" class="about">
        <div class="container">
            
            <div class="about__inner">
                <div class="about__inner-part1">
                    <div class="about__title">
                        О нас
                    </div>
                    <div class="about__text">
                        <p>
                            Наша компания была образована в 2006 году, и уже на протяжении 16 лет активно
                            занимается поставками и торговлей картонно-бумажной продукции, в основном в упаковочной 
                            и полиграфической промышленности Узбекистана. 
                        </p>
                        <p>
                            В 2014 году мы начали производство флаторезки; сегодня мы производим более 500 тонн бумаги и картона в месяц.
                        </p>
                        <p>
                            Нашим основным конкурентным преимуществом является создание новых торговых каналов 
                            в Узбекистане для производителей целлюлозы и бумаги. Представляем интересы таких крупных 
                            компаний как: Mondi Сыктывкар (Россия), Архангельский АЦБК (Россия), 
                            KOTKAMILLS OY (Финляндия) на территории Узбекистана.
                        </p>
                    </div>
                </div>
                <div class="inner__about">
                    <div class="section1">
                        <div class="about__section1">
                            <p class="about__title">200</p>
                            <p class="about__text xc">и более позиций</p>
                            <p class="about__text at">в ассоритименте</p>
                        </div>
                        <div class="about__section2">
                            <p class="about__title">70</p>
                            <p class="about__text">сотрудников</p>
                        </div>
                    </div>
                    <div class="section2">
                        <div class="about__section1">
                            <p class="about__title">2000</p>
                            <p class="about__text">и более продукции</p>
                        </div>
                        <div class="about__section2">
                            <p class="about__title">7000</p>
                            <p class="about__text">м.кв (склад)</p>
                        </div>
                    </div>
                </div>  
            </div>
            
        </div>
        </div>
    </section>
    <section class="about1">
        <div class="container">
            <div class="info">
                    <div class="info-inner">
                        <p class="about__title">800</p>
                        <p class="about__text xc">и свыше покупателей</p>
                        <p class="about__text">16 лет опыта</p>
                    </div>
                    <div class="info-inner info2500" style="width: 320px;" >
                        <p class="about__title">25000</p>
                        <p class="about__text xc">Тн/год поставки целлюлозно-</p>
                        <p class="about__text">бумажной продукции</p>
                    </div>
                    <div class="info-inner info22" style="width: 200px;">
                        <p class="about__title">2</p>
                        <p class="about__text">флаторезки</p>
                    </div>
                    <div class="info-inner">
                        <p class="about__title">1</p>
                        <p class="about__text">бобинорезка</p>
                    </div>
            </div>
        </div>
    </section>
    <section class="timeline">
        <div class="container">
            <div class="timeline__top">
                <div class="timeline__title-box">
                    <div class="timeline__title">
                        История Развития
                    </div>
                    <div class="timeline__text">
                        Представляем график роста нашей компании с момента образования до сих пор. 
                    </div>
                </div>
            </div>
           <div>
            <div class="abc">
                <div class="a3">
                    <h2><b>2019</b> год</h2>
                    <p>Поставки целлюлозно-бумажной продукции</p>
                    <h4><b>15 000</b> тонн/год</h4>
                    <p>Количество сотрудников <b>55</b> человек</p>
                </div>
                <div class="a1">
                    <h2><b>2016</b> год</h2>
                    <p>Строительство нового склада. Площадь:</p>
                    <h4><b></b>3 000</b> кв.м</h4>
                    <p>Поставки целлюлозно-бумажной продукции</p>
                    <h4><b></b>7 250</b> тонн/год</h4>
                    <p>Количество сотрудников <b>40</b> человек</p>
                </div>
                <div class="a2">
                    <h2><b>2012</b> год</h2>
                    <p>Приобретение склада с доступом к железнодорожной ветке. <br>Создание таможенного склада.</p>
                    <h4><b></b>800</b> кв.м</h4>
                    <p>Поставки целлюлозно-бумажной продукции</p>
                    <h4><b></b>1 000</b> тонн/год</h4>
                    <p>Количество сотрудников <b>20</b> человек</p>
                </div>
                <div class="a1">
                  <h2> <b>2007</b> год </h2>
                    <p>Компания активно участвует в поставках и торговле картонными и бумажными изделиями</p>
                    <h4><b></b>100</b> тонн/год</h4> 
                    <p>Упановочной и полиграфической промышленности Узбекистана</p>
                    <p>Количество сотрудников <b>3</b> человека</p>

                </div>
            </div> 
            <div class="abcd">
                
                <div class="a31">
                    <h2><b>2010</b> год</h2>
                    <p>Поставки целлюлозно-бумажной продукции</p>
                    <h4><b>250</b> тонн/год</h4>
                    <p>Количество сотрудников <b>10</b> человек</p>
                </div><div class="a4">
                    <h2><b>2014</b> год</h2>
                    <p>Строительство нового склада. Площадь:</p>
                    <h4><b>1 500</b> кв.м</h4>
                    <p>Приобретена первая флаторезка. Количество порезанной продукции:</p>
                    <h4><b>600</b> тонн/год</h4>
                    <p>Поставки целлюлозно-бумажной продукции</p>
                    <h4><b>2 600</b> тонн/год</h4>
                    <p>Количество сотрудников <b>30</b> человек</p>

                </div><div class="a5">
                    <h2><b>2018</b> год</h2>
                    <p>Приобретена вторая флаторезка. Количество порезанной продукции:</p>
                    <h4><b>1 800</b> тонн/год</h4>
                    <p>Приобритение гильотины. <br>Поставки целлюлозно-бумажной продукции: </p>
                    <h4><b>12 000</b> тонн/год</h4>
                    <p>Количество сотрудников <b>50</b> человек</p>

                </div>
                <div class="a6">
                    <h2><b>2022</b> год</h2>
                    <p>Строительство нового склада. Общая площадь складов:</p>
                    <h4><b>7 000</b> кв.м</h4>
                    <p>Приобритение оборудования для продольной резки бумаги. <br>Поставки целлюлозно-бумажной продукции: </p>
                    <h4><b>25 000</b> тонн/год</h4>
                    <p>Количество сотрудников <b>70</b> человек</p>

                </div>
            </div></div>
        </div>
    </section>
  

    <section id="a" class="service">
        <div class="container">
            <div class="service__top">
                <div class="service__title-box">
                    <div class="service__title">
                        Наши товары
                    </div>
                    <div class="service__text">
                        Представляем к вашему вниманию список номенклатур с которыми мы активно работаем в настоящее время:
                    </div>
                </div>
            </div>
            <div class="service__items">
                <div class="service__item img8" style="border-radius: 15px;">
                    <!-- <img src="../IMG/service/бумага.png" alt=""> -->
                    <div class="service__item-title">
                        Самоклейка
                    </div>
                </div>
                <br>
                <div class="service__item img5" style="border-radius: 15px;">
                    <div class="service__item-title">
                        Мелованная бумага
                    </div>
                </div> 
                <br>
                <div class="service__item img9" style="border-radius: 15px;">
                    <div class="service__item-title">
                        Офсетная бумага
                    </div>
                </div>
            </div>
            <br>
            <div class="service__items">
                <div class="service__item img4" style="border-radius: 15px;">
                    <div class="service__item-title">
                        Крафтлайнер
                    </div>
                </div>
                <br>
                <div class="service__item img3" style="border-radius: 15px;">
                    <div class="service__item-title">
                        Крафт бумага
                    </div>
                </div>
                <br>
                <div class="service__item img2" style="border-radius: 15px;">
                    <div class="service__item-title">
                        Картон
                    </div>
                </div> 
            </div>
            <br>
            <div class="service__items">
                <div class="service__item img7" style="border-radius: 15px;">
                    <div class="service__item-title">
                        Этикетка 
                    </div>
                </div>
                <br>
                <div class="service__item img1" style="border-radius: 15px;">
                    <div class="service__item-title">
                        Бумага основа
                    </div>
                </div> 
                <br>
                <div class="service__item img6" style="border-radius: 15px;">
                    <div class="service__item-title">
                        Тестлайнер монди
                    </div>
                </div>
                <br>
            </div>
        </div>
    </section>
    <section id="b" class="service">
        <div class="container">
            <div class="service__top">
                <div class="service__title-box">
                    <div class="service__title">
                        Наши услуги
                    </div>
                    <div class="service__text">
                        Далее представлены услуги которые предоставляет наша компания.
                    </div>
                </div>
            </div>
            <div class="service__items">
                <div class="service__item img10" style="border-radius: 15px;">
                    <div class="service__item-title">
                        Флатовка картона и бумаги
                    </div>
                </div>
                <br>
                <div class="service__item img11" style="border-radius: 15px;">
                    <div class="service__item-title">
                        Доставка товара по городу Ташкент
                    </div>
                </div>
                <br>
                <div class="service__item img12" style="border-radius: 15px;">
                    <div class="service__item-title">
                        Продольная резка рулонов картона и бумаги
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="advant">
        <div class="container">
            <div class="advant__inner">
                <div class="advant-item ai1">
                    <img src="./IMG/logo/1.png" class="i1" alt="">
                    <div class="advant__title" style="width: 150%;">
                        Mondi
                    </div>
                </div>
                <div class="advant-item ai1">
                    <img src=".\IMG\logo\2.png" class="i2" alt="">
                    <div class="advant__title" style="width: 150%;">
                        Архангельск ЦБК
                    </div>
                </div>
                <div class="advant-item">
                    <img src=".\IMG\logo\3.png" class="i3" alt="">
                    <div class="advant__title">
                        KOTKAMILLS
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="adv">
        <div class="container">
            <div class="adv__all">
                    <div class="heading__top">
                        <div class="heading__title-box">
                            <div class="heading__title">
                                Наши Преимущества
                            </div>
                            <div class="heading__text">
                                Благодаря нашим возможностям <br>
                                Ваша компания приобретает ряд перимуществ, а именно:
                            </div>
                        </div>
                    </div>
                <div class="adv__content">
                    <div class="adv__a">
                        <img src="./IMG/icons/icons8-гарантия-50.png" alt="">
                        <p class="adv__text">Гарантированные объемы на рынке Узбекистана</p>
                        <div class="adv__imag">
                            
                        </div>
                    </div>
                    <div class="adv__a">
                        <img src="./IMG/icons/icons8-дата-оплаты-50.png" alt="">
                        <p class="adv__text">Своевременные оплаты</p>
                        <div class="adv__imag">
                            
                        </div>
                    </div>
                    <div class="adv__a">
                        <img src="./IMG/icons/icons8-карточка-контакта-50.png" alt="">
                        <p class="adv__text">Оперативность сотрудников</p>
                        <div class="adv__imag">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="d" class="news">
            <div class="container">
                <div class="news__top">
                    <div class="news__title-box">
                        <div class="news__title">
                            Команда руководителей
                        </div>
                        <div class="news__text">
                            Мы с гордостью представляем вам команду выдающихся руководителей компании с которыми мы уже работаем более 10 лет. 
                        </div>
                    </div>
                </div>
                <div class="news__inner">
                    <div class="workers">
                        <div class="news__images">
                            <img src="IMG/staff/малика.png" alt="" style="width: 243px;  border-start-end-radius: 8px; border-start-start-radius: 8px; border-end-start-radius: 4px; border-end-end-radius: 4px;">
                        </div>
                        <div class="news__blog-title">
                            Абдусаматов Бегзод
                        </div>
                        <div class="news__blog-text">
                            Описание руководителей
                        </div>
                    </div>
                    <div class="workers">
                        <div class="news__images">
                            <img src="IMG/staff/бегзод.png" alt="" style="width: 243px;  border-start-end-radius: 8px; border-start-start-radius: 8px; border-end-start-radius: 4px; border-end-end-radius: 4px;">
                        </div>
                        <div class="news__blog-title">
                            Султанмурадова Малика
                        </div>
                        <div class="news__blog-text">
                            Описание руководителей
                        </div>
                    </div>
                    <div class="workers">
                        <div class="news__images">
                            <img src="IMG/staff/малика.png" alt="" style="width: 243px;  border-start-end-radius: 8px; border-start-start-radius: 8px; border-end-start-radius: 4px; border-end-end-radius: 4px;">
                        </div>
                        <div class="news__blog-title">
                            Исмоилов Джасур
                        </div>
                        <div class="news__blog-text">
                            Описание руководителей
                        </div>
                    </div>
                    <div class="workers">
                        <div class="news__images">
                            <img src="IMG/staff/бегзод.png" alt="" style="width: 243px;  border-start-end-radius: 8px; border-start-start-radius: 8px; border-end-start-radius: 4px; border-end-end-radius: 4px;">
                        </div>
                        <div class="news__blog-title">
                            Закиров Маруф
                        </div>
                        <div class="news__blog-text">
                            Описание руководителей
                        </div>
                    </div> 
                </div>
            </div>
    </section>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <section  class="cycle">
                <div class="container">
                    <div class="cycle__top">
                        <div class="cycle__title-box">
                            <div class="cycle__title">
                                Цикл обработки претензий
                                
                            </div>
                            <div class="cycle__text">
                                
                            </div>
                        </div>
                        <button class="btn1" id="active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Цикл покупки товаров
                          </button>
                    </div>
                    <div class="cycle__prob">
                        <div class="cycle__item1">
                            <!-- <div class="cycle__circle1"><img src="./IMG/icons/icons8-длинная-стрелка-вниз-30.png" alt=""></div> -->
                            <div class="cycle__images1">
                                <img src="IMG/icons/icons8-высокая-важность-50.png" alt="">
                            </div>
                            <h4 class="cycle__blog-title3">
                                Выявление проблемы (граммаж/не соответствие формата)
                            </h4>
                        </div>
                        <div class="cycle__item1">
                            <!-- <div class="cycle__circle1"><img src="./IMG/icons/icons8-длинная-стрелка-вниз-30.png" alt=""></div> -->
                            <div class="cycle__images1">
                                <img src="IMG/icons/icons8-правила-и-условия-50.png" alt="">
                            </div>
                            <h4 class="cycle__blog-title1">
                                Согласование условий решения рекламации  
                            </h4>
                        </div>
                   
                 <div class="cycle__inner c_inner1">
                        <div class="cycle__item2">
                            
                            <div class="cycle__images1">
                                <img src="IMG/icons/счет-фактура.png" alt="">
                            </div>
                            <h4 class="cycle__blog-title2">
                                Возврат денежных средств
                            </h4>
                        </div>
                        <div class="cycle__item2">
                            <div class="cycle__images">
                                <img src="IMG/icons/заключение-договора.png" alt="" >
                            </div>
                            <h4 class="cycle__blog-title2">
                                Возмещение производственных издержек покупателя
                            </h4>
                        </div>
                        <div class="cycle__item2">
                           
                            <div class="cycle__images1">
                                <img src="IMG/icons/deal.png" alt="">
                            </div>
                            <h4 class="cycle__blog-title2">
                                Замена товара
                            </h4>
                        </div>
                    </div> 
                    <div class="cycle__item1">
                        <!-- <div class="cycle__circle1"><img src="./IMG/icons/icons8-длинная-стрелка-вниз-30.png" alt=""></div> -->
                        <div class="cycle__images1" >
                            <img src="IMG/icons/icons8-обратная-связь-50.png" alt="">
                        </div>
                        <h4 class="cycle__blog-title1">
                            Получение обратной связи - 
                            Завершение бизнес процесса
                        </h4>
                    </div>
                </div>
                </div>
            </section>
        </div>
      </div>
      <section class="cycle" id="omg">
        <div class="container">
            <div class="cycle__top">
                <div class="cycle__title-box">
                    <div class="cycle__title">
                        Цикл покупки товаров 
                        
                    </div>
                    <div class="cycle__text">
                        
                    </div>
                </div>
                <a class="btn1" id="hider" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Цикл обработки претензий
                  </a>
            </div>
            <div class="cycle__inner">
                <div class="cycle__item">
                    <div class="cycle__circle">1</div>
                    <div class="cycle__images">
                        <img src="IMG/icons/request (2).png" alt="">
                    </div>
                    <h4 class="cycle__blog-title">
                        Получение запроса от покупателя
                    </h4>
                </div>
                <div class="cycle__item">
                    <div class="cycle__circle">2</div>
                    <div class="cycle__images">
                        <img src="IMG/icons/order.png" alt="" >
                    </div>
                    <h4 class="cycle__blog-title">
                        Согласование условий сделки 
                    </h4>
                </div>
                <div class="cycle__item">
                    <div class="cycle__circle">3</div>
                    <div class="cycle__images" >
                        <img src="IMG/icons/icons8-корзина-с-деньгами-80.png" alt="">
                    </div>
                    <h4 class="cycle__blog-title">
                        Создание заказа покупателя в системе
                    </h4>
                </div>
            </div>
            <div class="cycle__inner c_inner">
                <div class="cycle__item">
                    <div class="cycle__circle">4</div>
                    <div class="cycle__images">
                        <img src="IMG/icons/счет-фактура.png" alt="" class="cy_img">
                    </div>
                    <h4 class="cycle__blog-title">
                        Поступление оплаты 
                    </h4>
                </div>
                <div class="cycle__item">
                    <div class="cycle__circle">5</div>
                    <div class="cycle__images">
                        <img src="IMG/icons/заключение-договора.png" alt="">
                    </div>
                    <h4 class="cycle__blog-title">
                        Оформление документов (5 минут)
                    </h4>
                </div>
                <div class="cycle__item">
                    <div class="cycle__circle">6</div>
                    <div class="cycle__images">
                        <img src="IMG/icons/deal.png" alt="">
                    </div>
                    <h4 class="cycle__blog-title">
                        Получение обратной связи
                    </h4>
                </div>
            </div>
        </div>
    </section>

    <section  class="news">
        <div class="container">
            <div class="news__top">
                <div class="news__title-box">
                    <div class="news__title">
                        Новости Компании
                    </div>
                    <div class="news__text">
                        
                    </div>
                </div>
                
            </div>
            <div class="news__inner blog__inner">
                <div class="news__slider">
                    <div class="news__slider-inner">
                        <div class="news__slider-item">
                            <div class="news__slider-title">
                                Банкротство и ликвидация предприятия в Украине
                            </div>
                            <div class="news__slider-text">
                                «На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов
                                имеющих специализации в отдельных областях права. На сегодняшний день, коллектив
                                компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных
                                областях права. На сегодняшний день, коллектив компании объединяет
                                высокопрофессиональных экспертов имеющих специализации в отдельных областях права...»
                            </div>
                            <div class="news__slider-author">
                                Андрей Ворошилов, генеральный д иректор компании Bankom
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inner__news ">
                    <div href="#" class="news__blog">
                        <div class="blog__images">
                            <img src="IMG/news-1.jpg" alt="">
                            <div class="news__date">03.04</div>
                        </div>
                        <div class="news__blog-title">
                            Сотрудники
                        </div>
                        <div class="news__blog-text">
                            На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих
                            специализации в отдельных областях права...»
                        </div>
                    </div>
                    <div href="#" class="news__blog">
                        <div class="blog__images">
                            <img src="IMG/news-2.jpg" alt="">
                            <div class="news__date">03.04</div>
                        </div>
                        <div class="news__blog-title">
                            Новость компании
                        </div>
                        <div class="news__blog-text">
                            На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих
                            специализации в отдельных областях права...»
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="form">
        <div class="container">
            <div class="form__inner">
                <div class="form__content">
                    <div class="form__title-box">
                        <div class="form__title">
                            Заказать обратный звонок
                        </div>
                        <div class="form-text">
                        </div>
                    </div>
                    <div class="form__box">
                        <form action="./mail/totelegram.php" method="POST">
                            <div class="form__box-inner">
                                <div class="form__box-left">
                                    <label>
                                        Ваша почта
                                        <input type="email" name="email">
                                      </label>
                                    <label>
                                        Контактный телефон
                                        <input type="text" name="phone">
                                    </label>
                                    <label>
                                        ФИО
                                        <input type="text" name="name">
                                    </label>
                                </div>
                                <div class="form__box-right">
                                    <label>
                                        Сообщение
                                        <textarea name="content"></textarea>
                                    </label>
                                    <button class="default-btn" type="submit">Получить консультацию</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer" id="e">
        <div class="footer__content">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__info">
                        <div class="footer__title">
                            Poytaxt Group
                        </div>
                        <div class="footer__text">
                            Специализируемся на оптовых поставках бумаги, картона и других видов целлюлозно-бумажной продукции, сотрудничая с крупнейшими иностранными производителями.
                        </div>
                        <ul class="footer__list">
                            <li> <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn " href="#">Связаться с нами
                            </a></li>
                            <li><a class="footer__phone" href="tel:998 71 250 30 01">+998 71 250 30 01</a></li>
                            <li><a href="#">samjdt7@gmail.com</a></li>
                            <li><a class="footer__address" href="#">1 Oltin Vodiy St, Tashkent 100044, Uzbekistan</a></li>
                        </ul>
                    </div>
                    <div class="footer__map">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999.226192437348!2d69.23744935122609!3d41.26041071171794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae61a26285d447%3A0xc22ef18853111f59!2sPoytaxt%20Group!5e0!3m2!1sen!2s!4v1657088854978!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div id="modal">
        <form action="./mail/totelegram.php"
        method="POST">
        <label>
            Ваше имя
            <input type="name" name="name">
          </label>
          <label>
            Ваше телефон
            <input type="text" name="phone">
          </label>
            <input type="submit" value="Отправить">
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/jquery.fancybox.min.js"></script>
    <script src="JS/slick.min.js"></script>
    <script src="JS/jquery.formstyler.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="JS/lang.js"></script>
    <script src="JS/main.js"></script>
    <script>
        // Здесь не важно, как мы скрываем текст.
        // Также можно использовать style.display:
        document.getElementById('hider').onclick = function() {
          document.getElementById('omg').hidden = true;
        }
        document.getElementById('active').onclick = function() {
          document.getElementById('omg').hidden = false;
        }
      </script>
</body>

</html>