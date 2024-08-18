<?php
// Получение IP-адреса клиента
$client_ip = $_SERVER['REMOTE_ADDR'];

// Получение информации о клиентском браузере
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Получение заголовка, указывающего, откуда пришёл запрос (если доступно)
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Неизвестно';

// Вывод информации на экран с использованием HTML-тегов для изменения размера шрифта
echo "<h1>Ваш IP-адрес: <span style='font-size: 24px;'>$client_ip</span></h1>";
echo "<h1>Ваш браузер: <span style='font-size: 24px;'>$user_agent</span></h1>";
echo "<h1>Вы пришли с: <span style='font-size: 24px;'>$referer</span></h1>";
?>

