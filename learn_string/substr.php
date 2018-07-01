<?php
  // substr() 函数返回字符串的一部分。
  // 注释：如果 start 参数是负数且 length 小于或等于 start，则 length 为 0。
  $str = 'Hello PHP!I am learning you.';
  print_r(substr($str, 1, 6));
?>