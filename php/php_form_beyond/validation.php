<?php

// $_POSTの連想配列が入ってくる
function validation($request){

  $errors = [];
  if(empty($request['your_name'])){
    $errors[] = '氏名は必須です';
  }

  return $errors;

}

?>