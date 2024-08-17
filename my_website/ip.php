<?php
// Получение IP-адреса посетителя
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Вывод IP-адреса с использованием HTML-тега для изменения размера шрифта
echo "<h1>Ваш IP-адрес: <span style='font-size: 24px;'>$ipAddress</span></h1>";
?>
