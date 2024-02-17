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
</body>

</html>