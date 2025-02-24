<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./font/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>

    <title>Зоопарк</title>
</head>

<body>
    <header id="header">
        <nav class="top">
            <div class="logo">
                <img src="./img/Лого.png" alt="">
                <h1>Живой<br> мир</h1>
            </div>
            <div class="button">
                <ul>
                    <a href="">Главная</a>
                    <li><a href="./services.php">Услуги</a></li>
                    <li><a href="./Animal_catalog.php">Каталог животных</a></li>
                    <?php
                    if (isset($_SESSION['autorized'])) {
                    ?>
                        <a href="./Personal_Account.php">Личный кабинет</a>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <form action="autoriseid.php">
                <?php
                if (!isset($_SESSION['autorized'])) {
                ?>
                    <a href="#">Регистрация</a>
                <?php
                }
                ?>
                <br>
                <br>
                <?php
                if (!isset($_SESSION['autorized'])) {
                ?>
                    <a href="autoriseid.php">Авторизация</a>
                <?php
                } else {
                    echo "<p align='right' class='serch'>Привет: " . $_SESSION['FIO'] . "</p>";
                    echo "<a href='logout.php' class='serch'><p align='right'>Выход</p></a>";
                }
                ?>
            </form>
        </nav>
    </header>
    <div class="info">
        <img src="./img/pngtree-colorful-parrot-flying-png-image_14822296.png" alt="" class="popugai_one">
        <div class="animal_images">
            <div>
                <img src="./img/1640187992_1-koshka-top-p-tigr-v-trave-1.jpg">
            </div>
            <br>
            <div class="text_animal">
                <h1>Что такое зоопарк?</h1>
                <br>
                <p>Зоопарк, или зоологический сад, - это место, где невероятное разнообразие диких животных живет бок о бок, в вольерах, предназначенных для открытий и удивления.
                    <br>Задачи зоопарка - сохранение, исследование и образование - идеальное место для знакомства с видами животных из четырех уголков мира, от самых знакомых до самых редких.
                    <br>Это место, где можно перейти от наблюдения к обучению, а обстановка перенесет вас с одного континента на другой.
                </p>

            </div>
        </div>
        <div class="animal_images_two">
            <div class="text">
                <h1>Виды животных</h1>
                <br>
                <p>В нашем зоопарке вы найдете невероятное разнообразие животных со всего мира! <br>
                    От грациозных хищников до забавных приматов, от экзотических птиц до очаровательных рептилий – каждый найдет здесь что-то особенное. <br>
                    Мы гордимся тем, что предоставляем нашим животным комфортные условия, максимально приближенные к их естественной среде обитания.</p>
                <br>
                <form action="./Animal_catalog.php">
                    <input type="submit" value="Каталог животных" class="submit">
                </form>
            </div>
            <div class="img">
                <div class="img_two">
                    <img src="./img/олень.png">
                    <img src="./img/Foto_3_MB2_2683-Edit_export_re.jpg" class="garila">
                </div>
                <br>
                <br>
                <img src="./img/_102609291_animals7.jpg" class="img_one">
            </div>
        </div>
        <div class="animal_images_three">
            <div>
                <img src="./img/zzooo.jpg">
            </div>
            <div class="text_three">
                <h1>О нас</h1>
                <p>Наш зоопарк — это больше, чем просто место для развлечений. <br>Это место, где встречаются любовь к животным, стремление к образованию и забота об окружающей среде.
                    <br>Мы предоставляем уникальную возможность ближе познакомиться с удивительным разнообразием животного мира нашей планеты.
                </p>
                <br>
                <form action="#">
                    <input type="submit" value="Кнопка" class="submit">
                </form>
            </div>
        </div>
        <div class="animal_images_four">
            <div class="text">
                <div>
                    <h1>Запись на консультацию</h1>
                    <br>
                    <p>Вы планируете посетить наш зоопарк? Мы рады помочь вам подготовиться к незабываемому приключению! Наши специалисты с удовольствием ответят на ваши вопросы и предоставят всю необходимую информацию.</p>
                </div>
                <br>
                <br>
                <br>
                <div class="search">
                    <input type="search" name="" id="" placeholder="ФИО">
                    <input type="search" name="" id="" placeholder="Телефон">
                    <input type="search" name="" id="" placeholder="Что вы хотите узнать?">
                </div>
                <br>
                <form action="#">
                    <input type="submit" value="Кнопка" class="submit">
                </form>
            </div>
            <div class="img">
                <img src="./img/shutterstock_1614352606-1060x705.jpg" alt="">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="maps">
        <h2>Ждем вас тут</h2><br><iframe src="https://yandex.ru/map-widget/v1/?ll=59.965552%2C57.905312&mode=poi&poi%5Bpoint%5D=59.965477%2C57.904550&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D1033253081&z=17.05" width="750" height="400" frameborder="1" allowfullscreen="true" style="position:relative; border-radius: 20px;"></iframe>
    </div>
    <div class="boot">
        <a href="#header"><img src="./img/кнопка.png" alt=""></a>
    </div>
    <footer>
        <div class="social_shtuki">
            <h2>Контакты</h2>
            <a href="https://vk.com/segagrand" target="_blank" class="social"> <i class="fa fa-vk" aria-hidden="true"></i></a>
            <a href="https://t.me/KudzukiSega" target="_blank" class="social"><i class="fa fa-telegram" aria-hidden="true"></i></a>
        </div>
        <br>
        <div>
            <p>&copy; 2025 Зоопарк. Все права защищены.</p>
        </div>
    </footer>
</body>

</html>