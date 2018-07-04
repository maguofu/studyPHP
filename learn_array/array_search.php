<?php
  // array_search() 函数在数组中搜索某个键值，并返回对应的键名。
  $arr = array(
    'a' => 3,
    'b' => '3',
    'c' => true
  );
  print_r(array_search('3',$arr,true));