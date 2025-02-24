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
    <header>
        <nav class="top">
            <div class="logo">
                <img src="./img/Лого.png" alt="">
                <h1>Живой<br> мир</h1>
            </div>
            <div class="button">
                <ul>
                    <a href="./index.php">Главная</a>
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
        <div class="animal_images">
            <h1>Услуги, которые мы предостовляем</h1>
            <p></p>
        </div>
        <br>
        <br>
        <div class="karto_tovar">
            <?php
                require_once("./logic.php");
                
                $counter = 0; // Счетчик для отслеживания позиции
                    $sql2 = "SELECT * FROM `AnimalCatalog`";
                    $result = $pdo->prepare($sql2);
                    $result->execute();
                    $line2 = $result->fetchAll();
                foreach($line as $mas) {
                    // Открываем новую строку каждые 4 элемента
                    if($counter % 4 == 0 && $counter != 0) {
                        echo '</div>
                                <br>
                                <br>
                            <div class="karto_tovar">';
                    }
                    echo' 
                    <div class="service-item">
                        <h2>'. $mas['name'] . '</h2>
                        <br>
                        <img src="./img/'. $mas['hoto_title']. '" alt="'. $mas['name']. '">
                        <p>Описание: '. $mas['ServiceText'] . '</p>
                        <p class="price">Цена: '. $mas['Price'] . ' руб.</p>
                        <p>Скидки: '. $mas['discounts'] . '</p>
                        ';
                        if(isset($_SESSION['autorized'])){
                            echo'<form method="post" action="./Purchased_Tickets.php?ed='. $mas['id'].'">
                            <input type="submit" value="Купить" class="submit">
                        </form>';
                        }
                    echo '</div>';
                    
                    $counter++;
                }
            ?>
        </div>
        <br>
        <br>
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