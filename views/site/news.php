<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content_block pager">
    <div class="container">
        <div class="speedbar">
            <a href="/apple/web">Главная</a>
            <i></i> <span>Новости</span>
        </div>
        <div class="name">Новости</div>
        <div class="news">
            <div class="block">
                <a href="#" alt="Скидка до 80% на аксессуары"
                   title="Скидка до 80% на аксессуары">
                    <div class="image"
                         style="background-image:url('/apple/web/uploads/news/267x210/550e1238f9ef3213fa55e823f4ce37a4.jpg')">
                        <div class="date">
                            <span> 27 </span><span> января </span><span> 2017 </span></div>
                    </div>
                </a>
                <h2><a href="#">Скидка до 80% на аксессуары</a></h2>
                <!--                <div class="date">--><!--</div>-->
                <div class="text">До конца 2017 года - скидка до 80% на аксессуары при покупке любого телефона. Все
                    подробности с большим удовольствием расскажут наши менеджеры. Торопитесь!
                </div>
                <a href="#" class="link">Подробнее</a>
            </div>
            <div class="block">
                <a href="#" alt="С новым 2017 годом" title="С новым 2017 годом">
                    <div class="image"
                         style="background-image:url('/apple/web/uploads/news/267x210/2a4cb8d053f557e34f7fd38bcd1c0d7e.jpg')">
                        <div class="date">
                            <span> 31 </span><span> декабря </span><span> 2016 </span></div>
                    </div>
                </a>
                <h2><a href="#">С новым 2017 годом</a></h2>
                <!--                <div class="date">--><!--</div>-->
                <div class="text">Год Петуха к вам в дом стучится &mdash;
                    Красивой, яркой, важной птицы.
                    Пусть год весь сказочно везет,
                    А беды все Петух склюет.

                    Накукарекает пусть счастья,
                    Любви, здоровья в одночасье.
                    И легким взмахом ярких крыльев
                    Наполнит жизнь добром и миром.

                    Хоть высоко он не летает,
                    Но пусть вас всё же окрыляет.
                    Его мы встретим всем народом
                    И дружно скажем: &laquo;С Новым...
                </div>
                <a href="#" class="link">Подробнее</a>
            </div>
            <div class="block">
                <a href="#" alt="iPhone 7 - все по новому"
                   title="iPhone 7 - все по новому">
                    <div class="image"
                         style="background-image:url('/apple/web/uploads/news/267x210/3310ea26b682c219dba489babc5fcfdc.jpg')">
                        <div class="date">
                            <span> 22 </span><span> сентября </span><span> 2016 </span></div>
                    </div>
                </a>
                <h2><a href="#">iPhone 7 - все по новому</a></h2>
                <!--                <div class="date">--><!--</div>-->
                <div class="text">2016 год &ndash; вышла новая модель Apple iPhone под номером &ldquo;7&rdquo;. iPhone 7
                    получит новый дизайн с ультратонким корпусом, который отличается от предшественника.

                    Так же, iPhone 7 работает дольше от одного заряда обновленной батареи, чем предыдущие модели айфонов
                    и обрел новую улучшенную 12-мегапиксельную камеру. Оформить предзаказ на iPhone 7 и iPhone 7 Plus в
                    Украине можно в...
                </div>
                <a href="#" class="link">Подробнее</a>
            </div>
            <div class="block">
                <a href="#" alt="С новым 2016 годом" title="С новым 2016 годом">
                    <div class="image"
                         style="background-image:url('/apple/web/uploads/news/267x210/d02c011e86e7d1e84341b6e1422ec042.jpg')">
                        <div class="date">
                            <span> 30 </span><span> декабря </span><span> 2015 </span></div>
                    </div>
                </a>
                <h2><a href="#">С новым 2016 годом</a></h2>
                <!--                <div class="date">--><!--</div>-->
                <div class="text">Пусть Новый год вновь удивит
                    Удачей, перспективами!
                    Все дни, которые придут,
                    Окажутся счастливыми!
                    Пусть споро ладятся дела,
                    И будут увлечения!
                    Живется с радостью в душе,
                    С хорошим настроением!
                </div>
                <a href="#" class="link">Подробнее</a>
            </div>
            <div class="block">
                <a href="#" alt="Супер Акция 1+1!" title="Супер Акция 1+1!">
                    <div class="image"
                         style="background-image:url('/apple/web/uploads/news/267x210/7fb1d72a9eeb423eab934b47e4276eeb.jpg')">
                        <div class="date">
                            <span> 7 </span><span> мая </span><span> 2015 </span></div>
                    </div>
                </a>
                <h2><a href="#">Супер Акция 1+1!</a></h2>
                <!--                <div class="date">--><!--</div>-->
                <div class="text">Для всех клиентов стартует новая супер акция - 1+1.

                    При заказе прозрачного силиконового чехла для любого телефона, совершенно бесплатно вы получаете
                    закаленное защитное стекло.

                    Торопитесь, предложение ограниченно!
                </div>
                <a href="#" class="link">Подробнее</a>
            </div>
            <div class="block">
                <a href="#" alt="С новым 2015 годом" title="С новым 2015 годом">
                    <div class="image"
                         style="background-image:url('/apple/web/uploads/news/267x210/25d8b079ca58e72a8e55865ecac7fb5d.jpg')">
                        <div class="date">
                            <span> 30 </span><span> декабря </span><span> 2014 </span></div>
                    </div>
                </a>
                <h2><a href="#">С новым 2015 годом</a></h2>
                <!--                <div class="date">--><!--</div>-->
                <div class="text">Мы с Новым годом поздравляем
                    Клиентов наших дорогих.
                    И вам мы искренне желаем
                    Вершин успеха золотых.

                    Пусть будут все дела удачны,
                    И прибыль ваша пусть растет.
                    Пусть будет крепкое здоровье,
                    И счастье в доме пусть живет.
                </div>
                <a href="#" class="link">Подробнее</a>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
		<?= Yii::$app->params['shopName']; ?>
        </br>
    </div>
</footer>