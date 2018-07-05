<?php
  function writeName($argu,$friend) {
    echo 'My name is ' . $argu . '.<br/>My friend name is ' . $friend . '.<br/>';
  };

  function hasReturn($a,$b) {
    return $a + $b;
  };

  writeName('maguofu', 'liujiajia');
  echo hasReturn(1,4) . '<br/>';