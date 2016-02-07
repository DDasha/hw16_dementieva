<?php include "variables/variables.php";?>
<?php $title = "home"; ?>
<?php include('templates/header.php');?>
<main class="m-page">

    <div class="main">
        <div class="container">
            <img src="images/man.png" class="man" />
            <div class="description">
                <h1>Купить продукцию сейчас</h1>

                <!--<div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="images/man.png" />
                            <p class="flex-caption">Adventurer Cheesecake Brownie</p>
                        </li>
                        <li>
                            <img src="images/man.png" />
                            <p class="flex-caption">Adventurer Lemon</p>
                        </li>
                        <li>
                            <img src="images/man.png" />
                            <p class="flex-caption">Adventurer Donut</p>
                        </li>
                        <li>
                            <img src="images/man.png" />
                            <p class="flex-caption">Adventurer Caramel</p>
                        </li>
                    </ul>
                </div>-->
                <a href="#" class="btn btn-lg button">Узнать больше <img src="images/arrow.png" /></a>
            </div>

        </div>
    </div>

    <!-- news -->

    <div class="news">
        <div class="container">
            <h2>Новости</h2>

            <div class="row">
                <div>
                    <div class="border col-xs-3"><img src="images/layer-12.png" alt="Loading..."/>
                        <p>Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"
                        </p>
                        <a href="#" class="btn btn-lg button">Подробнее </a>
                    </div>
                </div>
                <div>
                    <div class="border col-xs-3"><img src="images/layer-15.png" alt="Loading..." />
                        <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"
                        </p>
                        <a href="#" class="btn btn-lg button">Подробнее </a>
                    </div>
                </div>
                <div>
                    <div class="border col-xs-3"><img src="images/layer-17.png" alt="Loading..." />
                        <p>Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"
                        </p>
                        <a href="#" class="btn btn-lg button">Подробнее </a>
                    </div>
                </div>

                <div>
                    <div class="border col-xs-3"><img src="images/layer-19.png" alt="Loading..." />
                        <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"
                        </p>
                        <a href="#" class="btn btn-lg button">Подробнее </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- recommend -->
    <div class="recommend">
        <div class="container">
            <div class="upper">
                <h2>Я рекомендую</h2>

                <ul class="menu">
                    <li><a href="#">Соли и грязи</a></li>
                    <li><a href="#">Кремы и лосьены</a></li>
                    <li><a href="#">Парфюмерия</a></li>
                    <li><a href="#">Витамины и бады</a></li>
                    <li><a href="#">Чаи</a></li>
                </ul>
            </div>
            <div class="row">
                <div>
                    <div class="border col-xs-6"><a href="info.html"><img src="images/-1.png" alt="Loading..."/></a>
                        <h3>Шампунь ежедневного пользования</h3>
                        <p>Доктор Нонна на телеканале домашний в программе спросите повара Доктор Нонна на телеканале домашний в программе спросите повара Доктор Нонна на телеканале домашний в программе Доктор Нонна на телеканале домашний в программе...
                        </p>
                        <a href="#" class="btn btn-lg button">Купить</a>
                        <p class="price">280 грн.</p>
                    </div>
                </div>
                <div>
                    <div class="border col-xs-2"><a href="info.html"><img src="images/-2.png" alt="Loading..." /></a>
                        <p>Шампунь ежедневного пользования
                        </p>
                        <p class="price">280 грн.</p>
                    </div>
                </div>
                <div>
                    <div class="border col-xs-2"><a href="info.html"><img src="images/-3.png" alt="Loading..." /></a>
                        <p>Шампунь ежедневного пользования
                        </p>
                        <p class="price">280 грн.</p>
                    </div>
                </div>

                <div>
                    <div class="border col-xs-2"><a href="info.html"><img src="images/-4.png" alt="Loading..." /></a>
                        <p>Шампунь ежедневного пользования
                        </p>
                        <p class="price">280 грн.</p>
                    </div>
                </div>
                <div>
                    <div class="border col-xs-2"><a href="info.html"><img src="images/-2.png" alt="Loading..."/></a>
                        <p>Шампунь ежедневного пользования
                        </p>
                        <p class="price">280 грн.</p>
                    </div>
                </div>
                <div>
                    <div class="border col-xs-2"><a href="info.html"><img src="images/-3.png" alt="Loading..." /></a>
                        <p>Шампунь ежедневного пользования
                        </p>
                        <p class="price">280 грн.</p>
                    </div>
                </div>
                <div>
                    <div class="border col-xs-2"><a href="info.html"><img src="images/-4.png" alt="Loading..." /></a>
                        <p>Шампунь ежедневного пользования
                        </p>
                        <p class="price">280 грн.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- tv -->
    <div class="tv">
        <div class="container">
            <h2>Телеканал Теледом</h2>
            <div class="row">
                <div>
                    <div class="border col-xs-6">
                        <div class="main-video">
                            <!--<button onclick="playPause()">Play</button>-->
                            <video id="video1"  controls>
                                <source src="videos/example-video.mp4" type="video/mp4">
                                <source src="#" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                            <!--<iframe src="https://www.youtube.com/embed/gEPmA3USJdI" width="715" height="447" frameborder="0" allowfullscreen></iframe>-->
                        </div>
                    </div>
                </div>
                <div>
                    <div class="border col-xs-6">
                        <div class="small-video">
                            <!--<button onclick="playPause()">Play</button>-->
                            <video id="video1"  controls>
                                <source src="videos/example-video.mp4" type="video/mp4">
                                <source src="#" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="small-video">
                            <!--<button onclick="playPause()">Play</button>-->
                            <video id="video1"  controls>
                                <source src="videos/example-video.mp4" type="video/mp4">
                                <source src="#" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="small-video">
                            <!--<button onclick="playPause()">Play</button>-->
                            <video id="video1"  controls>
                                <source src="videos/example-video.mp4" type="video/mp4">
                                <source src="#" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="small-video">
                            <!--<button onclick="playPause()">Play</button>-->
                            <video id="video1"  controls>
                                <source src="videos/example-video.mp4" type="video/mp4">
                                <source src="#" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row video-news">
                <div class="border col-xs-6">
                    <h3>Новые видео</h3>
                    <ul>
                        <li><a href="#">Шампунь ежедневного пользования  (16:54)</a></li>
                        <li><a href="#">ПРЕМЬЕРА! Ева Бушмина - Религия  (05:14)</a></li>
                        <li><a href="#">Анжелика Варум - Я Всегда С Тобой (Official Video)</a></li>
                    </ul>
                </div>
                <div class="border col-xs-6">
                    <h3>Популярные</h3>
                    <ul>
                        <li><a href="#">Шампунь ежедневного пользования  (16:54)</a></li>
                        <li><a href="#">ПРЕМЬЕРА! Ева Бушмина - Религия  (05:14)</a></li>
                        <li><a href="#">Анжелика Варум - Я Всегда С Тобой (Official Video)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- goal -->
    <div class="goal">
        <div class="container">
            <div class="big-man">
                <img src="images/big-man.png">
            </div>
            <div class="description">
                <h2>Цель мойей жизни - делать людей счастливыми</h2>
                <p>В бизнес компании Dr. Nona пришел на успех своей жены Ольги, которая доказала мне что даже находясь в декретном
                    отпуске и гуляя с маленьким ребенком на улице за один месяц можно заработать в два раза больше чем моя зарплата
                    в милиции. Позже я на этот бизнес посмотрел серьезнее и увидел себя в нем. Это дело для серьезных и амбициозных
                    людей, которые хотят изменить свою жизнь. 27 декабря 2007 года уволился из МВД и теперь сотрудничаю ...</p>
                <a href="#" class="details">Узнайте подробнее</a>
                <div class="social">
                    <a href="#" ><img src="images/youtube.png" /></a>
                    <a href="#" ><img src="images/flickr.png" /></a>
                    <a href="#" ><img src="images/vk.png" /></a>
                    <a href="#" ><img src="images/ok.png" /></a>
                    <a href="#" ><img src="images/fb.png" /></a>
                    <a href="#" ><img src="images/twitter.png" /></a>
                </div>
            </div>
        </div>
    </div>


    <!-- partners -->
    <div class="partners">
        <div class="container">
            <h2>Мои партнеры по бизнесу</h2>
            <div class="row partners-description">
                <div class="border col-xs-3">
                    <img src="images/partner1.png" alt="Loading..." />
                    <p class="text-bold">Диорнева Татьяна</p>
                    <p>Директор</p>
                    <a href="#" class="city">Мариуполь</a>
                    <div class="social">
                        <a href="#" ><img src="images/vk.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/ok.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/fb.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/twitter.png" class="small-icon" /></a>
                    </div>
                </div>
                <div class="border col-xs-3">
                    <img src="images/partner2.png" alt="Loading..." />
                    <p class="text-bold">Проценко Мария</p>
                    <p>Директор</p>
                    <a href="#" class="city">Донецк</a>
                    <div class="social">
                        <a href="#" ><img src="images/vk.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/ok.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/fb.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/twitter.png" class="small-icon" /></a>
                    </div>
                </div>
                <div class="border col-xs-3">
                    <img src="images/partner1.png" alt="Loading..." />
                    <p class="text-bold">Проценко Мария</p>
                    <p>Директор</p>
                    <a href="#" class="city">Донецк</a>
                    <div class="social">
                        <a href="#" ><img src="images/vk.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/ok.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/fb.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/twitter.png" class="small-icon" /></a>
                    </div>
                </div>
                <div class="border col-xs-3">
                    <img src="images/partner2.png" alt="Loading..." />
                    <p class="text-bold">Проценко Мария</p>
                    <p>Директор</p>
                    <a href="#" class="city">Донецк</a>
                    <div class="social">
                        <a href="#" ><img src="images/vk.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/ok.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/fb.png" class="small-icon" /></a>
                        <a href="#" ><img src="images/twitter.png" class="small-icon" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- join -->
    <div class="join">
        <div class="container">
            <h2>Добро пожаловать в команду</h2>
            <form>
                <input class="input" type="text" id="name" placeholder="Ваше имя">
                <input class="input" type="tel" id="phone" placeholder="Телефон">
                <input class="input" type="email" id="email" placeholder="E-mail адрес">
                <input class="button" type="submit" value="Присоединяйтесь">
            </form>
            <a href="#">Узнайте подробнее почему выгодно сотрудничать с нами и быть в нашей команде</a>
        </div>
    </div>
</main>
<?php include("templates/footer.php"); ?>
