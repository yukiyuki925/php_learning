<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php echo "\"php\"を勉強中です";
  echo '<br>'
  ?>
  <?php 
  $sum = 100 + 1050 + 200;
  echo $sum;
  echo '<br>';
  ?>
  <p>合計金額は<?php echo $sum; ?>円です</p>
  <p>税込金額は<?php echo $sum * 1.1; ?>円です</p>
  <?php 
  $today = new Datetime();
  echo '現在は' . $today->format('G時 i分 s秒') . 'です';
  echo '<br>'
  ?>

  <?php 
  for ($i = 1; $i < 31; $i++) {
    $unko =  $i / 2;
    echo $unko . "<br>";
  }
  ?>
</body>

</html>