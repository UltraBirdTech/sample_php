<?php

$target = 'valid target';

if($target == !isValid($target)) {
  echo 'true';
} else {
  echo 'false';
}

/**
* 何かしらの値（メールアドレスや電話番号）の値が正当か確認するメソッド 
*/
function isValid($target) {
  return true; // 実際は$targetの正当性を検証してtrue or false
}