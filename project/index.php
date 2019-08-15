<?php

  
  $link = new mysqli('localhost', 'root', '123456', 'mydb');

  $userName = $_POST['nameValue'];
  $psd = $_POST['padValue'];
  if ($_POST['flag'] == 1) {
    $confirmPsd = $_POST['confirmValue'];
  }

  // 插入sql
  $insertSql = 'insert into login (username, psd)
    values (' . '"' . $userName . '"' . ',' . $psd . ')';
  // 查询sql
  $checkSql = 'select psd from login where username=' . '"' . $userName . '"';
  // 返回值格式
  $res = array(
    'errNo' => 0,
    'errStr' => 'success',
    'data' => array(
      'status' => 0,
    )
  );

  if (!$link->errno) {
    if(array_key_exists('confirmValue', $_POST)){
      if($link->query($insertSql) === true){
        // status=1插入成功
        $res['data']['status'] = 1;
      }else{
        // status=2插入失败
        $res['data']['status'] = 2;
      }
    }else{
      // status=3登录成功
      // status=4登录失败
      $checkResult = $link->query($checkSql);
      print_r($checkResult);
    };
  } else {
    $res['errNo'] = 50000;
    $res['errStr'] = '数据库链接失败';
    $res['data'] = array();
  }

  print_r(json_encode($res));

  $link->close();
  die;