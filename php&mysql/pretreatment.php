<?php

  $link = new mysqli('localhost', 'root', '123456', 'mydb');
  
  dump($link, '***********');

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
    print_r('link success');
  }else{
    print_r('link faild' . $link->connect_error);
  }

  //预处理 ?是标记
  $query = 'insert into student (name, sex, age, class, grade, address) values (?, ?, ?, ?, ?, ?)';
  $link->prepare($query);

  //绑定参数
  $link->bindParam('ssiiss', $name, $sex, $age, $class, $grade, $address);

  // 设置参数并执行
  $name = 'wanger';
  $sex = 'boy';
  $age = 18;
  $class = 6;
  $grade = 'five';
  $address = 'beijing haidian xierqi';
  $link->execute();



  print_r('new records created successfully');
  $link->close();

