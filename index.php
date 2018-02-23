<?php
    error_reporting(-1);
    header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Помощь мартышкам</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header">

        <h1 align="center" title="Проведём тебе спецуху">
            Помощь в прохождении <p class="warning">СПЕЦОПЕРАЦИЙ!</p>
        </h1>

        <br>
        <ul id="hr">
            <li>
                <form action="info.php">
                <button title="Информация" class="generalButton" type="submit" autofocus><b> Информация </b></button>
                </form>
            </li>

            <li>
                <form action="public_queue.php">
                <button title="Общая очередь" class="generalButton" type="submit" autofocus><b> Общая очередь </b></button>
                </form>
            </li>   
            <li>
                <form action="sign_up_to_queue.php">
                <button title="Записаться в общую очередь" class="generalButton" type="submit" autofocus><b> Записаться в общую очередь </b></button>
                </form>
            </li>   
            <li>
                <form action="out_of_turn.php">
                <button title="Вне очереди" class="generalButton" type="submit" autofocus><b> Вне очереди </b></button>
                </form>
            </li>   
        </ul>
        <br>
        <br>
        <h2 align="center"> Как пройти спецоперацию? </h2>
        <ul>
            <li><b>Если ты <b class="warning">уже</b> подал заявку в очередь, то ты можеть посмотреть <b class="warning">свой</b> номер в <b class="warning">очереди</b> нажав на кнопку <b class="warning"><a href="public_queue.php">"Общая очередь"</a></b></b></li>
            <br>
            <li><b>Если ты хочешь пройти спецоперацию <b class="warning">бесплатно</b>, пожервовав временем на ожидайние своей очереди, то просто нажми на кнопку <a href="sign_up_to_queue.php">"Записаться в общую очередь"</a></b></li>
            <br>
            <li><b>Если хочешь посмотеть <b class="warning">условия</b> помощи для прохождения спецоперации <b class="warning">бесплатно</b> или <b class="warning">без очереди</b>, то просто нажми на кнопку <b><a href="info.php">"Информация"</a></b></b></li>
            <br>
            <li><b>Если у тебя есть <b class="warning">деньги</b>, и ты не хочешь <b class="warning">тратить время на гигантскую очередь</b>, то подай заявку в <b class="warning"><a href="out_of_turn.php">"Платную очередь"</a></b></b></li>
        </ul>
            <img id="img" src="img/1.jpg">
    </div>
</body>
</html>