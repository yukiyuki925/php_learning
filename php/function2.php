<?php
// 文字数のカウント
$text = 'あいうえお';
echo mb_strlen($text);

// 文字列の置換
$str = '文字列を置換します';
echo str_replace('置換','ちかん',$str);

// 指定文字列で分割
$str2 = '指定文字列で、分割します';
explode('、', $str_2);
?>