<?php
// Получаем данные из формы
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Получаем текущую дату и время
$currentDateTime = date('Y-m-d H:i:s');

// Получаем IP-адрес узла
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Получаем информацию о клиенте
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Формируем строку для записи в файл
$data = "Дата и время: $currentDateTime\nIP-адрес: $ipAddress\nИмя: $name\nEmail: $email\nОтзыв: $feedback\n\n";

// Открываем файл для добавления данных в конец
$file = fopen('data_data.txt', 'a');

// Записываем данные в файл
fwrite($file, $data);

// Закрываем файл
fclose($file);

echo "Данные успешно сохранены в файл data_data.txt.";

// Перенаправляем пользователя на файл read_data.php
header("Location: read_data.php");
exit;
?>
