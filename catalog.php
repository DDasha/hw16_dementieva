<?php include "variables/variables.php";?>
<?php include('templates/header.php');?>

    <main>
        <div class="catalog-accordion">
            <div class="container">
                <h2>Каталог</h2>
                <div class="accordion">
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-1">Соли и грязи</a>

                        <div id="accordion-1" class="accordion-section-content">
                            <?php
                            echo '<ul>';
                            foreach($catalog as $item) {
                                echo '<li><a href="'.$item['url'].'" ';
                                echo '>'.$item['title'].'</a></li>';
                                if( isset($item['children']) ){
                                    echo "<ul class='dr-menu'>";
                                    foreach($item['children'] as $child) {
                                        echo "<li><a href=".$child['url'].">".$child['title']."</a></li>";
                                    }
                                    echo "</ul>";
                                }
                                echo "</li>";
                            };
                            echo '</ul>';
                            ?>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-1">Кремы и лосьены</a>

                        <div id="accordion-2" class="accordion-section-content">
                            <?php
                            echo '<ul>';
                            foreach($catalog as $item) {
                                echo '<li><a href="'.$item['url'].'" ';
                                echo '>'.$item['title'].'</a></li>';
                                if( isset($item['children']) ){
                                    echo "<ul class='dr-menu'>";
                                    foreach($item['children'] as $child) {
                                        echo "<li><a href=".$child['url'].">".$child['title']."</a></li>";
                                    }
                                    echo "</ul>";
                                }
                                echo "</li>";
                            };
                            echo '</ul>';
                            ?>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->

                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-1">Парфюмерия</a>

                        <div id="accordion-3" class="accordion-section-content">
                            <?php
                            echo '<ul>';
                            foreach($catalog as $item) {
                                echo '<li><a href="'.$item['url'].'" ';
                                echo '>'.$item['title'].'</a></li>';
                                if( isset($item['children']) ){
                                    echo "<ul class='dr-menu'>";
                                    foreach($item['children'] as $child) {
                                        echo "<li><a href=".$child['url'].">".$child['title']."</a></li>";
                                    }
                                    echo "</ul>";
                                }
                                echo "</li>";
                            };
                            echo '</ul>';
                            ?>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->

                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-1">Витамины и бады </a>

                        <div id="accordion-4" class="accordion-section-content">
                            <?php
                            echo '<ul>';
                            foreach($catalog as $item) {
                                echo '<li><a href="'.$item['url'].'" ';
                                echo '>'.$item['title'].'</a></li>';
                                if( isset($item['children']) ){
                                    echo "<ul class='dr-menu'>";
                                    foreach($item['children'] as $child) {
                                        echo "<li><a href=".$child['url'].">".$child['title']."</a></li>";
                                    }
                                    echo "</ul>";
                                }
                                echo "</li>";
                            };
                            echo '</ul>';
                            ?>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->

                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-1">Чаи</a>

                        <div id="accordion-5" class="accordion-section-content">
                            <?php
                            echo '<ul>';
                            foreach($catalog as $item) {
                                echo '<li><a href="'.$item['url'].'" ';
                                echo '>'.$item['title'].'</a></li>';
                                if( isset($item['children']) ){
                                    echo "<ul class='dr-menu'>";
                                    foreach($item['children'] as $child) {
                                        echo "<li><a href=".$child['url'].">".$child['title']."</a></li>";
                                    }
                                    echo "</ul>";
                                }
                                echo "</li>";
                            };
                            echo '</ul>';
                            ?>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                </div><!--end .accordion-->
            </div>
        </div>







        <!-- catalog -->
        <div class="catalog-main">
            <div class="container">
                <div class="menu catalog-menu">
                    <ul>
                        <li>Новинки</li>
                        <li>Акции</li>
                        <li>Я рекомендую</li>
                    </ul>
                </div>

                <div class="catalog">
                    <div class="row team-description">
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                        <div class="border col-xs-4">
                            <img src="images/product.png" alt="Loading..." />
                            <p>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</p>
                            <p class="price">280 грн.</p>
                            <a href="#">Купить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <!-- watched -->
        <div class="watched">
            <div class="container">
                <h2>Вы смотрели</h2>
                <div class="list">
                    <div class="first">
                        <img src="images/product.png" alt="Loading..." />
                        <p>Шампунь ежедневного пользование</p>
                        <p class="price">280 грн.</p>
                    </div>
                    <div class="second">
                        <img src="images/product.png" alt="Loading..." />
                        <p>Шампунь ежедневного пользование</p>
                        <p class="price">280 грн.</p>
                    </div>
                    <div class="third">
                        <img src="images/product.png" alt="Loading..." />
                        <p>Шампунь ежедневного пользование</p>
                        <p class="price">280 грн.</p>
                    </div>
                    <div class="fourth">
                        <img src="images/product.png" alt="Loading..." />
                        <p>Шампунь ежедневного пользование</p>
                        <p class="price">280 грн.</p>
                    </div>
                    <div class="fifth">
                        <img src="images/product.png" alt="Loading..." />
                        <p>Шампунь ежедневного пользование</p>
                        <p class="price">280 грн.</p>
                    </div>
                </div>
            </div>
        </div>


    </main>
<?php include("templates/footer.php"); ?>