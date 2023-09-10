<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Фотогалерея</title>
</head>
<body>
  <h1>Галерея</h1>
  <?php
  require './modules/data.php';

  $item = $arr_images[$_GET["index"]];
  ?>
  <h3>Эскиз под номером <?php echo $_GET["index"] + 1 ?></h3>
  <img src='<?php echo $item["src"]?>' alt="">
  <a href="./index.php">Вернуться назад</a>
</body>
</html>