<?php
  // array_reduce() 函数发送数组中的值到用户自定义函数，并返回一个字符串。
  // 注释：如果数组是空的或者初始值未传递，该函数返回 NULL。
  $arr = array(
    'a' => array(
      1,2,3
    ),
    'b' => 2,
    'c' => 3
  );
  function myfunc($v1,$v2){
    return $v1 + $v2;
  }
  print_r(array_reduce($arr['a'],'myfunc'));