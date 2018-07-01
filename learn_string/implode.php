<?php
  // implode() 函数返回一个由数组元素组合成的字符串。
  // 注释：implode() 函数接受两种参数顺序。但是由于历史原因，explode() 是不行的，您必须保证 separator 参数在 string 参数之前才行。
  // 注释：implode() 函数的 separator 参数是可选的。但是为了向后兼容，推荐您使用使用两个参数。
  // 注释：该函数是二进制安全的。
  // 相关函数：explode() 函数用自定义分隔符把字符串打散为数组。
  $arr = array('a', 12, true, null, 'bb');
  print_r(implode($arr));
?>