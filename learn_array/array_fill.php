<?php
  // array_fill() 函数用给定的键值填充数组。
  //  array_fill(index,number,value);
  // index	必需。规定返回数组的起始索引。
  // number	必需。规定填充的元素的数量，其值必须大于 0。
  // value	必需。规定用于填充数组的键值。
  $a1=array_fill(3,1,"blue");
  print_r($a1);
  echo '<br/>';

  // array_fill_keys() 函数用给定的指定键名的键值填充数组。
  // array_fill_keys(keys,value);
  // keys	必需。数组，其值将被用于填充数组的键名。
  // value	必需。规定用于填充数组的键值。
  $b = array('a');
  $c = array_fill_keys($b, 'red');
  print_r($c);
?>