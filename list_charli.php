<?php
    error_reporting(-1);
    header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Очередь</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header">
        <h1 align="center" title="Очередь" > Очередь </h1>

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

                 <?php

        mysql_connect("localhost", "root", "") or die (mysql_error ());

        mysql_select_db("reg") or die(mysql_error());

            $strSQL = "SELECT * FROM users_charli";

            $rs = mysql_query($strSQL);

            while($row = mysql_fetch_array($rs)) {

       

        

  echo "<h1 align='center'><b>Очередь сервера <b class='warning'>Чарли</b></b></h1>
<table width='80%' align='center' border='2'>
   
   <br>
   <tr>
    <th><b>Имя</b></th>
    <th><b>Игровой ник</b></th>
    <th><b>Ранг</b></th>
    <th><b>Возраст</b></th>

<tr><td><b>" . $row['name'] . "</b></td><td><b>" . $row['nickname'] . "</b></td><td><b>" . $row['rank'] . "</b></td><td><b>" . $row['years'] . "</b></td></tr>
  </table>";

    };

    mysql_close();

    ?> 