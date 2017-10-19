<?php

/* @var $this yii\web\View */

use Yii;

/* @var $prices array */
/* @param $prices array */

$this->title = 'Apple';
?>

<div class="main_block">
    <div class="container">
        <div class="main_slider">
            <div class="block">
                <div class="centered">
                    <div class="clr"></div>
                    <div class="iph"></div>
                    <a class="down" href="#catalog">Купить со скидкой</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="content_block" id="catalog" name="catalog">
    <div class="container first">
        <div class="name">
            <div id="catalog-id">Каталог продукции</div>
            <div class="name-child">Скидки до конца недели. Успей купить по акции.</div>
        </div>
        <div class="select-phone">
            <a href="#phone-8" class="block scrollto">
                <img src="/uploads/category/x250/e4afb531eae718199cca4dae544f8abc.jpg" alt="Купить iPhone 8"
                     title="Купить iPhone 8"/>
                <span>iPhone 8</span>
                от <?= $prices['iPhone8']['64Gb']['space-gray']['price1'] ?> руб.
                <br>
                <button class="btn-v">Выбрать</button>
            </a>

            <a href="#phone-8-plus" class="block scrollto">
                <img src="/uploads/category/x250/e4afb531eae718199cca4dae544f8abc.jpg" alt="Купить iPhone 8 Plus"
                     title="Купить iPhone 8 Plus"/>
                <span>iPhone 8 Plus</span>
                от <?= $prices['iPhone8Plus']['64Gb']['space-gray']['price1'] ?> руб.
                <br>
                <button class="btn-v">Выбрать</button>
            </a>

            <a href="#phone-7" class="block scrollto">
                <img src="/uploads/category/x250/bbad48acb74d77cd7587c46fa1b332fb.jpg" alt="Купить iPhone 7"
                     title="Купить iPhone 7"/>
                <span>iPhone 7</span>
                от <?= $prices['iPhone7']['32Gb']['jet-black']['price1'] ?> руб.
                <br>
                <button class="btn-v">Выбрать</button>
            </a>

            <a href="#phone-7-plus" class="block scrollto">
                <img src="/uploads/category/x250/c2176883977d9bdd03041770ef31cde6.jpg"
                     alt="Купить iPhone 7 plus"
                     title="Купить iPhone 7 plus"/>
                <span>iPhone 7 plus</span>
                от <?= $prices['iPhone7plus']['32Gb']['jet-black']['price1'] ?> руб.
                <br>
                <button class="btn-v">Выбрать</button>
            </a>
            <a href="#phone-SE" class="block scrollto">
                <img src="/uploads/category/x250/1e702de4369bb2567f349ca4dfd3bf35.jpg" alt="Купить iPhone SE"
                     title="Купить iPhone SE"/>
                <span>iPhone SE</span>
                от <?= $prices['iPhoneSE']['16Gb']['space-gray']['price1'] ?> руб.
                <br>
                <button class="btn-v">Выбрать</button>
            </a>
            <a href="#phone-6s" class="block scrollto" style="width: auto">
                <img src="/uploads/category/x250/ca4dae544f8ae4afb53199cbc1eae718.jpg" alt="Купить iPhone 6S"
                     title="Купить iPhone 6S"/>
                <span>iPhone 6S</span>
                от <?= $prices['iPhone6s']['16Gb']['space-gray']['price1'] ?> руб.
                <br>
                <button class="btn-v">Выбрать</button>
            </a>
            <a href="#phone-6s-plus" class="block scrollto" style="width: auto">
                <img src="/uploads/category/x250/4317c2894aafa3a058208477e276fb55.jpg"
                     alt="Купить iPhone 6S plus"
                     title="Купить iPhone 6S plus"/>
                <span>iPhone 6S plus</span>
                от <?= $prices['iPhone6sPlus']['16Gb']['space-gray']['price1'] ?> руб.
                <br>
                <button class="btn-v">Выбрать</button>
            </a>
            <a href="#phone-6" class="block scrollto">
                <img src="/uploads/category/x250/0977c2303bfb87e76473cfa2638dc56c.jpg" alt="Купить iPhone 6"
                     title="Купить iPhone 6"/>
                <span>iPhone 6</span>
                от <?= $prices['iPhone6']['16Gb']['space-gray']['price1'] ?> руб.
                <br>
                <button class="btn-v">Выбрать</button>
            </a>
            <a href="#phone-6-plus" class="block scrollto">
                <img src="/uploads/category/x250/1479ebb99f8f7b44114f5674d8b3ee41.jpg"
                     alt="Купить iPhone 6 plus"
                     title="Купить iPhone 6 plus"/>
                <span>iPhone 6 plus</span>
                от <?= $prices['iPhone6plus']['16Gb']['space-gray']['price1'] ?> руб.
                <br>
                <button class="btn-v">Выбрать</button>
            </a>
        </div>
    </div>

    <div class="phone-list">
        <div class="background-block phone" id="phone-8">
            <div class="container" id="iphone-8">
                <div class="block-phone">
                    <div class="left-side">
                        <div class="model">
                            <a href="#phone-8">iPhone 8 </a>
                        </div>
                        <div class="image">
                            <img src="/uploads/params/sources/d99691a8f2bb8089b025f88eff6c5111.jpg"
                                 alt="Купить iPhone 8 32Gb jet black" title="Купить iPhone 8 32Gb jet black"/>
                        </div>
                        <div class="info-phone">
                            <ul>
                                <li><a href="#pack-set-iphone5s" data-cat_id="25"
                                       class="btn-k pack-set fancybox">Комплектация</a>
                                </li>
                                <li><a href="#characteristics-iphone5s" data-cat_id="25"
                                       class="btn-k characteristics_d fancybox">Характеристики</a></li>
                            </ul>
                            <div class="characteristics_hidden">
                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Связь</a></dt>
                                        <dd style="display:block;">
                                            <ul>
                                                <li>Диапазоны GSM : 850, 900, 1800, 1900</li>
                                                <li>Диапазоны UMTS : 850, 900, 1700, 1900, 2100</li>
                                                <li>Диапазоны LTE : 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25,
                                                    26, 27, 28, 29, 30, 38, 39, 40, 41
                                                </li>
                                                <li>Доступ в Интернет : GPRS , EDGE , 3G , 4G</li>
                                                <li>Bluetooth : 4.2</li>
                                                <li>Wi-Fi (802.11) : a, b , g , n , ac,&nbsp;с технологией MIMO, 2.4
                                                    ГГц, 5 ГГц
                                                </li>
                                                <li>NFC : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Дисплей</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип дисплея : Retina HD с технологией 3D Touch</li>
                                                <li>Диагональ дисплея (дюйм) : 4.7</li>
                                                <li>Разрешение дисплея (пикс) : 1334x750</li>
                                                <li>Количество цветов дисплея : 16 млн.</li>
                                                <li>Сенсорный дисплей : да</li>
                                                <li>Тип сенсорного дисплея : емкостный</li>
                                                <li>Поддержка Multitouch : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Питание</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип аккумулятора : Литий-ионный</li>
                                                <li>Время разговора в сети 3G (ч) : 14</li>
                                                <li>Время ожидания (ч) : 240</li>
                                                <li>Воспроизведение музыки (ч) : 40</li>
                                                <li>Воспроизведение видео (ч) : 13</li>
                                                <li>Время работы в интернете через сотовую сеть (ч) : 10</li>
                                                <li>Время работы в интернете через Wi-Fi (ч) : 11</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>

                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Процессор</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Процессор : Apple A10 Fusion + сопроцессор движения M10</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Фотокамера</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Основная камера (Мп) : 12, f/1.8</li>
                                                <li>Разрешение фотосъемки (пикс) : 4000 x 3000</li>
                                                <li>Стабилизация изображения : цифровая</li>
                                                <li>Автофокус : да</li>
                                                <li>Вспышка : True Tone</li>
                                                <li>Видеозапись : да</li>
                                                <li>Разрешение видеосъемки (пикс) : 3840 x 2160</li>
                                                <li>Частота кадров видеосъемки : 30</li>
                                                <li>Фронтальная камера (Мп) : 5</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Тип корпуса/SIM карта</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип SIM-карты : nano-SIM</li>
                                                <li>Высота (мм) : 138.3</li>
                                                <li>Ширина (мм) : 671</li>
                                                <li>Толщина (мм) : 7.1</li>
                                                <li>Вес (г) : 138</li>
                                                <li>Стандарт защиты: IP67</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="select-color">
                            <div class="label-name">Цвет</div>
                            <div class="color-block space-gray selected" data-param-color="Серый космос"
                                 valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/d99691a8f2bb8089b025f88eff6c5111.jpg">
                                <div style="position:relative;">
                                    <span style="background: #a3a3a3" class="color_item"></span>
                                    <span class="color-t">Серый космос</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Серебристый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/silver.jpg">
                                <div style="position:relative;">
                                    <span style="background: #e9e9e9" class="color_item"></span>
                                    <span class="color-t">Серебристый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Золотистый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/gold.jpg">
                                <div style="position:relative;">
                                    <span style="background: #f4bf88" class="color_item"></span>
                                    <span class="color-t">Золотистый</span>
                                </div>
                            </div>
                        </div>
                        <div class="select-memory">
                            <div class="label-name">Объем памяти</div>
                            <div class="memory-block selected" data-size-id="4" valsmemory="" valmemory="">
                                64 ГБ
                            </div>
                            <div class="memory-block" data-size-id="6" valsmemory="" valmemory="">
                                256 ГБ
                            </div>
                        </div>
                        <div class="price">
                            <div class="label-name">Торопитесь! Скидка до конца недели. Гарантия 1 год. Бесплатный
                                тест-драйв.
                            </div>
                            <div class="standart-price" id="price">
                                <span><?= $prices['iPhone8']['64Gb']['space-gray']['price2'] ?></span> руб.
                            </div>
                            <div class="sale-price">
                                <span><?= $prices['iPhone8']['64Gb']['space-gray']['price1'] ?></span> руб.
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="hidden" name="category_id" value="8">
                            <input type="hidden" name="prod_id" value="180">
                            <a href="#bay-click" class="bay-click fancybox"
                               onclick="yaCounter46128996.reachGoal('ORDER'); return true;">Заказать сейчас </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="background-block phone" id="phone-8-plus">
            <div class="container" id="iphone-8">
                <div class="block-phone">
                    <div class="left-side">
                        <div class="model">
                            <a href="#phone-8">iPhone 8 Plus</a>
                        </div>
                        <div class="image">
                            <img src="/uploads/params/sources/d99691a8f2bb8089b025f88eff6c5111.jpg"
                                 alt="Купить iPhone 8 32Gb Plus jet black" title="Купить iPhone 8 32Gb jet black"/>
                        </div>
                        <div class="info-phone">
                            <ul>
                                <li><a href="#pack-set-iphone5s" data-cat_id="25"
                                       class="btn-k pack-set fancybox">Комплектация</a>
                                </li>
                                <li><a href="#characteristics-iphone5s" data-cat_id="25"
                                       class="btn-k characteristics_d fancybox">Характеристики</a></li>
                            </ul>
                            <div class="characteristics_hidden">
                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Связь</a></dt>
                                        <dd style="display:block;">
                                            <ul>
                                                <li>Диапазоны GSM : 850, 900, 1800, 1900</li>
                                                <li>Диапазоны UMTS : 850, 900, 1700, 1900, 2100</li>
                                                <li>Диапазоны LTE : 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25,
                                                    26, 27, 28, 29, 30, 38, 39, 40, 41
                                                </li>
                                                <li>Доступ в Интернет : GPRS , EDGE , 3G , 4G</li>
                                                <li>Bluetooth : 4.2</li>
                                                <li>Wi-Fi (802.11) : a, b , g , n , ac,&nbsp;с технологией MIMO, 2.4
                                                    ГГц, 5 ГГц
                                                </li>
                                                <li>NFC : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Дисплей</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип дисплея : Retina HD с технологией 3D Touch</li>
                                                <li>Диагональ дисплея (дюйм) : 4.7</li>
                                                <li>Разрешение дисплея (пикс) : 1334x750</li>
                                                <li>Количество цветов дисплея : 16 млн.</li>
                                                <li>Сенсорный дисплей : да</li>
                                                <li>Тип сенсорного дисплея : емкостный</li>
                                                <li>Поддержка Multitouch : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Питание</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип аккумулятора : Литий-ионный</li>
                                                <li>Время разговора в сети 3G (ч) : 14</li>
                                                <li>Время ожидания (ч) : 240</li>
                                                <li>Воспроизведение музыки (ч) : 40</li>
                                                <li>Воспроизведение видео (ч) : 13</li>
                                                <li>Время работы в интернете через сотовую сеть (ч) : 10</li>
                                                <li>Время работы в интернете через Wi-Fi (ч) : 11</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>

                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Процессор</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Процессор : Apple A10 Fusion + сопроцессор движения M10</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Фотокамера</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Основная камера (Мп) : 12, f/1.8</li>
                                                <li>Разрешение фотосъемки (пикс) : 4000 x 3000</li>
                                                <li>Стабилизация изображения : цифровая</li>
                                                <li>Автофокус : да</li>
                                                <li>Вспышка : True Tone</li>
                                                <li>Видеозапись : да</li>
                                                <li>Разрешение видеосъемки (пикс) : 3840 x 2160</li>
                                                <li>Частота кадров видеосъемки : 30</li>
                                                <li>Фронтальная камера (Мп) : 5</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Тип корпуса/SIM карта</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип SIM-карты : nano-SIM</li>
                                                <li>Высота (мм) : 138.3</li>
                                                <li>Ширина (мм) : 671</li>
                                                <li>Толщина (мм) : 7.1</li>
                                                <li>Вес (г) : 138</li>
                                                <li>Стандарт защиты: IP67</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="select-color">
                            <div class="label-name">Цвет</div>
                            <div class="color-block space-gray selected" data-param-color="Серый космос"
                                 valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/d99691a8f2bb8089b025f88eff6c5111.jpg">
                                <div style="position:relative;">
                                    <span style="background: #a3a3a3" class="color_item"></span>
                                    <span class="color-t">Серый космос</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Серебристый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/silver.jpg">
                                <div style="position:relative;">
                                    <span style="background: #e9e9e9" class="color_item"></span>
                                    <span class="color-t">Серебристый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Золотистый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/gold.jpg">
                                <div style="position:relative;">
                                    <span style="background: #f4bf88" class="color_item"></span>
                                    <span class="color-t">Золотистый</span>
                                </div>
                            </div>
                        </div>
                        <div class="select-memory">
                            <div class="label-name">Объем памяти</div>
                            <div class="memory-block selected" data-size-id="4" valsmemory="" valmemory="">
                                64 ГБ
                            </div>
                            <div class="memory-block" data-size-id="6" valsmemory="" valmemory="">
                                256 ГБ
                            </div>
                        </div>
                        <div class="price">
                            <div class="label-name">Торопитесь! Скидка до конца недели. Гарантия 1 год. Бесплатный
                                тест-драйв.
                            </div>
                            <div class="standart-price" id="price">
                                <span><?= $prices['iPhone8Plus']['64Gb']['space-gray']['price2'] ?></span> руб.
                            </div>
                            <div class="sale-price">
                                <span><?= $prices['iPhone8Plus']['64Gb']['space-gray']['price1'] ?></span> руб.
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="hidden" name="category_id" value="8-plus">
                            <input type="hidden" name="prod_id" value="186">
                            <a href="#bay-click" class="bay-click fancybox"
                               onclick="yaCounter46128996.reachGoal('ORDER'); return true;">Заказать сейчас </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="background-block phone" id="phone-7">
            <div class="container" id="iphone-7">
                <div class="block-phone">
                    <div class="left-side">
                        <div class="model">
                            <a href="#phone-7">iPhone 7 </a>
                        </div>
                        <div class="image">
                            <img src="/uploads/params/sources/c327be9244c42ebc982ade6574d7cd67.png"
                                 alt="Купить iPhone 7 32Gb jet black" title="Купить iPhone 7 32Gb jet black"/>
                        </div>
                        <div class="info-phone">
                            <ul>
                                <li><a href="#pack-set-iphone5s" data-cat_id="25"
                                       class="btn-k pack-set fancybox">Комплектация</a>
                                </li>
                                <li><a href="#characteristics-iphone5s" data-cat_id="25"
                                       class="btn-k characteristics_d fancybox">Характеристики</a></li>
                            </ul>
                            <div class="characteristics_hidden">
                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Связь</a></dt>
                                        <dd style="display:block;">
                                            <ul>
                                                <li>Диапазоны GSM : 850, 900, 1800, 1900</li>
                                                <li>Диапазоны UMTS : 850, 900, 1700, 1900, 2100</li>
                                                <li>Диапазоны LTE : 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25,
                                                    26, 27, 28, 29, 30, 38, 39, 40, 41
                                                </li>
                                                <li>Доступ в Интернет : GPRS , EDGE , 3G , 4G</li>
                                                <li>Bluetooth : 4.2</li>
                                                <li>Wi-Fi (802.11) : a, b , g , n , ac,&nbsp;с технологией MIMO, 2.4
                                                    ГГц, 5 ГГц
                                                </li>
                                                <li>NFC : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Дисплей</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип дисплея : Retina HD с технологией 3D Touch</li>
                                                <li>Диагональ дисплея (дюйм) : 4.7</li>
                                                <li>Разрешение дисплея (пикс) : 1334x750</li>
                                                <li>Количество цветов дисплея : 16 млн.</li>
                                                <li>Сенсорный дисплей : да</li>
                                                <li>Тип сенсорного дисплея : емкостный</li>
                                                <li>Поддержка Multitouch : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Питание</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип аккумулятора : Литий-ионный</li>
                                                <li>Время разговора в сети 3G (ч) : 14</li>
                                                <li>Время ожидания (ч) : 240</li>
                                                <li>Воспроизведение музыки (ч) : 40</li>
                                                <li>Воспроизведение видео (ч) : 13</li>
                                                <li>Время работы в интернете через сотовую сеть (ч) : 10</li>
                                                <li>Время работы в интернете через Wi-Fi (ч) : 11</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>

                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Процессор</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Процессор : Apple A10 Fusion + сопроцессор движения M10</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Фотокамера</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Основная камера (Мп) : 12, f/1.8</li>
                                                <li>Разрешение фотосъемки (пикс) : 4000 x 3000</li>
                                                <li>Стабилизация изображения : цифровая</li>
                                                <li>Автофокус : да</li>
                                                <li>Вспышка : True Tone</li>
                                                <li>Видеозапись : да</li>
                                                <li>Разрешение видеосъемки (пикс) : 3840 x 2160</li>
                                                <li>Частота кадров видеосъемки : 30</li>
                                                <li>Фронтальная камера (Мп) : 5</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Тип корпуса/SIM карта</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип SIM-карты : nano-SIM</li>
                                                <li>Высота (мм) : 138.3</li>
                                                <li>Ширина (мм) : 671</li>
                                                <li>Толщина (мм) : 7.1</li>
                                                <li>Вес (г) : 138</li>
                                                <li>Стандарт защиты: IP67</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="select-color">
                            <div class="label-name">Цвет</div>
                            <div class="color-block space-gray selected" data-param-color="Черный оникс"
                                 valsprice="15359" valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/c327be9244c42ebc982ade6574d7cd67.png">
                                <div style="position:relative;">
                                    <span style="background: #000000" class="color_item"></span>
                                    <span class="color-t">Черный оникс</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Черный" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/cf0b9c2b5ea3c588d96d1d125aa621d6.png">
                                <div style="position:relative;">
                                    <span style="background: #a3a3a3" class="color_item"></span>
                                    <span class="color-t">Черный</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Серебристый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/44d5d775acd267b5d60da2b8903548ea.png">
                                <div style="position:relative;">
                                    <span style="background: #e9e9e9" class="color_item"></span>
                                    <span class="color-t">Серебристый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Золотистый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/b0ba5944f9110ccb52f8d72b750e2c08.png">
                                <div style="position:relative;">
                                    <span style="background: #f4bf88" class="color_item"></span>
                                    <span class="color-t">Золотистый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Розовое золото" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/1cea16a59fd0755f8549b2bb6a6858cb.png">
                                <div style="position:relative;">
                                    <span style="background: #f0c8c2" class="color_item"></span>
                                    <span class="color-t">Розовое золото</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Красный" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/6aa59bb599842285e1279f0a4e97e015.png">
                                <div style="position:relative;">
                                    <span style="background: #f00" class="color_item"></span>
                                    <span class="color-t">Красный</span>
                                </div>
                            </div>
                        </div>
                        <div class="select-memory">
                            <div class="label-name">Объем памяти</div>
                            <div class="memory-block selected" data-size-id="3" valsmemory="" valmemory="">
                                32 ГБ
                            </div>
                            <div class="memory-block" data-size-id="5" valsmemory="" valmemory="">
                                128 ГБ
                            </div>
                            <div class="memory-block" data-size-id="6" valsmemory="" valmemory="">
                                256 ГБ
                            </div>
                        </div>
                        <div class="price">
                            <div class="label-name">Торопитесь! Скидка до конца недели. Гарантия 1 год. Бесплатный
                                тест-драйв.
                            </div>
                            <div class="standart-price" id="price">
                                <span><?= $prices['iPhone7']['32Gb']['jet-black']['price2'] ?></span> руб.
                            </div>
                            <div class="sale-price">
                                <span><?= $prices['iPhone7']['32Gb']['jet-black']['price1'] ?></span> руб.
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="hidden" name="category_id" value="7">
                            <input type="hidden" name="prod_id" value="173">
                            <a href="#bay-click" class="bay-click fancybox"
                               onclick="yaCounter46128996.reachGoal('ORDER'); return true;">Заказать сейчас </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-block phone" id="phone-7-plus">
            <div class="container" id="iphone-7plus">
                <div class="block-phone">
                    <div class="left-side">
                        <div class="model">
                            <a href="#phone-7-plus">iPhone 7 plus</a>
                        </div>
                        <div class="image">
                            <img src="/uploads/params/sources/e067b5dc7bab409193c97da5327b283b.png"
                                 alt="Купить iPhone 7 plus 32Gb jet black"
                                 title="Купить iPhone 7 plus 32Gb jet black"/>
                        </div>
                        <div class="info-phone">
                            <ul>
                                <li><a href="#pack-set-iphone5s" data-cat_id="27"
                                       class="btn-k pack-set fancybox">Комплектация</a>
                                </li>
                                <li><a href="#characteristics-iphone5s" data-cat_id="27"
                                       class="btn-k characteristics_d fancybox">Характеристики</a></li>
                            </ul>
                            <div class="characteristics_hidden">
                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Связь</a></dt>
                                        <dd style="display:block;">
                                            <ul>
                                                <li>Диапазоны GSM : 850, 900, 1800, 1900</li>
                                                <li>Диапазоны UMTS : 850, 900, 1700, 1900, 2100</li>
                                                <li>Диапазоны LTE : 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25,
                                                    26, 27, 28, 29, 30, 38, 39, 40, 41
                                                </li>
                                                <li>Доступ в Интернет : GPRS , EDGE , 3G , 4G</li>
                                                <li>Bluetooth : 4.2</li>
                                                <li>Wi-Fi (802.11) : a, b , g , n , ac,&nbsp;с технологией MIMO, 2.4
                                                    ГГц, 5 ГГц
                                                </li>
                                                <li>NFC : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Дисплей</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип дисплея : Retina HD с технологией 3D Touch</li>
                                                <li>Диагональ дисплея (дюйм) : 5.5</li>
                                                <li>Разрешение дисплея (пикс) : 1920x1080</li>
                                                <li>Количество цветов дисплея : 16 млн.</li>
                                                <li>Сенсорный дисплей : да</li>
                                                <li>Тип сенсорного дисплея : емкостный</li>
                                                <li>Поддержка Multitouch : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Питание</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип аккумулятора : Литий-ионный</li>
                                                <li>Время разговора в сети 3G (ч) : 14</li>
                                                <li>Время ожидания (ч) : 240</li>
                                                <li>Воспроизведение музыки (ч) : 40</li>
                                                <li>Воспроизведение видео (ч) : 13</li>
                                                <li>Время работы в интернете через сотовую сеть (ч) : 10</li>
                                                <li>Время работы в интернете через Wi-Fi (ч) : 11</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>

                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Процессор</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Процессор : Apple A10 Fusion + сопроцессор движения M10</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Фотокамера</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Основная камера (Мп) : 12, f/1.8</li>
                                                <li>Разрешение фотосъемки (пикс) : 4000 x 3000</li>
                                                <li>Стабилизация изображения : цифровая</li>
                                                <li>Автофокус : да</li>
                                                <li>Вспышка : True Tone</li>
                                                <li>Видеозапись : да</li>
                                                <li>Разрешение видеосъемки (пикс) : 3840 x 2160</li>
                                                <li>Частота кадров видеосъемки : 30</li>
                                                <li>Фронтальная камера (Мп) : 5</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Тип корпуса/SIM карта</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип SIM-карты : nano-SIM</li>
                                                <li>Высота (мм) : 158.2</li>
                                                <li>Ширина (мм) : 77.9</li>
                                                <li>Толщина (мм) : 7.3</li>
                                                <li>Вес (г) : 188</li>
                                                <li>Стандарт защиты: IP67</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="select-color">
                            <div class="label-name">Цвет</div>
                            <div class="color-block space-gray selected" data-param-color="Черный оникс"
                                 valsprice="15359" valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/e067b5dc7bab409193c97da5327b283b.png">
                                <div style="position:relative;">
                                    <span style="background: #000000" class="color_item"></span>
                                    <span class="color-t">Черный оникс</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Черный" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/a0d3b22fff1ef72ad1511d0c204c21e8.png">
                                <div style="position:relative;">
                                    <span style="background: #a3a3a3" class="color_item"></span>
                                    <span class="color-t">Черный</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Серебристый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/73adff69d8b26937f42efe74fe443295.png">
                                <div style="position:relative;">
                                    <span style="background: #e9e9e9" class="color_item"></span>
                                    <span class="color-t">Серебристый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Золотистый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/c98580c4d5c8078963532dd9c3adec65.png">
                                <div style="position:relative;">
                                    <span style="background: #f4bf88" class="color_item"></span>
                                    <span class="color-t">Золотистый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Розовое золото" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/35a574c4b31b7967abc42ea6a9acdee6.png">
                                <div style="position:relative;">
                                    <span style="background: #f0c8c2" class="color_item"></span>
                                    <span class="color-t">Розовое золото</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Красный" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/ecd3091fbbe2756d403c6bec58755601.png">
                                <div style="position:relative;">
                                    <span style="background: #f00" class="color_item"></span>
                                    <span class="color-t">Красный</span>
                                </div>
                            </div>
                        </div>
                        <div class="select-memory">
                            <div class="label-name">Объем памяти</div>
                            <div class="memory-block selected" data-size-id="3" valsmemory="" valmemory="">
                                32 ГБ
                            </div>
                            <div class="memory-block" data-size-id="5" valsmemory="" valmemory="">
                                128 ГБ
                            </div>
                            <div class="memory-block" data-size-id="6" valsmemory="" valmemory="">
                                256 ГБ
                            </div>
                        </div>
                        <div class="price">
                            <div class="label-name">Торопитесь! Скидка до конца недели. Гарантия 1 год. Бесплатный
                                тест-драйв.
                            </div>
                            <div class="standart-price" id="price">
                                <span><?= $prices['iPhone7plus']['32Gb']['jet-black']['price2'] ?></span> руб.
                            </div>
                            <div class="sale-price">
                                <span><?= $prices['iPhone7plus']['32Gb']['jet-black']['price1'] ?></span> руб.
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="hidden" name="category_id" value="7-plus">
                            <input type="hidden" name="prod_id" value="174">
                            <a href="#bay-click" class="bay-click fancybox"
                               onclick="yaCounter46128996.reachGoal('ORDER'); return true;">Заказать сейчас </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-block phone" id="phone-SE">
            <div class="container" id="iphone-se">
                <div class="block-phone">
                    <div class="left-side">
                        <div class="model">
                            <a href="#phone-SE">iPhone <span>se</span></a>
                        </div>
                        <div class="image">
                            <img src="/uploads/params/sources/264300e9e67db3753c329affebd75aa4.png"
                                 alt="Купить iPhone SE 16Gb space-gray" title="Купить iPhone SE 16Gb space-gray"/>
                        </div>
                        <div class="info-phone">
                            <ul>
                                <li><a href="#pack-set-iphone5s" data-cat_id="28"
                                       class="btn-k pack-set fancybox">Комплектация</a>
                                </li>
                                <li><a href="#characteristics-iphone5s" data-cat_id="28"
                                       class="btn-k characteristics_d fancybox">Характеристики</a></li>
                            </ul>
                            <div class="characteristics_hidden">
                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Связь</a></dt>
                                        <dd style="display:block;">
                                            <ul>
                                                <li>Диапазоны GSM : 850, 900, 1800, 1900</li>
                                                <li>Диапазоны UMTS : 850, 900, 1700, 1900, 2100</li>
                                                <li>Диапазоны LTE : 1, 2, 3, 4, 5, 7, 8, 12, 17, 18, 19, 20, 25, 26,
                                                    28, 38, 39, 40, 41
                                                </li>
                                                <li>Доступ в Интернет : GPRS , EDGE , 3G , 4G</li>
                                                <li>Bluetooth : 4.2</li>
                                                <li>Wi-Fi (802.11) : a, b , g , n , ac</li>
                                                <li>NFC : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Дисплей</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип дисплея : Retina</li>
                                                <li>Диагональ дисплея (дюйм) : 4</li>
                                                <li>Разрешение дисплея (пикс) : 1136x640</li>
                                                <li>Плотность пикселей (PPI) : 326</li>
                                                <li>Количество цветов дисплея : 16 млн.</li>
                                                <li>Сенсорный дисплей : да</li>
                                                <li>Тип сенсорного дисплея : емкостный</li>
                                                <li>Поддержка Multitouch : да</li>
                                                <li>Олеофобное покрытие : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Питание</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип аккумулятора : Литий-ионный, несъемный</li>
                                                <li>Время разговора в сети 3G (ч) : 14</li>
                                                <li>Время ожидания (ч) : 240</li>
                                                <li>Воспроизведение музыки (ч) : 50</li>
                                                <li>Воспроизведение видео (ч) : 13</li>
                                                <li>Время работы в интернете через сотовую сеть (ч) : 12</li>
                                                <li>Время работы в интернете через Wi-Fi (ч) : 13</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>

                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Процессор</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Процессор : Apple A9 + сопроцессор M9</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Фотокамера</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Основная камера (Мп) : 12 Объектив : пятилинзовый объектив</li>
                                                <li>Апертура : f/2.2</li>
                                                <li>Разрешение фотосъемки (пикс) : 4000 x 3000</li>
                                                <li>Стабилизация изображения : да</li>
                                                <li>Автофокус : да</li>
                                                <li>Вспышка : True Tone</li>
                                                <li>Разрешение видеосъемки (пикс) : 3840 x 2160</li>
                                                <li>Частота кадров видеосъемки : 30</li>
                                                <li>Фронтальная камера (Мп) : 1.2</li>
                                                <li>Особенности фронтальной камеры : автоматическое включение HDR,
                                                    виртуальная вспышка
                                                </li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Тип корпуса/SIM карта</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип SIM-карты : nano-SIM</li>
                                                <li>Высота (мм) : 123.8</li>
                                                <li>Ширина (мм) : 58.6</li>
                                                <li>Толщина (мм) : 7.6</li>
                                                <li>Вес (г) : 113</li>
                                                <li>Материал корпуса : металл</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="select-color">
                            <div class="label-name">Цвет</div>
                            <div class="color-block space-gray selected" data-param-color="Серый космос"
                                 valsprice="15359" valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/264300e9e67db3753c329affebd75aa4.png">
                                <div style="position:relative;">
                                    <span style="background: #898989" class="color_item"></span>
                                    <span class="color-t">Серый космос</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Серебристый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/88ec47566646454062f4dac05471f460.png">
                                <div style="position:relative;">
                                    <span style="background: #e9e9e9" class="color_item"></span>
                                    <span class="color-t">Серебристый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Золотистый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/5fd01cab94005f7e7ff42f2204870695.png">
                                <div style="position:relative;">
                                    <span style="background: #f4bf88" class="color_item"></span>
                                    <span class="color-t">Золотистый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Розовое золото" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/b53dd2ec60e8f008a26d553813776e99.png">
                                <div style="position:relative;">
                                    <span style="background: #f0c8c2" class="color_item"></span>
                                    <span class="color-t">Розовое золото</span>
                                </div>
                            </div>
                        </div>
                        <div class="select-memory">
                            <div class="label-name">Объем памяти</div>
                            <div class="memory-block selected" data-size-id="2" valsmemory="" valmemory="">
                                16 ГБ
                            </div>
                            <div class="memory-block" data-size-id="4" valsmemory="" valmemory="">
                                64 ГБ
                            </div>
                        </div>
                        <div class="price">
                            <div class="label-name">Торопитесь! Скидка до конца недели. Гарантия 1 год. Бесплатный
                                тест-драйв.
                            </div>
                            <div class="standart-price" id="price">
                                <span><?= $prices['iPhoneSE']['16Gb']['space-gray']['price2'] ?></span> руб.
                            </div>
                            <div class="sale-price">
                                <span><?= $prices['iPhoneSE']['16Gb']['space-gray']['price1'] ?></span> руб.
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="hidden" name="category_id" value="SE">
                            <input type="hidden" name="prod_id" value="127">
                            <a href="#bay-click" class="bay-click fancybox"
                               onclick="yaCounter46128996.reachGoal('ORDER'); return true;">Заказать сейчас </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-block phone" id="phone-6s">
            <div class="container" id="iphone-6s">
                <div class="block-phone">
                    <div class="left-side">
                        <div class="model">
                            <a href="#phone-6s">iPhone 6 <span>s</span></a>
                        </div>
                        <div class="image">
                            <img src="/uploads/params/sources/3334604c66895e390c6a0e715ee178e2.png"
                                 alt="Купить iPhone 6S 16Gb space-gray" title="Купить iPhone 6S 16Gb space-gray"/>
                        </div>
                        <div class="info-phone">
                            <ul>
                                <li><a href="#pack-set-iphone5s" data-cat_id="7"
                                       class="btn-k pack-set fancybox">Комплектация</a>
                                </li>
                                <li><a href="#characteristics-iphone5s" data-cat_id="7"
                                       class="btn-k characteristics_d fancybox">Характеристики</a></li>
                            </ul>
                            <div class="characteristics_hidden">
                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Связь</a></dt>
                                        <dd style="display:block;">
                                            <ul>
                                                <li>Диапазоны GSM : 850, 900, 1800, 1900</li>
                                                <li>Диапазоны UMTS : 850, 900, 1700, 1900, 2100</li>
                                                <li>Диапазоны LTE : 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25,
                                                    26, 27, 28, 29, 30, 38, 39, 40, 41
                                                </li>
                                                <li>Доступ в Интернет : GPRS , EDGE , 3G , 4G</li>
                                                <li>Bluetooth : 4.2</li>
                                                <li>Wi-Fi (802.11) : a, b , g , n , ac</li>
                                                <li>NFC : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Дисплей</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип дисплея : Retina HD с технологией 3D Touch</li>
                                                <li>Диагональ дисплея (дюйм) : 4.7</li>
                                                <li>Разрешение дисплея (пикс) : 1334x750</li>
                                                <li>Количество цветов дисплея : 16 млн.</li>
                                                <li>Сенсорный дисплей : да</li>
                                                <li>Тип сенсорного дисплея : емкостный</li>
                                                <li>Поддержка Multitouch : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Питание</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип аккумулятора : Литий-ионный</li>
                                                <li>Время разговора в сети 3G (ч) : 14</li>
                                                <li>Время ожидания (ч) : 240</li>
                                                <li>Воспроизведение музыки (ч) : 50</li>
                                                <li>Воспроизведение видео (ч) : 11</li>
                                                <li>Время работы в интернете через сотовую сеть (ч) : 10</li>
                                                <li>Время работы в интернете через Wi-Fi (ч) : 11</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>

                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Процессор</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Процессор : Apple A9 + сопроцессор M9</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Фотокамера</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Основная камера (Мп) : 12</li>
                                                <li>Разрешение фотосъемки (пикс) : 4000 x 3000</li>
                                                <li>Стабилизация изображения : цифровая</li>
                                                <li>Автофокус : да</li>
                                                <li>Вспышка : True Tone</li>
                                                <li>Видеозапись : да</li>
                                                <li>Разрешение видеосъемки (пикс) : 3840 x 2160</li>
                                                <li>Частота кадров видеосъемки : 30</li>
                                                <li>Фронтальная камера (Мп) : 5</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Тип корпуса/SIM карта</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип SIM-карты : nano-SIM</li>
                                                <li>Высота (мм) : 138.3</li>
                                                <li>Ширина (мм) : 67.1</li>
                                                <li>Толщина (мм) : 7.1</li>
                                                <li>Вес (г) : 143</li>
                                                <li>Материал корпуса : алюминий, нерж. сталь</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="select-color">
                            <div class="label-name">Цвет</div>
                            <div class="color-block space-gray selected" data-param-color="Серый космос"
                                 valsprice="15359" valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/3334604c66895e390c6a0e715ee178e2.png">
                                <div style="position:relative;">
                                    <span style="background: #898989" class="color_item"></span>
                                    <span class="color-t">Серый космос</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Серебристый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/9bdf7bd0b2b58fad292125edb081b642.png">
                                <div style="position:relative;">
                                    <span style="background: #e9e9e9" class="color_item"></span>
                                    <span class="color-t">Серебристый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Золотистый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/dbd11d8ea228cd4faf2120530640d8fe.png">
                                <div style="position:relative;">
                                    <span style="background: #f4bf88" class="color_item"></span>
                                    <span class="color-t">Золотистый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Розовое золото" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/a2d00ed0aa3683a6be6bb25525710113.png">
                                <div style="position:relative;">
                                    <span style="background: #f0c8c2" class="color_item"></span>
                                    <span class="color-t">Розовое золото</span>
                                </div>
                            </div>
                        </div>
                        <div class="select-memory">
                            <div class="label-name">Объем памяти</div>
                            <div class="memory-block selected" data-size-id="2" valsmemory="" valmemory="">
                                16 ГБ
                            </div>
                            <div class="memory-block" data-size-id="4" valsmemory="" valmemory="">
                                64 ГБ
                            </div>
                            <div class="memory-block" data-size-id="5" valsmemory="" valmemory="">
                                128 ГБ
                            </div>
                        </div>
                        <div class="price">
                            <div class="label-name">Торопитесь! Скидка до конца недели. Гарантия 1 год. Бесплатный
                                тест-драйв.
                            </div>
                            <div class="standart-price" id="price">
                                <span><?= $prices['iPhone6s']['16Gb']['space-gray']['price2'] ?></span> руб.
                            </div>
                            <div class="sale-price">
                                <span><?= $prices['iPhone6s']['16Gb']['space-gray']['price1'] ?></span> руб.
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="hidden" name="category_id" value="6s">
                            <input type="hidden" name="prod_id" value="57">
                            <a href="#bay-click" class="bay-click fancybox"
                               onclick="yaCounter46128996.reachGoal('ORDER'); return true;">Заказать сейчас </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-block phone" id="phone-6s-plus">
            <div class="container" id="iphone-6splus">
                <div class="block-phone">
                    <div class="left-side">
                        <div class="model">
                            <a href="#phone-6s-plus">iPhone 6 <span>s</span> plus</a>
                        </div>
                        <div class="image">
                            <img src="/uploads/params/sources/21edb494ca9917cff2b39bc2c7280352.png"
                                 alt="Купить iPhone 6S plus 16Gb space-gray"
                                 title="Купить iPhone 6S plus 16Gb space-gray"/>
                        </div>
                        <div class="info-phone">
                            <ul>
                                <li><a href="#pack-set-iphone5s" data-cat_id="26"
                                       class="btn-k pack-set fancybox">Комплектация</a>
                                </li>
                                <li><a href="#characteristics-iphone5s" data-cat_id="26"
                                       class="btn-k characteristics_d fancybox">Характеристики</a></li>
                            </ul>
                            <div class="characteristics_hidden">
                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Связь</a></dt>
                                        <dd style="display:block;">
                                            <ul>
                                                <li>Диапазоны GSM : 850, 900, 1800, 1900</li>
                                                <li>Диапазоны UMTS : 850, 900, 1700, 1900, 2100</li>
                                                <li>Диапазоны LTE : 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25,
                                                    26, 27, 28, 29, 30, 38, 39, 40, 41
                                                </li>
                                                <li>Доступ в Интернет : GPRS , EDGE , 3G , 4G</li>
                                                <li>Bluetooth : 4.2</li>
                                                <li>Wi-Fi (802.11) : a, b , g , n , ac</li>
                                                <li>NFC : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Дисплей</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип дисплея : Retina HD с технологией 3D Touch</li>
                                                <li>Диагональ дисплея (дюйм) : 5.5</li>
                                                <li>Количество цветов дисплея : 16 млн.</li>
                                                <li>Сенсорный дисплей : да</li>
                                                <li>Тип сенсорного дисплея : емкостный</li>
                                                <li>Поддержка Multitouch : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Питание</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип аккумулятора : Литий-ионный</li>
                                                <li>Время разговора в сети 3G (ч) : 14</li>
                                                <li>Время ожидания (ч) : 240</li>
                                                <li>Воспроизведение музыки (ч) : 50</li>
                                                <li>Воспроизведение видео (ч) : 11</li>
                                                <li>Время работы в интернете через сотовую сеть (ч) : 10</li>
                                                <li>Время работы в интернете через Wi-Fi (ч) : 11</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>

                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Процессор</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Процессор : Apple A9 + сопроцессор M9</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Фотокамера</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Основная камера (Мп) : 12</li>
                                                <li>Разрешение фотосъемки (пикс) : 4000 x 3000</li>
                                                <li>Стабилизация изображения : цифровая</li>
                                                <li>Автофокус : да</li>
                                                <li>Вспышка : True Tone</li>
                                                <li>Видеозапись : да</li>
                                                <li>Разрешение видеосъемки (пикс) : 3840 x 2160</li>
                                                <li>Частота кадров видеосъемки : 30</li>
                                                <li>Фронтальная камера (Мп) : 5</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Тип корпуса/SIM карта</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип SIM-карты : nano-SIM</li>
                                                <li>Высота (мм) : 158.2</li>
                                                <li>Ширина (мм) : 77.9</li>
                                                <li>Толщина (мм) : 7.3</li>
                                                <li>Вес (г) : 192</li>
                                                <li>Материал корпуса : алюминий, нерж. сталь</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="select-color">
                            <div class="label-name">Цвет</div>
                            <div class="color-block space-gray selected" data-param-color="Серый космос"
                                 valsprice="15359" valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/21edb494ca9917cff2b39bc2c7280352.png">
                                <div style="position:relative;">
                                    <span style="background: #898989" class="color_item"></span>
                                    <span class="color-t">Серый космос</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Серебристый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/9440e220070656eecefce03537bf6b3e.png">
                                <div style="position:relative;">
                                    <span style="background: #e9e9e9" class="color_item"></span>
                                    <span class="color-t">Серебристый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Золотистый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/f558a002ec5b0be13119a9be31951a78.png">
                                <div style="position:relative;">
                                    <span style="background: #f4bf88" class="color_item"></span>
                                    <span class="color-t">Золотистый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Розовое золото" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/28c2aaa6b6c825059e4fc6300b599aa4.png">
                                <div style="position:relative;">
                                    <span style="background: #f0c8c2" class="color_item"></span>
                                    <span class="color-t">Розовое золото</span>
                                </div>
                            </div>
                        </div>
                        <div class="select-memory">
                            <div class="label-name">Объем памяти</div>
                            <div class="memory-block selected" data-size-id="2" valsmemory="" valmemory="">
                                16 ГБ
                            </div>
                            <div class="memory-block" data-size-id="4" valsmemory="" valmemory="">
                                64 ГБ
                            </div>
                            <div class="memory-block" data-size-id="5" valsmemory="" valmemory="">
                                128 ГБ
                            </div>
                        </div>
                        <div class="price">
                            <div class="label-name">Торопитесь! Скидка до конца недели. Гарантия 1 год. Бесплатный
                                тест-драйв.
                            </div>
                            <div class="standart-price" id="price">
                                <span><?= $prices['iPhone6sPlus']['16Gb']['space-gray']['price2'] ?></span> руб.
                            </div>
                            <div class="sale-price">
                                <span><?= $prices['iPhone6sPlus']['16Gb']['space-gray']['price1'] ?></span> руб.
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="hidden" name="category_id" value="6s-plus">
                            <input type="hidden" name="prod_id" value="69">
                            <a href="#bay-click" class="bay-click fancybox"
                               onclick="yaCounter46128996.reachGoal('ORDER'); return true;">Заказать сейчас </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-block phone" id="phone-6">
            <div class="container" id="iphone-6">
                <div class="block-phone">
                    <div class="left-side">
                        <div class="model">
                            <a href="#phone-6">iPhone 6 </a>
                        </div>
                        <div class="image">
                            <img src="/uploads/params/sources/2b6f133cfe89a38bd54d8740498e2320.png"
                                 alt="Купить iPhone 6 16Gb space-gray" title="Купить iPhone 6 16Gb space-gray"/>
                        </div>
                        <div class="info-phone">
                            <ul>
                                <li><a href="#pack-set-iphone5s" data-cat_id="5"
                                       class="btn-k pack-set fancybox">Комплектация</a>
                                </li>
                                <li><a href="#characteristics-iphone5s" data-cat_id="5"
                                       class="btn-k characteristics_d fancybox">Характеристики</a></li>
                            </ul>
                            <div class="characteristics_hidden">
                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Связь</a></dt>
                                        <dd style="display:block;">
                                            <ul>
                                                <li>Диапазоны GSM : 850, 900, 1800, 1900</li>
                                                <li>Диапазоны UMTS : 850, 900, 1700, 1900, 2100</li>
                                                <li>Диапазоны LTE : 1, 2, 3, 4, 5, 7, 8, 13, 17, 18, 19, 20, 25, 26,
                                                    28, 29
                                                </li>
                                                <li>Доступ в Интернет : GPRS , EDGE , 3G , 4G</li>
                                                <li>Bluetooth : 4.0</li>
                                                <li>Wi-Fi (802.11) : a, b , g , n , ac</li>
                                                <li>NFC : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Дисплей</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип дисплея : Retina HD</li>
                                                <li>Диагональ дисплея (дюйм) : 4.7</li>
                                                <li>Разрешение дисплея (пикс) : 1920&times;1080</li>
                                                <li>Количество цветов дисплея : 16 млн.</li>
                                                <li>Сенсорный дисплей : да</li>
                                                <li>Тип сенсорного дисплея : емкостный</li>
                                                <li>Поддержка Multitouch : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Питание</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип аккумулятора : Литий-ионный</li>
                                                <li>Время разговора в сети 3G (ч) : 14</li>
                                                <li>Время ожидания (ч) : 250</li>
                                                <li>Воспроизведение музыки (ч) : 50</li>
                                                <li>Воспроизведение видео (ч) : 11</li>
                                                <li>Время работы в интернете через сотовую сеть (ч) : 10</li>
                                                <li>Время работы в интернете через Wi-Fi (ч) : 11</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>

                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Процессор</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Процессор : Apple A8 + сопроцессор M8</li>
                                                <li>Частота процессора (МГц) : 1400</li>
                                                <li>Кол-во ядер : 2</li>
                                                <li>Видеочип : PowerVR GX6650</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Фотокамера</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Основная камера (Мп) : 8</li>
                                                <li>Разрешение фотосъемки (пикс) : 3248 x 2448</li>
                                                <li>Стабилизация изображения : цифровая</li>
                                                <li>Автофокус : да</li>
                                                <li>Вспышка : да</li>
                                                <li>Видеозапись : да</li>
                                                <li>Разрешение видеосъемки (пикс) : 1920 x 1080</li>
                                                <li>Частота кадров видеосъемки : 60</li>
                                                <li>Фронтальная камера (Мп) : 1.2</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Тип корпуса/SIM карта</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип SIM-карты : nano-SIM</li>
                                                <li>Высота (мм) : 138.1</li>
                                                <li>Ширина (мм) : 67</li>
                                                <li>Толщина (мм) : 6.9</li>
                                                <li>Вес (г) : 129</li>
                                                <li>Материал корпуса : алюминий, нерж. сталь</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="select-color">
                            <div class="label-name">Цвет</div>
                            <div class="color-block space-gray selected" data-param-color="Серый космос"
                                 valsprice="15359" valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/2b6f133cfe89a38bd54d8740498e2320.png">
                                <div style="position:relative;">
                                    <span style="background: #898989" class="color_item"></span>
                                    <span class="color-t">Серый космос</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Серебристый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/9bf680f1f20e4a31b46b51e2ff2e6ab0.png">
                                <div style="position:relative;">
                                    <span style="background: #e9e9e9" class="color_item"></span>
                                    <span class="color-t">Серебристый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Золотистый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/91a8089b025fd99688efff2bb86c5567.png">
                                <div style="position:relative;">
                                    <span style="background: #f4bf88" class="color_item"></span>
                                    <span class="color-t">Золотистый</span>
                                </div>
                            </div>
                        </div>
                        <div class="select-memory">
                            <div class="label-name">Объем памяти</div>
                            <div class="memory-block selected" data-size-id="2" valsmemory="" valmemory="">
                                16 ГБ
                            </div>
                            <div class="memory-block" data-size-id="4" valsmemory="" valmemory="">
                                64 ГБ
                            </div>
                            <div class="memory-block" data-size-id="5" valsmemory="" valmemory="">
                                128 ГБ
                            </div>
                        </div>
                        <div class="price">
                            <div class="label-name">Торопитесь! Скидка до конца недели. Гарантия 1 год. Бесплатный
                                тест-драйв.
                            </div>
                            <div class="standart-price" id="price">
                                <span><?= $prices['iPhone6']['16Gb']['space-gray']['price2'] ?></span> руб.
                            </div>
                            <div class="sale-price">
                                <span><?= $prices['iPhone6']['16Gb']['space-gray']['price1'] ?></span> руб.
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="hidden" name="category_id" value="6">
                            <input type="hidden" name="prod_id" value="4">
                            <a href="#bay-click" class="bay-click fancybox"
                               onclick="yaCounter46128996.reachGoal('ORDER'); return true;">Заказать сейчас </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-block phone" id="phone-6-plus">
            <div class="container" id="iphone-6plus">
                <div class="block-phone">
                    <div class="left-side">
                        <div class="model">
                            <a href="#phone-6-plus">iPhone 6 plus</a>
                        </div>
                        <div class="image">
                            <img src="/uploads/params/sources/b334f2f7b29600789fac2ea872f428a2.png"
                                 alt="Купить iPhone 6 plus 16Gb space-gray"
                                 title="Купить iPhone 6 plus 16Gb space-gray"/>
                        </div>
                        <div class="info-phone">
                            <ul>
                                <li><a href="#pack-set-iphone5s" data-cat_id="6"
                                       class="btn-k pack-set fancybox">Комплектация</a>
                                </li>
                                <li><a href="#characteristics-iphone5s" data-cat_id="6"
                                       class="btn-k characteristics_d fancybox">Характеристики</a></li>
                            </ul>
                            <div class="characteristics_hidden">
                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Связь</a></dt>
                                        <dd style="display:block;">
                                            <ul>
                                                <li>Диапазоны GSM : 850, 900, 1800, 1900</li>
                                                <li>Диапазоны UMTS : 850, 900, 1700, 1900, 2100</li>
                                                <li>Диапазоны LTE : 1, 2, 3, 4, 5, 7, 8, 13, 17, 18, 19, 20, 25, 26,
                                                    28, 29
                                                </li>
                                                <li>Доступ в Интернет : GPRS , EDGE , 3G , 4G</li>
                                                <li>Bluetooth : 4.0</li>
                                                <li>Wi-Fi (802.11) : a, b , g , n , ac</li>
                                                <li>NFC : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Дисплей</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип дисплея : Retina HD</li>
                                                <li>Диагональ дисплея (дюйм) : 5.5</li>
                                                <li>Количество цветов дисплея : 16 млн.</li>
                                                <li>Сенсорный дисплей : да</li>
                                                <li>Тип сенсорного дисплея : емкостный</li>
                                                <li>Поддержка Multitouch : да</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Питание</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип аккумулятора : Литий-ионный</li>
                                                <li>Время разговора в сети 3G (ч) : 14</li>
                                                <li>Время ожидания (ч) : 250</li>
                                                <li>Воспроизведение музыки (ч) : 50</li>
                                                <li>Воспроизведение видео (ч) : 11</li>
                                                <li>Время работы в интернете через сотовую сеть (ч) : 10</li>
                                                <li>Время работы в интернете через Wi-Fi (ч) : 11</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>

                                <div class="characteristics-block">
                                    <dl class="accordions">
                                        <dt><a href="">Процессор</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Процессор : Apple A8 + сопроцессор M8</li>
                                                <li>Частота процессора (МГц) : 1400</li>
                                                <li>Кол-во ядер : 2</li>
                                                <li>Видеочип : PowerVR GX6650</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Фотокамера</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Основная камера (Мп) : 8</li>
                                                <li>Разрешение фотосъемки (пикс) : 3248 x 2448</li>
                                                <li>Стабилизация изображения : цифровая</li>
                                                <li>Автофокус : да</li>
                                                <li>Вспышка : да</li>
                                                <li>Видеозапись : да</li>
                                                <li>Разрешение видеосъемки (пикс) : 1920 x 1080</li>
                                                <li>Частота кадров видеосъемки : 60</li>
                                                <li>Фронтальная камера (Мп) : 1.2</li>
                                            </ul>
                                        </dd>
                                        <dt><a href="">Тип корпуса/SIM карта</a></dt>
                                        <dd>
                                            <ul>
                                                <li>Тип SIM-карты : nano-SIM</li>
                                                <li>Высота (мм) : 158.1</li>
                                                <li>Ширина (мм) : 77.8</li>
                                                <li>Толщина (мм) : 7.1</li>
                                                <li>Вес (г) : 172</li>
                                                <li>Материал корпуса : алюминий, нерж. сталь</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="select-color">
                            <div class="label-name">Цвет</div>
                            <div class="color-block space-gray selected" data-param-color="Серый космос"
                                 valsprice="15359" valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/b334f2f7b29600789fac2ea872f428a2.png">
                                <div style="position:relative;">
                                    <span style="background: #898989" class="color_item"></span>
                                    <span class="color-t">Серый космос</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Серебристый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/c5a1e653c1e91cdff1d1c83074a6a962.png">
                                <div style="position:relative;">
                                    <span style="background: #e9e9e9" class="color_item"></span>
                                    <span class="color-t">Серебристый</span>
                                </div>
                            </div>
                            <div class="color-block space-gray" data-param-color="Золотистый" valsprice="15359"
                                 valprice="12799" valcolor="space-gray"
                                 vallink="/uploads/params/sources/8f45d6e170ee17bd13b8f0f027b6e767.png">
                                <div style="position:relative;">
                                    <span style="background: #f4bf88" class="color_item"></span>
                                    <span class="color-t">Золотистый</span>
                                </div>
                            </div>
                        </div>
                        <div class="select-memory">
                            <div class="label-name">Объем памяти</div>
                            <div class="memory-block selected" data-size-id="2" valsmemory="" valmemory="">
                                16 ГБ
                            </div>
                            <div class="memory-block" data-size-id="4" valsmemory="" valmemory="">
                                64 ГБ
                            </div>
                            <div class="memory-block" data-size-id="5" valsmemory="" valmemory="">
                                128 ГБ
                            </div>
                        </div>
                        <div class="price">
                            <div class="label-name">Торопитесь! Скидка до конца недели. Гарантия 1 год. Бесплатный
                                тест-драйв.
                            </div>
                            <div class="standart-price" id="price">
                                <span><?= $prices['iPhone6plus']['16Gb']['space-gray']['price2'] ?></span> руб.
                            </div>
                            <div class="sale-price">
                                <span><?= $prices['iPhone6plus']['16Gb']['space-gray']['price1'] ?></span> руб.
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="hidden" name="category_id" value="6-plus">
                            <input type="hidden" name="prod_id" value="48">
                            <a href="#bay-click" class="bay-click fancybox"
                               onclick="yaCounter46128996.reachGoal('ORDER'); return true;">Заказать сейчас </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div id="press-block">
    </div>
    <div class="advantage-block">
        <div class="container">
            <div class="name">Официальный магазин техники Apple</div>
            <div id="od1" style="margin-top:60px; font-family: 'Myriad Set Pro';
             font-size: 18px; padding-left: 180px; display: ;"
                 class="wow slideInLeft">
                <div style="float: left; width: 33%;">
                    <div style="float: left;"><img src="/images/icons/181508.svg" class="icon1"/></div>
                    <div style="float: left; margin-left: 10px; font-weight: ; text-align: left;">
                        <div style="text-decoration:  ; display: inline-block; border-bottom: 1px dotted #444;">Адрес
                        </div>
                        <div style="margin-top: 8px; font-weight: 200; line-height: 23px;">
                            <div>г. Москва,</div>
                            <div>16-я Парковая, д.26</div>
                        </div>
                    </div>
                </div>

                <div style="float: left; width: 33%;">
                    <div style="float: left;"><img src="/images/icons/121872.svg" class="icon1"/></div>
                    <div style="float: left; margin-left: 10px; font-weight: ; text-align: left;">
                        <div style="display: inline-block; border-bottom: 1px dotted #444;">Время работы</div>
                        <div style="margin-top: 8px; font-weight: 200; line-height: 23px;">
                            <div>Пн - СБ,</div>
                            <div>с 10:00 до 20:00</div>
                        </div>
                    </div>
                </div>

                <div style="float: left; width: 33%;">
                    <div style="float: left;"><img src="/images/icons/181553.svg" class="icon1"/></div>
                    <div style="float: left; margin-left: 10px; font-weight: ; text-align: left;">
                        <div style="display: inline-block; border-bottom: 1px dotted #444;">Гарантия</div>
                        <div style="margin-top: 8px; font-weight: 200; line-height: 23px;">
                            <div></div>
                            <div>Срок гарантии - 1 год</div>
                        </div>
                    </div>
                </div>

                <div style="clear: both; "></div>

                <div style="margin-top:60px; font-family: 'Myriad Set Pro'; font-size: 18px; padding-left: ;">
                    <div style="float: left; width: 33%;">
                        <div style="float: left;"><img src="/images/icons/181580.svg" class="icon1"/></div>
                        <div style="float: left; margin-left: 10px; font-weight: ; text-align: left;">
                            <div style="display: inline-block; border-bottom: 1px dotted #444;">Доставка</div>
                            <div style="margin-top: 8px; font-weight: 200; line-height: 23px;">
                                <div>Срочная доставка</div>
                                <div>по Москве и МО</div>
                            </div>
                        </div>
                    </div>

                    <div style="float: left; width: 33%;">
                        <div style="float: left;"><img src="/images/icons/181517.svg" class="icon1"/></div>
                        <div style="float: left; margin-left: 10px; font-weight: ; text-align: left;">
                            <div style="text-decoration:  ; display: inline-block; border-bottom: 1px dotted #444;">
                                Подарки
                            </div>
                            <div style="margin-top: 8px; font-weight: 200; line-height: 23px;">
                                <div>Постоянным клиентам</div>
                            </div>
                        </div>
                    </div>

                    <div style="float: left; width: 33%;">
                        <div style="float: left;"><img src="/images/icons/154410.svg" class="icon1"/></div>
                        <div style="float: left; margin-left: 10px; font-weight: ; text-align: left;">
                            <div style="text-decoration:  ; display: inline-block; border-bottom: 1px dotted #444;">
                                Скидка
                            </div>
                            <div style="margin-top: 8px; font-weight: 200; line-height: 23px;">
                                <div>Скидки до 20%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clr">&nbsp;</div>
        </div>
    </div>
    <!--    <div class="guarantee-block" id="guaranty">-->
    <div class="guarantee-block" id="guaranty">
        <div class="content">
            <div id="header3" class="module-header">Гарантия - 1 год</div>

            <div class="gar">

                <div class="left-side">
                    <div class="title-delivery1">Закон о защите прав потребителей</div>
                    <div class="text-delivery1">
                        Если за 14 дней Вы обнаружите какую-либо неисправность, мы
                        <div>любезно вернем Вам деньги без скандалов и головной боли.</div>
                        Единственное требование - сохранение товарного вида.
                    </div>
                </div>

                <div class="right-side">
                    <div class="title-delivery2">Расширенная гарантия – 1 год</div>
                    <div class="text-delivery2">
                        Если в течение 1 года смартфон сломается - специалисты
                        <div> отремонтируют его бесплатно. Вы просто приезжаете</div>
                        с телефоном и гарантийным талоном в сервисный центр.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br>

    <div id="delivery">
        <div class="name">Доставка в день заказа</div>
        <div class="delivery-block">
            <div class="container">
                <div class="dil">
                    <ul>
                        <li><span class="dil-span">*</span>Экспресс-доставка за 3 часа</li>
                        <li><span class="dil-span">*</span>В любое время с 09:00 до 22:00</li>
                        <li><span class="dil-span">*</span>Бесплатная доставка по Москве</li>
                        <li><span class="dil-span">*</span>Курьер поможет активировать iPhone</li>
                        <li><span class="dil-span">*</span>Всегда есть сдача</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="del-img">
            <img src="/images/deliv.jpg" alt="">
        </div>
    </div>


    <div class="cont">
        <h1>Контакты</h1>
        <br><br><br>
        <div class="block">
            <div class="icon ico_1"></div>
			<?= Yii::$app->params['address']; ?>
        </div>
        <div class="block">
            <div class="icon ico_2"></div>
            Режим работы: 10:00 - 20:00
        </div>
        <div class="block">
            <div class="icon ico_3"></div>
            <span class="lptracker_phone"><?= Yii::$app->params['tel']; ?></span>
        </div>
    </div>
