<?php
session_start();
if (!empty($_POST)) {
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';
}

header('X-FRAME-OPTIONS:DENY');

function h($str) 
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// 入力、確認、完了 input.php, confirm.php, thanks.php
// input.php

$pageFlag = 0;

if (!empty($_POST['btn_confirm'])) {
  $pageFlag = 1;
}

if (!empty($_POST['btn_submit'])) {
  $pageFlag = 2;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_form</title>
</head>

<body>

  <!-- 確認画面 -->
  <?php if ($pageFlag === 1) :?>
  <?php if ($_POST['csrf'] === $_SESSION['csrfToken']): ?>
  <form method="POST" action="input.php">
    氏名
    <?php echo h($_POST['your_name']); ?>
    <br>
    メールアドレス
    <?php echo h($_POST['email']); ?>
    <br>
    <input type="submit" name="back" value="戻る">
    <input type="submit" name="btn_submit" value="送信する">
    <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
    <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
    <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']); ?>">
  </form>
  <?php endif; ?>
  <?php endif; ?>


  <!-- 完了画面 -->
  <?php if ($pageFlag === 2) :?>
  <?php if ($_POST['csrf'] === $_SESSION['csrfToken']): ?>
  送信が完了しました。

  <?php unset($_SESSION['csrfToken']); ?>
  <?php endif; ?>
  <?php endif; ?>


  <!-- 入力画面 -->
  <?php if ($pageFlag === 0) :?>
  <?php 
    if (!isset($_SESSION['csrfToken'])) {
      $csrfToken = bin2hex(random_bytes(32)); 
      $_SESSION['csrfToken'] = $csrfToken;
    }
    $token = $_SESSION['csrfToken'];
  ?>
  <form method="POST" action="input.php">
    氏名
    <input type="text" name="your_name" value="<?php if(!empty($_POST['your_name'])) echo h($_POST['your_name']); ?>">
    <br>
    メールアドレス
    <input type="email" name="email" value="<?php if(!empty($_POST['email'])) echo h($_POST['email']); ?>">
    <br>
    ホームページ
    <input type="url" name="url" value="<?php if(!empty($_POST['url'])) echo h($_POST['url']); ?>">
    <br>
    性別
    <input type="radio" name="gender" value="0">男性
    <input type="radio" name="gender" value="1">女性
    <br>
    年齢
    <select name="age">
      <option value="">選択してください</option>
      <option value="1">~19歳</option>
      <option value="2">20歳~29歳</option>
      <option value="3">30歳~39歳</option>
      <option value="4">40歳~49歳</option>
      <option value="5">50歳~59歳</option>
      <option value="6">60歳~</option>
    </select>
    <br>
    お問い合わせ
    <textarea name="contact">
      <?php if(!empty($_POST['contact'])) echo h($_POST['contact']); ?>
    </textarea>
    <br>
    <input type="checkbox" name="caution" value="1">注意事項にチェック
    <input type="submit" name="btn_confirm" value="確認する">
    <input type="hidden" name="csrf" value="<?php echo $token ?>">
  </form>
  <?php endif; ?>

</body>

</html>