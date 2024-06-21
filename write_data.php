<?php
// Проверка наличия данных в $_POST
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['feedback'])) {
    // Получение данных из формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    // Дополнительная информация
    $date_time = date('Y-m-d H:i:s'); // Текущая дата и время
    $ip_address = $_SERVER['REMOTE_ADDR']; // IP-адрес узла
    $user_agent = $_SERVER['HTTP_USER_AGENT']; // Информация о клиенте

    // Формирование строки для записи в файл
    $data_to_write = "Дата и время: $date_time\nIP-адрес: $ip_address\nИнформация о клиенте: $user_agent\n\nИмя: $name\nEmail: $email\nОтзыв: $feedback\n\n";

    // Открытие файла для добавления данных в конец с проверкой успешности открытия
    $file = fopen('data_data.txt', 'a');
    if ($file) {
        // Запись данных в файл с проверкой успешности записи
        if (fwrite($file, $data_to_write)) {
            echo "Данные успешно сохранены в файл data_data.txt.";
        } else {
            echo "Ошибка при записи данных в файл.";
        }
        // Закрытие файла
        fclose($file);
    } else {
        echo "Ошибка при открытии файла для записи.";
    }
} else {
    echo "Пожалуйста, заполните все поля формы.";
}
?>