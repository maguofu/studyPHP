<?php
  // array_chunk() 函数把一个数组分割为新的数组块。
  // array_chunk(array,size,preserve_keys); 
  // array        必需。规定要使用的数组。
  // size         必需。一个整数，规定每个新数组块包含多少个元素。
  // preserve_key 可选。可能的值：true - 保留原始数组中的键名。false - 默认。每个新数组块使用从零开始的索引。
  $arr = array(1,2,3,4,5);
  print_r(array_chunk($arr, 2));
?>