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

  //处理获取的数据
  function echoData($arr){
    $echoDataArr = array();
    foreach($arr as $i => $value){
      $obj = array();
      foreach($value as $j => $subValue){
        array_push($obj, $subValue);
      }
      array_push($echoDataArr, $obj);
    }
    return $echoDataArr;
  }

  if(!$link->errno){
    print_r('link success <br/>');
  }else{
    print_r('link failed' . $link->connect_error . '<br/>');
  }

  $sql = 'select * from student';
  $result = $link->query($sql);
  $row = $result->fetch_all();
  dump($row,'=====');


  if($result->num_rows > 0){
    
  }else{
    print_r('no records <br/>');
  }

  $link->close();




  
// fetch_all()	        抓取所有的结果行并且以关联数据，数值索引数组，或者两者皆有的方式返回结果集。
// fetch_array()      	以一个关联数组，数值索引数组，或者两者皆有的方式抓取一行结果。
// fetch_object()       以对象返回结果集的当前行。
// fetch_row()	        以枚举数组方式返回一行结果
// fetch_assoc()	      以一个关联数组方式抓取一行结果。
// fetch_field_direct()	以对象返回结果集中单字段的元数据。
// fetch_field()	      以对象返回结果集中的列信息。
// fetch_fields()	      以对象数组返回代表结果集中的列信息。



