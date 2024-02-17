<?php
for ($i = 0; $i < 366; $i++) {
  // ダブルコーテーションの場合、中の変数を展開
  $time = strtotime("+$i day");
  $day = date('n/j(D)',$time);
  echo $day . '<br>';
}
?>