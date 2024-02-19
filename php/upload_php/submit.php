<?php
$file = $_FILES['picture'];
$success = move_uploaded_file($file['tmp_name'],$file['name']);

if($success){
  echo '成功しました';
} else {
  echo '失敗です';
}