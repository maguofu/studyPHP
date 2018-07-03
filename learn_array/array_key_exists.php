<?php
  // array_key_exists() 函数检查某个数组中是否存在指定的键名，如果键名存在则返回 true，如果键名不存在则返回 false。
  $arr = array(
    'key1' => 'value',
    
  );
  print_r(array_key_exists('key2',$arr));
  echo '<br/>';
?>