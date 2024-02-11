<?php
$postal_code = '123-4567';

// check
function check($str){
  $replaced = str_replace('-','',$str);
  $length = strlen($replaced);

    if($length === 7) {
      return true;
    }
  return false;
}

var_dump(check($postal_code));
?>