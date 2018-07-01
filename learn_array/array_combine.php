<?php
  // array_combine() 函数通过合并两个数组来创建一个新数组，其中的一个数组元素为键名，另一个数组的元素为键值。
  // 注释：键名数组和键值数组的元素个数必须相同！
  // array_combine(keys,values); 
  // keys   必需。规定数组的键名。
  // values 必需。规定数组的键值。
  $fname=array("Peter","Ben","Joe");
  $age=array("35","37","43");
  print_r(array_combine($fname,$age));
?>