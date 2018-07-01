<?php
  // join()方法一样
  // explode() 函数把字符串打散为数组。 返回值是打散后的数组
  // 注释："separator" 参数不能是一个空字符串。
  // 注释：该函数是二进制安全的。
  $str = 'Hello PHP! I am learning you.';
  print_r(explode(' ',$str));
?>