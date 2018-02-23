<?php
    error_reporting(-1);
    header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Информация</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header">
        <h1 align="center" title="Информация" > Информация </h1>

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

    	<ul>
    		<li><h2 align="center" class="info"><b>Обязательно знать <a href="https://www.youtube.com/watch?v=sAHhUXm6hFo" class="warning">тактику прохода!</a></b></h2></li>
    		<br>
			<li><b>Иметь <b class="warning">Микрофон</b> и <a target="_blank" href="http://teamspeak-ru.ru/"><b class="warning">TeamSpeak</b></a><b> " ts1.ga-voice.ru:13500 "</b></b></li>
    		<br>
    		<li><b>Знать где <b class="warning">лево</b> и где <b class="warning">право!</b></b></li>
    		<br>
    		<li><b>Не бегать перед прицелом <b class="warning">тимейтов!</b></b></li>
    		<br>
    		<li><b>Снять скины!</b></li>
    		<br>
    		<li><b><b class="warning">Иметь</b> 10 знаков воскрешения!</b></li>
    		<br>
    		<li><b><b class="warning">Снаряжение</b> : Шлем против слеп ( магма или коронный ), боевой бронежилет, перчатки (легкие или кевларовые ); Ботинки ( армейские , коронные...15% рывка );</b></li>
    		<br>
    		<li><b><b class="warning">Оружие</b> : Дробовик с дозарядом и дальностью от 6 метров (коронный мозберг или UTAS); Пистолет Walter P99 или SIG Sauer P226;</b></li>
    		<br>
    		<li><b><b class="warning">Нож</b> : Tanto survival;</b></li>
    		<br>
    		<li><b><b class="warning">Дефибрилятор</b> : Варбаксовый(с повышенным радиусом действия);</b></li>
    		<br>
    		<li><b><b class="warning">Аптечка</b> : Только не стандартная.</b></li>
    		<br>
    		<li><b><b class="warning">Карманы</b> : 2 - осколочная граната; 3 - светошумовая граната; 4 - синий дым; 5 - желтый дым.</b></li>
    		<br>
    		<h3 align="center"><b class="warning">Описание попытки</b></h3>
    		<li><b>Если собирается состав из 4 игроков, то они могут вас <b class="warning">попробовать</b> провести вне очереди! <b class="warning">Дается 1 попытка</b>, если вы сливаите, ваш ноль - ваша проблема, тима старается, ошибки случаются. Если вся команда умирает <b class="warning">до СЭДОВ</b>, то вам дается <b class="warning">вторая</b> попытка. Если <b class="warning">после СЭДОВ, то ваша попытка исчерпана!</b></b></li>
    		<br>
    		<br>
    		<li><b>По всем вопросам в ВК <a target="_blank" href="https://vk.com/id241984411" class="warning">Алексей Петров</a></b></li>
    		<br>
    		<li><b>Так же у нас есть группа ВК, <a target="_blank" href="https://vk.com/arnywarface" class="warning">Подписывайтесь!</a></b></li>
    	</ul>
    </div>
</body>
</html>