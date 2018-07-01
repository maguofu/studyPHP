<?php
  // strpos() f函数查找字符串在另一字符串中第一次出现的位置（区分大小写）。
  // 注释：strpos() 函数是区分大小写的。
  // 注释：该函数是二进制安全的。
  // 相关函数：
  // strrpos() - 查找字符串在另一字符串中最后一次出现的位置（区分大小写）
  // stripos() - 查找字符串在另一字符串中第一次出现的位置（不区分大小写）
  // strripos() -查找字符串在另一字符串中最后一次出现的位置（不区分大小写）
  $str = 'Hello PHP!I am learning you.';
  print_r(strpos($str, 'o'));
  echo '<br/>';
  print_r(strrpos($str, 'o'));
  echo('<br/>');
  print_r(stripos($str, 'i'));
  echo('<br/>');
  print_r(strripos($str, 'i'));
  echo('<br/>');
?>