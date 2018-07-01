<?php
  // chunk_split() 函数把字符串分割为一连串更小的部分。
  // 注释：该函数不改变原始字符串。
  $str = 'Hello PHP!I am learning you.';
  $str2 = chunk_split($str, 2);
  echo $str2, '<br/>';
?>