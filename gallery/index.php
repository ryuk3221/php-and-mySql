<?php
require 'modules/data.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    img {
      display: block;
      width: 600px;
      margin-bottom: 40px;
    }
  </style>
  <title>Галлерея</title>
</head>
<body>
  <h1>Галерия тату-эскизов</h1>
  <section>
    <?php
    $len_arr = count($arr_images);
    for($i = 0; $i < $len_arr; $i++) {
    ?>
    <a href='./item.php?index=<?php echo $i?>'>
      <img src='<?php echo $arr_images[$i]["src"]?>' title='<?php echo $arr_images[$i]["desc"]?>'>
    </a>
    <?php } ?>
    
  </section>
</body>
</html>