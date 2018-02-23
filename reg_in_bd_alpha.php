<?php

error_reporting(-1);
header("Content-Type: text/html; charset=utf-8");

if (isset($_POST["name"]) && isset($_POST["nickname"]) && isset($_POST["rank"]) && isset($_POST["years"])) {


$name = $_POST["name"];
$nickname = $_POST["nickname"];
$rank = $_POST["rank"];
$years = $_POST["years"];

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_table = "users_alpha";

$db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");

mysql_select_db("reg",$db);

mysql_query("SET NAMES 'utf8'",$db);

$result = mysql_query("INSERT INTO users_alpha (name,nickname,rank,years) VALUES ('$name','$nickname','$rank','$years')");


mysql_close();

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Помощь мартышкам</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Refresh" content="7; URL=http://sasisachka/public_queue.php">
</head>
<body>
    <div id="header">

        <h1 align="center" title="Проведём тебе спецуху">
            Информация занесена в<p class="warning">Базу Данных!
        </h1>
        <br>
        <h2 align="center"><b>А теперь подожди 5 секундочек</b></h2>
</body>