<?php
  // crypt() 函数返回使用 DES、Blowfish 或 MD5 算法加密的字符串。
  $str = 'Hello PHP!I am learning you.';
  echo $str.crypt($str, 'aa'), '<br/>';
?>