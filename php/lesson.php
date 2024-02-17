<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php 
  $week_name = ['日','月','火','水','木','金','土'];
  
  date_default_timezone_set('Asia/Tokyo');
  $week = date('w');
  echo $week_name[$week];
  ?>
  <?php
  $fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
  ];
  ?>

  <dl>
    <?php foreach($fruits as $english => $japanese): ?>
    <dt><?php echo $english; ?></dt>
    <dd><?php echo $japanese; ?></dd>
    <?php endforeach; ?>
  </dl>

  <?php 
  date_default_timezone_set('Asia/Tokyo');
  $time = date("G");
  ?>
  <?php if($time < 17): ?>
  <p>営業時間外です</p>
  <?php else: ?>
  <p>ようこそ</p>
  <?php endif ?>

  <?php
  $x = 0;
  if(!$x){
    echo '$x = 0';
  }
  ?>
</body>

</html>