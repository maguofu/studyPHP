<?php
  // array_rand() 函数返回数组中的一个随机键名，或者如果指定函数返回键名不只一个，则返回一个包含随机键名的数组。
  $arr = array(
    'first' => 1,
    'second' => 2,
    'third' => 3,
    'fourth' => 4
  );
  print_r(array_rand($arr,2));