<?php
  for($i = 0; $i < 5; $i ++){
    echo 'The number is ' . $i . '<br/>';
  };

  $arr = array(1,2,3,4);
  foreach($arr as $key => $value){
    echo '数组第' . $key . '个元素是' . $value . '<br/>';
  };

  foreach($arr as $value){
    echo '值为：' . $value . '<br/>';
  };

  while(list($key,$value) = each($arr)){
    echo '数组第' . $key . '个元素是' . $value . '<br/>';
  };