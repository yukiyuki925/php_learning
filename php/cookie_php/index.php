<?php 
$value = '保存した値です';
setcookie('message','cookieに保存した値です',time() + 60 * 60 * 24 + 14);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cookie</title>
</head>

<body>
  <a href="page02.php">2ページ目へ</a>
</body>

</html>