<?php
$db = new SQLite3('appointments.db');
$db->exec('CREATE TABLE IF NOT EXISTS appointments (id INTEGER PRIMARY KEY AUTOINCREMENT, date TEXT, time TEXT, phone TEXT, services TEXT)');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $phone = $_POST['phone'];
    $services = implode(', ', $_POST['services']);

    $stmt = $db->prepare('INSERT INTO appointments (date, time, phone, services) VALUES (:date, :time, :phone, :services)');
    $stmt->bindValue(':date', $date, SQLITE3_TEXT);
    $stmt->bindValue(':time', $time, SQLITE3_TEXT);
    $stmt->bindValue(':phone', $phone, SQLITE3_TEXT);
    $stmt->bindValue(':services', $services, SQLITE3_TEXT);
    $stmt->execute();

    echo 'Данные успешно сохранены в базе данных!';
}
?>