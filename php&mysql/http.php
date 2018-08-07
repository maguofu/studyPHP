<?php

  $link = new mysqli('localhost','root', '123456', 'mydb');
  if(!$link->errno){
    $sql = 'select * from student';
    $result = $link->query($sql);
    $row = $result->fetch_all();
    $data = (Object) array();
    $data -> errNo = 0;
    $data -> errStr = 'success';
    $data -> list = array();
    foreach($row as $key => $value){
      $obj = (Object) array();
      $obj -> id = $value[0];
      $obj -> name = $value[1];
      $obj -> sex = $value[2];
      $obj -> age = $value[3];
      $obj -> class = $value[4];
      $obj -> grade = $value[5];
      $obj -> address = $value[6];
      array_push($data -> list, $obj);
    }
    echo json_encode($data);
  }else{
    print_r('link failed' . $link->connect_error . '<br/>');
  }


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



  $link->close();