</section>
<div id="map"></div>
<script>
    function initMap() {
        var customMapType = new google.maps.StyledMapType([], {
            name: 'map'
        });
        var customMapTypeId = 'custom_style';
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            zoomControl: false,
//55.774289, 37.676803
            center: new google.maps.LatLng(55.774289, 37.676803),
            mapTypeControlOptions: {
                mapTypeIds: []
            }
        });
        var marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(55.774289, 37.676803),
            icon: '/images/map-icon.png',
        });

        map.mapTypes.set(customMapTypeId, customMapType);
        map.setMapTypeId(customMapTypeId);

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0b3I2YrKGz0t60VRkeMBRcY0xFqf99EE&signed_in=true&callback=initMap"
        async defer></script>

<script>
    dinamPhones(false);
</script>

<footer class="container-fluid hidden-opacity visible animated fadeInDown full-visible">
    <div class="row">
        <div class="col-md-12 col-lg-3 copyright"><?= Yii::$app->params['shopName']; ?></div>
        <div class="col-md-12 col-lg-8 footer-menu">
            <ul class="bottom-menu">
                <li><a href="#catalogue">Каталог</a></li>
                <li><a href="#guaranty">Гарантия и поддержка</a></li>
                <li><a href="#delivery">Доставка</a></li>
                <li><a href="/otzyvy">Отзывы</a></li>
                <li><a href="/contact">Контакты</a></li>
            </ul>
        </div>
        <div class="col-md-12 col-lg-1 flag"><img src="/images/icons/rus.png"/> <span>Россия</span></div>
