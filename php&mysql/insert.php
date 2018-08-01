<?php

  $link = new mysqli('localhost', 'root', '123456', 'mydb');
 
  dump($link, '*********');

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

  //检测链接数据库状态，是否成功
  if(!$link->errno){
    print_r('link success<br/>');
  }else{
    print_r('link faild' . $link->connect_error);
  }

  //插入数据的sql语句
  $sql = 'insert into student (name, sex, age, class, grade, address)
          values ("xiaoyu", "woman", 24, 1, "14huasheng", "zhengzhou shi jinshui qu wenhualu 95")
          ';

  //检测数据插入状态
  if($link->query($sql) === true){
    print_r('new record create successful');
  }else{
    print_r('error' . $sql . $link->error);
  }

  $link->close;