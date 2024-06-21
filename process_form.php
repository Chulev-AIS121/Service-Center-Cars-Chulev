<?php
header('Content-Type: application/json');

// Подключение к базе данных SQLite
$db = new SQLite3('appointments.db');
$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['date']) && isset($_POST['time']) && isset($_POST['phone']) && isset($_POST['services'])) {
        $date = $_POST['date'];
        $time = $_POST['time'];
        $phone = $_POST['phone'];
        $services = $_POST['services'];

        $stmt = $db->prepare('INSERT INTO client (date, time, phone, services) VALUES (:date, :time, :phone, :services)');
        $stmt->bindValue(':date', $date, SQLITE3_TEXT);
        $stmt->bindValue(':time', $time, SQLITE3_TEXT);
        $stmt->bindValue(':phone', $phone, SQLITE3_TEXT);
        $stmt->bindValue(':services', $services, SQLITE3_TEXT);

        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = "Данные успешно сохранены!";
        } else {
            $response['success'] = false;
            $response['message'] = "Ошибка при сохранении данных.";
        }
    } else {
        $response['success'] = false;
        $response['message'] = "Не все поля были заполнены. Пожалуйста, заполните все поля и повторите попытку.";
    }
} else {
    $response['success'] = false;
    $response['message'] = "Доступ запрещен.";
}

echo json_encode($response);
$db->close();
?>


