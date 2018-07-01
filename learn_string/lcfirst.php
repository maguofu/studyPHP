<?php
  // lcfirst() 函数把字符串中的首字符转换为小写。
  // 相关函数：
  // ucfirst() - 把字符串中的首字符转换为大写。
  // ucwords() - 把字符串中每个单词的首字符转换为大写。
  // strtoupper() - 把字符串转换为大写。
  // strtolower() - 把字符串转换为小写。
  $str = 'Hello PHP!I am learning you.';
  $str2 = 'hello PHP!I am learning you.';  
  print_r(lcfirst($str));
  echo '<br/>';

  print_r(ucfirst($str2));
  echo '<br/>';
  
?>