</footer>


<div id="bay-click" class="popup">
    <a class="close-popup" onclick="$('#bay-click').bPopup().close();"><b></b></a>

    <div class="bay-popup">
        <div class="div-right">
            <p class="buy-in-click-popup-title">Купить в 1 клик</p>
            <p class="cat-item-name buy-in-click-popup-model">iPhone 6 16Gb space-gray</p>
            <div style="text-align: center; margin-top: 20px;">
                <span class="cat-item-new-price buy-in-click-popup-price ">12 999</span>
            </div>
        </div>

        <div class="clear"></div>
        <div class="second-part">
            <div class="grid-4 text-center">
                <form id="order_form" action="#" method="POST">
                    <input name="prod" value="" type="hidden"/>
                    <input class="input-name" name="name" type="text" placeholder="Ваше имя:"/>
                    <input class="input-phone" name="phone" type="text" placeholder="+7 (___) ___-__-__"/>
                    <input name="prod" value="" type="hidden"/>
                    <button class="btn-acc">Заказать сейчас</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!--<div id="pack-set-iphone5s" class="popup pack-set">-->
<!--    <div class="name">Комплектация</div>-->
<!--    <div class="btn-k pack-set-image">-->
<!--        <img src="" alt="" />-->
<!--    </div>-->
<!--    <div class="airpods"></div>-->
<!--    <div class="charging"></div>-->
<!--    <div class="lightning"></div>-->
<!--    <div class="closefancy" onclick="$.fancybox.close()">Вернуться к выбору модели</div>-->
<!--</div>-->

