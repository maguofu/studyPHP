<?php
  // array_diff(array1,array2,array3...);
  // array_diff() 函数用于比较两个（或更多个）数组的键值，并返回差集。
  // 该函数比较两个（或更多个）数组的键值，并返回一个差集数组，该数组包括了所有在被比较的数组（array1）中，但是不在任何其他参数数组（array2 或 array3 等等）中的键值。  
  $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
  $a2=array("e"=>"red","f"=>"green","g"=>"blue");
  print_r(array_diff($a1,$a2));
?>