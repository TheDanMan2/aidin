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
        <br>
        <br>
        <h1 align="center"><b>Выберите сервер</b></h1>
        <ul id="hrr">
            <li>
                <form action="reg_alpha.php">
                    <button id="color" class="ots" class="ServerButton" title="Альфа" class="GeneralButton" type="submit" autofocus ><b> Альфа </b></button>
                </form>
            </li>
            <li>
                <form action="reg_bravo.php">
                    <button id="color" class="ServerButton" title="Браво" class="GeneralButton" type="submit" autofocus ><b> Браво </b></button>
                </form>
            </li>
            <li>
                <form action="reg_charli.php">
                    <button id="color" class="ServerButton" title="Чарли" class="GeneralButton" type="submit" autofocus ><b> Чарли </b></button>
                </form>
            </li>
        </ul>