<div id="pack-set-iphone5s" class="popup pack-set">
    <div class="name">Комплект поставки</div>
    <div class="btn-k pack-set-image"><img src="" alt=""></div>
    <div class="lightning">Кабель Lightning/USB</div>
    <div class="clr"></div>
    <div class="airpods">Наушники Apple EarPods</div>
    <div class="clr"></div>
    <div class="charging">Адаптер питания USB</div>
    <div class="clr"></div>
    <div class="button">
        <div class="closefancy" onclick="$.fancybox.close()">Вернуться к выбору модели</div>
    </div>
</div>

<div id="characteristics-iphone5s" class="popup characteristics pack-set">
    <div class="name">Характеристики</div>
    <div class="cnt">
        <div class="characteristics-block left">
            <dl class="accordions">
                <dt><a href="">Связь</a></dt>
                <dd style="display:block;">
                    <ul>
                        <li>Диапазоны GSM : 850, 900, 1800, 1900</li>
                        <li>Диапазоны UMTS : 850, 900, 1900, 2100</li>
                        <li>Диапазоны LTE : 1, 2, 3, 5, 7, 8, 20</li>
                        <li>Доступ в Интернет : GPRS , EDGE , 3G , 4G</li>
                        <li>Bluetooth : 4.0</li>
                        <li>Wi-Fi (802.11) : a, b , g , n</li>
                        <li>Разъем для синхронизации : Apple Lightning</li>
                    </ul>
                </dd>

                <dt><a href="">Дисплей</a></dt>
                <dd>
                    <ul>
                        <li>Тип дисплея : IPS</li>
                        <li>Диагональ дисплея (дюйм) : 4</li>
                        <li>Разрешение дисплея (пикс) : 1136x640</li>
                        <li>Количество цветов дисплея : 16 млн.</li>
                        <li>Сенсорный дисплей : да</li>
                        <li>Тип сенсорного дисплея : емкостный</li>
                        <li>Поддержка Multitouch : да</li>
                    </ul>
                </dd>

                <dt><a href="">Питание</a></dt>
                <dd>
                    <ul>
                        <li>Тип аккумулятора : Литий-ионный</li>
                        <li>Емкость аккумулятора (мАч) : 1560</li>
                        <li>Время разговора (ч) : 10</li>
                        <li>Время ожидания (ч) : 250</li>
                        <li>Воспроизведение музыки (ч) : 40</li>
                        <li>Воспроизведение видео (ч) : 10</li>
                    </ul>
                </dd>
            </dl>
        </div>
        <div class="characteristics-block right">
            <dl class="accordions">
                <dt><a href="">Процессор</a></dt>
                <dd>
                    <ul>
                        <li>Процессор : Apple A7</li>
                        <li>Кол-во ядер : 2</li>
                    </ul>
                </dd>

                <dt><a href="">Фотокамера</a></dt>
                <dd>
                    <ul>
                        <li>Основная камера (Мп) : 8</li>
                        <li>Разрешение фотосъемки (пикс) : 3248 x 2448</li>
                        <li>Автофокус : да</li>
                        <li>Вспышка : светодиодная</li>
                        <li>Видеозапись : да</li>
                        <li>Разрешение видеосъемки (пикс) : 1920 x 1080</li>
                        <li>Частота кадров видеосъемки : 30</li>
                        <li>Фронтальная камера (Мп) : 1.2</li>
                    </ul>
                </dd>

                <dt><a href="">SIM-карта</a></dt>
                <dd>
                    <ul>
                        <li>Тип SIM-карты : nano-SIM</li>
                        <li>Кол-во SIM-карт : 1</li>
                    </ul>
                </dd>

                <dt><a href="">Тип корпуса</a></dt>
                <dd>
                    <ul>
                        <li>Тип корпуса : классический
                        <li>Высота (мм) : 123.8</li>
                        <li>Ширина (мм) : 58.6</li>
                        <li>Толщина (мм) : 7.6</li>
                        <li>Вес (г) : 112</li>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>

    <div class="clr"></div>

    <div class="closefancy" onclick="$.fancybox.close()">Вернуться к выбору модели</div>
