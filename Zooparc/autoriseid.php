<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
<?php
        if (!isset($_GET['enter']))
        {
    ?>
     <form  align = "center" method="GET"><h2>Авторизация на сайте<br></h2>
        <p>Почта:</p>
        <input type="text" name="email" required value="" >
        <p>Пароль:</p>
        <input type="password" name="Pass" required><br><br>
        <input name="enter" type="submit" value="Авторизоваться">
    <?php
        }
        if (isset($_GET['email']) && isset($_GET['Pass']))
        {
            $safe_login = $_GET['email'];
            $safe_pass = $_GET['Pass'];
            $safe_pass = md5($safe_pass);
            require_once("logic.php");
            if ($line5)
            {
                $_SESSION['autorized'] = true;
                $_SESSION['email'] = $_GET['email'];
                $_SESSION['FIO'] = $line5['FIO'];
                $_SESSION['phone'] = $line5['phone'];
                $_SESSION['id'] = $line5['id'];
                header("Location: index.php");
            }
            else
            {
                
    ?> 
    <p class='Exit'>Неверный логин или пароль</p><br><br> <a href='index.php'class='Exit'><P> Назад</P></a>
    <?php
            }
        }
    ?>
</body>
</html>