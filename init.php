<?php

session_start();
$hostname="localhost";
$username="root";
$password="root";
$dbname="up2";

$db_handler=mysqli_connect($hostname,$username, $password) or die ("Не удается подключиться к базе данных!");
mysqli_select_db($db_handler,$dbname) or die ("Ошибка выбора базы данных!");