</div>

<div id="add-basket" class="popup">
    <div class="name">Добавлен в корзину</div>
    <div class="image">
        <img src="" alt=""/>
    </div>
    <div class="info">
        <span class="model"></span>
        <span class="memory"></span>
        <span class="color"></span>
        <br/>
        Цена: <span class="price"></span> руб.
    </div>

    <a href="http://apple-com.pro/cart/" class="order-button">Оформить заказ</a>
    <div class="closefancy" onclick="$.fancybox.close()">Продолжить покупки</div>
    <div class="clr"></div>

</div>
<!--<script type="text/javascript">-->
<!--    (function (_, r, e, t, a, i, l) {-->
<!--        _['retailCRMObject'] = a;-->
<!--        _[a] = _[a] || function () {-->
<!--                (_[a].q = _[a].q || []).push(arguments)-->
<!--            };-->
<!--        _[a].l = 1 * new Date();-->
<!--        l = r.getElementsByTagName(e)[0];-->
<!--        i = r.createElement(e);-->
<!--        i.async = !0;-->
<!--        i.src = t;-->
<!--        l.parentNode.insertBefore(i, l)-->
<!--    })(window, document, 'script', 'https://collector.retailcrm.pro/w.js', '_rc');-->
<!---->
<!--    _rc('create', 'RC-96552641146-2');-->
<!--    _rc('send', 'pageView');-->
<!--</script>-->
<!— Yandex.Metrika counter —>
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter46128996 = new Ya.Metrika({
                    id: 46128996,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/46128996" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!— /Yandex.Metrika counter —>