<?php
    error_reporting(-1);
    header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Регистрация в очереди</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header">
        <h1 align="center" title="Регистрация в очереди" > Регистрация в очереди </h1>

         <ul id="hr">
            <li>
                <form action="info.php">
                	<button title="Информация" class="GeneralButton" type="submit" autofocus><b> Информация </b></button>
                </form>
            </li>

            <li>
                <form action="public_queue.php">
                	<button title="Общая очередь" class="GeneralButton" type="submit" autofocus><b> Общая очередь </b></button>
                </form>
            </li>   
            <li>
                <form action="sign_up_to_queue.php">
                	<button title="Записаться в общую очередь" class="GeneralButton" type="submit" autofocus><b> Записаться в общую очередь </b></button>
                </form>
            </li>   
            <li>
                <form action="out_of_turn.php">
                	<button title="Вне очереди" class="GeneralButton" type="submit" autofocus><b> Вне очереди </b></button>
                </form>
            </li>  
            <li>
                <form action="index.php">
                	<button id="color" class="GeneralButton" title="Обратно" class="GeneralButton" type="submit" autofocus ><b> Обратно </b></button>
                </form>
            </li>  
        </ul>
        <br>
        <h1 align="center"><b>Заполните форму регистрации для сервера <b class="warning">"Альфа"</b></b></h1>
        <form method="POST" action="reg_in_bd_alpha.php">

            <ul>

                <li><b>Введите ваше имя: </b><input placeholder="Иван" name="name" type="text" title="Введите ваше имя"></li>
                <br>
                <li><b>Введите ваш игровой ник: </b><input placeholder="хайпожор" name="nickname" type="text" title="Введите ваш игровой ник"></li>
                <br>
                <li><b>Введите ваш возраст<input placeholder="18" name="years" type="text" title="Введите возраст"></b></li>
                <br>
                <li><b>Введите ваш ранг<input placeholder="90" name="rank" type="text" title="Введите ваш ранг"></b></li>
                <br>
                <input type="submit" value="Зарегестрироваться">

            </ul>

        </form>