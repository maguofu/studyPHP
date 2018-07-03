<?php
  // array_diff_assoc()
  // array_diff_assoc() 函数用于比较两个（或更多个）数组的键名和键值 ，并返回差集。
  // 该函数比较两个（或更多个）数组的键名和键值，并返回一个差集数组，该数组包括了所有在被比较的数组（array1）中，但是不在任何其他参数数组（array2 或 array3 等等）中的键名和键值。  
  $arr1 = array('a'=>'red','b'=>'green','c'=>'black','d'=>'yellow');
  $arr2 = array('a'=>'red','b'=>'pink','f'=>'black','d'=>'yellow');
  $arr3 = array(
    array(1,2,3),
    array(3,4,5)
  );
  $arr4 = array(
    array(1,2,3),
    array(3,4,6)
  );
  print_r(array_diff_assoc($arr1,$arr2));
  print_r($arr3[0][1]);
?>