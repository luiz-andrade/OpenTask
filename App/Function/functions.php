<?php
/*
Return current DateTime
*/
function getCurrentDate(string $format = "Y-m-d H:i:s"){
  return date($format);
}

function passwordHash($pass){
  return password_hash($pass, PASSWORD_DEFAULT);
}

//Show debug element
function debug($element){
  echo "<pre>";
  print_r($element);
  echo "</pre>";
}

?>