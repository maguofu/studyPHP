<?php
  // array_intersect() 函数用于比较两个（或更多个）数组的键值，并返回交集。
  // 该函数比较两个（或更多个）数组的键值，并返回一个交集数组，该数组包括了所有在被比较的数组（array1）中，同时也在任何其他参数数组（array2 或 array3 等等）中的键值。
  $arr1 = array('a'=>'a','g'=>'b','c'=>'c','d'=>'d');
  $arr2 = array('a'=>'a','b'=>'b','c'=>'2','d'=>'5');
  print_r(array_intersect($arr1,$arr2));
  echo '<br/>'

  // array_intersect_assoc() 函数用于比较两个（或更多个）数组的键名和键值，并返回交集。
  // 该函数比较两个（或更多个）数组的键名和键值，并返回一个交集数组，该数组包括了所有在被比较的数组（array1）中，同时也在任何其他参数数组（array2 或 array3 等等）中的键名和键值。
  // print_r(array_intersect_assoc($arr1,$arr2));
?>