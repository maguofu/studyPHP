<?php

$link = new mysqli('localhost', 'root', '123456', 'mydb');

//格式化对象输出
// $vars是要格式化的目标对象
function dump($vars, $label = '', $return = false) {
  if (ini_get('html_errors')) {
    $content = "<pre>\n";
    if ($label != '') {
        $content .= "<strong>{$label} :</strong>\n";
    }
    $content .= htmlspecialchars(print_r($vars, true));
    $content .= "\n</pre>\n";
  } else {
    $content = $label . " :\n" . print_r($vars, true);
  }
  if ($return) { return $content; }
  echo $content;
  return null;
}

if(!$link->errno){
  print_r('link success <br/>');
}else{
  print_r('link failed' . $link->connect_error . '<br/>');
}

dump($link, '=============');

$sql = 'selcet * from student order by age';
$result = $link->query($sql);


$link->close();


