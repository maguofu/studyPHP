<?php
  $arr = array(
    0 => array(1,2,4),
    1 => array(1,2,4),
    2 => array(1,2,4)
  );
  $sum = 0;
  // for($i = 0;$i < sizeof($arr); $i++){
  //   $sum += array_sum($arr[$i]);
  // }

  // foreach($arr as $key => $value){
  //   $sum += array_sum($value);
  // }

  // foreach($arr as $value){
  //   $sum += array_sum($value);
  // }

  while(list($key,$value) = each($arr)){
    $sum += array_sum($value);
  }
  print_r($sum);