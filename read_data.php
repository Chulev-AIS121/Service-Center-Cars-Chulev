<?php
// Открываем файл для чтения данных
$file = fopen('data_data.txt', 'r');

// Читаем данные из файла
$data = fread($file, filesize('data_data.txt'));

// Закрываем файл
fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles_2.css">
    <title>Отзывы</title>
</head>
<body class = "body">
    <h1>Отзывы пользователей</h1>

<button onclick="location.href='INDEX.html'" class="main-link">На главную</button>

<button id="openFormButton" class="main-link">Оставить отзыв</button>
    <div id="overlay">
        <div id="formContainer">
            <button id="closeFormButton">Закрыть</button>
		<form method="post" action="data.php">
		    <input type="text" name="name" placeholder="Ваше Имя" />
		    <input type="email" name="email" placeholder="Email" /><br><br>
		    <textarea name="feedback" placeholder="Отзыв"></textarea><br>
		    <button type="submit">Отправить</button>
		</form>
        </div>
    </div>	


    <pre><?php echo $data; ?></pre>

     	 	<script src="script4_1.js"></script>

</body>
</html>