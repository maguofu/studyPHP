<?php
  // array_map() 函数将用户自定义函数作用到数组中的每个值上，并返回用户自定义函数作用后的带有新的值的数组。
  $arr = array(
    'a' => 2,
    'b' => 3,
    'c' => 4,
    'd' => 5
  );
  function addOne($argu) {
    return $argu + 1;
  };
  print_r(array_map('addOne',$arr));