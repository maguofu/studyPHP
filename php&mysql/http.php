<?php

  $link = new mysqli('localhost','root', '123456', 'mydb');
  if(!$link->errno){
    $sql = 'select * from student where id=3';
    $result = $link->query($sql);
    $row = $result->fetch_assoc();
    echo json_encode($row);
  }else{
    print_r('link failed' . $link->connect_error . '<br/>');
  }
  $link->close();